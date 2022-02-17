<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Opinion extends Component
{
    public function render()
    {
        return view('livewire.opinion', [
            'openions' => \App\Models\Post::where('type_id', 3)->latest()->take(3)->get(),
        ]);
    }
}
