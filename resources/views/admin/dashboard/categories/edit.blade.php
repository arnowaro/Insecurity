@extends('admin.layouts.app')
@section('title')
    <title>Modifier une categorie</title>
@endsection
@section('main')
    <div class="main_content">
        <div class="mcontainer">

            <div class="max-w-2xl m-auto shadow-md rounded-md bg-white lg:mt-2">

                <!-- form header -->
                <div class="text-center border-b border-gray-100 py-6">
                    <h3 class="font-bold text-xl"> Modifier une categorie </h3>
                </div>

                <!-- form body -->
                <div class="p-10 space-y-7">

                    <form action="{{ route('category.update', $category->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                          {{-- image apperçu width full --}}
                          @error('image')
                          <p class="py-0 mt-0 text-sm text-red-500 ">
                              {{ $message }}
                          </p>
                      @enderror
                      <div class="flex flex-col mt-2 md:mt-2 md:flex-row justify-center items-center">
                          <div class=" w-1/3  md:w-1/4">

                              <img id="image-preview" class="rounded-full"
                                  src="{{ $category->image != null ? asset('storage/' . $category->image) : asset('images/avatars/avatar-1.jpg') }}"
                                  alt="">
                          </div>
                      </div>
                        <div class="flex justify-center mt-5 md:mt-2 ">
                            <button
                                class="flex items-center bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                                onclick=" document.getElementById('image-upload').click();" type="button">
                                {{-- <ion-icon class="text-2xl" name="image-outline"></ion-icon> --}}
                                <div class="text-xl icon-feather-camera"></div>
                                <span class="ml-2">Modifier la photo</span>
                            </button>
                            <input id="image-upload" name="image" type="file" accept="image/*"
                                onchange="showPreview(event);" class="sr-only" value="Uploader">
                        </div>



                        {{-- Nom --}}
                        <div class="space-y-1">
                            <label for="Label" class="text-sm font-bold text-gray-700 ">Label</label>
                            <input type="text" name="label" id="name" placeholder="Label"
                                class="w-full text-base px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-indigo-500"
                                value="{{ $category->label }}">

                        </div>

                        {{-- Description --}}
                        <div class="space-y-1">
                            <label for="description" class="text-sm font-bold text-gray-700 ">Description</label>
                            <textarea name="description" id="description" cols="30" rows="10"
                                class="w-full text-base px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-indigo-500">
                            {{ $category->description }}
                            </textarea>
                        </div>

                        {{-- Image --}}
                        {{-- <div class="space-y-1">
                            <label for="image" class="text-sm font-bold text-gray-700 ">Image</label>
                            <input type="file" name="image" id="image"
                                class="w-full text-base px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-indigo-500"
                                value="{{ $category->image }}">

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
    <script>
        function showPreview(event) {
            if (event.target.files.length > 0) {
                var src = URL.createObjectURL(event.target.files[0]);
                var preview = document.getElementById("image-preview");
                preview.src = src;
                preview.style.display = "block";
            }
        }
    </script>
@endsection
