<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Collections extends Component
{
    public function render()
    {
        return view('livewire.collections', [
            'collections' => \App\Models\Post::where('type_id', 5)->latest()->take(2)->get(),
        ]);
    }
}
