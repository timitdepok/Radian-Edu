@extends('halaman_tingkatan.layout.template')
@section('content')


<!-- hero section start -->
<section id="#" class="pt-16 w-full h-full" style="background-size: cover; background-image: url(img/bg-sma.png);">
    <div class="container">
        <div class="flex flex-wrap">
            <div class="w-full self-center px-4 lg:w-1/2">
                <div class="bg-second rounded-t-3xl rounded-bl-3xl shadow-lg mb-6 py-3 pr-8 pl-11">
                    <h3 class="text-xl font-semibold text-sma">Program TPS, Undangan, Ujian Mandiri</h3>
                </div>
                <h1 class="font-bold text-white text-3xl mt-1">GURU TERBAIK DENGAN TINGKAT KELULUSAN HINGGA 90% KE PTN FAVORIT</h1>
                <p class="font-medium text-white text-lg mt-6 mb-10">Mempunyai berbagai program dan cara belajar fun accelerative serta educhek rutin agar siswa tau perkembangan kemampuan serta cara belajar yang efektif </p>
                <a href="#" class="text-base font-semibold text-black bg-second py-3 px-8 rounded-lg hover:shadow-lg mt-10">Mulai Belajar</a>
                <a href="#" class="text-base font-semibold text-white border border-white py-3 px-8 rounded-lg mt-10">Hubungi Kami</a>
            </div>

            <div class="w-full self-end px-4 lg:w-1/2">
                <div class="relative mt-10">
                    <img src="img/sma-hero.png" alt="" class="max-w-full mx-auto lg:right-0">
                </div>
            </div>
        </div>
    </div>
    </section>
    <!-- hero section end -->

    <!-- promo section start -->
    <section id="#" class="pt-16 bg-slate-100">
        <div class="container">
            <div class="flex flex-wrap self-center items-center">
                <img src="img/Webbanner 1.png" alt="" class="max-w-full px-5">
                <img src="img/Webbanner 2.png" alt="" class="max-w-full px-5">
            </div>
        </div>
    </section>
    <!-- promo section end -->

    <!-- testimoni section start -->
    <section id="#" class="pt-16 bg-slate-100">
        <div class="container">
            <div class="w-full px-4 mb-10">
                <div class="max-w-xl mx-auto text-center">
                    <h3 class="font-semibold text-5xl text-sma mb-0 pt-16">ALUMNI RADIAN</h3>
                    <p class="font-normal text-lg text-black mt-0 mb-8">Beberapa generasi Radian yang berhasil lolos PTN</p>
                </div>
            </div>

            <div class="flex">
                <div class="w-3/12 flex items-center">
                    <div class="w-full text-right">
                      <button onclick="prev()" class="p-3 rounded-full bg-white border border-gray-100 shadow-lg mr-5">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75" />
                        </svg>                
                      </button>
                    </div>
                </div>

                <div id="sliderContainer" class="w-full overflow-hidden">
                    <ul id="slider" class="flex w-full">
                      <li>
                        <img src="img/Frame1.png" alt="" class="h-auto w-full">
                      </li>
                      <li>
                        <img src="img/Frame24.png" alt="" class="h-auto w-full">
                      </li>
                      <li>
                        <img src="img/Frame5.png" alt="" class="h-auto w-full">
                      </li>
                      <li>
                        <img src="img/Frame7.png" alt="" class="h-auto w-full">
                      </li>
                      <li>
                        <img src="img/Frame1.png" alt="" class="w-full">
                      </li>
                      <li>
                        <img src="img/Frame24.png" alt="" class="h-50 w-full">
                      </li>
                      <li>
                        <img src="img/Frame5.png" alt="" class="h-50 w-full">
                      </li>
                      <li>
                        <img src="img/Frame7.png" alt="" class="h-50 w-full">
                      </li>
                    </ul>
                </div>

                <div class="w-3/12 flex items-center">
                    <div class="w-full">
                      <button onclick="next()" class="p-3 rounded-full bg-white border border-gray-100 shadow-lg ml-5">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                        </svg>
                        
                      </button>
                    </div>
                  </div>
            </div>
        </div>
    </section>
    <!-- testimoni section end -->

    <!-- keunggulan section start -->
    <section id="#" class="pt-16">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-full mx-auto text-center mb-16">
                    <h1 class="text-5xl font-semibold text-sma pb-1">APA SAJA KEUNGGULAN RADIAN?</h1>
                    <p class="text-lg font-normal text-body pt-1 mb-12">Fasilitas serta pelayanan yang akan kamu dapatkan ketika memilih Radian</p>
                </div>
            </div>
            
            <div class="flex flex-wrap">

                <div class="w-full px-4 lg:w-1/2">
                    <div class="mb-4 relative">
                        <div class="absolute align-middle rounded-full bg-sma w-12 h-12 flex justify-center items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 21L3 16.5m0 0L7.5 12M3 16.5h13.5m0-13.5L21 7.5m0 0L16.5 12M21 7.5H7.5" />
                            </svg>
                        </div>
                        <div class="inline-block align-middle pl-6 ml-10">
                            <h2 class="text-2xl font-semibold text-black mb-2">GARANSI TUKAR GURU</h2>
                            <p class="text-base font-normal text-body">Tidak perlu merasa tidak nyaman oleh guru yang kami sediakan, karna kami menyediakan garansi tukar guru hingga kamu merasa pas</p>
                        </div>
                    </div>
                </div>

                <div class="w-full px-4 lg:w-1/2">
                    <div class="mb-4 relative">
                        <div class="absolute align-middle rounded-full bg-sma w-12 h-12 flex justify-center items-center">
                            <ion-icon name="library" class="text-white"></ion-icon>
                        </div>
                        <div class="inline-block align-middle pl-6 ml-10">
                            <h2 class="text-2xl font-semibold text-black mb-2">FREE TRY OUT</h2>
                            <p class="text-base font-normal text-body">Radian menyediakan tryout gratis setiap bulannya untuk kamu yang ingin mencoba salah satu program radia</p>
                        </div>
                    </div>
                </div>

                <div class="w-full px-4 lg:w-1/2">
                    <div class="mb-4 relative">
                        <div class="absolute align-middle rounded-full bg-sma w-12 h-12 flex justify-center items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="inline-block align-middle pl-6 ml-10">
                            <h2 class="text-2xl font-semibold text-black mb-2">JADWAL YANG FLEXIBEL</h2>
                            <p class="text-base font-normal text-body">Jadwal yang flexibel akan membantu siswa membagi waktunya dengan pelajaran di sekolah, dan tidak mengganggu kegiatan di luar sekolah.</p>
                        </div>
                    </div>
                </div>

                <div class="w-full px-4 lg:w-1/2">
                    <div class="mb-4 relative">
                        <div class="absolute align-middle rounded-full bg-sma w-12 h-12 flex justify-center items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z" />
                            </svg>
                        </div>
                        <div class="inline-block align-middle pl-6 ml-10">
                            <h2 class="text-2xl font-semibold text-black mb-2">GURU YANG BERPENGALAMAN</h2>
                            <p class="text-base font-normal text-body">Guru-guru yang ada di Radian memiliki pengalaman untuk mengajar kamu, tidak hanya itu loh guru Radian juga lulusan PTN</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- keunggulan section end -->

    <!-- kelebihan section start -->
    <section id="#" class="pt-16 bg-slate-100">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-full mx-auto text-center mb-16">
                    <h2 class="font-semibold text-5xl mb-1">KENAPA HARUS RADIAN</h2>
                    <p class="font-normal text-lg mb-14">Fasilitas serta pelayanan yang akan kamu dapatkan ketika memilih Radian</p>
                </div>
            </div>

            <div class="flex flex-wrap">
                <div class="w-full px-4 lg:w-1/3">
                    <div class="bg-white rounded-none shadow-lg overflow-hidden mb-10">
                        <img src="img/teacher.png" alt="" class="w-full">
                        <div class="py-8 px-6">
                            <h3 class="mb-1 text-2xl font-semibold text-sma">
                                SUPER TEACHER
                            </h3>
                            <p class="text-base font-normal text-body mb-11">Guru Terbaik, Pintar, Komunikatif serta sopan sehingga memberikan peningkatan super terhadap siswa.</p>
                        </div>
                    </div>
                </div>

                <div class="w-full px-4 lg:w-1/3">
                    <div class="bg-white rounded-none shadow-lg overflow-hidden mb-10">
                        <img src="img/plan.png" alt="" class="w-full">
                        <div class="py-8 px-6">
                            <h3 class="mb-1 text-2xl font-semibold text-sma">ADAPTIVE PLAN</h3>
                            <p class="text-base font-normal text-body mb-6">Memberikan solusi serta rencana yang mengikuti level siswa sekarang ditingkatkan sehingga mencapai target yang diinginkan</p>
                        </div>
                    </div>
                </div>

                <div class="w-full px-4 lg:w-1/3">
                    <div class="bg-white rounded-none shadow-lg overflow-hidden mb-10">
                        <img src="img/edu.png" alt="" class="w-full">
                        <div class="py-8 px-6">
                            <h3 class="mb-1 text-2xl font-semibold text-sma">EDU RECORD</h3>
                            <p class="text-base font-normal text-body mb-6">Kami mengupas tuntas, sehingga kami mendapatkan gambaran yang lengkap dengan kondisi siswa terbaru sehingga siswa sampai target</p>
                        </div>
                    </div>
                </div>

                <div class="w-full px-4 lg:w-1/3">
                    <div class="bg-white rounded-none shadow-lg overflow-hidden mb-10">
                        <img src="img/uji.png" alt="" class="w-full">
                        <div class="py-8 px-6">
                            <h3 class="mb-1 text-2xl font-semibold text-sma">GRATIS UJI COBA</h3>
                            <p class="text-base font-normal text-body mb-16">Kamu tidak perlu takut guru tidak nyaman, karena bisa uji coba baru bayar program.</p>
                        </div>
                    </div>
                </div>

                <div class="w-full px-4 lg:w-1/3">
                    <div class="bg-white rounded-none shadow-lg overflow-hidden mb-10">
                        <img src="img/konsul.png" alt="" class="w-full">
                        <div class="py-8 px-6">
                            <h3 class="mb-1 text-2xl font-semibold text-sma">SESI KONSULTASI</h3>
                            <p class="text-base font-normal text-body mb-11">Konsultasi kapanpun dan dimanapun akan selalu di respon baik oleh tim konsultan kami.</p>
                        </div>
                    </div>
                </div>

                <div class="w-full px-4 lg:w-1/3">
                    <div class="bg-white rounded-none shadow-lg overflow-hidden mb-10">
                        <img src="img/best.png" alt="" class="w-full">
                        <div class="py-8 px-6">
                            <h3 class="mb-1 text-2xl font-semibold text-sma">BEST PRACTICE</h3>
                            <p class="text-base font-normal text-body mb-6">Sejak 2011 Radian mengembangkan berbagai tools sistem, dan teknologi terkini untuk memastikan dan menggaransi target impian siswa.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- kelebihan section end  -->

    <!-- testimoni section start -->
    <section id="#" class="pt-16">
        <div class="container">
            <div class="w-full px-4 mb-10">
                <div class="max-w-full mx-auto text-center">
                    <h3 class="font-semibold text-5xl text-sma mb-0 pt-16">SAAT BELAJAR DI RADIAN</h3>
                    <p class="font-normal text-lg text-black mt-0 mb-8">Apa saja yang mereka rasakan ketika belajar dan ikut program di Radian?</p>
                </div>
            </div>

            <div class="flex">
                <div class="w-3/12 flex items-center">
                    <div class="w-full text-right">
                      <button onclick="prev()" class="p-3 rounded-full bg-white border border-gray-100 shadow-lg mr-5">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75" />
                        </svg>                
                      </button>
                    </div>
                </div>

                <div id="sliderContainer" class="w-full overflow-hidden">
                    <ul id="slider" class="flex w-full">
                      <li>
                        <img src="img/Testi2 (1).png" alt="" class="h-auto w-full">
                      </li>
                      <li>
                        <img src="img/Testi2 (2).png" alt="" class="h-auto w-full">
                      </li>
                      <li>
                        <img src="img/Testi3 (1).png" alt="" class="h-auto w-full">
                      </li>
                      <li>
                        <img src="img/Testi2 (1).png" alt="" class="h-auto w-full">
                      </li>
                      <li>
                        <img src="img/Testi2 (2).png" alt="" class="w-full">
                      </li>
                      <li>
                        <img src="img/Testi3 (1).png" alt="" class="h-50 w-full">
                      </li>
                      <li>
                        <img src="img/Testi2 (1).png" alt="" class="h-50 w-full">
                      </li>
                      <li>
                        <img src="img/Testi2 (2).png" alt="" class="h-50 w-full">
                      </li>
                    </ul>
                </div>

                <div class="w-3/12 flex items-center">
                    <div class="w-full">
                      <button onclick="next()" class="p-3 rounded-full bg-white border border-gray-100 shadow-lg ml-5">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                        </svg>
                        
                      </button>
                    </div>
                  </div>
            </div>
        </div>
    </section>
    <!-- testimoni section end -->

    <!-- program section start -->
    <section id="#" class="pt-16 bg-slate-100">
        <div class="container">
            <div class="w-full px-4 mb-10">
                <div class="max-w-full mx-auto text-center">
                    <h3 class="font-semibold text-5xl text-sma mb-0 pt-16">PILIH PROGRAMNYA SEKARANG YUK</h3>
                    <p class="font-normal text-lg text-black mt-0 mb-8">berbagai macam program yang bisa kamu pilih untuk memudahkan kamu lolos PTN</p>
                </div>
            </div>

            <div class="flex flex-wrap">

                <div class="w-full px-4 lg:w-1/3">
                    <div class="bg-white rounded-3xl shadow-lg overflow-hidden mb-10">
                        <img src="img/private.png" alt="" class="w-full">
                        <div class="py-8 px-6">
                            <h4 class="mb-2 font-bold text-2xl text-sma">Private Garansi</h4>
                            <p class="font-medium text-base text-black mb-2">program garansi dengan guru yang selalu siap datang untuk setiap lokasi yang telah di tentukan dan jadwal les yang flexibel</p>
                            <span class="list font-medium text-base text-black mb-0">Program Garansi yang tersedia:
                                <ul class="font-medium text-base text-black">
                                    <li><span>●</span>
                                        Garansi Private Kedokteran
                                    </li>
                                    <li><span>●</span>
                                    Garansi Private Kedinasan/STAN
                                    </li>
                                    <li class="mb-14"><span>●</span>
                                    Garansi Privat Masuk PTN Favorit
                                    </li>
                                </ul>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="w-full px-4 lg:w-1/3">
                    <div class="bg-white rounded-3xl shadow-lg overflow-hidden mb-10">
                        <img src="img/supercamp.png" alt="" class="w-full">
                        <div class="py-8 px-6">
                            <h4 class="mb-2 font-bold text-2xl text-sma">Supercamp Bergaransi</h4>
                            <p class="font-medium text-base text-black mb-2">Super camp bergaransi dengan camp atau karantina pembelajaran 1 bulan sebelum UTBK dan Ujian Mandiri.</p>
                            <span class="list font-medium text-base text-black mb-0">program-program super camp yang tersedia :
                                <ul class="font-medium text-base text-black">
                                    <li><span>●</span>
                                    Garansi Super Camp Kedokteran
                                    </li>
                                    <li><span>●</span>
                                    Garansi Super Camp Kedinasan/STAN
                                    </li>
                                    <li class="mb-9"><span>●</span>
                                    Garansi Super Camp Masuk PTN Favorit
                                    </li>
                                </ul>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="w-full px-4 lg:w-1/3">
                    <div class="bg-white rounded-3xl shadow-lg overflow-hidden mb-10">
                        <img src="img/bimbel.png" alt="" class="w-full">
                        <div class="py-8 px-6">
                            <h4 class="mb-2 font-bold text-2xl text-sma">Exclusive Class</h4>
                            <p class="font-medium text-base text-black mb-2">Program garansi pembelajaran dengan kelas yang telah disediakan.</p>
                            <span class="list font-medium text-base text-black mb-0">Program garansi pembelajaran yang tersedian: 
                                <ul class="font-medium text-base text-black">
                                    <li><span>●</span>
                                    Pasti (3 Siswa)
                                    </li>
                                    <li><span>●</span>
                                    Mulia (5 Siswa)
                                    </li>
                                    <li><span>●</span>
                                    Cemerlang (10 Siswa)
                                    </li>
                                    <li class="mb-9"><span>●</span>
                                    Custom (15 - 25 siswa)
                                    </li>
                                </ul>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- program section end -->

    <!-- segera daftar section start -->
    <section id="#" class="pt-16 pb-12">
        <div class="container">
            <div class="px-20 overflow-hidden bg-gradient-to-r from-second to-orange rounded-lg">
                <div class="grid items-center grid-cols-1 gap-y-2 lg:grid-cols-2">
                    <div class="pl-20 max-w-3xl">
                        <h2 class="text-5xl font-bold text-white mt-12 mb-2">SEGERA DAFTAR!</h2>
                        <p class="text-lg font-medium text-white mb-9">Tunggu apalagi segera dapatkan diskon Up To 30% sampai tanggal 15 September 2022</p>
                        <a href="#" class="text-sm font-bold text-white bg-sma py-3 px-8 mr-4 rounded-lg">Daftar Segera</a>
                        <a href="#" class="text-sm font-bold text-white border border-white py-3 px-8 rounded-lg">Konsultasi</a>
                    </div>

                    <div class="ml-60 relative p-0">
                        <img class="relative w-80 h-80" src="img/daftar.png" alt="">
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- segera daftar section end -->

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
                    <div class="w-full px-4 mb-8">
                        <label for="email" class="text-base font-normal text-text">Enter your email address</label>
                        <input type="email" id="email" class="w-full bg-white text-text p-3 rounded-md">
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

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="{{asset('/js/sma.js')}}"></script>
 @endsection