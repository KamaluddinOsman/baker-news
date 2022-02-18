<?php

namespace App\Http\Livewire;

use Livewire\Component;

class NewsNavigation extends Component
{
    public $type_id;

    public $posts;

    public $index = 0;

    public $ids = [];

    public function mount($type_id)
    {
        $this->type_id = $type_id;

        $this->posts = \App\Models\Post::where('type_id', $this->type_id)
            ->select(['id', 'title'])
            ->orderBy('id', 'asc')
            ->get();

    }

    public function nextNews($index){

    }

    public function render()
    {
        return view('livewire.news-navigation', [
            'news' => \App\Models\Post::where('type_id', $this->type_id)
                ->orderBy('id', 'asc')
                ->pluck('id'),
                'ids'
        ]);
    }
}
