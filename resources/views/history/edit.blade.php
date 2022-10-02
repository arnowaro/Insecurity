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
                    <h3 class="font-bold text-xl"> Modifier une history </h3>
                </div>

                <!-- form body -->
                <div class="p-10 space-y-7">

                    <form action="{{ route('history.update', $history->id) }}" method="post">
                        @csrf
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <input type="hidden" name="id" value="{{ $history->id }}">

                        {{-- titre --}}
                        @error('title')
                        <p class="py-0 mt-0 text-sm text-red-500 ">
                            {{ $message }}
                        </p>
                        @enderror
                        <div class="space-y-1">
                            <label for="title" class="text-sm font-bold text-gray-700 ">Titre</label>
                            <input type="text" name="title" id="title"  value="{{ $history->titre }}"
                                class="w-full text-base px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-indigo-500" />
                        </div>
                        @error('city')
                        <p class="py-0 mt-0 text-sm text-red-500 ">
                            {{ $message }}
                        </p>
                        @enderror
                        {{-- ville --}}
                        <div class="space-y-1">
                            <label for="city" class="text-sm font-bold text-gray-700 ">Ville</label>
                            <input type="text" name="city" id="city" value="{{ $history->ville }}"
                                class="w-full text-base px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-indigo-500" />
                        </div>

                        @error('country')
                        <p class="py-0 mt-0 text-sm text-red-500 ">
                            {{ $message }}
                        </p>
                        @enderror
                        {{-- pays --}}
                        <div class="space-y-1">
                            <label for="country" class="text-sm font-bold text-gray-700 ">Pays</label>
                            <input type="text" name="country" id="country" value="{{ $history->pays }}"
                                class="w-full text-base px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-indigo-500" />
                        </div>
                        @error('time')
                        <p class="py-0 mt-0 text-sm text-red-500 ">
                            {{ $message }}
                        </p>
                        @enderror
                        {{-- heure --}}
                        <div class="space-y-1">
                            <label for="time" class="text-sm font-bold text-gray-700 ">Heure</label>
                            <input type="datetime-local" name="time" id="time"

                                value="{{ date('Y-m-d\TH:i', strtotime($history->date)) }}"
                                class="w-full text-base px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-indigo-500" />
                        </div>

                        {{-- input multi select categories --}}
                        @error('categories')
                        <p class="py-0 mt-0 text-sm text-red-500 ">
                            {{ $message }}
                        </p>
                        @enderror
                        <div class="space-y-1">
                            <label for="categories" class="text-sm font-bold text-gray-700 ">Catégories</label>
                            <select name="categories[]" id="categories" multiple
                                class="selectpicker">
                                {{-- double foreach category selected update --}}
                                @foreach ($categories as $category )
                                @if (old('categories'))
                                <option value="{{ $category->id }}"   {{ (collect(old('categories'))->contains($category->id)) ? 'selected':'' }}>{{ $category->label }}</option>
                                @else
                                <option value="{{ $category->id }}" {{ (collect($categoriesHistory)->contains($category->id)) ? 'selected':'' }}>{{ $category->label }}</option>
                                @endif
                                @endforeach


                            </select>
                        </div>


                        @error('description')
                        <p class="py-0 mt-0 text-sm text-red-500 ">
                            {{ $message }}
                        </p>
                        @enderror
                        {{-- description --}}
                        <div class="space-y-1">
                            <label for="description" class="text-sm font-bold text-gray-700 ">Description</label>
                            <textarea name="description" id="description" cols="30" rows="10"  placeholder="Description"
                                class="w-full text-base px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-indigo-500">
                                {{$history->description}}
                            </textarea>
                        </div>




                        <div class="border-b border-gray-500 pt-3"></div>




                        @error('jugement')
                        <p class="py-0 mt-0 text-sm text-red-500 ">
                            {{ $message }}
                        </p>
                        @enderror
                        {{-- verdict du juge --}}
                        <div class="space-y-1">
                            <label for="jugement" class="text-sm font-bold text-gray-700 ">Verdict du juge</label>
                            <textarea name="jugement" id="jugement" cols="30" rows="5" placeholder="Verdict du juge"
                                class="w-full text-base px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-indigo-500">
                            {{$history->jugement}}
                            </textarea>
                        </div>

                        {{-- lien de verification --}}
                        @error('url')
                        <p class="py-0 mt-0 text-sm text-red-500 ">
                            {{ $message }}
                        </p>
                        @enderror
                        <div class="space-y-1">
                            <label for="url" class="text-sm font-bold text-gray-700 ">Lien de
                                vérification</label>
                            <p class="text-sm"> Pour que votre history soit publié sur Walksafe, un administrateur doit la
                                valider à l'aide d'une documentation officiel ( article de presse ou autre).</p>
                            <input type="text" name="url" id="url"
                                placeholder="Lien de vérification"
                                value="{{$history->url}}"
                                class="w-full text-base px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-indigo-500" />
                        </div>

                        {{-- latitude --}}
                        @error('latitude')
                        <p class="py-0 mt-0 text-sm text-red-500 ">
                            {{ $message }}
                        </p>
                        @enderror
                        <div class="space-y-1">
                            <label for="latitude" class="text-sm font-bold text-gray-700 ">Latitude</label>
                            <input type="text" name="latitude" id="latitude" placeholder="Latitude" value="{{ $history->latitude}}"
                                class="w-full text-base px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-indigo-500" />
                        </div>

                        {{-- longitude --}}
                        @error('longitude')
                                <p class="py-0 mt-0 text-sm text-red-500 ">
                                    {{ $message }}
                                </p>
                            @enderror
                        <div class="space-y-1">
                            <label for="longitude" class="text-sm font-bold text-gray-700 ">Longitude</label>
                            <input type="text" name="longitude" id="longitude" placeholder="Longitude" value="{{$history->longitude}}"
                                class="w-full text-base px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-indigo-500" />
                        </div>

                            {{-- carte --}}
                            <div class="mt-4 relative">
                                <x-map-history-edit :id="$history->id" />
                            </div>



                        {{-- bouton de validation --}}
                        <div class="flex justify-center">
                            <button type="submit"
                                class="w-full max-w-xs font-bold shadow-sm rounded-lg py-3
                                 bg-black text-gray-100 hover:bg-gray-700 focus:outline-none my-6">Valider</button>
                        </div>



                    </form>

                </div>



            </div>


        </div>
    </div>
@endsection
