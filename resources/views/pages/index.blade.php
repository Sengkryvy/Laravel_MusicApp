@extends('layout.template')

@section('content')

    <div class="app">
        <div id="content" style="overflow: auto; margin-bottom: 75px; padding-bottom: 75px;" class="content p-3 col-lg-10 offset-lg-2 col-md-9 offset-md-3 col-12 p-0">

            <!-- explore page -->
            <div id="explore" class="">
                <!-- weekly chart -->
                <div id="weekly-chart" class="px-2">
                    <h1 class="list-title px-2 py-2 w-100">Weekly Charts</h1>
                    <div class="row list-songs">
                        <table class="table table-hover tab-nowrap col-12">
                            <thead>
                            <tr class="col-12">
                                <th style="width: 60px;">#</th>
                                <th style="width: 40%;">Title</th>
                                <th style="width: 20%;">Artist</th>
                                <th style="width: 20%;">Album</th>
                                <th style="width: 10%;"></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr src="https://firebasestorage.googleapis.com/v0/b/musicapp-4582e.appspot.com/o/mp3%2FPost%20Malone%20Swae%20Lee%20-%20Sunflower%20(Spider-Man%20Into%20the%20Spider-Verse).mp3?alt=media&token=27973f3a-451c-4070-bce0-9647ecf6775f"
                                id="list1">
                                <td scope="row" class="list-artwork">
                                    <div class="artwork">
                                        <span class="no-border-radius" style='background-image: url("https://i1.sndcdn.com/artworks-85AaCd8d3JAv-0-t500x500.jpg");'></span>
                                    </div>
                                </td>
                                <td>Sunflower</td>
                                <td>Post MaLone</td>
                                <td>Spider-Man: Into the Spider-Verse</td>
                                <td>2:42</td>
                            </tr>
                            <tr src="https://firebasestorage.googleapis.com/v0/b/musicapp-4582e.appspot.com/o/mp3%2FYoung%20Dumb%20%20Broke%20%20Khalid%20%20Lyrics.mp3?alt=media&token=862389ba-6f03-409b-9645-81fd20d1852f">
                                <th scope="row">
                                    <div class="artwork">
                                        <span class="no-border-radius" style='background-image: url("https://i1.sndcdn.com/artworks-000224127351-4m2rkf-t500x500.jpg");'></span>
                                    </div>
                                </th>
                                <td class="td-nowrap">Young dumb and broke</td>
                                <td>Khalid</td>
                                <td>American Teen</td>
                                <td>3:25</td>
                            </tr>
                            <tr src="https://firebasestorage.googleapis.com/v0/b/musicapp-4582e.appspot.com/o/mp3%2FBazzi%20%E2%80%93%20Mine%20(Lyrics)%20%F0%9F%8E%B5.mp3?alt=media&token=8af98424-42da-4599-b0c3-30babb10a61e">
                                <td scope="row" class="list-artwork">
                                    <div class="artwork">
                                        <span class="no-border-radius" style='background-image: url("https://i1.sndcdn.com/artworks-000334054377-fgpyvw-t500x500.jpg");'></span>
                                    </div>
                                </td>
                                <td>Mine</td>
                                <td>Bazzi</td>
                                <td>Live in Texas</td>
                                <td>2:16</td>
                            </tr>
                            <tr src="https://firebasestorage.googleapis.com/v0/b/musicapp-4582e.appspot.com/o/mp3%2FKhalid%20-%20Better%20(Official%20Video).mp3?alt=media&token=558036d1-ffad-441a-a835-16b8b1b83a5c">
                                <th scope="row">
                                    <div class="artwork">
                                        <span class="no-border-radius" style='background-image: url("https://i1.sndcdn.com/artworks-000224127351-4m2rkf-t500x500.jpg");'></span>
                                    </div>
                                </th>
                                <td class="td-nowrap">Better</td>
                                <td>Khalid</td>
                                <td>American Teen</td>
                                <td>4:12</td>
                            </tr>
                            <tr src="https://firebasestorage.googleapis.com/v0/b/musicapp-4582e.appspot.com/o/mp3%2FMarshmello%20ft.%20Bastille%20-%20Happier%20(Official%20Lyric%20Video).mp3?alt=media&token=6f0635a8-1e04-4bd5-9ea9-a3f5cba19a7a">
                                <td scope="row" class="list-artwork">
                                    <div class="artwork">
                                        <span class="no-border-radius" style='background-image: url("https://i1.sndcdn.com/artworks-000390226092-1vzsos-t500x500.jpg")'></span>
                                    </div>
                                </td>
                                <td>Happier</td>
                                <td>Marshmello</td>
                                <td>American Teen</td>
                                <td>3:39</td>
                            </tr>
                            <tr src="https://firebasestorage.googleapis.com/v0/b/musicapp-4582e.appspot.com/o/mp3%2FLauv%20-%20I%20Like%20Me%20Better%20%5BOfficial%20Audio%5D%20(1).mp3?alt=media&token=9dc8f558-3ccb-4edb-a3ae-0d1676cd8588">
                                <th scope="row">
                                    <div class="artwork">
                                        <span class="no-border-radius" style='background-image: url("https://i1.sndcdn.com/artworks-8n24PQuaQZWL-0-t500x500.jpg");'></span>
                                    </div>
                                </th>
                                <td class="td-nowrap">I like me better</td>
                                <td>Lauv</td>
                                <td>Live in Texas</td>
                                <td>3:18</td>
                            </tr>
                            <tr src="https://firebasestorage.googleapis.com/v0/b/musicapp-4582e.appspot.com/o/In%20The%20End%20-%20Linkin%20Park.mp3?alt=media&token=8d74a9c1-77a5-4d38-baf4-d8bb4113f34f">
                                <td scope="row" class="list-artwork">
                                    <div class="artwork">
                                        <span class="no-border-radius" style='background-image: url("https://i1.sndcdn.com/artworks-000282078677-wnv9pv-t500x500.jpg");'></span>
                                    </div>
                                </td>
                                <td>In the end</td>
                                <td>Linkin Park</td>
                                <td>Live in Texas</td>
                                <td>3:38</td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- weekly chart -->

                <!-- recently-add -->
                <div id="recently-added" style="display: inherit;" class="recently-add">
                    <div style="display: flex" class="px-2">
                        <h1 class="list-title px-2 pt-2 w-100">Recently Added</h1>
                        <!-- <section class="w-100 list-more d-flex justify-content-end">
                            <div>
                                <a>Show all</a>
                            </div>
                            <button class="material-icons">keyboard_arrow_left</button>
                            <button class="material-icons">keyboard_arrow_right</button>
                        </section> -->
                    </div>

                    <ul style="overflow: scroll;" class="track-list ml-1 row">
                        <li id="card" src="https://firebasestorage.googleapis.com/v0/b/musicapp-4582e.appspot.com/o/mp3%2FPost%20Malone%20Swae%20Lee%20-%20Sunflower%20(Spider-Man%20Into%20the%20Spider-Verse).mp3?alt=media&token=27973f3a-451c-4070-bce0-9647ecf6775f"
                            class="track-card song p-2">
                            <div class="artwork">
                                <span style='background-image: url("https://i1.sndcdn.com/artworks-85AaCd8d3JAv-0-t500x500.jpg");'></span>
                            </div>
                            <div class="info">
                                <a href="#" class="title">
                                    <p>Sunflower</p>
                                </a>
                                <a href="#" class="artist">
                                    <p>Post MaLone</p>
                                </a>
                            </div>
                        </li>
                        <li class="track-card song p-2" src="https://firebasestorage.googleapis.com/v0/b/musicapp-4582e.appspot.com/o/mp3%2FYoung%20Dumb%20%20Broke%20%20Khalid%20%20Lyrics.mp3?alt=media&token=862389ba-6f03-409b-9645-81fd20d1852f">
                            <div class="artwork">
                                <span style='background-image: url("https://i1.sndcdn.com/artworks-000224127351-4m2rkf-t500x500.jpg");'></span>
                            </div>
                            <div class="info">
                                <a href="#" class="title">
                                    <p>Young dumb and broke</p>
                                </a>
                                <a href="#" class="artist">
                                    <p>Khalid</p>
                                </a>
                            </div>
                        </li>
                        <li class="track-card song p-2" src="https://firebasestorage.googleapis.com/v0/b/musicapp-4582e.appspot.com/o/mp3%2FPost%20Malone%20Swae%20Lee%20-%20Sunflower%20(Spider-Man%20Into%20the%20Spider-Verse).mp3?alt=media&token=27973f3a-451c-4070-bce0-9647ecf6775f">
                            <div class="artwork">
                                <span style='background-image: url("https://i1.sndcdn.com/artworks-000359430471-6jd8ty-t500x500.jpg");'></span>
                            </div>
                            <div class="info">
                                <a href="" class="title">
                                    <p>FRIENDS</p>
                                </a>
                                <a href="" class="artist">
                                    <p>Marshmello</p>
                                </a>
                            </div>
                        </li>
                        <li class="track-card song p-2" src="https://firebasestorage.googleapis.com/v0/b/musicapp-4582e.appspot.com/o/mp3%2FLauv%20-%20I%20Like%20Me%20Better%20%5BOfficial%20Audio%5D%20(1).mp3?alt=media&token=9dc8f558-3ccb-4edb-a3ae-0d1676cd8588">
                            <div class="artwork">
                                <span style='background-image: url("https://i1.sndcdn.com/artworks-000239465971-hnu0g4-t500x500.jpg");'></span>
                            </div>
                            <div class="info">
                                <a href="" class="title">
                                    <p>I like me better</p>
                                </a>
                                <a href="" class="artist">
                                    <p>LAUV</p>
                                </a>
                            </div>
                        </li>
                        <li class="track-card song p-2" src="https://firebasestorage.googleapis.com/v0/b/musicapp-4582e.appspot.com/o/mp3%2FMarshmello%20ft.%20Bastille%20-%20Happier%20(Official%20Lyric%20Video).mp3?alt=media&token=6f0635a8-1e04-4bd5-9ea9-a3f5cba19a7a">
                            <div class="artwork">
                                <span style='background-image: url("https://upload.wikimedia.org/wikipedia/en/thumb/e/e5/Marshmello_and_Bastille_Happier.png/220px-Marshmello_and_Bastille_Happier.png");'></span>
                            </div>
                            <div class="info">
                                <a href="" class="title">
                                    <p>Happier</p>
                                </a>
                                <a href="" class="artist">
                                    <p>Marshmello</p>
                                </a>
                            </div>
                        </li>
                        <li class="track-card song p-2">
                            <div class="artwork">
                                <span style='background-image: url("https://upload.wikimedia.org/wikipedia/en/thumb/d/da/Avicii_Wake_Me_Up_Official_Single_Cover.png/220px-Avicii_Wake_Me_Up_Official_Single_Cover.png");'></span>
                            </div>
                            <div class="info" src="https://firebasestorage.googleapis.com/v0/b/musicapp-4582e.appspot.com/o/In%20The%20End%20-%20Linkin%20Park.mp3?alt=media&token=8d74a9c1-77a5-4d38-baf4-d8bb4113f34f">
                                <a href="" class="title">
                                    <p>Wake me up</p>
                                </a>
                                <a href="" class="artist">
                                    <p>Avicii</p>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- end of recently-add -->

                <!-- trending -->
                <div id="trending" class="trending">

                    <div style="display: flex" class="px-2">
                        <h1 class="list-title px-2 pt-2 w-100">Trending</h1>
                        <!-- <section class="w-100 list-more d-flex justify-content-end">
                            <div>
                                <a>show all</a>
                            </div>
                            <button class="material-icons">keyboard_arrow_left</button>
                            <button class="material-icons">keyboard_arrow_right</button>
                        </section> -->
                    </div>

                    <ul style="overflow: scroll;" class="track-list ml-1 row">

                        <li class="track-card song p-2" src="https://firebasestorage.googleapis.com/v0/b/musicapp-4582e.appspot.com/o/mp3%2FPost%20Malone%20Swae%20Lee%20-%20Sunflower%20(Spider-Man%20Into%20the%20Spider-Verse).mp3?alt=media&token=27973f3a-451c-4070-bce0-9647ecf6775f">
                            <div class="artwork">
                                <span style='background-image: url("https://i1.sndcdn.com/artworks-000359430471-6jd8ty-t500x500.jpg");'></span>
                            </div>
                            <div class="info">
                                <a href="" class="title">
                                    <p>FRIENDS</p>
                                </a>
                                <a href="" class="artist">
                                    <p>Marshmello</p>
                                </a>
                            </div>
                        </li>
                        <li class="track-card song p-2" src="https://firebasestorage.googleapis.com/v0/b/musicapp-4582e.appspot.com/o/mp3%2FLauv%20-%20I%20Like%20Me%20Better%20%5BOfficial%20Audio%5D%20(1).mp3?alt=media&token=9dc8f558-3ccb-4edb-a3ae-0d1676cd8588">
                            <div class="artwork">
                                <span style='background-image: url("https://i1.sndcdn.com/artworks-000239465971-hnu0g4-t500x500.jpg");'></span>
                            </div>
                            <div class="info">
                                <a href="" class="title">
                                    <p>I like me better</p>
                                </a>
                                <a href="" class="artist">
                                    <p>LAUV</p>
                                </a>
                            </div>
                        </li>
                        <li class="track-card song p-2" src="https://firebasestorage.googleapis.com/v0/b/musicapp-4582e.appspot.com/o/mp3%2FMarshmello%20ft.%20Bastille%20-%20Happier%20(Official%20Lyric%20Video).mp3?alt=media&token=6f0635a8-1e04-4bd5-9ea9-a3f5cba19a7a">
                            <div class="artwork">
                                <span style='background-image: url("https://upload.wikimedia.org/wikipedia/en/thumb/e/e5/Marshmello_and_Bastille_Happier.png/220px-Marshmello_and_Bastille_Happier.png");'></span>
                            </div>
                            <div class="info">
                                <a href="" class="title">
                                    <p>Happier</p>
                                </a>
                                <a href="" class="artist">
                                    <p>Marshmello</p>
                                </a>
                            </div>
                        </li>
                        <li id="card" src="https://firebasestorage.googleapis.com/v0/b/musicapp-4582e.appspot.com/o/mp3%2FPost%20Malone%20Swae%20Lee%20-%20Sunflower%20(Spider-Man%20Into%20the%20Spider-Verse).mp3?alt=media&token=27973f3a-451c-4070-bce0-9647ecf6775f"
                            class="track-card song p-2">
                            <div class="artwork">
                                <span style='background-image: url("https://i1.sndcdn.com/artworks-85AaCd8d3JAv-0-t500x500.jpg");'></span>
                            </div>
                            <div class="info">
                                <a href="#" class="title">
                                    <p>Sunflower</p>
                                </a>
                                <a href="#" class="artist">
                                    <p>Post MaLone</p>
                                </a>
                            </div>
                        </li>
                        <li class="track-card song p-2" src="https://firebasestorage.googleapis.com/v0/b/musicapp-4582e.appspot.com/o/mp3%2FYoung%20Dumb%20%20Broke%20%20Khalid%20%20Lyrics.mp3?alt=media&token=862389ba-6f03-409b-9645-81fd20d1852f">
                            <div class="artwork">
                                <span style='background-image: url("https://i1.sndcdn.com/artworks-000224127351-4m2rkf-t500x500.jpg");'></span>
                            </div>
                            <div class="info">
                                <a href="#" class="title">
                                    <p>Young dumb and broke</p>
                                </a>
                                <a href="#" class="artist">
                                    <p>Khalid</p>
                                </a>
                            </div>
                        </li>

                        <li class="track-card song p-2">
                            <div class="artwork">
                                <span style='background-image: url("https://upload.wikimedia.org/wikipedia/en/thumb/d/da/Avicii_Wake_Me_Up_Official_Single_Cover.png/220px-Avicii_Wake_Me_Up_Official_Single_Cover.png");'></span>
                            </div>
                            <div class="info" src="https://firebasestorage.googleapis.com/v0/b/musicapp-4582e.appspot.com/o/In%20The%20End%20-%20Linkin%20Park.mp3?alt=media&token=8d74a9c1-77a5-4d38-baf4-d8bb4113f34f">
                                <a href="" class="title">
                                    <p>Wake me up</p>
                                </a>
                                <a href="" class="artist">
                                    <p>Avicii</p>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- end of trending -->
            </div>
            <!-- end of explore page -->

            <!-- songs page -->
            <div id="songs" class="px-2 hide songs">
                <h1 class="list-title px-2 pt-2 w-100">Songs</h1>
                <br>
                <div class="row list-songs">
                    <table class="table table-hover tab-nowrap col-12">
                        <thead>
                        <tr class="col-12">
                            <th style="width: 60px;"></th>
                            <th style="width: 40%;">Title</th>
                            <th style="width: 20%;">Artist</th>
                            <th style="width: 20%;">Album</th>
                            <th style="width: 10%;"></th>
                        </tr>
                        </thead>
                        <thead>
                        <tr class="letter-header">
                            <th>#</th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td scope="row" class="list-artwork">
                                <div class="artwork">
                                    <span class="no-border-radius" style='background-image: url("https://i.imgur.com/5u6JeKZ.png");'></span>
                                </div>
                            </td>
                            <td>444th Air Base Hanger</td>
                            <td>Unknown Artist</td>
                            <td>Ace Combat 7 Original Sound Tracks (2019)</td>
                            <td>2:00</td>
                        </tr>

                        </tbody>

                        <thead>
                        <tr class="letter-header">
                            <th>B</th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr src="https://firebasestorage.googleapis.com/v0/b/musicapp-4582e.appspot.com/o/mp3%2FKhalid%20-%20Better%20(Official%20Video).mp3?alt=media&token=558036d1-ffad-441a-a835-16b8b1b83a5c">
                            <th scope="row">
                                <div class="artwork">
                                    <span class="no-border-radius" style='background-image: url("https://i1.sndcdn.com/artworks-000224127351-4m2rkf-t500x500.jpg");'></span>
                                </div>
                            </th>
                            <td class="td-nowrap">Better</td>
                            <td>Khalid</td>
                            <td>American Teen</td>
                            <td>4:12</td>
                        </tr>

                        </tbody>
                        <thead class="letter-header">
                        <th>H</th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        </thead>
                        </tbody>

                        <tr src="https://firebasestorage.googleapis.com/v0/b/musicapp-4582e.appspot.com/o/mp3%2FMarshmello%20ft.%20Bastille%20-%20Happier%20(Official%20Lyric%20Video).mp3?alt=media&token=6f0635a8-1e04-4bd5-9ea9-a3f5cba19a7a">
                            <td scope="row" class="list-artwork">
                                <div class="artwork">
                                    <span class="no-border-radius" style='background-image: url("https://i1.sndcdn.com/artworks-000390226092-1vzsos-t500x500.jpg")'></span>
                                </div>
                            </td>
                            <td>Happier</td>
                            <td>Marshmello</td>
                            <td>American Teen</td>
                            <td>3:39</td>
                        </tr>
                        </tbody>

                        <thead>
                        <tr class="letter-header">
                            <th>I</th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr src="https://firebasestorage.googleapis.com/v0/b/musicapp-4582e.appspot.com/o/mp3%2FLauv%20-%20I%20Like%20Me%20Better%20%5BOfficial%20Audio%5D%20(1).mp3?alt=media&token=9dc8f558-3ccb-4edb-a3ae-0d1676cd8588">
                            <td scope="row">
                                <div class="artwork">
                                    <span class="no-border-radius" style='background-image: url("https://i1.sndcdn.com/artworks-8n24PQuaQZWL-0-t500x500.jpg");'></span>
                                </div>
                            </td>
                            <td class="td-nowrap">I like me better</td>
                            <td>Lauv</td>
                            <td>spider-Man: Into the Spider-Verse</td>
                            <td>3:18</td>
                        </tr>
                        <tr src="https://firebasestorage.googleapis.com/v0/b/musicapp-4582e.appspot.com/o/In%20The%20End%20-%20Linkin%20Park.mp3?alt=media&token=8d74a9c1-77a5-4d38-baf4-d8bb4113f34f">
                            <td scope="row" class="list-artwork">
                                <div class="artwork">
                                    <span class="no-border-radius" style='background-image: url("https://i1.sndcdn.com/artworks-000282078677-wnv9pv-t500x500.jpg");'></span>
                                </div>
                            </td>
                            <td>In the end</td>
                            <td>Linkin Park</td>
                            <td>Live in Texas</td>
                            <td>3:38</td>
                        </tr>
                        <tr src="https://firebasestorage.googleapis.com/v0/b/musicapp-4582e.appspot.com/o/mp3%2FIUN%20Briefing%20-%20Ace%20Combat%207%20Original%20Soundtrack%20(1).mp3?alt=media&token=d8bb4c8e-7c67-4811-954e-2b7fce1bb649">
                            <td scope="row" class="list-artwork">
                                <div class="artwork">
                                    <span class="no-border-radius" style='background-image: url("https://i.imgur.com/5u6JeKZ.png");'></span>
                                </div>
                            </td>
                            <!-- <td style="text-align: center">2.</td> -->
                            <td>IUN Briefing</td>
                            <td>Keiki Kobayashi</td>
                            <td>Ace Combat 7 Original Sound Tracks (2019)</td>
                            <td>2:07</td>
                        </tr>
                        </tbody>
                        <thead>
                        <tr class="letter-header">
                            <th>M</th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr src="https://firebasestorage.googleapis.com/v0/b/musicapp-4582e.appspot.com/o/mp3%2FBazzi%20%E2%80%93%20Mine%20(Lyrics)%20%F0%9F%8E%B5.mp3?alt=media&token=8af98424-42da-4599-b0c3-30babb10a61e">
                            <td scope="row" class="list-artwork">
                                <div class="artwork">
                                    <span class="no-border-radius" style='background-image: url("https://i1.sndcdn.com/artworks-000334054377-fgpyvw-t500x500.jpg");'></span>
                                </div>
                            </td>
                            <td>Mine</td>
                            <td>Bazzi</td>
                            <td>Live in Texas</td>
                            <td>2:16</td>
                        </tr>
                        </tbody>

                        <thead>
                        <tr class="letter-header">
                            <th>S</th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr src="https://firebasestorage.googleapis.com/v0/b/musicapp-4582e.appspot.com/o/mp3%2FPost%20Malone%20Swae%20Lee%20-%20Sunflower%20(Spider-Man%20Into%20the%20Spider-Verse).mp3?alt=media&token=27973f3a-451c-4070-bce0-9647ecf6775f"
                            id="list1">
                            <td scope="row" class="list-artwork">
                                <div class="artwork">
                                    <span class="no-border-radius" style='background-image: url("https://i1.sndcdn.com/artworks-85AaCd8d3JAv-0-t500x500.jpg");'></span>
                                </div>
                            </td>
                            <td>Sunflower</td>
                            <td>Post MaLone</td>
                            <td>Spider-Man: Into the Spider-Verse</td>
                            <td>2:42</td>
                        </tr>
                        </tbody>
                        <thead>
                        <tr class="letter-header">
                            <th>Y</th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>

                        <tr src="https://firebasestorage.googleapis.com/v0/b/musicapp-4582e.appspot.com/o/mp3%2FYoung%20Dumb%20%20Broke%20%20Khalid%20%20Lyrics.mp3?alt=media&token=862389ba-6f03-409b-9645-81fd20d1852f">
                            <th scope="row">
                                <div class="artwork">
                                    <span class="no-border-radius" style='background-image: url("https://i1.sndcdn.com/artworks-000224127351-4m2rkf-t500x500.jpg");'></span>
                                </div>
                            </th>
                            <td class="td-nowrap">Young dumb and broke</td>
                            <td>Khalid</td>
                            <td>American Teen</td>
                            <td>3:25</td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            <!-- end of songs page -->

            <!-- album page -->
            <div id="albums" class="container-fluid hide">
                <div id="recently-added" style="display: inherit;" class="recently-add">
                    <div style="display: flex" class="px-2">
                        <h1 class="list-title px-2 pt-2 w-100">Albums</h1>
                    </div>

                    <!-- A -->
                    <div style="display: flex" class="px-2">
                        <h2 class="list-title px-3 pt-3 w-100">A</h2>
                    </div>

                    <ul style="overflow: scroll;" class="track-list mx-0 row">
                        <li id="sample-album" class="track-card p-2">
                            <div class="artwork">
                                <a href="#"><span style='background-image: url("https://i.imgur.com/5u6JeKZ.png");'></span></a>
                            </div>
                            <div class="info">
                                <a href="#" class="title" title="Ace Combat 7 Original Sound Tracks (2019)">
                                    <p>Ace Combat 7 Original Sound Tracks (2019)</p>
                                </a>
                                <a href="#" class="artist">
                                    <p>Keiki Kobayashi</p>
                                </a>
                            </div>
                        </li>
                        <li id="american_teen" class="track-card p-2">
                            <div class="artwork">
                                <span style='background-image: url("https://i1.sndcdn.com/artworks-000224127351-4m2rkf-t500x500.jpg");'></span>
                            </div>
                            <div class="info">
                                <a href="" class="title">
                                    <p>American Teen</p>
                                </a>
                                <a href="" class="artist">
                                    <p>Khalid ft Marshmello</p>
                                </a>
                            </div>
                        </li>
                    </ul>

                    <!-- L -->
                    <div style="display: flex" class="px-2">
                        <h2 class="list-title px-3 pt-3 w-100">L</h2>
                    </div>

                    <ul style="overflow: scroll;" class="track-list mx-0 row">
                        <li id="live_in_texas" class="track-card p-2">
                            <div class="artwork">
                                <span style='background-image: url("https://i1.sndcdn.com/artworks-000282078677-wnv9pv-t500x500.jpg");'></span>
                            </div>
                            <div class="info">
                                <a href="" class="title">
                                    <p>Live in Texas</p>
                                </a>
                                <a href="" class="artist">
                                    <p>Linkin Park</p>
                                </a>
                            </div>
                        </li>
                    </ul>

                    <!-- S -->
                    <div style="display: flex" class="px-2">
                        <h2 class="list-title px-3 pt-3 w-100">S</h2>
                    </div>

                    <ul style="overflow: scroll;" class="track-list mx-0 row">
                        <li id="spiderman_into_the_spider_verse" class="track-card p-2">
                            <div class="artwork">
                                <span style='background-image: url("https://i1.sndcdn.com/artworks-85AaCd8d3JAv-0-t500x500.jpg");'></span>
                            </div>
                            <div class="info">
                                <a href="" class="title">
                                    <p>Spider-Man: Into the Spider-Verse</p>
                                </a>
                                <a href="" class="artist">
                                    <p>Post MaLone</p>
                                </a>
                            </div>
                        </li>
                    </ul>

                </div>
            </div>
            <!-- end of album page -->

            <!-- sample album Page -->
            <div id="album-info" class="px-2 hide">
                <!-- Album's Title -->
                <h1 class="list-title px-2 pt-2 w-100">Ace Combat 7 Original Sound Tracks (2019)</h1>
                <br>
                <div class="row list-songs">
                    <table class="table table-hover tab-nowrap col-12">
                        <thead>
                        <tr class="col-12">
                            <th style="width: 60px"></th>
                            <!-- <th style="width: 5%; text-align: center">#</th> -->
                            <th style="width: 40%;">Title</th>
                            <th style="width: 20%;">Artist</th>
                            <th style="width: 20%;">Album</th>
                            <th style="width: 10%;"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr src="https://firebasestorage.googleapis.com/v0/b/musicapp-4582e.appspot.com/o/mp3%2F444th%20Air%20Base%20Hangar%20-%20Ace%20Combat%207%20Original%20Soundtrack.mp3?alt=media&token=3bf4497d-73f2-416e-b957-3e88a5a4e472">
                            <td scope="row" class="list-artwork">
                                <div class="artwork">
                                    <span class="no-border-radius" style='background-image: url("https://i.imgur.com/5u6JeKZ.png");'></span>
                                </div>
                            </td>
                            <td>444th Air Base Hanger</td>
                            <td>Unknown Artist</td>
                            <td>Ace Combat 7 Original Sound Tracks (2019)</td>
                            <td>0:59</td>
                        </tr>
                        <tr src="https://firebasestorage.googleapis.com/v0/b/musicapp-4582e.appspot.com/o/mp3%2FIUN%20Briefing%20-%20Ace%20Combat%207%20Original%20Soundtrack%20(1).mp3?alt=media&token=d8bb4c8e-7c67-4811-954e-2b7fce1bb649">
                            <td scope="row" class="list-artwork">
                                <div class="artwork">
                                    <span class="no-border-radius" style='background-image: url("https://i.imgur.com/5u6JeKZ.png");'></span>
                                </div>
                            </td>
                            <!-- <td style="text-align: center">2.</td> -->
                            <td>IUN Briefing</td>
                            <td>Keiki Kobayashi</td>
                            <td>Ace Combat 7 Original Sound Tracks (2019)</td>
                            <td>2:07</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- end of sample album Page -->

            <!-- American teen Page -->
            <div id="american-teen" class="px-2 hide">
                <!-- Album's Title -->
                <h1 class="list-title px-2 pt-2 w-100">American Teen</h1>
                <br>
                <div class="row list-songs">
                    <table class="table table-hover tab-nowrap col-12">
                        <thead>
                        <tr class="col-12">
                            <th style="width: 60px">#</th>
                            <!-- <th style="width: 5%; text-align: center">#</th> -->
                            <th style="width: 40%;">Title</th>
                            <th style="width: 20%;">Artist</th>
                            <th style="width: 20%;">Album</th>
                            <th style="width: 10%;"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr src="https://firebasestorage.googleapis.com/v0/b/musicapp-4582e.appspot.com/o/mp3%2FKhalid%20-%20Better%20(Official%20Video).mp3?alt=media&token=558036d1-ffad-441a-a835-16b8b1b83a5c">
                            <th scope="row">
                                <div class="artwork">
                                    <span class="no-border-radius" style='background-image: url("https://i1.sndcdn.com/artworks-000224127351-4m2rkf-t500x500.jpg");'></span>
                                </div>
                            </th>
                            <td class="td-nowrap">Better</td>
                            <td>Khalid</td>
                            <td>American Teen</td>
                            <td>4:12</td>
                        </tr>
                        <tr src="https://firebasestorage.googleapis.com/v0/b/musicapp-4582e.appspot.com/o/mp3%2FMarshmello%20ft.%20Bastille%20-%20Happier%20(Official%20Lyric%20Video).mp3?alt=media&token=6f0635a8-1e04-4bd5-9ea9-a3f5cba19a7a">
                            <td scope="row" class="list-artwork">
                                <div class="artwork">
                                    <span class="no-border-radius" style='background-image: url("https://i1.sndcdn.com/artworks-000390226092-1vzsos-t500x500.jpg")'></span>
                                </div>
                            </td>
                            <td>Happier</td>
                            <td>Marshmello</td>
                            <td>American Teen</td>
                            <td>3:39</td>
                        </tr>
                        <tr src="https://firebasestorage.googleapis.com/v0/b/musicapp-4582e.appspot.com/o/mp3%2FYoung%20Dumb%20%20Broke%20%20Khalid%20%20Lyrics.mp3?alt=media&token=862389ba-6f03-409b-9645-81fd20d1852f">
                            <th scope="row">
                                <div class="artwork">
                                    <span class="no-border-radius" style='background-image: url("https://i1.sndcdn.com/artworks-000224127351-4m2rkf-t500x500.jpg");'></span>
                                </div>
                            </th>
                            <td class="td-nowrap">Young dumb and broke</td>
                            <td>Khalid</td>
                            <td>American Teen</td>
                            <td>3:25</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- End american teen Page -->

            <!-- Spiderman into the spider verse Page -->
            <div id="spiderman-into-the-spider-verse" class="px-2 hide">
                <!-- Album's Title -->
                <h1 class="list-title px-2 pt-2 w-100">Spider-Man: Into the Spider-Verse</h1>
                <br>
                <div class="row list-songs">
                    <table class="table table-hover tab-nowrap col-12">
                        <thead>
                        <tr class="col-12">
                            <th style="width: 60px">#</th>
                            <!-- <th style="width: 5%; text-align: center">#</th> -->
                            <th style="width: 40%;">Title</th>
                            <th style="width: 20%;">Artist</th>
                            <th style="width: 20%;">Album</th>
                            <th style="width: 10%;"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr src="https://firebasestorage.googleapis.com/v0/b/musicapp-4582e.appspot.com/o/mp3%2FLauv%20-%20I%20Like%20Me%20Better%20%5BOfficial%20Audio%5D%20(1).mp3?alt=media&token=9dc8f558-3ccb-4edb-a3ae-0d1676cd8588">
                            <td scope="row">
                                <div class="artwork">
                                    <span class="no-border-radius" style='background-image: url("https://i1.sndcdn.com/artworks-8n24PQuaQZWL-0-t500x500.jpg");'></span>
                                </div>
                            </td>
                            <td class="td-nowrap">I like me better</td>
                            <td>Lauv</td>
                            <td>spider-Man: Into the Spider-Verse</td>
                            <td>3:18</td>
                        </tr>
                        <tr src="https://firebasestorage.googleapis.com/v0/b/musicapp-4582e.appspot.com/o/mp3%2FPost%20Malone%20Swae%20Lee%20-%20Sunflower%20(Spider-Man%20Into%20the%20Spider-Verse).mp3?alt=media&token=27973f3a-451c-4070-bce0-9647ecf6775f"
                            id="list1">
                            <td scope="row" class="list-artwork">
                                <div class="artwork">
                                    <span class="no-border-radius" style='background-image: url("https://i1.sndcdn.com/artworks-85AaCd8d3JAv-0-t500x500.jpg");'></span>
                                </div>
                            </td>
                            <td>Sunflower</td>
                            <td>Post MaLone</td>
                            <td>Spider-Man: Into the Spider-Verse</td>
                            <td>2:42</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- End spiderman into the spider verse Page -->

            <!-- live in texas Page -->
            <div id="live-in-texas" class="px-2 hide">
                <!-- Album's Title -->
                <h1 class="list-title px-2 pt-2 w-100">Live in Texas</h1>
                <br>
                <div class="row list-songs">
                    <table class="table table-hover tab-nowrap col-12">
                        <thead>
                        <tr class="col-12">
                            <th style="width: 60px">#</th>
                            <!-- <th style="width: 5%; text-align: center">#</th> -->
                            <th style="width: 40%;">Title</th>
                            <th style="width: 20%;">Artist</th>
                            <th style="width: 20%;">Album</th>
                            <th style="width: 10%;"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr src="https://firebasestorage.googleapis.com/v0/b/musicapp-4582e.appspot.com/o/In%20The%20End%20-%20Linkin%20Park.mp3?alt=media&token=8d74a9c1-77a5-4d38-baf4-d8bb4113f34f">
                            <td scope="row" class="list-artwork">
                                <div class="artwork">
                                    <span class="no-border-radius" style='background-image: url("https://i1.sndcdn.com/artworks-000282078677-wnv9pv-t500x500.jpg");'></span>
                                </div>
                            </td>
                            <td>In the end</td>
                            <td>Linkin Park</td>
                            <td>Live in Texas</td>
                            <td>3:38</td>
                        </tr>
                        <tr src="https://firebasestorage.googleapis.com/v0/b/musicapp-4582e.appspot.com/o/mp3%2FBazzi%20%E2%80%93%20Mine%20(Lyrics)%20%F0%9F%8E%B5.mp3?alt=media&token=8af98424-42da-4599-b0c3-30babb10a61e">
                            <td scope="row" class="list-artwork">
                                <div class="artwork">
                                    <span class="no-border-radius" style='background-image: url("https://i1.sndcdn.com/artworks-000334054377-fgpyvw-t500x500.jpg");'></span>
                                </div>
                            </td>
                            <td>Mine</td>
                            <td>Bazzi</td>
                            <td>Live in Texas</td>
                            <td>2:16</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- End live in texas Page -->



            <!-- artists page -->
            <div id="artists" class="container-fluid hide">
                <div id="recently-added" style="display: inherit;" class="recently-add">
                    <div style="display: flex" class="px-2">
                        <h1 class="list-title px-2 pt-2 w-100">Artists</h1>
                    </div>

                    <!-- K -->
                    <div style="display: flex" class="px-2">
                        <h2 class="list-title px-3 pt-3 w-100">K</h2>
                    </div>
                    <ul style="overflow: scroll;" class="track-list mx-0 row">
                        <li id="artist-keiki-kobayashi" class="track-card p-2">
                            <div class="artwork">
                                <a href="#"><span style='background-image: url("https://i.imgur.com/5u6JeKZ.png");'></span></a>
                            </div>
                            <div class="info">
                                <a href="#" class="title" title="Ace Combat 7 Original Sound Tracks (2019)">
                                    <p>Keiki Kobayashi</p>
                                </a>
                            </div>
                        </li>
                        <li id="artist-khalid" href="#" class="track-card p-2">
                            <div class="artwork">
                                <a href="#"><span style='background-image: url("https://i1.sndcdn.com/artworks-000224127351-4m2rkf-t500x500.jpg");'></span>
                                </a>
                            </div>
                            <div class="info">
                                <a href="#" class="title">
                                    <p>Khalid</p>
                                </a>
                            </div>
                        </li>
                    </ul>

                    <!-- L -->
                    <div style="display: flex" class="px-2">
                        <h2 class="list-title px-3 pt-3 w-100">I</h2>
                    </div>

                    <ul style="overflow: scroll;" class="track-list mx-0 row">
                        <li id="artist-lauv" class="track-card p-2">
                            <div class="artwork">
                                <span style='background-image: url("https://s3.us-east-2.amazonaws.com/s3.mix1051fm.com/styles/delta__775x515/s3/lauv%20775x515.jpg?itok=NzNbus6E&c=4ee32dfc3c61cdac200ac5591d3e369a");'></span>
                            </div>
                            <div class="info">
                                <a href="" class="title">
                                    <p>LAUV</p>
                                </a>
                            </div>
                        </li>
                    </ul>

                    <!-- M -->
                    <div style="display: flex" class="px-2">
                        <h2 class="list-title px-3 pt-3 w-100">M</h2>
                    </div>

                    <ul style="overflow: scroll;" class="track-list mx-0 row">
                        <li id="artist-marshmello" class="track-card p-2">
                            <div class="artwork">
                                <span style='background-image: url("https://thumbor.forbes.com/thumbor/0x0/smart/https%3A%2F%2Fspecials-images.forbesimg.com%2Fimageserve%2F5be1e2a3a7ea437059163919%2F960x0.jpg%3FcropX1%3D0%26cropX2%3D1999%26cropY1%3D0%26cropY2%3D1999");'></span>
                            </div>
                            <div class="info">
                                <a href="" class="title">
                                    <p>Marshmello</p>
                                </a>
                            </div>
                        </li>
                    </ul>



                    <!-- P -->
                    <div style="display: flex" class="px-2">
                        <h2 class="list-title px-3 pt-3 w-100">P</h2>
                    </div>

                    <ul style="overflow: scroll;" class="track-list mx-0 row">
                        <li id="artist-post-malone" class="track-card p-2">
                            <div class="artwork">
                                <span style='background-image: url("https://i1.sndcdn.com/artworks-85AaCd8d3JAv-0-t500x500.jpg");'></span>
                            </div>
                            <div class="info">
                                <a href="" class="title">
                                    <p>Post Malone</p>
                                </a>
                            </div>
                        </li>
                    </ul>



                </div>
            </div>
            <!-- end of artists page -->

            <!-- Khalid page -->
            <div id="khalid" class="px-2 hide">
                <h1 class="list-title px-2 pt-2 w-100">Khalid</h1>
                <br>
                <div class="row list-songs">
                    <table class="table table-hover tab-nowrap col-12">
                        <thead>
                        <tr class="col-12">
                            <th style="width: 60px">#</th>
                            <th style="width: 40%;">Title</th>
                            <th style="width: 20%;">Artist</th>
                            <th style="width: 20%;">Album</th>
                            <th style="width: 10%;"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr src="https://firebasestorage.googleapis.com/v0/b/musicapp-4582e.appspot.com/o/mp3%2FYoung%20Dumb%20%20Broke%20%20Khalid%20%20Lyrics.mp3?alt=media&token=862389ba-6f03-409b-9645-81fd20d1852f">
                            <th scope="row">
                                <div class="artwork">
                                    <span class="no-border-radius" style='background-image: url("https://i1.sndcdn.com/artworks-000224127351-4m2rkf-t500x500.jpg");'></span>
                                </div>
                            </th>
                            <td class="td-nowrap">Young dumb and broke</td>
                            <td>Khalid</td>
                            <td></td>
                            <td>0:00</td>
                        </tr>
                        <tr src="https://firebasestorage.googleapis.com/v0/b/musicapp-4582e.appspot.com/o/mp3%2FKhalid%20-%20Better%20(Official%20Video).mp3?alt=media&token=558036d1-ffad-441a-a835-16b8b1b83a5c">
                            <th scope="row">
                                <div class="artwork">
                                    <span class="no-border-radius" style='background-image: url("https://i1.sndcdn.com/artworks-000224127351-4m2rkf-t500x500.jpg");'></span>
                                </div>
                            </th>
                            <td class="td-nowrap">Better</td>
                            <td>Khalid</td>
                            <td></td>
                            <td>0:00</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- End Khalid Page -->

            <!-- Marshmello page -->
            <div id="marshmello" class="px-2 hide">
                <h1 class="list-title px-2 pt-2 w-100">Marshmello</h1>
                <br>
                <div class="row list-songs">
                    <table class="table table-hover tab-nowrap col-12">
                        <thead>
                        <tr class="col-12">
                            <th style="width: 60px">#</th>
                            <th style="width: 40%;">Title</th>
                            <th style="width: 20%;">Artist</th>
                            <th style="width: 20%;">Album</th>
                            <th style="width: 10%;"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr src="https://firebasestorage.googleapis.com/v0/b/musicapp-4582e.appspot.com/o/mp3%2FMarshmello%20ft.%20Bastille%20-%20Happier%20(Official%20Lyric%20Video).mp3?alt=media&token=6f0635a8-1e04-4bd5-9ea9-a3f5cba19a7a">
                            <td scope="row" class="list-artwork">
                                <div class="artwork">
                                    <span class="no-border-radius" style='background-image: url("https://i1.sndcdn.com/artworks-000390226092-1vzsos-t500x500.jpg")'></span>
                                </div>
                            </td>
                            <td>Happier</td>
                            <td>Marshmello</td>
                            <td>American Teen</td>
                            <td>3:39</td>
                        </tr>
                        <tr src="https://firebasestorage.googleapis.com/v0/b/musicapp-4582e.appspot.com/o/mp3%2FBazzi%20%E2%80%93%20Mine%20(Lyrics)%20%F0%9F%8E%B5.mp3?alt=media&token=8af98424-42da-4599-b0c3-30babb10a61e">
                            <td scope="row" class="list-artwork">
                                <div class="artwork">
                                    <span class="no-border-radius" style='background-image: url("https://i1.sndcdn.com/artworks-000334054377-fgpyvw-t500x500.jpg");'></span>
                                </div>
                            </td>
                            <td>Mine</td>
                            <td>Bazzi</td>
                            <td>Live in Texas</td>
                            <td>2:16</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- End marshmello Page -->

            <!-- Post Malone page -->
            <div id="post-malone" class="px-2 hide">
                <h1 class="list-title px-2 pt-2 w-100">Marshmello</h1>
                <br>
                <div class="row list-songs">
                    <table class="table table-hover tab-nowrap col-12">
                        <thead>
                        <tr class="col-12">
                            <th style="width: 60px">#</th>
                            <th style="width: 40%;">Title</th>
                            <th style="width: 20%;">Artist</th>
                            <th style="width: 20%;">Album</th>
                            <th style="width: 10%;"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr src="https://firebasestorage.googleapis.com/v0/b/musicapp-4582e.appspot.com/o/mp3%2FPost%20Malone%20Swae%20Lee%20-%20Sunflower%20(Spider-Man%20Into%20the%20Spider-Verse).mp3?alt=media&token=27973f3a-451c-4070-bce0-9647ecf6775f"
                            id="list1">
                            <td scope="row" class="list-artwork">
                                <div class="artwork">
                                    <span class="no-border-radius" style='background-image: url("https://i1.sndcdn.com/artworks-85AaCd8d3JAv-0-t500x500.jpg");'></span>
                                </div>
                            </td>
                            <td>Sunflower</td>
                            <td>Post MaLone</td>
                            <td>Spider-Man: Into the Spider-Verse</td>
                            <td>2:42</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- End Post Malone Page -->

            <!-- Lauv page -->
            <div id="lauv" class="px-2 hide">
                <h1 class="list-title px-2 pt-2 w-100">Marshmello</h1>
                <br>
                <div class="row list-songs">
                    <table class="table table-hover tab-nowrap col-12">
                        <thead>
                        <tr class="col-12">
                            <th style="width: 60px">#</th>
                            <th style="width: 40%;">Title</th>
                            <th style="width: 20%;">Artist</th>
                            <th style="width: 20%;">Album</th>
                            <th style="width: 10%;"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr src="https://firebasestorage.googleapis.com/v0/b/musicapp-4582e.appspot.com/o/mp3%2FLauv%20-%20I%20Like%20Me%20Better%20%5BOfficial%20Audio%5D%20(1).mp3?alt=media&token=9dc8f558-3ccb-4edb-a3ae-0d1676cd8588">
                            <td scope="row">
                                <div class="artwork">
                                    <span class="no-border-radius" style='background-image: url("https://i1.sndcdn.com/artworks-8n24PQuaQZWL-0-t500x500.jpg");'></span>
                                </div>
                            </td>
                            <td class="td-nowrap">I like me better</td>
                            <td>Lauv</td>
                            <td>spider-Man: Into the Spider-Verse</td>
                            <td>3:18</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- End lauv Page -->

        </div>
    </div>


@endsection