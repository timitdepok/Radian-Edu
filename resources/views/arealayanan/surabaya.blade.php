@extends('arealayanan.layout.template')
@section('content')

 <!-- navbar section start -->
 <header class="bg-white absolute top-0 left-0 w-full flex items-center z-10">
    <div class="container">
        <div class="flex items-center justify-between relative">
            <div class="px-4">
                <a href="#" class="py-6">
                    <img src="img/logo.png" alt="">
                </a>
            </div>

            <div class="flex items-center px-4">
                <button id="hamburger" name="hamburger" type="button"
            class="block absolute right-4 lg:hidden">
                <span class="hamburger-line transition duration-300
                ease-in-out origin-top-left "></span>
                <span class="hamburger-line transition duration-300
                ease-in-out"></span>
                <span class="hamburger-line transition duration-300
                ease-in-out origin-bottom-left"></span>
                </button>

            <nav id="nav-menu" class="hidden absolute py-5 bg-white
                shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block
                lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none">
                <ul class="block lg:flex">
                    <li class="group">
                        <a href="home.html" class="text-base text-body font-medium py-2 mx-8 flex group-hover:text-surabaya">Home</a>
                    </li>
                    <li class="group">
                        <a href="#alumni" class="text-base text-body font-medium py-2 mx-8 flex group-hover:text-surabaya">Alumni</a>
                    </li>
                    <li class="group">
                        <a href="#testi" class="text-base text-body font-medium py-2 mx-8 flex group-hover:text-surabaya">Testimoni</a>
                    </li>
                    <li class="group">
                        <a href="#unggul" class="text-base text-body font-medium py-2 mx-8 flex group-hover:text-surabaya">Keunggulan</a>
                    </li>
                    <li class="group">
                        <a href="#program" class="text-base text-body font-medium py-2 mx-8 flex group-hover:text-surabaya">Program</a>
                    </li>
                    <li class="group">
                        <a href="#daftar" class="text-base text-body font-medium py-2 mx-8 flex group-hover:text-surabaya">Daftar</a>
                    </li>
                    <li class="group">
                        <button class="text-base text-surabaya font-medium py-2 px-3 mx-8 border bg-herosby rounded-lg">Hubungi Kami</button>
                    </li>
                </ul>
            </nav>
            </div>
        </div>
    </div>
</header>
<!-- navbar section end -->

<!-- hero section start -->
<section id="#" class="pt-16 pb-12">
    <div class="container">
        <div class="pl-9 overflow-hidden bg-herosby rounded-3xl">
            <div class="grid items-center grid-cols-1 gap-y-2 lg:grid-cols-2">
                <div class="pl-9 max-w-3xl">
                    <h1 class="text-5xl font-semibold text-surabaya mb-6">BEST PARTNER FOR ACCELERATING YOUR GROWTH</h1>
                    <p class="text-base font-normal text-body mb-16">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem quis amet velit eget sed.</p>
                    <a href="#" class="text-base font-semibold text-white bg-surabaya px-4 py-3 rounded-lg mb-28 mr-6">Mulai Belajar</a>
                    <a href="#" class="text-base font-semibold text-surabaya border border-surabaya px-4 py-3 rounded-lg mb-28">Hubungi Kami</a>
                </div>
                <div class="relative p-0">
                    <img src="img/hero-jabodetabek.png" alt="" class="relative w-full h-full lg:right-0">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- hero section end -->

<!-- alumni section start -->
<section id="#" class="pt-16 pb-12">
    <div class="container">
        <div class="flex flex-wrap">
            <div class="w-full px-4 lg:w-1/2">
                <div class="grid grid-cols-1 gap-2 lg:grid-cols-2">
                    <img src="img/al-jabodetabek1.png" alt="" class="mr-12">
                    <img src="img/al-jabodetabek2.png" alt="">
                </div>
            </div>
            <div class="w-full px-4 lg:w-1/2">
                <h5 class="text-base font-semibold text-surabaya mb-1">Alumni Radian</h5>
                <h1 class="text-4xl font-semibold text-black mb-3">Popular Alumni Radian</h1>
                <p class="text-base font-normal text-body mb-8">Seiring waktu berjalan, radian telah menghantarkan banyak siswa/i dalam meraih mimpi</p>
                <div class="flex flex-wrap">
                    <div class="w-full px-2 lg:w-1/3">
                        <h1 class="text-xl font-semibold text-black mb-1">120+</h1>
                        <p class="text-base font-normal text-body mb-10">Pelajar Privat</p>
                    </div>
                    <div class="w-full px-2 lg:w-1/3">
                        <h1 class="text-xl font-semibold text-black mb-1">560+</h1>
                        <p class="text-base font-normal text-body mb-10">Pelajar Les</p>
                    </div>
                    <div class="w-full px-2 lg:w-1/3">
                        <h1 class="text-xl font-semibold text-black mb-1">135K+</h1>
                        <p class="text-base font-normal text-body mb-10">Berhasil masuk PTN</p>
                    </div>
                </div>
                <a href="#" class="text-lg font-medium text-white bg-surabaya px-6 py-4 rounded-lg mr-7">Pilih Program</a>
                <a href="#" class="text-lg font-medium text-body px-6 py-4">View More</a>
            </div>
        </div>
    </div>
</section>
<!-- alumni section end -->

<!-- testimoni section start -->
<section id="#" class="pt-16">
    <div class="container">
        <div class="flex flex-wrap">
            <div class="w-full px-2 lg:w-1/3">
                <h1 class="text-5xl font-semibold text-black mb-16">Apa Kata Mereka Tentang Radian</h1>
            </div>
            <div class="w-full px-2 lg:w-1/3">
                <p class="text-lg font-normal text-body mb-16">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Viverra quis elementum, nisl feugiat. Augue arcu euis</p>
            </div>
            <div class="w-full px-2 lg:w-1/3">
                <div class="w-full text-right">
                    <button onclick="before()" class="p-3 rounded-full bg-slate-100 border border-gray-100 shadow-lg mr-5">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-surabaya">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                          </svg>                              
                    </button>

                    <button onclick="after()" class="p-3 rounded-full bg-slate-100 border border-gray-100 shadow-lg mr-5">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-surabaya">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                          </svg>                              
                    </button>
                </div>
            </div>
        </div>
        <div class="flex">
            <div id="slidercarousel" class="w-full overflow-hidden">
                <ul id="slids" class="flex w-full">
                    <li class="mr-3">
                        <div class="bg-white border border-body rounded-2xl mb-10 mt-7">
                            <div class="flex items-center justify-center h-auto">
                                <div class="rounded-full w-12 h-12 bg-slate-200 flex justify-center items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                      </svg>
                                </div>
                        </div>
                        <div class="py-8 px-6">
                            <h3 class="mb-1 font-normal text-xl text-black text-center">David Gillroy</h3>
                            <h4 class="mb-6 font-normal text-lg text-body text-center">Universitas Sriwijaya</h4>
                            <p class="mb-9 font-normal text-lg text-body text-center">"Nowadays, isn't great uncommon to see lenders rapidly adopting a new digital lending strategy to make most popular streamline the web process</p>
                        </div>
                    </div>
                    </li>

                    <li class="mr-3">
                        <div class="bg-white border border-body rounded-2xl mb-10 mt-7">
                            <div class="flex items-center justify-center h-auto">
                                <div class="rounded-full w-12 h-12 bg-slate-200 flex justify-center items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </div>
                            <div class="py-8 px-6">
                                <h3 class=" mb-1 font-normal text-xl text-black text-center">Diana Mehdi</h3>
                                <h4 class="mb-6 font-normal text-lg text-body text-center">Universitas Indonesia</h4>
                                <p class="mb-9 font-normal text-lg text-body text-center">"Nowadays, isn't great uncommon to see lenders rapidly asopting a new digital lending strategy to make most popular streamline the web process."</p>
                            </div> 
                        </div>
                    </li>

                    <li class="mr-3">
                        <div class="bg-white border border-body rounded-2xl mb-10 mt-7">
                            <div class="flex items-center justify-center h-auto">
                                <div class="rounded-full w-12 h-12 bg-slate-100 flex justify-center items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </div>
                            <div class="py-8 px-6">
                                <h3 class="mb-1 font-normal text-xl text-black text-center">David Gillroy</h3>
                                <h4 class="mb-6 font-normal text-lg text-body text-center">Universitas Sriwijaya</h4>
                                <p class="mb-9 font-normal text-lg text-body text-center">"Nowadays, isn't great uncommon to see lenders rapidly asopting a new digital lending strategy to make most popular streamline the web process."</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- testimoni section end -->

<!-- keunggulan section start -->
<section id="#" class="pt-16 pb-12">
    <div class="container">
        <div class="flex flex-wrap">
            <div class="wfull px-4 lg:w-1/2">
                <h1 class="text-4xl font-semibold text-black mb-6">Kenapa Harus Di Radian?</h1>
                <p class="text-lg font-normal text-body mb-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Viverra quis elementum, nisl feugiat. Augue arcu euis</p>
                <div class="flex flex-wrap px-3">
                    <h1 class="text-xl font-semibold text-black mb-1">Super Teacher</h1>
                    <p class="text-base font-normal text-body mb-9">Guru terbaik, pintar, komunikatif serta sopan sehingga memberikan peningkatan super terhadap siswa. dan bisa tukar guru jika siswa merasa tidak cocok. </p>
                    <h1 class="text-xl font-semibold text-black mb-1">Garansi Uang Kembali</h1>
                    <p class="text-base font-normal text-body mb-9">Memberikan solusi serta rencana yang mengikuti level siswa sekarang dan ditingkatkan sehingga mencapai target yang di inginkan.</p>
                    <h1 class="text-xl font-semibold text-black mb-1">Edu Record</h1>
                    <p class="text-base font-normal text-body mb-9">Kami mengupas tuntas hingga kami mendapatkan gambaran yang lengkap tentang kondisi siswa terbaru agar siswa mencapai targetnya.</p>
                </div>
            </div>
            <div class="w-full px-4 lg:w-1/2">
                <img src="img/unggul-jabodetabek.png" alt="" class="max-w-full lg:right-0">
            </div>
        </div>
    </div>
</section>
<!-- keunggulan section end -->

<!-- program section start -->
<section id="#" class="pt-16 pb-12 bg-slate-100">
    <div class="container">
        <div class="flex flex-wrap">
            <div class="w-full self-center pl-4 pr-14 lg:w-1/2">
                <h5 class="text-lg font-semibold text-surabaya mb-2">PROGRAM</h5>
                <h1 class="text-5xl font-semibold text-black mb-4 max-w-7xl">Program Radian Edu</h1>
                <p class="text-lg font-normal text-body max-w-5xl">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Viverra quis elementum, nisl feugiat. Augue arcu euis</p>
            </div>
            <div class="w-full px-4 lg:w-1/2">
                <div class="w-full overflow-hidden grid grid-cols-1 bg-slate-100 overflow-x-scroll gap-1">
                    <ul class="flex">
                        <li>
                            <div class="bg-white rounded-3xl shadow-lg mb-10 w-[255px] h-[420px] mr-6">
                                <div class="h-[210px]" style="background-image: url(img/program1.png);">
                                    <div class="pt-8 pl-7">
                                        <button class="bg-primary rounded-lg shadow-md px-3 py-2 text-white text-sm font-semibold self-center flex flex-wrap">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-white">
                                                <path fill-rule="evenodd" d="M14.615 1.595a.75.75 0 01.359.852L12.982 9.75h7.268a.75.75 0 01.548 1.262l-10.5 11.25a.75.75 0 01-1.272-.71l1.992-7.302H3.75a.75.75 0 01-.548-1.262l10.5-11.25a.75.75 0 01.913-.143z" clip-rule="evenodd" />
                                            </svg>
                                            HEADLINE
                                        </button>
                                    </div>
                                </div>
                                <div class="py-8 px-6">
                                    <h3 class="mb-3 text-xl font-medium text-black">Program Private</h3>
                                    <p class="text-lg font-normal text-text mb-6">Ayo tulis tutor semau kamu, biar kami yang bantu carikan!</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="bg-white rounded-3xl shadow-lg mb-10 w-[255px] h-[420px] mr-6">
                                <div class="h-[210px]" style="background-image: url(img/program2.png);">
                                    <div class="pt-8 pl-7">
                                        <button class="bg-primary rounded-lg shadow-md px-3 py-2 text-white text-sm font-semibold self-center flex flex-wrap">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-white">
                                                <path fill-rule="evenodd" d="M14.615 1.595a.75.75 0 01.359.852L12.982 9.75h7.268a.75.75 0 01.548 1.262l-10.5 11.25a.75.75 0 01-1.272-.71l1.992-7.302H3.75a.75.75 0 01-.548-1.262l10.5-11.25a.75.75 0 01.913-.143z" clip-rule="evenodd" />
                                            </svg>
                                            HEADLINE
                                        </button>
                                    </div>
                                </div>
                                <div class="py-8 px-6">
                                    <h3 class="mb-3 text-xl font-medium text-black">Program Class</h3>
                                    <p class="text-lg font-normal text-text mb-6">Ayo tulis tutor semau kamu, biar kami yang bantu carikan!</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="bg-white rounded-3xl shadow-lg mb-10 w-[255px] h-[420px] mr-6">
                                <div class="h-[210px]" style="background-image: url(img/program3.png);">
                                    <div class="pt-8 pl-7">
                                        <button class="bg-primary rounded-lg shadow-md px-3 py-2 text-white text-sm font-semibold self-center flex flex-wrap">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-white">
                                                <path fill-rule="evenodd" d="M14.615 1.595a.75.75 0 01.359.852L12.982 9.75h7.268a.75.75 0 01.548 1.262l-10.5 11.25a.75.75 0 01-1.272-.71l1.992-7.302H3.75a.75.75 0 01-.548-1.262l10.5-11.25a.75.75 0 01.913-.143z" clip-rule="evenodd" />
                                            </svg>
                                            HEADLINE
                                        </button>
                                    </div>
                                </div>
                                <div class="py-8 px-6">
                                    <h3 class="mb-3 text-xl font-medium text-black">Supercamp</h3>
                                    <p class="text-lg font-normal text-text mb-6">Ayo tulis tutor semau kamu, biar kami yang bantu carikan!</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="bg-white rounded-3xl shadow-lg mb-10 w-[255px] h-[420px] mr-6">
                                <div class="h-[210px]" style="background-image: url(img/program1.png);">
                                    <div class="pt-8 pl-7">
                                        <button class="bg-primary rounded-lg shadow-md px-3 py-2 text-white text-sm font-semibold self-center flex flex-wrap">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-white">
                                                <path fill-rule="evenodd" d="M14.615 1.595a.75.75 0 01.359.852L12.982 9.75h7.268a.75.75 0 01.548 1.262l-10.5 11.25a.75.75 0 01-1.272-.71l1.992-7.302H3.75a.75.75 0 01-.548-1.262l10.5-11.25a.75.75 0 01.913-.143z" clip-rule="evenodd" />
                                            </svg>
                                            HEADLINE
                                        </button>
                                    </div>
                                </div>
                                <div class="py-8 px-6">
                                    <h3 class="mb-3 text-xl font-medium text-black">Program Private</h3>
                                    <p class="text-lg font-normal text-text mb-6">Ayo tulis tutor semau kamu, biar kami yang bantu carikan!</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- program section end -->

<!-- daftar section start -->
<section id="#" class="container h-[527px] w-[1290px] pt-0 mb-12 mx-auto" style="background-size: cover; background-image: url(img/daftar-surabaya.png);">
<div class="self-center text-center pt-32">
    <h5 class="text-base font-semibold text-surabaya mb-6">New User</h5>
    <h1 class="text-4xl font-semibold text-black mb-3 max-w-3xl mx-80">Tunggu apalagi segera dapatkan Diskon Up To 30% sampai tanggal 30 September 2022.</h1>
    <p class="text-base font-normal text-body mb-8">Syarat dan Ketentuan berlaku</p>
    <a href="#" class="text-base font-semibold text-white bg-surabaya mb-1 px-4 py-3 rounded-lg">Daftar Segera</a>
</div>
</section>
<!-- daftar section end -->

<!-- footer section start -->
<section id="#" class="bg-footer pt-16 pb-12">
    <div class="container">
        <div class="flex flex-wrap">

            <div class="w-full px-4 md:w-1/4">
                <img src="img/logo.png" alt="">
                <p class="text-base font-normal text-text">Jl. Akses UI No. 99, Perkantoran Wisma Kencana Putri</p>
                <p class="text-base font-normal text-text">Kecamatan Tugu - Cimanggis</p>
                <p class="text-base font-normal text-text">Kota Depok - 16451</p>
            </div>

            <div class="w-full px-4 md:w-1/4">
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

            <div class="w-full px-4 md:w-1/4">
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
                <button class="text-base font-semibold border-black bg-primary px-4 py-2 text-center text-white rounded-lg mb-16" href="#">Subscribe Now</button>
            </div>

            <div class="w-full pt-10 border-t border-text">
                <p class="font-normal text-sm text-center text-black">© Copyright 2023, All Rights Reserved by Yayasan Radian Solusi Indonesia</p>
            </div>
        </div>
    </div>
</section>
<!-- footer section end -->


<script src="{{asset('/js/surabaya.js')}}"></script>

 @endsection