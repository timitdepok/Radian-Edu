@extends('news.layout.template')
@section('content')

 <!-- navbar section start -->
 <header>
    <!-- navbar 1 section -->
    <div class="bg-transparent top-0 left-0 w-full flex items-center z-10">
            <div class="px-4 mb-4 flex pt-4">
                <img src="img/logo-radian 1.png" alt="" class="mx-4 lg:ml-[148px] my-2 h-[36px]">
            </div>
            <div class="lg:px-4 flex py-4">
                <span class="lg:text-base text-xs font-medium border border-secondary bg-secondary px-4 py-2 pt-2 self-center text-center text-dark rounded-lg ml-7 mb-3 lg:mb-0"><a href="daftarguru.html">Temukan Guru</a></span>
                <span class="lg:text-base text-xs font-medium border border-secondary bg-secondary lg:px-4 py-2 text-center text-dark rounded-lg ml-4 mr-2 lg:mr-0 mb-3 lg:mb-0"><a href="registrasi.html">Daftar Sebagai Guru</a></span>
            </div>
            
    </div>
    <!-- navbar 1 section end -->
        <!-- navbar 2 section start -->
            <div class="w-full text-white bg-primary">
                <div x-data="{ open: false }" class="flex flex-col max-w-screen-[1340px] pl-2 mr-0 md:items-center md:justify-between md:flex-row md:pl-6 lg:pl-8">
                    <div class="flex flex-row items-center justify-between pl-4 py-4">
                        <button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
                            <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                                <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                                <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
            <nav :class="{'flex': open, 'hidden': !open}" class="flex-col flex-grow hidden pb-4 md:pb-0 md:flex md:justify-end md:flex-row lg:self-center">
                <a class="px-4 py-4 text-sm font-semibold text-white border-b border-white md:mt-0 hover:text-gray-900 focus:text-gray-900 focus:outline-none lg:mr-10 lg:self-center" href="/">Home</a>
                <div @click.away="open = false" class="relative lg:self-center" x-data="{ open: false }">
                    <button @click="open = !open" class="flex flex-row items-center w-full px-4 py-4 lg:my-4 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg md:w-auto md:inline md:ml-4 hover:text-gray-900 focus:text-gray-900 focus:outline-none focus:shadow-outline lg:mr-10 lg:self-center">
                        <span>Produk</span>
                        <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1 lg:self-center"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                    <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48 z-30">
                        <div class="px-4 py-2 bg-white rounded-md shadow dark-mode:bg-gray-700">
                            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg text-black md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="{{ url('/supercamp') }}">Supercamp</a>
                            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg text-black md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="{{ url('/privat') }}">Les Privat</a>
                            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg text-black md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="{{ url('/cpns') }}">Privat CPNS</a>
                            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg text-black md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="{{ url('/privat') }}">Privat Garansi</a>
                            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg text-black md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="{{ url('/supercampkedokteran') }}">Kedokteran</a>
                        </div>
                    </div>
                </div>

                <div @click.away="open = false" class="relative" x-data="{ open: false }">
                    <button @click="open = !open" class="flex flex-row items-center w-full px-4 py-4 lg:my-4 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg md:w-auto md:inline md:ml-4 hover:text-gray-900 focus:text-gray-900 focus:outline-none focus:shadow-outline lg:mr-10 lg:self-center">
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
                    <button @click="open = !open" class="flex flex-row items-center w-full px-4 py-4 lg:my-4 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg md:w-auto md:inline md:ml-4 hover:text-gray-900 focus:text-gray-900 focus:outline-none focus:shadow-outline lg:mr-10 lg:self-center">
                        <span>Tingkatan</span>
                        <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                    <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full md:max-w-screen-sm md:w-screen mt-2 origin-top-right z-30">
                        <div class="px-4 py-2 pb-4 bg-white rounded-md shadow-lg dark-mode:bg-gray-700">
                          <div class="grid grid-cols-1 gap-4">
                            <a class="flex flex-row items-start rounded-lg bg-transparent p-2 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/sd">
                              <div class="bg-red-200 text-white rounded-lg p-3">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-sd">
                                    <path d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z" />
                                </svg>
                                  
                              </div>
                              <div class="ml-3">
                                <p class="text-base font-bold text-black">Sekolah Dasar</p>
                                <p class="text-base font-normal text-body">Program bimbingan belajar dan les privat untuk jenjang SD. </p>
                              </div>
                            </a>

                            <a class="flex flex-row items-start rounded-lg bg-transparent p-2 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/smp">
                              <div class="bg-green-200 text-white rounded-lg p-3">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-primary">
                                    <path fill-rule="evenodd" d="M14.615 1.595a.75.75 0 01.359.852L12.982 9.75h7.268a.75.75 0 01.548 1.262l-10.5 11.25a.75.75 0 01-1.272-.71l1.992-7.302H3.75a.75.75 0 01-.548-1.262l10.5-11.25a.75.75 0 01.913-.143z" clip-rule="evenodd" />
                                </svg>
                              </div>
                              <div class="ml-3">
                                <p class="text-base font-bold text-black">Sekolah Menengah Pertama</p>
                                <p class="text-base font-normal text-body">Program bimbingan belajar dan les privat untuk jenjang SMP. </p>
                              </div>
                            </a>

                            <a class="flex flex-row items-start rounded-lg bg-transparent p-2 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/sma">
                              <div class="bg-slate-300 text-white rounded-lg p-3">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-dark">
                                    <path fill-rule="evenodd" d="M12.963 2.286a.75.75 0 00-1.071-.136 9.742 9.742 0 00-3.539 6.177A7.547 7.547 0 016.648 6.61a.75.75 0 00-1.152-.082A9 9 0 1015.68 4.534a7.46 7.46 0 01-2.717-2.248zM15.75 14.25a3.75 3.75 0 11-7.313-1.172c.628.465 1.35.81 2.133 1a5.99 5.99 0 011.925-3.545 3.75 3.75 0 013.255 3.717z" clip-rule="evenodd" />
                                </svg>
                              </div>
                              <div class="ml-3">
                                <p class="text-base font-bold text-black">Sekolah Menengah Atas</p>
                                <p class="text-base font-normal text-body">Program bimbingan belajar dan les privat untuk jenjang SMA. </p>
                              </div>
                            </a>

                            <a class="flex flex-row items-start rounded-lg bg-transparent p-2 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="sma.html">
                                <div class="bg-slate-300 text-white rounded-lg p-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-mhs">
                                        <path d="M11.584 2.376a.75.75 0 01.832 0l9 6a.75.75 0 11-.832 1.248L12 3.901 3.416 9.624a.75.75 0 01-.832-1.248l9-6z" />
                                        <path fill-rule="evenodd" d="M20.25 10.332v9.918H21a.75.75 0 010 1.5H3a.75.75 0 010-1.5h.75v-9.918a.75.75 0 01.634-.74A49.109 49.109 0 0112 9c2.59 0 5.134.202 7.616.592a.75.75 0 01.634.74zm-7.5 2.418a.75.75 0 00-1.5 0v6.75a.75.75 0 001.5 0v-6.75zm3-.75a.75.75 0 01.75.75v6.75a.75.75 0 01-1.5 0v-6.75a.75.75 0 01.75-.75zM9 12.75a.75.75 0 00-1.5 0v6.75a.75.75 0 001.5 0v-6.75z" clip-rule="evenodd" />
                                        <path d="M12 7.875a1.125 1.125 0 100-2.25 1.125 1.125 0 000 2.25z" />
                                      </svg>
                                      
                                </div>
                                <div class="ml-3">
                                  <p class="text-base font-bold text-black">Mahasiswa</p>
                                  <p class="text-base font-normal text-body">Program bimbingan belajar dan les privat untuk jenjang Mahasiswa. </p>
                                </div>
                              </a>
                          </div>
                        </div>
                    </div>
                </div> 
                
                <a class="px-4 py-4 mt-2 text-sm font-semibold text-white md:mt-0 hover:text-gray-900 focus:text-gray-900 focus:outline-none lg:mr-10 lg:self-center" href="#testi">Testimoni</a>
                <a class="px-4 py-4 mt-2 text-sm font-semibold text-white md:mt-0 hover:text-gray-900 focus:text-gray-900 focus:outline-none lg:mr-16 lg:self-center" href="/news">News</a>
                    <a class="text-white text-sm font-semibold hover:text-gray-900 focus:text-gray-900 focus:outline-none px-4 py-4 lg:mr-3 lg:ml-44 lg:self-center lg:text-right lg:right-0" href="/registrasi">Daftar</a>
                    <a class="text-white font-semibold text-sm border border-white lg:px-4 lg:py-2 py-2 lg:mt-5 mt-2 text-center rounded-lg justify-items-end w-[94px] h-[40px] lg:mr-3 lg:right-0" href="/login">Masuk</a>
               
            </nav>
        </div>
    </div>
    <!-- navbar 2 section end -->
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