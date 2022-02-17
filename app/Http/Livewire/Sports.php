<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Sports extends Component
{
    public function render()
    {
        return view('livewire.sports', [
            'new_sports' => \App\Models\Post::where('type_id', 4)->latest()->take(1)->get(),
        ]);
    }
}
