<?php

use Illuminate\Support\Facades\Route;
//New Way, Laravel 8
//use App\Http\Controllers\PostsController;
//Route::get('/posts', [PostsController::class, 'show']);


Route::get('/test', function (){
   return view('test');
});

//Route::get('/welcome', 'WelcomeController@show');
//Route::get('/posts/{post}', 'PostsController@show');


Route::get('/contact', function (){
    return view('contact');
});

Route::get('/about', function (){
    $article = \App\Models\Article::latest()->get();

    return $article;

    return view('about');
});

Route::get('/welcome', function (){
    return view('/welcome');
});
