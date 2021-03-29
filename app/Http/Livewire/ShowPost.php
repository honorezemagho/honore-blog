<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Blog;

class ShowPost extends Component
{
    public $post;

    public function mount($slug){
        $this->post = Blog::where('slug',$slug)->first();
    }

    public function render()
    {
        return view('livewire.show-post')
            ->extends('layouts.base')
            ->section('content');
    }
}
