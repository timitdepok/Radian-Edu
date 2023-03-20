@extends('halaman_tingkatan.layout.template')
@section('content')

<!-- navbar section start -->
<header class="bg-white absolute top-0 left-0 w-full flex items-center z-0">
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
                        <a href="home.html" class="text-base text-body font-medium py-2 mx-8 flex group-hover:text-mhs">Home</a>
                    </li>
                    <li class="group">
                        <a href="#alumni" class="text-base text-body font-medium py-2 mx-8 flex group-hover:text-mhs">About</a>
                    </li>
                    <li class="group">
                        <a href="#testi" class="text-base text-body font-medium py-2 mx-8 flex group-hover:text-mhs">Program</a>
                    </li>
                    <li class="group">
                        <a href="#unggul" class="text-base text-body font-medium py-2 mx-8 flex group-hover:text-mhs">promo</a>
                    </li>
                    <li class="group">
                        <a href="#program" class="text-base text-body font-medium py-2 mx-8 flex group-hover:text-mhs">Paket</a>
                    </li>
                    <li class="group">
                        <a href="#daftar" class="text-base text-body font-medium py-2 mx-8 flex group-hover:text-mhs">Daftar</a>
                    </li>
                    <li class="group">
                        <button class="text-base text-white font-medium py-2 px-3 mx-8 border bg-mhs rounded-lg">
                            <a href="https://wa.me/+6288232172459?text=Halo%20radian%20%0A%0ANama%20%3A%20%0AAsal%20Kota%20%3A%20%0ASekolah%20dan%20Kelas%20%3A%20%0AOrang%20Tua%20%2F%20Siswa%20%3F%20%3A%0ASaya%20mengetahui%20program%20ini%20melalui%20website%20mahasiswa%20">
                                Hubungi Kami
                            </a></button>
                    </li>
                </ul>
            </nav>
            </div>
        </div>
    </div>
</header>
<!-- navbar section end -->

<!-- hero section start -->
<section id="#" class="pt-16 w-full h-full" style="background-size: cover; background-image: url(img/bg-mhs.png);">
    <div class="container">
        <div class="flex flex-wrap">
            <div class="w-full self-center px-4 lg:w-1/2">
                <h1 class="text-5xl font-semibold text-white mb-6">SELAMAT DATANG, DI PROGRAM LES PRIVAT KHUSUS MAHASISWA</h1>
                <p class="text-base font-normal text-white mb-16 mt-6">Kenali lebih jauh program les privat mahasiswa dari Radian, terbuka untuk semua jurusan, semester dan mata kuliah.</p>
                <a href="https://wa.me/+6288232172459?text=Halo%20radian%20%0A%0ANama%20%3A%20%0AAsal%20Kota%20%3A%20%0ASekolah%20dan%20Kelas%20%3A%20%0AOrang%20Tua%20%2F%20Siswa%20%3F%20%3A%0ASaya%20mengetahui%20program%20ini%20melalui%20website%20mahasiswa%20" class="text-base font-semibold text-black bg-white px-4 py-3 rounded-lg mr-6">Mulai Belajar</a>
                <a href="https://wa.me/+6288232172459?text=Halo%20radian%20%0A%0ANama%20%3A%20%0AAsal%20Kota%20%3A%20%0ASekolah%20dan%20Kelas%20%3A%20%0AOrang%20Tua%20%2F%20Siswa%20%3F%20%3A%0ASaya%20mengetahui%20program%20ini%20melalui%20website%20mahasiswa%20" class="text-base font-semibold text-white border border-white px-4 py-3 rounded-lg">Hubungi Kami</a>
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
<section id="#" class="pt-16">
    <div class="container">
        <div class="flex flex-wrap">
            <div class="w-full self-start px-4 lg:w-1/2">
                <img src="img/about-mhs.png" alt="" class="max-w-full mx-auto lg:left-0">
            </div>

            <div class="w-full self-start px-4 lg:w-1/2 pt-4">
                <h5 class="text-lg font-semibold text-mhs mb-4">ABOUT</h5>
                <h1 class="text-5xl font-semibold text-black mb-9">Program Les Privat Mahasiswa Radian</h1>
                <p class="text-lg font-normal text-body mb-4">LES PRIVAT MAHASISWA adalah program bimbingan dari Radian terbaru yang diperuntukan untuk mahasiswa dari semua jurusan, semester dan mata kuliah pilihan. Yang akan membantu para mahasiswa meningkatkan potensi diri dan mencapai prestasi terbaik.</p>
                <p class="text-lg font-normal text-body mb-16">Dengan bantuan tutor yang kompeten pada bidangnya. Juga metode pembelajaran yang efisien dan efektif</p>
                <a href="#" class="text-base font-semibold text-white bg-mhs px-4 py-3 rounded-lg mt-16">KONSULTASI</a>
            </div>
        </div>
    </div>
</section>
<!-- about section end -->

<!-- program section start -->
<section id="#" class="pt-16">
    <div class="container">
        <div class="text-center items-center justify-center">
            <h5 class="text-lg font-semibold text-mhs mb-4">PROGRAM</h5>
            <h1 class="text-5xl font-semibold text-black max-w-3xl mx-auto mb-6">Mengapa Mahasiswa Harus Les Privat & Mengapa Harus di Radian?</h1>
            <p class="text-lg font-normal text-body max-w-2xl mx-auto mb-6">Dapatkan benefit - benefit dari program les privat mahasiswa, berikut ini kami lampirkan apa saja sih benefit yang didaptkan mahasiswa.</p>
            <a href="https://wa.me/+6288232172459?text=Halo%20radian%20%0A%0ANama%20%3A%20%0AAsal%20Kota%20%3A%20%0ASekolah%20dan%20Kelas%20%3A%20%0AOrang%20Tua%20%2F%20Siswa%20%3F%20%3A%0ASaya%20mengetahui%20program%20ini%20melalui%20website%20mahasiswa%20" class="text-base font-semibold text-white bg-mhs px-4 py-3 rounded-lg mr-6">DAFTAR SEGERA</a>
            <a href="https://wa.me/+6288232172459?text=Halo%20radian%20%0A%0ANama%20%3A%20%0AAsal%20Kota%20%3A%20%0ASekolah%20dan%20Kelas%20%3A%20%0AOrang%20Tua%20%2F%20Siswa%20%3F%20%3A%0ASaya%20mengetahui%20program%20ini%20melalui%20website%20mahasiswa%20" class="text-base font-semibold text-mhs border border-mhs px-4 py-3 rounded-lg mb-20">KONSULTASI</a>
        </div>

        <div class="overflow-hidden bg-primary rounded-tl-2xl rounded-br-2xl mt-20">
            <div class="grid items-center grid-cols-1 gap-y-2 lg:grid-cols-2">
                <div class="ml-10 relative">
                    <img src="img/pro-mhs.png" alt="" class="relative w-full">
                </div>
                <div class="pl-4">
                    <h1 class="text-5xl font-semibold text-white mb-6">5 Alasan Kenapa Harus Privat Di Radian?</h1>
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
<section id="#" class="pt-16">
    <div class="container">
        <div class="flex flex-wrap">
            <div class="w-full self-start px-4 order-2 lg:order-1 lg:w-1/2">
                <h5 class="text-lg font-semibold text-mhs mb-4">PROMO</h5>
                <h1 class="text-5xl font-bold text-black mb-2">Dibuka Pendaftaran Untuk Jenjang Mahasiswa</h1>
                <p class="text-lg font-normal text-body mb-10">Daftar segera dan dapatkan benefit-benefitnya.</p>
                <div class="flex flex-wrap">
                    <div class="w-full lg:w-1/2">
                        <h1 class="text-5xl font-bold text-black mb-2">100 +</h1>
                        <p class="text-base font-normal text-body mb-8">Tutor terbaik lulusan PTN</p>
                        <h1 class="text-5xl font-bold text-black mb-2">1K + </h1>
                        <p class="text-base font-normal text-body">Happy Customer</p>
                    </div>
                    <div class="w-full lg:w-1/2">
                        <h1 class="text-5xl font-bold text-black mb-2">75%</h1>
                        <p class="text-base font-normal text-body mb-8">Disc Up To?</p>
                        <h1 class="text-5xl font-bold text-black mb-2">90 +</h1>
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
<section id="#" class="pt-16">
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
                <h1 class="text-5xl font-semibold text-black mb-6">Pilih Sesinya Sekarang, Yuk</h1>
                <p class="text-base font-normal text-body mb-8">Dapatkan promo menarik dari setiap sesi yang dipilih, dan jika melakukan pelunasan di awal dengan jumlah 12 sesi, kamu bebas biaya pendaftaran</p>
                <a href="https://wa.me/+6288232172459?text=Halo%20radian%20%0A%0ANama%20%3A%20%0AAsal%20Kota%20%3A%20%0ASekolah%20dan%20Kelas%20%3A%20%0AOrang%20Tua%20%2F%20Siswa%20%3F%20%3A%0ASaya%20mengetahui%20program%20ini%20melalui%20website%20mahasiswa%20" class="text-lg font-medium text-white bg-mhs px-6 py-4 rounded-lg mr-7">PILIH 12 SESI</a>
                <a href="https://wa.me/+6288232172459?text=Halo%20radian%20%0A%0ANama%20%3A%20%0AAsal%20Kota%20%3A%20%0ASekolah%20dan%20Kelas%20%3A%20%0AOrang%20Tua%20%2F%20Siswa%20%3F%20%3A%0ASaya%20mengetahui%20program%20ini%20melalui%20website%20mahasiswa%20" class="text-lg font-medium text-body px-6 py-4 rounded-lg">PILIH 1 SESI</a>
            </div>
        </div>
    </div>
</section>
<!-- sesi section end -->

<!-- testimoni section start -->
<section id="#" class="pt-16 mb-24">
    <div class="container">
        <div class="flex flex-wrap">
            <div class="w-full px-4 mb-10 lg:w-1/3">
                <h2 class="font-semibold text-black text-5xl mb-14">Apa Kata Mereka Tentang Radian</h2>
            </div>
            <div class="w-full px-4 mb-10 lg:w-1/3">
                <p class="font-normal text-body text-lg mb-14 max-w-md">Radian telah memberikan banyak impect untuk membantu para pelajar agar mencapai target dan tujuannya.</p>
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
                        <div class="group bg-white border border-body rounded-2xl mb-10 mt-7 mr-4 hover:bg-primary">
                            <div class="flex items-center justify-center h-auto mt-8">
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
                        <div class="group bg-white border border-body rounded-2xl mb-10 mt-7 mr-4 hover:bg-primary">
                            <div class="flex items-center justify-center h-auto mt-8">
                                <div class="rounded-full w-12 h-12 bg-slate-200 flex justify-center items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </div>
                            <div class="py-4 px-6">
                                <h3 class=" mb-1 font-normal text-xl text-black text-center">Ardilla Ayu S.</h3>
                                <h4 class="mb-6 font-normal text-lg text-body text-center group-hover:text-white">Universitas Brawijaya</h4>
                                <p class="mb-9 font-normal text-lg text-body text-center group-hover:text-white">"Tentornya sangat kompeten dan mampu membangun motivasi saya agar semakin kuat dan semangat belajar mencapai target"</p>
                            </div> 
                        </div>
                    </li>

                    <li>
                        <div class="group bg-white border border-body rounded-2xl mb-10 mt-7 mr-4 hover:bg-primary">
                            <div class="flex items-center justify-center h-auto mt-8">
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
                        <div class="group bg-white border border-body rounded-2xl mb-10 mt-7 mr-4 hover:bg-primary">
                            <div class="flex items-center justify-center h-auto mt-8">
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
                        <div class="group bg-white border border-body rounded-2xl mb-10 mt-7 mr-4 hover:bg-primary">
                            <div class="flex items-center justify-center h-auto mt-8">
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
                        <div class="group bg-white border border-body rounded-2xl mb-10 mt-7 mr-4 hover:bg-primary">
                            <div class="flex items-center justify-center h-auto mt-8">
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
    </div>
</section>
<!-- testimoni section end -->

<!-- daftar section start -->
<section id="#" class="pt-16 pb-12">
    <div class="container">
        <div class="overflow-hidden bg-gradient-to-r from-orange to-second rounded-lg w-full h-[306px]">
            <div class="grid items-center grid-cols-1 gap-y-2 lg:grid-cols-2">
              <div class="ml-16 relative">
                <h2 class="text-5xl font-bold text-white mt-12 mb-2">SEGERA DAFTAR!</h2>
                <p class="text-lg font-medium text-white mb-9">Tunggu Apalagi segera dapatkan Diskon Up To 30% sampai tanggal 15 September 2022</p>
                <a href="https://wa.me/+6288232172459?text=Halo%20radian%20%0A%0ANama%20%3A%20%0AAsal%20Kota%20%3A%20%0ASekolah%20dan%20Kelas%20%3A%20%0AOrang%20Tua%20%2F%20Siswa%20%3F%20%3A%0ASaya%20mengetahui%20program%20ini%20melalui%20website%20mahasiswa%20" class="text-sm font-bold text-white bg-sma py-3 px-8 mr-4 rounded-lg">Daftar Segera</a>
                <a href="https://wa.me/+6288232172459?text=Halo%20radian%20%0A%0ANama%20%3A%20%0AAsal%20Kota%20%3A%20%0ASekolah%20dan%20Kelas%20%3A%20%0AOrang%20Tua%20%2F%20Siswa%20%3F%20%3A%0ASaya%20mengetahui%20program%20ini%20melalui%20website%20mahasiswa%20" class="text-sm font-bold text-white border border-white py-3 px-8 rounded-lg">Konsultasi</a>
              </div>
              <div class="absolute p-0 right-12 mr-20">
                <img class="relative w-80 h-80" src="img/daftar.png" alt="">
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
 @endsection