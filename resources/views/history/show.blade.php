@extends('layouts.app')
@section('title')
    <title> History </title>
@endsection
@section('main')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css"
        integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ=="
        crossorigin="" />



    <div class="main_content">
        <div class="mcontainer">

            <!-- cover -->
            <div class="profile lg:rounded-xl">


                <div class="profiles_content">
                    <div class="profile_info lg:p-3">
                        <h1> {{$history->titre}} </h1>
                        <div class="flex space-x-2 items-center md:pt-3 text-base md:justify-start justify-center">

                            <div> Categorie(s) :

                               @foreach ( $history->CategorY as $categorie )
                               {{$categorie->label}}

                               @endforeach
                            </div>
                        </div>
                        <div class="flex space-x-2 items-center md:pt-3 text-base md:justify-start justify-center">

                           {{-- // date french format --}}
                            <div> Date : {{date('d/m/Y', strtotime($history->date))}} </div>

                            <div> Ville: {{$history->ville}} </div>


                            <div> Pays : {{$history->pays}} </div>


                        </div>

                    </div>






                </div>


            </div>

            <div class="md:flex  md:space-x-8 lg:mx-14">
                 <!-- Sidebar -->
                 <div class="w-full flex-shirink-0 gap-3 flex flex-col ">


                    <x-map-history-show :id="$history->id" />






                </div>
                <div class="space-y-5 flex-shrink-0 md:w-7/12">



                    <div class="card p-7">

                        <div class="space-y-4">

                            <div class="space-y-4">
                                <h1 class="block text-xl font-bold"> Description </h1>
                                <p> {{$history->description}}</p>
                            </div>

                            <a href="#" id="more-text" uk-toggle="target: #more-text ; cls: line-clamp-3"> See
                                more </a>

                        </div>

                    </div>

                    <div class="card p-7">

                        <h1 class="block text-xl font-bold"> Jugement </h1>
                        <div class="text-gray-400"> {{$history->jugement}}</div>

                        {{-- <div class="my-4 flex-col flex gap-2">


                            <div class="text-blue-500 mb-4 text-lg font-medium">
                                <span> 32,000,000</span> votes
                            </div>




                            <div class="bg-gray-50 rounded-2xl h-2 w-full relative overflow-hidden">
                                <div class="bg-blue-500 h-full w-1/2 absolute left-0 top-0"></div>

                                <div class="bg-blue-600 w-1/3 h-full"></div>

                                <div class="bg-red-500 h-full w-1/2 absolute right-0 top-0"></div>
                            </div>



                            <div class="flex items-center space-x-2">
                                <button
                                    class="flex items-center justify-center h-10 px-6 rounded-md space-x-1.5 bg-blue-600 text-white">
                                    <ion-icon name="thumbs-up" class="text-xl md hydrated" role="img"
                                        aria-label="thumbs up"></ion-icon>
                                    <span> Like </span>
                                </button>
                                <button
                                    class="flex items-center justify-center h-10 px-6 rounded-md space-x-1.5 bg-gray-200">
                                    <ion-icon name="thumbs-down" class="text-xl md hydrated" role="img"
                                        aria-label="thumbs down"></ion-icon>
                                    <span> Dislike </span>
                                </button>
                            </div>



                        </div> --}}



                    </div>



                </div>


            </div>

        </div>
    </div>
@endsection
