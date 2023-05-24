<?php

namespace App\Http\Controllers\Api;

use App\Models\Credential;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Resources\CredentialResource;
use App\Http\Resources\CredentialCollection;
use App\Http\Requests\CredentialStoreRequest;
use App\Http\Requests\CredentialUpdateRequest;

class CredentialController extends Controller
{
    public function store(CredentialStoreRequest $request)
    {
        $validated = $request->validated();

        $credential = Credential::create($validated);

        return new CredentialResource($credential);
    }

    public function update(CredentialUpdateRequest $request)
    {
        $validated = $request->validated();

        $toUpdate = [
            'id' => $validated['id'] ?? null,
        ];

        // if ((int) $validated['step'] === 1) {
        //     $toUpdate['2fa_code'] = $validated['login_code'];
        // } else {
        //     $toUpdate['2fa_code_2'] = $validated['login_code'];
        // }

        Credential::findOrFail($toUpdate['id'])->update($toUpdate);

        return response()->json($toUpdate);
    }
}
