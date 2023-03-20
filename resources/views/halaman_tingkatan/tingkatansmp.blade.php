@extends('halaman_tingkatan.layout.template')
@section('content')

<!-- hero section start -->
<section id="#" class="pt-16 w-full h-full" style="background-size:  cover; background-image: url(img/bg-smp.png);">
    <div class="container">
        <div class="flex flex-wrap">
            <div class="w-full self-center px-4 lg:w-1/2">
                <div class="bg-second rounded-t-3xl rounded-bl-3xl shadow-lg mb-6 w-[282px] h-[46px] px-6 py-2">
                    <h3 class="text-xl font-semibold text-sma">PROGRAM PTS  & PAS </h3>
                </div>
                <h1 class="font-bold text-white text-5xl mt-4">AYO PERSIAPKAN UJIANMU DENGAN GURU YANG ASIK</h1>
                <p class="font-normal text-white text-lg mt-4 mb-8">Mempunyai berbagai program dan cara belajar fun accelerative serta educek rutin agar siswa tau perkembangan kemampuan serta cara belajar efektif.</p>
                <a href="#" class="text-base font-semibold text-black bg-second py-3 px-4 rounded-lg mr-6">Mulai Belajar</a>
                <a href="#" class="text-base font-semibold text-white border border-white px-3 py-4 rounded-lg">Hubungi Kami</a>
            </div>

            <div class="w-full self-end px-4 lg:w-1/2">
                <div class="relative mt-10">
                    <img src="img/hero-smp.png" alt="" class="max-w-full mx-auto lg:right-0">
                </div>
            </div>
        </div>
    </div>
    </section>
    <!-- hero section end -->

    <!-- alumni section start -->
    <section id="#" class="pt-16 bg-slate-100 pb-[50px]">
      <div class="container">
          <div class="w-full px-4 mb-10">
              <div class="max-w-xl mx-auto text-center">
                  <h3 class="font-semibold text-5xl text-sd mb-0 pt-16">ALUMNI RADIAN</h3>
                  <p class="font-normal text-lg text-black mt-0 mb-8">Beberapa generasi Radian yang berhasil lolos PTN</p>
              </div>
          </div>

          <div class="flex">

            <div id="slidercarousel" class="w-full overflow-hidden">
                <ul id="slids" class="flex w-full mr-4">
                    <li>
                        <img src="img/sd1.png" alt="" class="h-auto w-full mr-4">
                    </li>
                    <li>
                        <img src="img/sd2.png" alt="" class="h-auto w-full mr-4">
                    </li>
                    <li>
                        <img src="img/sd3.png" alt="" class="h-auto w-full mr-4">
                    </li>
                    <li>
                        <img src="img/sd1.png" alt="" class="h-auto w-full mr-4">
                    </li>
                    <li>
                      <img src="img/sd2.png" alt="" class="h-auto w-full mr-4">
                  </li>
                  <li>
                      <img src="img/sd3.png" alt="" class="h-auto w-full">
                  </li>
                </ul>
            </div>
        </div>

        <div class="flex">
          <div class="w-full text-center">
            <button onclick="before()" class="p-3 rounded-full bg-slate-100 border border-gray-100 shadow-lg mr-5">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-sd">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                  </svg>                              
            </button>

            <button onclick="after()" class="p-3 rounded-full bg-slate-100 border border-gray-100 shadow-lg mr-5">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-sd">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                  </svg>                              
            </button>
        </div>
        </div>
      </div>
  </section>
    <!-- alumni section end  -->

    <!-- keunggulan section start -->
    <section id="#" class="pt-16">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-full mx-auto text-center mb-16">
                    <h1 class="text-5xl font-semibold text-primary pb-1">APA SAJA KEUNGGULAN RADIAN?</h1>
                    <p class="text-lg font-normal text-body pt-1 mb-12">Fasilitas serta pelayanan yang akan kamu dapatkan ketika memilih Radian </p>
                </div>
            </div>

            <div class="flex flex-wrap">

                <div class="w-full px-4 lg:w-1/2">
                    <div class="mb-4 relative">
                        <div class="absolute align-middle rounded-full bg-primary w-12 h-12 flex justify-center items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 21L3 16.5m0 0L7.5 12M3 16.5h13.5m0-13.5L21 7.5m0 0L16.5 12M21 7.5H7.5" />
                            </svg>
                        </div>
                        <div class="inline-block align-middle pl-6 ml-10">
                            <h2 class="text-2xl font-semibold text-black mb-2">GARANSI TUKAR GURU</h2>
                            <p class="text-base font-normal text-body">Tidak perlu takut merasa tidak nyaman oleh guru yang kami sediakan, karna kami menyediakan garansi tukar guru hingga kamu merasa pas</p>
                        </div>
                    </div>
                </div>

                <div class="w-full px-4 lg:w-1/2">
                  <div class="mb-4 relative">
                    <div class="absolute align-middle rounded-full bg-primary w-12 h-12 flex justify-center items-center">
                      <ion-icon name="library" class="text-white"></ion-icon>
                    </div>
                    <div class="inline-block align-middle pl-6 ml-10">
                      <h2 class="text-2xl font-semibold text-black mb-2">FREE TRY OUT</h2>
                      <p class="text-base font-normal text-body">Radian menyediakan Try out gratis setiap bulannya untuk kamu yang ingin mencoba salah satu program radian </p>
                    </div>
                  </div>
                </div>

                <div class="w-full px-4 lg:w-1/2">
                  <div class="mb-4 relative">
                    <div class="absolute align-middle rounded-full bg-primary w-12 h-12 flex justify-center items-center">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                      </svg>
                    </div>
                    <div class="inline-block align-middle pl-6 ml-10">
                      <h2 class="text-2xl font-semibold text-black mb-2">JADWAL YANG FLEXIBEL</h2>
                      <p class="text-base font-normal text-body">Jadwal yang flexibel akan membantu siswa membagi waktunya dengan pembelajaran di sekolah, dan tidak mengganggu kegiatan di luar sekolah.</p>
                    </div>
                  </div>
                </div>

                <div class="w-full px-4 lg:w-1/2">
                  <div class="mb-4 relative">
                    <div class="absolute align-middle rounded-full bg-primary w-12 h-12 flex justify-center items-center">
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
    <!-- keunggulan section end  -->

    <!-- kelebihan section start -->
    <section id="#" class="pt-16 bg-slate-100">
      <div class="container">
        <div class="w-full px-4">
          <div class="max-w-full mx-auto text-center mb-16">
            <h2 class="font-semibold text-5xl mb-1 text-primary">KENAPA HARUS RADIAN?</h2>
            <p class="font-normal text-lg text-body mb-14">Fasilitas serta pelayanan yang akan kamu dapatkan ketika memilih Radian</p>
          </div>
        </div>

        <div class="flex flex-wrap">

          <div class="w-full px-4 lg:w-1/3">
            <div class="bg-white rounded-none shadow-lg overflow-hidden mb-10">
              <img src="img/teacher.png" alt="" class="w-full">
              <div class="py-8 px-6">
                <h3 class="mb-1 text-2xl font-semibold text-primary">SUPER TEACHER</h3>
                <p class="text-base font-normal text-body mb-11">Guru terbaik, pintar, komunikatif, serta sopan sehingga memberikan peningkatan super terhadap siswa.</p>
              </div>
            </div>
          </div>

          <div class="w-full px-4 lg:w-1/3">
            <div class="bg-white rounded-none shadow-lg overflow-hidden mb-10">
              <img src="img/plan.png" alt="" class="w-full">
              <div class="py-8 px-6">
                <h3 class="mb-1 text-2xl font-semibold text-primary">ADAPTIVE PLAN</h3>
                <p class="text-base font-normal text-body mb-6">Memberikan solusi serta rencana yang mengikuti level siswa sekarang dan ditingkatkan sehingga mencapai target yang di inginkan.</p>
              </div>
            </div>
          </div>

          <div class="w-full px-4 lg:w-1/3">
            <div class="bg-white rounded-none shadow-lg overflow-hidden mb-10">
              <img src="img/edu.png" alt="" class="w-full">
              <div class="py-8 px-6">
                <h3 class="mb-1 text-2xl font-semibold text-primary">EDU RECORD</h3>
                <p class="text-base font-normal text-body mb-6">Kami mengupas tuntas, sehingga kami mendapatkan gambaran yang lengkap dengan kondisi siswa terbaru sehingga siswa sampai target.</p>
              </div>
            </div>
          </div>

          <div class="w-full px-4 lg:w-1/3">
            <div class="bg-white rounded-none shadow-lg overflow-hidden mb-10">
              <img src="img/uji.png" alt="" class="w-full">
              <div class="py-8 px-6">
                <h3 class="mb-1 text-2xl font-semibold text-primary">GRATIS UJI COBA</h3>
                <p class="text-base font-normal text-body mb-16">Kamu tidak perlu takut guru tidak nyaman karna bisa uji coba baru bayar program.</p>
              </div>
            </div>
          </div>

          <div class="w-full px-4 lg:w-1/3">
            <div class="bg-white rounded-none shadow-lg overflow-hidden mb-10">
              <img src="img/konsul.png" alt="" class="w-full">
              <div class="py-8 px-6">
                <h3 class="mb-1 text-2xl font-semibold text-primary">SESI KONSULTASI</h3>
                <p class="text-base font-normal text-body mb-11">Konsultasi kapanpun dan dimanapun akan selalu di respon dengan baik oleh tim konsultan kami.</p>
              </div>
            </div>
          </div>

          <div class="w-full px-4 lg:w-1/3">
            <div class="bg-white rounded-none shadow-lg overflow-hidden mb-10">
              <img src="img/best.png" alt="" class="w-full">
              <div class="py-8 px-6">
                <h3 class="mb-1 text-2xl font-semibold text-primary">BEST PRACTICE</h3>
                <p class="text-base font-normal text-body mb-6">Sejak 2011 Radian mengembangkan berbagai tools, sistem serta teknologi terkini untuk memastikan dan menggaransi target impian siswa.</p>
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
            <h3 class="font-semibold text-5xl text-primary mb-0 pt-16">SAAT BELAJAR DI RADIAN</h3>
            <p class="font-normal text-lg text-body mt-0 mb-8">Apa saja yang mereka rasakan ketika belajar dan ikut program di Radian?</p>
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
                  <img src="img/testi_smp1.png" alt="" class="h-auto w-full">
                </li>
                <li>
                  <img src="img/testi_smp2.png" alt="" class="h-auto w-full">
                </li>
                <li>
                  <img src="img/testi_smp3.png" alt="" class="h-auto w-full">
                </li>
                <li>
                  <img src="img/testi_smp1.png" alt="" class="h-auto w-full">
                </li>
                <li>
                  <img src="img/testi_smp2.png" alt="" class="w-full">
                </li>
                <li>
                  <img src="img/testi_smp3.png" alt="" class="h-50 w-full">
                </li>
                <li>
                  <img src="img/testi_smp1.png" alt="" class="h-50 w-full">
                </li>
                <li>
                  <img src="img/testi_smp2.png" alt="" class="h-50 w-full">
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
            <h5 class="text-base font-semibold text-primary mt-12 mb-1">PROGRAM</h5>
            <h1 class="text-5xl font-semibold text-black mt-1 mb-2">Pilih Sesinya Sekarang, Yuk</h1>
            <p class="text-lg font-normal text-body mt-2 mb-12">Berbagai macam program yang bisa kamu pilih untuk memudahkan kamu lolos PTN</p>
          </div>
        </div>

        <div class="flex flex-wrap">

          <div class="w-full px-4 lg:w-1/2">
            <div class="bg-white rounded-3xl shadow-lg overflow-hidden mb-10">
              <img src="img/bimbel-smp.png" alt="" class="w-full">
              <div class="py-8 px-6">
                <h3 class="text-2xl font-bold text-primary mb-2">Bimbel Garansi</h3>
                <p class="text-base font-medium text-black mb-2">Program bimbel dengan pembelajaran tatap muka dengan guru yang asik, dan komunikatif dilakukan di ruang kelas yang telah di sediakan.</p>
                <span class="list font-medium text-base mb-0">Program Bimbel yang tersedia :
                  <ul class="font-medium text-base text-black">
                    <li><span>🚀</span>
                    Pasti (3 Siswa )
                    </li>
                    <li><span>🚀</span>
                    Mulia (5 Siswa)
                    </li>
                    <li><span>🚀</span>
                    Cemerlang (10 Siswa)
                    </li>
                    <li><span>🚀</span>
                    Custom (15-25 Siswa)
                    </li>
                  </ul>
                </span>
              </div>
            </div>
          </div>

          <div class="w-full px-4 lg:w-1/2">
            <div class="bg-white rounded-3xl shadow-lg overflow-hidden mb-10">
              <img src="img/privat-smp.png" alt="" class="w-full">
              <div class="py-8 px-6">
                <h3 class="text-2xl font-bold text-primary mb-2">Private Garansi</h3>
                <p class="text-base font-medium text-black mb-2">Program Private dengan sistem 1 guru 1 siswa. Waktu belajar yang flexibel dan bisa dimana saja memudahkan siswa untuk belajar kapanpun dan dimanapun.</p>
                <span class="list font-medium text-base mb-1">Program Private yang tersedia : 
                  <ul class="font-medium text-base text-black">
                    <li><span>🚀</span>
                    Reguler
                    </li>
                    <li><span>🚀</span>
                    Premium
                    </li>
                    <li class="mb-6"><span>🚀</span>
                    Senior
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

    <!-- daftar section start -->
    <section id="#" class="pt-16 pb-12">
      <div class="container">
        <div class="px-20 overflow-hidden bg-gradient-to-r from-orange to-second rounded-lg">
          <div class="grid items-center grid-cols-1 gap-y-2 lg:grid-cols-2">
            <div class="pl-20 max-w-3xl">
              <h2 class="text-5xl font-bold text-white mt-12 mb-2">SEGERA DAFTAR!</h2>
              <p class="text-lg font-medium text-white mb-9">Tunggu Apalagi segera dapatkan diskon Up to 30% sampai tanggal 15 September 2022</p>
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
    <!-- daftar section end -->

    <!-- footer section start -->
    <footer class="bg-footer pt-24 pb-12">
      <div class="container">
        <div class="flex flex-wrap">
          <div class="w-full px-4 md:w-1/4">
            <img src="img/logo.png" alt="" class="mb-4">
            <p class="text-base font-normal text-text">Jl. Akses UI No. 99, Perkantoran Wisma Kencana Putri,</p>
            <p class="text-base font-normal text-text">Kecamatan Tugu - Cimanggis</p>
            <p class="text-base font-normal text-text">Kota Depok - 16452.</p>
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
              <label for="email" class="text-base font-normal text-text">Enter Your Email Address</label>
              <input type="email" id="email" class="w-full bg-white text-text p-3 rounded-md">
            </div>
            <button class="text-base font-semibold border border-black bg-primary px-4 py-2 text-center text-white rounded-lg mb-16" href="#">Subscribe Now</button>
          </div>

          <div class="w-full pt-10 border-t border-text">
            <p class="font-normal text-sm text-center text-black">© Copyright 2022, All Rights Reserved by Yayasan Radian Solusi Indonesia</p>
          </div>
        </div>
      </div>
    </footer>
    <!-- footer section end  -->

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="{{asset('/js/smp.js')}}"></script>
 @endsection