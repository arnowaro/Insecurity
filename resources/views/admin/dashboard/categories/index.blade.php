@extends('admin.layouts.app')
@section('title')
    <title>Modifier une categorie</title>
@endsection
@section('main')
<div class="main_content  ">
    {{-- <div class="mcontainer"> --}}

    <div class="w-full lg:w-5/6">
        <div class="my-6 bg-white rounded shadow-md">
            @include('components.flashMessage')
            {{-- // bouton create category --}}

            <div class="flex justify-between items-center px-6 py-4 border-b">
                <h3 class="text-xl font-semibold text-gray-700">Listes des categorie</h3>
                <a href="{{ route('category.create') }}"
                    class="flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-blue-600 border border-transparent rounded-lg active:bg-blue-600 hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue">
                    <span>Ajouter une categorie</span>
                    <span class="ml-2" aria-hidden="true">+</span>
                </a>
            </div>
            <table class="w-full table-auto min-w-max">
                <thead>
                    <tr class="text-sm leading-normal text-gray-600 uppercase bg-gray-200">
                        <th class="px-6 py-3 text-left">{{ __('ID') }}</th>
                        <th class="px-6 py-3 text-center">{{ __('Image') }}</th>
                        <th class="px-6 py-3 text-left">{{ __('Name') }}</th>
                        <th class="px-6 py-3 text-center">{{ __('Description') }}</th>
                        <th class="px-6 py-3 text-center">{{ __('Actions') }}</th>
                    </tr>
                </thead>
                <tbody class="text-sm font-light text-gray-600">
                    @foreach ($categories as $category)
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="px-6 py-3 text-left whitespace-nowrap">
                                <div class="flex items-center">
                                    <span class="font-medium">#{{ $category->id }}</span>
                                </div>
                            </td>

                            <td class="px-6 py-3 text-center">
                                <div class="flex items-center justify-center">
                                    <img class="w-10 h-10 rounded-full"
                                        src="{{ $category->image != null ? asset('storage/' . $category->image) : asset('images/avatars/avatar-1.jpg') }}"
                                        alt="">

                                </div>
                            </td>
                            <td class="px-6 py-3 text-left">
                                <div class="flex items-center">
                                    <div class="mr-2">
                                        <P> {{ $category->label }} </P>
                                    </div>
                            </td>
                            <td class="px-6 py-3 text-center">

                                <p>{{ $category->description }} </p>

                            </td>
                            <td class="px-6 py-3 text-center">
                                <div class="flex justify-center item-center">

                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">

                                        <!-- This is an anchor toggling the modal -->
                                        <a
                                            href="{{ route('category.edit', $category->id) }}"uk-toggle>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">

                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />

                                            </svg>
                                        </a>
                                    </div>

 {{-- // bouton on click delete the category --}}

                                     <form action="{{ route('category.delete',['id' => $category->id])}}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <input type="hidden" name="id" value="{{$category->id}}">

                                                <button type="submit" class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M6 18L18 6M6 6l12 12" />
                                                    </svg>
                                                </button>
                                            </form>


                            </td>









                        </tr>
                    @endforeach




                </tbody>
            </table>
        </div>
    </div>
</div>

{{-- </div> --}}
@endsection
