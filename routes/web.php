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

Route::get('/admin', function () {
    return redirect()->route('song.index');
})->middleware('auth');
Route::get('/page/play', 'PageController@play')->name('page.play');

Route::post('/song/count/{id}', 'SongController@updateCount');

Route::get('/song/all', 'PageController@allSongs');

Route::get('/album/all', 'PageController@allAlbums');
Route::get('/album/song/{id}', 'PageController@getAlbum');

Route::get('/artist/all', 'PageController@allArtists');
Route::get('/artist/song/{id}', 'PageController@getArtist');

Route::get('/explore', 'PageController@explore');

Route::resources([
    'page' => 'PageController',
    'artist' => 'ArtistController',
    'album' => 'AlbumController',
    'song' => 'SongController',
    ]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
