@extends('layouts.app')
@section('title')
    <title> History </title>
@endsection
@section('main')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css"
        integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ=="
        crossorigin="" />



    <div class=" flex flex-col gap-2 m-2">

        {{-- cover --}}
        <div class=" items-center flex flex-col bg-red-400">
            <div class="justify-start">

                <h1 class="text-5xl">History</h1>
                <p class="cover__text--subtitle">The history of the world is the history of the struggle of
                    liberty against power.</p>
                <p>category : Vols</p>
                <p>sub-category: avec violence</p>
            </div>
        </div>

        <div class="grid grid-cols-2 gap-4">
            <div class="  grid grid-row gap-4">


                <div class=" rounded-sm  bg-slate-400 drop-shadow-xl ">

                    <h3> Description </h3>
                    <p> lieu </p>
                    <p> date </p>
                    <p> heure </p>

                    <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                        and
                        scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                        leap
                        into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                        the
                        release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                        publishing
                        software like Aldus PageMaker including versions of Lorem Ipsum</p>
                </div>

                <div class=" rounded-sm  bg-slate-400 drop-shadow-2xl">
                    <H2>VICTIME</H2>
                    <p>nom </p>
                    <p>age </p>
                    <p>genre </p>
                    <p>nationalité </p>
                    <p>profession </p>
                    <p>lieu de naissance </p>
                    <p>date de naissance </p>
                    <p>état de santé </p>




                </div>

                <div class=" rounded-sm  bg-red-600 drop-shadow-2xl">
                    <h2> Coupable</h2>
                    <p> nom : </p>
                    <p> prenom : </p>
                    <p> age : </p>
                    <p> sexe : </p>
                    <p> métier : </p>
                    <p> ville de naissance: </p>
                    <p> casier vierge : </p>
                    <p> état débriété: </p>
                    <p> état mental: </p>
                    <p> OQTF: </p>



                </div>

                <div >
                    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider="center: true">

                        <ul class="uk-slider-items uk-grid">
                            <li class="uk-width-3-4">
                                <div class="uk-panel">
                                    <img src="images/photo.jpg" width="400" height="600" alt="">
                                    <div class="uk-position-center uk-panel"><h1>1</h1></div>
                                </div>
                            </li>
                            <li class="uk-width-3-4">
                                <div class="uk-panel">
                                    <img src="images/dark.jpg" width="400" height="600" alt="">
                                    <div class="uk-position-center uk-panel"><h1>2</h1></div>
                                </div>
                            </li>
                            <li class="uk-width-3-4">
                                <div class="uk-panel">
                                    <img src="images/light.jpg" width="400" height="600" alt="">
                                    <div class="uk-position-center uk-panel"><h1>3</h1></div>
                                </div>
                            </li>
                            <li class="uk-width-3-4">
                                <div class="uk-panel">
                                    <img src="images/photo2.jpg" width="400" height="600" alt="">
                                    <div class="uk-position-center uk-panel"><h1>4</h1></div>
                                </div>
                            </li>
                            <li class="uk-width-3-4">
                                <div class="uk-panel">
                                    <img src="images/photo3.jpg" width="400" height="600" alt="">
                                    <div class="uk-position-center uk-panel"><h1>5</h1></div>
                                </div>
                            </li>
                        </ul>

                        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

                    </div>
                </div>

            </div>

            <div class=" flex flex-col gap-3">
                {{-- // map --}}

                <div id="map" class="h-2/3 rounded-[25px] bg-emerald-500"></div>


                <div class=" rounded-sm  bg-slate-400 drop-shadow-2xl">
                    <h2> Verdicte du juge / peine en courus : Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has
                        survived not only five centuries, but also

                    </h2>


                </div>

                <div class=" rounded-sm  bg-slate-400 drop-shadow-2xl">
                    <h2> Votre avis : </h2>
                    <p> nombre de likes: </p>
                    <p> nombre de dislikes: </p>
                    {{-- PROGRESSBAR --}}

                    <div class="uk-progress">
                        <div class="uk-progress-bar bg-blue-400 color-red-600" style="width: 50%;">50%</div>

                    </div>
                    {{-- bouton like --}}
                    <div class="flex flex-row gap-2">
                        <button class="bg-blue-400 hover:bg-blue-500 text-white font-bold py-2 px-4 rounded">
                            Like
                        </button>
                        <button class="bg-red-400 hover:bg-red-500 text-white font-bold py-2 px-4 rounded">
                            Dislike
                        </button>

                </div>

                <div class=" rounded-sm  bg-slate-400 drop-shadow-2xl">
                    <h2> Nombre de délit  depuis 5 ans sur cette zone géographique   </h2>
                </div>

                <div class=" rounded-sm  bg-slate-400 drop-shadow-2xl">
                    <h2> Nombre de délit similaire sur  cette zone géographique (100km)  depuis 5 ans
                    </h2>
                </div>
            </div>



        </div>


        {{-- leaftlet --}}
        <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js"
            integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ=="
            crossorigin=""></script>
    @endsection
