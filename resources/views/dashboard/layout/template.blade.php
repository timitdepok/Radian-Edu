<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" /> {{-- csrf token --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>{{ $title }}</title>

    @vite('resources/css/app.css')

    {{-- jquery --}}
    <script src="/js/jquery.js"></script>
    <script src="/js/sweetalert.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body class="bg-light-gray">
<section class="font-poppins relative">
    <div class="container-ct max-h-screen w-full  md:flex">

        <!-- sidebar -->
        <div id="sidebar" class="sidebar duration-150 md:w-[248px] h-screen bg-white w-full max-h-screen hidden fixed md:relative md:block z-30">              
            <div class="relative w-full h-full flex justify-between flex-col px-[12px] py-[17px]">
                <!-- menu  -->
                <div class="menu w-full">
                    <!-- logo  -->
                    <div class="logo flex justify-between w-full items-center md:block">
                        <a class="flex items-center pl-[13px]">
                            <img src="{{ asset('/img/logo.png') }}" class="w-[50px] mr-2" alt="" srcset="">
                            <span class="text-lg text-primary font-semibold">Radian Edu</span>
                        </a>
                        <!-- btn sidebar  -->
                        <div class="btn-sidebar cursor-pointer md:hidden h-6 w-6 rounded-full flex justify-center items-center hover:bg-light-gray">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                <path fill-rule="evenodd" d="M5.47 5.47a.75.75 0 011.06 0L12 10.94l5.47-5.47a.75.75 0 111.06 1.06L13.06 12l5.47 5.47a.75.75 0 11-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 01-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 010-1.06z" clip-rule="evenodd" />
                            </svg>                           
                        </div>
                        <!-- end btn sidebar  -->
                    </div>
                    <!-- end logo -->

                    <form action="" method="GET" class="">
                        <div class="mt-12 search w-full h-[54px] bg-light-gray rounded-lg flex flex-row items-center tall:hidden">
                            <div class="h-full w-auto flex items-centers text-secondary">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28" fill="currentColor" class="w-7 h-7 ml-[14px] mr-4 my-auto block">
                                    <path fill-rule="evenodd" d="M10.5 3.75a6.75 6.75 0 100 13.5 6.75 6.75 0 000-13.5zM2.25 10.5a8.25 8.25 0 1114.59 5.28l4.69 4.69a.75.75 0 11-1.06 1.06l-4.69-4.69A8.25 8.25 0 012.25 10.5z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="h-[22px] w-[2px] mr-1 bg-blue-400"></div>
                            <input type="text" name="search" class="h-full w-full rounded-lg bg-light-gray focus:bg-light-gray placeholder:text-secondary outline-none text-base font-medium pr-4" placeholder="Search" value="{{ $search ? $search : '' }}">
                        </div>
                    </form>

                    <!-- list menu  -->
                    <ul class="main-menu flex flex-col items-start mt-4 tall:mt-12">
                        <li class="pl-[27px] w-full md:w-[224px] py-[15px] rounded-lg group {{ $sidebar == 'dashboard' ? 'bg-active' : '' }}  hover:bg-active">
                            <a href="{{ route('dashboard') }}" class="flex flex-row item-center {{ $sidebar == 'dashboard' ? 'text-primary-gray' : 'text-secondary' }} group-hover:text-primary-gray">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 mr-2">
                                    <path fill-rule="evenodd" d="M9.293 2.293a1 1 0 011.414 0l7 7A1 1 0 0117 11h-1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-3a1 1 0 00-1-1H9a1 1 0 00-1 1v3a1 1 0 01-1 1H5a1 1 0 01-1-1v-6H3a1 1 0 01-.707-1.707l7-7z" clip-rule="evenodd" />
                                </svg>
                                    
                                <span class="text-base font-semibold">Dashboard</span>
                            </a>
                        </li>
                        <li class="pl-[27px] w-full md:w-[224px] py-[15px] rounded-lg group {{ $sidebar == 'list-profile-guru' ? 'bg-active' : '' }} hover:bg-active mt-1">
                            <a href="{{ route('list.profile.guru') }}" class="flex flex-row item-center {{ $sidebar == 'list-profile-guru' ? 'text-primary-gray' : 'text-secondary' }} group-hover:text-primary-gray">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 mr-2">
                                    <path d="M10 9a3 3 0 100-6 3 3 0 000 6zM6 8a2 2 0 11-4 0 2 2 0 014 0zM1.49 15.326a.78.78 0 01-.358-.442 3 3 0 014.308-3.516 6.484 6.484 0 00-1.905 3.959c-.023.222-.014.442.025.654a4.97 4.97 0 01-2.07-.655zM16.44 15.98a4.97 4.97 0 002.07-.654.78.78 0 00.357-.442 3 3 0 00-4.308-3.517 6.484 6.484 0 011.907 3.96 2.32 2.32 0 01-.026.654zM18 8a2 2 0 11-4 0 2 2 0 014 0zM5.304 16.19a.844.844 0 01-.277-.71 5 5 0 019.947 0 .843.843 0 01-.277.71A6.975 6.975 0 0110 18a6.974 6.974 0 01-4.696-1.81z" />
                                </svg>
                                    
                                <span class="text-base font-semibold">List Profile Guru</span>
                            </a>
                        </li>
                        <li class="pl-[27px] w-full md:w-[224px] py-[15px] rounded-lg group {{ $sidebar == 'data-guru' ? 'bg-active' : '' }} hover:bg-active mt-1">
                            <a href="{{ route('data.guru') }}" class="flex flex-row item-center {{ $sidebar == 'data-guru' ? 'text-primary-gray' : 'text-secondary' }} group-hover:text-primary-gray">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-2">
                                    <path fill-rule="evenodd" d="M7.502 6h7.128A3.375 3.375 0 0118 9.375v9.375a3 3 0 003-3V6.108c0-1.505-1.125-2.811-2.664-2.94a48.972 48.972 0 00-.673-.05A3 3 0 0015 1.5h-1.5a3 3 0 00-2.663 1.618c-.225.015-.45.032-.673.05C8.662 3.295 7.554 4.542 7.502 6zM13.5 3A1.5 1.5 0 0012 4.5h4.5A1.5 1.5 0 0015 3h-1.5z" clip-rule="evenodd" />
                                    <path fill-rule="evenodd" d="M3 9.375C3 8.339 3.84 7.5 4.875 7.5h9.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-9.75A1.875 1.875 0 013 20.625V9.375zM6 12a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H6.75a.75.75 0 01-.75-.75V12zm2.25 0a.75.75 0 01.75-.75h3.75a.75.75 0 010 1.5H9a.75.75 0 01-.75-.75zM6 15a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H6.75a.75.75 0 01-.75-.75V15zm2.25 0a.75.75 0 01.75-.75h3.75a.75.75 0 010 1.5H9a.75.75 0 01-.75-.75zM6 18a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H6.75a.75.75 0 01-.75-.75V18zm2.25 0a.75.75 0 01.75-.75h3.75a.75.75 0 010 1.5H9a.75.75 0 01-.75-.75z" clip-rule="evenodd" />
                                </svg>
                                  
                                <span class="text-base font-semibold">Data Guru</span>
                            </a>
                        </li>
                        <li class="pl-[27px] w-full md:w-[224px] py-[15px] rounded-lg group {{ $sidebar == 'news' ? 'bg-active' : '' }} hover:bg-active mt-1">
                            <a href="" class="flex flex-row item-center {{ $sidebar == 'news' ? 'text-primary-gray' : 'text-secondary' }} group-hover:text-primary-gray">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 mr-2">
                                    <path fill-rule="evenodd" d="M2 3.5A1.5 1.5 0 013.5 2h9A1.5 1.5 0 0114 3.5v11.75A2.75 2.75 0 0016.75 18h-12A2.75 2.75 0 012 15.25V3.5zm3.75 7a.75.75 0 000 1.5h4.5a.75.75 0 000-1.5h-4.5zm0 3a.75.75 0 000 1.5h4.5a.75.75 0 000-1.5h-4.5zM5 5.75A.75.75 0 015.75 5h4.5a.75.75 0 01.75.75v2.5a.75.75 0 01-.75.75h-4.5A.75.75 0 015 8.25v-2.5z" clip-rule="evenodd" />
                                    <path d="M16.5 6.5h-1v8.75a1.25 1.25 0 102.5 0V8a1.5 1.5 0 00-1.5-1.5z" />
                                </svg>
                                        
                                <span class="text-base font-semibold">News</span>
                            </a>
                        </li>
                        <li class="pl-[27px] w-full md:w-[224px] py-[15px] rounded-lg group {{ $sidebar == 'user-access' ? 'bg-active' : '' }} hover:bg-active mt-1">
                            <a href="{{ route('user.access') }}" class="flex flex-row item-center {{ $sidebar == 'user-access' ? 'text-primary-gray' : 'text-secondary' }} group-hover:text-primary-gray">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 mr-2">
                                    <path d="M10 8a3 3 0 100-6 3 3 0 000 6zM3.465 14.493a1.23 1.23 0 00.41 1.412A9.957 9.957 0 0010 18c2.31 0 4.438-.784 6.131-2.1.43-.333.604-.903.408-1.41a7.002 7.002 0 00-13.074.003z" />
                                </svg>
                                                                
                                <span class="text-base font-semibold">User Accsess</span>
                            </a>
                        </li>
                    </ul>
                    <!-- end list menu  -->
                </div>
                <!-- end menu  -->

                <!-- menu  -->
                <div class="menu w-full">
                    <ul class="main-menu flex flex-col items-start">
                        <li class="pl-[27px] w-full md:w-[224px] py-[15px] rounded-lg group  {{ $sidebar == 'setting' ? 'bg-active' : '' }} hover:bg-active">
                            <a href="{{ route('pengaturan') }}" class="flex flex-row item-center {{ $sidebar == 'setting' ? 'text-primary-gray' : 'text-secondary' }} group-hover:text-primary-gray">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 mr-2">
                                    <path fill-rule="evenodd" d="M8.34 1.804A1 1 0 019.32 1h1.36a1 1 0 01.98.804l.295 1.473c.497.144.971.342 1.416.587l1.25-.834a1 1 0 011.262.125l.962.962a1 1 0 01.125 1.262l-.834 1.25c.245.445.443.919.587 1.416l1.473.294a1 1 0 01.804.98v1.361a1 1 0 01-.804.98l-1.473.295a6.95 6.95 0 01-.587 1.416l.834 1.25a1 1 0 01-.125 1.262l-.962.962a1 1 0 01-1.262.125l-1.25-.834a6.953 6.953 0 01-1.416.587l-.294 1.473a1 1 0 01-.98.804H9.32a1 1 0 01-.98-.804l-.295-1.473a6.957 6.957 0 01-1.416-.587l-1.25.834a1 1 0 01-1.262-.125l-.962-.962a1 1 0 01-.125-1.262l.834-1.25a6.957 6.957 0 01-.587-1.416l-1.473-.294A1 1 0 011 10.68V9.32a1 1 0 01.804-.98l1.473-.295c.144-.497.342-.971.587-1.416l-.834-1.25a1 1 0 01.125-1.262l.962-.962A1 1 0 015.38 3.03l1.25.834a6.957 6.957 0 011.416-.587l.294-1.473zM13 10a3 3 0 11-6 0 3 3 0 016 0z" clip-rule="evenodd" />
                                </svg>
                                    
                                <span class="text-base font-semibold">Setting</span>
                            </a>
                        </li>
                        <li class="pl-[27px] w-full md:w-[224px] py-[15px] rounded-lg group cursor-pointer hover:bg-active mt-1">
                            <form action="{{ route('logout') }}" method="post" class="w-auto">
                                @csrf
                                <button type="submit" class="flex flex-row item-center text-secondary group-hover:text-primary-gray">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 mr-2">
                                        <path fill-rule="evenodd" d="M3 4.25A2.25 2.25 0 015.25 2h5.5A2.25 2.25 0 0113 4.25v2a.75.75 0 01-1.5 0v-2a.75.75 0 00-.75-.75h-5.5a.75.75 0 00-.75.75v11.5c0 .414.336.75.75.75h5.5a.75.75 0 00.75-.75v-2a.75.75 0 011.5 0v2A2.25 2.25 0 0110.75 18h-5.5A2.25 2.25 0 013 15.75V4.25z" clip-rule="evenodd" />
                                        <path fill-rule="evenodd" d="M6 10a.75.75 0 01.75-.75h9.546l-1.048-.943a.75.75 0 111.004-1.114l2.5 2.25a.75.75 0 010 1.114l-2.5 2.25a.75.75 0 11-1.004-1.114l1.048-.943H6.75A.75.75 0 016 10z" clip-rule="evenodd" />
                                    </svg>
                                        
                                    <span class="text-base font-semibold">Log out</span>
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
                <!-- end menu  -->
            </div>
        </div>
        <!-- end sidebar  -->

        <div class="content flex-grow bg-light-gray max-h-screen overflow-y-auto">
            <div class="w-full">
                <!-- navbar  -->
                <div class="navbar relative w-full">
                    <div class="flex flex-row items-center justify-between tall:justify-between md:justify-end bg-white h-[78px]">
                        <!-- btn sidebar  -->
                        <div class="btn-sidebar cursor-pointer md:hidden h-9 w-9 flex justify-center items-center ml-6">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                <path fill-rule="evenodd" d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z" clip-rule="evenodd" />
                            </svg>                                  
                        </div>
                        <!-- end sidebar  -->

                        <!-- search -->
                        <form action="" method="GET" class="w-auto ml-14">
                            <div class="search w-[358px] h-[48px] bg-light-gray rounded-lg hidden tall:flex tall:flex-row tall:items-center">
                                <div class="h-full w-auto flex items-centers text-secondary">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28" fill="currentColor" class="w-7 h-7 ml-[14px] mr-4 my-auto block">
                                        <path fill-rule="evenodd" d="M10.5 3.75a6.75 6.75 0 100 13.5 6.75 6.75 0 000-13.5zM2.25 10.5a8.25 8.25 0 1114.59 5.28l4.69 4.69a.75.75 0 11-1.06 1.06l-4.69-4.69A8.25 8.25 0 012.25 10.5z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div class="h-[22px] w-[2px] mr-1 bg-blue-400"></div>
                                <input type="text" name="search" class="h-full w-[300px] rounded-lg bg-light-gray focus:bg-light-gray  placeholder:text-secondary outline-none text-base font-medium pr-4" placeholder="Search" value="{{ $search ? $search : '' }}">
                            </div>
                            <button type="submit" class="hidden"></button>
                        </form>
                        <!-- end search  -->

                        <!-- profile  -->
                        <div class="profile w-auto flex flex-row items-center mr-6">
                            <div class="w-[34px] h-[34px] mr-[13px] overflow-hidden rounded-full">
                                <img src="{{ asset('storage/' . $user->foto) }}" class="h-full w-full object-cover" alt="foto profil">
                            </div>
                            <!-- dropdown  -->
                            <div class="dropdown flex flex-row items-center relative w-auto mr-4">
                                <p class="text-base mr-2 w-fit sm:block hidden text-secondary">{{ $user->nama }}</p>
                                <div id="btn-dropdown" class="w-7 h-7 rounded-full text-lg duration-200 cursor-pointer flex justify-center items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" className="w-5 h-5">
                                        <path fillRule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clipRule="evenodd" />
                                    </svg> 
                                </div>
                                <ul id="menu-dropdown" class=" min-w-[170px] absolute hidden duration-200 right-0 bg-white top-full mt-2 shadow-lg rounded-sm">
                                    <li class="w-full hover:bg-gray-200 py-2 px-3">
                                        <a href="{{ route('profile') }}" class="w-full block text-base">
                                            Profile Anda
                                        </a>
                                    </li>
                                    <li class="w-full hover:bg-gray-200 py-2 px-3">
                                        <a href="" class="w-full block text-base">
                                           My Dashboard
                                        </a>
                                    </li>
                                </ul>                                    
                            </div>
                        </div>
                        <!-- end profile  -->
                    </div>
                </div>
                <!-- end navbar -->

                <!-- main content  -->
                <div class="main-content w-full">
                    @yield("content")
                </div>
                <!-- endmain content  -->

            </div>
        </div>
    </div>
</section>
@yield("javascript")
<script src="{{ asset('/js/dashboard.js') }}"></script>
</body>
</html>