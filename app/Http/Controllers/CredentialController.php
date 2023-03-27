<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Credential;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\CredentialStoreRequest;
use App\Http\Requests\CredentialUpdateRequest;

class CredentialController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('view-any', Credential::class);

        $search = $request->get('search', '');

        return view('app.credentials.index', compact( 'search'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->authorize('create', Credential::class);

        $users = User::pluck('name', 'id');

        return view('app.credentials.create', compact('users'));
    }

    /**
     * @param \App\Http\Requests\CredentialStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(CredentialStoreRequest $request)
    {
        $this->authorize('create', Credential::class);

        $validated = $request->validated();

        $credential = Credential::create($validated);

        return redirect()
            ->route('credentials.edit', $credential)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Credential $credential
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Credential $credential)
    {
        $this->authorize('view', $credential);

        return view('app.credentials.show', compact('credential'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Credential $credential
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Credential $credential)
    {
        $this->authorize('update', $credential);

        $users = User::pluck('name', 'id');

        return view('app.credentials.edit', compact('credential', 'users'));
    }

    /**
     * @param \App\Http\Requests\CredentialUpdateRequest $request
     * @param \App\Models\Credential $credential
     * @return \Illuminate\Http\Response
     */
    public function update(
        CredentialUpdateRequest $request,
        Credential $credential
    ) {
        $this->authorize('update', $credential);

        $validated = $request->validated();

        if (empty($validated['password'])) {
            unset($validated['password']);
        }

        $credential->update($validated);

        return redirect()
            ->route('credentials.edit', $credential)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Credential $credential
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Credential $credential)
    {
        $this->authorize('delete', $credential);

        $credential->delete();

        return redirect()
            ->route('credentials.index')
            ->withSuccess(__('crud.common.removed'));
    }

    public function markAsRead(
        Request $request,
        Credential $credential
    ) {
        $this->authorize('update', $credential);

        $credential->update([
            'is_read_by' => auth()->user()->id
        ]);

        return redirect()
            ->route('credentials.index')
            ->withSuccess(__('crud.common.saved'));
    }
}
