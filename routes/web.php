<?php

use Illuminate\Support\Facades\Route;

#region Book CRUD

Route::get('/book/create', 'HomeController@create')
    ->name('book.create');

Route::post('/book', 'HomeController@createPost')
    ->name('book.create.post');

Route::get('/book/{book}/update', 'HomeController@update')
    ->name('book.update');

Route::put('/book/{book}', 'HomeController@updatePut')
    ->name('book.update.put');

Route::delete('/book/{book}', 'HomeController@delete')
    ->name('book.delete');

Route::get('/book/{book}', 'HomeController@details')
    ->name('book.details');
#endregion

#region Music CRUD
Route::get('/music', 'MusicController@index')
    ->name('music.index');

Route::get('/music/create', 'MusicController@create')
    ->name('music.create');

Route::post('/music/create', 'MusicController@createPost')
    ->name('music.create.post');

Route::get('/music/update/{music}', 'MusicController@update')
    ->name('music.update');

Route::put('/music/update/{music}', 'MusicController@updatePut')
    ->name('music.update.put');

Route::delete('/music/delete/{music}', 'MusicController@delete')
    ->name('music.delete');

Route::get('/music/{music}', 'MusicController@details')
    ->name('music.details');
#endregion

Auth::routes();

Route::get('/home', 'HomeController@index')
    ->name('home')
    ->middleware('auth');

Route::resource('posts', 'PostController');
