@extends('dashboard.layout.template')
@section('content')

<div class="px-4 py-7 sm:px-12">
    <div class="w-full mb-12">
        <h1 class="text-3xl font-semibold mb-2">
            Pengaturan
        </h1>
    </div>

    <div class="w-full flex flex-wrap gap-4">

        {{-- tingkatan  --}}
        <a href="{{ route('tingkatan') }}" class="w-80 border-r-4 border-l-4 border-primary h-fit p-6 bg-white rounded-md flex flex-col items-center justify-center">
            <div class="w-full flex flex-col justify-center items-center">
                <div class="w-fit mb-[18px]">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-[100px] h-[100px] fill-primary">
                        <path d="M11.7 2.805a.75.75 0 01.6 0A60.65 60.65 0 0122.83 8.72a.75.75 0 01-.231 1.337 49.949 49.949 0 00-9.902 3.912l-.003.002-.34.18a.75.75 0 01-.707 0A50.009 50.009 0 007.5 12.174v-.224c0-.131.067-.248.172-.311a54.614 54.614 0 014.653-2.52.75.75 0 00-.65-1.352 56.129 56.129 0 00-4.78 2.589 1.858 1.858 0 00-.859 1.228 49.803 49.803 0 00-4.634-1.527.75.75 0 01-.231-1.337A60.653 60.653 0 0111.7 2.805z" />
                        <path d="M13.06 15.473a48.45 48.45 0 017.666-3.282c.134 1.414.22 2.843.255 4.285a.75.75 0 01-.46.71 47.878 47.878 0 00-8.105 4.342.75.75 0 01-.832 0 47.877 47.877 0 00-8.104-4.342.75.75 0 01-.461-.71c.035-1.442.121-2.87.255-4.286A48.4 48.4 0 016 13.18v1.27a1.5 1.5 0 00-.14 2.508c-.09.38-.222.753-.397 1.11.452.213.901.434 1.346.661a6.729 6.729 0 00.551-1.608 1.5 1.5 0 00.14-2.67v-.645a48.549 48.549 0 013.44 1.668 2.25 2.25 0 002.12 0z" />
                        <path d="M4.462 19.462c.42-.419.753-.89 1-1.394.453.213.902.434 1.347.661a6.743 6.743 0 01-1.286 1.794.75.75 0 11-1.06-1.06z" />
                    </svg>
                </div>
                <p class="text-2xl text-primary font-semibold w-fit">Tingkatan</p>
            </div>
        </a>

        {{-- mata pelajaran  --}}
        <a href="{{ route('mata.pelajaran') }}" class="w-80 border-r-4 border-l-4 border-primarySD h-fit p-6 bg-white rounded-md flex flex-col items-center justify-center">
            <div class="w-80 flex flex-col justify-center items-center">
                <div class="w-fit mb-[18px]">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-[100px] h-[100px] fill-primarySD">
                        <path d="M11.25 4.533A9.707 9.707 0 006 3a9.735 9.735 0 00-3.25.555.75.75 0 00-.5.707v14.25a.75.75 0 001 .707A8.237 8.237 0 016 18.75c1.995 0 3.823.707 5.25 1.886V4.533zM12.75 20.636A8.214 8.214 0 0118 18.75c.966 0 1.89.166 2.75.47a.75.75 0 001-.708V4.262a.75.75 0 00-.5-.707A9.735 9.735 0 0018 3a9.707 9.707 0 00-5.25 1.533v16.103z" />
                    </svg>  
                </div>
                <p class="text-2xl text-primarySD font-semibold w-fit">Mata Pelajaran</p>
            </div>
        </a>

        {{-- user regitrasi  --}}
        <a href="{{ route('user.registrasi') }}" class="w-80 border-r-4 border-l-4 border-primaryYellow h-fit p-6 bg-white rounded-md flex flex-col items-center justify-center">
            <div class="w-80 flex flex-col justify-center items-center">
                <div class="w-fit mb-[18px]">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-[100px] h-[100px] fill-primaryYellow">
                        <path d="M10 9a3 3 0 100-6 3 3 0 000 6zM6 8a2 2 0 11-4 0 2 2 0 014 0zM1.49 15.326a.78.78 0 01-.358-.442 3 3 0 014.308-3.516 6.484 6.484 0 00-1.905 3.959c-.023.222-.014.442.025.654a4.97 4.97 0 01-2.07-.655zM16.44 15.98a4.97 4.97 0 002.07-.654.78.78 0 00.357-.442 3 3 0 00-4.308-3.517 6.484 6.484 0 011.907 3.96 2.32 2.32 0 01-.026.654zM18 8a2 2 0 11-4 0 2 2 0 014 0zM5.304 16.19a.844.844 0 01-.277-.71 5 5 0 019.947 0 .843.843 0 01-.277.71A6.975 6.975 0 0110 18a6.974 6.974 0 01-4.696-1.81z" />
                    </svg>  
                </div>
                <p class="text-2xl text-primaryYellow font-semibold w-fit">User Registrasi</p>
            </div>
        </a>

        {{-- kontak  --}}
        <a href="{{ route('kontak') }}" class="w-80 border-r-4 border-l-4 border-primary h-fit p-6 bg-white rounded-md flex flex-col items-center justify-center">
            <div class="w-80 flex flex-col justify-center items-center">
                <div class="w-fit mb-[18px]">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-[100px] h-[100px] fill-primary">
                        <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z" clip-rule="evenodd" />
                    </svg>
                </div>
                <p class="text-2xl text-primary font-semibold w-fit">Kontak</p>
            </div>
        </a>

        {{-- harga  --}}
        <a href="{{ route('harga') }}" class="w-80 border-r-4 border-l-4 border-primarySD h-fit p-6 bg-white rounded-md flex flex-col items-center justify-center">
            <div class="w-80 flex flex-col justify-center items-center">
                <div class="w-fit mb-[18px]">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-[100px] h-[100px] fill-primarySD">
                        <path d="M12 7.5a2.25 2.25 0 100 4.5 2.25 2.25 0 000-4.5z" />
                        <path fill-rule="evenodd" d="M1.5 4.875C1.5 3.839 2.34 3 3.375 3h17.25c1.035 0 1.875.84 1.875 1.875v9.75c0 1.036-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 011.5 14.625v-9.75zM8.25 9.75a3.75 3.75 0 117.5 0 3.75 3.75 0 01-7.5 0zM18.75 9a.75.75 0 00-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 00.75-.75V9.75a.75.75 0 00-.75-.75h-.008zM4.5 9.75A.75.75 0 015.25 9h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H5.25a.75.75 0 01-.75-.75V9.75z" clip-rule="evenodd" />
                        <path d="M2.25 18a.75.75 0 000 1.5c5.4 0 10.63.722 15.6 2.075 1.19.324 2.4-.558 2.4-1.82V18.75a.75.75 0 00-.75-.75H2.25z" />
                    </svg>
                      
                </div>
                <p class="text-2xl text-primarySD font-semibold w-fit">Harga</p>
            </div>
        </a>

    </div>
</div>

@endsection