<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Related extends Component
{
    public $type_id;

    public function mount($type_id)
    {
        $this->type_id = $type_id;
    }
    
    public function render()
    {
        return view('livewire.related', [
            'relatedNews' => \App\Models\Post::where('type_id', $this->type_id)
            ->paginate(5),
        ]);
    }
}
