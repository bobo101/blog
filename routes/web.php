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

Route::get('/', 'HomeController@index');

Route::get('/arts/{art}', 'HomeController@show');

Route::middleware('auth')->prefix('admin')->namespace('Admin')->group(function () {

    Route::resource('arts', 'ArtController');

    Route::resource('tags', 'TagController');

    Route::resource('authors', 'AuthorController');

});

Auth::routes(['register' => false]);
