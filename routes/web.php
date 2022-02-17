<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/news', function(){
    return view('pages.news');
})->name('news');

Route::get('/economics', function(){
    $post = Post::find(1);
    return view('pages.economics', compact('post'));
})->name('economics');

Route::get('/opinions', function(){
    return view('pages.opinions');
})->name('opinions');

Route::get('/sports', function(){
    return view('pages.sports');
})->name('sports');

Route::get('/collections', function(){
    return view('pages.collections');
})->name('collections');

Route::get('/twitbook', function(){
    return view('pages.twitbook');
})->name('twitbook');

Route::get('/contact', function(){
    return view('pages.contact');
})->name('contact');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
