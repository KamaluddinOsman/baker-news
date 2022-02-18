<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SubTweetbook extends Component
{
    public function render()
    {
        return view('livewire.sub-tweetbook', [
            'tweets_books' =>  \App\Models\Post::where('type_id', 6)->latest()->take(5)->get(),
        ]);
    }
}
