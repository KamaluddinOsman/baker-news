<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BreakingNews extends Component
{
    public function render()
    {
        return view('livewire.breaking-news',[
            'breaking_news' => \App\Models\Post::latest()->take(5)->get(),
        ]);
    }
}
