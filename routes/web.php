<?php

use Illuminate\Support\Facades\Route;

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

#region Book CRUD
Route::get('/', 'HomeController@index')
    ->name('index');

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
