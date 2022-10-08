<header class="bg-blue-100">
    <div class="header_wrap">
        <div class="header_inner mcontainer">
            <div class="left_side">

                <span class="slide_menu" uk-toggle="target: #wrapper ; cls: is-collapse is-active">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path d="M3 4h18v2H3V4zm0 7h12v2H3v-2zm0 7h18v2H3v-2z" fill="currentColor"></path></svg>
                </span>

                <div id="logo">
                    {{-- IMAGE LOGO --}}
                    <a href="{{ route('home') }}" class="flex items-center justify-center ">
                        <img src="{{ asset('images/logo.png') }}" alt="logo" />
                    </a>

                    {{-- <a href="feed.html">
                        <img src="assets/images/logo.png" alt="">
                        <img src="assets/images/logo-mobile.png" class="logo_mobile" alt="">
                    </a> --}}
                </div>
            </div>

        <!-- search icon for mobile -->
            <div class="header-search-icon" uk-toggle="target: #wrapper ; cls: show-searchbox"> </div>
            <div class="header_search"><i class="uil-search-alt"></i>
                <input value="" type="text" class="form-control" placeholder="Search for Friends , Videos and more.." autocomplete="off">
                <div uk-drop="mode: click" class="header_search_dropdown">

                    <h4 class="search_title"> Recently </h4>
                    <ul>
                        <li>
                            <a href="#">
                                <img src="assets/images/avatars/avatar-1.jpg" alt="" class="list-avatar">
                                <div class="list-name">  Erica Jones </div>
                            </a>
                        </li>

                    </ul>

                </div>
            </div>

            <div class="right_side">

                <div class="header_widgets">


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

                        <a href="#" class="user">
                            <div class="user_avatar">
                                <img src="assets/images/avatars/avatar-2.jpg" alt="">
                            </div>
                            <div class="user_name">
                                <div> {{Auth::user()->pseudo}} </div>
                                <span>Role: {{Auth::user()->admin == 1 ? 'Admin' : 'User'}}
                                </span>
                            </div>
                        </a>




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
