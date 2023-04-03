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
                    <a class="px-4 py-2 mt-2 text-base font-semibold md:mt-0 md:ml-4 hover:text-camp text-body focus:outline-none focus:shadow-outline" href="#hero">Home</a>
                    <a class="px-4 py-2 mt-2 text-base font-semibold md:mt-0 md:ml-4 hover:text-camp text-body focus:outline-none focus:shadow-outline" href="#alumni">Alumni</a>
                    <a class="px-4 py-2 mt-2 text-base font-semibold md:mt-0 md:ml-4 hover:text-camp text-body focus:outline-none focus:shadow-outline" href="#testi">Testimoni</a>
                    <a class="px-4 py-2 mt-2 text-base font-semibold md:mt-0 md:ml-4 hover:text-camp text-body focus:outline-none focus:shadow-outline" href="#promo">Promo</a>
                    <a class="px-4 py-2 mt-2 text-base font-semibold md:mt-0 md:ml-4 hover:text-camp text-body focus:outline-none focus:shadow-outline" href="#daftar">Alur Daftar</a>
                    <a class="px-4 py-2 mt-2 text-base font-semibold md:mt-0 md:ml-4 w-[136px] h-[38px] border text-white bg-camp rounded-lg">KONSULTASI</a>
                </nav>
            </div>
        </div>
    </header>
    
    <!-- navbar section end -->

    <!-- hero section start -->
    <section id="hero" class="pt-16 pb-32">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full self-center px-4 order-2 lg:order-1 lg:w-1/2">
                    <h1 class="lg:text-7xl text-3xl font-semibold text-txtdokter mb-8">Program Karantina Bergaransi</h1>
                    <div class="w-6 pt-4 border-t border-black"></div>
                    <p class="text-xl font-light text-bdydokter mb-9">Program spesial supercamp bergaransi lolos kedokteran, dan jurusan lain di PTN Favorit melalui UTBK SNBT dan ujian mandiri bersama radian</p>
                    <button class="text-base font-normal text-white py-4 px-[60px] rounded-full bg-camp hover:bg-transparent hover:border hover:border-camp hover:text-camp">Konsultasi Gratis</button>
                </div>

                <div class="w-full px-4 order-1 lg:order-2 lg:w-1/2">
                    <img src="img/headerkedokteran (3).png" alt="" class="w-full h-full">
                </div>
            </div>
        </div>
    </section>
    <!-- hero section end -->

    <!-- program section start -->
    <section id="#" class="pt-16 pb-32">
        <div class="container">
            <div class="mx-auto text-center">
                <h1 class="lg:text-6xl text-2xl font-semibold text-txtdokter mb-14">Program Karantina Kedokteran Terpercaya </h1>
            </div>
            <div class="grid mx-auto grid-cols-1 lg:grid-cols-3">
                <img src="img/img-2.jpg" alt="" class="w-[215px] h-[143px] self-end flex justify-center items-center mb-[20px] lg:ml-[90px] ml-0 right-0">
                <img src="img/img-1.jpg" alt="" class="w-[470px] h-[524px]">
                <img src="img/logo-dokter.png" alt="" class="lg:ml-[72px] ml-0 lg:w-[110px] lg:h-[153px] lg:mt-0 w-[215px] h-[253px] mt-3">
            </div>
            <div class="mx-auto text-center mt-[77px]">
                <p class="text-base font-light text-bdydokter mb-[69px] max-w-[871px] mx-auto">Supercamp kedokteran merupakan salah satu program yang ditawarkan oleh Radian untuk mempersiapkan para siswa/siswi yang akan mengikuti UTBK SNBT dan ujian mandiri dan mendapatkan juruasan impian. </p>
                <button class="text-base font-normal text-white bg-camp py-4 px-[60px] hover:bg-transparent hover:border hover:border-camp hover:text-camp rounded-full">Pelajari Lebih Lanjut</button>
            </div>
        </div>
    </section>
    <!-- program section end -->

    <!-- alumni section start -->
    <section id="alumni" class="pt-16 pb-32">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full px-4 lg:w-1/2">
                    <img src="img/Frame1.png" alt="" class="lg:w-[611px] lg:h-[611px] w-auto h-auto">
                </div>
                <div class="w-full self-center px-4 lg:w-1/2">
                    <h1 class="lg:text-6xl text-2xl font-semibold text-txtdokter mb-5">Lulus Dengan Program Supercamp</h1>
                    <p class="text-base font-light text-bdydokter mb-8">Supercamp Radian Edu membantu siswa/i karantina kedokteran masuk kedokteran di PTN Favorit</p>
                    <button class="text-base font-normal text-white bg-camp py-4 px-[60px] hover:bg-transparent hover:border hover:border-camp hover:text-camp rounded-full">Konsultasi</button>
                </div>
            </div>
        </div>
    </section>
    <!-- alumni section end -->

    <!-- keunggulan section start -->
    <section id="#" class="pt-16 pb-32">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full self-center px-4 lg:w-1/2">
                    <h1 class="lg:text-6xl text-2xl font-semibold text-txtdokter">Kenapa Harus Memilh Radian Edu</h1>
                </div>
                <div class="w-full self-start px-4 lg:w-1/2">
                    <div class="flex flex-wrap">
                        <div class="w-1/2">
                            <div class="rounded-md bg-slate-200 p-5 w-[100px] h-[100px] mx-auto flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-[50px] w-[50px] text-body" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
                                </svg>
                            </div>
                            <div class="mx-auto text-center">
                                <h1 class="text-xl font-semibold text-black mt-[18px]">Super Teacher</h1>
                                <p class="text-base font-light text-black mt-[14px]">Guru terbaik yang telah melalui proses seleksi ketat demi peningkatan super para peserta</p>
                            </div>
                        </div>

                        <div class="w-1/2">
                            <div class="rounded-md bg-slate-200 p-5 w-[100px] h-[100px] mx-auto flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-[50px] w-[50px] text-body" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="mx-auto text-center">
                                <h1 class="text-xl font-semibold text-black mt-[18px]">Adaptive Plan</h1>
                                <p class="text-base font-light text-black mt-[14px] mb-12">Memberikan solusi serta rencana yang bersifat fleksibel yang menyesuaikan dengan perkembagan situasi yang dihadapi siswa/i</p>
                            </div>
                        </div>
                        
                        <div class="w-1/2">
                            <div class="rounded-md bg-slate-200 p-5 w-[100px] h-[100px] mx-auto flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-[50px] w-[50px] text-body" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z" />
                                </svg>
                            </div>
                            <div class="mx-auto text-center">
                                <h1 class="text-xl font-semibold text-black mt-[18px]">Edu Record</h1>
                                <p class="text-base font-light text-black mt-[14px]">Merupakan Bahan Evaluasi yang digunakan untuk pemetaan kemampuan siswa/i selama mengikuti kegiatan belajar</p>
                            </div>
                        </div>

                        <div class="w-1/2">
                            <div class="rounded-md bg-slate-200 p-5 w-[100px] h-[100px] mx-auto flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-[50px] w-[50px] text-body" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div class="mx-auto text-center">
                                <h1 class="text-xl font-semibold text-black mt-[18px]">Free Trial</h1>
                                <p class="text-base font-light text-black mt-[14px] mb-12">Memberikan solusi serta rencana yang bersifat fleksibel yang menyesuaikan dengan perkembagan situasi yang dihadapi siswa/i</p>
                            </div>
                        </div>

                        <div class="w-1/2">
                            <div class="rounded-md bg-slate-200 p-5 w-[100px] h-[100px] mx-auto flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-[50px] w-[50px] text-body" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z" />
                                </svg>
                            </div>
                            <div class="mx-auto text-center">
                                <h1 class="text-xl font-semibold text-black mt-[18px]">Best Result</h1>
                                <p class="text-base font-light text-black mt-[14px]">Merupakan Bahan Evaluasi yang digunakan untuk pemetaan kemampuan siswa/i selama mengikuti kegiatan belajar</p>
                            </div>
                        </div>

                        <div class="w-1/2">
                            <div class="rounded-md bg-slate-200 p-5 w-[100px] h-[100px] mx-auto flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-[50px] w-[50px] text-body" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M2 5a2 2 0 012-2h7a2 2 0 012 2v4a2 2 0 01-2 2H9l-3 3v-3H4a2 2 0 01-2-2V5z" />
                                    <path d="M15 7v2a4 4 0 01-4 4H9.828l-1.766 1.767c.28.149.599.233.938.233h2l3 3v-3h2a2 2 0 002-2V9a2 2 0 00-2-2h-1z" />
                                  </svg>
                            </div>
                            <div class="mx-auto text-center">
                                <h1 class="text-xl font-semibold text-black mt-[18px]">Consulting Session</h1>
                                <p class="text-base font-light text-black mt-[14px]">Mendapatkan 1 Sesi Free untuk mengetahui proses pembelajaran di Radian Edu solution</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- keunggulan section end -->

    <!-- testimoni section start -->
    <section id="testi" class="pt-16 pb-32">
        <div class="container">
            <div class="mx-auto text-center">
                <h1 class="lg:text-6xl text-2xl font-semibold text-txtdokter mb-[65px]">Testimoni Siswa/i</h1>
            </div>
            <div class="flex flex-wrap">
                <div class="w-full px-4 lg:w-1/3">
                    <p class="text-base font-light text-txtdokter lg:mb-5 mb-2">“Guru - guru di radian sangat menyenangkan sekali, dari segi komunikasi dan cara mengajarnya mudah dipahami”</p>
                    <div class="flex flex-wrap lg:mb-0 mb-8">
                        <img src="img/Frame1.png" alt="" class="w-[63px] h-[63px] rounded-full">
                        <h3 class="text-sm font-semibold text-bdydokter self-center text-left ml-3">PUTRI KEDOKTERAN - IUP UGM</h3>
                    </div>
                </div>

                <div class="w-full px-4 lg:w-1/3">
                    <p class="text-base font-light text-txtdokter lg:mb-5 mb-2">“Saya senang sekali belajar di radian, karena saya menjadi tau kemampuan saya. Alhasil saya masuk UI dengan mudah”</p>
                    <div class="flex flex-wrap lg:mb-0 mb-8">
                        <img src="img/Frame24.png" alt="" class="w-[63px] h-[63px] rounded-full">
                        <h3 class="text-sm font-semibold text-bdydokter self-center text-left ml-3">MIKHI - KEDOKTERAN UI</h3>
                    </div>
                </div>

                <div class="w-full px-4 lg:w-1/3">
                    <p class="text-base font-light text-txtdokter lg:mb-11 mb-2">“Saya senang bimbel di radian edu, karena radian saya mampu lolos kedoteran UGM.”</p>
                    <div class="flex flex-wrap lg:mb-0 mb-8">
                        <img src="img/Frame5.png" alt="" class="w-[63px] h-[63px] rounded-full">
                        <h3 class="text-sm font-semibold text-bdydokter self-center text-left ml-3">AMGAH - KEDOKTERAN UGM</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimoni section end -->

    <!-- harga section start -->
    <section id="promo" class="pt-16 pb-32">
        <div class="container">
            <h1 class="lg:text-6xl text-2xl font-semibold text-txtdokter mb-[71px] mx-auto flex justify-center items-center">Dapatkan Penawaran Terbaik</h1>
            <div class="flex flex-wrap">
                <div class="w-full px-4 lg:w-1/2">
                    <img src="img/karantinanew.png" alt="" class="w-[527px] h-[309px] mx-auto flex items-center justify-center">
                    <div class="mx-auto text-center">
                    <h1 class="lg:text-2xl text-xl font-semibold text-txtdokter mt-[26px]">PROGRAM KARANTINA</h1>
                    <p class="text-base font-light text-bdydokter mt-[14px] mb-10">Siswa mengikuti intensif camp karantina di Radian hingga lolos di jurusan yang di inginkan.</p>
                    <button class="text-base font-normal text-white bg-camp py-4 px-[60px] hover:bg-transparent hover:border hover:border-camp hover:text-camp rounded-full">Daftar Karantina</button>
                    </div>
                </div>

                <div class="w-full px-4 lg:w-1/2">
                    <img src="img/intensiff.png" alt="" class="w-[527px] h-[309px] mx-auto flex items-center justify-center">
                    <div class="mx-auto text-center">
                        <h1 class="lg:text-2xl text-xl font-semibold text-txtdokter mt-[26px]">PROGRAM INTENSIF</h1>
                        <p class="text-base font-light text-bdydokter mt-[14px] mb-10">Siswa belajar setiap hari selama 30 hari dari kelulusan hingga ujian di kantor/bimbel Radian.</p>
                        <button class="text-base font-normal text-camp border border-camp hover:bg-camp hover:text-white py-4 px-[60px] rounded-full">Daftar Intensif</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- harga section end -->

    <!-- cta 1 section start -->
    <section id="#" class="pt-16 pb-32">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full self-center px-4 lg:w-1/2">
                    <h1 class="lg:text-4xl text-2xl font-semibold text-camp lg:mb-0 mb-4">Daftar Hari Ini Program Karantina, Dapatkan Extra Discount 1-10 jt untuk 10 pendaftaran Pertama!</h1>
                </div>
                <div class="w-full self-center px-4 lg:w-1/2">
                    <p class="text-xl font-light text-bdydokter mb-6">Segera daftar hari ini dan dapatkan extra Discount 1-10jt untuk 10 pendaftar pertama, kuota terbatas untuk 50 peserta.</p>
                    <button class="text-base font-normal text-camp border border-camp hover:bg-camp hover:text-white py-4 px-[60px] rounded-full">Claim Promo</button>
                </div>
            </div>
        </div>
    </section>
    <!-- cta 2 section end -->

    <!-- pendaftaran section start -->
    <section id="daftar" class="pt-16 pb-32">
        <div class="container">
            <h1 class="lg:text-6xl text-2xl font-semibold text-txtdokter mx-auto flex items-center justify-center mb-[42px]">Alur Pendaftaran</h1>
            <div class="flex flex-wrap">
                <div class="w-full px-4 lg:w-1/3">
                    <div class="mx-auto text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-[50px] w-[50px] text-primary mx-auto flex justify-center items-center" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                        </svg>
                        <h1 class="lg:text-2xl text-xl font-semibold text-txtdokter mt-[18px]">PENGISIAN FORM</h1>
                        <p class="text-base font-light text-bdydokter mt-[15px]">Calon siswa/i Radian mengisi form sebagai syarat awal melakukan pendaftaran</p>
                    </div>
                </div>

                <div class="w-full px-4 lg:w-1/3">
                    <div class="mx-auto text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-[50px] w-[50px] text-primary mx-auto flex justify-center items-center" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                        </svg>
                        <h1 class="lg:text-2xl text-xl font-semibold text-txtdokter mt-[18px]">PEMBAYARAN</h1>
                        <p class="text-base font-light text-bdydokter mt-[15px]">Melakukan pembayaran biaya registrasi ataupun melakukan pelunasan di awal.</p>
                    </div>
                </div>

                <div class="w-full px-4 lg:w-1/3">
                    <div class="mx-auto text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-[50px] w-[50px] text-primary mx-auto flex justify-center items-center" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <h1 class="lg:text-2xl text-xl font-semibold text-txtdokter mt-[18px]">UJI COBA</h1>
                        <p class="text-base font-light text-bdydokter mt-[15px]">Uji coba kelas gratis untuk melihat kecocokan siswa/i dengan mentor.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- pendaftaran section end -->

    <!-- cta 2 section start -->
    <section id="#" class="pt-16 pb-32">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full px-4 lg:w-1/2 self-center lg:order-1 order-2">
                    <h1 class="lg:text-4xl text-2xl font-semibold text-txtdokter lg:mb-[50px] mb-4 lg:mt-0 mt-6">Menuju masa depan yang sukses, cemerlang, dan mulia bersama Radian Edu Solution.</h1>
                    <p class="text-base font-light mb-[38px] text-bdydokter">Ijinkan kami untuk dapat membantu ananda menuju PTN favorit sesuai dengan moto kami yaitu "Menuju masa depan yang sukses, cemerlang dan mulia bersama Radian Edu Solution"</p>
                    <button class="text-base font-normal text-white bg-camp py-4 px-[60px] hover:bg-transparent hover:border hover:border-camp hover:text-camp rounded-full">Daftar Via WhatsApp</button>
                </div>

                <div class="w-full px-4 lg:w-1/2 lg:order-2 order-1">
                    <img src="img/cta-camp.png" alt="" class="w-[525px] h-[525px] right-0">
                </div>

            </div>
        </div>
    </section>
    <!-- cta 2 section end -->

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

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

@endsection