<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/create-post', 'Post\PostController@create');
Route::post('/store-post', 'Post\PostController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
