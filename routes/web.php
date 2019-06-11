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
//    return view('pages.song_page');
});

Route::get('/page/play', 'PageController@play')->name('page.play');

Route::post('/song/count/{id}', 'SongController@updateCount');

Route::get('/song/all', 'PageController@allSongs');
Route::get('/album/all', 'PageController@allAlbums');
Route::get('/artist/all', 'PageController@allArtists');
Route::get('/explore', 'PageController@explore');

Route::resources([
    'page' => 'PageController',
    'artist' => 'ArtistController',
    'album' => 'AlbumController',
    'song' => 'SongController',
    ]);
