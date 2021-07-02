<?php

use Illuminate\Support\Facades\Route;

Route::get('/', "PostController@index")->name('home');
Route::get('/contakt', "PostController@kontakt")->name('kontakt');
Route::get('/o_meni', "PostController@omeni")->name('o_meni');

Route::get('/post/{post}', "PostController@show")->name('post.single');
