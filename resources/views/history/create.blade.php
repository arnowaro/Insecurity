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
    <div class="main_content">
                        <div class="mcontainer">

                                                <div class="max-w-2xl m-auto shadow-md rounded-md bg-white lg:mt-2">

                                                                        <!-- form header -->
                                                                        <div class="text-center border-b border-gray-100 py-6">
                                                                            <h3 class="font-bold text-xl"> Créer une history </h3>
                                                                        </div>

                                                                        <!-- form body -->
                                                                        <div class="p-10 space-y-7">

                                                                            <form action="" method="post">

                                                                                {{-- titre --}}
                                                                                <div class="space-y-1">
                                                                                    <label for="title" class="text-sm font-bold text-gray-700 ">Titre</label>
                                                                                    <input type="text" name="title" id="title" placeholder="Titre" class="w-full text-base px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-indigo-500" />
                                                                                </div>

                                                                                {{-- ville      --}}
                                                                                <div class="space-y-1">
                                                                                    <label for="city" class="text-sm font-bold text-gray-700 ">Ville</label>
                                                                                    <input type="text" name="city" id="city" placeholder="Ville" class="w-full text-base px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-indigo-500" />
                                                                                </div>

                                                                                {{-- pays --}}
                                                                                <div class="space-y-1">
                                                                                    <label for="country" class="text-sm font-bold text-gray-700 ">Pays</label>
                                                                                    <input type="text" name="country" id="country" placeholder="Pays" class="w-full text-base px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-indigo-500" />
                                                                                </div>

                                                                                {{-- heure --}}
                                                                                <div class="space-y-1">
                                                                                    <label for="time" class="text-sm font-bold text-gray-700 ">Heure</label>
                                                                                    <input type="datetime-local" name="time" id="time" placeholder="Heure" class="w-full text-base px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-indigo-500" />
                                                                                </div>

                                                                                {{-- description --}}
                                                                                <div class="space-y-1">
                                                                                    <label for="description" class="text-sm font-bold text-gray-700 ">Description</label>
                                                                                    <textarea name="description" id="description" cols="30" rows="10" placeholder="Description" class="w-full text-base px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-indigo-500"></textarea>
                                                                                </div>




                                                                                <div class="border-b border-gray-500 pt-3"></div>



                                                                                {{-- victime --}}
                                                                                <div class="space-y-1">
                                                                                    <label for="victim" class="text-sm font-bold text-gray-700 ">Victime</label>
                                                                                    <input type="text" name="victim" id="victim" placeholder="Victime" class="w-full text-base px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-indigo-500" />
                                                                                </div>

                                                                                {{-- victime name --}}
                                                                                <div class="space-y-1">
                                                                                    <label for="victim_name" class="text-sm font-bold text-gray-700 ">Nom de la victime</label>
                                                                                    <input type="text" name="victim_name" id="victim_name" placeholder="Nom de la victime" class="w-full text-base px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-indigo-500" />
                                                                                </div>

                                                                                {{-- victime age --}}
                                                                                <div class="space-y-1">
                                                                                    <label for="victim_age" class="text-sm font-bold text-gray-700 ">Age de la victime</label>
                                                                                    <input type="number" name="victim_age" id="victim_age" placeholder="Age de la victime" class="w-full text-base px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-indigo-500" />
                                                                                </div>

                                                                                {{-- victime sexe boolean --}}
                                                                                <div class="space-y-1">
                                                                                    <label for="victim_sexe" class="text-sm font-bold text-gray-700 ">Sexe de la victime</label> <br>
                                                                                    <input type="radio" name="victim_sexe" id="victim_sexe" value="1" class="w-full text-base px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-indigo-500" /> Homme <br>
                                                                                    <input type="radio" name="victim_sexe" id="victim_sexe" value="0" class="w-full text-base px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-indigo-500" /> Femme <br>

                                                                                </div>

                                                                                {{-- victime profession --}}
                                                                                <div class="space-y-1">
                                                                                    <label for="victim_profession" class="text-sm font-bold text-gray-700 ">Profession de la victime</label>
                                                                                    <input type="text" name="victim_profession" id="victim_profession" placeholder="Profession de la victime" class="w-full text-base px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-indigo-500" />
                                                                                </div>

                                                                                <div class="border-b border-gray-500 pt-3"></div>

                                                                                {{-- agresseur --}}

                                                                                <div class="space-y-1">
                                                                                    <label for="aggressor" class="text-sm font-bold text-gray-700 ">Agresseur</label>
                                                                                    <input type="text" name="aggressor" id="aggressor" placeholder="Agresseur" class="w-full text-base px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-indigo-500" />
                                                                                </div>

                                                                                {{-- agresseur name --}}
                                                                                <div class="space-y-1">
                                                                                    <label for="aggressor_name" class="text-sm font-bold text-gray-700 ">Nom de l'agresseur</label>
                                                                                    <input type="text" name="aggressor_name" id="aggressor_name" placeholder="Nom de l'agresseur" class="w-full text-base px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-indigo-500" />
                                                                                </div>

                                                                                {{-- agresseur age --}}
                                                                                <div class="space-y-1">
                                                                                    <label for="aggressor_age" class="text-sm font-bold text-gray-700 ">Age de l'agresseur</label>
                                                                                    <input type="number" name="aggressor_age" id="aggressor_age" placeholder="Age de l'agresseur" class="w-full text-base px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-indigo-500" />
                                                                                </div>

                                                                                {{-- agresseur sexe boolean --}}
                                                                                <div class="space-y-1">
                                                                                    <label for="aggressor_sexe" class="text-sm font-bold text-gray-700 ">Sexe de l'agresseur</label> <br>
                                                                                    <input type="radio" name="aggressor_sexe" id="aggressor_sexe" value="1" class="w-full text-base px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-indigo-500" /> Homme <br>
                                                                                    <input type="radio" name="aggressor_sexe" id="aggressor_sexe" value="0" class="w-full text-base px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-indigo-500" /> Femme <br>

                                                                                </div>

                                                                                    {{-- agresseur profession --}}
                                                                                    <div class="space-y-1">
                                                                                        <label for="aggressor_profession" class="text-sm font-bold text-gray-700 ">Profession de l'agresseur</label>
                                                                                        <input type="text" name="aggressor_profession" id="aggressor_profession" placeholder="Profession de l'agresseur" class="w-full text-base px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-indigo-500" />
                                                                                    </div>

                                                                                    {{-- casier vierge boolean --}}
                                                                                    <div class="space-y-1">
                                                                                        <label for="clean_record" class="text-sm font-bold text-gray-700 ">Casier vierge</label> <br>
                                                                                        <input type="radio" name="clean_record" id="clean_record" value="1" class="w-full text-base px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-indigo-500" /> Oui <br>
                                                                                        <input type="radio" name="clean_record" id="clean_record" value="0" class="w-full text-base px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-indigo-500" /> Non <br>
                                                                                    </div>

                                                                                    {{-- Fichier S boolean--}}

                                                                                    <div class="space-y-1">
                                                                                        <label for="fichier_s" class="text-sm font-bold text-gray-700 ">Fichié S</label> <br>
                                                                                        <input type="radio" name="fichier_s" id="fichier_s" value="1" class="w-full text-base px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-indigo-500" /> Oui <br>
                                                                                        <input type="radio" name="fichier_s" id="fichier_s" value="0" class="w-full text-base px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-indigo-500" /> Non <br>
                                                                                    </div>

                                                                                    {{-- Alcoolisé --}}
                                                                                    <div class="space-y-1">
                                                                                        <label for="alcohol" class="text-sm font-bold text-gray-700 ">Alcoolisé</label> <br>
                                                                                        <input type="radio" name="alcohol" id="alcohol" value="1" class="w-full text-base px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-indigo-500" /> Oui <br>
                                                                                        <input type="radio" name="alcohol" id="alcohol" value="0" class="w-full text-base px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-indigo-500" /> Non <br>
                                                                                    </div>

                                                                                    {{-- Drogue --}}
                                                                                    <div class="space-y-1">
                                                                                        <label for="drug" class="text-sm font-bold text-gray-700 ">Drogue</label> <br>
                                                                                        <input type="radio" name="drug" id="drug" value="1" class="w-full text-base px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-indigo-500" /> Oui <br>
                                                                                        <input type="radio" name="drug" id="drug" value="0" class="w-full text-base px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-indigo-500" /> Non <br>
                                                                                    </div>

                                                                                    {{-- mental disorder  --}}
                                                                                    <div class="space-y-1">
                                                                                        <label for="mental_disorder" class="text-sm font-bold text-gray-700 ">Trouble mental</label> <br>
                                                                                        <input type="radio" name="mental_disorder" id="mental_disorder" value="1" class="w-full text-base px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-indigo-500" /> Oui <br>
                                                                                        <input type="radio" name="mental_disorder" id="mental_disorder" value="0" class="w-full text-base px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-indigo-500" /> Non <br>
                                                                                    </div>

                                                                                    {{-- Ville de naissance --}}
                                                                                    <div class="space-y-1">
                                                                                        <label for="birth_city" class="text-sm font-bold text-gray-700 ">Ville de naissance</label>
                                                                                        <input type="text" name="birth_city" id="birth_city" placeholder="Ville de naissance" class="w-full text-base px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-indigo-500" />
                                                                                    </div>




                                                                                {{-- verdict du juge --}}
                                                                                <div class="space-y-1">
                                                                                    <label for="verdict" class="text-sm font-bold text-gray-700 ">Verdict du juge</label>
                                                                                    <textarea name="verdict" id="verdict" cols="30" rows="10" placeholder="Verdict du juge" class="w-full text-base px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-indigo-500"></textarea>
                                                                                </div>

                                                                                {{-- lien de verification --}}
                                                                                <div class="space-y-1">
                                                                                    <label for="verification_link" class="text-sm font-bold text-gray-700 ">Lien de vérification</label>
                                                                                    <input type="text" name="verification_link" id="verification_link" placeholder="Lien de vérification" class="w-full text-base px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-indigo-500" />
                                                                                </div>


                                                                                {{-- bouton de validation --}}
                                                                                <div class="flex justify-center">
                                                                                    <button type="submit" class="w-full max-w-xs font-bold shadow-sm rounded-lg py-3
                                                                                    bg-green-500 text-gray-100 hover:bg-green-700 focus:outline-none my-6">Valider</button>
                                                                                </div>

                                                                            </form>

                                                                        </div>



                                                </div>


                        </div>
    </div>


@endsection
