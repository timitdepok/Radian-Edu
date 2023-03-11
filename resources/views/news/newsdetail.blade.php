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
<!-- navbar section end  -->

<!-- judul section -->
<section id="#" class="pt-[100px]">
    <div class="container">
        <div class="flex flex-wrap">
            <div class="lg:w-1/2 left-0 text-left">
                <h1 class="text-5xl font-semibold text-black mb-2 max-w-[671px]">LES PRIVAT DI RADIAN, BISA GONTA - GANTI GURU?</h1>
                <p class="text-lg font-normal text-body">Nowadays, it isn’t uncommon to see lenders rapidly adopting a digital lending strategy to streamline</p>
            </div>
            <div class="lg:w-1/2 lg:text-right lg:right-0">
                <h1 class="text-2xl font-semibold text-black mb-[6px]">Fadel MA</h1>
                <p class="text-base font-normal text-body mb-3 lg:mb-[81px]">IT Staff</p>
                <p class="text-sm font-semibold text-black">3 Oktober 2022</p>
            </div>
        </div>

        <img src="img/news-detail.png" alt="" class="w-full h-full mt-[50px] mb-12">

        <!-- paragraf section start -->
        <div class="lg:w-full">
            <p class="text-lg font-medium text-black mb-7">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eu diam velit commodo amet diam sed porttitor tellus. Est at id quam tortor, amet. Porta ut amet quam amet mauris, quis ullamcorper pretium. Vel aliquet luctus et porttitor egestas purus ac nibh tempor. Enim consectetur quis quis nullam magna sodales netus. Id elementum congue consectetur nunc, in pellentesque. Vulputate amet ac sit mauris, in malesuada duis lorem. Quam semper egestas ullamcorper convallis id turpis enim etiam. Tortor, turpis vel metus vitae, lorem luctus. Est feugiat ut maecenas sit non. Porttitor consequat a id ultrices cum morbi vulputate.</p>
            <p class="text-lg font-medium text-black mb-7">Non hendrerit donec odio pulvinar risus. Amet, fermentum, et porta purus neque sodales laoreet. Venenatis aliquam bibendum lobortis tempor, maecenas ornare. Lacus, vitae netus blandit ut senectus eget massa. Pulvinar duis id eleifend lectus. Aliquet quis risus, purus eu lacus, magna. Vulputate eget et id leo massa tincidunt lectus. Senectus non ultricies morbi eleifend. Vitae sit lectus malesuada facilisis natoque vitae.</p>
            <p class="text-lg font-medium text-black mb-7">Mollis mauris eget non urna, nunc lobortis amet tortor. Scelerisque habitant feugiat nec lectus. Ipsum vitae faucibus sagittis cursus commodo. Ornare ornare penatibus eros, in. Bibendum imperdiet leo, et neque odio. Porta ut non, adipiscing sed.</p>
            <p class="text-lg font-medium text-black mb-7">In semper mauris id in maecenas. Nec sed semper in sollicitudin. Neque enim, sit eget pharetra vivamus adipiscing tortor. Vitae velit purus augue sit donec sed vestibulum egestas. Magna mattis metus amet porttitor consequat. Orci pharetra morbi odio diam consequat tincidunt amet fermentum neque. Volutpat condimentum morbi fusce egestas. Maecenas luctus scelerisque lacinia nulla sed sapien varius mattis lectus.</p>
        </div>
       
        <!-- paragraf section end -->

        <!-- sign up section start -->
        <div class="flex flex-wrap my-[110px]">
            <div class="px-4 lg:w-1/2">
                <h1 class="text-5xl font-semibold text-black mb-6">Sign Up for our newsletter</h1>
                <p class="text-lg font-normal text-body mb-3 lg:mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
            </div>

            <div class="w-full lg:w-1/2 self-center">
                <div class="w-full text-right right-0 justify-end">
                    <div class="grid grid-cols-1 lg:grid-cols-2">
                        <div class="mr-3">
                            <form action="" class="w-full">
                                <div class="lg:flex text-text">
                                    <input type="email" name="email" placeholder="Masukan Email" autocomplete="off" aria-label="Masukan Email" class="w-[328px] p-4 text-sm font-normal rounded-lg border border-body">
                                </div>
                            </form>
                        </div>
                       <div>
                        <a href="#" class="w-[117px] h-12 bg-primary py-3 px-4 text-lg text-white self-center rounded-lg lg:ml-2 flex lg:mt-0 mt-4">SUBSCRIBE</a>
                       </div>
                    </div>
                </div>
                <p class="text-xs font-normal text-body mt-4 max-w-[433px] underline">By clicking Sign Up you're confirming that you agree with our Terms and Conditions.</p>
                
                
            </div>
        </div>
        <!-- sign up section end -->

        <!-- postingan section start -->
        <div class="flex flex-wrap mt-[70px] mb-[80px]">
            <div class="px-4 lg:w-1/2">
                <h1 class="text-5xl font-bold text-black mb-6">Postingan Terkait</h1>
                <p class="text-lg font-normal text-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
            </div>
            <div class="w-full lg:w-1/2 self-center">
                <a href="#" class="w-full text-right right-0 flex lg:justify-end">
                    <h5 class="text-lg font-semibold text-primary mr-4">Lihat lebih banyak</h5>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-primary">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                    </svg>
                </a>
                
            </div>
        </div>
        <!-- postingan section end -->

        <!-- news section start -->
        <div class="flex flex-wrap mb-[69px]">

            <a href="#" class="rounded-xl w-[350px] h-[480px] bg-white shadow-sm hover:shadow-lg mr-[50px] mb-4 lg:mb-0">
                <div class="mb-10 w-full h-[250px] mr-6">
                    <div class="h-full w-full rounded-xl object-cover overflow-hidden relative">
                        <img src="img/news-1.png" alt="" class="w-full h-full object-cover">
                        <div class="pt-8 pl-7">
                            <button class="bg-second rounded-lg px-3 py-2 text-black text-sm font-semibold self-center absolute top-6 z-20">
                                HOT NEWS
                            </button>
                        </div>
                    </div>
                    <div class="py-5 px-6">
                        <h3 class="mb-3 text-2xl font-semibold text-black">
                            Really Long Headline Text For Blog Post?
                        </h3>
                        <p class="text-sm font-normal text-body mb-[21px]">Nowadays, it isn’t uncommon to see lenders rapidly adopting a digital lending strategy to streamline the lending process</p>
                        <div class="flex flex-wrap">
                            <h5 class="text-xs font-normal text-black text-left mr-[115px]">20 Dec 2022 </h5>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                            </svg>
                            <h5 class="text-xs font-medium text-black ml-2">290 like</h5>
                              
                        </div>
                    </div>
                </div>
            </a>

            <a href="#" class="rounded-xl w-[350px] h-[480px] bg-white shadow-sm hover:shadow-lg mr-[50px] mb-4 lg:mb-0">
                <div class="mb-10 w-full h-[250px] mr-6">
                    <div class="h-full w-full rounded-xl object-cover overflow-hidden relative">
                        <img src="img/news2.png" alt="" class="w-full h-full object-cover">
                        <div class="pt-8 pl-7">
                            <button class="bg-second rounded-lg px-3 py-2 text-black text-sm font-semibold self-center absolute top-6 z-20">
                                INFO CPNS
                            </button>
                        </div>
                    </div>
                    <div class="py-5 px-6">
                        <h3 class="mb-3 text-2xl font-semibold text-black">
                            Really Long Headline Text For Blog Post?
                        </h3>
                        <p class="text-sm font-normal text-body mb-[21px]">Nowadays, it isn’t uncommon to see lenders rapidly adopting a digital lending strategy to streamline the lending process</p>
                        <div class="flex flex-wrap">
                            <h5 class="text-xs font-normal text-black text-left mr-[115px]">20 Dec 2022</h5>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                            </svg>
                            <h5 class="text-xs font-medium text-black ml-2">290 like</h5>
                        </div>
                    </div>
                </div>
            </a>

            <a href="#" class="rounded-xl w-[350px] h-[480px] bg-white shadow-sm hover:shadow-lg mr-[50px] mb-4 lg:mb-0">
                <div class="mb-10 w-full h-[250px] mr-6">
                    <div class="h-full w-full rounded-xl object-cover overflow-hidden relative">
                        <img src="img/news3.png" alt="" class="w-full h-full object-cover">
                        <div class="pt-8 pl-7">
                            <button class="bg-second rounded-lg px-3 py-2 text-black text-sm font-semibold self-center absolute top-6 z-20">
                                INFO UTBK
                            </button>
                        </div>
                    </div>
                    <div class="py-5 px-6">
                        <h3 class="mb-3 text-2xl font-semibold text-black">
                            Really Long Headline Text For Blog Post?
                        </h3>
                        <p class="text-sm font-normal text-body mb-[21px]">Nowadays, it isn’t uncommon to see lenders rapidly adopting a digital lending strategy to streamline the lending process</p>
                        <div class="flex flex-wrap">
                            <h5 class="text-xs font-normal text-black text-left mr-[115px]">20 Dec 2022</h5>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                            </svg>
                            <h5 class="text-xs font-medium text-black ml-2">290 like</h5>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <!-- news section end -->
    </div>
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
                <!-- footer section end  -->
</section>

<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
@endsection