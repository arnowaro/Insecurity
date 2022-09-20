@extends('admin.layouts.app')
@section('title')
    <title>Ajouter une sous-categorie</title>
@endsection
@section('main')
    <div class="main_content">
        <div class="mcontainer">

            <div class="max-w-2xl m-auto shadow-md rounded-md bg-white lg:mt-2">

                <!-- form header -->
                <div class="text-center border-b border-gray-100 py-6">
                    <h3 class="font-bold text-xl"> Créer une sous-categorie </h3>
                </div>

                <!-- form body -->
                <div class="p-10 space-y-7">

                    <form action="" method="post" enctype="multipart/form-data">



                        {{-- Nom --}}
                        <div class="space-y-1">
                            <label for="Label" class="text-sm font-bold text-gray-700 ">Label</label>
                            <input type="text" name="label" id="name" placeholder="Label"
                                class="w-full text-base px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-indigo-500" />
                        </div>

                        {{-- Description --}}
                        <div class="space-y-1">
                            <label for="description" class="text-sm font-bold text-gray-700 ">Description</label>
                            <textarea name="description" id="description" cols="30" rows="10"
                                class="w-full text-base px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-indigo-500"></textarea>
                        </div>

                        {{-- Image --}}
                        <div class="space-y-1">
                            <label for="image" class="text-sm font-bold text-gray-700 ">Image</label>
                            <input type="file" name="image" id="image"
                                class="w-full text-base px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-indigo-500" />
                        </div>

                        {{-- // select category --}}
                        {{-- <div class="space-y-1">
                            <label for="category" class="text-sm font-bold text-gray-700 ">Categorie</label>
                            <select name="category" id="category"
                                class="w-full text-base px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-indigo-500">
                                <option value="">Selectionner une categorie</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->label }}</option>
                                @endforeach
                            </select>
                        </div> --}}




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
