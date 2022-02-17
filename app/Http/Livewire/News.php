<?php

namespace App\Http\Livewire;

use Livewire\Component;

class News extends Component
{
    public function render()
    {
        return view('livewire.news', [
            'posts' => \App\Models\Post::where('type_id', 1)->latest()->take(4)->get(),
        ]);
    }
}
