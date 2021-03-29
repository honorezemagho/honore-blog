<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Blog;

class Posts extends Component
{

    public $posts;

    public function mount(){
        $this->posts = Blog::get();
    }

    public function render()
    {
        return view('livewire.posts')
                        ->extends('layouts.base')
                        ->section('content');
    }
}
