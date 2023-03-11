@extends('news.layout.template')
@section('content')

<!-- navbar section start -->
<header>
    <!-- navbar 1 section -->
    <div class="bg-transparent top-0 left-0 w-full flex items-center z-10">
            <div class="px-4 flex pt-4">
                <img src="img/logo.png" alt="" class="px-4 py-2">
            </div>
            <div class="lg:px-4 flex pt-4">
                <span class="lg:text-base text-xs font-medium border border-secondary bg-secondary px-4 py-2 pt-2 self-center text-center text-dark rounded-lg ml-7 mb-3 lg:mb-0"><a href="daftarguru.html">Temukan Guru</a></span>
                <span class="lg:text-base text-xs font-medium border border-secondary bg-secondary lg:px-4 py-2 text-center text-dark rounded-lg ml-4 mr-2 lg:mr-0 mb-3 lg:mb-0"><a href="registrasi.html">Daftar Sebagai Guru</a></span>
            </div>
            
    </div>
    <!-- navbar 1 section end -->

    <!-- navbar 2 section start -->
    <div class="bg-primary top-0 left-0 w-full flex items-center z-10 h-[50px]">
        <div class="container">
            <div class="flex items-center justify-between relative">

                <div class="flex items-center px-4">
                    <div class="flex justify-between items-center">
                        <a href="#">
                            
                        </a>
                    </div>
                    <label for="menu-toggle" class="pointer-cursor right-0 lg:hidden block">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg></label>
                    <input class="hidden" type="checkbox" id="menu-toggle" />


                    <div class="hidden lg:flex lg:items-center lg:w-auto w-full" id="menu">
                        <nav>
                            <ul class="pt-2 pb-3 shadow-lg rounded-lg max-w-full lg:flex">
                                <li class="group mx-auto self-center">
                                    <a href="home.html" class="text-sm font-medium text-white mr-32">Home</a>
                                </li>
                                <li x-data="{ dropdownOpen: false }" class="relative group self-center">
                                    <button @click="dropdownOpen = !dropdownOpen" class="relative z-10 text-sm font-medium text-white mr-28 overflow-hidden focus:outline-none focus:border-white">Produk</button>
                                    <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full w-full z-10"></div>
                                    <div x-show="dropdownOpen" class="absolute right-0 mt-2 py-2 w-48 bg-white rounded-md shadow-xl z-20">
                                        <ul>
                                            <li>
                                                <a href="supercamp.html" class="block px-4 py-2 text-sm capitalize text-gray-800 hover:bg-indigo-500 hover:text-white">Camp</a>
                                            </li>
                                            <li>
                                                <a href="privat.html" class="block px-4 py-2 text-sm capitalize text-gray-800 hover:bg-indigo-500 hover:text-white">Les Privat</a>
                                            </li>
                                            <li>
                                                <a href="#" class="block px-4 py-2 text-sm capitalize text-gray-800 hover:bg-indigo-500 hover:text-white">Privat CPNS</a>
                                            </li>
                                            <li>
                                                <a href="privat.html" class="block px-4 py-2 text-sm capitalize text-gray-800 hover:bg-indigo-500 hover:text-white">Privat Garansi</a>
                                            </li>
                                            <li>
                                                <a href="supercamp.html" class="block px-4 py-2 text-sm capitalize text-gray-800 hover:bg-indigo-500 hover:text-white">Kedokteran</a>
                                            </li>
                                        </ul>
                                    </div> 
                                    
                                </li>
                                <li x-data="{ dropdownOpen: false }" class="relative group self-center">
                                    <button @click="dropdownOpen = !dropdownOpen" class="relative z-10 text-sm font-medium text-white mr-28 overflow-hidden focus:outline-none focus:border-white">Area Layanan</button>
                                    <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full w-full z-10"></div>
                                    <div x-show="dropdownOpen" class="absolute right-0 mt-2 py-2 w-48 bg-white rounded-md shadow-xl z-20">
                                        <ul>
                                            <li>
                                                <a href="jabodetabek.html" class="block px-4 py-2 text-sm capitalize text-gray-800 hover:bg-indigo-500 hover:text-white">Jabodetabek</a>
                                            </li>
                                            <li>
                                                <a href="jogja.html" class="block px-4 py-2 text-sm capitalize text-gray-800 hover:bg-indigo-500 hover:text-white">Yogyakarta</a>
                                            </li>
                                            <li>
                                                <a href="surabaya.html" class="block px-4 py-2 text-sm capitalize text-gray-800 hover:bg-indigo-500 hover:text-white">Surabaya</a>
                                            </li>
                                            <li>
                                                <a href="bandung.html" class="block px-4 py-2 text-sm capitalize text-gray-800 hover:bg-indigo-500 hover:text-white">Bandung</a>
                                            </li>
                                        </ul>
                                    </div> 
                                    
                                </li>
                                <li x-data="{ dropdownOpen: false }" class="relative group self-center">
                                    <button @click="dropdownOpen = !dropdownOpen" class="relative z-10 text-sm font-medium text-white mr-28 overflow-hidden focus:outline-none focus:border-white">Tingkatan</button>
                                    <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full w-full z-10"></div>
                                    <div x-show="dropdownOpen" class="absolute right-0 mt-2 py-2 w-48 bg-white rounded-md shadow-xl z-20">
                                        <ul>
                                            <li>
                                                <a href="sd.html" class="block px-4 py-2 text-sm capitalize text-gray-800 hover:bg-indigo-500 hover:text-white">SD</a>
                                            </li>
                                            <li>
                                                <a href="smp.html" class="block px-4 py-2 text-sm capitalize text-gray-800 hover:bg-indigo-500 hover:text-white">SMP</a>
                                            </li>
                                            <li>
                                                <a href="sma.html" class="block px-4 py-2 text-sm capitalize text-gray-800 hover:bg-indigo-500 hover:text-white">SMA</a>
                                            </li>
                                            <li>
                                                <a href="mahasiswa.html" class="block px-4 py-2 text-sm capitalize text-gray-800 hover:bg-indigo-500 hover:text-white">Mahasiswa</a>
                                            </li>
                                        </ul>
                                    </div> 
                                    
                                </li>
                                <li class="group mx-auto self-center">
                                    <a href="#testi" class="text-sm font-medium text-white mr-28">Testimoni</a>
                                </li>
                                <li class="group mx-auto self-center">
                                    <a href="news.html" class=" text-sm font-medium text-white underline mr-28">News</a>
                                </li>
                                <li class="group mx-auto self-center">
                                    <button class="text-white text-sm font-semibold text-center px-4 py-2 mr-8">
                                        <a href="registrasi.html">Daftar</a> </button>
                                </li>
                                <li class="group mx-auto self-center">
                                    <button class="text-white font-semibold text-sm border border-white px-4 py-2 rounded-lg ml-4 justify-items-end">
                                        <a href="login.html">Masuk</a>
                                    </button>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    

                </div>
            </div>
            
        </div>
    </div>

    <!-- navbar 2 section end -->
   
</header>
<!-- navbar section end -->

<!-- hero section start -->
<section id="#" class="pt-16 w-full h-full pb-8" style="background-size: cover; background-image: url(img/bg-news.png);">
    <a href="news-detail1.html">
        <div class="container">
            <div class="w-full self-end px-4">
                <div class="flex flex-wrap mt-[353px]">
                    <button class="bg-second rounded-lg shadow-lg mb-4 px-3 py-2 text-black flex flex-wrap">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-black">
                            <path fill-rule="evenodd" d="M14.615 1.595a.75.75 0 01.359.852L12.982 9.75h7.268a.75.75 0 01.548 1.262l-10.5 11.25a.75.75 0 01-1.272-.71l1.992-7.302H3.75a.75.75 0 01-.548-1.262l10.5-11.25a.75.75 0 01.913-.143z" clip-rule="evenodd" />
                        </svg>
                        Hot News</button>
                    <h3 class="text-white font-normal text-sm mt-4 ml-4">Senin, 3 Oktober 2022</h3>
                </div>
                <h1 class="font-semibold text-2xl lg:text-5xl text-white mt-4">LES PRIVAT DI RADIAN,</h1>
                <h1 class="font-semibold text-2xl lg:text-5xl text-white">BISA GONTA-GANTI GURU?</h1>
                <h5 class="font-normal text-white text-lg mt-4 mb-[30px]">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h5>
            </div>
        </div>
    </a>

</section>
<!-- hero section end -->

<!-- instagram section start -->
<section id="#" class="pt-16 pb-36">
    <div class="container">
        <div class="w-full px-4 mb-10">
            <div class="text-left">
                <h5 class="font-semibold text-lg text-primary mb-2">NEW</h5>
                <div class="flex flex-wrap mb-6">
                    <div class="w-1/2 lg:w-1/2 text-left">
                        <h1 class="font-semibold text-base lg:text-5xl text-black text-left">Postingan Terbaru Instagram Kami</h1>
                    </div>
                    
                    <div class="w-1/2">
                        <div class="w-full text-right">
                            <button onclick="before()" class="p-3 rounded-full bg-slate-100 border border-gray-100 shadow-lg lg:mr-5 mr-3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="lg:w-6 lg:h-6 w-4 h-4 text-primary">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                                  </svg>                              
                            </button>
    
                            <button onclick="after()" class="p-3 rounded-full bg-slate-100 border border-gray-100 shadow-lg lg:mr-5">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="lg:w-6 lg:h-6 w-4 h-4 text-primary">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                                  </svg>                              
                            </button>
                        </div>
                    </div>
                    
                </div>
                
            </div>
        </div>
        <div class="flex">

            <div id="slidercarousel" class="w-full overflow-hidden">
                <ul id="slids" class="flex w-full">
                    <li>
                        <img src="img/X - 3.png" alt="" class="h-auto w-full">
                    </li>
                    <li>
                        <img src="img/X - 4.png" alt="" class="h-auto w-full">
                    </li>
                    <li>
                        <img src="img/X - 5.png" alt="" class="h-auto w-full">
                    </li>
                    <li>
                        <img src="img/X - 3.png" alt="" class="h-auto w-full">
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- instagram section end -->

<!-- tentang belajar section start -->
<section id="#" class="pt-16 pb-14">
    <div class="container">
        <div class="w-full border-t border-text"></div>
        <div class="flex flex-wrap">
            <div class="w-full self-start px-4 lg:w-1/3">
                <div class="relative mt-10">
                    <img src="img/tipe-belajar.png" alt="" class="w-[360px] h-[265px] text-left">
                </div>
            </div>
            <div class="w-full self-center px-4 lg:w-1/2">
                <h1 class="font-semibold text-5xl text-black mt-14 mb-2">Ketahui Tipe Belajar Anak Sejak Dini</h1>
                <h5 class="font-normal text-sm text-body mt-2 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sociis non pellentesque nisi, odio congue purus. Nibh sed suspendisse nisl morbi proin. Aliquet justo, interdum dictum egestas varius posuere viverra integer. Cras pulvinar congue urna nunc,</h5>
                <a href="#" class="font-normal text-sm text-primary mt-0 mb-2">Read More</a>
                <div class="flex flex-wrap">
                    <div class="w-full lg:w-1/2">
                        <h3 class="text-base font-medium text-black text-left">Create By Fadel Mahamid</h3>
                    </div>
                    <div class="w-full lg:w-1/2">
                        <h3 class="text-base font-medium text-black text-right">Selasa, 4 Oktober 2022</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- tentang belajar section end -->

<!-- kegiatan supercamp section start -->
<section id="#" class="pt-16 pb-14">
    <div class="container">
        <div class="w-full border-t border-body"></div>
        <div class="flex flex-wrap">
            <div class="w-full self-start px-4 lg:w-1/3">
                <div class="relative mt-10">
                    <img src="img/kegiatan supercamp.png" alt="" class="w-[360px] h-[265px] text-left">
                </div>
            </div>

            <div class="w-full self-center px-4 lg:w-1/2">
                <h1 class="text-5xl font-semibold text-black mt-14 mb-2">Kegiatan Supercamp Di Radian Edu Solution</h1>
                <h5 class="text-sm font-normal text-body mt-2 mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sociis non pellentesque nisi, odio congue purus. Nibh sed suspendisse nisl morbi proin. Aliquet justo, interdum dictum egestas varius posuere viverra integer. Cras pulvinar congue urna nunc,<br><a href="#" class="text-primary">Read More</a></h5>
                <div class="flex flex-wrap">
                    <div class="w-full lg:w-1/2">
                        <h3 class="text-base font-medium text-black text-left">Create By Fadel Mahamid Ahmad</h3>
                    </div>
                    <div class="w-full lg:w-1/2">
                        <h3 class="text-base font-medium text-black text-right">Selasa, 5 Oktober 2022</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- kegiatan supercamp section end -->

<!-- jurusan kuliah section start -->
<section id="#" class="pt-16 pb-14">
    <div class="container">
        <div class="w-full border-t border-body"></div>
        <div class="flex flex-wrap">
            <div class="w-full self-start px-4 lg:w-1/3">
                <div class="relative mt-10">
                    <img src="img/jurus-kuliah.png" alt="" class="w-[360px] h-[265px] text-left">
                </div>
            </div>
            <div class="w-full self-center px-4 lg:w-1/2">
                <h1 class="text-5xl font-semibold text-black mt-14 mb-2">6 Jurusan Kuliah Untuk Anak IPS Yang Jarang....</h1>
                <h5 class="text-sm font-normal text-body mt-2 mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sociis non pellentesque nisi, odio congue purus. Nibh sed suspendisse nisl morbi proin. Aliquet justo, interdum dictum egestas varius posuere viverra integer. Cras pulvinar congue urna nunc,<br><a href="#" class="text-primary">Read More</a></h5>
                <div class="flex flex-wrap">
                    <div class="w-full lg:w-1/2">
                        <h3 class="text-base font-medium text-black text-left">Create By Fadel Mahamid Ahmad</h3>
                    </div>
                    <div class="w-full lg:w-1/2">
                        <h3 class="text-base font-medium text-black text-right">Selasa, 5 Oktober 2022</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- jurusan kuliah section end -->

<!-- asrama section start -->
<section id="#" class="pt-16 pb-56">
    <div class="container">
        <div class="w-full border-t border-body"></div>
        <div class="flex flex-wrap">
            <div class="w-full self-start px-4 lg:w-1/3">
                <div class="relative mt-10">
                    <img src="img/asrama.png" alt="" class="w-[360px] h-[265px] text-left">
                </div>
            </div>
            <div class="w-full self-center px-4 lg:w-1/2">
                <h1 class="text-5xl font-semibold text-black mt-14 mb-2">7 Asrama Mahasiswa Universitas Gadjah Mada</h1>
                <h5 class="text-sm font-normal text-body mt-2 mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sociis non pellentesque nisi, odio congue purus. Nibh sed suspendisse nisl morbi proin. Aliquet justo, interdum dictum egestas varius posuere viverra integer. Cras pulvinar congue urna nunc,<br><a href="#" class="text-primary">Read More</a></h5>
                <div class="flex flex-wrap">
                    <div class="w-full lg:w-1/2">
                        <h3 class="text-base font-medium text-black text-left">Create By Fadel Mahamid Ahmad</h3>
                    </div>
                    <div class="w-full lg:w-1/2">
                        <h3 class="text-base font-medium text-black text-right">Selasa, 5 Oktober 2022</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- asrama section end -->

<!-- footer section start -->
<footer class="bg-footer pt-24 pb-12">
    <div class="container">
        <div class="flex flex-wrap">
            <div class="w-full px-4 mb-12 md:w-1/4">
                <img src="img/logo.png" alt="" class="mb-4">
                <p class="text-base font-normal text-text">Jl. Akses UI No. 99, Perkantoran Wisma Kencana Putri,</p>
                <p class="text-base font-normal text-text">Kecamatan Tugu - Cimanggis</p>
                <p class="text-base font-normal text-text">Kota Depok - 16451.</p>
            </div>

            <div class="w-full px-4 mb-12 md:w-1/4">
                <h3 class="font-semibold text-base text-text mb-6">COMPANY</h3>
                <ul class="text-black">
                    <li>
                        <a href="#" class="inline-block text-base hover:text-primary mb-6">About</a>
                    </li>
                    <li>
                        <a href="#" class="inline-block text-base hover:text-primary mb-6">Supercamp</a>
                    </li>
                    <li>
                        <a href="#" class="inline-block text-base hover:text-primary mb-6">Daftar Tutor</a>
                    </li>
                    <li>
                        <a href="#" class="inline-block text-base hover:text-primary mb-6">Student Registration</a>
                    </li>
                    <li>
                        <a href="#" class="inline-block text-base hover:text-primary mb-6">Cari Tutor</a>
                    </li>
                </ul>
            </div>

            <div class="w-full px-4 mb-12 md:w-1/4">
                <h3 class="font-semibold text-base text-text mb-6">HELP</h3>
                <ul class="text-black">
                    <li>
                        <a href="#" class="inline-block text-base hover:text-primary mb-6">Customer Support</a>
                    </li>
                    <li>
                        <a href="#" class="inline-block text-base hover:text-primary mb-6">Delivery Details</a>
                    </li>
                    <li>
                        <a href="#" class="inline-block text-base hover:text-primary mb-6">Terms & Conditions</a>
                    </li>
                    <li>
                        <a href="#" class="inline-block text-base hover:text-primary mb-6">Privacy Policy</a>
                    </li>
                </ul>
            </div>

            <div class="w-full px-4 mb-12 md:w-1/4">
                <h3 class="font-semibold text-base text-text mb-7">RADIAN NEWS</h3>
                <div class="w-full mb-8">
                    <form action="" class="w-full max-w-md">
                        <div class="relative flex text-text">
                            <input type="email" name="email" placeholder="Enter Your Email Address" autocomplete="off" aria-label="Enter Your Email Address" class="w-full p-3 font-normal rounded-lg">
                        </div>
                    </form>
                </div>
                <button class="text-base font-semibold border border-black bg-primary px-4 py-2 text-center text-white rounded-lg mb-16" href="#">Subscribe Now</button>
            </div>

            <div class="w-full pt-10 border-t border-text">
                <p class="font-normal text-sm text-center text-black">© Copyright 2023, All Rights Reserved by Yayasan Radian Solusi Indonesia</p>
            </div>
           
        </div>
    </div>
</footer>
<!-- footer section end -->

<script src="{{asset('/js/news.js')}}"></script>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

 @endsection