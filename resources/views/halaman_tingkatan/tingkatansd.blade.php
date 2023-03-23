@extends('halaman_tingkatan.layout.template')
@section('content')

 <!-- naavbar section start -->
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
                <a class="px-4 py-2 mt-2 text-sm font-semibold md:mt-0 md:ml-4 hover:text-sd text-body focus:outline-none focus:shadow-outline" href="{{ route('home') }}">Home</a>
                <a class="px-4 py-2 mt-2 text-sm font-semibold md:mt-0 md:ml-4 hover:text-sd text-body focus:outline-none focus:shadow-outline" href="#alumni">About</a>
                <a class="px-4 py-2 mt-2 text-sm font-semibold md:mt-0 md:ml-4 hover:text-sd text-body focus:outline-none focus:shadow-outline" href="#testi">Program</a>
                <a class="px-4 py-2 mt-2 text-sm font-semibold md:mt-0 md:ml-4 hover:text-sd text-body focus:outline-none focus:shadow-outline" href="#unggul">Promo</a>
                <a class="px-4 py-2 mt-2 text-sm font-semibold md:mt-0 md:ml-4 hover:text-sd text-body focus:outline-none focus:shadow-outline" href="#program">Paket</a>
                <a class="px-4 py-2 mt-2 text-sm font-semibold md:mt-0 md:ml-4 hover:text-sd text-body focus:outline-none focus:shadow-outline" href="#daftar">Daftar</a>
                <a class="px-4 py-2 mt-2 text-sm font-semibold md:mt-0 md:ml-4 w-[136px] h-[38px] border text-white bg-sd rounded-lg">Hubungi Kami</a>
            </nav>
        </div>
</div>
<!-- navbar section end -->

  <!-- hero section start -->
  <section id="#" class="pt-16 w-full h-full" style="background-size: cover; background-image: url(img/bg-sd.png);">
    <div class="container">
        <div class="flex flex-wrap">
            <div class="w-full self-center px-4 lg:w-1/2">
                <div class="bg-second rounded-t-3xl rounded-bl-3xl shadow-lg mb-6 w-[300px] h-[50px] px-6 py-2">
                    <h3 class="text-xl font-semibold text-black">PROGRAM PTS & PAS</h3>
                </div>
                <h1 class="font-bold text-white lg:text-5xl text-3xl mt-4">AYO PERSIAPKAN UJIANMU DENGAN GURU YANG ASIK</h1>
                <p class="font-normal text-white text-lg mt-4 mb-8">Mempunyai berbagai program dan cara belajar fun accelerativ, educek rutin agar siswa tau perkembangan kemampuan serta cara belajar efektif</p>
                <a href="#" class="text-base font-semibold text-black bg-second py-3 px-4 rounded-lg mr-6">Mulai Belajar</a>
                <a href="#" class="text-base font-semibold text-white border border-white px-3 py-4 rounded-lg">Hubungi Kami</a>
            </div>

            <div class="w-full self-center px-4 lg:w-1/2">
                <div class="relative mt-10">
                    <img src="img/sd-hero.png" alt="" class="max-w-full mx-auto lg:right-0">
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
                      <li class="mr-3">
                          <img src="img/sd1.png" alt="" class="h-auto w-full mr-4">
                      </li>
                      <li class="mr-3">
                          <img src="img/sd2.png" alt="" class="h-auto w-full mr-4">
                      </li>
                      <li class="mr-3">
                          <img src="img/sd3.png" alt="" class="h-auto w-full mr-4">
                      </li>
                      <li class="mr-3">
                          <img src="img/sd1.png" alt="" class="h-auto w-full mr-4">
                      </li>
                      <li class="mr-3">
                        <img src="img/sd2.png" alt="" class="h-auto w-full mr-4">
                    </li>
                    <li class="mr-3">
                        <img src="img/sd3.png" alt="" class="h-auto w-full">
                    </li>
                  </ul>
              </div>
          </div>

          <div class="flex">
            <div class="w-full text-center">
              <button onclick="after()" class="p-3 rounded-full bg-slate-100 border border-gray-100 shadow-lg mr-5">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-sd">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                    </svg>                              
              </button>

              <button onclick="before()" class="p-3 rounded-full bg-slate-100 border border-gray-100 shadow-lg mr-5">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-sd">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                    </svg>                              
              </button>
          </div>
          </div>
        </div>
    </section>
  <!-- alumni section end -->

  <!-- keunggulan section start -->
  <section id="#" class="pt-16 pb-12">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-full mx-auto text-center mb-16">
                    <h1 class="text-5xl font-semibold text-sd pb-1">APA SAJA KEUNGGULAN RADIAN?</h1>
                    <p class="text-lg font-normal text-body pt-1 mb-12">Fasilitas serta pelayanan yang akan kamu dapatkan ketika memilih Radian</p>
                </div>
            </div>

            <div class="flex flex-wrap">

                <div class="w-full px-4 lg:w-1/2">
                    <div class="mb-4 relative">
                        <div class="absolute align-middle rounded-full bg-sd w-12 h-12 flex justify-center items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 21L3 16.5m0 0L7.5 12M3 16.5h13.5m0-13.5L21 7.5m0 0L16.5 12M21 7.5H7.5" />
                            </svg>
                        </div>
                        <div class="inline-block align-middle pl-6 ml-10">
                            <h2 class="text-2xl font-semibold text-black mb-2">Garansi Tukar Guru</h2>
                            <p class="text-base font-normal text-body">Tidak perlu takut merasa tidak nyaman oleh guru yang kami sediakan, karna kami menyediakan garansi tukar guru hingga kamu merasa pas</p>
                        </div>
                    </div>
                </div>

                <div class="w-full px-4 lg:w-1/2">
                  <div class="mb-4 relative">
                    <div class="absolute align-middle rounded-full bg-sd w-12 h-12 flex justify-center items-center">
                      <ion-icon name="library" class="text-white"></ion-icon>
                    </div>
                    <div class="inline-block align-middle pl-6 ml-10">
                      <h2 class="text-2xl font-semibold text-black mb-2">FREE TRY OUT</h2>
                      <p class="text-base font-normal text-body">Radian menyediakan Try Out gratis setiap bulannya untuk kamu yang ingin mencoba salah satu program Radian</p>
                    </div>
                  </div>
                </div>

                <div class="w-full px-4 lg:w-1/2">
                  <div class="mb-4 relative">
                    <div class="absolute align-middle rounded-full bg-sd w-12 h-12 flex justify-center items-center">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                      </svg>
                    </div>
                    <div class="inline-block align-middle pl-6 ml-10">
                      <h2 class="text-2xl font-semibold text-black mb-2">JADWAL YANG FLEXIBEL </h2>
                      <p class="text-base font-normal text-body">Jadwal yang flexibel akan membantu siswa membagi waktunya dengan pelajaran di sekolah, dan tidak mengganggu kegiatan di luar sekolah.</p>
                    </div>
                  </div>
                </div>

                <div class="w-full px-4 lg:w-1/2">
                  <div class="mb-4 relative">
                    <div class="absolute align-middle rounded-full bg-sd w-12 h-12 flex justify-center items-center">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z" />
                      </svg>
                    </div>
                    <div class="inline-block align-middle pl-6 ml-10">
                      <h2 class="text-2xl font-semibold text-black mb-2">GURU YANG BERPENGALAMAN</h2>
                      <p class="text-base font-normal text-body">Guru - guru yang ada di radian memiliki pengalaman untuk mengajar kamu, tidak hanya itu loh guru Radian juga lulusan PTN</p>
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
            <h2 class="font-semibold text-5xl mb-1 text-sd">KENAPA HARUS RADIAN?</h2>
            <p class="font-normal text-lg text-body mb-14">Fasilitas serta pelayanan yang akan kamu dapatkan ketika memilih Radian</p>
          </div>
        </div>

        <div class="flex flex-wrap">

          <div class="w-full px-4 lg:w-1/3">
            <div class="bg-white rounded-lg shadow-md overflow-hidden mb-10">
              <img src="img/teacher.png" alt="" class="w-full">
              <div class="py-8 px-6">
                <h3 class="mb-1 text-2xl font-semibold text-sd">SUPER TEACHER</h3>
                <p class="text-base font-normal text-body mb-12">Guru terbaik, pintar, komunikatif serta sopan sehingga memberikan peningkatan super terhadap siswa.</p>
              </div>
            </div>
          </div>

          <div class="w-full px-4 lg:w-1/3">
            <div class="bg-white rounded-lg shadow-md overflow-hidden mb-10">
              <img src="img/plan.png" alt="" class="w-full">
              <div class="py-8 px-6">
                <h3 class="mb-1 text-2xl font-semibold text-sd">ADAPTIVE PLAN</h3>
                <p class="text-base font-normal text-body mb-6">Memberikan solusi serta rencana yang mengikuti level siswa sekarang dan ditingkatkan sehingga mencapai target yang di inginkan.</p>
              </div>
            </div>
          </div>

          <div class="w-full px-4 lg:w-1/3">
            <div class="bg-white rounded-lg shadow-md overflow-hidden mb-10">
              <img src="img/edu.png" alt="" class="w-full">
              <div class="py-8 px-6">
                <h3 class="mb-1 text-2xl font-semibold text-sd">EDU RECORD</h3>
                <p class="text-base font-normal text-body mb-6">Kami mengupas tuntas, sehingga kami mendapatkan gambaran yang lengkap dengan kondisi siswa terbaru sehingga siswa sampai target.</p>
              </div>
            </div>
          </div>

          <div class="w-full px-4 lg:w-1/3">
            <div class="bg-white rounded-lg shadow-md overflow-hidden mb-10">
              <img src="img/uji.png" alt="" class="w-full">
              <div class="py-8 px-6">
                <h3 class="mb-1 text-2xl font-semibold text-sd">GRATIS UJI COBA</h3>
                <p class="text-base font-normal text-body mb-16">Kamu tidak perlu takut guru tidak nyaman, karena bisa uji coba baru bayar program.</p>
              </div>
            </div>
          </div>

          <div class="w-full px-4 lg:w-1/3">
            <div class="bg-white rounded-lg shadow-md overflow-hidden mb-10">
              <img src="img/konsul.png" alt="" class="w-full">
              <div class="py-8 px-6">
                <h3 class="mb-1 text-2xl font-semibold text-sd">SESI KONSULTASI</h3>
                <p class="text-base font-normal text-body mb-10">Konsultasi kapanpun dan dimanapun akan selalu di respon dengan baik oleh tim konsultan kami.</p>
              </div>
            </div>
          </div>

          <div class="w-full px-4 lg:w-1/3">
            <div class="bg-white rounded-lg shadow-md overflow-hidden mb-10">
              <img src="img/best.png" alt="" class="w-full">
              <div class="py-8 px-6">
                <h3 class="mb- text-2xl font-semibold text-sd">BEST PRACTICE</h3>
                <p class="text-base font-normal text-body mb-5">Sejak 2011 Radian mengembangkan berbagai tools, sistem, dan teknologi terkini untuk memastikan dan menggaransi target impian siswa.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  <!-- kelebihan section end -->

  <!-- testimoni section start -->
  <section id="testi" class="pt-16 pb-[50px]">
    <div class="container">
      <div class="w-full px-4 mb-10">
        <div class="max-w-full mx-auto text-center">
          <h3 class="font-semibold text-5xl text-sd mb-0 pt-16">SAAT BELAJAR DI RADIAN</h3>
          <p class="font-normal text-lg text-body mt-0 mb-8">Apa saja yang mereka rasakan ketika belajar dan ikut program di Radian?</p>
        </div>
      </div>

      <div class="flex">
        <div id="sliderContainer" class="w-full overflow-hidden">
          <ul id="slider" class="flex w-full mr-4">
              <li class="mr-3">
                  <img src="img/testisd1.png" alt="" class="h-auto w-full mr-4">
              </li>
              <li class="mr-3">
                  <img src="img/testisd2.png" alt="" class="h-auto w-full mr-4">
              </li>
              <li class="mr-3">
                  <img src="img/testisd3.png" alt="" class="h-auto w-full mr-4">
              </li>
              <li class="mr-3">
                  <img src="img/testisd1.png" alt="" class="h-auto w-full mr-4">
              </li>
              <li class="mr-3">
                <img src="img/testisd2.png" alt="" class="h-auto w-full mr-4">
            </li>
            <li>
                <img src="img/testisd3.png" alt="" class="h-auto w-full">
            </li>
          </ul>
      </div>
      </div>

      <div class="flex">
        <div class="w-full text-center">
          <button onclick="next()" class="p-3 rounded-full bg-slate-100 border border-gray-100 shadow-lg mr-5">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-sd">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                </svg>                              
          </button>

          <button onclick="prev()" class="p-3 rounded-full bg-slate-100 border border-gray-100 shadow-lg mr-5">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-sd">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                </svg>                              
          </button>
      </div>
      </div>

    </div>
    </div>
  </section>
  <!-- testimoni section end -->

  <!-- program section start -->
  <section id="program" class="pt-16 bg-slate-100">
      <div class="container">
        <div class="w-full px-4 mb-10">
          <div class="max-w-full mx-auto text-center">
            <h5 class="text-base font-semibold text-sd mt-12 mb-1">PROGRAM</h5>
            <h1 class="text-5xl font-semibold text-black mt-1 mb-2">Pilih Sesinya Sekarang, Yuk</h1>
            <p class="text-lg font-normal text-body mt-2 mb-12">Berbagai macam program yang bisa kamu pilih untuk membantu kamu meningkatkan prestasi</p>
          </div>
        </div>

        <div class="flex flex-wrap">

          <div class="w-full px-4 lg:w-1/2">
            <div class="bg-white rounded-3xl shadow-md overflow-hidden mb-10">
              <img src="img/bimbel - sd.png" alt="" class="w-full">
              <div class="py-8 px-6">
                <h3 class="text-2xl font-bold text-sd mb-2">Bimbel Garansi</h3>
                <p class="text-base font-medium text-black mb-2">Program Bimbel dengan pembelajaran tatap muka dengan guru yang asik, dan komunikatif dilakukan di ruang kelas yang telah di sediakan.</p>
                <span class="list font-medium text-base mb-0">Program bimbel yang tersedia : 
                  <ul class="font-medium text-base text-black">
                    <li><span>🚀</span>
                    Pasti (3 Siswa)
                    </li>
                    <li><span>🚀</span>
                    Mulia (5 Siswa)
                    </li>
                    <li><span>🚀</span>
                    Cemerlang (10 Siswa)
                    </li>
                    <li><span>🚀</span>
                    Custom (15 - 25 Siswa)
                    </li>
                  </ul>
                </span>
              </div>
            </div>
          </div>

          <div class="w-full px-4 lg:w-1/2">
            <div class="bg-white rounded-3xl shadow-md overflow-hidden mb-10">
              <img src="img/privat - sd.png" alt="" class="w-full">
              <div class="py-8 px-6">
                <h3 class="text-2xl font-bold text-sd mb-2">Private Garansi</h3>
                <p class="text-base font-medium text-black mb-2">Program Private dengan sistem 1 siswa 1 guru. Waktu belajar yang flexibel dan bisa dimana saja memudahkan siswa untuk belajar kapanpun dan dimanapun.</p>
                <span class="list font-medium text-base mb-0">Program bimbel yang tersedia : 
                  <ul class="font-medium text-base text-black">
                    <li><span>🚀</span>
                    Reguler
                    </li>
                    <li class="mb-12"><span>🚀</span>
                    Premium
                    </li>
                  </ul>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  <!-- program section end  -->

  <!-- daftar section start -->
  <section id="daftar" class="pb-20 pt-16">
      <div class="container">
          <div class="pl-4 mx-auto bg-gradient-to-r from-orange to-second lg:w-[1227px] lg:h-[306px] h-[700px] rounded-3xl sm:pl-6 lg:pl-8 relative">
              <div class="2xl:pl-24">
                  <div class="grid items-center grid-cols-1 gap-y-12 lg:grid-cols-2 lg:gap-x-8 2xl:gap-x-20">
                      <div class="lg:order-1 order-2">
                        <h2 class="text-5xl font-bold text-white lg:mt-12 mt-2 mb-2">SEGERA DAFTAR!</h2>
                        <p class="text-lg font-medium text-white mb-9">Tunggu Apalagi segera dapatkan Diskon Up To 30% sampai tanggal 15 September 2022</p>
                        <a href="#" class="text-sm font-bold text-white bg-sma py-3 px-8 mr-4 rounded-lg">Daftar Segera</a>
                        <a href="#" class="text-sm font-bold text-white border border-white py-3 px-8 rounded-lg">Konsultasi</a>
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
  <footer class="bg-footer pt-24 pb-12">
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
  </footer>
  <!-- footer section end -->


    
    <script src="{{asset('/js/sd.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>