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
            <div class="profile lg:rounded-b-xl">

                <div class="profiles_banner">
                    <img src="assets/images/group/group-cover-2.jpg" alt="" class="z-10">
                </div>
                <div class="profiles_content">
                    <div class="profile_info lg:p-3">
                        <h1> Titre </h1>
                        <div class="flex space-x-2 items-center md:pt-3 text-base md:justify-start justify-center">

                            <div> Categorie(s)
                                <a href="#" class="font-medium"> Parent Project Muscular Dystrophy</a>
                            </div>
                        </div>
                        <div class="flex space-x-2 items-center md:pt-3 text-base md:justify-start justify-center">

                            <div> Sous-Categorie(s)
                                <a href="#" class="font-medium"> Parent Project Muscular Dystrophy</a>
                            </div>
                        </div>

                    </div>





                    <div
                        class="flex items-center space-x-4 lg:absolute bottom-0 right-0 p-6 z-10 justify-center md:text-base font-medium">
                        <a href="#"
                            class="flex items-center justify-center h-10 px-6 rounded-md space-x-1.5 bg-gray-200">
                            <span> Share </span>
                        </a>
                        <a href="#"
                            class="flex items-center justify-center h-10 px-6 rounded-md space-x-1.5 bg-blue-600 text-white">
                            <ion-icon name="color-wand" class="text-xl md hydrated" role="img" aria-label="color wand">
                            </ion-icon>
                            <span> Donated</span>
                        </a>
                    </div>
                </div>


            </div>

            <div class="md:flex  md:space-x-8 lg:mx-14">
                <div class="space-y-5 flex-shrink-0 md:w-7/12">



                    <div class="card p-7">

                        <div class="space-y-4">

                            <div class="space-y-4">
                                <h1 class="block text-xl font-bold"> Description </h1>
                                <p> Ville</p>
                                <p> Date</p>
                                <p> Categorie</p>
                                <p> Sous categorie</p>
                                <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                    euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad
                                    minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut
                                    aliquip ex ea commodo consequat</p>
                                <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                    euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad
                                    minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut
                                    aliquip ex ea commodo consequat</p>
                            </div>
                            <div class="line-clamp-3" id="more-text">
                                Just as there are breeds of chickens for egg and breeds of chickens for meat, there are
                                ducks breeds specifically for egg production. While duck eggs are more popular in Asia,
                                for those with allergies to chicken eggs, duck eggs are a good alternative. Ron Kean
                                from the University of Wisconsin in Madison will be discussing how to raise ducks for
                                egg production. Just as there are breeds of chickens for egg and breeds of chickens for
                                meat, there are ducks breeds specifically for egg production. While duck eggs are more
                                popular in Asia, for those with allergies to chicken eggs, duck eggs are a good
                                alternative. Ron Kean from the University of Wisconsin in Madison will be discussing how
                                to raise ducks for egg production.
                            </div>
                            <a href="#" id="more-text" uk-toggle="target: #more-text ; cls: line-clamp-3"> See
                                more </a>

                        </div>

                    </div>

                   

                </div>

                <!-- Sidebar -->
                <div class="w-full flex-shirink-0 gap-3 flex flex-col ">


                    <x-map />

                    <div class="card p-7">

                        <div class="font-bold text-2xl"> Verdict du juge : </div>
                        <div class="text-gray-400"> 30 jours de prison ferme</div>

                        <div class="my-4 flex-col flex gap-2">


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



                        </div>



                    </div>


                    <div class="card px-6 py-7">
                        <div class="mb-7">
                            <h4 class="text-xl font-semibold"> Fundraiser progress </h4>
                            <div class="grid grid-flow-col gap-2 mt-4 text-center">
                                <a href="$" class="hover:bg-gray-100 rounded-md py-2">
                                    <h4 class="font-bold text-2xl block mt-3"> 86 </h4>
                                    <div class="mt-1"> Donated </div>
                                </a>
                                <a href="$" class="hover:bg-gray-100 rounded-md py-2">
                                    <h4 class="font-bold text-2xl block mt-3"> 18.9K </h4>
                                    <div class="mt-1"> Invated </div>
                                </a>
                                <a href="$" class="hover:bg-gray-100 rounded-md py-2">
                                    <h4 class="font-bold text-2xl block mt-3"> 1.5K </h4>
                                    <div class="mt-1"> Shared </div>
                                </a>
                            </div>

                        </div>
                        <hr class="-mx-6 my-5 border-gray-100">

                        <!--  widget  -->
                        <div>
                            <div class="flex items-center justify-between mb-4">
                                <div>
                                    <h4 class="text-xl -mb-0.5 font-semibold"> Invite friends </h4>
                                </div>
                                <a href="#" class="text-blue-600 ">See all</a>
                            </div>
                            <div class="-mx-1">
                                <div class="flex items-center space-x-4 hover:bg-gray-100 rounded-md -mx-2 p-2">
                                    <div class="w-10 h-10 flex-shrink-0 rounded-md relative">
                                        <img src="assets/images/avatars/avatar-3.jpg"
                                            class="absolute w-full h-full inset-0 rounded-full" alt="">
                                    </div>
                                    <div class="flex-1">
                                        <h3 class="text-base font-semibold capitalize"> Monroe Parker </h3>
                                    </div>
                                    <a href="#"
                                        class="flex items-center justify-center h-9 px-3.5 rounded-md border font-semibold">
                                        Invite </a>
                                </div>
                                <div class="flex items-center space-x-4 hover:bg-gray-100 rounded-md -mx-2 p-2">
                                    <div class="w-10 h-10 flex-shrink-0 rounded-md relative">
                                        <img src="assets/images/avatars/avatar-4.jpg"
                                            class="absolute w-full h-full inset-0 rounded-full" alt="">
                                    </div>
                                    <div class="flex-1">
                                        <h3 class="text-base font-semibold capitalize"> Stella Johnson </h3>
                                    </div>
                                    <a href="#"
                                        class="flex items-center justify-center h-9 px-3.5 rounded-md border font-semibold">
                                        Invite </a>
                                </div>
                                <div class="flex items-center space-x-4 hover:bg-gray-100 rounded-md -mx-2 p-2">
                                    <div class="w-10 h-10 flex-shrink-0 rounded-md relative">
                                        <img src="assets/images/avatars/avatar-5.jpg"
                                            class="absolute w-full h-full inset-0 rounded-full" alt="">
                                    </div>
                                    <div class="flex-1">
                                        <h3 class="text-base font-semibold capitalize"> Alex Dolgove </h3>
                                    </div>
                                    <a href="#"
                                        class="flex items-center justify-center h-9 px-3.5 rounded-md border font-semibold">
                                        Invite </a>
                                </div>
                                <div class="flex items-center space-x-4 hover:bg-gray-100 rounded-md -mx-2 p-2">
                                    <div class="w-10 h-10 flex-shrink-0 rounded-md relative">
                                        <img src="assets/images/avatars/avatar-1.jpg"
                                            class="absolute w-full h-full inset-0 rounded-full" alt="">
                                    </div>
                                    <div class="flex-1">
                                        <h3 class="text-base font-semibold capitalize"> Adrian Mohani </h3>
                                    </div>
                                    <a href="#"
                                        class="flex items-center justify-center h-9 px-3.5 rounded-md border font-semibold">
                                        Invite </a>
                                </div>
                            </div>
                        </div>




                    </div>

                    <div class="card p-7">


                        <div class="flex flex-col items-center justify-between mb-4">
                            <div>
                                <h4 class="text-xl -mb-0.5 font-semibold"> Nombre de d??lit  depuis 5 ans sur cette zone g??ographique


                                    </h4>
                            </div>
                            {{-- <a href="#" class="text-blue-600 ">See all</a> --}}
                        </div>
                        <div>
                            <div class="flex items-center  hover:bg-gray-100 rounded-md -mx-2 p-2 pr-0">
                                <div class="flex-shrink-0 h-16 mr-3 relative rounded-md w-16">
                                    <img src="assets/images/funding/funder-3.jpg"
                                        class="absolute w-full h-full inset-0 rounded-md object-cover" alt="">
                                </div>
                                <div class="flex-1">
                                    <a href="#"
                                        class="capitalize font-semibold line-clamp-1 mb-1 text-base">Striding for a
                                        Cure for Cystic Fibrosis</a>
                                    <div class="font-medium text-sm text-gray-400 flex items-center">
                                        <i class="icon-feather-trending-up text-base text-blue-500 mr-1.5"> </i>
                                        142 People donated
                                    </div>
                                    <div class="mt-2">
                                        <div class="bg-gray-50 rounded-2xl h-1 w-full relative overflow-hidden">
                                            <div class="bg-blue-600 w-1/3 h-full"></div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>


                    </div>

                    <div class="card p-7">


                        <div class="flex flex-col items-center justify-between mb-4">
                            <div>
                                <h4 class="text-xl -mb-0.5 font-semibold"> Nombre de d??lit similaire sur  cette zone g??ographique (100km)  depuis 5 ans  </h4>
                            </div>
                            {{-- <a href="#" class="text-blue-600 ">See all</a> --}}
                        </div>
                        <div>
                            <div class="flex items-center  hover:bg-gray-100 rounded-md -mx-2 p-2 pr-0">
                                <div class="flex-shrink-0 h-16 mr-3 relative rounded-md w-16">
                                    <img src="assets/images/funding/funder-3.jpg"
                                        class="absolute w-full h-full inset-0 rounded-md object-cover" alt="">
                                </div>
                                <div class="flex-1">
                                    <a href="#"
                                        class="capitalize font-semibold line-clamp-1 mb-1 text-base">Striding for a
                                        Cure for Cystic Fibrosis</a>
                                    <div class="font-medium text-sm text-gray-400 flex items-center">
                                        <i class="icon-feather-trending-up text-base text-blue-500 mr-1.5"> </i>
                                        142 People donated
                                    </div>
                                    <div class="mt-2">
                                        <div class="bg-gray-50 rounded-2xl h-1 w-full relative overflow-hidden">
                                            <div class="bg-blue-600 w-1/3 h-full"></div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>


                    </div>



                </div>
            </div>

        </div>
    </div>
@endsection
