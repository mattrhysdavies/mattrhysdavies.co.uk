<?php

namespace App\Http\Livewire\Blog\Post;

use Livewire\Component;

class Index extends Component
{

    public $posts;


    public function mount()
    {
        $this->posts = \App\Models\Blog\Post::all();
    }


    public function render()
    {
        return view('livewire.blog.post.index');
    }
}
