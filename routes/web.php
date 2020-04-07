<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'WelcomeController@index');

Route::get('/create-post', 'Post\PostController@create');
Route::post('/store-post', 'Post\PostController@store');
//Route::get('/post-details/{id}/{title}/{body}/{created_at}', 'WelcomeController@showPostDetails')->name('post-details');
//Route::get('/post-details/{post}', 'WelcomeController@showPostDetails')->name('post.details');

Route::get('/post-details/{post}', 'Post\PostController@show');
Route::get('/post-delete/{post}', 'Post\PostController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
