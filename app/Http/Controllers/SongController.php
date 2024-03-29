<?php

namespace App\Http\Controllers;

use App\Album;
use App\Artist;
use App\Song;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $songs = Song::all();
        return view('crud.song.index', compact('songs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $albums = Album::all();
        $artists = Artist::all();
        return view('crud.song.create', compact('albums', 'artists'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Song::create($request->all());
        return redirect()->route('song.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Song $song
     * @return \Illuminate\Http\Response
     */
    public function show(Song $song)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Song $song
     * @return \Illuminate\Http\Response
     */
    public function edit(Song $song)
    {
        dd($song);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Song $song
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Song $song)
    {

    }

    public function updateCount(Request $request)
    {
        $song = Song::find($request->id);
        $song->count++;
        $song->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Song $song
     * @return \Illuminate\Http\Response
     */
    public function destroy(Song $song)
    {
//        dd($song);
        $song->delete();
        return  redirect()->route('song.index');
    }
}
