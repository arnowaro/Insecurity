<header>
    <div class="header_wrap">
        <div class="header_inner mcontainer">
            <div class="left_side">

                {{-- <span class="slide_menu" uk-toggle="target: #wrapper ; cls: is-collapse is-active">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path d="M3 4h18v2H3V4zm0 7h12v2H3v-2zm0 7h18v2H3v-2z" fill="currentColor"></path></svg>
                </span> --}}

                <div id="logo">
                    {{-- IMAGE LOGO --}}
                    <a href="/" class="flex items-center justify-center ">
                        <img src="{{ asset('images/logo.png') }}" alt="logo" />
                    </a>

                    {{-- <a href="feed.html">
                        <img src="assets/images/logo.png" alt="">
                        <img src="assets/images/logo-mobile.png" class="logo_mobile" alt="">
                    </a> --}}
                </div>

                <div class="md:hidden">
                    {{-- logo mobile--}}
                    <a href="/" class="flex items-center justify-center ">
                        <img src="{{ asset('images/logo.png') }}" alt="logo" />
                    </a>
                </div>

            </div>



            <div class="right_side">

                <div class="header_widgets">


                    <!-- Message -->
                    {{-- <a href="/history/create" class="icon-material-outline-add-circle-outline" uk-tooltip="title: History">
                    // bouton ajouter une history

                    </a> --}}


                    <a href="/history/create" class=" hidden md:block font-bold shadow-sm rounded-lg p-3
                    bg-blue-900 text-gray-100 hover:bg-gray-700 focus:outline-none my-6 mx-2" > Mes histories </a>
                    {{-- // BOUTON MES HISTORY MOBILES --}}
                    <a href="/history/create" class=" text-2xl icon-material-outline-layers w-10 h-10 flex justify-center items-center  md:hidden font-bold shadow-sm rounded-full
                    bg-blue-900 text-gray-100 hover:bg-gray-700 focus:outline-none " >  </a>

                    {{-- //bouton ajouter une history --}}
                    <a href="/history/create" class=" hidden md:block  font-bold shadow-sm rounded-lg p-3
                    bg-black text-gray-100 hover:bg-gray-700 focus:outline-none my-6 mx-2" >Ajouter une history</a>

                    {{-- //bouton ajouter une history mobile --}}
                    <a href="/history/create" class=" text-3xl icon-material-outline-add w-10 h-10 flex justify-center items-center  md:hidden font-bold shadow-sm rounded-full
                    bg-black text-gray-100 hover:bg-gray-700 focus:outline-none " >  </a>

                    {{-- //bouton ajouter une history mobile --}}





                    {{-- <a href="#">
                        <img src="{{ asset('storage/images/category/avatar.png') }}"
                        class="is_avatar" alt="">
                    </a> --}}
                    <div class="
                    icon-feather-user
                    @auth
                    text-blue-900
                    bg-blue-100
                    @endauth
                    @guest
                    text-gray-900
                    bg-gray-100
                    @endguest
                    rounded-full
                    p-2

                    text-3xl
                    "></div>

                    <div uk-drop="mode: click;offset:5" class="header_dropdown profile_dropdown">

                        {{-- <a href="timeline.html" class="user"> --}}
                            {{-- <div class="user_avatar">
                                <img src="assets/images/avatars/avatar-2.jpg" alt="">
                            </div> --}}
                            <div class="user_name">
                                @auth
                                {{ Auth::user()->pseudo }}

                                @endauth


                            </div>
                        {{-- </a> --}}
                        {{-- <hr>

                        <hr> --}}
                        @auth
                        <a href="/admin/category">
                            <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path></svg>
                            Dashboard
                        </a>
                        @endauth
                        @guest
                        <a href="{{route('login')}}" class="flex gap-2">
                            {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M3 6a3 3 0 013-3h10a1 1 0 01.8 1.6L14.25 8l2.55 3.4A1 1 0 0116 13H6a1 1 0 00-1 1v3a1 1 0 11-2 0V6z"  clip-rule="evenodd" />
                            </svg> --}}
                            <div class="
                            icon-feather-log-in
                            text-xl
                            "></div>
                            Se connecter
                        </a>
                        @endguest
                        @guest
                        <a href="{{route('register')}}" class="flex gap-2">
                            {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M3 6a3 3 0 013-3h10a1 1 0 01.8 1.6L14.25 8l2.55 3.4A1 1 0 0116 13H6a1 1 0 00-1 1v3a1 1 0 11-2 0V6z"  clip-rule="evenodd" />
                            </svg> --}}
                            <div class="
                            icon-feather-user-plus text-xl"
                            ></div>
                            S'inscrire
                        </a>
                        @endguest
                        {{-- <a href="#" id="night-mode" class="btn-night-mode">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z" />
                              </svg>
                             Night mode
                            <span class="btn-night-mode-switch">
                                <span class="uk-switch-button"></span>
                            </span>
                        </a> --}}

                        @auth
                        <a href="{{ route('logout') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                            </svg>
                            Se deconnecter
                        </a>
                        @endauth


                    </div>

                </div>

            </div>
        </div>
    </div>
</header>
