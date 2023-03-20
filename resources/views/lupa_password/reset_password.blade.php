@extends('lupa_password.layout.template')
@section('content')

<section class="container flex pt-8 sm:pt-0 justify-center sm:items-center items-start min-h-screen">

    <div class="rounded-md max-w-[424px] h-fit p-6 bg-white">                 
        <div class="w-fit flex flex-row mb-6 items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 stroke-primary mr-2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 5.25a3 3 0 013 3m3 0a6 6 0 01-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1121.75 8.25z" />
            </svg> 
            <p class="text-sm font-semibold">Radian Edu Solution</p>
        </div>
        <form action="{{ route('update.password', [$token]) }}" method="post" class="w-full mb-4">
            @csrf
            <div class="w-fit mb-6">
                <h1 class="text-2xl font-semibold mb-2">Buat Password Baru</h1>
                <p class="text-sm text-secondaryGray">
                    Kata sandi baru Anda harus berbeda dari kata sandi yang digunakan sebelumnya.
                </p>
            </div>
            <input type="hidden" name="token" value="{{ $token ?? "" }}">
            <div class="mb-4">
                <label for="email" class="block mb-2 text-base font-semibold text-gray-900 after:content-['*'] after:text-red-600 after:ml-1 after:text-sm">Email</label>
                <input type="email" name="email" id="email" class="h-12 text-sm px-4 w-full outline-none @error('email') border-primarySD @else border-primaryInp @enderror border rounded-md" value="{{ $email ?? "" }}" readonly required>
                @error("email")
                    <p class="text-sm font-normal mt-1 text-primarySD">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password" class="block mb-2 text-base font-semibold text-gray-900 after:content-['*'] after:text-red-600 after:ml-1 after:text-sm">Password</label>
                <input type="password" name="password" id="password" class="h-12 text-sm px-4 w-full outline-none @error('password') border-primarySD @else border-primaryInp @enderror border rounded-md" required>
                @error("password")
                    <p class="text-sm font-normal mt-1 text-primarySD">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password_confirmation" class="block mb-2 text-base font-semibold text-gray-900 after:content-['*'] after:text-red-600 after:ml-1 after:text-sm">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="h-12 text-sm px-4 w-full outline-none @error('password_confirmation') border-primarySD @else border-primaryInp @enderror border rounded-md" required>
                @error("password_confirmation")
                    <p class="text-sm font-normal mt-1 text-primarySD">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="w-full rounded-md bg-primary text-white text-base py-3">Selanjutnya</button>
        </form>
        <span class="w-full flex justify-center text-xs text-primary">Change Password</span>
    </div>


</section>

<script>
    @if(Session::has('failed'))
        toastr.error("{{ Session::get('failed') }}")
    @endif
</script>
    
@endsection