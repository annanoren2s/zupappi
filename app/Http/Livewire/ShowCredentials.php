<?php

namespace App\Http\Livewire;

use App\Models\Credential;
use Livewire\Component;

class ShowCredentials extends Component
{
    public $search;

    public function render()
    {
        $search = $this->search;
//        dd($search);
        $credentials = Credential::search($search)
            ->orderBy('is_read_by', 'DESC')
            ->paginate(30)
            ->withQueryString();

        return view('livewire.show-credentials', compact('credentials'));
    }
}
