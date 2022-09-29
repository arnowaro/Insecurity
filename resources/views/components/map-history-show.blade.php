<div>
    <div id="mapShow" class="h-60 w-full md:rounded-[25px] md:drop-shadow-xl  z-0 "></div>


</div>



@section('js')
    <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js"
        integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ=="
        crossorigin=""></script>
    <script>
        var map = L.map('mapShow').setView([{{$history->latitude }}, {{ $history->longitude }}], 13);
        var marker = L.marker([{{$history->latitude }}, {{ $history->longitude }}]);
        marker.addTo(map);

        var tiles = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: ''
        }).addTo(map);
        map.attributionControl.setPrefix('')




    </script>
@endsection
