@extends('auth.layout.template')
@section('content')

<section class="min-h-screen flex justify-center items-center">
    <div class="grid grid-cols-1 lg:grid-cols-2">
        <div class="relative flex items-end px-4 pb-8 pt-60 sm:pb-16 md:justify-center lg:pb-24 bg-gray-50 sm:px-6 lg:px-8">
            <div class="absolute inset-0">
                <img class="object-cover object-top w-full h-full" src="img/login.png" alt="" />
            </div>
            <div class="absolute inset-0 bg-gradient-to-t from-primary to-transparent"></div>

            <div class="relative">
                <div class="w-full max-w-xl xl:w-full xl:mx-auto xl:pr-24 xl:max-w-xl">
                    <h3 class="lg:text-5xl text-2xl font-semibold text-white mb-4">Selamat Datang <br class="hidden xl:block" />Kembali Di Radian.</h3>
                    <p class="lg:text-lg text-base font-normal text-white">Halaman ini dikhususkan untuk para tutor yang sudah mendaftar di Radian</p>
                </div>
            </div>
        </div>

        <div class="flex items-center justify-center px-4 py-8 bg-white sm:px-6 lg:px-8 sm:py-16 lg:py-14">
            <div class="xl:w-full xl:max-w-sm 2xl:max-w-md xl:mx-auto">
                <img class="w-28 h-20 mb-14 mx-36" src="img/logo-radian 1.png" alt="">
                <h2 class="text-xl font-medium text-black sm:text-xl mb-2">Login</h2>
                <p class="mt-2 text-lg font-normal text-body">Silahkan Login ke Akun Anda! </p>

                <form action="{{ route('authentication') }}" method="POST" class="mt-8">
                    @csrf
                    <div class="space-y-5">
                        <div class="mb-6">
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Your email</label>
                                <input name="email" type="email" id="email" class="bg-gray-50 border @error('email') border-red-400 @else border-gray-300 @enderror text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="name@email.com" value="{{ old('email') }}" required>
                            @error('email')
                                <p class="text-sm text-red-400">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Your password</label>
                            <input name="password" type="password" id="password" class="bg-gray-50 border @error('password') border-red-400 @else border-gray-300 @enderror text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" value="" required>
                            @error('password')
                                <p class="text-sm text-red-400">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex items-start mb-6">
                            <div class="flex items-center h-5">
                              <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300">
                            </div>
                            <label for="remember" class="ml-2 text-sm font-medium text-gray-900">Remember me</label>
                        </div>
                        <button type="submit" class="mb-3 text-white bg-primary hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full py-2.5 text-center" href="/profile">Submit</button>
                        <a href="{{ route('registrasi') }}" class="w-full text-sm font-semibold flex justify-center text-primary border border-primary py-2.5 rounded-lg">Register</a>
                    </div>
                </form>
            </div>
        </div>
    </div>


</section>

<script>
    @if(Session::has('success'))
        toastr.success("{{ Session::get('success') }}")
    @endif
</script>
@endsection


  