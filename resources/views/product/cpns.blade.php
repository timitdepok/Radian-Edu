@extends('product.layout.template')
@section('content')

    {{-- navbar  --}}
    <nav class="fixed w-full bg-white 8x75:h-[90px] drop-shadow-md z-50">
        <div class="max-w-[1280px] 8x75:mx-auto h-full flex items-start 8x75:items-center">
            <div class="w-full flex h-fit flex-col 8x75:flex-row justify-evenly 8x75:justify-between items-start 8x75:items-center">
                {{-- logo  --}}
                <div class="logo px-4 8x75:w-fit w-full h-[80px] flex justify-between items-center 8x75:block 8x75:h-fit border-gray-300 8x75:border-b-0 border-b">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('/img/logo_radian.png') }}" alt="logo" class="w-[70px]">
                    </a> 
                    <div id="btn-navbar" class="cursor-pointer p-4 8x75:hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" id="open-navbar" class="w-6 h-6">
                            <path fill-rule="evenodd" d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z" clip-rule="evenodd" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" id="close-navbar" class="hidden w-6 h-6">
                            <path fill-rule="evenodd" d="M5.47 5.47a.75.75 0 011.06 0L12 10.94l5.47-5.47a.75.75 0 111.06 1.06L13.06 12l5.47 5.47a.75.75 0 11-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 01-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 010-1.06z" clip-rule="evenodd" />
                        </svg>   
                    </div>
                </div>
    
                {{-- menu  --}}
                <div id="menu" class="8x75:block hidden">
                    <ul class="bg-white px-4 8x75:px-0 menu w-full 8x75:w-fit gap-4 flex flex-col 8x75:flex-row justify-between items-start my-6 8x75:my-0 8x75:items-center">
                        <li class="block hover:text-primary font-medium text-black text-base 8x75:w-fit w-full">
                            <a href="#home" class="py-6 8x75:py-3 8x75:w-fit w-full px-3 8x75:px-0">Home</a>
                        </li>
                        <li class="block hover:text-primary font-medium text-black text-base 8x75:w-fit w-full">
                            <a href="#tentang" class="py-6 8x75:py-3 8x75:w-fit w-full px-3 8x75:px-0">Tentang</a>
                        </li>
                        <li class="block hover:text-primary font-medium text-black text-base 8x75:w-fit w-full">
                            <a href="#keunggulan" class="py-6 8x75:py-3 8x75:w-fit w-full px-3 8x75:px-0">Keunggulan</a>
                        </li>
                        <li class="block hover:text-primary font-medium text-black text-base 8x75:w-fit w-full">
                            <a href="#program" class="py-6 8x75:py-3 8x75:w-fit w-full px-3 8x75:px-0">Program</a>
                        </li>
                        <li class="block hover:text-primary font-medium text-black text-base 8x75:w-fit w-full">
                            <a href="#testimoni" class="py-6 8x75:py-3 8x75:w-fit w-full px-3 8x75:px-0">Testimoni</a>
                        </li>
                        <li class="block hover:text-primary font-medium text-black text-base 8x75:w-fit w-full">
                            <a href="#biaya" class="py-6 8x75:py-3 8x75:w-fit w-full px-3 8x75:px-0">Biaya</a>
                        </li>
                    </ul>
                </div>

                {{-- tombol  --}}
                <div id="button" class="button px-4 w-full 8x75:w-fit mb-6 8x75:mb-0 8x75:flex-0 h-fit 8x75:block hidden">
                    <a href="" class="inline-block bg-primary rounded-md px-8 py-3 text-white font-semibold text-base">SIAP CPNS</a>
                </div>
                
            </div>
        </div>
    </nav>
    <div class="h-[80px] 8x75:h-[90px]"></div>

    {{-- hero section  --}}
    <section id="home" style="background-image: url('/img/cpns/bg_hero_section_cpns.png'); background-size: cover;" class="notebook:py-0 py-16 px-4 h-fit sm:min-h-screen">
        <div class="max-w-[1280px] mx-auto h-fit sm:min-h-screen flex items-center">
            <div class="w-full flex flex-col-reverse notebook:flex-row justify-between items-center">
                <div class="text notebook:max-w-lg w-full">
                    <p class="font-semibold text-[19px] text-black mb-4">Welcome To Program <span class="text-primary">CPNS</span></p>
                    <h1 class="font-semibold text-3xl sm:text-5xl max-w-lg mb-6 text-black ">
                        JANGAN KHAWATIR TENTANG TES <span class="text-primary">CPNS</span> 
                    </h1>
                    <p class="text-bodyText text-base mb-10">
                        Persiapkan diri kamu untuk pelaksanaan tes CPNS dengan program Privat CPNS Radian. 
                    </p>
                    <div class="flex h-fit flex-wrap gap-4 items-center">
                        <div class="button w-fit">
                            <a href="" class="inline-block bg-primary rounded-md sm:px-10 px-6 text-white py-3 sm:py-4 font-semibold text-base sm:text-[17px]">MULAI BELAJAR</a>
                        </div>
                        <div class="button w-fit">
                            <a href="" class="inline-block border-2 border-primary rounded-md sm:px-10 px-6 text-primary py-3 sm:py-4 font-semibold text-base sm:text-[17px]">KONSULTASI</a>
                        </div>
                    </div>
                </div>

                <div class="image w-fit notebook:mb-0 mb-8">
                    <img src="{{ asset('/img/cpns/hero_section_cpns.png') }}" alt="hero section" class="w-[500px] 1x136:w-[650px]">
                </div>
            </div>
        </div>
    </section>

    {{-- countdown timer --}}
    <section id="countdown-timer" class="h-fit w-full px-4 bg-gradient-to-r from-primary from-100% to-primary to-10%">
        <div class="max-w-[1280px] flex justify-center items-center min-h-[438px] sm:py-6 mx-auto flex-col">
            <h1 class="font-semibold text-white sm:text-4xl text-2xl text-center mb-9">Hitug Mundur Pelaksanaan CPNS 2023</h1>
            <div class="w-full divide-x divide-y divide-primaryInp bg-white flex h-fit flex-wrap overflow-hidden rounded-md">
                <div class="md:w-1/4 w-1/2  flex flex-col py-6 justify-center items-center h-fit bg-white">
                    <h1 id="days" class="font-bold mb-2 text-4xl sm:text-6xl">0</h1>
                    <p class="font-semibold text-xl sm:text-2xl">DAYS</p>
                </div>
                <div class="md:w-1/4 w-1/2  flex flex-col py-6 justify-center items-center h-fit bg-white">
                    <h1 id="hours" class="font-bold mb-2 text-4xl sm:text-6xl">0</h1>
                    <p class="font-semibold text-xl sm:text-2xl">HOURS</p>
                </div>
                <div class="md:w-1/4 w-1/2  flex flex-col py-6 justify-center items-center h-fit bg-white">
                    <h1 id="minutes" class="font-bold mb-2 text-4xl sm:text-6xl">0</h1>
                    <p class="font-semibold text-xl sm:text-2xl">MINUTES</p>
                </div>
                <div class="md:w-1/4 w-1/2  flex flex-col py-6 justify-center items-center h-fit bg-white">
                    <h1 id="seconds" class="font-bold mb-2 text-4xl sm:text-6xl">0</h1>
                    <p class="font-semibold text-xl sm:text-2xl">SECONDS</p>
                </div>
            </div>
        </div>
    </section>

    {{-- tentang --}}
    <section id="tentang" class="notebook:py-0 py-16 px-4 h-fit sm:min-h-screen">
        <div class="max-w-[1280px] mx-auto h-fit sm:min-h-screen flex items-center">
            <div class="w-full flex flex-col notebook:flex-row justify-between items-center">
                {{-- image  --}}
                <div class="image w-fit notebook:mb-0 mb-8 notebook:mr-4">
                    <img src="{{ asset('/img/cpns/image-tentang1.png') }}" alt="hero section" class="w-[500px] 1x136:w-[600px]">
                </div>

                {{-- text  --}}
                <div class="text notebook:max-w-lg w-full">
                    <p class="font-semibold text-base mb-2 text-primary">Tentang Program CPNS</p>
                    <h1 class="font-bold text-3xl sm:text-4xl w-full notebook:max-w-lg mb-6 text-black ">
                        Wujudkan Impianmu Menjadi ASN Melalui Program Privat CPNS
                    </h1>
                    <p class="text-bodyText text-base mb-8">
                        Persiapkan diri kamu untuk pelaksanaan tes CPNS dengan program Privat CPNS Radian. 
                    </p>
                    <div class="flex h-fit flex-wrap gap-4 items-center">
                        <div class="button w-fit">
                            <a href="" class="inline-block bg-primary rounded-md sm:px-10 px-6 text-white py-3 sm:py-4 font-semibold text-base sm:text-[17px]">Konsultasi CPNS</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="tentang 2" class="notebook:py-0 py-10 px-4 h-fit sm:min-h-screen">
        <div class="max-w-[1280px] mx-auto h-fit sm:min-h-screen flex items-center">
            <div class="w-full flex flex-col-reverse notebook:flex-row justify-between items-center">
                
                {{-- text  --}}
                <div class="text notebook:max-w-lg w-full notebook:mr-4">
                    <p class="font-semibold text-base mb-2 text-primary">Work Schedule</p>
                    <h1 class="font-bold text-3xl sm:text-4xl w-full notebook:max-w-lg mb-6 text-black ">
                        Pilih Program Sesuai Kebutuhan Kamu
                    </h1>
                    <p class="text-bodyText text-base mb-4">
                        Program Privat CPNS dapat membantu kamu mempersiapkan ujian CPNS dengan lebih efektif. Program kami disesuaikan dengan kebutuhan kamu, baik itu belajar secara online maupun offline.
                    </p>
                    <div class="flex h-fit">
                        <ul class="list w-fit">
                            <li class="font-semibold text-lg mb-2"><span class="mr-2">🚀</span>Metode Belajar Online</li>
                            <li class="font-semibold text-lg"><span class="mr-2">🚀</span>Metode Belajar Offline</li>
                        </ul>
                    </div>
                </div>
                
                {{-- image  --}}
                <div class="image w-fit notebook:mb-0 mb-8">
                    <img src="{{ asset('/img/cpns/image-tentang2.png') }}" alt="hero section" class="w-[500px] 1x136:w-[600px]">
                </div>
            </div>
        </div>
    </section>

    {{-- keunggulan  --}}
    <section id="keunggulan" class="bg-gradient-to-r from-primary from-100% to-primary to-10% notebook:py-6 py-10 px-4 h-fit sm:min-h-screen">
        <div class="max-w-[1280px] mx-auto h-fit sm:min-h-screen flex items-center">
            <div class="w-full grid grid-rows-6 sm:grid-rows-3 notebook:grid-rows-2 grid-flow-col gap-4 h-fit">
                <div class="h-fit sm:min-h-[310px] py-4">
                    <h1 class="font-bold text-3xl sm:text-4xl mb-3 text-white">Kenapa Memilih Radian?</h1>
                    <p class="text-base text-white">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique.
                    </p>
                    <div class="w-fit mt-8">
                        <a href="" class="text-base font-semibold bg-primaryYellow py-4 px-6 rounded-md">Konsultasi</a>
                    </div>
                </div>                
                <div class="p-10 bg-white rounded-md min-h-[310px] group hover:bg-primaryYellow">
                    <h1 class="font-medium text-xl sm:text-2xl mb-6 text-dark-blue">Sistem Belajar Personal Coaching</h1>
                    <p class="text-base text-bodyText group-hover:text-black">
                        Kami menawarkan metode pembelajaran personal coaching yang disesuaikan dengan kebutuhan Anda, kami akan membantu Anda mencapai target yang diinginkan.
                    </p>
                </div>        
                <div class="p-10 bg-white rounded-md min-h-[310px] group hover:bg-primaryYellow">
                    <h1 class="font-medium text-xl sm:text-2xl mb-6 text-dark-blue">Tim Pengajar Dan Akademik Profesional</h1>
                    <p class="text-base text-bodyText group-hover:text-black">
                        Tim kami dilengkapi dengan tenaga profesional  dan kompeten sehingga meningkatkan kemampuan kamu secara signifikan.
                    </p>
                </div>        
                <div class="p-10 bg-white rounded-md min-h-[310px] group hover:bg-primaryYellow">
                    <h1 class="font-medium text-xl sm:text-2xl mb-6 text-dark-blue">Simulasi Real Tes CPNS Sistem CAT</h1>
                    <p class="text-base text-bodyText group-hover:text-black">
                        Siapkan diri kamu untuk sukses di tes CPNS dengan program simulasi real tes CPNS sistem CAT yang kami tawarkan. Kamu akan memperoleh pengalaman yang realistis dan meningkatkan kemampuan kamu dalam menghadapi tes CPNS.
                    </p>
                </div>        
                <div class="p-10 bg-white rounded-md min-h-[310px] group hover:bg-primaryYellow">
                    <h1 class="font-medium text-xl sm:text-2xl mb-6 text-dark-blue">Latihan Soal Tes CPNS  Terupdate</h1>
                    <p class="text-base text-bodyText group-hover:text-black">
                        Kami menyediakan beragam soal latihan terbaru, sehingga Anda dapat menguasai berbagai jenis soal tes CPNS.
                    </p>
                </div>        
                <div class="p-10 bg-white rounded-md min-h-[310px] group hover:bg-primaryYellow">
                    <h1 class="font-medium text-xl sm:text-2xl mb-6 text-dark-blue">Try Out Rutin Tiap Bulan</h1>
                    <p class="text-base text-bodyText group-hover:text-black">
                        Dengan mengikuti Try Out rutin dapat membantu kamu untuk mengukur dan mengevaluasi kesiapan kamu dalam menghadapi tes CPNS.
                    </p>
                </div>        
            </div>
        </div>
    </section>

    {{-- program --}}
    <section id="program" class="bg-blue-50 py-20 px-4 h-fit sm:min-h-screen">
        <div class="max-w-[1280px] mx-auto h-fit sm:min-h-screen flex flex-col items-center">
            <div class="w-full mb-16">

                {{-- title  --}}
                <div class="max-w-[750px] mx-auto mb-20">
                    <p class="text-primary font-bold text-sm mb-6 mx-auto text-center">PROGRAM</p>
                    <h1 class="font-bold text-3xl sm:text-4xl md:text-5xl mb-5 mx-auto text-center">PROGRAM BELAJAR</h1>
                    <p class="text-bodyText text-base mx-auto text-center">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent gravida tempus viverra. Sed non pretium nibh, in tristique diam.
                    </p>
                </div>

                {{-- button program  --}}
                <div class="max-w-[750px] mx-auto drop-shadow-lg rounded-md overflow-hidden">
                    <div class="w-full flex flex-row justify-center bg-white items-center">
                        <div id="btn-premium" class="p-5 border-primary cursor-pointer">
                            <div class="w-fit flex flex-row items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 stroke-primary mr-3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>                                  
                                <p class="font-bold text-base sm:text-xl">Premium</p>
                            </div>
                        </div>
                        <div id="btn-senior" class="p-5 border-b border-primary cursor-pointer">
                            <div class="w-fit flex flex-row items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 stroke-primary mr-3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 9.563C9 9.252 9.252 9 9.563 9h4.874c.311 0 .563.252.563.563v4.874c0 .311-.252.563-.563.563H9.564A.562.562 0 019 14.437V9.564z" />
                                </svg>                                  
                                <p class="font-bold text-base sm:text-xl">Senior</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- program  --}}
            <div id="program-premium" class="w-full hidden">
                <div class="w-full flex flex-col notebook:flex-row justify-between items-center">
                    {{-- image  --}}
                    <div class="image w-fit notebook:mb-0 mb-8 notebook:mr-4">
                        <img src="{{ asset('/img/cpns/image-program-premium.png') }}" alt="hero section" class="w-[500px] 1x136:w-[600px]">
                    </div>
    
                    {{-- text  --}}
                    <div class="text notebook:max-w-lg w-full">
                        <p class="font-semibold text-base mb-4 text-primary">PRIORITY</p>
                        <h1 class="font-semibold text-3xl sm:text-4xl w-full notebook:max-w-lg mb-4 text-black ">
                            Tittle Program Premium CPNS Disini
                        </h1>
                        <p class="text-bodyText text-base mb-8">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, 
                            eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.
                        </p>
                        <div class="flex h-fit flex-wrap gap-4 items-center">
                            <div class="button w-fit">
                                <a href="" class="inline-block bg-primary rounded-md sm:px-10 px-6 text-white py-3 sm:py-4 font-semibold text-base sm:text-[17px]">Pilih Program</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="program-senior" class="w-full">
                <div class="w-full flex flex-col notebook:flex-row justify-between items-center">
                    {{-- image  --}}
                    <div class="image w-fit notebook:mb-0 mb-8 notebook:mr-4">
                        <img src="{{ asset('/img/cpns/image-program-senior.png') }}" alt="hero section" class="w-[500px] 1x136:w-[600px]">
                    </div>
    
                    {{-- text  --}}
                    <div class="text notebook:max-w-lg w-full">
                        <p class="font-semibold text-base mb-4 text-primary">PRIORITY</p>
                        <h1 class="font-semibold text-3xl sm:text-4xl w-full notebook:max-w-lg mb-4 text-black ">
                            Tittle Program Senior CPNS Disini
                        </h1>
                        <p class="text-bodyText text-base mb-8">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, 
                            eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.
                        </p>
                        <div class="flex h-fit flex-wrap gap-4 items-center">
                            <div class="button w-fit">
                                <a href="" class="inline-block bg-primary rounded-md sm:px-10 px-6 text-white py-3 sm:py-4 font-semibold text-base sm:text-[17px]">Pilih Program</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    {{-- testimoni --}}
    <section id="testimoni" class="sm:py-4 py-16 px-4 h-fit sm:min-h-screen">
        <div class="max-w-[1280px] mx-auto h-fit sm:min-h-screen flex items-center">
            <div class="w-full">
                <div class="max-w-[600px] mx-auto mb-10">
                    <h1 class="text-3xl sm:text-5xl font-semibold mb-8 text-center">Apa Kata Mereka Tentang Radian</h1>
                    <p class="text-sm text-bodyText text-center">
                        Radian telah memberikan banyak impect untuk membantu para pelajar agar mencapai target dan tujuannya.
                    </p>
                </div>

                <div id="slider-testimoni" class="owl-carousel owl-theme">
                    <div class="item p-6 bg-white min-h-[330px] rounded-md border border-bodyText">
                        <div class="w-fit mx-auto mb-8">
                            <div class=" rounded-full w-16 h-16 mx-auto mb-4 bg-slate-200 flex justify-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <p class="text-lg font-semibold">Dimas Hermansyah</p>
                        </div>

                        <p class="text-sm">
                            “Terima kasih Radian telah membantu saya dalam persiapan menghadapi tes CPNS. Dengan bimbingan dan latihan yang intensif, saya berhasil lolos tes CPNS”
                        </p>
                    </div>
                    <div class="item p-6 bg-white min-h-[330px] rounded-md border border-bodyText">
                        <div class="w-fit mx-auto mb-8">
                            <div class=" rounded-full w-16 h-16 mx-auto mb-4 bg-slate-200 flex justify-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <p class="text-lg font-semibold">Erlangga Kurniawan</p>
                        </div>

                        <p class="text-sm">
                            “Akhirnya, saya berhasil lolos tes CPNS dan meraih impian saya untuk menjadi abdi negara. Terima kasih Privat Radian!”
                        </p>
                    </div>
                    <div class="item p-6 bg-white min-h-[330px] rounded-md border border-bodyText">
                        <div class="w-fit mx-auto mb-8">
                            <div class=" rounded-full w-16 h-16 mx-auto mb-4 bg-slate-200 flex justify-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <p class="text-lg font-semibold">David Gillroy</p>
                        </div>

                        <p class="text-sm">
                            “Nowadays, it isn't great uncommon to see lenders rapidly adopting a new digital lending strategy to make most  popular streamline the web process”
                        </p>
                    </div>
                    <div class="item p-6 bg-white min-h-[330px] rounded-md border border-bodyText">
                        <div class="w-fit mx-auto mb-8">
                            <div class=" rounded-full w-16 h-16 mx-auto mb-4 bg-slate-200 flex justify-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <p class="text-lg font-semibold">Rani Wijaya S</p>
                        </div>

                        <p class="text-sm">
                            “Privat CPNS Radian bagus banget, banyak trik jitu untuk mengerjakan soal-soal CPNS. Gurunya juga sangat profesional. Buat temen-temen yang ingin lolos CPNS saya sangat merekomendasikan Privat di Radian.”
                        </p>
                    </div>
                    <div class="item p-6 bg-white min-h-[330px] rounded-md border border-bodyText">
                        <div class="w-fit mx-auto mb-8">
                            <div class=" rounded-full w-16 h-16 mx-auto mb-4 bg-slate-200 flex justify-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <p class="text-lg font-semibold">Rani Nur F</p>
                        </div>

                        <p class="text-sm">
                            “Berkat bimbingan belajar dari pengajar berpengalaman, akhirnya saya berhasil lolos ujian CPNS. Privat CPNS Radian sangat Recomended
                        </p>
                    </div>
                    <div class="item p-6 bg-white min-h-[330px] rounded-md border border-bodyText">
                        <div class="w-fit mx-auto mb-8">
                            <div class=" rounded-full w-16 h-16 mx-auto mb-4 bg-slate-200 flex justify-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <p class="text-lg font-semibold">David Gillroy</p>
                        </div>

                        <p class="text-sm">
                            “Nowadays, it isn't great uncommon to see lenders rapidly adopting a new digital lending strategy to make most  popular streamline the web process”
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- biaya  --}}
    <section id="biaya" class="md:py-14 py-16 px-4 h-fit sm:min-h-screen bg-blue-50">
        <div class="max-w-[1280px] mx-auto h-fit sm:min-h-screen flex items-center">
            <div class="w-full mx-auto">
                <h1 class="text-3xl sm:text-5xl font-semibold text-center mb-6">All pricing options available</h1>
                <p class="text-base text-center mb-16">Lorem ipsum dolor sit amet, adipiscing elit.</p>
                <div class="w-fit md:max-w-[890px] mx-auto h-fit flex items-center">

                    {{-- box harga 1  --}}
                    <div class="w-full flex flex-col md:flex-row justify-between items-center gap-6">
                        <div class="max-w-[400px] p-8 bg-white min-h-[600px] rounded-md drop-shadow-md">
                            <div class="w-full">

                                {{-- label  --}}
                                <div class="w-full flex flex-row justify-between items-center mb-8">
                                    <p class="text-sm">Mulai Dari</p>
                                    <span class="text-sm text-primary px-6 p-2 inline-block bg-blue-50 rounded-md">
                                        ISTIMEWA
                                    </span>
                                </div>

                                {{-- text  --}}
                                <h1 class="text-3xl sm:text-4xl font-semibold mb-7">Rp 4.375.000</h1>
                                <p class="text-base font-semibold mb-8">
                                    Starting a small business, billed annually or monthly.
                                </p>
                                <a href="" class="text-center block w-full p-4 bg-primary text-white rounded-md text-base font-semibold mb-8">
                                    PESAN
                                </a>

                                {{-- list  --}}
                                <ul class="w-full grid grid-rows-1 gap-4">
                                    <li class="flex flex-row items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 fill-primary mr-4">
                                            <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="text-sm">100.000 Tracked visits</span>
                                    </li>
                                    <li class="flex flex-row items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 fill-primary mr-4">
                                            <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="text-sm">Feature text goes here</span>
                                    </li>
                                    <li class="flex flex-row items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 fill-primary mr-4">
                                            <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="text-sm">Feature text goes here</span>
                                    </li>
                                    <li class="flex flex-row items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 fill-primary mr-4">
                                            <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="text-sm">Feature text goes here</span>
                                    </li>
                                    <li class="flex flex-row items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 fill-primary mr-4">
                                            <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="text-sm">Feature text goes here</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        {{-- box harga 2  --}}
                        <div class="max-w-[400px] p-8 bg-white min-h-[600px] rounded-md drop-shadow-md">
                            <div class="w-full">

                                {{-- label  --}}
                                <div class="w-full flex flex-row justify-between items-center mb-8">
                                    <p class="text-sm">Mulai Dari</p>
                                    <span class="text-sm text-primary rounded-md px-6 p-2 inline-block bg-blue-50">
                                        PRIORITY
                                    </span>
                                </div>

                                {{-- text  --}}
                                <h1 class="text-3xl sm:text-4xl font-semibold mb-7">Rp 5.000.000</h1>
                                <p class="text-base font-semibold mb-8">
                                    Starting a small business, billed annually or monthly.
                                </p>
                                <a href="" class="text-center block w-full p-4 bg-primary text-white rounded-md text-base font-semibold mb-8">
                                    PESAN
                                </a>

                                {{-- list  --}}
                                <ul class="w-full grid grid-rows-1 gap-4">
                                    <li class="flex flex-row items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 fill-primary mr-4">
                                            <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="text-sm">100.000 Tracked visits</span>
                                    </li>
                                    <li class="flex flex-row items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 fill-primary mr-4">
                                            <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="text-sm">Feature text goes here</span>
                                    </li>
                                    <li class="flex flex-row items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 fill-primary mr-4">
                                            <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="text-sm">Feature text goes here</span>
                                    </li>
                                    <li class="flex flex-row items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 fill-primary mr-4">
                                            <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="text-sm">Feature text goes here</span>
                                    </li>
                                    <li class="flex flex-row items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 fill-primary mr-4">
                                            <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="text-sm">Feature text goes here</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- daftar --}}
    <section id="daftar" class="h-fit w-full px-4 sm:py-16 py-16 bg-gradient-to-r from-primary from-100% to-primary to-10%">
        <div class="bg-gradient-to-r from-primarySD via-red-500 to-red-300 max-w-[1280px] mx-auto flex items-center h-fit overflow-hidden rounded-md">
            <div class="w-full flex flex-col md:flex-row justify-between items-center px-6 py-10 sm:px-8 sm:py-8 rounded-md">
                <div class="max-w-[650px] md:mb-0 mb-10">
                    <p class="text-lg text-white mb-2">SIAP LOLOS CPNS 2023</p>
                    <h1 class="font-semibold text-3xl sm:text-5xl text-white mb-4">
                        Segera Daftar Program Privat CPNS Sekarang
                    </h1>
                    <p class="text-white text-lg">
                        "Persiapkan ujian CPNS dengan lebih mudah dan efektif bersama program CPNS kami, hubungi kami sekarang untuk informasi lebih lanjut!"
                    </p>
                </div>

                <a href="" style="background-color: rgba(255, 255, 255, 0.5);" class="block px-9 py-4 border border-black text-lg font-semibold rounded-md w-full md:w-fit text-center ml-0 md:ml-4">
                    Konsultasi
                </a>
            </div>
        </div>
    </section>

    <!-- footer section start -->
    <footer class="bg-footer pt-24 pb-12 w-full h-fit">
        <div class="max-w-[1280px] mx-auto">
            <div class="w-full flex flex-wrap">
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
                    <div class="w-full mb-6">
                        <form action="" class="w-full max-w-md">
                            <div class="relative flex text-text">
                                <input type="email" name="email" placeholder="Enter Your Email Address" autocomplete="off" aria-label="Enter Your Email Address" class="border border-primaryInp w-full p-3 font-normal rounded-lg">
                            </div>
                        </form>
                    </div>
                    <button class="text-base font-semibold border border-black bg-primary px-6 py-3 text-center text-white rounded-lg mb-16" href="#">Subscribe Now</button>
                </div>

                <div class="w-full pt-10 border-t border-text">
                    <p class="font-normal text-sm text-center text-black">© Copyright 2023, All Rights Reserved by Yayasan Radian Solusi Indonesia</p>
                </div>
            
            </div>
        </div>
    </footer>


    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('/js/cpns.js') }}"></script>
@endsection