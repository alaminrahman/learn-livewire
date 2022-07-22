<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class Posts extends Component
{
    public Post $post;

    protected $rules = [
        'post.title' => 'required|string|min:6',
        'post.content' => 'required|string|max:500',
    ]; 
    
    public function mount()
    {
        $this->post = new Post();
    }
        
    
    public function render()
    {
        return view('livewire.posts');
    }
    public function save()
    {
        $this->validate();
 
        $this->post->save();
    }
}
