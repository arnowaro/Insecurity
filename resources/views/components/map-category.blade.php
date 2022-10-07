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
            //     .bindPopup("Bonjour cliquez sur <a href='{{ route('login') }}'>{{ __('Login') }}</a> ou <a href='{{ route('register') }}'>{{ __('Register') }}</a> pour profiter pleinement de Walksafe!").openPopup();



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


            @foreach ($category->history() as $history)

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
