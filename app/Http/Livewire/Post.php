<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;


class Post extends Component
{
    use WithPagination;

    public $type_id;

    public function mount($type_id) {
        $this->type_id = $type_id;
    }

    public function render()
    {
        return view('livewire.post', [
            'posts' => \App\Models\Post::where('type_id', $this->type_id)
            ->paginate(4),
        ]);
    }
}
