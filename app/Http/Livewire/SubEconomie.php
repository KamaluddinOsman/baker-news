<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SubEconomie extends Component
{
    public function render()
    {
        return view('livewire.sub-economie', [
            'economics' => \App\Models\Post::where('type_id', 2)->latest()->take(5)->get(),
        ]);
    }
}
