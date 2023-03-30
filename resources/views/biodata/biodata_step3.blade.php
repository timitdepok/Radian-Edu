@extends('biodata.layout.template')
@section('content')

<section class="min-h-screen font-poppins flex justify-center items-center">
    <div class="container">
        <img src="{{ asset('/img/info.png') }}" alt="" class="lg:w-[510px] w-auto h-[337px] mx-auto mt-[118px] mb-16">
        <div class="mx-auto">
            <h1 class="lg:text-2xl text-xl font-semibold text-black mb-6 mx-auto text-center max-w-[850px]">
                Selamat, Anda sudah selangkah lagi menuju Radian. Terimakasih telah berpartisipasi untuk menjadi bagian dari Radian Edu.
            </h1>
            <p class="lg:text-lg text-base font-normal text-body mb-16 text-center mx-auto max-w-[1120px]">
                Kami berharap Anda telah mengisi data dengan benar, Selanjutnya anda akan melakukan test yang akan di informasikan melalui kontak WhatsApp anda, Anda akan diarahkan ke Dashboard Tutor ketika Anda sudah lulus dalam tahap test. silahkan tekan tombol berikut untuk mempelajari lebih dalam mengenai Radian Edu Solution.
            </p>
        </div>


          <a href="{{ route('profile') }}" class="py-4 px-6 bg-primary font-medium text-white rounded-md mx-auto flex items-center justify-center w-[116px] h-[56px]">
            Selesai
          </a>

          <form action="{{ route('tes.tulis') }}" method="post">
            @csrf
            <input type="submit" name="submit" value="Tes Tulis" class="mt-4 py-4 px-6 bg-green-500 font-medium text-white rounded-md mx-auto flex items-center justify-center w-[116px] h-[56px]">
          </form>
        
    </div>
</section>

{{-- footer section start --}}
<footer class="bg-footer pt-24 pb-12">
    <div class="container">
      <div class="flex flex-wrap">

        <div class="w-full px-4 md:w-1/4">
          <img src="{{ asset('/img/logo.png') }}" alt="" class="mb-4">
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
<script>
    @if(Session::has('success'))
        toastr.success("{{ Session::get('success') }}")
    @endif
</script>

@endsection