@extends('arealayanan.layout.template')
@section('content')

 <!-- navbar section start -->
<div class="w-full text-gray-700 bg-white dark-mode:text-gray-200 dark-mode:bg-gray-800">
        <div x-data="{ open: false }" class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
            <div class="flex flex-row items-center justify-between p-4">
                <a href="#">
                    <img src="img/logo.png" alt="">
                </a>
                <button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
                    <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                        <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                        <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <nav :class="{'flex': open, 'hidden': !open}" class="flex-col flex-grow hidden pb-4 md:pb-0 md:flex md:justify-end md:flex-row">
                <a class="px-4 py-2 mt-2 text-sm font-semibold md:mt-0 md:ml-4 hover:text-surabaya text-body focus:outline-none focus:shadow-outline" href="{{ route('home') }}">Home</a>
                <a class="px-4 py-2 mt-2 text-sm font-semibold md:mt-0 md:ml-4 hover:text-surabaya text-body focus:outline-none focus:shadow-outline" href="#alumni">Alumni</a>
                <a class="px-4 py-2 mt-2 text-sm font-semibold md:mt-0 md:ml-4 hover:text-surabaya text-body focus:outline-none focus:shadow-outline" href="#testi">Testimoni</a>
                <a class="px-4 py-2 mt-2 text-sm font-semibold md:mt-0 md:ml-4 hover:text-surabaya text-body focus:outline-none focus:shadow-outline" href="#unggul">Keunggulan</a>
                <a class="px-4 py-2 mt-2 text-sm font-semibold md:mt-0 md:ml-4 hover:text-surabaya text-body focus:outline-none focus:shadow-outline" href="#program">Program</a>
                <a class="px-4 py-2 mt-2 text-sm font-semibold md:mt-0 md:ml-4 hover:text-surabaya text-body focus:outline-none focus:shadow-outline" href="#daftar">Daftar</a>
                <a class="px-4 py-2 mt-2 text-sm font-semibold md:mt-0 md:ml-4 w-[136px] h-[38px] border text-surabaya bg-hero rounded-lg">Hubungi Kami</a>
            </nav>
        </div>
</div>
<!-- navbar section end -->

<!-- hero section start -->
<section id="#" class="pt-16 pb-12">
        <div class="container">
            <div class="lg:pl-9 overflow-hidden bg-herosby rounded-3xl">
                <div class="grid items-center grid-cols-1 gap-y-2 lg:grid-cols-2">
                    <div class="lg:pl-9 px-2 max-w-3xl lg:mt-0 mt-3">
                        <h1 class="lg:text-5xl text-3xl font-semibold text-surabaya mb-6">BEST PARTNER FOR ACCELERATING YOUR GROWTH</h1>
                        <p class="text-base font-normal text-body lg:mb-16 mb-3 max-w-[482px]">Radian siap membantu kamu untuk terus mengembangkan diri dan meraih kesuksesan.</p>
                        <div class="flex px-2">
                            <a href="https://wa.me/+6281779007135?text=Halo%20radian%20%0A%0ANama%20%3A%20%0AAsal%20Kota%20%3A%20%0ASekolah%20dan%20Kelas%20%3A%20%0AOrang%20Tua%20%2F%20Siswa%20%3F%20%3A%0ASaya%20mengetahui%20program%20ini%20melalui%20website%20privatgaransi.radianedu.com%20" class="lg:text-base text-sm font-semibold text-white bg-surabaya rounded-lg py-3 px-2 lg:mt-14 text-center lg:mb-0 mb-2 mr-6 w-[151px] h-[48px]">Mulai Belajar</a>
                            <a href="https://wa.me/+6281779007135?text=Halo%20radian%20%0A%0ANama%20%3A%20%0AAsal%20Kota%20%3A%20%0ASekolah%20dan%20Kelas%20%3A%20%0AOrang%20Tua%20%2F%20Siswa%20%3F%20%3A%0ASaya%20mengetahui%20program%20ini%20melalui%20website%20privatgaransi.radianedu.com%20" class="lg:text-base text-sm font-semibold text-surabaya border border-surabaya py-3 px-2 rounded-lg lg:mt-14 text-center w-[151px] h-[48px]">Hubungi Kami</a>
                        </div>
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
<section id="alumni" class="pt-16 pb-12">
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
                    <div class="flex px-2">
                        <a href="#program" class="lg:text-base text-sm font-semibold text-white bg-surabaya rounded-lg py-3 px-2 lg:mt-14 text-center lg:mb-0 mb-2 mr-6 w-[151px] h-[48px]">Pilih Program</a>
                        <a href="#testi" class="lg:text-base text-sm font-semibold text-body py-3 px-2 lg:mt-14 text-center">View More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- alumni section end -->

<!-- testimoni section start -->
<section id="testi" class="pt-16">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full px-2 lg:w-1/3">
                    <h1 class="text-5xl font-semibold text-black mb-16">Apa Kata Mereka Tentang Radian</h1>
                </div>
                <div class="w-full px-2 lg:w-1/3">
                    <p class="text-lg font-normal text-body mb-16"></p>
                </div>
                <div class="w-full px-2 lg:w-1/3">
                    <div class="w-full text-right">
                        <button onclick="after()" class="p-3 rounded-full bg-slate-100 border border-gray-100 shadow-lg mr-5">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-surabaya">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                              </svg>                              
                        </button>

                        <button onclick="before()" class="p-3 rounded-full bg-slate-100 border border-gray-100 shadow-lg mr-5">
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
                            <div class="bg-white border border-body rounded-2xl mb-10">
                                <div class="flex items-center justify-center h-auto mt-7">
                                    <div class="rounded-full w-12 h-12 bg-slate-200 flex justify-center items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                          </svg>
                                    </div>
                            </div>
                            <div class="py-8 px-6">
                                <h3 class="mb-1 font-normal text-xl text-black text-center">Mikail</h3>
                                <h4 class="mb-6 font-normal text-lg text-body text-center">ITS - Teknik Fisika </h4>
                                <p class="mb-9 font-normal text-lg text-body text-center">"Les di Radian benar-benar membantu saya dalam persiapan ujian masuk perguruan tinggi negeri. Gurunya sangat terampil dan sabar dalam menjelaskan materi ujian”</p>
                            </div>
                        </div>
                        </li>

                        <li class="mr-3">
                            <div class="bg-white border border-body rounded-2xl mb-10">
                                <div class="flex items-center justify-center h-auto mt-7">
                                    <div class="rounded-full w-12 h-12 bg-slate-200 flex justify-center items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="py-8 px-6">
                                    <h3 class=" mb-1 font-normal text-xl text-black text-center">Kevin</h3>
                                    <h4 class="mb-6 font-normal text-lg text-body text-center">IUP UNAIR - Kedokteran</h4>
                                    <p class="mb-9 font-normal text-lg text-body text-center">"Radian memberikan simulasi ujian yang sangat mirip dengan ujian sesungguhnya dan juga membantu saya dalam meningkatkan kemampuan akedemik.”</p>
                                </div> 
                            </div>
                        </li>

                        <li class="mr-3">
                            <div class="bg-white border border-body rounded-2xl mb-10">
                                <div class="flex items-center justify-center h-auto mt-7">
                                    <div class="rounded-full w-12 h-12 bg-slate-100 flex justify-center items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="py-8 px-6">
                                    <h3 class="mb-1 font-normal text-xl text-black text-center">Shaquille</h3>
                                    <h4 class="mb-6 font-normal text-lg text-body text-center">IUP ITS - Statistika</h4>
                                    <p class="mb-9 font-normal text-lg text-body text-center">‘‘Nowadays, it isn’t great uncommon to see lenders rapidly adopting a new digital lending strategy to make most  popular streamline the web process’’</p>
                                </div>
                            </div>
                        </li>

                        <li class="mr-3">
                            <div class="bg-white border border-body rounded-2xl mb-10">
                                <div class="flex items-center justify-center h-auto mt-7">
                                    <div class="rounded-full w-12 h-12 bg-slate-100 flex justify-center items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="py-8 px-6">
                                    <h3 class="mb-1 font-normal text-xl text-black text-center">Haykal</h3>
                                    <h4 class="mb-6 font-normal text-lg text-body text-center">ITS - Teknik Perkapalan</h4>
                                    <p class="mb-9 font-normal text-lg text-body text-center">Terimakasih Radian atas bimbingannya selama persiapan ujian UTBK. Guru-gurunya sangat profesional dan latihan soalnya juga setingkat UTBK”</p>
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
<section id="unggul" class="pt-16 pb-12">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="wfull px-4 lg:w-1/2">
                    <h1 class="text-4xl font-semibold text-black mb-6">Kenapa Harus Di Radian?</h1>
                    <p class="text-lg font-normal text-body mb-14">"Radian memberikan layanan pelanggan yang baik, dengan mengutamakan kepuasan pelanggan dan memastikan siswa mendapatkan pengalaman pembelajaran terbaik."</p>
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
<section id="program" class="pt-16 pb-12 bg-slate-100">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full self-center pl-4 pr-14 lg:w-1/2">
                    <h5 class="text-lg font-semibold text-surabaya mb-2">PROGRAM</h5>
                    <h1 class="lg:text-5xl text-3xl font-semibold text-black mb-4 max-w-[355px]">Program Radian Edu</h1>
                    <p class="text-lg font-normal text-body max-w-[321px] lg:mb-0 mb-3">Ayo pilih program terbaik sesuai dengan kebutuhanmu. </p>
                </div>
                <div class="w-full px-4 lg:w-1/2">
                    <div class="w-full overflow-hidden grid grid-cols-1 bg-slate-100 overflow-x-scroll gap-1">
                        <ul class="flex">
                            <li>
                                <div class="bg-white rounded-3xl shadow-lg mb-10 w-[255px] h-[420px] mr-6">
                                    <div class="h-[210px]" style="background-image: url(img/program1.png);">
                                        <div class="pt-8 pl-7">
                                            <button class="bg-surabaya rounded-lg shadow-md px-3 py-2 text-white text-sm font-semibold self-center flex flex-wrap">
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
                                            <button class="bg-surabaya rounded-lg shadow-md px-3 py-2 text-white text-sm font-semibold self-center flex flex-wrap">
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
                                            <button class="bg-surabaya rounded-lg shadow-md px-3 py-2 text-white text-sm font-semibold self-center flex flex-wrap">
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
                                            <button class="bg-surabaya rounded-lg shadow-md px-3 py-2 text-white text-sm font-semibold self-center flex flex-wrap">
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
<section id="daftar" class="pt-16 lg:pb-16 mb-40">
        <div class="container">
            <div class="bg-ctaarea lg:w-[1240px] lg:h-[435px] w-[280px] h-[335px] rounded-b-lg rounded-tl-3xl rounded-tr-lg relative mx-auto self-center">
                <div class="flex">
                        <img src="img/shape-left.png" alt="" class="left-0 w-[273px] h-[435px] hidden sm:block rounded-tl-3xl rounded-bl-lg">
                        <div class="absolute -top-10 -right-10 flex">
                            <img src="img/icon-love.png" alt="" class="w-[100px] h-[100px]">
                        </div>
                        
                    
                    <div class="flex flex-wrap mx-auto self-center text-center">
                        <div class="w-full">
                            <h5 class="text-base font-semibold text-surabaya lg:mb-6 mb-2 lg:mt-0 mt-4">New User</h5>
                            <h1 class="lg:text-4xl text-xl font-semibold text-black mb-3 lg:max-w-2xl">Tunggu apalagi segera dapatkan Diskon Up To 30% sampai Tanggal 30 September 2022</h1>
                            <p class="text-base font-normal text-body mb-8">Syarat dan Ketentuan berlaku</p>
                            <a href="#" class="text-base font-semibold text-black bg-surabaya px-4 py-3 rounded-lg lg:mb-16 mb-3">Daftar Segera</a>
                        </div>
                    </div>
                        <img src="img/shape-rigth.png" alt="" class="justify-end items-end text-right right-0 w-[263px] h-[435px] hidden sm:block rounded-tr-lg rounded-bl-lg">
                        
                        <div class="absolute lg:-bottom-20 -bottom-32 flex">
                            <img src="img/chat.png" alt="" class="lg:w-[250px] lg:h-[192] w-[219px] h-[157px]">
                        </div>
                    
                </div>
               
            </div>
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