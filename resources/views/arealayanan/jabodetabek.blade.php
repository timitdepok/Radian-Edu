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
                        <a href="home.html" class="text-base text-body font-medium py-2 mx-8 flex group-hover:text-primary">Home</a>
                    </li>
                    <li class="group">
                        <a href="#alumni" class="text-base text-body font-medium py-2 mx-8 flex group-hover:text-primary">Alumni</a>
                    </li>
                    <li class="group">
                        <a href="#testi" class="text-base text-body font-medium py-2 mx-8 flex group-hover:text-primary">Testimoni</a>
                    </li>
                    <li class="group">
                        <a href="#unggul" class="text-base text-body font-medium py-2 mx-8 flex group-hover:text-primary">Keunggulan</a>
                    </li>
                    <li class="group">
                        <a href="#program" class="text-base text-body font-medium py-2 mx-8 flex group-hover:text-primary">Program</a>
                    </li>
                    <li class="group">
                        <a href="#daftar" class="text-base text-body font-medium py-2 mx-8 flex group-hover:text-primary">Daftar</a>
                    </li>
                    <li class="group">
                        <button class="text-base text-primary font-medium py-2 px-3 mx-8 border bg-hero rounded-lg">Hubungi Kami</button>
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
        <div class="lg:pl-9 overflow-hidden bg-hero rounded-3xl">
            <div class="grid items-center grid-cols-1 gap-y-2 lg:grid-cols-2">
                <div class="lg:pl-9 px-2 max-w-3xl lg:mt-0 mt-3">
                    <h1 class="lg:text-5xl text-3xl font-semibold text-primary mb-6">BEST PARTNER FOR ACCELERATING YOUR GROWTH</h1>
                    <p class="text-base font-normal text-body lg:mb-16 mb-3 max-w-[482px]">Radian siap membantu kamu untuk terus mengembangkan diri dan meraih kesuksesan.</p>
                    <div class="flex px-2">
                        <a href="https://wa.me/+6281779007135?text=Halo%20radian%20%0A%0ANama%20%3A%20%0AAsal%20Kota%20%3A%20%0ASekolah%20dan%20Kelas%20%3A%20%0AOrang%20Tua%20%2F%20Siswa%20%3F%20%3A%0ASaya%20mengetahui%20program%20ini%20melalui%20website%20privatgaransi.radianedu.com%20" class="lg:text-base text-sm font-semibold text-white bg-primary rounded-lg py-3 px-2 lg:mt-14 text-center lg:mb-0 mb-2 mr-6 w-[151px] h-[48px]">Mulai Belajar</a>
                        <a href="https://wa.me/+6281779007135?text=Halo%20radian%20%0A%0ANama%20%3A%20%0AAsal%20Kota%20%3A%20%0ASekolah%20dan%20Kelas%20%3A%20%0AOrang%20Tua%20%2F%20Siswa%20%3F%20%3A%0ASaya%20mengetahui%20program%20ini%20melalui%20website%20privatgaransi.radianedu.com%20" class="lg:text-base text-sm font-semibold text-primary border border-primary py-3 px-2 rounded-lg lg:mt-14 text-center w-[151px] h-[48px]">Hubungi Kami</a>
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
<section id="#" class="pt-16">
    <div class="container">
        <div class="flex flex-wrap">
            <div class="w-full px-4 lg:w-1/2">
                <div class="grid grid-cols-1 gap-2 lg:grid-cols-2 hover:border-second px-3 py-3">
                    <img src="img/al-jabodetabek1.png" alt="" class="mr-12">
                    <img src="img/al-jabodetabek2.png" alt="">
                </div>
            </div>
            <div class="w-full px-4 self-center lg:w-1/2">
                <h5 class="text-base font-semibold text-primary mb-1">Alumni Radian</h5>
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
                    <a href="#program" class="lg:text-base text-sm font-semibold text-white bg-primary rounded-lg py-3 px-2 lg:mt-14 text-center lg:mb-0 mb-2 mr-6 w-[151px] h-[48px]">Pilih Program</a>
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
                    <li class="mr-3">
                        <div class="bg-white border border-body rounded-2xl mb-10 mt-7">
                            <div class="flex items-center justify-center h-auto mt-[30px]">
                                <div class="rounded-full w-12 h-12 bg-slate-200 flex justify-center items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                      </svg>
                                </div>
                            </div>
                            <div class="py-8 px-6">
                                <h3 class="mb-1 font-normal text-xl text-black text-center">Ajriya</h3>
                                <h4 class="mb-6 font-normal text-lg text-body text-center">UI - Teknik Komputer</h4>
                                <p class="mb-9 font-normal text-lg text-body text-center">"Terimakasih Radian sudah membantu saya masuk ke PTN dan jurusan yang saya impikan. Guru-guru sangat baik dan cara mengajarnya juga mudah dipahami."</p>
                            </div>
                        </div>
                    </li>

                    <li class="mr-3">
                        <div class="bg-white border border-body rounded-2xl mb-10 mt-7">
                            <div class="flex items-center justify-center h-auto mt-[30px]">
                                <div class="rounded-full w-12 h-12 bg-slate-200 flex justify-center items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </div>
                            <div class="py-8 px-6">
                                <h3 class=" mb-1 font-normal text-xl text-black text-center">Zefanya</h3>
                                <h4 class="mb-6 font-normal text-lg text-body text-center">UI - Kedokteran</h4>
                                <p class="mb-9 font-normal text-lg text-body text-center">"Guru-guru di Radian memberikan saya harapan dan dukungan besar. Saya mendapatkan banyak strategi dan tips dalam menghadapi ujian UTBK."</p>
                            </div> 
                        </div>
                    </li>

                    <li class="mr-3">
                        <div class="bg-white border border-body rounded-2xl mb-10 mt-7">
                            <div class="flex items-center justify-center h-auto mt-[30px]">
                                <div class="rounded-full w-12 h-12 bg-slate-100 flex justify-center items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </div>
                            <div class="py-8 px-6">
                                <h3 class="mb-1 font-normal text-xl text-black text-center">Nadif</h3>
                                <h4 class="mb-6 font-normal text-lg text-body text-center">IPB - Sekolah Bisnis</h4>
                                <p class="mb-9 font-normal text-lg text-body text-center">“Belajar di Radian benar-benar membantu saya dalam memahami soal-soal UTBK. Latihan soalnya banyak sehingga saya dapat berlatih untuk mengerjakan berbagai macam soal”</p>
                            </div>
                        </div>
                    </li>

                    <li class="mr-3">
                        <div class="bg-white border border-body rounded-2xl mb-10 mt-7">
                            <div class="flex items-center justify-center h-auto mt-[30px]">
                                <div class="rounded-full w-12 h-12 bg-slate-100 flex justify-center items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </div>
                            <div class="py-8 px-6">
                                <h3 class="mb-1 font-normal text-xl text-black text-center">Mikhi</h3>
                                <h4 class="mb-6 font-normal text-lg text-body text-center">UI - Kedokteran</h4>
                                <p class="mb-9 font-normal text-lg text-body text-center">“Berkat Radian saya bisa mewujudkan mimpi saya menjadi dokter. Terimakasih Radian sudah membantu saya masuk kedokteran UI”</p>
                            </div>
                        </div>
                    </li>

                    <li class="mr-3">
                        <div class="bg-white border border-body rounded-2xl mb-10 mt-7">
                            <div class="flex items-center justify-center h-auto mt-[30px]">
                                <div class="rounded-full w-12 h-12 bg-slate-100 flex justify-center items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </div>
                            <div class="py-8 px-6">
                                <h3 class="mb-1 font-normal text-xl text-black text-center">Inas</h3>
                                <h4 class="mb-6 font-normal text-lg text-body text-center">UI - Manajemen</h4>
                                <p class="mb-9 font-normal text-lg text-body text-center">“Fasilitas dan guru di RadIan sangat membantu saya untuk mempelajari soal-soal UTBK. Buat temen-temen yang mau lolos PTN yuk gabung di Radian”</p>
                            </div>
                        </div>
                    </li>

                    <li class="mr-3">
                        <div class="bg-white border border-body rounded-2xl mb-10 mt-7">
                            <div class="flex items-center justify-center h-auto mt-[30px]">
                                <div class="rounded-full w-12 h-12 bg-slate-100 flex justify-center items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </div>
                            <div class="py-8 px-6">
                                <h3 class="mb-1 font-normal text-xl text-black text-center">Ratu</h3>
                                <h4 class="mb-6 font-normal text-lg text-body text-center">UPNVJ - Kedokteran</h4>
                                <p class="mb-9 font-normal text-lg text-body text-center">‘‘Alhamdulliah dengan bergabung bersama Radian bisa membantu saya untuk masuk jurusan impian saya yaitu Kedokteran di UIN jakarta”</p>
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
            <div class="w-full px-4 lg:w-1/2">
                <h1 class="text-4xl font-semibold text-black mb-6">Kenapa Harus Di Radian?</h1>
                <p class="text-lg font-normal text-body mb-14">"Radian memberikan layanan pelanggan yang baik, dengan mengutamakan kepuasan pelanggan dan memastikan siswa mendapatkan pengalaman pembelajaran terbaik."</p>
                <div class="flex flex-wrap px-3">
                    <h2 class="text-xl font-semibold text-black mb-1">Super Teacher</h2>
                    <p class="text-base font-normal text-body mb-9">Guru terbaik, pintar, komunikatif serta sopan sehingga memberikan peningkatan super terhadap siswa . dan bisa tukar guru jika siswa merasa tidak cocok</p>
                    <h2 class="text-xl font-semibold text-black mb-1">Garansi Uang Kembali</h2>
                    <p class="text-base font-normal text-body mb-9">Memberikan solusi serta rencana yang mengikuti level siswa sekarang dan ditingkatkan sehingga mencapai target yang diinginkan</p>
                    <h2 class="text-xl font-semibold text-black mb-1">Edu Record</h2>
                    <p class="text-base font-normal text-body">Kami mengupas tuntas hingga kami mendapatkan gambaran yang lengkap tentan kondisi siswa terbaru agar siswa mencapai targetnya.</p>
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
            <div class="w-full self-center px-4 lg:w-1/2">
                <h5 class="text-lg font-semibold text-primary mb-2">PROGRAM</h5>
                <h1 class="lg:text-5xl text-3xl font-semibold text-black mb-4 max-w-[355px]">Program Radian Edu</h1>
                <p class="text-lg font-normal text-body max-w-[321px] lg:mb-0 mb-3">Ayo pilih program terbaik sesuai dengan kebutuhanmu. </p>
            </div>
            <div class="w-full lg:w-1/2">
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
                                    <h3 class="mb-3 text-xl font-medium text-black">
                                        Program Private
                                    </h3>
                                    <p class="text-lg font-normal text-text mb-6">pelajari program les privat untuk para siswa/i SD, SMP & SMA</p>
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
                                    <h3 class="mb-3 text-xl font-medium text-black">
                                        Program Supercamp
                                    </h3>
                                    <p class="text-lg font-normal text-text mb-6">pelajari program les privte untuk para siswa/i SD, SMP & SMA</p>
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
                                    <h3 class="mb-3 text-xl font-medium text-black">Program Class</h3>
                                    <p class="text-lg font-normal text-text mb-6">pelajari program les Private untuk para siswa/i SD, SMP, SMA</p>
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
                                    <p class="text-lg font-normal text-text mb-6">pelajari program les private untuk para siswa/i SD, SMP, SMA</p>
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

<!-- ujicoba part2 section start -->
<section id="#" class="pt-16 lg:pb-16 mb-40">
    <div class="container">
        <div class="bg-ctaarea lg:w-[1240px] lg:h-[435px] w-[280px] h-[335px] rounded-b-lg rounded-tl-3xl rounded-tr-lg relative mx-auto self-center">
            <div class="flex">
                    <img src="img/shape-left.png" alt="" class="left-0 w-[273px] h-[435px] hidden sm:block rounded-tl-3xl rounded-bl-lg">
                    <div class="absolute -top-10 -right-10 flex">
                        <img src="img/icon-love.png" alt="" class="w-[100px] h-[100px]">
                    </div>
                    
                
                <div class="flex flex-wrap mx-auto self-center text-center">
                    <div class="w-full">
                        <h5 class="text-base font-semibold text-primary lg:mb-6 mb-2 lg:mt-0 mt-4">New User</h5>
                        <h1 class="lg:text-4xl text-xl font-semibold text-black mb-3 lg:max-w-2xl">Tunggu apalagi segera dapatkan Diskon Up To 30% sampai Tanggal 30 September 2022</h1>
                        <p class="text-base font-normal text-body mb-8">Syarat dan Ketentuan berlaku</p>
                        <a href="#" class="text-base font-semibold text-black bg-second px-4 py-3 rounded-lg lg:mb-16 mb-3">Daftar Segera</a>
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
<!-- ujicoba part2 section end -->

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


<script src="{{asset('/js/jabodetabek.js')}}"></script>ipt>

 @endsection