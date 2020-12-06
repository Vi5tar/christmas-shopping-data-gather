<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class NiceList extends Component
{
    public $users;

    public function render()
    {
        $viewer = auth()->user() ? [auth()->user()->email] : [];
        $this->users = User::whereNotIn('email', $viewer)->get();

        return view('livewire.nice-list');
    }
}
