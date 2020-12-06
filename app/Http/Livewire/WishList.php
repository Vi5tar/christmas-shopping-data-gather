<?php

namespace App\Http\Livewire;

use Livewire\Component;

class WishList extends Component
{
    public $wishes;
    public string $newWish = '';

    public function render()
    {
        $this->wishes = auth()->user()->wishes;

        return view('livewire.wish-list');
    }

    public function addWish()
    {
        auth()->user()->wishes()->create([
            'title' => $this->newWish
        ]);

        $this->newWish = '';
    }

    public function destroyWish($id)
    {
        auth()->user()->wishes()->whereId($id)->delete();
    }
}
