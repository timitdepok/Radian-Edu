@extends('biodata.layout.template')
@section('content')

<section class="min-h-screen font-poppins flex justify-center items-center bg-slate-100">
    <div class="container">
        <div class="overflow-hidden bg-white max-w-[411px] max-h-[82px] px-[27px] py-[14px] mt-9 items-center flex flex-row justify-center rounded-full mx-auto">
            <div class="mx-auto flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-[54px] w-[54px] text-sd" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                  </svg>
                <div class="px-6">
                    <h1 class="text-lg font-medium text-sd mb-2">
                        Informasi
                    </h1>
                    <p class="text-xs font-normal text-body">Harap untuk membaca informasi</p>
                </div>
                <a href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-[54px] w-[54px]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                  </svg>
                </a>
                
            </div>
        </div>

        <div class="mt-12 flex flex-wrap mx-auto items-center max-w-6xl">
            <h1 class="text-2xl font-semibold text-black mb-6 mx-auto text-center">
                Selamat Datang Para Calon Tenaga Pendidik 👋 <br>Sebelumnya, isilah daftar data diri dengan benar! 
            </h1>
            <p class="text-lg font-normal text-body mb-10 mx-auto text-center">
                Terimakasih atas partisipasi dan atusias Anda untuk menjadi bagian dari tenaga pendidik Radian edu solution, Selanjutnya Anda harus mengisi daftar data diri anda. mohon untuk diisi dengan tepat dan benar. Silahkan untuk menekan tombol selanjutnya jika Anda sudah siap mengisi biodata. 
            </p>
            <a class="text-base font-semibold text-white bg-primary px-[51px] py-4 mx-auto rounded-lg mb-10" href="/biodata/step2">Selanjutnya</a>
        </div>

        <img src="img/rules.png" alt="" class="w-[680px] h-[394px] mx-auto items-center text-center mb-9">
    </div>
</section>

{{-- footer section start --}}
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
{{-- footer section end --}}

@endsection