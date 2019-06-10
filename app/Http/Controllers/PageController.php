<?php

namespace App\Http\Controllers;

use App\Song;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $weeklyCharts = Song::orderBy('count', 'DESC')->take(7)->get();
        $trendings = Song::orderBy('count', 'DESC')->take(6)->get();
        $recentlyAddeds = Song::orderBy('created_at', 'DESC')->take(6)->get();
        return view('pages.index', compact('weeklyCharts', 'trendings', 'recentlyAddeds'));
    }

//    public function play(Song $song)
//    {
//        $weeklyCharts = Song::orderBy('count')->take(7)->get();
//        $trendings = Song::orderBy('count', 'DESC')->take(6)->get();
//        $recentlyAddeds = Song::orderBy('created_at', 'DESC')->take(6)->get();
//        return view('pages.index', compact('weeklyCharts', 'trendings', 'recentlyAddeds'));
//    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
