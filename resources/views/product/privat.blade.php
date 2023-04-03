@extends('product.layout.template')
@section('content')

<!-- navbar section start -->
<header class="fixed z-50 w-full pb-6">
    <div class="w-full text-gray-700 bg-white dark-mode:text-gray-200 dark-mode:bg-gray-800">
        <div x-data="{ open: false }" class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
            <div class="flex flex-row items-center justify-between p-4">
                <a href="{{ route('home') }}">
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
                <a class="px-4 py-2 mt-2 text-sm font-semibold md:mt-0 md:ml-4 hover:text-primary text-body focus:outline-none focus:shadow-outline" href="#hero">Home</a>
                <a class="px-4 py-2 mt-2 text-sm font-semibold md:mt-0 md:ml-4 hover:text-primary text-body focus:outline-none focus:shadow-outline" href="#alumni">Kedokteran</a>
                <a class="px-4 py-2 mt-2 text-sm font-semibold md:mt-0 md:ml-4 hover:text-primary text-body focus:outline-none focus:shadow-outline" href="#testi">Kedinasan</a>
                <a class="px-4 py-2 mt-2 text-sm font-semibold md:mt-0 md:ml-4 hover:text-primary text-body focus:outline-none focus:shadow-outline" href="#unggul">PTN Favorit</a>
                <a class="px-4 py-2 mt-2 text-sm font-semibold md:mt-0 md:ml-4 hover:text-primary text-body focus:outline-none focus:shadow-outline" href="#program">Promo</a>
                <a class="px-4 py-2 mt-2 text-sm font-semibold md:mt-0 md:ml-4 w-[136px] h-[38px] border text-white bg-primary rounded-lg">KONSULTASI</a>
            </nav>
        </div>
</div>
</header>

<!-- navbar section end -->

<!-- hero section start -->
<section id="hero" class="bg-blue-400">
    <div class="container">
        <div class="flex flex-wrap">
            <div class="w-full self-end px-4 order-2 lg:order-1 lg:w-1/2">
                <h1 class="lg:text-6xl text-2xl font-bold text-white lg:mt-32 mt-3">Selamat Datang, Di Program Privat Garansi Radian.</h1>
                <p class="text-lg font-normal text-white mt-9 mb-14">Les Privat bergaransi, tersedia beberapa program seperti kedokteran, PTN dan kedinasan dengan metode belajar terbaik guna Menuju Masa Depan yang Cemerlang dan Mulia.</p>
                <div class="flex px-2">
                    <a href="#pro-unggul" class="lg:text-base text-sm font-normal text-black bg-white lg:py-4 py-2 lg:px-4 px-2 mb-32 mr-3 rounded-lg">Uji Coba Gratis</a>
                    <a href="https://wa.me/+6281779007135?text=Halo%20radian%20%0A%0ANama%20%3A%20%0AAsal%20Kota%20%3A%20%0ASekolah%20dan%20Kelas%20%3A%20%0AOrang%20Tua%20%2F%20Siswa%20%3F%20%3A%0ASaya%20mengetahui%20program%20ini%20melalui%20website%20privatgaransi.radianedu.com%20" class="text-base font-normal text-white border border-white lg:py-4 py-2 lg:px-4 px-2 mb-32 rounded-lg">Lihat Program</a>
                </div>
            </div>
            <div class="w-full self-end px-4 order-1 lg:order-2 lg:w-1/2">
                <div class="relative mt-10">
                    <img src="img/priv-hero.png" alt="" class="max-w-full max-h-full w-full h-full mx-auto lg:right-0">
                </div>
            </div>            
        </div>
    </div>
        

</section>
<!-- hero section end -->

<!-- program section start -->
<section id="#" class="pt-16 bg-slate-100">
    <div class="container">
        <div class="w-full px-4">
            <div class="max-w-2xl mx-auto text-center mb-16">
                <h1 class="font-semibold lg:text-5xl text-2xl text-black">Program - Program Privat Garansi di Radian</h1>
                <p class="font-normal text-lg text-body pt-4">
                    Berikut ini merupakan program-program unggulan Radian Edu 
                </p>
            </div>
        </div>

        <div class="flex flex-wrap">
            <div class="w-full px-4 lg:w-1/3">
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden mb-10">
                    <div class="flex items-center justify-center h-auto mt-8">
                        <div class="rounded-full w-12 h-12 bg-slate-200 flex text-center justify-center items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-second">
                                <path fill-rule="evenodd" d="M3 6a3 3 0 013-3h2.25a3 3 0 013 3v2.25a3 3 0 01-3 3H6a3 3 0 01-3-3V6zm9.75 0a3 3 0 013-3H18a3 3 0 013 3v2.25a3 3 0 01-3 3h-2.25a3 3 0 01-3-3V6zM3 15.75a3 3 0 013-3h2.25a3 3 0 013 3V18a3 3 0 01-3 3H6a3 3 0 01-3-3v-2.25zm9.75 0a3 3 0 013-3H18a3 3 0 013 3V18a3 3 0 01-3 3h-2.25a3 3 0 01-3-3v-2.25z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>
                    <div class="pt-5 pb-8 px-6">
                        <h4 class="font-medium text-xl text-black mb-2 text-center">
                            Program Privat Kedokteran
                        </h4>
                        <p class="font-normal text-base text-center text-body pt-2">
                            Pengajar pendamping yang professional dan berpengalaman adalah kunci sukses lolos Kedokteran.
                        </p>
                    </div>
                </div>
            </div>

            <div class="w-full px-4 lg:w-1/3">
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden mb-10">
                    <div class="flex items-center justify-center h-auto mt-8">
                        <div class="rounded-full w-12 h-12 bg-slate-200 flex text-center justify-center items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-second">
                                <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>
                    <div class="pt-5 pb-8 px-6">
                        <h4 class="font-medium text-xl text-black mb-2 text-center">
                            Program Privat Kedinasan
                        </h4>
                        <p class="font-normal text-base text-center text-body pt-2">
                            Privat Kedinasan dengan sistem pembelajaran privat maupun mini group class group.
                        </p>
                    </div>
                </div>
            </div>

            <div class="w-full px-4 lg:w-1/3">
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden mb-10">
                    <div class="flex items-center justify-center h-auto mt-8">
                        <div class="rounded-full w-12 h-12 bg-slate-200 flex text-center justify-center items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-second">
                                <path fill-rule="evenodd" d="M14.615 1.595a.75.75 0 01.359.852L12.982 9.75h7.268a.75.75 0 01.548 1.262l-10.5 11.25a.75.75 0 01-1.272-.71l1.992-7.302H3.75a.75.75 0 01-.548-1.262l10.5-11.25a.75.75 0 01.913-.143z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>
                    <div class="pt-5 pb-8 px-6">
                        <h4 class="font-medium text-xl text-black mb-2 text-center">
                            Program Privat PTN Favorit 
                        </h4>
                        <p class="font-normal text-base text-center pt-2 text-body mb-6">
                            Program Garansi PTN Favorit yang didampingi pengajar kompeten.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- program section end  -->

<!-- program kedokteran section start -->
<section id="dokter" class="pt-16">
    <div class="container">
        <div class="flex flex-wrap">
            <div class="w-full self-start px-4 lg:w-1/2">
                <div class="relative mt-10">
                    <img src="img/priv-kedokteran.png" class="max-w-full mx-auto lg:left-0">
                </div>
            </div>
            
            <div class="w-full self-center px-4 lg:w-1/2">
                <h5 class="text-lg font-semibold text-primary lg:mt-0 mt-3">PROGRAM PRIVAT</h5>
                <h1 class="lg:text-5xl text-2xl font-semibold text-black max-w-sm mt-2">Program Garansi Kedokteran</h1>
                <p class="text-lg font-normal text-body pt-6 lg:mb-36 mb-7">
                    Motivasi dan semangat belajar yang tinggi, fokus terhadap tujuan utama serta pengajar pendamping yang profesional dan berpengalaman adalah kunci sukses lolos Kedokteran.
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
<section id="dinas" class="pt-16">
    <div class="container">
        <div class="flex flex-wrap">
            <div class="w-full self-center px-4 order-2 lg:order-1 lg:w-1/2">
                <h5 class="text-lg font-semibold text-primary mb-2 pt-10 lg:mt-0 mt-3">PROGRAM PRIVAT</h5>
                <h1 class="lg:text-5xl text-2xl font-semibold text-black max-w-xl">Program Garansi Kedinasan</h1>
                <p class="text-lg font-normal text-body pt-6 lg:mb-36 mb-7">Program Garansi STAN/Kedinasan dengan sistem pembelajaran privat maupun group class. Siswa belajar dengan kondisi profesional, fokus terhadap tujuan dan pengajar pendamping yang kompeten untuk persiapan ujian masuk STAN</p>
                <div class="flex">
                    <a href="https://wa.me/+6281779007135?text=Halo%20radian%20%0A%0ANama%20%3A%20%0AAsal%20Kota%20%3A%20%0ASekolah%20dan%20Kelas%20%3A%20%0AOrang%20Tua%20%2F%20Siswa%20%3F%20%3A%0ASaya%20mengetahui%20program%20ini%20melalui%20website%20privatgaransi.radianedu.com%20" class="lg:text-base text-xs font-semibold text-white bg-primary rounded-lg py-3 px-2 lg:mt-14 text-center self-center lg:mb-0 mb-2 mr-6 w-[151px] h-[48px]">DAFTAR PRIVAT</a>
                    <a href="https://wa.me/+6281779007135?text=Halo%20radian%20%0A%0ANama%20%3A%20%0AAsal%20Kota%20%3A%20%0ASekolah%20dan%20Kelas%20%3A%20%0AOrang%20Tua%20%2F%20Siswa%20%3F%20%3A%0ASaya%20mengetahui%20program%20ini%20melalui%20website%20privatgaransi.radianedu.com%20" class="lg:text-base text-sm font-semibold text-primary border border-primary py-3 px-2 rounded-lg lg:mt-14 text-center w-[151px] h-[48px]">KONSULTASI</a>
                </div>
            </div>

            <div class="w-full self-start px-4 order-1 lg:order-2 lg:w-1/2">
                <div class="relative mt-10">
                    <img src="img/priv-dinas.png" alt="" class="max-w-full mx-auto lg:right-0">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- program kedinasan section end -->

<!-- program ptn section start -->
<section id="ptn" class="pt-16 pb-14">
    <div class="container">
        <div class="flex flex-wrap">
            <div class="w-full self-start px-4 lg:w-1/2">
                <div class="relative mt-10">
                    <img src="img/priv-ptn.png" alt="" class="max-w-full mx-auto lg:left-0">
                </div>
            </div>
            <div class="w-full self-end px-4 lg:w-1/2">
                <h5 class="text-lg font-semibold text-primary mb-2 lg:mt-0 mt-3">PROGRAM PRIVAT</h5>
                <h1 class="lg:text-5xl text-2xl font-semibold text-black max-w-xl">Program Garansi PTN Favorit</h1>
                <p class="text-lg font-normal text-body pt-6 lg:mb-36 mb-7">
                    Program Garansi PTN Favorit lulus UTBK-SBMPTN. Program belajar dengan privat maupun group class siswa akan belajar dengan kondisi belajar profesional, fokus terhadap tujuan dan pengajar pendamping yang kompeten untuk persiapan ujian masuk PTN Favorit : UI, ITB, IPB dan PTN Favorit lainnya.
                </p>
                <div class="flex">
                    <a href="https://wa.me/+6281779007135?text=Halo%20radian%20%0A%0ANama%20%3A%20%0AAsal%20Kota%20%3A%20%0ASekolah%20dan%20Kelas%20%3A%20%0AOrang%20Tua%20%2F%20Siswa%20%3F%20%3A%0ASaya%20mengetahui%20program%20ini%20melalui%20website%20privatgaransi.radianedu.com%20" class="lg:text-base text-xs font-semibold text-white bg-primary rounded-lg py-3 px-2 lg:mt-14 text-center self-center lg:mb-0 mb-2 mr-6 w-[151px] h-[48px]">DAFTAR PRIVAT</a>
                    <a href="https://wa.me/+6281779007135?text=Halo%20radian%20%0A%0ANama%20%3A%20%0AAsal%20Kota%20%3A%20%0ASekolah%20dan%20Kelas%20%3A%20%0AOrang%20Tua%20%2F%20Siswa%20%3F%20%3A%0ASaya%20mengetahui%20program%20ini%20melalui%20website%20privatgaransi.radianedu.com%20" class="lg:text-base text-sm font-semibold text-primary border border-primary py-3 px-2 rounded-lg lg:mt-14 text-center w-[151px] h-[48px]">KONSULTASI</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- program ptn section end -->

<!-- Program unggulan section start -->
<section id="pro-unggul" class=" bg-slate-100">
    <div class="container">
        <div class="flex flex-wrap">
            <div class="w-full self-center px-4 order-2 lg:order-1 lg:w-1/2">
                <h5 class="text-lg font-semibold text-primary">PROGRAM UNGGULAN</h5>
                <h1 class="lg:text-5xl text-2xl font-semibold text-black mt-2">Pelajari Dua Program Unggul di Radian</h1>
                <p class="text-lg font-normal text-body mt-6 mb-4">
                    Radian menyediakan program unggulan yaitu privat dan camp garansi. Sesuaikan dengan yang paling cocok untuk dirimu-
                </p>
                <div class="flex flex-wrap">
                    <div class="mb-4 relative hover:bg-yellow-200 hover:rounded-lg px-4 py-4">
                        <div class="absolute align-middle rounded-md bg-slate-200 w-12 h-12 flex justify-center items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-sd">
                                <path fill-rule="evenodd" d="M14.615 1.595a.75.75 0 01.359.852L12.982 9.75h7.268a.75.75 0 01.548 1.262l-10.5 11.25a.75.75 0 01-1.272-.71l1.992-7.302H3.75a.75.75 0 01-.548-1.262l10.5-11.25a.75.75 0 01.913-.143z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="inline-block align-middle pl-6 ml-10">
                            <h2 class="text-xl font-medium text-black mb-2">Privat Garansi</h2>
                            <p class="text-lg font-normal text-body">Pembelajaran intensif dengan guru kompeten dan materi belajar yang sesuai serta semangat belajar yang tinggi dari siswa</p>
                        </div>
                    </div>
                    <div class="mb-4 relative hover:bg-yellow-200 hover:rounded-lg px-4 py-4">
                        <div class="absolute align-middle rounded-md bg-slate-200 w-12 h-12 flex justify-center items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-sd">
                                <path fill-rule="evenodd" d="M14.615 1.595a.75.75 0 01.359.852L12.982 9.75h7.268a.75.75 0 01.548 1.262l-10.5 11.25a.75.75 0 01-1.272-.71l1.992-7.302H3.75a.75.75 0 01-.548-1.262l10.5-11.25a.75.75 0 01.913-.143z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="inline-block align-middle pl-6 ml-10">
                            <h2 class="text-xl font-medium text-black mb-2">Camp Garansi</h2>
                            <p class="text-lg font-normal text-body">Program intensif menginap sebelum pelaksanaan ujian dengan metode belajar yang efektif serta pendamping profesional</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full self-end px-4 order-1 lg:order-2 lg:w-1/2">
                <div class="relative mt-10">
                    <img src="img/pro-priv.png" alt="" class="max-w-full mx-auto lg:right-0">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- program unggulan section end  -->

<!-- kelebihan section start -->
<section id="#" class="pt-24 pb-14">
    <div class="container">
        <div class="w-full px-4">
            <div class="max-w-3xl mx-auto text-center mb-16">
                <h5 class="text-lg font-semibold text-primary">KELEBIHAN PRIVAT GARANSI</h5>
                <h1 class="lg:text-5xl text-2xl font-semibold text-black pt-2">Apa Keunggulan Les Privat di Radian?</h1>
                <p class="text-lg font-normal text-body pt-2">Inilah alasan mengapa kamu harus ikut Program Privat Garansi dari Radian Edu</p>
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
                        <h2 class="tetx-xl font-medium text-black text-center mb-2">Pre-test & Mapping</h2>
                        <p class="text-base font-normal text-body text-center pt-2">
                            Pengelompokan belajar berdasarkan kemampuan siswa untuk meningkatkan efektivitas belajar
                        </p>
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
                        <p class="text-base font-normal text-body text-center pt-2">
                            Pemantauan perkembangan belajar dengan tryout rutin serta pemetaan kemampuan siswa
                        </p>
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
                        <p class="text-base font-normal text-body text-center pt-2">
                            Metode pembelajaran yang intensif guna mengefektifkan waktu belajar siswa
                        </p>
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
                        <p class="text-base font-normal text-body text-center pt-2">
                            Pengajar yang terseleksi setelah melalui rangkaian tes guna mengoptimalkan kemampuan siswa
                        </p>
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
                        <p class="text-base font-normal text-body text-center pt-2">
                            Salah satu bahan ajar utama berupa kumpulan soal-soal terupdate
                        </p>
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
                        <p class="text-base font-normal text-body text-center pt-2">
                            Sistem evaluasi rinci serta laporan perkembangan belajar yang mengidentifikasi kelemahan hingga penanganan 
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- kelebihan section end  -->

<!-- question section start -->
<section id="#" class="pt-16 mb-24 bg-slate-100">
    <div class="container ">
        <div class="w-full px-4">
            <div class="max-w-3xl mx-auto text-center mb-16">
                <h5 class="text-lg font-semibold text-primary">PROGRAM UNGGULAN</h5>
                <h1 class="lg:text-5xl text-2xl font-semibold text-black">Kenali Lebih Dalam Tentang Les Privat di Radian</h1>
            </div>
        </div>

        <div class="relative w-full overflow-hidden ">
            <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-12 opacity-0 z-0 cursor-pointer">
            <div class="mb-4 rounded-sm bg-gradient-to-tl from-red-100 via-white to-blue-100 py-9 h-12 w-full pl-5 flex items-center">
                <h1 class="text-xl font-medium text-black">Apa Target Utama Dari Program Privat Garansi Radian Edu?</h1>
            </div>
            <div class="absolute top-3 right-3 text-white rounded-full bg-second transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-black">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                </svg>
            </div>
            <div class="rounded-sm bg-gradient-to-tl from-red-100 via-white to-blue-100 overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-40">
                <div class="p-4">
                    <p class="text-lg font-normal text-body">
                        Privat Garansi Radian Edu Solution memiliki target untuk mensukseskan siswa dan mengoptimalkan proses belajar dalam mencapai target PTN impian dengan pendampingan guru yang kompeten 
                    </p>
                </div>
            </div>
        </div>

        <div class="relative w-full overflow-hidden mt-7">
            <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-12 opacity-0 z-0 cursor-pointer">
            <div class="mb-4 rounded-sm bg-gradient-to-tl from-red-100 via-white to-blue-100 py-9 h-12 w-full pl-5 flex items-center">
                <h1 class="text-xl font-medium text-black">Pelaksanaan kegiatan Program Privat Garansi Radian Edu</h1>
            </div>
            <div class="absolute top-3 right-3 text-white rounded-full bg-second transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-black">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                </svg>
            </div>
            <div class="rounded-sm bg-gradient-to-tl from-red-100 via-white to-blue-100 overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-40">
                <div class="p-4">
                    <p class="text-lg font-normal text-body">
                        Pelaksanaan privat garansi Radian Edu Solution bisa mulai kapan saja dengan jadwal fleksibel. Kegiatan belajar bisa di rumah siswa maupun di kantor Radian
                    </p>
                </div>
            </div>
        </div>

        <div class="relative w-full overflow-hidden mt-7 mb-12">
            <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-12 opacity-0 z-0 cursor-pointer">
            <div class="mb-4 rounded-sm bg-gradient-to-tl from-red-100 via-white to-blue-100 py-9 h-12 w-full pl-5 flex items-center">
                <h1 class="text-xl font-medium text-black">Pilihan Belajar Privat Garansi Radian Edu</h1>
            </div>
            <div class="absolute top-3 right-3 text-white rounded-full bg-second transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-black">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                </svg>
            </div>
            <div class="rounded-sm bg-gradient-to-tl from-red-100 via-white to-blue-100 overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-40">
                <div class="p-4">
                    <p class="text-lg font-normal text-body">
                        Program privat bisa disesuaikan mulai dari 2-5sesi/minggu serta program intensif 1-5sesi/hari. Program bisa disesuaikan dengan waktu dan kemampuan siswa
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- question section end -->

<!-- hot promo section start -->
<section id="promo" class="pt-16 mb-16">
    <div class="container">
        <div class="flex flex-wrap">
            <div class="w-full self-start px-4 lg:w-1/2">
                <div class="relative mt-10">
                    <img src="img/priv-promo.png" alt="" class="max-w-full mx-auto lg:left-0">
                </div>
            </div>

            <div class="w-full self-center px-4 lg:w-1/2">
                <h5 class="text-lg font-semibold text-primary pt-10 mb-2">HOT PROMO</h5>
                <h1 class="lg:text-5xl text-2xl font-semibold text-black max-w-sm">Investasi Untuk Program Les Privat</h1>
                <h5 class="text-lg font-semibold text-body">Mulai Dari <span class="text-sd line-through">Rp. 7.500.000</span> </h5>
                <h1 class="lg:text-5xl text-2xl font-semibold text-black mb-2">Rp. 3.750.000</h1>
                <p class="text-lg font-normal text-body mb-12">Metode belajar intensif dengan pendamping profesional demi mencapai PTN impian. Pilihan tepat untukmu yang ingin mengefektifkan waktu belajar serta tenaga dengan hasil maksimal. Daftarkan dirimu sekarang dan dapatkan promo spesial</p>
                <a href="https://wa.me/+6281779007135?text=Halo%20radian%20%0A%0ANama%20%3A%20%0AAsal%20Kota%20%3A%20%0ASekolah%20dan%20Kelas%20%3A%20%0AOrang%20Tua%20%2F%20Siswa%20%3F%20%3A%0ASaya%20mengetahui%20program%20ini%20melalui%20website%20privatgaransi.radianedu.com%20" class="text-base font-semibold text-white bg-primary py-3 px-4 rounded-lg mt-12">DAFTAR SEKARANG</a>
            </div>
        </div>
    </div>
</section>
<!-- hot promo section end  -->

<!-- testimoni section start -->
<section id="#" class="pt-16 mb-24">
    <div class="container">
        <div class="flex flex-wrap">
            <div class="w-full px-4 lg:mb-10 lg:w-1/2">
                <h2 class="font-semibold text-black lg:text-5xl text-2xl lg:mb-14 mb-4">Apa Kata Mereka Tentang Radian</h2>
            </div>
            <div class="w-full px-4 lg:mb-10 lg:w-1/2">
                <p class="font-normal text-body text-lg mb-14 max-w-md">Radian telah memberikan banyak impect untuk membantu para pelajar agar mencapai target dan tujuannya.</p>
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
<!-- testimoni section end  -->

<!-- galeri section start -->
<section id="#" class="bg-radian">
    <div class="container">
        <div class="flex flex-wrap">
            <div class="w-full self-start px-4 lg:w-1/2">
                <h5 class="text-lg font-semibold text-black mt-32">GALLERY</h5>
                <h1 class="lg:text-5xl text-2xl font-semibold text-white max-w-sm mb-4">Gallery Radian Edu</h1>
                <p class="text-lg font-normal text-white max-w-xs mb-14">Seiring berjalannya waktu Radian Edu Solution telah membantu teman teman untuk masuk ke PTN impiannya.</p>
            </div>

            <div class="w-full self-center px-4 lg:w-1/2">
                <div class="h-96 grid grid-cols-2 gap-2 bg-radian overflow-y-scroll top-0">
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
<!-- galeri section end -->

<!-- belajar section start -->
<section id="#" class="mt-2">
    <div class="container">
        <div class="flex flex-wrap">
            <div class="w-full self-start lg:w-1/2">
                <h1 class="text-black lg:text-5xl text-2xl font-semibold mt-44 mb-20">Masih Bingung Mulai Belajar Dari Mana?</h1>
            </div>
            <div class="w-full lg:text-right lg:w-1/2">
                <button class="text-base text-white font-medium border bg-primary px-4 py-2 rounded-lg items-center lg:mt-52 mt-5" >
                    <a href="https://wa.me/+6281779007135?text=Halo%20radian%20%0A%0ANama%20%3A%20%0AAsal%20Kota%20%3A%20%0ASekolah%20dan%20Kelas%20%3A%20%0AOrang%20Tua%20%2F%20Siswa%20%3F%20%3A%0ASaya%20mengetahui%20program%20ini%20melalui%20website%20privatgaransi.radianedu.com%20">
                        DAFTAR SEKARANG
                    </a>
                </button>
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
                <p class="text-base font-normal text-text">Jl. Akses UI nO. 99, Perkantoran Wisma Kencana Putri,</p>
                <p class="text-base font-normal text-text">Kecamatan Tugu - Cimanggis</p>
                <p class="text-base font-normal text-text">KOta Depok - 16451</p>
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

<script src="{{asset('/js/privat.js')}}"></script>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

 @endsection