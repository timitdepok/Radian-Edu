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
                <a class="px-4 py-2 mt-2 text-sm font-semibold md:mt-0 md:ml-4 hover:text-bandung text-body focus:outline-none focus:shadow-outline" href="{{ route('home') }}">Home</a>
                <a class="px-4 py-2 mt-2 text-sm font-semibold md:mt-0 md:ml-4 hover:text-bandung text-body focus:outline-none focus:shadow-outline" href="#alumni">Alumni</a>
                <a class="px-4 py-2 mt-2 text-sm font-semibold md:mt-0 md:ml-4 hover:text-bandung text-body focus:outline-none focus:shadow-outline" href="#testi">Testimoni</a>
                <a class="px-4 py-2 mt-2 text-sm font-semibold md:mt-0 md:ml-4 hover:text-bandung text-body focus:outline-none focus:shadow-outline" href="#unggul">Keunggulan</a>
                <a class="px-4 py-2 mt-2 text-sm font-semibold md:mt-0 md:ml-4 hover:text-bandung text-body focus:outline-none focus:shadow-outline" href="#program">Program</a>
                <a class="px-4 py-2 mt-2 text-sm font-semibold md:mt-0 md:ml-4 hover:text-bandung text-body focus:outline-none focus:shadow-outline" href="#daftar">Daftar</a>
                <a class="px-4 py-2 mt-2 text-sm font-semibold md:mt-0 md:ml-4 w-[136px] h-[38px] border text-bandung bg-hero rounded-lg">Hubungi Kami</a>
            </nav>
        </div>
</div>
<!-- navbar section end -->

<!-- hero section start -->
<section id="#" class="pt-16 pb-12">
        <div class="container">
            <div class="lg:pl-9 overflow-hidden bg-hero rounded-3xl">
                <div class="grid items-center grid-cols-1 gap-y-2 lg:grid-cols-2">
                    <div class="lg:pl-9 px-2 max-w-3xl lg:mt-0 mt-3">
                        <h1 class="lg:text-5xl text-2xl font-semibold text-bandung mb-6">BEST PARTNER FOR ACCELERATING YOUR GROWTH</h1>
                        <p class="text-base font-normal text-body lg:mb-16 mb-3 max-w-[482px]">Radian siap membantu kamu untuk terus mengembangkan diri dan meraih kesuksesan.</p>
                        <div class="flex px-2">
                            <a href="https://wa.me/+6281779007135?text=Halo%20radian%20%0A%0ANama%20%3A%20%0AAsal%20Kota%20%3A%20%0ASekolah%20dan%20Kelas%20%3A%20%0AOrang%20Tua%20%2F%20Siswa%20%3F%20%3A%0ASaya%20mengetahui%20program%20ini%20melalui%20website%20privatgaransi.radianedu.com%20" class="lg:text-base text-sm font-semibold text-white bg-bandung rounded-lg py-3 px-2 lg:mt-14 text-center lg:mb-0 mb-2 mr-6 w-[151px] h-[48px]">Mulai Belajar</a>
                            <a href="https://wa.me/+6281779007135?text=Halo%20radian%20%0A%0ANama%20%3A%20%0AAsal%20Kota%20%3A%20%0ASekolah%20dan%20Kelas%20%3A%20%0AOrang%20Tua%20%2F%20Siswa%20%3F%20%3A%0ASaya%20mengetahui%20program%20ini%20melalui%20website%20privatgaransi.radianedu.com%20" class="lg:text-base text-sm font-semibold text-bandung border border-bandung py-3 px-2 rounded-lg lg:mt-14 text-center w-[151px] h-[48px]">Hubungi Kami</a>
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
                    <h5 class="text-base font-semibold text-bandung mb-1">Alumni Radian</h5>
                    <h1 class="lg:text-4xl text-2xl font-semibold text-black mb-3">Popular Alumni Radian</h1>
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
                            <p class="text-base font-normal text-body mb-10">Berhasil Masuk PTN</p>
                        </div>
                    </div>
                    <div class="flex px-2">
                        <a href="#program" class="lg:text-base text-sm font-semibold text-white bg-bandung rounded-lg py-3 px-2 lg:mt-14 text-center lg:mb-0 mb-2 mr-6 w-[151px] h-[48px]">Pilih Program</a>
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
                                <h3 class="mb-1 font-normal text-xl text-black text-center">Dion</h3>
                                <h4 class="mb-6 font-normal text-lg text-body text-center">ITB - Teknologi Industri</h4>
                                <p class="mb-9 font-normal text-lg text-body text-center">"Les privat di Radian sangat membantu saya dalam mempersiapkan ujian masuk PTN. Saya merasa lebih siap dan percaya diri ketika menghadapi ujian masuk, dan akhirnya berhasil diterima di perguruan tinggi pilihan saya."</p>
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
                                    <h3 class=" mb-1 font-normal text-xl text-black text-center">Raisa</h3>
                                    <h4 class="mb-6 font-normal text-lg text-body text-center">UNPAD - Psikolog</h4>
                                    <p class="mb-9 font-normal text-lg text-body text-center">"Saya sangat senang bisa bergabung dengan Radian karena memiliki guru yang berkualitas dan fasilitas lengkap. Latihan soalnya juga sangat update sehingga membantu saya menghadapi ujian UTBK”</p>
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
                                    <h3 class="mb-1 font-normal text-xl text-black text-center">Nahreza</h3>
                                    <h4 class="mb-6 font-normal text-lg text-body text-center">UNPAD - Humas</h4>
                                    <p class="mb-9 font-normal text-lg text-body text-center">"Saya sangat berterima kasih kepada Radian yang telah membantu saya dalam persiapan ujian masuk perguruan tinggi negeri hingga saya berhasil lolos masuk UNPAD.”</p>
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
                                    <h3 class="mb-1 font-normal text-xl text-black text-center">Ratu</h3>
                                    <h4 class="mb-6 font-normal text-lg text-body text-center">UNPAD - Perpustakaan dan Sains</h4>
                                    <p class="mb-9 font-normal text-lg text-body text-center">Belajar di Radian seru banget, materi pelajarannya mudah di mengerti, latihan soalnya banyak dan update jadi saya terlatih untuk mengerjakan berbagai macam soal UTBK”</p>
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
                                    <h3 class="mb-1 font-normal text-xl text-black text-center">Putri</h3>
                                    <h4 class="mb-6 font-normal text-lg text-body text-center">UNPAD - Akuntansi</h4>
                                    <p class="mb-9 font-normal text-lg text-body text-center">"Guru privat disini sangat efektif dalam membantu saya memahami materi pelajaran untuk persiapan ujian. Terimakasih Radian”</p>
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
                                    <h3 class="mb-1 font-normal text-xl text-black text-center">Ikhsan</h3>
                                    <h4 class="mb-6 font-normal text-lg text-body text-center">UNPAD - HI</h4>
                                    <p class="mb-9 font-normal text-lg text-body text-center">“Radian sangat membantu saya meningkatkan nilai disekolah. Saya sangat senang dengan system belajar mengajar disini. Terimakasih Radian."</p>
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

<!-- keunggulan section start -->
<section id="unggul" class="pt-16 pb-12">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full px-4 lg:w-1/2">
                    <h1 class="lg:text-4xl text-2xl font-semibold text-black mb-6">Kenapa Harus Di Radian?</h1>
                    <p class="text-lg font-normal text-body mb-14">"Radian memberikan layanan pelanggan yang baik, dengan mengutamakan kepuasan pelanggan dan memastikan siswa mendapatkan pengalaman pembelajaran terbaik."</p>
                    <div class="flex flex-wrap px-3">
                        <h1 class="text-xl font-semibold text-black mb-1">Super Teacher</h1>
                        <p class="text-base font-normal text-body mb-9">Guru terbaik, pintar, komunikatif serta sopan sehingga memberikan peningkatan super terhadap siswa. dan bisa tukar guru jika siswa merasa tidak cocok</p>
                        <h1 class="text-xl font-semibold text-black mb-1">Garansi Uang Kembali</h1>
                        <p class="text-base font-normal text-body mb-9">Memberikan solusi serta rencana yang mengikuti level siswa sekarang dan ditingkatkan sehingga mencapai target yang diinginkan.</p>
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
            <div class="w-full self-center px-4 lg:w-1/2">
                <h5 class="text-lg font-semibold text-jogja lg:mb-2 mb-0">PROGRAM</h5>
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
                                            <button class="bg-jogja rounded-lg px-3 py-2 text-white text-sm font-semibold self-center absolute top-6 z-20 flex flex-wrap">
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
                                            <button class="bg-jogja rounded-lg px-3 py-2 text-white text-sm font-semibold self-center absolute top-6 z-20 flex flex-wrap">
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
                                            <button class="bg-jogja rounded-lg px-3 py-2 text-white text-sm font-semibold self-center absolute top-6 z-20 flex flex-wrap">
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
                                            <button class="bg-jogja rounded-lg px-3 py-2 text-white text-sm font-semibold self-center absolute top-6 z-20 flex flex-wrap">
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
                                            <button class="bg-jogja rounded-lg px-3 py-2 text-white text-sm font-semibold self-center absolute top-6 z-20 flex flex-wrap">
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
                                            <button class="bg-jogja rounded-lg px-3 py-2 text-white text-sm font-semibold self-center absolute top-6 z-20 flex flex-wrap">
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
                                            <button class="bg-jogja rounded-lg px-3 py-2 text-white text-sm font-semibold self-center absolute top-6 z-20 flex flex-wrap">
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
                                            <button class="bg-jogja rounded-lg px-3 py-2 text-white text-sm font-semibold self-center absolute top-6 z-20 flex flex-wrap">
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
                                            <button class="bg-jogja rounded-lg px-3 py-2 text-white text-sm font-semibold self-center absolute top-6 z-20 flex flex-wrap">
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
<!-- program section end -->

<!-- daftar section start -->
<section id="daftar" class="pt-16 lg:pb-16 mb-40">
        <div class="container">
            <div class="lg:w-[1240px] lg:h-[435px] w-[280px] h-[335px] rounded-b-lg rounded-tl-3xl rounded-tr-lg relative mx-auto self-center bg-slate-50">
                <div class="flex">
                        <img src="img/shape-left.png" alt="" class="left-0 w-[273px] h-[435px] hidden sm:block rounded-tl-3xl rounded-bl-lg">
                        <div class="absolute lg:-top-10 -top-5 lg:-right-10 -right-5 flex">
                            <img src="img/icon-love.png" alt="" class="lg:w-[100px] w-[50px] lg:h-[100px] h-[50px]">
                        </div>
                        
                    <div class="flex flex-wrap mx-auto self-center text-center">
                        <div class="w-full">
                            <h5 class="text-base font-semibold text-bandung lg:mb-6 mb-2 lg:mt-0 mt-4">New User</h5>
                            <h1 class="lg:text-4xl text-xl font-semibold text-black mb-3 lg:max-w-2xl">Tunggu apalagi segera dapatkan Diskon Up To 30% sampai Tanggal 30 September 2022</h1>
                            <p class="text-base font-normal text-body mb-8">Syarat dan Ketentuan berlaku</p>
                            <a href="#" class="text-base font-semibold text-black bg-bandung px-4 py-3 rounded-lg lg:mb-16 mb-3">Daftar Segera</a>
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
<footer id="#" class="bg-footer pt-16 pb-12">
    <div class="container">
        <div class="flex flex-wrap">

            <div class="w-full px-4 md:w-1/4">
                <img src="img/logo.png" alt="" class="mb-4">
                <p class="text-base font-normal text-text">Jl. Akses UI No. 99, Perkantoran Wisma Kencana Putri</p>
                <p class="text-base font-normal text-text">Kecamatan Tugu - Cimanggis</p>
                <p class="text-base font-normal text-text">Kota Depok - 16451.</p>
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
</footer>
<!-- footer section end -->

<script src="{{asset('/js/bandung.js')}}"></script>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

 @endsection