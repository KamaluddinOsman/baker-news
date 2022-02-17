<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SubSports extends Component
{
    public function render()
    {
        return view('livewire.sub-sports', [
            'sports' => \App\Models\Post::where('type_id', 4)->latest()->take(5)->get(),
        ]);
    }
}
