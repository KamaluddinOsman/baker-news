<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FooterImportantNews extends Component
{
    public function render()
    {
        return view('livewire.footer-important-news', [
            'importants' =>  \App\Models\Post::where('important', 1)->latest()->take(2)->get(),
        ]);
    }
}
