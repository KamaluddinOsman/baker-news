<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Economie extends Component
{
    public function render()
    {
        return view('livewire.economie', [
            'new_economics' => \App\Models\Post::where('type_id', 2)->latest()->take(1)->get(),
        ]);
    }
}
