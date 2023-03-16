@extends('dashboard.layout.template')
@section('content')

<div class="px-4 py-7 sm:px-12">
    <div class="w-full mb-12">
        <h1 class="text-3xl font-semibold mb-2">
            Selamat Datang 👋
        </h1>
        <p class="text-2xl font-medium text-bodyText">
            {{ $user->nama }}
        </p>
    </div>

    <div class="w-full flex flex-wrap gap-4">

        {{-- guru aktif  --}}
        <div class="w-96 h-fit p-8 bg-white rounded-md flex flex-col items-center justify-center">
            <p class="w-fit text-xl mb-6 font-medium text-center">Jumlah Guru Yang Aktif</p>
            <div class="w-full flex justify-center items-center">
                <div class="w-fit mr-[18px]">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-[100px] h-[100px] fill-primary">
                        <path d="M6.25 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM3.25 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM19.75 7.5a.75.75 0 00-1.5 0v2.25H16a.75.75 0 000 1.5h2.25v2.25a.75.75 0 001.5 0v-2.25H22a.75.75 0 000-1.5h-2.25V7.5z" />
                    </svg>  
                </div>
                <div class="w-fit flex flex-col items-center justify-center">
                    <p class="text-3xl text-primary font-semibold">{{ $guru["aktif"] }}</p>
                    <p class="text-3xl text-primary font-semibold">Guru</p>
                </div>
            </div>
        </div>

        {{-- guru aktif  --}}
        <div class="w-96 h-fit p-8 bg-white rounded-md flex flex-col items-center justify-center">
            <p class="w-fit text-xl mb-6 font-medium text-center">Jumlah Guru Yang Tidak Aktif</p>
            <div class="w-full flex justify-center items-center">
                <div class="w-fit mr-[18px]">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-[100px] h-[100px] fill-primarySD">
                        <path d="M10.375 2.25a4.125 4.125 0 100 8.25 4.125 4.125 0 000-8.25zM10.375 12a7.125 7.125 0 00-7.124 7.247.75.75 0 00.363.63 13.067 13.067 0 006.761 1.873c2.472 0 4.786-.684 6.76-1.873a.75.75 0 00.364-.63l.001-.12v-.002A7.125 7.125 0 0010.375 12zM16 9.75a.75.75 0 000 1.5h6a.75.75 0 000-1.5h-6z" />
                    </svg>  
                </div>
                <div class="w-fit flex flex-col items-center justify-center">
                    <p class="text-3xl text-primarySD font-semibold">{{ $guru["tidak_aktif"] }}</p>
                    <p class="text-3xl text-primarySD font-semibold">Guru</p>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection