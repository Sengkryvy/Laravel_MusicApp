<?php

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
    return redirect()->route('page.index');
});

Route::get('/page/play', 'PageController@play')->name('page.play');
Route::post('/song/count/{id}', 'SongController@updateCount');


Route::resources([
    'page' => 'PageController',
    'artist' => 'ArtistController',
    'album' => 'AlbumController',
    'song' => 'SongController',
    ]);
