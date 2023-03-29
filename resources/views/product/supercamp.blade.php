@extends('product.layout.template')
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
                <a class="px-4 py-2 mt-2 text-sm font-semibold md:mt-0 md:ml-4 hover:text-primary text-body focus:outline-none focus:shadow-outline" href="{{ route('home') }}">Home</a>
                <a class="px-4 py-2 mt-2 text-sm font-semibold md:mt-0 md:ml-4 hover:text-primary text-body focus:outline-none focus:shadow-outline" href="#alumni">Kedokteran</a>
                <a class="px-4 py-2 mt-2 text-sm font-semibold md:mt-0 md:ml-4 hover:text-primary text-body focus:outline-none focus:shadow-outline" href="#testi">Kedinasan</a>
                <a class="px-4 py-2 mt-2 text-sm font-semibold md:mt-0 md:ml-4 hover:text-primary text-body focus:outline-none focus:shadow-outline" href="#unggul">PTN Favorit</a>
                <a class="px-4 py-2 mt-2 text-sm font-semibold md:mt-0 md:ml-4 hover:text-primary text-body focus:outline-none focus:shadow-outline" href="#program">Promo</a>
                <a class="px-4 py-2 mt-2 text-sm font-semibold md:mt-0 md:ml-4 w-[136px] h-[38px] border text-white bg-primary rounded-lg">KONSULTASI</a>
            </nav>
        </div>
</div>
<!-- navbar section end -->

<!-- hero section start -->
<section id="hero" class="pt-16 pb-14 bg-gradient-to-tl from-blue-100 via-white to-blue-200">
    <div class="container">
        <div class="flex flex-wrap">
            <div class="w-full self-center px-4 lg:w-1/2 lg:order-1 order-2">
                <button class="border bg-second rounded-full mb-6 py-3 px-8 mt-8">
                    <h5 class="text-lg font-semibold text-black md:text-lg">PROGRAM SUPERCAMP</h5>
                </button>
                <h1 class="font-bold text-2xl lg:text-3xl mt-1">Bimbingan Ujian Masuk Perguruan Tinggi Negri & Kedinasan Terbaik di Seluruh Indonesia</h1>
                <p class="font-normal text-sm lg:text-lg text-text mt-4 mb-5">Bimbingan intensif karantina yang dilaksanakan 30 hari menjelang kegiatan UTBK berlangsung. Kami siap menjadi support sistem utama menghantarkan siswa/i lolos ke PTN impian.</p>
                <div class="flex px-2">
                    <a href="#pro-unggul" class="text-sm font-normal text-white bg-primary py-3 lg:px-8 px-4 mr-4 rounded-lg">Lihat Program</a>
                    <a href="https://wa.me/+6281779007135?text=Halo%20radian%20%0A%0ANama%20%3A%20%0AAsal%20Kota%20%3A%20%0ASekolah%20dan%20Kelas%20%3A%20%0AOrang%20Tua%20%2F%20Siswa%20%3F%20%3A%0ASaya%20mengetahui%20program%20ini%20melalui%20website%20supercamp%20" class="text-sm font-normal text-primary border-2 border-primary/100 py-3 lg:px-8 px-4 rounded-lg">Konsultasi</a>
                </div>
                
            </div>

            <div class="w-full self-start px-4 lg:w-1/2 lg:order-2 order-1">
                <div class="relative mt-10">
                    <img src="img/camp-hero.png" alt="" class="max-w-full mx-auto lg:mt-9 lg:right-0">
                </div>
            </div>
        </div>
        
    </div>
</section>
<!-- hero section end -->

<!-- program section start -->
<section id="#" class="pt-16 bg-second">
    <div class="container">
       <div class="w-full px-4">
            <div class="max-w-3xl mx-auto text-center items-center mb-16">
                <h1 class="font-semibold lg:text-5xl text-2xl max-w-2xl text-black text-center">
                    Program Supercamp Garansi Di Radian 
                </h1>
                <p class="font-normal text-lg text-sma md:text-lg pt-4">
                    Berikut ini merupakan program-program unggulan Radian Edu
                </p>
            </div>
       </div>

       <div class="flex flex-wrap">
            <div class="w-full px-4 lg:w-1/3">
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden mb-10">
                    <div class="flex items-center justify-center h-auto mt-8">
                        <div class="rounded-full w-12 h-12 bg-slate-200 flex text-center justify-center items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-sd">
                                <path fill-rule="evenodd" d="M3 6a3 3 0 013-3h2.25a3 3 0 013 3v2.25a3 3 0 01-3 3H6a3 3 0 01-3-3V6zm9.75 0a3 3 0 013-3H18a3 3 0 013 3v2.25a3 3 0 01-3 3h-2.25a3 3 0 01-3-3V6zM3 15.75a3 3 0 013-3h2.25a3 3 0 013 3V18a3 3 0 01-3 3H6a3 3 0 01-3-3v-2.25zm9.75 0a3 3 0 013-3H18a3 3 0 013 3V18a3 3 0 01-3 3h-2.25a3 3 0 01-3-3v-2.25z" clip-rule="evenodd" />
                              </svg>
                              
                        </div>
                    </div>
                    <div class="pt-5 pb-8 px-6">
                        <h4 class="font-medium text-xl text-black mb-2 text-center">
                            Garansi Kedokteran
                        </h4>
                        <p class="font-normal text-base text-center pt-2">
                            Melalui program ini siswa bisa memilih target kampus kedokteran yang diinginkan & di programkan hingga lolos 
                        </p>
                    </div>
                </div>
            </div>

            <div class="w-full px-4 lg:w-1/3">
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden mb-10">
                    <div class="flex items-center justify-center h-auto mt-8">
                        <div class="rounded-full w-12 h-12 bg-slate-200 flex text-center justify-center items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-sd">
                                <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                              </svg>                                      
                        </div>
                    </div>
                    <div class="pt-5 pb-8 px-6">
                        <h4 class="font-medium text-xl text-black mb-2 text-center">
                            Garansi Kedinasan
                        </h4>
                        <p class="font-normal text-base text-center pt-2">
                            Melalui program ini siswa bisa memilih target kedinasan yang diinginkan dan di programkan hingga lolos
                        </p>
                    </div>
                </div>
            </div>

            <div class="w-full px-4 lg:w-1/3">
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden mb-10">
                    <div class="flex items-center justify-center h-auto mt-8">
                        <div class="rounded-full w-12 h-12 bg-slate-200 flex text-center justify-center items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-sd">
                                <path fill-rule="evenodd" d="M14.615 1.595a.75.75 0 01.359.852L12.982 9.75h7.268a.75.75 0 01.548 1.262l-10.5 11.25a.75.75 0 01-1.272-.71l1.992-7.302H3.75a.75.75 0 01-.548-1.262l10.5-11.25a.75.75 0 01.913-.143z" clip-rule="evenodd" />
                              </svg>                                      
                        </div>
                    </div>
                    <div class="pt-5 pb-8 px-6">
                        <h4 class="font-medium text-xl text-black mb-2 text-center">
                            Garansi PTN
                        </h4>
                        <p class="font-normal text-base text-center pt-2">
                            Melalui program ini siswa  bisa memilih PTN dan jurusan terbaik di seluruh Indonesia dan di programkan hingga lolos
                        </p>
                    </div>
                </div>
            </div>
       </div>
    </div>
</section>
<!-- program section end  -->

<!-- program kedokteran section start -->
<section id="dokter" class="pt-16 bg-[radial-gradient(ellipse_at_top_left,_var(--tw-gradient-stops))] from-blue-100 via-white to-white">
    <div class="container">
        <div class="flex flex-wrap">
            <div class="w-full self-start px-4 lg:w-1/2">
                <div class="relative mt-10">
                    <img src="img/pro-kedokteran.png" alt="" class="max-w-full mx-auto lg:mt-9 lg:left-0">
                </div>
            </div>

            <div class="w-full self-center px-4 lg:w-1/2">
                <h5 class="text-lg font-semibold text-primary mb-2 pt-10 lg:mt-0 mt-3">PROGRAM</h5>
                <h1 class="lg:text-5xl text-2xl font-semibold text-black max-w-lg">Program Garansi Kedokteran</h1>
                <p class="text-lg font-normal text-body pt-6 lg:mb-[143px] mb-7">
                    Wujudkan mimpi untuk memasuki Fakultas Kedokteran dengan mengikuti Supercamp Radian Edu Solution. Supercamp membantu siswa/i agar bisa masuk Fakultas Kedokteran Universitas favorit di Indonesia.
                </p>
                <div class="flex">
                    <a href="https://wa.me/+6281779007135?text=Halo%20radian%20%0A%0ANama%20%3A%20%0AAsal%20Kota%20%3A%20%0ASekolah%20dan%20Kelas%20%3A%20%0AOrang%20Tua%20%2F%20Siswa%20%3F%20%3A%0ASaya%20mengetahui%20program%20ini%20melalui%20website%20privatgaransi.radianedu.com%20" class="lg:text-base text-xs font-semibold text-white bg-primary rounded-lg py-3 px-2 lg:mt-14 text-center self-center lg:mb-0 mb-2 mr-6 w-[151px] h-[48px]">DAFTAR PRIVAT</a>
                    <a href="https://wa.me/+6281779007135?text=Halo%20radian%20%0A%0ANama%20%3A%20%0AAsal%20Kota%20%3A%20%0ASekolah%20dan%20Kelas%20%3A%20%0AOrang%20Tua%20%2F%20Siswa%20%3F%20%3A%0ASaya%20mengetahui%20program%20ini%20melalui%20website%20privatgaransi.radianedu.com%20" class="lg:text-base text-sm font-semibold text-primary border border-primary py-3 px-2 rounded-lg lg:mt-14 text-center w-[151px] h-[48px]">KONSULTASI</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- program kedokteran section end -->

<!-- program kedinasan section start -->
<section id="dinas" class="pt-16 bg-gradient-to-tl from-red-100 via-white to-white">
    <div class="container">
        <div class="flex flex-wrap">
            <div class="w-full self-center px-4 order-2 lg:order-1 lg:w-1/2">
                <h5 class="text-lg font-semibold text-primary mb-2 pt-10 lg:mt-0 mt-3">PROGRAM</h5>
                <h1 class="lg:text-5xl text-2xl font-semibold text-black max-w-lg">Program Garansi Kedinasan</h1>
                <p class="text-lg font-normal text-body pt-6 lg:mb-[143px] mb-7">
                    Radian Edu Solution menggaransi siswa/i agar bisa masuk ke Sekolah Kedinasan di Indonesia. Dengan berbagai fasilitas yang disediakan, Radian Edu Solution berkomitmen untuk mencerahkan masa depan siswa/i Indonesia.
                </p>
                <div class="flex">
                    <a href="https://wa.me/+6281779007135?text=Halo%20radian%20%0A%0ANama%20%3A%20%0AAsal%20Kota%20%3A%20%0ASekolah%20dan%20Kelas%20%3A%20%0AOrang%20Tua%20%2F%20Siswa%20%3F%20%3A%0ASaya%20mengetahui%20program%20ini%20melalui%20website%20privatgaransi.radianedu.com%20" class="lg:text-base text-xs font-semibold text-white bg-primary rounded-lg py-3 px-2 lg:mt-14 text-center lg:mb-0 mb-2 mr-6 w-[151px] h-[48px]">DAFTAR PRIVAT</a>
                    <a href="https://wa.me/+6281779007135?text=Halo%20radian%20%0A%0ANama%20%3A%20%0AAsal%20Kota%20%3A%20%0ASekolah%20dan%20Kelas%20%3A%20%0AOrang%20Tua%20%2F%20Siswa%20%3F%20%3A%0ASaya%20mengetahui%20program%20ini%20melalui%20website%20privatgaransi.radianedu.com%20" class="text-base font-semibold text-primary border border-primary py-3 px-2 rounded-lg lg:mt-14 text-center w-[151px] h-[48px]">KONSULTASI</a>
                </div>
            </div>

            <div class="w-full self-start px-4 order-1 lg:order-2 lg:w-1/2">
                <div class="relative mt-10">
                    <img src="img/pro-dinas.png" alt="" class="max-w-full mx-auto lg:mt-9 lg:right-0">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- program kedinasan section end -->

<!-- program ptn section start -->
<section id="ptn" class="pt-16 pb-14 bg-gradient-to-bl from-red-100 via-white to-blue-100">
    <div class="container">
        <div class="flex flex-wrap">
            <div class="w-full self-start px-4 lg:w-1/2">
                <div class="relative mt-10">
                    <img src="img/pro-ptn.png" alt="" class="max-w-full mx-auto lg:mt-9 lg:left-0">
                </div>
            </div>
            <div class="w-full self-start px-4 lg:w-1/2">
                <h5 class="text-lg font-semibold text-primary mb-2 pt-10 lg:mt-0 mt-3">PROGRAM</h5>
                <h1 class="lg:text-5xl text-2xl font-semibold text-black max-w-lg">Program Garansi PTN Favorit</h1>
                <p class="text-lg font-normal text-body pt-6 lg:mb-[143px] mb-7">
                    Garansi PTN favorit di Radian Edu Solution menjamin siswa/i untuk bisa masuk di PTN favorit di Indonesia, antara lain UI, UGM, ITB, IPB, ITS, UNAIR, UB dll.
                </p>
                <div class="flex">
                    <a href="https://wa.me/+6281779007135?text=Halo%20radian%20%0A%0ANama%20%3A%20%0AAsal%20Kota%20%3A%20%0ASekolah%20dan%20Kelas%20%3A%20%0AOrang%20Tua%20%2F%20Siswa%20%3F%20%3A%0ASaya%20mengetahui%20program%20ini%20melalui%20website%20privatgaransi.radianedu.com%20" class="lg:text-base text-xs font-semibold text-white bg-primary rounded-lg py-3 px-2 lg:mt-14 text-center lg:mb-0 mb-2 mr-6 w-[151px] h-[48px]">DAFTAR PRIVAT</a>
                    <a href="https://wa.me/+6281779007135?text=Halo%20radian%20%0A%0ANama%20%3A%20%0AAsal%20Kota%20%3A%20%0ASekolah%20dan%20Kelas%20%3A%20%0AOrang%20Tua%20%2F%20Siswa%20%3F%20%3A%0ASaya%20mengetahui%20program%20ini%20melalui%20website%20privatgaransi.radianedu.com%20" class="text-base font-semibold text-primary border border-primary py-3 px-2 rounded-lg lg:mt-14 text-center w-[151px] h-[48px]">KONSULTASI</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- program ptn section end  -->

<!-- program unggulan section start -->
<section id="pro-unggul" class="pt-16 bg-slate-100">
    <div class="container">
        <div class="flex flex-wrap">
            <div class="w-full self-center px-4 order-2 lg:order-1 lg:w-1/2">
                <h5 class="text-lg font-semibold text-primary">PROGRAM UNGGULAN</h5>
                <h1 class="lg:text-5xl text-2xl font-semibold text-black mt-2">Pelajari Dua Program Unggul di Radian</h1>
                <p class="text-lg font-normal text-body mt-6">Kenali lebih dalam program-program bergaransi Radian Edu Solution. Program tersebut antara lain Privat Garansi dan Camp Garansi. 
                </p>
                <div class="flex flex-wrap pt-4">
                    <div class="mb-4 relative">
                        <div class="absolute align-middle rounded-md bg-slate-200 w-12 h-12 flex justify-center items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-sd">
                                <path fill-rule="evenodd" d="M14.615 1.595a.75.75 0 01.359.852L12.982 9.75h7.268a.75.75 0 01.548 1.262l-10.5 11.25a.75.75 0 01-1.272-.71l1.992-7.302H3.75a.75.75 0 01-.548-1.262l10.5-11.25a.75.75 0 01.913-.143z" clip-rule="evenodd" />
                              </svg>
                        </div>
                        <div class="inline-block align-middle pl-6 ml-10">
                            <h2 class="text-xl font-medium text-black mb-2">Privat Garansi</h2>
                            <p class="text-lg font-normal text-body">Program bimbel privat dimana guru bisa dikirim sampai ke rumah dan menjamin siswa/i masuk ke PTN.</p>
                        </div>
                    </div>
                    <div class="mb-4 relative">
                        <div class="absolute align-middle rounded-md bg-slate-200 w-12 h-12 flex justify-center items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-sd">
                                <path fill-rule="evenodd" d="M14.615 1.595a.75.75 0 01.359.852L12.982 9.75h7.268a.75.75 0 01.548 1.262l-10.5 11.25a.75.75 0 01-1.272-.71l1.992-7.302H3.75a.75.75 0 01-.548-1.262l10.5-11.25a.75.75 0 01.913-.143z" clip-rule="evenodd" />
                              </svg>
                        </div>
                        <div class="inline-block align-middle pl-6 ml-10">
                            <h2 class="text-xl font-medium text-black mb-2">Camp Garansi</h2>
                            <p class="text-lg font-normal text-body">Camp Intensif selama 30 hari sebelum UTBK dan menjamin siswa/i masukke Fakultas Kedokteran di PTN favorit Indonesia.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full self-end px-4 order-1 lg:order-2 lg:w-1/2">
                <div class="relative mt-0">
                    <img src="img/pro-unggul.jpg" alt="" class="max-w-full mx-auto lg:mt-9 lg:right-0">
                </div>
            </div>
        </div>
        
        
    </div>
</section>
<!-- program unggulan section end -->

<!-- kelebihan section start -->
<section id="#" class="pt-24 pb-14">
    <div class="container">
        <div class="w-full px-4">
            <div class="max-w-3xl mx-auto text-center mb-16">
                <h5 class="text-lg font-semibold text-primary">KELEBIHAN PRIVAT GARANSI</h5>
                <h1 class="lg:text-5xl text-2xl font-semibold text-black pt-2">Apa Keunggulan Camp Garansi di Radian?</h1>
                <p class="text-lg font-normal text-body pt-2">Inilah alasan mengapa kamu harus ikut program Supercamp Garansi di Radian Edu!</p>
            </div>
        </div>

        <div class="flex flex-wrap">
            <div class="w-full px-4 lg:w-1/3">
                <div class="overflow-hidden mb-10">
                    <div class="flex items-center justify-center h-auto mt-8">
                        <div class="rounded-full w-12 h-12 bg-slate-200 flex justify-center items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-sd">
                                <path fill-rule="evenodd" d="M3 6a3 3 0 013-3h2.25a3 3 0 013 3v2.25a3 3 0 01-3 3H6a3 3 0 01-3-3V6zm9.75 0a3 3 0 013-3H18a3 3 0 013 3v2.25a3 3 0 01-3 3h-2.25a3 3 0 01-3-3V6zM3 15.75a3 3 0 013-3h2.25a3 3 0 013 3V18a3 3 0 01-3 3H6a3 3 0 01-3-3v-2.25zm9.75 0a3 3 0 013-3H18a3 3 0 013 3V18a3 3 0 01-3 3h-2.25a3 3 0 01-3-3v-2.25z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>
                    <div class="pt-5 pb-8 px-6">
                        <h2 class="text-xl font-medium text-black text-center mb-2">Pre-test & Mapping</h2>
                        <p class="text-base font-normal text-body text-center pt-2">Terdapat Pre-test di awal program untuk menentukan tingkat kemampuan siswa/i (Assesment awal).</p>
                    </div>
                </div>
                
            </div>

            <div class="w-full px-4 lg:w-1/3">
                <div class="overflow-hidden mb-10">
                    <div class="flex items-center justify-center h-auto mt-8">
                        <div class="rounded-full w-12 h-12 bg-slate-200 flex justify-center items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-sd">
                                <path fill-rule="evenodd" d="M3 6a3 3 0 013-3h2.25a3 3 0 013 3v2.25a3 3 0 01-3 3H6a3 3 0 01-3-3V6zm9.75 0a3 3 0 013-3H18a3 3 0 013 3v2.25a3 3 0 01-3 3h-2.25a3 3 0 01-3-3V6zM3 15.75a3 3 0 013-3h2.25a3 3 0 013 3V18a3 3 0 01-3 3H6a3 3 0 01-3-3v-2.25zm9.75 0a3 3 0 013-3H18a3 3 0 013 3V18a3 3 0 01-3 3h-2.25a3 3 0 01-3-3v-2.25z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>
                    <div class="pt-5 pb-8 px-6">
                        <h2 class="text-xl font-medium text-black text-center mb-2">TryOut & Pemetaan</h2>
                        <p class="text-base font-normal text-body text-center pt-2">Try Out tiap bulan dengan soal-soal ter update dan ter akurat dari tim Radian Edu Solution.</p>
                    </div>
                </div>
            </div>

            <div class="w-full px-4 lg:w-1/3">
                <div class="overflow-hidden mb-10">
                    <div class="flex items-center justify-center h-auto mt-8">
                        <div class="rounded-full w-12 h-12 bg-slate-200 flex justify-center items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-sd">
                                <path fill-rule="evenodd" d="M3 6a3 3 0 013-3h2.25a3 3 0 013 3v2.25a3 3 0 01-3 3H6a3 3 0 01-3-3V6zm9.75 0a3 3 0 013-3H18a3 3 0 013 3v2.25a3 3 0 01-3 3h-2.25a3 3 0 01-3-3V6zM3 15.75a3 3 0 013-3h2.25a3 3 0 013 3V18a3 3 0 01-3 3H6a3 3 0 01-3-3v-2.25zm9.75 0a3 3 0 013-3H18a3 3 0 013 3V18a3 3 0 01-3 3h-2.25a3 3 0 01-3-3v-2.25z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>
                    <div class="pt-5 pb-8 px-6">
                        <h2 class="text-xl font-medium text-black text-center mb-2">Intensif & Akseleratif</h2>
                        <p class="text-base font-normal text-body text-center pt-2">Program Camp dilakukan selama 30 hari dengan per hari nya terdapat 5 sesi. Program Privat Garansi dilakukan dengan 1 guru dan 1 siswa sehingga lebih intensif.</p>
                    </div>
                </div>
            </div>

            <div class="w-full px-4 lg:w-1/3">
                <div class="overflow-hidden mb-10">
                    <div class="flex items-center justify-center h-auto mt-8">
                        <div class="rounded-full w-12 h-12 bg-slate-200 flex justify-center items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-sd">
                                <path fill-rule="evenodd" d="M3 6a3 3 0 013-3h2.25a3 3 0 013 3v2.25a3 3 0 01-3 3H6a3 3 0 01-3-3V6zm9.75 0a3 3 0 013-3H18a3 3 0 013 3v2.25a3 3 0 01-3 3h-2.25a3 3 0 01-3-3V6zM3 15.75a3 3 0 013-3h2.25a3 3 0 013 3V18a3 3 0 01-3 3H6a3 3 0 01-3-3v-2.25zm9.75 0a3 3 0 013-3H18a3 3 0 013 3V18a3 3 0 01-3 3h-2.25a3 3 0 01-3-3v-2.25z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>
                    <div class="pt-5 pb-8 px-6">
                        <h2 class="text-xl font-medium text-black text-center mb-2">Pengajar Profesional</h2>
                        <p class="text-base font-normal text-body text-center pt-2">Pengajar merupakan luliusan dari PTN favorit di Indonesia. Antara lain UI, UGM, UNY, dll.</p>
                    </div>
                </div>
            </div>

            <div class="w-full px-4 lg:w-1/3">
                <div class="overflow-hidden mb-10">
                    <div class="flex items-center justify-center h-auto mt-8">
                        <div class="rounded-full w-12 h-12 bg-slate-200 flex justify-center items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-sd">
                                <path fill-rule="evenodd" d="M3 6a3 3 0 013-3h2.25a3 3 0 013 3v2.25a3 3 0 01-3 3H6a3 3 0 01-3-3V6zm9.75 0a3 3 0 013-3H18a3 3 0 013 3v2.25a3 3 0 01-3 3h-2.25a3 3 0 01-3-3V6zM3 15.75a3 3 0 013-3h2.25a3 3 0 013 3V18a3 3 0 01-3 3H6a3 3 0 01-3-3v-2.25zm9.75 0a3 3 0 013-3H18a3 3 0 013 3V18a3 3 0 01-3 3h-2.25a3 3 0 01-3-3v-2.25z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>
                    <div class="pt-5 pb-8 px-6">
                        <h2 class="text-xl font-medium text-black text-center mb-2">Dengan Modul Terbaru</h2>
                        <p class="text-base font-normal text-body text-center pt-2">Modul yang berisikan soal-soal ter update dan ter akurat yang disusun oleh tim akademik Radian Edu Solution sehingga membantu proses belajar.</p>
                    </div>
                </div>
            </div>

            <div class="w-full px-4 lg:w-1/3">
                <div class="overflow-hidden mb-10">
                    <div class="flex items-center justify-center h-auto mt-8">
                        <div class="rounded-full w-12 h-12 bg-slate-200 flex justify-center items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-sd">
                                <path fill-rule="evenodd" d="M3 6a3 3 0 013-3h2.25a3 3 0 013 3v2.25a3 3 0 01-3 3H6a3 3 0 01-3-3V6zm9.75 0a3 3 0 013-3H18a3 3 0 013 3v2.25a3 3 0 01-3 3h-2.25a3 3 0 01-3-3V6zM3 15.75a3 3 0 013-3h2.25a3 3 0 013 3V18a3 3 0 01-3 3H6a3 3 0 01-3-3v-2.25zm9.75 0a3 3 0 013-3H18a3 3 0 013 3V18a3 3 0 01-3 3h-2.25a3 3 0 01-3-3v-2.25z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>
                    <div class="pt-5 pb-8 px-6">
                        <h2 class="text-xl font-medium text-black text-center mb-2">Konsultasi</h2>
                        <p class="text-base font-normal text-body text-center pt-2">Sesi konsultasi dengan tim akademik Radian Edu Solution untuk menemukan solusi paling tepat dalam belajar.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- kelebihan section end -->

<!-- keunggulan section start -->
<section id="#" class="pt-16 mb-12 bg-slate-100">
    <div class="container">
        <div class="w-full px-4">
            <div class="max-w-3xl mx-auto text-center mb-16">
                <h5 class="text-lg font-semibold text-primary">PROGRAM UNGGULAN</h5>
                <h1 class="lg:text-5xl text-2xl font-semibold text-black">Kenali Lebih Dalam Tentang Les Privat di Radian</h1>
            </div>
        </div>
        <div class="relative w-full overflow-hidden">
            <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-12 opacity-0 z-0 cursor-pointer">
            <div class="mb-4 rounded-sm bg-gradient-to-tl from-red-100 via-white to-blue-100 py-9 h-12 w-full pl-5 flex items-center">
                <h1 class="text-xl font-medium text-black">Apa Target Utama Dari Program Privat Garansi Radian Edu?</h1>
            </div>
            <div class="absolute top-3 right-3 rounded-full bg-second transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-black">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                  </svg>                          
            </div>
            <div class="bg-gradient-to-tl from-red-100 via-white to-blue-100 overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-40">
                <div class="p-4">
                    <p class="text-lg font-normal text-body">Radian Edu Solution memiliki target untuk membantu siswa/i agar bisa lolos ke PTN favorit di Indonesia.</p>
                </div>
            </div>
        </div>
        <div class="relative w-full overflow-hidden mt-7">
            <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-12 opacity-0 z-0 cursor-pointer">
            <div class="mb-4 rounded-sm bg-gradient-to-tl from-red-100 via-white to-blue-100 py-9 h-12 w-full pl-5 flex items-center">
                <h1 class="text-xl font-medium text-black">Fasilitas Privat Camp Garansi Radian Edu</h1>
            </div>
            <div class="absolute top-3 right-3 rounded-full bg-second transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-black">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                  </svg>                          
            </div>
            <div class="bg-gradient-to-tl from-red-100 via-white to-blue-100 overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-40">
                <div class="p-4">
                    <p class="text-lg font-normal text-body">Penginapan, Tryout, Konsultasi, Modul, Makan 3 Kali sehari, Laundry serta garansi lolos </p>
                </div>
            </div>
        </div>
        <div class="relative w-full overflow-hidden mt-7">
            <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-12 opacity-0 z-0 cursor-pointer">
            <div class="mb-4 rounded-sm bg-gradient-to-tl from-red-100 via-white to-blue-100 py-9 h-12 w-full pl-5 flex items-center">
                <h1 class="text-xl font-medium text-black">Akomodasi Pelaksanaan Privat Camp Garansi PTN</h1>
            </div>
            <div class="absolute top-3 right-3 rounded-full bg-second transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-black">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                  </svg> 
            </div>
            <div class="bg-gradient-to-tl from-red-100 via-white to-blue-100 overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-40">
                <div class="p-4">
                    <p class="text-lg font-normal text-body">Terdapat fasilitas dan pendampingan dari mulai penjemputan serta pengantaran siswa/i yang mengikuti Camp Garansi dari liuar kota.</p>
                </div>
            </div>
        </div>
        <div class="relative w-full overflow-hidden mt-7">
            <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-12 opacity-0 z-0 cursor-pointer">
            <div class="mb-4 rounded-sm bg-gradient-to-tl from-red-100 via-white to-blue-100 py-9 h-12 w-full pl-5 flex items-center">
                <h1 class="text-xl font-medium text-black">Pelaksanaan Pelaksanaan Privat Camp PTN</h1>
            </div>
            <div class="absolute top-3 right-3 rounded-full bg-second transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                </svg>
            </div>
            <div class="bg-gradient-to-tl from-red-100 via-white to-blue-100 overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-40">
                <p class="text-lg font-normal text-body">Pelaksanaan Camp dilakukan 30 hari sebelum UTBK ataupun ujian mandiri dengan jangka waktu 1 bulan.</p>
            </div>
        </div>

    </div>
</section>
<!-- keunggulan section end -->

<!-- hot promo section start -->
<section id="promo" class="pt-16 mb-16">
    <div class="container">
        <div class="flex flex-wrap">
            <div class="w-full self-start px-4 lg:w-1/2">
                <div class="relative mt-10">
                    <img src="img/pro-promo.png" alt="" class="max-w-full mx-auto lg:mt-9 lg:left-0">
                </div>
            </div>

            <div class="w-full self-center px-4 lg:w-1/2">
                <h5 class="text-lg font-semibold text-primary pt-10 mb-2">HOT PROMO</h5>
                <h1 class="lg:text-5xl text-2xl font-semibold text-black max-w-sm">Investasi Program Camp Garansi</h1>
                <h5 class="text-lg font-semibold text-body">Mulai Dari <span class="text-sd line-through">Rp. 7.500.000</span> </h5>
                <h1 class="lg:text-5xl text-2xl font-semibold text-black mb-2">Rp. 5.000.000</h1>
                <p class="text-lg font-normal text-body mb-12">Ikuti supercamp mulai dari 5 juta saja dengan berbagai fasilitas menarik, yang membuat anak bapak/ibu nyaman dalam sesi pembelajaran. tersedia berbagai paket yaitu PASTI, MULIA dan CEMERLANG.</p>
                <a href="https://wa.me/+6281779007135?text=Halo%20radian%20%0A%0ANama%20%3A%20%0AAsal%20Kota%20%3A%20%0ASekolah%20dan%20Kelas%20%3A%20%0AOrang%20Tua%20%2F%20Siswa%20%3F%20%3A%0ASaya%20mengetahui%20program%20ini%20melalui%20website%20supercamp%20" class="text-base font-semibold text-white bg-primary py-3 px-4 rounded-lg mt-12">DAFTAR SEKARANG</a>
            </div>
        </div>
    </div>
</section>
<!-- hot promo section end -->

<!-- testimoni section start -->
<section id="#" class="pt-16 mb-24">
    <div class="container">
        <div class="flex flex-wrap">
            <div class="w-full px-4 mb-10 lg:w-1/3">
                <h2 class="font-semibold text-black lg:text-5xl text-2xl mb-14">Apa Kata Mereka Tentang Radian</h2>
            </div>
            <div class="w-full px-4 mb-10 lg:w-1/3">
                <p class="font-normal text-body text-lg mb-14 max-w-md">Radian telah memberikan banyak impect untuk membantu para pelajar agar mencapai target dan tujuannya.</p>
            </div>
            <div class="w-full px-4 mb-10 lg:w-1/3">
                <div class="w-full text-right">
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
                            <h3 class="mb-1 font-normal text-xl text-black text-center">Kevin E. Silaen</h3>
                            <h4 class="mb-6 font-normal text-lg text-body text-center group-hover:text-white">Universitas Airlangga</h4>
                            <p class="mb-16 font-normal text-lg text-body text-center group-hover:text-white">“Belajar di Radian Edu Solution sangat membantu saya untuk masuk di kampus impian. Terima kasih Radian”</p>
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
                                <h3 class=" mb-1 font-normal text-xl text-black text-center">Putri Dyah M.</h3>
                                <h4 class="mb-6 font-normal text-lg text-body text-center group-hover:text-white">Universitas Gadjah Mada</h4>
                                <p class="mb-9 font-normal text-lg text-body text-center group-hover:text-white">“Engga akan nyesel buat belajar di Radian Edu Solution. Guru-guru yang komunikatif beserta soal-soal yang ter update, jadi lebih seru belajarnya”</p>
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
                                <h3 class="mb-1 font-normal text-xl text-black text-center">Ardila</h3>
                                <h4 class="mb-6 font-normal text-lg text-body text-center group-hover:text-white">UB - Psikologi</h4>
                                <p class="mb-9 font-normal text-lg text-body text-center group-hover:text-white">"Sejak bergabung di Radian, nilai-nilai akademik saya meningkat secara signifikan dan saya merasa lebih percaya diri dalam menghadapi ujian.”</p>
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
                                <h3 class="mb-1 font-normal text-xl text-black text-center">Naira</h3>
                                <h4 class="mb-6 font-normal text-lg text-body text-center group-hover:text-white">UNTAN - Kedokteran</h4>
                                <p class="mb-9 font-normal text-lg text-body text-center group-hover:text-white">"Sejak bergabung di Radian, nilai-nilai akademik saya meningkat secara signifikan dan saya merasa lebih percaya diri dalam menghadapi ujian.”</p>
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
                                <h3 class="mb-1 font-normal text-xl text-black text-center">Ruth</h3>
                                <h4 class="mb-6 font-normal text-lg text-body text-center group-hover:text-white">UB - Bioteknologi</h4>
                                <p class="mb-9 font-normal text-lg text-body text-center group-hover:text-white">“Saya sangat senang bergabung di Radian karena, tutor sangat terampil dan sabar dalam membimbing saya memahami materi ujian.”</p>
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
<section id="#" class="bg-slate-100">
    <div class="container">
        <div class="flex flex-wrap">
            <div class="w-full self-center px-4 lg:w-1/2">
                <h5 class="text-lg font-semibold text-primary mt-32">GALLERY</h5>
                <h1 class="lg:text-5xl text-2xl font-semibold text-black max-w-sm mb-4">Gallery Radian Edu</h1>
                <p class="text-lg font-normal text-body max-w-xs mb-5">Seiring berjalannya waktu Radian Edu Solution telah membantu teman-teman untuk masuk ke PTN impiannya.</p>
            </div>

            <div class="w-full self-center px-4 lg:w-1/2">
                <div class="h-96 grid grid-cols-2 gap-2 bg-slate-100 overflow-y-scroll top-0">
                    <img src="img/priv-1.png" alt="" class="w-full h-full">
                    <img src="img/priv-2.png" alt="" class="w-full h-full">
                    <img src="img/priv-3.png" alt="" class="w-full h-full">
                    <img src="img/priv-4.png" alt="" class="w-full h-full">
                    <img src="img/priv-5.png" alt="" class="w-full h-full">
                    <img src="img/priv-6.png" alt="" class="w-full h-full">
                    <img src="img/priv-7.png" alt="" class="w-full h-full">
                    <img src="img/priv-8.png" alt="" class="w-full h-full">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- galery section end  -->

<!-- belajar section start -->
<section id="#" class="mt-2">
    <div class="container">
        <div class="flex flex-wrap">
            <div class="w-full self-start lg:w-1/2">
                <h1 class="text-black lg:text-5xl text-2xl font-semibold mt-44 mb-20">Masih Bingung Mulai Belajar Dari Mana?</h1>
            </div>
            <div class="w-full lg:text-right lg:w-1/2">
                <button class="text-base text-white font-medium border bg-primary px-4 py-2 rounded-lg items-center lg:mt-52 mt-5"><a href="https://wa.me/+6281779007135?text=Halo%20radian%20%0A%0ANama%20%3A%20%0AAsal%20Kota%20%3A%20%0ASekolah%20dan%20Kelas%20%3A%20%0AOrang%20Tua%20%2F%20Siswa%20%3F%20%3A%0ASaya%20mengetahui%20program%20ini%20melalui%20website%20supercamp%20">Daftar Sekarang</a></button>
            </div>
        </div>
    </div>
</section>
<!-- belajar section end -->

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

<script src="{{asset('/js/supercamp.js')}}"></script>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

 @endsection