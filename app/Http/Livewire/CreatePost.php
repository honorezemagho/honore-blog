<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Blog;
use Illuminate\Support\Str;

class CreatePost extends Component
{
    public $saveSuccess = false;
    public $post;

    public $title;
    public $description;

    protected $rules =
    [ 
        'title' => 'required|min:6',
        'description' => 'required',
    ];

    public function mount(){
        $this->post = new Blog;
    }


    public function savePost(){
        $this->validate();
        $this->post->user_id = 1;
        $this->post->title = $this->title;
        $this->post->body = $this->description;
        $this->post->slug = Str::slug($this->post->title);
        $this->post->save();
        $this->saveSuccess = true;

        $this->title = "";
        $this->description = " ";        
    }


    public function render()
    {
        return view('livewire.create-post')
        ->extends('layouts.base')
        ->section('content');;
    }
}
