<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Comments extends Component
{
    public $comments = [
        'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil provident iste illo, itaque iure odit sint tempora harum aspernatur, vel voluptatum aperiam facere non? Sed in consequatur dolorem vero nisi?',
        'created_at' => '3 min ago',
        'creator' => 'Sumon',
    ];

    public $comment; 
   
    public function render()
    {
        return view('livewire.comments');
    }
}
