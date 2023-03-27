@extends('halaman_tingkatan.layout.template')
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
            <a class="px-4 py-2 mt-2 text-sm font-semibold md:mt-0 md:ml-4 hover:text-mhs text-body focus:outline-none focus:shadow-outline" href="{{ route('home') }}">Home</a>
            <a class="px-4 py-2 mt-2 text-sm font-semibold md:mt-0 md:ml-4 hover:text-mhs text-body focus:outline-none focus:shadow-outline" href="#about">About</a>
            <a class="px-4 py-2 mt-2 text-sm font-semibold md:mt-0 md:ml-4 hover:text-mhs text-body focus:outline-none focus:shadow-outline" href="#program">Program</a>
            <a class="px-4 py-2 mt-2 text-sm font-semibold md:mt-0 md:ml-4 hover:text-mhs text-body focus:outline-none focus:shadow-outline" href="#promo">Promo</a>
            <a class="px-4 py-2 mt-2 text-sm font-semibold md:mt-0 md:ml-4 hover:text-mhs text-body focus:outline-none focus:shadow-outline" href="#paket">Paket</a>
            <a class="px-4 py-2 mt-2 text-sm font-semibold md:mt-0 md:ml-4 hover:text-mhs text-body focus:outline-none focus:shadow-outline" href="#daftar">Daftar</a>
            <a class="px-4 py-2 mt-2 text-sm font-semibold md:mt-0 md:ml-4 w-[136px] h-[38px] border text-white bg-mhs rounded-lg">Hubungi Kami</a>
        </nav>
    </div>
</div>
<!-- navbar section end -->

<!-- hero section start -->
<section id="#" class="pt-16 w-full h-full" style="background-size: cover; background-image: url(img/bg-mhs.png);">
    <div class="container">
        <div class="flex flex-wrap">
            <div class="w-full self-center px-4 lg:w-1/2">
                <h1 class="lg:text-5xl text-2xl font-semibold text-white mb-6">SELAMAT DATANG, DI PROGRAM LES PRIVAT KHUSUS MAHASISWA</h1>
                <p class="text-base font-normal text-white mb-16 mt-6">Kenali lebih jauh program les privat mahasiswa dari Radian, terbuka untuk semua jurusan, semester dan mata kuliah.</p>
                <div class="flex px-2">
                    <a href="https://wa.me/+6288232172459?text=Halo%20radian%20%0A%0ANama%20%3A%20%0AAsal%20Kota%20%3A%20%0ASekolah%20dan%20Kelas%20%3A%20%0AOrang%20Tua%20%2F%20Siswa%20%3F%20%3A%0ASaya%20mengetahui%20program%20ini%20melalui%20website%20mahasiswa%20" class="lg:text-base text-sm font-semibold text-black bg-white px-4 py-3 rounded-lg mr-6">Mulai Belajar</a>
                    <a href="https://wa.me/+6288232172459?text=Halo%20radian%20%0A%0ANama%20%3A%20%0AAsal%20Kota%20%3A%20%0ASekolah%20dan%20Kelas%20%3A%20%0AOrang%20Tua%20%2F%20Siswa%20%3F%20%3A%0ASaya%20mengetahui%20program%20ini%20melalui%20website%20mahasiswa%20" class="lg:text-base text-sm font-semibold text-white border border-white px-4 py-3 rounded-lg">Hubungi Kami</a>
                </div>
            </div>

            <div class="w-full self-end px-4 lg:w-1/2">
                <div class="relative mt-10">
                    <img src="img/hero-mhs.png" alt="" class="max-w-full mx-auto lg:right-0">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- hero section end -->

<!-- about section start -->
<section id="about" class="pt-16">
    <div class="container">
        <div class="flex flex-wrap">
            <div class="w-full self-start px-4 lg:w-1/2">
                <img src="img/about-mhs.png" alt="" class="max-w-full mx-auto lg:left-0">
            </div>

            <div class="w-full self-start px-4 lg:w-1/2 pt-4">
                <h5 class="text-lg font-semibold text-mhs mb-4">ABOUT</h5>
                <h1 class="lg:text-5xl text-2xl font-semibold text-black mb-9">Program Les Privat Mahasiswa Radian</h1>
                <p class="text-lg font-normal text-body mb-4">LES PRIVAT MAHASISWA adalah program bimbingan dari Radian terbaru yang diperuntukan untuk mahasiswa dari semua jurusan, semester dan mata kuliah pilihan. Yang akan membantu para mahasiswa meningkatkan potensi diri dan mencapai prestasi terbaik.</p>
                <p class="text-lg font-normal text-body mb-16">Dengan bantuan tutor yang kompeten pada bidangnya. Juga metode pembelajaran yang efisien dan efektif</p>
                <a href="#" class="text-base font-semibold text-white bg-mhs px-4 py-3 rounded-lg mt-16">KONSULTASI</a>
            </div>
        </div>
    </div>
</section>
<!-- about section end -->

<!-- program section start -->
<section id="program" class="pt-16">
    <div class="container">
        <div class="text-center items-center justify-center">
            <h5 class="text-lg font-semibold text-mhs mb-4">PROGRAM</h5>
            <h1 class="lg:text-5xl text-2xl font-semibold text-black max-w-3xl mx-auto mb-6">Mengapa Mahasiswa Harus Les Privat & Mengapa Harus di Radian?</h1>
            <p class="text-lg font-normal text-body max-w-2xl mx-auto mb-6">Dapatkan benefit - benefit dari program les privat mahasiswa, berikut ini kami lampirkan apa saja sih benefit yang didaptkan mahasiswa.</p>
            <div class="flex px-2 text-center mx-auto items-center justify-center mb-20">
                <a href="https://wa.me/+6288232172459?text=Halo%20radian%20%0A%0ANama%20%3A%20%0AAsal%20Kota%20%3A%20%0ASekolah%20dan%20Kelas%20%3A%20%0AOrang%20Tua%20%2F%20Siswa%20%3F%20%3A%0ASaya%20mengetahui%20program%20ini%20melalui%20website%20mahasiswa%20" class="text-base font-semibold text-white bg-mhs px-4 py-3 rounded-lg mr-6">DAFTAR SEGERA</a>
                <a href="https://wa.me/+6288232172459?text=Halo%20radian%20%0A%0ANama%20%3A%20%0AAsal%20Kota%20%3A%20%0ASekolah%20dan%20Kelas%20%3A%20%0AOrang%20Tua%20%2F%20Siswa%20%3F%20%3A%0ASaya%20mengetahui%20program%20ini%20melalui%20website%20mahasiswa%20" class="text-base font-semibold text-mhs border border-mhs px-4 py-3 rounded-lg">KONSULTASI</a>
            </div>
        </div>

        <div class="overflow-hidden bg-primary rounded-tl-2xl rounded-br-2xl mt-20">
            <div class="grid items-center grid-cols-1 gap-y-2 lg:grid-cols-2">
                <div class="ml-10 relative">
                    <img src="img/pro-mhs.png" alt="" class="relative w-full">
                </div>
                <div class="pl-4">
                    <h1 class="lg:text-5xl text-2xl font-semibold text-white mb-6">5 Alasan Kenapa Harus Privat Di Radian?</h1>
                    <div class="flex flex-wrap">

                        <div class="mb-8 relative">
                            <div class="absolute align-middle rounded-lg bg-second w-10 h-10 flex justify-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div class="inline-block align-middle pl-4 ml-8">
                                <h3 class="text-lg font-semibold text-white">Waktu belajar 90-120 menit</h3>
                            </div>
                        </div>

                        <div class="mb-8 relative">
                            <div class="absolute align-middle rounded-lg bg-second w-10 h-10 flex justify-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 21L3 16.5m0 0L7.5 12M3 16.5h13.5m0-13.5L21 7.5m0 0L16.5 12M21 7.5H7.5" />
                                </svg>                                      
                            </div>
                            <div class="inline-block align-middle pl-4 ml-8">
                                <h3 class="text-lg font-semibold text-white">Bebas ganti guru jika tidak cocok</h3>
                            </div>
                        </div>

                        <div class="mb-8 relative">
                            <div class="absolute align-middle rounded-lg bg-second w-10 h-10 flex justify-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </div>
                            <div class="inline-block align-middle pl-4 ml-8">
                                <h3 class="text-lg font-semibold text-white">Sesi Gratis jika tidak cocok</h3>
                            </div>
                        </div>

                        <div class="mb-8 relative">
                            <div class="absolute align-middle rounded-lg bg-second w-10 h-10 flex justify-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div class="inline-block align-middle pl-4 ml-8">
                                <h3 class="text-lg font-semibold text-white">Waktu belajar kelompok 120 menit</h3>
                            </div>
                        </div>

                        <div class="mb-8 relative">
                            <div class="absolute align-middle rounded-lg bg-second w-10 h-10 flex justify-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                                </svg>
                            </div>
                            <div class="inline-block align-middle pl-4 ml-8">
                                <h3 class="text-lg font-semibold text-white">Uang pendaftaran hanya dibayar 1 kali</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- program section end -->

<!-- promo section start -->
<section id="promo" class="pt-16">
    <div class="container">
        <div class="flex flex-wrap">
            <div class="w-full self-start px-4 order-2 lg:order-1 lg:w-1/2">
                <h5 class="text-lg font-semibold text-mhs mb-4">PROMO</h5>
                <h1 class="lg:text-5xl text-2xl font-bold text-black mb-2">Dibuka Pendaftaran Untuk Jenjang Mahasiswa</h1>
                <p class="text-lg font-normal text-body mb-10">Daftar segera dan dapatkan benefit-benefitnya.</p>
                <div class="flex flex-wrap">
                    <div class="w-full lg:w-1/2">
                        <h1 class="lg:text-5xl text-2xl font-bold text-black mb-2">100 +</h1>
                        <p class="text-base font-normal text-body mb-8">Tutor terbaik lulusan PTN</p>
                        <h1 class="lg:text-5xl text-2xl font-bold text-black mb-2">1K + </h1>
                        <p class="text-base font-normal text-body">Happy Customer</p>
                    </div>
                    <div class="w-full lg:w-1/2">
                        <h1 class="lg:text-5xl text-2xl font-bold text-black mb-2">75%</h1>
                        <p class="text-base font-normal text-body mb-8">Disc Up To?</p>
                        <h1 class="lg:text-5xl text-2xl font-bold text-black mb-2">90 +</h1>
                        <p class="text-base font-normal text-body">Waktu Belaja 90 - 120 Menit</p>
                    </div>
                </div>
            </div>

            <div class="w-full self-start px-4 order-1 lg:order-2 lg:w-1/2">
                    <img src="img/promo-mhs.png" alt="" class="max-w-full mx-auto lg:right-0">
            </div>
        </div>
    </div>
</section>
<!-- promo section end -->

<!-- sesi section start -->
<section id="paket" class="pt-16">
    <div class="container">
        <div class="flex flex-wrap">
            <div class="w-full self-start px-4 lg:w-1/2">
                <div class="grid grid-cols-2 gap-2">
                    <img src="img/12sesi.png" alt="" class="mr-12">
                    <img src="img/1sesi.png" alt="">
                </div>
            </div>
            <div class="w-full self-center px-4 lg:w-1/2">
                <h5 class="text-base font-semibold text-mhs mb-4">PAKET</h5>
                <h1 class="lg:text-5xl text-2xl font-semibold text-black mb-6">Pilih Sesinya Sekarang, Yuk</h1>
                <p class="text-base font-normal text-body mb-8">Dapatkan promo menarik dari setiap sesi yang dipilih, dan jika melakukan pelunasan di awal dengan jumlah 12 sesi, kamu bebas biaya pendaftaran</p>
                <div class="flex px-2">
                    <a href="https://wa.me/+6288232172459?text=Halo%20radian%20%0A%0ANama%20%3A%20%0AAsal%20Kota%20%3A%20%0ASekolah%20dan%20Kelas%20%3A%20%0AOrang%20Tua%20%2F%20Siswa%20%3F%20%3A%0ASaya%20mengetahui%20program%20ini%20melalui%20website%20mahasiswa%20" class="lg:text-base text-sm font-semibold text-white bg-mhs rounded-lg py-3 px-2 lg:mt-14 text-center lg:mb-0 mb-2 mr-6 w-[151px] h-[48px]">PILIH 12 SESI</a>
                    <a href="https://wa.me/+6288232172459?text=Halo%20radian%20%0A%0ANama%20%3A%20%0AAsal%20Kota%20%3A%20%0ASekolah%20dan%20Kelas%20%3A%20%0AOrang%20Tua%20%2F%20Siswa%20%3F%20%3A%0ASaya%20mengetahui%20program%20ini%20melalui%20website%20mahasiswa%20" class="lg:text-base text-sm font-semibold text-body py-3 px-2 lg:mt-14 text-center">PILIH 1 SESI</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- sesi section end -->

<!-- testimoni section start -->
<section id="#" class="pt-16 mb-24">
    <div class="container">
        <div class="flex flex-wrap">
            <div class="w-full px-4 mb-10 lg:w-1/2">
                <h2 class="font-semibold text-black lg:text-5xl text-2xl mb-14">Apa Kata Mereka Tentang Radian</h2>
            </div>
            <div class="w-full px-4 mb-10 lg:w-1/2">
                <p class="font-normal text-body text-lg mb-14 max-w-md">Radian telah memberikan banyak impect untuk membantu para pelajar agar mencapai target dan tujuannya.</p>
            </div>
            
        </div>

        <div class="flex">
            <div id="slidercarousel" class="w-full overflow-hidden">
                <ul id="slids" class="flex w-full">
                    <li>
                        <div class="group bg-white border border-body rounded-2xl h-auto w-[350px] lg:w-full mb-10 mt-7 mr-4 hover:bg-primary">
                            <div class="flex items-center justify-center mt-8">
                                <div class="rounded-full w-12 h-12 bg-slate-200 flex justify-center items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                      </svg>
                                </div>
                        </div>
                        <div class="py-4 px-6">
                            <h3 class="mb-1 font-normal text-xl text-black text-center">Ajriya M. Arkan</h3>
                            <h4 class="mb-6 font-normal text-lg text-body text-center group-hover:text-white">Universitas Indonesia</h4>
                            <p class="mb-9 font-normal text-lg text-body text-center group-hover:text-white">"Pendampingan dari Radian serta metode belajar efektif bersama tentor, mempermudah dalam mencapai PTN impian saya"</p>
                        </div>
                    </div>
                    </li>

                    <li>
                        <div class="group bg-white border border-body rounded-2xl h-auto w-[350px] lg:w-full mb-10 mt-7 mr-4 hover:bg-primary">
                            <div class="flex items-center justify-center mt-8">
                                <div class="rounded-full w-12 h-12 bg-slate-200 flex justify-center items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </div>
                            <div class="py-4 px-6">
                                <h3 class=" mb-1 font-normal text-xl text-black text-center">Ardilla Ayu S.</h3>
                                <h4 class="mb-6 font-normal text-lg text-body text-center group-hover:text-white">Universitas Brawijaya</h4>
                                <p class="mb-16 font-normal text-lg text-body text-center group-hover:text-white">"Tentornya sangat kompeten dan mampu membangun motivasi saya agar semakin kuat dan semangat belajar mencapai target"</p>
                            </div> 
                        </div>
                    </li>

                    <li>
                        <div class="group bg-white border border-body rounded-2xl h-auto w-[350px] lg:w-full mb-10 mt-7 mr-4 hover:bg-primary">
                            <div class="flex items-center justify-center mt-8">
                                <div class="rounded-full w-12 h-12 bg-slate-100 flex justify-center items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </div>
                            <div class="py-4 px-6">
                                <h3 class="mb-1 font-normal text-xl text-black text-center">Kesya</h3>
                                <h4 class="mb-6 font-normal text-lg text-body text-center group-hover:text-white">UNPAD - Akuntansi Internasional</h4>
                                <p class="mb-9 font-normal text-lg text-body text-center group-hover:text-white">"Fasilitas dan materi yang diberikan sangat lengkap, guru dan staff juga sangat ramah, sehingga sangat membantu dalam belajar."</p>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="group bg-white border border-body rounded-2xl h-auto w-[350px] lg:w-full mb-10 mt-7 mr-4 hover:bg-primary">
                            <div class="flex items-center justify-center mt-8">
                                <div class="rounded-full w-12 h-12 bg-slate-100 flex justify-center items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </div>
                            <div class="py-4 px-6">
                                <h3 class="mb-1 font-normal text-xl text-black text-center">Prana</h3>
                                <h4 class="mb-6 font-normal text-lg text-body text-center group-hover:text-white">UI - Kedokteran</h4>
                                <p class="mb-9 font-normal text-lg text-body text-center group-hover:text-white">"Saya sangat senang dan puas dengan pengalaman belajar Radian. Materi-materi yang diberikan mudah dimengerti dan tutor-tutor sangat membantu dalam memahami materi.”</p>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="group bg-white border border-body rounded-2xl h-auto w-[350px] lg:w-full mb-10 mt-7 mr-4 hover:bg-primary">
                            <div class="flex items-center justify-center mt-8">
                                <div class="rounded-full w-12 h-12 bg-slate-100 flex justify-center items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </div>
                            <div class="py-4 px-6">
                                <h3 class="mb-1 font-normal text-xl text-black text-center">Sekar</h3>
                                <h4 class="mb-6 font-normal text-lg text-body text-center group-hover:text-white">UI - FKG</h4>
                                <p class="mb-9 font-normal text-lg text-body text-center group-hover:text-white">“Berkat belajar di Radian saya bisa meraih mimpi saya menjadi dokter. Materi-materi yang dipelajari sangat membantu saya menghadapi ujian.”</p>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="group bg-white border border-body rounded-2xl h-auto w-[350px] lg:w-full mb-10 mt-7 mr-4 hover:bg-primary">
                            <div class="flex items-center justify-center mt-8">
                                <div class="rounded-full w-12 h-12 bg-slate-100 flex justify-center items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </div>
                            <div class="py-4 px-6">
                                <h3 class="mb-1 font-normal text-xl text-black text-center">Vincent</h3>
                                <h4 class="mb-6 font-normal text-lg text-body text-center group-hover:text-white">UB - Bioteknologi</h4>
                                <p class="mb-9 font-normal text-lg text-body text-center group-hover:text-white">“Guru-guru di Radian baik dan ramah banget, selalu memberikan tips dan trik untuk menghadapi ujian. Suasana belajar yang menyenangkan buat semangat belajar.”</p>
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

<!-- daftar section start -->
<section id="teacher" class="pb-20 pt-16">
    <div class="container">
        <div class="pl-4 mx-auto bg-gradient-to-r from-orange to-second lg:w-[1227px] lg:h-[306px] h-[700px] rounded-3xl sm:pl-6 lg:pl-8 relative">
            <div class="2xl:pl-24">
                <div class="grid items-center grid-cols-1 gap-y-12 lg:grid-cols-2 lg:gap-x-8 2xl:gap-x-20">
                    <div class="lg:order-1 order-2">
                      <h2 class="lg:text-5xl text-2xl font-bold text-white lg:mt-12 mt-2 mb-2">SEGERA DAFTAR!</h2>
                      <p class="text-lg font-medium text-white mb-9">Tunggu Apalagi segera dapatkan Diskon Up To 30% sampai tanggal 15 September 2022</p>
                      <div class="flex px-2">
                        <a href="#" class="text-sm font-bold text-white bg-sma py-3 px-8 mr-4 rounded-lg">Daftar Segera</a>
                        <a href="#" class="text-sm font-bold text-white border border-white py-3 px-8 rounded-lg">Konsultasi</a>
                      </div>
                      
                    </div>
    
                    <div class="lg:absolute relative right-0 -top-10 lg:order-2 order-1">
                        <img class="w-[338px] h-[334px] right-0 text-right" src="img/daftar.png" alt="">
                    </div>
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
              <img src="img/logo.png" alt="" class="mb-4">
              <p class="text-base font-normal text-text">Jl. Akses UI No. 99, Perkantoran Wisma Kencana Putri</p>
              <p class="text-base font-normal text-text">Kecamatan Tugu - Ciamnggis</p>
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
              <div class="w-full px-4 mb-8">
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
</section>
<!-- footer section end -->

<script src="{{asset('/js/mahasiswa.js')}}"></script>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
 @endsection