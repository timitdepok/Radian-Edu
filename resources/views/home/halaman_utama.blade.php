@extends('home.layout.template')
@section('content') 
 
 <!-- navbar section start -->
    <header class="fixed z-50 w-full">
        <!-- navbar 1 section -->
        <div class="bg-white left-0 w-full flex justify-between items-center">
            <div class="container">
                <div class="flex items-center w-fit">
                    <div class="px-3 flex">
                        <img src="img/logo-radian 1.png" alt="" class="mx-4 my-2 h-[36px]">
                    </div>
                    <div class="lg:px-4 flex py-3">
                        <span class="lg:text-base text-xs font-medium border border-secondary bg-secondary px-4 py-2 pt-2 self-center text-center text-dark rounded-lg ml-7 mb-3 lg:mb-0"><a href="/daftar/guru">Temukan Guru</a></span>
                        <span class="lg:text-base text-xs font-medium border border-secondary bg-secondary lg:px-4 py-2 text-center text-dark rounded-lg ml-4 mr-2 lg:mr-0 mb-3 lg:mb-0"><a href="/registrasi">Daftar Sebagai Guru</a></span>
                    </div>
                </div>
                @auth
                <div class="w-fit flex justify-end">
                    <a href="{{ route('profile') }}" class="flex flex-row items-center">
                        <h1 class="text-sm mr-2 hidden sm:block">{{ auth()->user()->nama }}</h1>
                        <div class="bg-cover bg-top w-[40px] h-[40px] overflow-hidden justify-center rounded-full">
                            <img src="{{ asset('storage/' . auth()->user()->foto) }}" class="h-full w-full object-cover" alt="">
                        </div>
                    </a>
                </div>
                @endauth
            </div>
            
        </div>
        <!-- navbar 1 section end -->
            <!-- navbar 2 section start -->
            <div class="w-full text-white bg-primary">
                <div x-data="{ open: false }" class="flex flex-col max-w-screen-[1340px] pl-2 mr-0 md:items-center md:justify-between md:flex-row md:pl-6 lg:pl-8">
                    <div class="flex flex-row items-center justify-between pl-4 py-4">
                        <button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                              </svg>
                        </button>
                    </div>  
                    <nav :class="{'flex': open, 'hidden': !open}" class="flex-col flex-grow hidden pb-4 md:pb-0 md:flex md:justify-end md:flex-row lg:self-center">
                        <a class="px-4 py-4 lg:text-sm text-xs font-semibold text-white border-b border-white md:mt-0 hover:text-gray-900 focus:text-gray-900 focus:outline-none lg:mr-10 lg:self-center" href="#">Home</a>
                        <div @click.away="open = false" class="relative lg:self-center" x-data="{ open: false }">
                            <button @click="open = !open" class="flex flex-row items-center w-full px-4 lg:py-4 py-2 lg:my-4 mt-2 lg:text-sm text-xs font-semibold text-left bg-transparent rounded-lg md:w-auto md:inline md:ml-4 hover:text-gray-900 focus:text-gray-900 focus:outline-none focus:shadow-outline lg:mr-10 lg:self-center">
                                <span>Produk</span>
                                <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1 lg:self-center"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </button>
                            <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48 z-30">
                                <div class="px-4 py-2 bg-white rounded-md shadow dark-mode:bg-gray-700">
                                    <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg text-black md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="{{ url('/supercamp') }}">Supercamp</a>
                                    <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg text-black md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="{{ url('/privat') }}">Les Privat</a>
                                    <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg text-black md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Privat CPNS</a>
                                    <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg text-black md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="{{ url('/privat') }}">Privat Garansi</a>
                                    <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg text-black md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="{{ url('/supercampkedokteran') }}">Kedokteran</a>
                                </div>
                            </div>
                        </div>
    
                        <div @click.away="open = false" class="relative" x-data="{ open: false }">
                            <button @click="open = !open" class="flex flex-row items-center w-full px-4 lg:py-4 py-2 lg:my-4 mt-2 lg:text-sm text-xs font-semibold text-left bg-transparent rounded-lg md:w-auto md:inline md:ml-4 hover:text-gray-900 focus:text-gray-900 focus:outline-none focus:shadow-outline lg:mr-10 lg:self-center">
                                <span>Area Layanan</span>
                                <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </button>
                            <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48 z-30">
                                <div class="px-4 py-2 bg-white rounded-md shadow dark-mode:bg-gray-700">
                                    <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg text-black md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/jabodetabek">Jabodetabek</a>
                                    <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg text-black md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/jogja">Yogyakarta</a>
                                    <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg text-black md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/surabaya">Surabaya</a>
                                    <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg text-black md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/bandung">Bandung</a>
                                </div>
                            </div>
                        </div>
                        <div @click.away="open = false" class="relative" x-data="{ open: false }">
                            <button @click="open = !open" class="flex flex-row items-center w-full px-4 lg:py-4 py-2 lg:my-4 mt-2 lg:text-sm text-xs font-semibold text-left bg-transparent rounded-lg md:w-auto md:inline md:ml-4 hover:text-gray-900 focus:text-gray-900 focus:outline-none focus:shadow-outline lg:mr-10 lg:self-center">
                                <span>Tingkatan</span>
                                <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </button>
                            <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full md:max-w-screen-sm md:w-screen mt-2 origin-top-right z-30">
                                <div class="px-4 py-2 bg-white rounded-md shadow-lg dark-mode:bg-gray-700">
                                  <div class="grid grid-cols-1 lg:gap-4 gap-1">
                                    <a class="flex flex-row items-start rounded-lg bg-transparent px-2 py-1 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/sd">
                                      <div class="bg-red-200 text-white rounded-lg p-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="lg:w-5 w-3 lg:h-5 h-3 text-sd">
                                            <path d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z" />
                                        </svg>
                                      </div>
                                      <div class="ml-3">
                                        <p class="lg:text-base text-sm font-bold text-black">Sekolah Dasar</p>
                                        <p class="lg:text-base text-sm font-normal text-body">Program bimbingan belajar dan les privat untuk jenjang SD. </p>
                                      </div>
                                    </a>
        
                                    <a class="flex flex-row items-start rounded-lg bg-transparent px-2 py-1 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/smp">
                                      <div class="bg-green-200 text-white rounded-lg p-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="lg:w-5 w-3 lg:h-5 h-3 text-primary">
                                            <path fill-rule="evenodd" d="M14.615 1.595a.75.75 0 01.359.852L12.982 9.75h7.268a.75.75 0 01.548 1.262l-10.5 11.25a.75.75 0 01-1.272-.71l1.992-7.302H3.75a.75.75 0 01-.548-1.262l10.5-11.25a.75.75 0 01.913-.143z" clip-rule="evenodd" />
                                        </svg>
                                      </div>
                                      <div class="ml-3">
                                        <p class="lg:text-base text-sm font-bold text-black">Sekolah Menengah Pertama</p>
                                        <p class="lg:text-base text-sm font-normal text-body">Program bimbingan belajar dan les privat untuk jenjang SMP. </p>
                                      </div>
                                    </a>
        
                                    <a class="flex flex-row items-start rounded-lg bg-transparent px-2 py-1 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/sma">
                                      <div class="bg-slate-300 text-white rounded-lg p-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="lg:w-5 w-3 lg:h-5 h-3 text-dark">
                                            <path fill-rule="evenodd" d="M12.963 2.286a.75.75 0 00-1.071-.136 9.742 9.742 0 00-3.539 6.177A7.547 7.547 0 016.648 6.61a.75.75 0 00-1.152-.082A9 9 0 1015.68 4.534a7.46 7.46 0 01-2.717-2.248zM15.75 14.25a3.75 3.75 0 11-7.313-1.172c.628.465 1.35.81 2.133 1a5.99 5.99 0 011.925-3.545 3.75 3.75 0 013.255 3.717z" clip-rule="evenodd" />
                                        </svg>
                                      </div>
                                      <div class="ml-3">
                                        <p class="lg:text-base text-sm font-bold text-black">Sekolah Menengah Atas</p>
                                        <p class="lg:text-base text-sm font-normal text-body">Program bimbingan belajar dan les privat untuk jenjang SMA. </p>
                                      </div>
                                    </a>
    
                                    <a class="flex flex-row items-start rounded-lg bg-transparent px-2 py-1 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/mahasiswa">
                                        <div class="bg-slate-300 text-white rounded-lg p-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="lg:w-5 w-3 lg:h-5 h-3 text-mhs">
                                                <path d="M11.584 2.376a.75.75 0 01.832 0l9 6a.75.75 0 11-.832 1.248L12 3.901 3.416 9.624a.75.75 0 01-.832-1.248l9-6z" />
                                                <path fill-rule="evenodd" d="M20.25 10.332v9.918H21a.75.75 0 010 1.5H3a.75.75 0 010-1.5h.75v-9.918a.75.75 0 01.634-.74A49.109 49.109 0 0112 9c2.59 0 5.134.202 7.616.592a.75.75 0 01.634.74zm-7.5 2.418a.75.75 0 00-1.5 0v6.75a.75.75 0 001.5 0v-6.75zm3-.75a.75.75 0 01.75.75v6.75a.75.75 0 01-1.5 0v-6.75a.75.75 0 01.75-.75zM9 12.75a.75.75 0 00-1.5 0v6.75a.75.75 0 001.5 0v-6.75z" clip-rule="evenodd" />
                                                <path d="M12 7.875a1.125 1.125 0 100-2.25 1.125 1.125 0 000 2.25z" />
                                              </svg>
                                        </div>
                                        <div class="ml-3">
                                          <p class="lg:text-base text-sm font-bold text-black">Mahasiswa</p>
                                          <p class="lg:text-base text-sm font-normal text-body">Program bimbingan belajar dan les privat untuk jenjang Mahasiswa. </p>
                                        </div>
                                      </a>
                                  </div>
                                </div>
                            </div>
                        </div> 
                        
                        <a class="px-4 lg:py-4 py-2 mt-2 text-sm font-semibold text-white md:mt-0 hover:text-gray-900 focus:text-gray-900 focus:outline-none lg:mr-10 lg:self-center" href="#testi">Testimoni</a>
                        <a class="px-4 lg:py-4 py-2 mt-2 text-sm font-semibold text-white md:mt-0 hover:text-gray-900 focus:text-gray-900 focus:outline-none lg:mr-16 lg:self-center" href="/news">News</a>
                        @guest
                        <div class="lg:self-center lg:ml-56">
                            <a class="text-white text-sm font-semibold hover:text-gray-900 focus:text-gray-900 focus:outline-none px-4 lg:py-4 py-2 lg:mr-3 lg:self-center lg:text-right lg:right-0" href="/registrasi">Daftar</a>
                            <a class="text-white font-semibold text-sm border border-white lg:px-4 lg:py-2 py-2 lg:mt-5 mt-2 text-center rounded-lg justify-items-end w-[94px] h-[40px] lg:mr-3 lg:right-0" href="/login">Masuk</a>
                        </div>
                        @endguest
                    </nav>
                </div>
            </div>
        <!-- navbar 2 section end -->
    </header>
<!-- navbar section end -->

<!-- hero section start -->
    <section id="home" class="pt-20 bg-gradient-to-br from-white via-white to-blue-200">
        <div class="container">
            <div class="flex flex-wrap lg:mt-10">
                <div class="w-full self-center px-4 lg:order-1 order-2 lg:w-1/2">
                    <button class="border bg-second rounded-full mb-6 py-3 px-8">
                        <h5 class="text-lg font-semibold text-dark md:text-lg">LES PRIVATE & BIMBEL</h5>
                    </button>
                    <h1 class="lg:text-6xl text-3xl font-bold text-black mb-[19px] max-w-[645px] mt-1">Radian Edu, Best Partner For The Best Future</h1>
                    <p class="text-lg font-normal text-body max-w-[576px] mt-6 mb-4">Lembaga Privat, Bimbel dan Supercamp Bergaransi dengan Pengajar, Metode serta Teknologi Terbaik Guna Menuju Masa Depan Cemerlang.</p>
                    <div class="flex lg:mb-0 mb-3">
                        <a href="https://wa.me/+6281779007135?text=Halo%20radian%20%0A%0ANama%20%3A%20%0AAsal%20Kota%20%3A%20%0ASekolah%20dan%20Kelas%20%3A%20%0AOrang%20Tua%20%2F%20Siswa%20%3F%20%3A%0ASaya%20mengetahui%20program%20ini%20melalui%20website%20privatgaransi.radianedu.com%20" class="lg:text-base text-sm font-semibold text-white bg-primary rounded-lg py-3 px-2 lg:mt-14 text-center lg:mb-0 mb-2 mr-6 w-[151px] h-[48px]">Read More</a>
                        <a href="https://wa.me/+6281779007135?text=Halo%20radian%20%0A%0ANama%20%3A%20%0AAsal%20Kota%20%3A%20%0ASekolah%20dan%20Kelas%20%3A%20%0AOrang%20Tua%20%2F%20Siswa%20%3F%20%3A%0ASaya%20mengetahui%20program%20ini%20melalui%20website%20privatgaransi.radianedu.com%20" class="lg:text-base text-sm font-semibold text-black border border-black lg:py-3 py-4 lg:px-2 px-6 rounded-lg lg:mt-14 text-center w-[151px] h-[48px]">KONSULTASI >></a>
                    </div>
                    
                    
                </div>
                <div class="w-full self-end px-4 lg:mt-10 lg:order-2 order-1 lg:w-1/2">
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
                    <button onclick="next()" class="p-3 rounded-full bg-slate-100 border border-gray-100 shadow-lg mr-5">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-primary">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                          </svg>                              
                    </button>

                    <button onclick="prev()" class="p-3 rounded-full bg-slate-100 border border-gray-100 shadow-lg mr-5">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-primary">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
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
                        <img src="img/ABOUT.png" alt="" class="max-w-full mx-auto lg:mt-9 lg:left-0">
                    </div>
                </div>

                <div class="w-full self-center px-4 lg:w-1/2">
                    <h5 class="text-lg font-semibold text-primary md:text-lg mb-2 pt-10">ABOUT</h5>
                    <h1 class="font-bold text-dark text-5xl max-w-xs">Tentang Radian Edu</h1>
                    <p class="font-normal text-body text-lg pt-6 mb-2">Radian Edu Solution adalah sebuah lembaga yang bergerak dibidang 
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
                    <h1 class="font-semibold text-dark text-2xl lg:text-5xl">
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
                    <h5 class="text-lg font-semibold text-primary lg:mb-2 mb-0">PROGRAM</h5>
                    <h1 class="lg:text-5xl text-2xl font-semibold text-black lg:mb-4 mb-2 max-w-[355px]">Program Radian Edu</h1>
                    <p class="text-lg font-normal text-body max-w-xs lg:mb-0 mb-4">Ayo pilih program terbaik sesuai dengan kebutuhanmu.</p>
                </div>

                <div class="w-full lg:w-1/2">
                    <div class="w-full overflow-hidden grid grid-cols-1 bg-slate-100 overflow-x-scroll gap-1">
                        <ul class="flex">
                            <li>
                                <div class="rounded-xl lg:w-[300px] w-[255px] h-[455px] bg-white shadow-sm mr-6 mb-8">
                                    <div class="w-full mr-6">
                                        <div class="h-full w-full rounded-xl object-cover overflow-hidden relative">
                                            <img src="img/supercamp.png" alt="" class="w-full h-[210px] object-cover">
                                            <div class="pt-8 pl-7">
                                                <button class="bg-primary rounded-lg px-3 py-2 text-white text-sm font-semibold self-center absolute top-6 z-20 flex flex-wrap">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-white">
                                                        <path fill-rule="evenodd" d="M14.615 1.595a.75.75 0 01.359.852L12.982 9.75h7.268a.75.75 0 01.548 1.262l-10.5 11.25a.75.75 0 01-1.272-.71l1.992-7.302H3.75a.75.75 0 01-.548-1.262l10.5-11.25a.75.75 0 01.913-.143z" clip-rule="evenodd" />
                                                    </svg>
                                                    HEADLINE 
                                                </button>
                                            </div>
                                        </div>
                                        <div class="pb-5 px-6">
                                            <h3 class="mb-3 text-xl font-medium text-black">
                                                Supercamp
                                            </h3>
                                            <p class="lg:text-lg text-sm font-normal text-text mb-6">Belajar dengan sistem karantina 30 hari untuk persiapan ujian UTBK, dilengkapi dengan guru dan fasilitas terbaik</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="rounded-xl lg:w-[300px] w-[255px] h-[455px] bg-white shadow-sm mr-6 mb-8">
                                    <div class="w-full mr-6">
                                        <div class="h-full w-full rounded-xl object-cover overflow-hidden relative">
                                            <img src="img/privat-rutin.png" alt="" class="w-full h-[210px] object-cover">
                                            <div class="pt-8 pl-7">
                                                <button class="bg-primary rounded-lg px-3 py-2 text-white text-sm font-semibold self-center absolute top-6 z-20 flex flex-wrap">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-white">
                                                        <path fill-rule="evenodd" d="M14.615 1.595a.75.75 0 01.359.852L12.982 9.75h7.268a.75.75 0 01.548 1.262l-10.5 11.25a.75.75 0 01-1.272-.71l1.992-7.302H3.75a.75.75 0 01-.548-1.262l10.5-11.25a.75.75 0 01.913-.143z" clip-rule="evenodd" />
                                                    </svg>
                                                    HEADLINE 
                                                </button>
                                            </div>
                                        </div>
                                        <div class="pb-5 px-6">
                                            <h3 class="mb-3 text-xl font-medium text-black">
                                                Privat Rutin
                                            </h3>
                                            <p class="lg:text-lg text-sm font-normal text-text mb-6">Les Privat  esklusif untuk semua jenjang dengan guru terbaik. Cukup dirumah saja, biar guru kami yang datang kerumah anda.</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="rounded-xl lg:w-[300px] w-[255px] h-[455px] bg-white shadow-sm mr-6 mb-8">
                                    <div class="w-full mr-6">
                                        <div class="h-full w-full rounded-xl object-cover overflow-hidden relative">
                                            <img src="img/privat-garansi.png" alt="" class="w-full h-[210px] object-cover">
                                            <div class="pt-8 pl-7">
                                                <button class="bg-primary rounded-lg px-3 py-2 text-white text-sm font-semibold self-center absolute top-6 z-20 flex flex-wrap">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-white">
                                                        <path fill-rule="evenodd" d="M14.615 1.595a.75.75 0 01.359.852L12.982 9.75h7.268a.75.75 0 01.548 1.262l-10.5 11.25a.75.75 0 01-1.272-.71l1.992-7.302H3.75a.75.75 0 01-.548-1.262l10.5-11.25a.75.75 0 01.913-.143z" clip-rule="evenodd" />
                                                    </svg>
                                                    HEADLINE 
                                                </button>
                                            </div>
                                        </div>
                                        <div class="pb-5 px-6">
                                            <h3 class="mb-3 text-xl font-medium text-black">
                                                Privat Garansi
                                            </h3>
                                            <p class="lg:text-lg text-sm font-normal text-text mb-6">Privat bergaransi dengan kualitas pengajar terbaik dan berpengalaman di bidangnya. Garansi lolos PTN dan Jurusan Favorit</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="rounded-xl lg:w-[300px] w-[255px] h-[455px] bg-white shadow-sm mr-6 mb-8">
                                    <div class="w-full mr-6">
                                        <div class="h-full w-full rounded-xl object-cover overflow-hidden relative">
                                            <img src="img/privat-mahasiswa.png" alt="" class="w-full h-[210px] object-cover">
                                            <div class="pt-8 pl-7">
                                                <button class="bg-primary rounded-lg px-3 py-2 text-white text-sm font-semibold self-center absolute top-6 z-20 flex flex-wrap">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-white">
                                                        <path fill-rule="evenodd" d="M14.615 1.595a.75.75 0 01.359.852L12.982 9.75h7.268a.75.75 0 01.548 1.262l-10.5 11.25a.75.75 0 01-1.272-.71l1.992-7.302H3.75a.75.75 0 01-.548-1.262l10.5-11.25a.75.75 0 01.913-.143z" clip-rule="evenodd" />
                                                    </svg>
                                                    HEADLINE 
                                                </button>
                                            </div>
                                        </div>
                                        <div class="pb-5 px-6">
                                            <h3 class="mb-3 text-xl font-medium text-black">
                                                Privat Mahasiswa
                                            </h3>
                                            <p class="lg:text-lg text-sm font-normal text-text mb-6">Les Privat Mahasiswa terpercaya untuk berbagai jurusan. Kami bisa membantu kamu untuk mengatasi berbagai masalah perkuliahan.</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="rounded-xl lg:w-[300px] w-[255px] h-[455px] bg-white shadow-sm mr-6 mb-8">
                                    <div class="w-full mr-6">
                                        <div class="h-full w-full rounded-xl object-cover overflow-hidden relative">
                                            <img src="img/privat-cpns.png" alt="" class="w-full h-[210px] object-cover">
                                            <div class="pt-8 pl-7">
                                                <button class="bg-primary rounded-lg px-3 py-2 text-white text-sm font-semibold self-center absolute top-6 z-20 flex flex-wrap">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-white">
                                                        <path fill-rule="evenodd" d="M14.615 1.595a.75.75 0 01.359.852L12.982 9.75h7.268a.75.75 0 01.548 1.262l-10.5 11.25a.75.75 0 01-1.272-.71l1.992-7.302H3.75a.75.75 0 01-.548-1.262l10.5-11.25a.75.75 0 01.913-.143z" clip-rule="evenodd" />
                                                    </svg>
                                                    HEADLINE 
                                                </button>
                                            </div>
                                        </div>
                                        <div class="pb-5 px-6">
                                            <h3 class="mb-3 text-xl font-medium text-black">
                                                Privat CPNS
                                            </h3>
                                            <p class="lg:text-lg text-sm font-normal text-text mb-6">Program Privat untuk persiapan seleksi CPNS, membantu memahami materi dan soal soal tes CPNS</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="rounded-xl lg:w-[300px] w-[255px] h-[455px] bg-white shadow-sm mr-6 mb-8">
                                    <div class="w-full mr-6">
                                        <div class="h-full w-full rounded-xl object-cover overflow-hidden relative">
                                            <img src="img/privat-umum.png" alt="" class="w-full h-[210px] object-cover">
                                            <div class="pt-8 pl-7">
                                                <button class="bg-primary rounded-lg px-3 py-2 text-white text-sm font-semibold self-center absolute top-6 z-20 flex flex-wrap">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-white">
                                                        <path fill-rule="evenodd" d="M14.615 1.595a.75.75 0 01.359.852L12.982 9.75h7.268a.75.75 0 01.548 1.262l-10.5 11.25a.75.75 0 01-1.272-.71l1.992-7.302H3.75a.75.75 0 01-.548-1.262l10.5-11.25a.75.75 0 01.913-.143z" clip-rule="evenodd" />
                                                    </svg>
                                                    HEADLINE 
                                                </button>
                                            </div>
                                        </div>
                                        <div class="pb-5 px-6">
                                            <h3 class="mb-3 text-xl font-medium text-black">
                                                Privat Umum
                                            </h3>
                                            <p class="lg:text-lg text-sm font-normal text-text mb-6">Les Privat untuk berbagai macam bidang sesuai dengan kebutuhan kamu.</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="rounded-xl lg:w-[300px] w-[255px] h-[455px] bg-white shadow-sm mr-6 mb-8">
                                    <div class="w-full mr-6">
                                        <div class="h-full w-full rounded-xl object-cover overflow-hidden relative">
                                            <img src="img/intensif.png" alt="" class="w-full h-[210px] object-cover">
                                            <div class="pt-8 pl-7">
                                                <button class="bg-primary rounded-lg px-3 py-2 text-white text-sm font-semibold self-center absolute top-6 z-20 flex flex-wrap">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-white">
                                                        <path fill-rule="evenodd" d="M14.615 1.595a.75.75 0 01.359.852L12.982 9.75h7.268a.75.75 0 01.548 1.262l-10.5 11.25a.75.75 0 01-1.272-.71l1.992-7.302H3.75a.75.75 0 01-.548-1.262l10.5-11.25a.75.75 0 01.913-.143z" clip-rule="evenodd" />
                                                    </svg>
                                                    HEADLINE 
                                                </button>
                                            </div>
                                        </div>
                                        <div class="pb-5 px-6">
                                            <h3 class="mb-3 text-xl font-medium text-black">
                                                Intensif Class 
                                            </h3>
                                            <p class="lg:text-lg text-sm font-normal text-text mb-6">Belajar Intensif selama 30 hari dengan guru terbaik untuk persiapan UTBK.</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="rounded-xl lg:w-[300px] w-[255px] h-[455px] bg-white shadow-sm mr-6 mb-8">
                                    <div class="w-full mr-6">
                                        <div class="h-full w-full rounded-xl object-cover overflow-hidden relative">
                                            <img src="img/exclusif.png" alt="" class="w-full h-[210px] object-cover">
                                            <div class="pt-8 pl-7">
                                                <button class="bg-primary rounded-lg px-3 py-2 text-white text-sm font-semibold self-center absolute top-6 z-20 flex flex-wrap">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-white">
                                                        <path fill-rule="evenodd" d="M14.615 1.595a.75.75 0 01.359.852L12.982 9.75h7.268a.75.75 0 01.548 1.262l-10.5 11.25a.75.75 0 01-1.272-.71l1.992-7.302H3.75a.75.75 0 01-.548-1.262l10.5-11.25a.75.75 0 01.913-.143z" clip-rule="evenodd" />
                                                    </svg>
                                                    HEADLINE 
                                                </button>
                                            </div>
                                        </div>
                                        <div class="pb-5 px-6">
                                            <h3 class="mb-3 text-xl font-medium text-black">
                                                Exclusif Class  
                                            </h3>
                                            <p class="lg:text-lg text-sm font-normal text-text mb-6">Belajar bersama dikelas dengan guru terbaik lulusan PTN dan suasana belajar mengajar yang menyenangkan.</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="rounded-xl lg:w-[300px] w-[255px] h-[455px] bg-white shadow-sm mr-6 mb-8">
                                    <div class="w-full mr-6">
                                        <div class="h-full w-full rounded-xl object-cover overflow-hidden relative">
                                            <img src="img/bimbel-online.png" alt="" class="w-full h-[210px] object-cover">
                                            <div class="pt-8 pl-7">
                                                <button class="bg-primary rounded-lg px-3 py-2 text-white text-sm font-semibold self-center absolute top-6 z-20 flex flex-wrap">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-white">
                                                        <path fill-rule="evenodd" d="M14.615 1.595a.75.75 0 01.359.852L12.982 9.75h7.268a.75.75 0 01.548 1.262l-10.5 11.25a.75.75 0 01-1.272-.71l1.992-7.302H3.75a.75.75 0 01-.548-1.262l10.5-11.25a.75.75 0 01.913-.143z" clip-rule="evenodd" />
                                                    </svg>
                                                    HEADLINE 
                                                </button>
                                            </div>
                                        </div>
                                        <div class="pb-5 px-6">
                                            <h3 class="mb-3 text-xl font-medium text-black">
                                                Bimbel Online
                                            </h3>
                                            <p class="lg:text-lg text-sm font-normal text-text mb-6">Belajar lebih fleksibel dengan bimbel online karena bisa belajar darimana saja.</p>
                                        </div>
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
                <div class="w-full px-4 lg:mb-10 lg:w-1/2">
                    <h4 class="font-bold uppercase text-primary text-lg">Tutor</h4>
                    <h2 class="font-bold text-dark lg:text-5xl text-xl lg:mb-5 mb-2 max-w-sm">Rekomendasi Tutor Terbaik</h2>
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
                                <button type="submit" class="text-base font-normal text-white h-[48px] w-[66px] bg-primary rounded-lg">Cari</button>
                            </div>
                        </form>
                        
                            
                </div>
                
            </div>
            

            <div class="flex flex-wrap">
                {{-- menampilkan data tutor (yang sudah micro teaching) --}}
                @isset ($guru)
                    @foreach ($guru as $row)
                    <div class="w-full px-4 mb-10 lg:w-1/4">
                        <div class="bg-white card rounded-2xl overflow-hidden relative group w-[253px] h-[348px]">
                        @if ($row->top_star)
                            <div class="px-4 py-2 bg-primary rounded-md absolute top-0 right-0 z-10 mr-2 mt-2">
                                <span class="text-xs text-white font-medium">Top Star</span>
                            </div> 
                        @endif
                         <div class="h-[348px] transition-all transform bg-cover bg-top" style="background-image: url({{ asset('storage/'. $row->foto) }});">
                             <div class="bg-primaryYellow h-[98px] rounded-2xl absolute inset-x-0 bottom-0 text-center">
                                 <h1 class="text-xl font-medium text-black mb-2">{{ $row->nama }}</h1>
                                 <h5 class="text-lg font-normal text-black mb-0">{{ $row->minat_mengajar->first()->mata_pelajaran->mata_pelajaran ?? "Mata pelajaran" }} - {{ $row->kabupaten ? ucwords(strtolower($row->kabupaten)) : "Domisili" }}</h5>
                                 <h5 class="text-lg font-normal text-black mb-3">{{ $row->asal_ptn }}</h5>
                             </div>
                         </div>
                         <div class="absolute bottom-0 left-0 w-full"></div>
                         <div class="absolute z-0 inset-0 bg-primaryYellow opacity-0 group-hover:z-20 group-hover:opacity-100 transition-all"></div>
                         <div class="group-hover:-translate-y-3 group-hover:bottom-0 transition-all group-hover:z-20 absolute button-0 left-0 text-black p-4 justify-center content-center">
                             <h4 class="font-medium mb-1 text-xl text-center opacity-80">Angelina</h4>
                             <h3 class="font-normal mb-0 text-lg text-center">{{ $row->minat_mengajar->first()->mata_pelajaran->mata_pelajaran ?? "" }} - {{ $row->kabupaten ? ucwords(strtolower($row->kabupaten)) : "Domisili" }}</h3>
                             <h3 class="font-normal mb-3 text-lg text-center">{{ $row->asal_ptn }}</h3>
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
                <div class="w-full px-4 lg:mb-10 lg:w-1/2">
                    <h2 class="font-semibold text-black lg:text-5xl text-2xl lg:mb-14 mb-2">Apa Kata Mereka Tentang Radian</h2>
                </div>
                <div class="w-full px-4 lg:mb-10 mb-4 lg:w-1/2">
                    <p class="font-normal text-body text-lg lg:mb-14 mb-4 max-w-md mx-auto flex">Radian telah memberikan banyak impect untuk membantu para pelajar agar mencapai target dan tujuannya.</p>
                </div>
                
            </div>

            <div class="flex">
                <div id="slidercarousel" class="w-full overflow-hidden">
                    <ul id="slids" class="flex w-full">
                        <li class="mr-4">
                            <div class="group bg-white border border-body h-auto w-[350px] lg:w-full rounded-2xl mb-10 mt-7 hover:bg-primary group-hover:text-white hover:border-dark">
                                <div class="flex items-center justify-center mt-8">
                                    <div class="rounded-full w-12 h-12 bg-slate-200 flex justify-center items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                          </svg>
                                    </div>
                                </div>
                                <div class="py-4 px-6">
                                    <h3 class="mb-1 font-normal text-xl text-black text-center">Prana</h3>
                                    <h4 class="mb-6 font-normal text-lg text-body text-center group-hover:text-white">UI - FK</h4>
                                    <p class="mb-2 font-normal text-lg text-body text-center group-hover:text-white">"Saya sangat bersyukur telah bergabung dengan Radian karena berhasil masuk ke fakultas kedokteran impian saya. Materi yang sulit menjadi lebih mudah dipahami karena cara ngajar yang sistematis dan jelas dari para pengajar yang profesional.”</p>
                                </div>
                            </div>
                        </li>

                        <li class="mr-4">
                            <div class="group bg-white border border-body rounded-2xl h-auto w-[350px] lg:w-full mb-10 mt-7 mr-4 hover:bg-primary group-hover:text-white hover:border-dark">
                                <div class="flex items-center justify-center mt-8">
                                    <div class="rounded-full w-12 h-12 bg-slate-200 flex justify-center items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="py-4 px-6">
                                    <h3 class=" mb-1 font-normal text-xl text-black text-center">Adelia</h3>
                                    <h4 class="mb-6 font-normal text-lg text-body text-center group-hover:text-white">IUP UGM - FKG</h4>
                                    <p class="mb-9 font-normal text-lg text-body text-center group-hover:text-white">“Radian sangat membantu saya meningkatkan nilai disekolah. Saya sangat senang dengan system belajar mengajar disini. Terimakasih Radian sudah membantu saya masuk ke PTN yang saya impikan.”</p>
                                </div> 
                            </div>
                        </li>

                        <li class="mr-4">
                            <div class="group bg-white border border-body rounded-2xl h-auto w-[350px] lg:w-full mb-10 mt-7 mr-4 hover:bg-primary group-hover:text-white hover:border-dark">
                                <div class="flex items-center justify-center mt-8">
                                    <div class="rounded-full w-12 h-12 bg-slate-100 flex justify-center items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="py-4 px-6">
                                    <h3 class="mb-1 font-normal text-xl text-black text-center">Mikhi</h3>
                                    <h4 class="mb-6 font-normal text-lg text-body text-center group-hover:text-white">UI - FKG</h4>
                                    <p class="mb-16 font-normal text-lg text-body text-center group-hover:text-white">"Guru privat disini sangat efektif dalam membantu saya memahami materi pelajaran untuk persiapan ujian. Terimakasih Radian”</p>
                                </div>
                            </div>
                        </li>

                        <li class="mr-4">
                            <div class="group bg-white border border-body rounded-2xl h-auto w-[350px] lg:w-full mb-10 mt-7 mr-4 hover:bg-primary group-hover:text-white hover:border-dark">
                                <div class="flex items-center justify-center mt-8">
                                    <div class="rounded-full w-12 h-12 bg-slate-100 flex justify-center items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="py-4 px-6">
                                    <h3 class="mb-1 font-normal text-xl text-black text-center">Ajriya</h3>
                                    <h4 class="mb-6 font-normal text-lg text-body text-center group-hover:text-white">UI - Teknik Komputer</h4>
                                    <p class="mb-16 font-normal text-lg text-body text-center group-hover:text-white">"Guru-guru di Radian memberikan saya harapan dan dukungan besar. Saya mendapatkan banyak strategi dan tips dalam menghadapi ujian UTBK.”</p>
                                </div>
                            </div>
                        </li>

                        <li class="mr-4">
                            <div class="group bg-white border border-body rounded-2xl h-auto w-[350px] lg:w-full mb-10 mt-7 mr-4 hover:bg-primary group-hover:text-white hover:border-dark">
                                <div class="flex items-center justify-center mt-8">
                                    <div class="rounded-full w-12 h-12 bg-slate-100 flex justify-center items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="py-4 px-6">
                                    <h3 class="mb-1 font-normal text-xl text-black text-center">Raisa</h3>
                                    <h4 class="mb-6 font-normal text-lg text-body text-center group-hover:text-white">UNPAD - Psikolog</h4>
                                    <p class="mb-16 font-normal text-lg text-body text-center group-hover:text-white">"Radian sangat membantu saya dalam mempersiapkan diri untuk ujian masuk kampus impian saya. Terimakasih Radian sudah membantu saya masuk Universitas Brawijaya”</p>
                                </div>
                            </div>
                        </li>

                        <li class="mr-4">
                            <div class="group bg-white border border-body rounded-2xl h-auto w-[350px] lg:w-full mb-10 mt-7 mr-4 hover:bg-primary group-hover:text-white hover:border-dark">
                                <div class="flex items-center justify-center mt-8">
                                    <div class="rounded-full w-12 h-12 bg-slate-100 flex justify-center items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="py-4 px-6">
                                    <h3 class="mb-1 font-normal text-xl text-black text-center">Omar</h3>
                                    <h4 class="mb-6 font-normal text-lg text-body text-center group-hover:text-white">UGM - computer science</h4>
                                    <p class="mb-16 font-normal text-lg text-body text-center group-hover:text-white">“Belajar di Radian benar-benar membantu saya dalam memahami soal-soal UTBK. Latihan soalnya banyak sehingga saya dapat berlatih untuk mengerjakan berbagai macam soal”</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="flex">
                <div class="w-full text-center">
                    <button onclick="after()" class="p-3 rounded-full bg-slate-100 border border-gray-100 shadow-lg mr-5">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-primary">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                          </svg>                              
                    </button>

                    <button onclick="before()" class="p-3 rounded-full bg-slate-100 border border-gray-100 shadow-lg mr-5">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-primary">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                          </svg>                              
                    </button>
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
                    <h5 class="text-lg font-semibold text-primary md:text-lg lg:mb-2 mb-0 pt-10">GALLERY</h5>
                    <h1 class="lg:text-5xl text-2xl text-dark font-semibold lg:mb-4 mb-2 max-w-xs">Gallery Radian Edu</h1>
                    <p class="text-lg font-normal text-body lg:mb-0 mb-4 max-w-xs">Sebuah perjalanan Radian untuk menghantarkan para teman-teman dalam menggapai mimpinya.</p>
                </div>

                <div class="w-full self-center px-4 lg:w-1/2">
                    <div class="h-96 grid grid-cols-2 gap-2 bg-slate-100 overflow-y-scroll">
                        <img src="img/utama-2.png" alt="" class="w-full h-full">
                        <img src="img/utama-1.png" alt="" class="w-full h-full">
                        <img src="img/utama-4.png" alt="" class="w-full h-full">
                        <img src="img/utama-3.png" alt="" class="w-full h-full">
                        <img src="img/utama-6.png" alt="" class="w-full h-full">
                        <img src="img/utama-5.png" alt="" class="w-full h-full">
                        <img src="img/utama-8.png" alt="" class="w-full h-full">
                        <img src="img/utama-7.png" alt="" class="w-full h-full">
                        <img src="img/utama-10.png" alt="" class="w-full h-full">
                        <img src="img/utama-9.png" alt="" class="w-full h-full">
                        <img src="img/utama-12.png" alt="" class="w-full h-full">
                        <img src="img/utama-11.png" alt="" class="w-full h-full">
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

    {{-- ujicoba teacher section start --}}
    <section id="teacher" class="pb-20">
        <div class="container">
            <div class="mx-auto overflow-hidden bg-section rounded-[40px] lg:pl-8">
                <div class="2xl:pl-24">
                    <div class="grid items-center grid-cols-1 gap-y-12 lg:grid-cols-2 lg:gap-x-8 2xl:gap-x-20">
                        <div class="sm:pl-6 pl-4 lg:mt-0 mt-10">
                            <h2 class="text-2xl font-semibold leading-tight text-primary sm:text-4xl lg:text-5xl lg:leading-tight">Siap Untuk Memulai Perjalanan Belajarmu?</h2>
                            <p class="mt-4 text-base text-black mb-6">Jangan tunda lagi, daftar sekarang dan raih kesuksesanmu bersama Radian Edu Solution!</p>
                            <button class="text-base font-semibold border border-black bg-primary px-4 py-2 text-center text-white rounded-lg lg:mb-16 mb-5" href="#">Siap Untuk Belajar >></button>
                        </div>
        
                        <div class="relative p-0 bottom-0 self-end right-0">
                            <img class="w-full h-full" src="img/cta-siswa.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- ujicoba teacher section end --}}

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

    <script src="{{asset('/js/script.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    @endsection
    

