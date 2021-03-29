<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\CreatePost;
use App\Http\Livewire\Posts;
use App\Http\Livewire\ShowPost;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', Posts::class)->name('welcome');

Route::get('post/create', CreatePost::class)->name('create-post');
Route::get('blog', Posts::class)->name('posts');
Route::get('post/{slug}', ShowPost::class)->name('show-post');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
