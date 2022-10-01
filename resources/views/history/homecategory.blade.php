@extends('layouts.app')
@section('title')
    <title>{{ __('Home') }}</title>
@endsection
@section('css')
    <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css"
        integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ=="
        crossorigin="" />
@endsection

@section('main')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link href="assets/images/favicon.png" rel="icon" type="image/png">

    <!-- Basic Page Needs
        ================================================== -->
    <title>Socialite Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Socialite is - Professional A unique and beautiful collection of UI elements">

    @section('css')
    <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css"
        integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ=="
        crossorigin="" />
    @endsection



       <!-- icons
    ================================================== -->
    <link rel="stylesheet" href="{{ asset('css/icons.css') }}">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{ asset('css/uikit.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

</head>


        <!-- Header -->


         <!-- sidebar -->


        <!-- Main Contents -->
        <div class="main_content lg:mr-20 ">
            <div class="mcontainer">
                <div class="relative uk-slider" uk-slider="finite: true">

                    <div class="uk-slider-container px-1 py-2">
                        <ul class="uk-slider-items uk-child-width-1-4@m uk-child-width-1-3@s uk-child-width-1-2 uk-grid-small uk-grid" style="transform: translate3d(0px, 0px, 0px);">
                           @foreach ($category->history as $history)

                          <li tabindex="-1" class="uk-active">
                              <div>


                                  <a href="/history/{{$history->id}}" class="font-semibold line-clamp-2">{{$history->titre}}</a>
                                   <div class="pt-2">
                                      <a href="#" class="text-sm font-medium"> Adrian Mohani  </a>
                                      <div class="flex space-x-2 items-center text-sm">
                                          <div> Advance level</div>
                                          <div class="md:block hidden">·</div>
                                          <div> 156.9K Enrolled</div>
                                        </div>
                                    </div>

                                </div>
                            </li>


                            @endforeach




                        </ul>

                        <a class="absolute bg-white top-16 flex items-center justify-center p-2 -left-4 rounded-full shadow-md text-xl w-9 z-10 dark:bg-gray-800 dark:text-white uk-invisible" href="#" uk-slider-item="previous"> <i class="icon-feather-chevron-left"></i></a>
                        <a class="absolute bg-white top-16 flex items-center justify-center p-2 -right-4 rounded-full shadow-md text-xl w-9 z-10 dark:bg-gray-800 dark:text-white" href="#" uk-slider-item="next"> <i class="icon-feather-chevron-right"></i></a>

                    </div>
                </div>

                {{-- // map with histories of a category --}}
                <div>
                    <div id="my-map" class="h-96 w-full
                    md:rounded-[25px] md:drop-shadow-xl  z-0
                    ">

                    </div>
                    {{-- <button class="flex items-center gap-1 absolute bottom-2 left-3 z-50 bg-emerald-500 hover:bg-white text-white hover:text-emerald-600 font-bold py-2 px-4 rounded-full"
                    onclick="myPosition()"
                    > <span class="text-xl icon-material-outline-where-to-vote"></span> <span class="hidden md:block" >Ma position </span> </button> --}}
                    </div>




                    @section('js')
                        <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js"
                            integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ=="
                            crossorigin=""></script>
                        <script>

                            var map = L.map('my-map').fitWorld();
                            map.locate({setView: true, maxZoom: 16, minZoom: 5,});




                            function onLocationFound(e) {
                            var radius = e.accuracy;
                            // @auth
                            // L.marker(e.latlng).addTo(map)
                            //     .bindPopup("Bonjour {{Auth::user()->firstname}} !").openPopup();
                            // @endauth
                            // @guest
                            // L.marker(e.latlng).addTo(map)
                            //     .bindPopup("Bonjour cliquez sur <a href='{{ route('login') }}'>{{ __('Login') }}</a> ou <a href='{{ route('register') }}'>{{ __('Register') }}</a> pour profiter pleinement de Risees!").openPopup();



                            // @endguest
                            L.circle(e.latlng, radius).addTo(map);
                                }

                            map.on('locationfound', onLocationFound);
                            function onLocationError(e) {
                                alert(e.message);
                            }

                            map.on('locationerror', onLocationError);




                            var tiles = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {

                                maxZoom: 19,
                                attribution: ''
                            }).addTo(map);
                            map.attributionControl.setPrefix('')


                            @foreach ($category->history as $history)

                            var marker = L.marker([{{ $history->latitude }}, {{ $history->longitude }}]).addTo(map);
                            marker.bindPopup("<a href='{{ route('history.show', $history->id) }}'>{{ $history->titre }} </a> <br>  {{ Str::limit($history->description, 30) }}").openPopup();

                        @endforeach


                            function myPosition() {
                                if (navigator.geolocation) {
                                navigator.geolocation.getCurrentPosition(showPosition);
                                } else {
                                alert('Geolocation is not supported by this browser.');
                                }
                            }
                            function showPosition(position) {
                                var lat = position.coords.latitude;
                                var lng = position.coords.longitude;
                                var myLatLng = {lat: lat, lng: lng};
                                var marker = L.marker(myLatLng).addTo(map);
                                marker.bindPopup("<b>Bonjour</b><br>Vous êtes ici!.").openPopup();
                            }


                            </script>

                                    <script>
                                //  on click create a marker and fill the input latitude and longitude with value
                                //   map.on('click', function(e) {
                                //     if (marker) {
                                //       map.removeLayer(marker);
                                //     }
                                //     marker = L.marker(e.latlng).addTo(map);
                                //     marker.bindPopup("<b>Action placée! </b>").openPopup();
                                //     var latitude = document.getElementById('latitude');
                                //     var longitude = document.getElementById('longitude');
                                //     longitude.value = marker.getLatLng().lng;
                                //     latitude.value = marker.getLatLng().lat;
                                </script>




                    @endsection


                <div class="relative uk-slider" uk-slider="finite: true">

                    <div class="uk-slider-container px-1 py-3">
                        <ul class="uk-slider-items uk-child-width-1-5@m uk-child-width-1-3@s uk-child-width-1-2 uk-grid-small uk-grid" style="transform: translate3d(0px, 0px, 0px);">


                            <li tabindex="-1" class="uk-active  flex justify-center">
                                <div class=" flex flex-col w-full items-center justify-center">
                                     <a href="/" class="w-1/2 md:h-28 h-20 justify-center items-center overflow-hidden rounded-lg relative flex">
                                         <img src="https://st.depositphotos.com/29688696/58028/v/600/depositphotos_580283956-stock-illustration-a-knife-weapon-the-weapon.jpg" alt="" class="w-20 h-20 rounded-full flex justify-center items-center absolute  object-cover">
                                         {{-- <span class="absolute bg-black bg-opacity-60 bottom-1 font-semibold px-1.5 py-0.5 right-1 rounded text-white text-xs">  12:21</span>
                                         <img src="assets/images/icon-play.svg" class="w-12 h-12 uk-position-center" alt=""> --}}
                                     </a>
                                     <div class="pt-3 flex justify-center w-full items-center">
                                         <a href="home" class="font-semibold  line-clamp-2"> ALL</a>

                                     </div>
                                 </div>
                             </li>

                           @foreach ($categories as $category )



                            <li tabindex="-1" class="uk-active  flex justify-center">
                                <div class=" flex flex-col w-full items-center justify-center">
                                     <a href="/homecategory/{{$category->id}}" class="w-1/2 md:h-28 h-20 justify-center items-center overflow-hidden rounded-lg relative flex">
                                         <img src="https://st.depositphotos.com/29688696/58028/v/600/depositphotos_580283956-stock-illustration-a-knife-weapon-the-weapon.jpg" alt="" class="w-20 h-20 rounded-full flex justify-center items-center absolute  object-cover">
                                         {{-- <span class="absolute bg-black bg-opacity-60 bottom-1 font-semibold px-1.5 py-0.5 right-1 rounded text-white text-xs">  12:21</span>
                                         <img src="assets/images/icon-play.svg" class="w-12 h-12 uk-position-center" alt=""> --}}
                                     </a>
                                     <div class="pt-3 flex justify-center w-full items-center">
                                         <a href="/homecategory/{{$category->id}}" class="font-semibold  line-clamp-2"> {{$category->label}} </a>

                                     </div>
                                 </div>
                             </li>


                            @endforeach

                        </ul>



                        <a class="absolute bg-white top-16 flex items-center justify-center p-2 -left-4 rounded-full shadow-md text-xl w-9 z-10 dark:bg-gray-800 dark:text-white uk-invisible" href="#" uk-slider-item="previous"> <i class="icon-feather-chevron-left"></i></a>
                        <a class="absolute bg-white top-16 flex items-center justify-center p-2 -right-4 rounded-full shadow-md text-xl w-9 z-10 dark:bg-gray-800 dark:text-white" href="#" uk-slider-item="next"> <i class="icon-feather-chevron-right"></i></a>

                    </div>
                </div>

                <!-- feed -->
            </div>
        </div>

    <!-- For Night mode -->
    <script>
        (function (window, document, undefined) {
            'use strict';
            if (!('localStorage' in window)) return;
            var nightMode = localStorage.getItem('gmtNightMode');
            if (nightMode) {
                document.documentElement.className += ' night-mode';
            }
        })(window, document);

        (function (window, document, undefined) {

            'use strict';

            // Feature test
            if (!('localStorage' in window)) return;

            // Get our newly insert toggle
            var nightMode = document.querySelector('#night-mode');
            if (!nightMode) return;

            // When clicked, toggle night mode on or off
            nightMode.addEventListener('click', function (event) {
                event.preventDefault();
                document.documentElement.classList.toggle('dark');
                if (document.documentElement.classList.contains('dark')) {
                    localStorage.setItem('gmtNightMode', true);
                    return;
                }
                localStorage.removeItem('gmtNightMode');
            }, false);

        })(window, document);
    </script>

    <!-- Javascript
    ================================================== -->
     <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="assets/js/tippy.all.min.js"></script>
    <script src="assets/js/uikit.js"></script>
    <script src="assets/js/simplebar.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>

</body>
</html>

@endsection
