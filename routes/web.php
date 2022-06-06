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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('audio');
});

Route::get('/jakat','JakatController@index');

// Route::get('/podcast-home','PodcastController@index');
Route::get('/podcast','PodcastController@index');
Route::get('/archive','PodcastController@archive');
Route::get('/detail','PodcastController@detail');

Route::get('/count_down','JakatController@count');