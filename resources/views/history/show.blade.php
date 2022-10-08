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






                @auth
                @if ( Auth::user()->id == $history->user_id )



                <div class="absolute flex right-5 top-4">
                    <a href="#" class="z-10"> <i class="icon-feather-more-horizontal text-2xl bg-blue-200 rounded-full p-2 transition -mr-1 dark:hover:bg-gray-700"></i> </a>
                    <div class="bg-white flex z-10 w-56 shadow-md mx-auto p-2 mt-12 rounded-md text-gray-500 hidden text-base border border-gray-100 dark:bg-gray-900 dark:text-gray-100 dark:border-gray-700"
                    uk-drop="mode: click;pos: bottom-right;animation: uk-animation-slide-bottom-small">


                        <ul class=" z-40">

                            <li>
                                {{-- si il y a au moins un utilisateur involved dans l'action, il est impossible de le modifier --}}

                               <a href="{{ route('history.edit',['id' => $history->id])}}" class="flex items-center px-3 py-2 hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                               <i class="uil-edit-alt mr-1"></i>  Modifier l'history
                               </a>





                            </li>


                            {{-- <li>
                            <hr class="-mx-2 my-2 dark:border-gray-800">
                            </li> --}}
                            <li>
                                <a href="#modal-sections" uk-toggle class="  flex items-center px-3 py-2 text-red-500 hover:bg-red-100 hover:text-red-500 rounded-md dark:hover:bg-red-600">
                                <i class="uil-trash-alt "></i>  Supprimer
                                </a>
                                {{-- pop up confirmation --}}


                                <div id="modal-sections" uk-modal>
                                    <div class="uk-modal-dialog rounded-[25px] drop-shadow-2xl">
                                        <button class="uk-modal-close-default m-3" type="button" uk-close></button>
                                      <div class="flex flex-col justify-center items-center">
                                        <div class="uk-modal-header">
                                            <h2 class="uk-modal-title" > Souhaitez vous supprimez l'history </h2>
                                        </div>
                                        {{-- <div class="uk-modal-body">
                                            <p> En supprimant l'action, l'action ne serra </p>
                                        </div> --}}
                                        <div class="uk-modal-footer text-right justify-around flex gap-4">
                                            <form action="{{ route('history.delete',['id' => $history->id])}}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <input type="hidden" name="id" value="{{$history->id}}">
                                                <input type="hidden" name="user_id" value="{{ $history->user->id }}">
                                                {{-- <input type="submit" value="ok" class="hidden" id="submit_delete"> --}}
                                                <button class=" button bg-red-100 hover:bg-red-800 hover:text-white text-red-600 uk-modal-close" type="button" onclick=" document.getElementById('submit_delete').click() " >   <i class="uil-trash-alt "></i> {{__('Yes')}} </button>
                                                {{-- <button class="button gray" type="button">{{__('No')}}</button> --}}
                                                {{-- button no close pop up --}}
                                                <button class="button bg-gray-100 hover:bg-gray-800 hover:text-white text-gray-600 uk-modal-close" type="button" >   </i> {{__('No')}} </button>
                                            </form>
                                        </div>
                                    </div>
                                    </div>
                                </div>

                            </li>
                        </ul>

                    </div>
                </div>
                @endif
                @endauth





























                {{-- //  status valided history --}}
                @include('components.flashMessage')
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
                                <div class="flex justify-center items-center gap-2">
                                    <div class="icon-material-outline-assignment"></div>
                                    <h1 class="block text-xl font-bold"> Description </h1>
                                </div>
                                <p> {{$history->description}}</p>
                            </div>

                            <a href="#" id="more-text" uk-toggle="target: #more-text ; cls: line-clamp-3"> See
                                more </a>

                        </div>

                    </div>

                    <div class="card p-7">
                        <div class="flex justify-center items-center gap-2 ">

                            <div class=" icon-material-outline-gavel"></div>
                            <h1 class="block text-xl font-bold"> Jugement </h1>
                        </div>
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
