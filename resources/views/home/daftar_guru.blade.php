@extends('home.layout.template')
@section('content')

<!-- navbar section end -->
<header class="fixed z-50 w-full">
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
            <a class="px-4 py-2 mt-2 text-sm font-semibold md:ml-4 hover:text-primary text-body focus:outline-none focus:shadow-outline" href="{{ route('home') }}">Home</a>
            <a class="px-4 py-2 mt-2 text-sm font-semibold md:ml-4 hover:text-primary text-body focus:outline-none focus:shadow-outline" href="#alumni">Kedokteran</a>
            <a class="px-4 py-2 mt-2 text-sm font-semibold md:ml-4 hover:text-primary text-body focus:outline-none focus:shadow-outline" href="#testi">Kedinasan</a>
            <a class="px-4 py-2 mt-2 text-sm font-semibold md:ml-4 hover:text-primary text-body focus:outline-none focus:shadow-outline" href="#unggul">PTN Favorit</a>
            <a class="px-4 py-2 mt-2 text-sm font-semibold md:ml-4 hover:text-primary text-body focus:outline-none focus:shadow-outline" href="#program">Privat Camp Garansi</a>
            <a class="px-4 py-2 mt-2 text-sm font-semibold md:ml-4 w-[120px] h-[38px] border text-white bg-primary rounded-lg">Konsultasi</a>
        </nav>
    </div>
</div>
</header>
<!-- navbar section end -->

<!-- header section start -->
<section id="#" class="pt-12 pb-16">
    <div class="container">
        <div class="mx-auto">
            <h5 class="text-lg font-semibold text-primary mb-2 text-center">DAFTAR TUTOR</h5>
            <h1 class="text-5xl font-semibold text-black mb-2 text-center">REKOMENDASI TUTOR TERBAIK DAN BERPENGALAMAN PILIHAN RADIAN!</h1>
            <p class="text-lg font-normal text-body mb-[46px] text-center">Ayo tulis tutor yang kamu inginkan, biar kami yang bantu carikan!</p>
            <div class="flex flex-wrap">
                <form action="{{ route('daftar.guru') }}" method="GET"  class="mx-auto flex items-center justify-center md:max-w-md">
                    <div class="w-full max-w-md items-center justify-center">
                        <div class="relative flex text-text border border-body rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 absolute ml-3 self-center" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                            </svg>
                            <input type="text" name="mata_pelajaran" placeholder="Mata Pelajaran" autocomplete="off" aria-label="Mata Pelajaran" class="w-full py-3 pl-10 font-normal rounded-lg" value="{{ $mata_pelajaran ? $mata_pelajaran : "" }}">
                        </div>
                    </div>
                    <div action="" class="w-full max-w-md ml-6 items-center justify-center">
                        <div class="relative flex text-text border border-body rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 absolute ml-3 self-center" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                            </svg>
                            <input type="text" name="domisili" placeholder="Daerah" autocomplete="off" aria-label="Daerah" class="w-full py-3 pl-10 font-normal rounded-lg" value="{{ $domisili ? $domisili : "" }}">
                        </div>
                    </div>
                    <button class="text-base font-normal text-white p-3 bg-primary rounded-lg ml-9 items-center justify-center" href="#">Cari</button>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- header section end -->

<!-- daftar guru section start -->
<section id="#" class="pb-7">
    <div class="container">
        <div class="flex flex-wrap">

            {{-- menampilkan data tutor (yang sudah microteaching) --}}
            @isset ($guru)
                @foreach ($guru as $row)
                <div class="w-full px-4 mb-10 lg:w-1/4">
                    <div class="bg-white card rounded-2xl overflow-hidden relative group w-[253px] h-[348px]">
                    @if ($row->top_star)
                        <div class="px-4 py-2 bg-primary rounded-md absolute top-0 right-0 z-10 mr-2 mt-2">
                            <span class="text-xs text-white font-medium">Top Star</span>
                        </div> 
                    @endif
                     <div class="h-[348px] transition-all transform bg-cover bg-top" style="background-image: url({{ asset('storage/'. $row->foto) }});">
                         <div class="bg-primaryYellow h-[98px] rounded-2xl absolute inset-x-0 bottom-0 text-center">
                             <h1 class="text-xl font-medium text-black mb-2">{{ $row->nama }}</h1>
                             <h5 class="text-lg font-normal text-black mb-0">{{ $row->minat_mengajar->first()->mata_pelajaran->mata_pelajaran ?? "Mata pelajaran" }} - {{ $row->kabupaten ? ucwords(strtolower($row->kabupaten)) : "Domisili" }}</h5>
                             <h5 class="text-lg font-normal text-black mb-3">{{ $row->asal_ptn }}</h5>
                         </div>
                     </div>
                     <div class="absolute bottom-0 left-0 w-full"></div>
                     <div class="absolute z-0 inset-0 bg-primaryYellow opacity-0 group-hover:z-20 group-hover:opacity-100 transition-all"></div>
                     <div class="group-hover:-translate-y-3 group-hover:bottom-0 transition-all group-hover:z-20 absolute button-0 left-0 text-black p-4 justify-center content-center">
                         <h4 class="font-medium mb-1 text-xl text-center opacity-80">Angelina</h4>
                         <h3 class="font-normal mb-0 text-lg text-center">{{ $row->minat_mengajar->first()->mata_pelajaran->mata_pelajaran ?? "" }} - {{ $row->kabupaten ? ucwords(strtolower($row->kabupaten)) : "Domisili" }}</h3>
                         <h3 class="font-normal mb-3 text-lg text-center">{{ $row->asal_ptn }}</h3>
                         <div class="justify-center mx-12">
                             
                                {{-- menampilkan keuntungan  --}}
                                <a class="transition-all text-sm inline-flex rounded-xl mb-28 px-2 py-2 text-center justify-center border border-primary bg-primary text-semibold" href="{{ route('detail.guru', [encrypt($row->id)]) }}">
                                 <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentcolor">
                                     <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd" />
                                </svg>

                                {{-- harga  --}}
                                Rp. {{ number_format($row->harga + ($row->harga * ($keuntungan / 100)), 0, ",", ".") }}
                            </a>
                         </div> 
                     </div>
                   </div>
                </div>
                @endforeach
            @endisset
            
        </div>

        <div class="w-full mx-auto mt-2 mb-4">
            {{ $guru->links() }}
        </div>

    </div>
</section>
<!-- daftar guru section end -->

<!-- footer section start -->
<section id="#" class="bg-footer pt-16 pb-12">
    <div class="container">
        <div class="flex flex-wrap">

            <div class="w-full px-4 md:w-1/4">
              <img src="{{ asset('img/logo.png') }}" alt="" class="mb-4">
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
<script src="/js/daftarguru.js"></script>
    
@endsection