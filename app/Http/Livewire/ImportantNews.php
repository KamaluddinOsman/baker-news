<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ImportantNews extends Component
{
    public function render()
    {
        return view('livewire.important-news',[
            'importants' => \App\Models\Post::where('important', 1)->latest()->take(12)->get(),
        ]);
    }
}
