<div class="relative">
    <div id="mapHistory" class="h-60 w-full md:rounded-[25px] md:drop-shadow-xl  z-0 "></div>

    <div class="flex items-center gap-1 absolute bottom-2 left-3 z-50 bg-blue-700 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full"
        onclick="myPosition()"> <span class="hidden md:block">Ma position </span>
    </div>
</div>



@section('js')
    <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js"
        integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ=="
        crossorigin=""></script>
    <script>
        // set view my position
        var map = L.map('mapHistory').fitWorld();
        map.locate({
            setView: true,
            maxZoom: 16
        });
        var marker = L.marker();



        // fonction qui localise directement ma position et qui remplie les inputs=
        function onLocationFound(e) {
            var radius = e.accuracy;
            var latitude = document.getElementById('latitude');
            var longitude = document.getElementById('longitude');
            var marker = L.marker(e.latlng).addTo(map);
            marker.bindPopup("<b>Ma localisation</b><br>Utiliser ma position GPS actuelle.").openPopup();
            longitude.value = marker.getLatLng().lng;
            latitude.value = marker.getLatLng().lat;
            L.circle(e.latlng, radius).addTo(map);
        }


        map.on('locationfound', onLocationFound);

        function onLocationError(e) {
            alert(e.message);
        }

        map.on('locationerror', onLocationError);



        //========================================================================

        var tiles = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: ''
        }).addTo(map);
        map.attributionControl.setPrefix('')





        // pour placer un marker au click sur la carte_____________________________
        map.on('click', function(e) {
            if (marker) {
                map.removeLayer(marker);
            }
            marker = L.marker(e.latlng).addTo(map);
            marker.bindPopup("<b>History placée! </b>").openPopup();
            var latitude = document.getElementById('latitude');
            var longitude = document.getElementById('longitude');
            longitude.value = marker.getLatLng().lng;
            latitude.value = marker.getLatLng().lat;
        });
        // ________________________________________________________________



        function myPosition() {
            if (marker) {
                map.removeLayer(marker);
            }
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
            } else {
                alert('Geolocation is not supported by this browser.');
            }
        }




        function showPosition(position) {
            if (marker) {
                map.removeLayer(marker);
            }
            var lat = position.coords.latitude;
            var lng = position.coords.longitude;
            var myLatLng = {
                lat: lat,
                lng: lng
            };

            var marker = L.marker(myLatLng).addTo(map);
            marker.bindPopup(
                    "<b>Ma localisation</b><br>Utiliser ma position GPS actuelle.")
                .openPopup();
            // fill inputs with my position
            var latitude = document.getElementById('latitude');
            var longitude = document.getElementById('longitude');
            longitude.value = marker.getLatLng().lng;
            latitude.value = marker.getLatLng().lat;

        }









        // var tiles = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        //     maxZoom: 19,
        //     attribution: ''
        // }).addTo(map);
        // map.attributionControl.setPrefix('')
    </script>
@endsection
