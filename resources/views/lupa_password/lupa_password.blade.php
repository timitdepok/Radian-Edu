@extends('lupa_password.layout.template')
@section('content')

<section class="container flex pt-8 sm:pt-0 justify-center sm:items-center items-start min-h-screen">

    <div class="max-w-[424px] h-fit p-6 bg-white rounded-md">
        <div class="w-fit flex flex-row mb-6 items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 stroke-primary mr-2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
            </svg>      
            <p class="text-sm font-semibold">Radian Edu Solution</p>
        </div>
        <form action="{{ route('send.link') }}" method="post" class="w-full mb-4">
            @csrf
            <div class="w-fit mb-6">
                <h1 class="text-2xl font-semibold mb-2">Lupa Password</h1>
                <p class="text-sm text-secondaryGray">
                    Masukkan alamat email yang terkait dengan akun Anda dan kami akan mengirimkan tautan untuk mengatur ulang kata sandi Anda.
                </p>
            </div>
            <div class="mb-4">
                <label for="email" class="block mb-2 text-base font-semibold text-gray-900 after:content-['*'] after:text-red-600 after:ml-1 after:text-sm">Email</label>
                <input type="email" name="email" id="email" class="h-12 text-sm px-4 w-full outline-none @error('email') border-primarySD @else border-primaryInp @enderror border rounded-md " value="{{ old('email') }}" required>
                @error("email")
                    <p class="text-sm font-normal mt-1 text-primarySD">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="w-full rounded-md bg-primary text-white text-base py-3">Selanjutnya</button>
        </form>
        <span class="text-xs w-full flex justify-center">Don't have a account? <a href="{{ route('registrasi') }}" class="text-primary">Sign Up</a></span>
    </div>


</section>
<script>
    // menampilkan pesan success saat brhasil menambahkan data
    @if(Session::has('success'))
        toastr.success("{{ Session::get('success') }}")
    @endif

    // menampilkan pesan failed saat gagal menambahkan data
    @if(Session::has('failed'))
        toastr.error("{{ Session::get('failed') }}")
    @endif
</script>
    
@endsection