@extends('home.layout.template')
@section('content') 
 
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
                                        <a href="home.html" class="text-sm font-medium text-white mr-32 underline">Home</a>
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
                                        <a href="news.html" class=" text-sm font-medium text-white mr-28">News</a>
                                    </li>
                                    <div class="mt-1.5 self-center block absolute text-right right-4">
                                        @auth
                                            <a href="{{ route('profile') }}" class="flex flex-row items-center">
                                                <p class="text-black text-base font-semibold mr-2">{{ auth()->user()->nama }}</p>
                                                <div style="background-image: url({{ asset('storage/' . auth()->user()->foto) }})" class="bg-cover bg-top w-[40px] h-[40px] mr-0 8x75:mr-7 overflow-hidden items-center justify-center rounded-full"></div>
                                            </a>
                                        @endauth
                                        @guest
                                            <button class="text-white border border-white rounded-lg text-sm font-semibold text-center px-4 py-2">
                                                <a href="{{ route('registrasi') }}">Daftar</a> </button>
                                            <button class="text-dark font-semibold text-sm border border-black bg-second px-4 py-2 rounded-lg ml-4 justify-items-end">
                                                <a href="{{ route('login') }}">Masuk</a>
                                            </button>
                                        @endguest
                                    </div>
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
    <section id="home" class="pt-0 bg-gradient-to-br from-white via-white to-blue-200">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full self-center px-4 lg:order-1 order-2 lg:w-1/2">
                    <button class="border bg-second rounded-full mb-6 py-3 px-8">
                        <h5 class="text-lg font-semibold text-dark md:text-lg">LES PRIVATE & BIMBEL</h5>
                    </button>
                    <h1 class="font-bold text-dark text-3xl mt-1 ">SIAPKAN DIRI BERSAMA YANG AHLI</h1>
                    <p class="font-medium text-dark text-lg mt-6 mb-10">Les Private & Bimbel pengajar, metode dan garansi terbaik guna masa depan yang Cemerlang dan Mulia</p>
                    <div class="w-full grid grid-cols-1 lg:grid-cols-2">
                            <a href="#" class="text-base font-semibold text-white border-black bg-primary w-[166px] py-3 px-8 rounded-md mr-4">Read More</a>
                            <a href="#" class="text-base font-semibold text-black border-2 border-black w-[167px] py-3 px-6 rounded-md lg:mt-0 mt-3">Konsultasi >></a>
                    </div>
                    
                    
                </div>

                <div class="w-full self-end px-4 lg:order-2 order-1 lg:w-1/2">
                    <div class="relative mt-10">
                        <img src="img/image-head.png" alt="" class="max-w-full mx-auto lg:mb-0 mb-3 lg:mt-9 lg:right-0">
                    </div>
                </div>
            </div>

            
        </div>
    </section>
    <!-- hero section end -->

    <!-- promo section start -->
    <section id="promo" class="pt-16 pb-36 bg-slate-100">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full px-4 mb-10 lg:w-1/2">
                    <h4 class="font-bold uppercase text-primary text-lg mb-3">Top Promo</h4>
                    <h2 class="font-bold text-dark text-3xl mb-5 max-w-md">PROMO YANG SEDANG BERLANGSUNG</h2>
                </div>
                <div class="w-full px-4 mb-10 lg:w-1/2">
                    <div class="w-full text-right">
                        <button onclick="prev()" class="p-3 rounded-full bg-white border border-gray-100 shadow-lg mr-5">
                         <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75" />
                        </svg>                
                        </button>
                        <button onclick="next()" class="p-3 rounded-full bg-white border border-gray-100 shadow-lg mr-5">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                              </svg>
                        </button>
                    </div>
                   
                </div>
            </div>
            <div class="flex">
                <div id="slidercontainer" class="w-full overflow-hidden">
                    <ul id="slider" class="flex w-full">
                        <li>
                            <img src="img/Webbanner 1.png" alt="" class="h-auto w-full mr-5">
                        </li>
                        <li>
                            <img src="img/Webbanner 2.png" alt="" class="h-auto w-full mr-5">
                        </li>
                        <li>
                            <img src="img/Webbanner 1.png" alt="" class="h-auto w-full mr-5">
                        </li>
                        <li>
                            <img src="img/Webbanner 2.png" alt="" class="h-auto w-full mr-5">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- promo section end -->

    <!--tentang radian section start  -->
    <section id="about" class="pt-16">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full self-start px-4 lg:w-1/2">
                    <div class="relative mt-10">
                        <img src="img/flat 1.png" alt="" class="max-w-full mx-auto lg:mt-9 lg:left-0">
                    </div>
                </div>

                <div class="w-full self-center px-4 lg:w-1/2">
                    <h5 class="text-lg font-semibold text-primary md:text-lg mb-2 pt-10">ABOUT</h5>
                    <h1 class="font-bold text-dark text-5xl max-w-xs">Tentang Radian Edu</h1>
                    <p class="font-normal text-body text-lg pt-6">Radian Edu Solution adalah sebuah lembaga yang bergerak dibidang 
                        solusi pendidikan yang mengembangkan teknologi serta metode terbaru dan ter-efektif untuk memastikan siswa/i 
                        atau lembaga partner bisa mencapai target yang diinginkan. Kami memiliki motto kerjasama "Best Partner For Accelerating
                        Your Growth". Untuk itu Radian menjadi solusi dan pilihan yang terbaik bagi pihak sekolah guna membantu mempercepat sekolah 
                        menjadi lembaga terbaik dan terdepan. 
                    </p>

                    <div class="flex items-center">
                        <a href="https://www.youtube.com/@radiansolusi7565" target="_blank" class="w-9 h-9 rounded-full flex justify-center items-center border border-dark hover:bg-black">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 hover:text-white">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.348a1.125 1.125 0 010 1.971l-11.54 6.347a1.125 1.125 0 01-1.667-.985V5.653z" />
                            </svg>
                        </a>
                        <a href="https://youtube.com/radiansolusi" target="_blank" class="flex justify-center items-center text-dark pr-4 ml-4">
                           <u> View Video </u>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- tentang radian section end -->

    <!-- keunggulan section start -->
    <section id="unggul" class="pt-16">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h1 class="font-semibold text-dark text-5xl sm:text-5xl lg:text-5xl">
                        Apa Yang Membedakan Radian?
                    </h1>
                    <p class="font-normal text-body text-lg md:text-lg pt-4">
                        Beberapa keuntungan yang akan kamu dapatkan jika bergabung dengan Radian
                    </p>
                </div>
            </div>

            <div class="flex flex-wrap">
                <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                    <div class="group bg-white rounded-xl shadow-lg overflow-hidden mb-10 hover:bg-primary">
                        <div class="flex items-center justify-center h-auto mt-9">
                            <div class="rounded-full w-12 h-12 bg-slate-200 flex justify-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-primary">
                                    <path fill-rule="evenodd" d="M19.916 4.626a.75.75 0 01.208 1.04l-9 13.5a.75.75 0 01-1.154.114l-6-6a.75.75 0 011.06-1.06l5.353 5.353 8.493-12.739a.75.75 0 011.04-.208z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                          <div class="py-8 px-6">
                            <h4 class="mb-3 font-semibold text-xl text-dark text-center group-hover:text-white">
                                Super Teacher
                            </h4>
                            <p class="font-normal text-base text-center pt-1 group-hover:text-white">Guru terbaik, competen, komunikatif serta sopan sehingga memberikan peningkatan super.</p>
                          </div>
                    </div>
                </div>

                <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                    <div class="group bg-white rounded-xl shadow-lg overflow-hidden mb-10 hover:bg-primary">
                        <div class="flex items-center justify-center h-auto mt-9">
                            <div class="rounded-full w-12 h-12 bg-slate-200 flex justify-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                                  </svg>   
                            </div>
                            
                        </div>
                        <div class="py-8 px-6">
                            <h4 class="mb-3 font-semibold text-xl text-dark text-center group-hover:text-white">
                                Adaptive Plan
                            </h4>
                            <p class="font-normal text-base text-center pt-1 mb-6 group-hover:text-white">
                                Memberikan solusi serta rencana untuk meningkatkan dan mencapai target siswa.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                    <div class="group bg-white rounded-xl shadow-lg overflow-hidden mb-10 hover:bg-primary">
                        <div class="flex items-center justify-center h-auto mt-9">
                            <div class="rounded-full w-12 h-12 bg-slate-200 flex justify-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd" />
                                  </svg>
                            </div>
                        </div>
                        <div class="py-8 px-6">
                            <h4 class="mb-3 font-semibold text-xl text-dark text-center group-hover:text-white">
                                Edu Record
                            </h4>
                            <p class="font-normal text-base text-center pt-1 mb-6 group-hover:text-white">
                                Kami memiliki gambaran detail mengenai perkembangan siswa terbaru.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                    <div class="group bg-white rounded-xl shadow-lg overflow-hidden mb-10 hover:bg-primary">
                        <div class="flex items-center justify-center h-auto mt-9">
                            <div class="rounded-full w-12 h-12 bg-slate-200 flex justify-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z" />
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z" clip-rule="evenodd" />
                                  </svg>
                            </div>
                        </div>
                        <div class="py-8 px-6">
                            <h4 class="mb-3 font-semibold text-xl text-dark text-center group-hover:text-white">
                                Gratis Uji Coba
                            </h4>
                            <p class="font-normal text-base text-center pt-1 mb-6 group-hover:text-white">
                                Kamu tidak perlu takut guru tidak nyaman karna bisa uji coba baru bayar program.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                    <div class="group bg-white rounded-xl shadow-lg overflow-hidden mb-10 hover:bg-primary">
                        <div class="flex items-center justify-center h-auto mt-9">
                            <div class="rounded-full w-12 h-12 bg-slate-200 flex justify-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                                  </svg>
                            </div>
                        </div>
                        <div class="py-8 px-6">
                            <h4 class="mb-3 font-semibold text-xl text-dark text-center group-hover:text-white">
                                Sesi Konsultasi
                            </h4>
                            <p class="font-normal text-base text-center pt-1 group-hover:text-white">
                                Konsultasi kapanpun, dimanapun akan selalu di respon dengan baik oleh tim konsultan kami.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                    <div class="group bg-white rounded-xl shadow-lg overflow-hidden mb-10 hover:bg-primary">
                        <div class="flex items-center justify-center h-auto mt-9">
                            <div class="rounded-full w-12 h-12 bg-slate-200 flex justify-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                        <div class="py-8 px-6">
                            <h4 class="mb-3 font-semibold text-xl text-dark text-center group-hover:text-white">
                                Best Practice 
                            </h4>
                            <p class="font-normal text-base text-center pt-1 group-hover:text-white">
                                Sejak 2011 Radian mengembangkan berbagai tools, sistem, dan teknologi terkini.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- keunggulan section end -->

    <!-- Program section start -->
    <section id="#" class="pt-16 pb-12 bg-slate-100">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full self-center px-4 lg:w-1/2">
                    <h5 class="text-lg font-semibold text-primary mb-2">PROGRAM</h5>
                    <h1 class="text-5xl font-semibold text-black mb-4 max-w-[355px]">Program Radian Edu</h1>
                    <p class="text-lg font-normal text-body max-w-xs">Ayo pilih program terbaik sesuai dengan kebutuhanmu.</p>
                </div>

                <div class="w-full lg:w-1/2">
                    <div class="w-full overflow-hidden grid grid-cols-1 bg-slate-100 overflow-x-scroll gap-1">
                        <ul class="flex">
                            <li>
                                <div class="bg-white rounded-3xl shadow-lg mb-10 w-[255px] h-[371px] mr-6">
                                    <div class="h-[210px]" style="background-image: url(img/program1.png);">
                                        <div class="pt-8 pl-7">
                                            <button class="bg-primary rounded-lg shadow-lg px-3 py-2 text-white text-sm font-semibold self-center flex flex-wrap">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-white">
                                                    <path fill-rule="evenodd" d="M14.615 1.595a.75.75 0 01.359.852L12.982 9.75h7.268a.75.75 0 01.548 1.262l-10.5 11.25a.75.75 0 01-1.272-.71l1.992-7.302H3.75a.75.75 0 01-.548-1.262l10.5-11.25a.75.75 0 01.913-.143z" clip-rule="evenodd" />
                                                </svg>
                                                HEADLINE</button>
                                        </div>
                                    </div>
                                    <div class="py-5 px-6">
                                        <h3 class="mb-3 text-xl font-medium text-black">
                                            Program Privat
                                        </h3>
                                        <p class="text-lg font-normal text-text mb-6">Les Privat bergaransi dengan guru lulusan PTN terbaik.</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="bg-white rounded-3xl shadow-lg mb-10 w-[255px] h-[371px] mr-6">
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
                                    <div class="py-5 px-6">
                                        <h3 class="mb-3 text-xl font-medium text-black">
                                            Supercamp
                                        </h3>
                                        <p class="text-lg font-normal text-text mb-6">Bimbingan intensif karantina 30 hari menjelang ujian UTBK.</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="bg-white rounded-3xl shadow-lg mb-10 w-[255px] h-[371px] mr-6">
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
                                    <div class="py-5 px-6">
                                        <h3 class="mb-3 text-xl font-medium text-black">
                                            Program Class
                                        </h3>
                                        <p class="text-lg font-normal text-text mb-6">Belajar bersama di kelas dengan guru berpengalaman. </p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="bg-white rounded-3xl shadow-lg mb-10 w-[255px] h-[371px] mr-6">
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
                                    <div class="py-5 px-6">
                                        <h3 class="mb-3 text-xl font-medium text-black">
                                            Program Privat
                                        </h3>
                                        <p class="text-lg font-normal text-text mb-6">Les Privat bergaransi dengan guru lulusan PTN terbaik.</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Program section end -->

    <!-- tutor section start -->
    <section id="tutor" class="pt-16">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full px-4 mb-10 lg:w-1/2">
                    <h4 class="font-bold uppercase text-primary text-lg">Tutor</h4>
                    <h2 class="font-bold text-dark text-5xl mb-5 max-w-sm">Rekomendasi Tutor Terbaik</h2>
                </div>
                
                <div class="w-full pl-4 pr-0 lg:w-1/2 right-0">
                    <h4 class="font-normal text-lg mr-16 text-body mb-3">Ayo tulis tutor semau kamu, biar kami yang bantu carikan!</h4>
                        <form action="{{ route('daftar.guru') }}" method="GET" class="w-full flex flex-row">
                            <div class="w-full flex px-4 mb-2 ">
                                <div class="w-full max-w-lg">
                                    <div class="relative flex text-text border border-body rounded-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 absolute ml-3 self-center" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                          </svg>
                                        <input type="text" name="mata_pelajaran" placeholder="Mata Pelajaran" autocomplete="off" aria-label="Mata Pelajaran" class="w-full py-3 pl-10 font-normal rounded-lg">
                                    </div>
                                </div>
                            </div>

                            <div class="w-full flex px-4 mb-2 ">
                                <div class="w-full max-w-lg">
                                    <div class="relative flex text-text border border-body rounded-lg">
                                         <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 absolute ml-3 self-center" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                        <input type="text" name="domisili" placeholder="Mata Pelajaran" autocomplete="off" aria-label="Domisili" class="w-full py-3 pl-10 font-normal rounded-lg">
                                    </div>
                                </div>
                            </div>

                            <div class="w-full flex px-4 mb-2 ">
                                <button type="submit" class="text-base font-normal text-white p-4 bg-primary rounded-lg">Cari</button>
                            </div>
                        </form>
                        
                            
                </div>
                
            </div>
            

            <div class="flex flex-wrap">
                {{-- menampilkan data tutor (yang sudah microteaching) --}}
                @isset ($guru)
                    @foreach ($guru as $row)
                    <div class="w-full px-4 mb-10 lg:w-1/4">
                        <div class="bg-white card rounded-2xl overflow-hidden relative group w-[253px] h-[348px]">
                         <div class="h-[348px] transition-all transform bg-cover bg-top" style="background-image: url({{ asset('storage/'. $row->foto) }});">
                             <div class="bg-primaryYellow h-[98px] rounded-2xl absolute inset-x-0 bottom-0 text-center">
                                 <h1 class="text-xl font-medium text-black mb-2">{{ $row->nama }}</h1>
                                 
                                 {{-- melakukan pemeriksaan jika data bernilai null  --}}
                                 @isset($row->minat_mengajar)
                                    @php
                                        $minat_mengajar = $row->minat_mengajar->first()->mata_pelajaran->mata_pelajaran; 
                                    @endphp
                                 @else
                                    @php
                                        $minat_mengajar = "Mapel"; 
                                    @endphp
                                 @endisset
                                 {{-- ---------  --}}

                                 <h5 class="text-lg font-normal text-black mb-0">{{ ucwords(strtolower($minat_mengajar)) }} - {{ ucwords(strtolower($row->kabupaten)) }}</h5>
                                 <h5 class="text-lg font-normal text-black mb-3">{{ $row->universitas }}</h5>
                             </div>
                         </div>
                         <div class="absolute bottom-0 left-0 w-full"></div>
                         <div class="absolute z-0 inset-0 bg-primaryYellow opacity-0 group-hover:opacity-100 transition-all"></div>
                         <div class="group-hover:-translate-y-3 group-hover:bottom-0 transition-all absolute button-0 left-0 text-black p-4 justify-center content-center">
                             <h4 class="font-medium mb-1 text-xl text-center opacity-80">Angelina</h4>
                             <h3 class="font-normal mb-0 text-lg text-center">{{ ucwords(strtolower($minat_mengajar)) }} - {{ ucwords(strtolower($row->kabupaten)) }}</h3>
                             <h3 class="font-normal mb-3 text-lg text-center">{{ $row->universitas }}</h3>
                             <div class="justify-center mx-12">
                                 
                                    {{-- menampilkan keuntungan  --}}
                                    <a class="transition-all text-sm inline-flex rounded-xl mb-28 px-2 py-2 text-center justify-center border border-primary bg-primary text-semibold" href="{{ route('detail.guru', [encrypt($row->id)]) }}">
                                     <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentcolor">
                                         <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd" />
                                    </svg>

                                    {{-- harga  --}}
                                    Rp. {{ number_format($row->harga + ($row->harga * ($keuntungan / 100)), 0, ",", ".") }}
                                </a>
                             </div> 
                         </div>
                       </div>
                    </div>
                    @endforeach
                @endisset
            </div>

            <div class="flex items-center justify-center">
                <a href="{{ route('daftar.guru') }}" class="text-base border border-primary bg-primary px-4 py-2 text-center text-white rounded-lg mb-16">Lihat lebih banyak</a>
            </div>

        </div>
    </section>
    <!-- tutor section end -->

    <!-- testimoni section start -->
    <section id="testi" class="pt-16 pb-36">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full px-4 mb-10 lg:w-1/3">
                    <h2 class="font-semibold text-black text-5xl mb-14">Apa Kata Mereka Tentang Radian</h2>
                </div>
                <div class="w-full px-4 mb-10 lg:w-1/3">
                    <p class="font-normal text-body text-lg mb-14 max-w-md mx-auto flex">Radian telah memberikan banyak impect untuk membantu para pelajar agar mencapai target dan tujuannya.</p>
                </div>
                <div class="w-full px-4 mb-10 lg:w-1/3">
                    <div class="w-full text-right">
                        <button onclick="before()" class="p-3 rounded-full bg-slate-100 border border-gray-100 shadow-lg mr-5">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-primary">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                              </svg>                              
                        </button>

                        <button onclick="after()" class="p-3 rounded-full bg-slate-100 border border-gray-100 shadow-lg mr-5">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-primary">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                              </svg>                              
                        </button>
                    </div>
                </div>
            </div>

            <div class="flex">
                <div id="slidercarousel" class="w-full overflow-hidden">
                    <ul id="slids" class="flex w-full">
                        <li>
                            <div class="group bg-white border border-body rounded-2xl mb-10 mt-7 mr-4 hover:bg-primary group-hover:text-white hover:border-dark">
                                <div class="flex items-center justify-center h-auto mt-8">
                                    <div class="rounded-full w-12 h-12 bg-slate-200 flex justify-center items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                          </svg>
                                    </div>
                            </div>
                            <div class="py-4 px-6">
                                <h3 class="mb-1 font-normal text-xl text-black text-center">Novan</h3>
                                <h4 class="mb-6 font-normal text-lg text-body text-center group-hover:text-white">UB - FKG</h4>
                                <p class="mb-9 font-normal text-lg text-body text-center group-hover:text-white">"Saya sangat bersyukur telah bergabung dengan Radian karena berhasil masuk ke fakultas kedokteran impian saya. Materi yang sulit menjadi lebih mudah dipahami karena cara ngajar yang sistematis dan jelas dari para pengajar yang profesional.”</p>
                            </div>
                        </div>
                        </li>

                        <li>
                            <div class="group bg-white border border-body rounded-2xl mb-10 mt-7 mr-4 hover:bg-primary group-hover:text-white hover:border-dark">
                                <div class="flex items-center justify-center h-auto mt-8">
                                    <div class="rounded-full w-12 h-12 bg-slate-200 flex justify-center items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="py-4 px-6">
                                    <h3 class=" mb-1 font-normal text-xl text-black text-center">Ikhsan</h3>
                                    <h4 class="mb-6 font-normal text-lg text-body text-center group-hover:text-white">UNPAD - HI</h4>
                                    <p class="mb-16 font-normal text-lg text-body text-center group-hover:text-white">“Radian sangat membantu saya meningkatkan nilai disekolah. Saya sangat senang dengan system belajar mengajar disini. Terimakasih Radian sudah membantu saya masuk ke PTN yang saya impikan.”</p>
                                </div> 
                            </div>
                        </li>

                        <li>
                            <div class="group bg-white border border-body rounded-2xl mb-10 mt-7 mr-4 hover:bg-primary group-hover:text-white hover:border-dark">
                                <div class="flex items-center justify-center h-auto mt-8">
                                    <div class="rounded-full w-12 h-12 bg-slate-100 flex justify-center items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="py-4 px-6">
                                    <h3 class="mb-1 font-normal text-xl text-black text-center">Putri</h3>
                                    <h4 class="mb-6 font-normal text-lg text-body text-center group-hover:text-white">UNPAD - Akuntansi</h4>
                                    <p class="mb-[93px] font-normal text-lg text-body text-center group-hover:text-white">"Guru privat disini sangat efektif dalam membantu saya memahami materi pelajaran untuk persiapan ujian. Terimakasih Radian”</p>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="group bg-white border border-body rounded-2xl mb-10 mt-7 mr-4 hover:bg-primary group-hover:text-white hover:border-dark">
                                <div class="flex items-center justify-center h-auto mt-8">
                                    <div class="rounded-full w-12 h-12 bg-slate-100 flex justify-center items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="py-4 px-6">
                                    <h3 class="mb-1 font-normal text-xl text-black text-center">Zefanya</h3>
                                    <h4 class="mb-6 font-normal text-lg text-body text-center group-hover:text-white">UI - Kedokteran</h4>
                                    <p class="mb-[93px] font-normal text-lg text-body text-center group-hover:text-white">"Guru-guru di Radian memberikan saya harapan dan dukungan besar. Saya mendapatkan banyak strategi dan tips dalam menghadapi ujian UTBK.”</p>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="group bg-white border border-body rounded-2xl mb-10 mt-7 mr-4 hover:bg-primary group-hover:text-white hover:border-dark">
                                <div class="flex items-center justify-center h-auto mt-8">
                                    <div class="rounded-full w-12 h-12 bg-slate-100 flex justify-center items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="py-4 px-6">
                                    <h3 class="mb-1 font-normal text-xl text-black text-center">Kevin</h3>
                                    <h4 class="mb-6 font-normal text-lg text-body text-center group-hover:text-white">UB - Teknik Industri</h4>
                                    <p class="mb-[93px] font-normal text-lg text-body text-center group-hover:text-white">"Radian sangat membantu saya dalam mempersiapkan diri untuk ujian masuk kampus impian saya. Terimakasih Radian sudah membantu saya masuk Universitas Brawijaya”</p>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="group bg-white border border-body rounded-2xl mb-10 mt-7 mr-4 hover:bg-primary group-hover:text-white hover:border-dark">
                                <div class="flex items-center justify-center h-auto mt-8">
                                    <div class="rounded-full w-12 h-12 bg-slate-100 flex justify-center items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="py-4 px-6">
                                    <h3 class="mb-1 font-normal text-xl text-black text-center">Nadif</h3>
                                    <h4 class="mb-6 font-normal text-lg text-body text-center group-hover:text-white">IPB - Sekolah Bisnis</h4>
                                    <p class="mb-[93px] font-normal text-lg text-body text-center group-hover:text-white">“Belajar di Radian benar-benar membantu saya dalam memahami soal-soal UTBK. Latihan soalnya banyak sehingga saya dapat berlatih untuk mengerjakan berbagai macam soal”</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- testimoni section end -->

    <!-- galery section start -->
    <section id="galery" class="pt-16 pb-36 bg-slate-100">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full self-center px-4 lg:w-1/2">
                    <h5 class="text-lg font-semibold text-primary md:text-lg mb-2 pt-10">GALLERY</h5>
                    <h1 class="text-5xl text-dark font-semibold mb-4 max-w-xs">Gallery Radian Edu</h1>
                    <p class="text-lg font-normal text-body max-w-xs">Sebuah perjalanan Radian untuk menghantarkan para teman-teman dalam menggapai mimpinya.</p>
                </div>

                <div class="w-full self-center px-4 lg:w-1/2">
                    <div class="h-96 grid grid-cols-2 gap-2 bg-slate-100 overflow-y-scroll">
                        <img src="img/img2.png" alt="" class="w-full h-full">
                        <img src="img/img1.png" alt="" class="w-full h-full">
                        <img src="img/img4.png" alt="" class="w-full h-full">
                        <img src="img/img3.png" alt="" class="w-full h-full">
                        <img src="img/img6.png" alt="" class="w-full h-full">
                        <img src="img/img5.png" alt="" class="w-full h-full">
                        <img src="img/img8.png" alt="" class="w-full h-full">
                        <img src="img/img7.png" alt="" class="w-full h-full">
                        <img src="img/img10.png" alt="" class="w-full h-full">
                        <img src="img/img9.png" alt="" class="w-full h-full">
                        <img src="img/img12.png" alt="" class="w-full h-full">
                        <img src="img/img11.png" alt="" class="w-full h-full">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- galery section end -->

    <!-- belajar section start -->
    <section id="belajar" class="pt-20 pb-32">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full self-start lg:w-1/2">
                    <h1 class="text-black lg:text-5xl text-3xl font-semibold">Masih Bingung Mulai Belajar Dari Mana?</h1>
                </div>
                <div class="w-full self-center lg:text-right lg:w-1/2 lg:mt-0 mt-2">
                    <button class="text-base text-white font-medium border border-black bg-primary px-4 py-2 rounded-lg items-center self-center" href="#">Daftar Sekarang >></button>
                </div>
            </div>
        </div>
    </section>
    <!-- belajar section end -->

    <!-- teacher section start -->
    <section id="teacher" class="pb-20">
        <div class="container">
            <div class="px-4 mx-auto overflow-hidden bg-section rounded-3xl sm:px-6 lg:px-8">
                <div class="2xl:pl-24">
                    <div class="grid items-center grid-cols-1 gap-y-12 lg:grid-cols-2 lg:gap-x-8 2xl:gap-x-20">
                        <div class="lg:order-1 order-2">
                            <h2 class="text-5xl font-semibold leading-tight text-primary sm:text-4xl lg:text-5xl lg:leading-tight">Ingin menjadi Super Teacher di Radian Edu?</h2>
                            <p class="mt-4 text-base text-black mb-6">Siap menjadi #Superteacher di Radian Edu Solution untuk membantu mingkatkan kualitas pendidikan di Indonesia!</p>
                            <button class="text-base font-semibold border border-black bg-primary px-4 py-2 text-center text-white rounded-lg mb-16" href="#">Daftar Sebagai Guru >></button>
                        </div>
        
                        <div class="relative p-0 bottom-0 self-end lg:order-2 order-1">
                            <img class="relative w-full h-full" src="img/section_teacher.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- teacher section end -->

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

    <script src="{{asset('/js/script.js')}}"></script>ipt>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    @endsection