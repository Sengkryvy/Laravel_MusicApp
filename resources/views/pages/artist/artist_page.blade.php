<div id="artists" class="container-fluid">
    <div id="recently-added" style="display: inherit;" class="recently-add">
        <div style="display: flex" class="px-2">
            <h1 class="list-title px-2 pt-2 w-100">Artists</h1>
        </div>

        <!-- K -->
        {{--<div style="display: flex" class="px-2">--}}
            {{--<h2 class="list-title px-3 pt-3 w-100">K</h2>--}}
        {{--</div>--}}
        <ul style="overflow: scroll;" class="track-list mx-0 row">
            @foreach($artists as $artist)
            <li class="track-card p-2">
                <div class="artwork">
                    <a href="#"><span
                                style='background-image: url("{{ $artist->image }}");'></span></a>
                </div>
                <div class="info">
                    <a href="#" class="title">
                        <p>{{ $artist->career_name }}</p>
                    </a>
                </div>
            </li>
            @endforeach
            {{--<li id="artist-khalid" href="#" class="track-card p-2">--}}
                {{--<div class="artwork">--}}
                    {{--<a href="#"><span--}}
                                {{--style='background-image: url("https://i1.sndcdn.com/artworks-000224127351-4m2rkf-t500x500.jpg");'></span>--}}
                    {{--</a>--}}
                {{--</div>--}}
                {{--<div class="info">--}}
                    {{--<a href="#" class="title">--}}
                        {{--<p>Khalid</p>--}}
                    {{--</a>--}}
                {{--</div>--}}
            {{--</li>--}}
        </ul>



    </div>
</div>
