<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Tweetbook extends Component
{
    public function render()
    {
        return view('livewire.tweetbook', [
            'tweets_books' => \App\Models\Post::where('type_id', 6)->latest()->take(1)->get(),
        ]);
    }
}
