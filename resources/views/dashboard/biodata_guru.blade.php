@extends('dashboard.layout.template_biodata')
@section('content')
    
<section class="text-gray-600 body-font font-poppins overflow-hidden bg-white">

    
    <div class="container px-5 py-9 mx-auto max-w-[1120px] pt-12 8x75:pt-28 pb-12 8x75:pb-28">
            
        <div class="w-full h-[200px] 8x75:h-[300px] bg-primary absolute top-0 right-0 z-0 bg-cover bg-center" style="background-image: url({{ asset('/img/profile/profil_hero.png') }});"></div>
    
        <div class="my-8 flex flex-col notebook:block z-50 relative">
            <div class="w-full flex flex-col 8x75:flex-row justify-center 8x75:justify-between z-50 8x75:mb-32 mb-24 relative">
                <div class="flex flex-col 8x75:flex-row items-center 8x75:items-start w-full 8x75:w-[70%]">
                    <div class="bg-cover bg-top w-[200px] h-[200px] mr-0 8x75:mr-7 overflow-hidden justify-center rounded-full">
                        <img src="{{ asset('storage/' . $guru->foto) }}" class="h-full w-full object-cover" alt="foto profil">
                    </div>
        
                    <div class="mt-4 8x75:mt-0 w-full 8x75:max-w-[350px]">
                        <h1 class="text-4xl 8x75:max-w-[350px] overflow-hidden 8x75:max-h-[80px] font-semibold text-black text-center 8x75:text-left 8x75:text-white mt-2">{{ $guru->nama }}</h1>
                        <p class="text-base 8x75:max-w-[350px] overflow-hidden 8x75:max-h-[24px] font-medium text-black text-center 8x75:text-left 8x75:text-white mt-2">{{ $guru->email }}</p>
                        <p class="text-base 8x75:max-w-[350px] overflow-hidden 8x75:max-h-[24px] font-medium text-black text-center 8x75:text-left 8x75:text-white mt-1">{{ $guru->kegiatan_mengajar }}</p>
                    </div>
                </div>
            </div>
    
            {{-- Profil guru  --}}
            <h1 class="text-[32px] mb-4 font-semibold text-black">Profil Guru</h1>
            <hr class="h-[1px] bg-primaryInp w-full mb-[22px]">
            <div class="flex flex-wrap notebook:flex-nowrap justify-between mb-[90px]">
                <div class="flex-grow notebook:max-w-[48%]">
                    <div class="mb-4">
                        <p class="text-xl font-medium mb-[22px] text-black">Tanggal Lahir</p>
                        <p class="text-base mb-[22px] text-bodyText">
                            {{ date("d M Y", strtotime($guru->tanggal_lahir)) }}
                        </p>
                    </div>
                    <div class="mb-4">
                        <p class="text-xl font-medium mb-[22px] text-black">Nomor Telepon</p>
                        <p class="text-base mb-[22px] text-bodyText">
                            {{ $guru->no_telepon }}
                        </p>
                    </div>
                    <div class="mb-4">
                        <p class="text-xl font-medium mb-[22px] text-black">Deskripsi Guru</p>
                        <p class="text-base mb-[22px] text-bodyText">
                            {{ $guru->deskripsi_diri }}
                        </p>
                    </div>
                </div>
                <div class="flex-grow notebook:max-w-[48%]">
                    <div class="mb-4">
                        <p class="text-xl font-medium mb-[22px] text-black">Provinsi</p>
                        <p class="text-base mb-[22px] text-bodyText">
                            {{ $guru->provinsi }}
                        </p>
                    </div>
                    <div class="mb-4">
                        <p class="text-xl font-medium mb-[22px] text-black">Kabupaten</p>
                        <p class="text-base mb-[22px] text-bodyText">
                            {{ $guru->kabupaten }}
                        </p>
                    </div>
                    <div class="mb-4">
                        <p class="text-xl font-medium mb-[22px] text-black">Kecamatan</p>
                        <p class="text-base mb-[22px] text-bodyText">
                            {{ $guru->kecamatan }}
                        </p>
                    </div>
                    <div class="mb-4">
                        <p class="text-xl font-medium mb-[22px] text-black">Alamat</p>
                        <p class="text-base mb-[22px] text-bodyText">
                            {{ $guru->alamat }}
                        </p>
                    </div>
                </div>
            </div>
    
            {{-- Pendidikan --}}
            <h1 class="text-[32px] mb-4 font-semibold text-black">Pendidikan</h1>
            <hr class="h-[1px] bg-primaryInp w-full mb-[22px]">
            <div class="flex flex-wrap notebook:flex-nowrap justify-between mb-[90px]">
                {{-- <div class="flex-grow notebook:max-w-[48%]">
                    <div class="mb-4">
                        <p class="text-xl font-medium mb-[22px] text-black">Asal PTN</p>
                        <p class="text-base mb-[22px] text-bodyText">
                            {{ $guru->asal_ptn }}
                        </p>
                    </div>
                    <div class="mb-4">
                        <p class="text-xl font-medium mb-[22px] text-black">Jurusan</p>
                        <p class="text-base mb-[22px] text-bodyText">
                            {{ $guru->jurusan }}
                        </p>
                    </div>
                    <div class="mb-4">
                        <p class="text-xl font-medium mb-[22px] text-black">IPK</p>
                        <p class="text-base mb-[22px] text-bodyText">
                            {{ $guru->ipk }}
                        </p>
                    </div>
                </div> --}}
                <div class="flex-grow notebook:max-w-full">
                    <div class="flex flex-row w-full">
                        <div class="mr-0 sm:mr-5">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-9 h-9 sm:w-12 sm:h-12 fill-black hidden sm:block">
                                <path d="M12.378 1.602a.75.75 0 00-.756 0L3 6.632l9 5.25 9-5.25-8.622-5.03zM21.75 7.93l-9 5.25v9l8.628-5.032a.75.75 0 00.372-.648V7.93zM11.25 22.18v-9l-9-5.25v8.57a.75.75 0 00.372.648l8.628 5.033z" />
                            </svg>
                        </div>
                        <div class="w-full">
                            <div class="mb-1 flex flex-row justify-between">
                                <p class="text-primaryYellow font-semibold text-base">
                                    {{ date("d M Y", strtotime($guru->dari_pendidikan)) }} - {{ date("d M Y", strtotime($guru->sampai_pendidikan)) }}
                                </p>
                            </div>
            
                            <h1 class="text-[32px] font-bold mb-1 text-black">
                                {{ $guru->universitas }}
                            </h1>
            
                            <p class="text-base text-bodyText">
                                {{ $guru->deskripsi_pendidikan }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
          
            {{-- Pengalaman --}}
            <h1 class="text-[32px] mb-4 font-semibold text-black">Pengalaman</h1>
            <hr class="h-[1px] bg-primaryInp w-full mb-[22px]">
            <div class="flex flex-wrap notebook:flex-nowrap justify-between mb-[90px]">
                {{-- <div class="flex-grow notebook:max-w-[48%]"></div> --}}
                <div class="flex-grow notebook:max-w-full">
                    @if($guru->pengalaman)
                        @foreach ($guru->pengalaman as $row)
                            <div class="flex flex-row w-full mb-7">
                                <div class="mr-0 sm:mr-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-9 h-9 sm:w-12 sm:h-12 fill-black hidden sm:block">
                                        <path d="M12.378 1.602a.75.75 0 00-.756 0L3 6.632l9 5.25 9-5.25-8.622-5.03zM21.75 7.93l-9 5.25v9l8.628-5.032a.75.75 0 00.372-.648V7.93zM11.25 22.18v-9l-9-5.25v8.57a.75.75 0 00.372.648l8.628 5.033z" />
                                    </svg>
                                </div>
                                <div class="w-full">
                                    <div class="mb-1 flex flex-row justify-between">
                                        <p class="text-primaryYellow font-semibold text-base">
                                            {{ date("d M Y", strtotime($row->dari_pengalaman)) }} - {{ date("d M Y", strtotime($row->sampai_pengalaman)) }}
                                        </p>
                                    </div>
                    
                                    <h1 class="text-[32px] font-bold mb-1 text-black">
                                        {{ $row->perusahaan }}
                                    </h1>
                    
                                    <p class="text-base text-bodyText">
                                        {{ $row->deskripsi_pengalaman }}
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
    
            {{-- Minat Mengajar --}}
            <h1 class="text-[32px] mb-4 font-semibold text-black">Minat Mengajar</h1>
            <hr class="h-[1px] bg-primaryInp w-full mb-[22px]">
            <div class="flex flex-wrap notebook:flex-nowrap justify-between mb-[90px]">
                <div class="flex-grow notebook:max-w-[60%]">
                    <div class="w-full flex flex-wrap gap-3">
                        @if ($guru->minat_mengajar)
                            @foreach ($guru->minat_mengajar as $row)
                                <div class="block bg-primaryYellow rounded-full py-[10px] w-fit px-6">
                                    <p class="text-black text-sm">{{ $row->mata_pelajaran->tingkatan->tingkatan }} - {{ $row->mata_pelajaran->mata_pelajaran }}</p>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="flex-grow notebook:max-w-[40%]"></div>
            </div>
      
            {{-- Domisili Mengajar --}}
            <h1 class="text-[32px] mb-4 font-semibold text-black">Domisili Mengajar</h1>
            <hr class="h-[1px] bg-primaryInp w-full mb-[22px]">
            <div class="flex flex-wrap notebook:flex-nowrap justify-between mb-[90px]">
                <div class="flex-grow notebook:max-w-[60%]">
                    <div class="w-full flex flex-wrap gap-3">
                        @if ($guru->domisili_mengajar)
                            @foreach ($guru->domisili_mengajar as $row)
                                <div class="block bg-primaryYellow rounded-full py-[10px] w-fit px-6">
                                    <p class="text-black text-sm">{{ $row->kecamatan->name }}</p>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="flex-grow notebook:max-w-[40%]"></div>
            </div>

            {{-- Kegiatan --}}
            <h1 class="text-[32px] mb-4 font-semibold text-black">Kegiatan</h1>
            <hr class="h-[1px] bg-primaryInp w-full mb-[22px]">
            <div class="flex flex-wrap notebook:flex-nowrap justify-between mb-[90px]">
                <div class="flex-grow notebook:max-w-[60%]">
                    <div class="w-full flex flex-wrap gap-3">
                        @if ($guru->kegiatan)
                            @foreach ($guru->kegiatan as $row)
                                <div class="block bg-primaryYellow rounded-full py-[10px] w-fit px-6">
                                    <p class="text-black text-sm">{{ $row->kegiatan }}</p>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="flex-grow notebook:max-w-[40%]"></div>
            </div>

            {{-- Download CV --}}
            <h1 class="text-[32px] mb-4 font-semibold text-black">Resume/CV</h1>
            <hr class="h-[1px] bg-primaryInp w-full mb-[22px]">
            <div class="flex flex-wrap notebook:flex-nowrap justify-between mb-[90px]">
                <div class="flex-grow notebook:max-w-[60%]">
                    <div class="w-full flex flex-wrap gap-3">
                        <div class="w-fit">
                            <a href="{{ asset('storage/'.$guru->cv) }}" download class="h-14 justify-center rounded-md px-4 py-2 bg-primaryYellow flex flex-row max-w-[200px] max-h-[50px] items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7 stroke-black mr-2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5m8.25 3v6.75m0 0l-3-3m3 3l3-3M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                                </svg>                             
                                <span class="text-black text-base font-medium">Download CV</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="flex-grow notebook:max-w-[40%]"></div>
            </div>
    
            {{-- logout --}}
            <div class="w-full flex justify-end">
                <div class="w-fit">
                    <a href="{{ route('list.profile.guru') }}" class="justify-center rounded-md px-4 py-2 bg-primary flex flex-row max-w-[200px] max-h-[50px] items-center">
                        <span class="text-white text-base font-semibold h-[35px] flex items-center">Kembali</span>
                    </a>
                </div>
            </div>
    
        </div>
    </div>
</section>    

@endsection