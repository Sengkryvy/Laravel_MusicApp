@extends('layout.template')

@section('content')

    <div class="app">
        <div id="content" style="overflow: auto; margin-bottom: 75px; padding-bottom: 75px;"
             class="content p-3 col-lg-10 offset-lg-2 col-md-9 offset-md-3 col-12 p-0">

            <!-- explore artist -->
            @include('pages.explore_page')
            <!-- end of explore artist -->

            <!-- songs artist -->
            @include('pages.song_page')
            <!-- end of songs artist -->

            <!-- album artist -->
            @include('pages.album_page')
            <!-- end of album artist -->

            <!-- sample album-info Page -->
            @include('pages.album.sample_album_page')
            <!-- end of sample album-info Page -->

            <!-- artists artist -->
            @include('pages.artist_page')
            <!-- end of artists artist -->

            {{--artists-song page--}}
            @include('pages.artist.sample_artist_page')
            {{--end of artist-song page--}}

        </div>
    </div>


@endsection