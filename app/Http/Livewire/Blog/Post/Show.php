<?php

namespace App\Http\Livewire\Blog\Post;

use App\Models\Blog\Post;
use Livewire\Component;

class Show extends Component
{

    public Post $post;

    public function render()
    {
        return view('livewire.blog.post.show');
    }
}
