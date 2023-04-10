@extends('profile.layout.template')
@section('content')

<section class="text-gray-600 body-font font-poppins overflow-hidden bg-white">

    
<div class="container px-5 py-9 mx-auto max-w-[1120px] pt-12 8x75:pt-28 pb-12 8x75:pb-28">
        
    <div class="w-full h-[200px] 8x75:h-[300px] bg-primary absolute top-0 right-0 z-0 bg-cover bg-center" style="background-image: url({{ asset('/img/profile/profil_hero.png') }});"></div>

    <div class="my-8 flex flex-col notebook:block z-50 relative">
        <div class="w-full flex flex-col 8x75:flex-row justify-center 8x75:justify-between z-50 8x75:mb-32 mb-24 relative">
            <div class="flex flex-col 8x75:flex-row items-center 8x75:items-start w-full 8x75:w-[70%]">
                <div class="bg-cover bg-top w-[200px] h-[200px] mr-0 8x75:mr-7 overflow-hidden justify-center rounded-full">
                    <img src="{{ asset('storage/' . $user->foto) }}" class="h-full w-full object-cover" alt="">
                </div>
    
                <div class="mt-4 8x75:mt-0 w-full 8x75:max-w-[350px]">
                    <h1 class="text-4xl 8x75:max-w-[350px] overflow-hidden 8x75:max-h-[80px] font-semibold text-black text-center 8x75:text-left 8x75:text-white mt-2">{{ ucwords(strtolower($user->nama)) }}</h1>
                    <p class="text-base 8x75:max-w-[350px] overflow-hidden 8x75:max-h-[24px] font-medium text-black text-center 8x75:text-left 8x75:text-white mt-2">{{ $user->email }}</p>
                    <p class="text-base 8x75:max-w-[350px] overflow-hidden 8x75:max-h-[24px] font-medium text-black text-center 8x75:text-left 8x75:text-white mt-1">{{ $user->kegiatan_mengajar }}</p>
                </div>
            </div>

            <div class="w-full 8x75:w-fit 8x75:flex-col flex justify-center 8x75:justify-between items-center 8x75:items-start mt-6 8x75:mt-0">
                <a href="{{ route('profile.edit') }}" class="justify-center rounded-md px-4 py-2 bg-primaryYellow flex flex-row max-w-[200px] max-h-[50px] items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-[35px] h-[35px] fill-black mr-4">
                        <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32l8.4-8.4z" />
                        <path d="M5.25 5.25a3 3 0 00-3 3v10.5a3 3 0 003 3h10.5a3 3 0 003-3V13.5a.75.75 0 00-1.5 0v5.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V8.25a1.5 1.5 0 011.5-1.5h5.25a.75.75 0 000-1.5H5.25z" />
                    </svg>
                    <span class="text-black text-base font-semibold">Edit Profil</span>
                </a>
            </div>
        </div>

        @if(!$user->tes_tulis)
            <div class="w-full p-6 rounded-md bg-yellow-100 border border-yellow-400 mb-6">
                <p class="text-base">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Commodi consequuntur fugit, similique corporis atque numquam? Distinctio, asperiores dolore inventore accusantium nihil ipsa molestiae et 
                    corporis fuga odio iure aperiam, eligendi earum a autem suscipit corrupti alias perspiciatis, quibusdam quod. Velit nihil, natus fugiat, sit minus at quos impedit voluptatum consequuntur expedita 
                    labore voluptates eos dicta aliquid quo optio! Est, a!
                </p>
                <div class="w-full flex justify-end mt-4">
                    <form action="{{ route('tes.tulis') }}" method="post" class="inline-block w-fit">
                        @csrf
                        <input type="submit" name="submit" value="Tes Tulis" class="py-3 px-5 bg-yellow-400 font-medium text-white rounded-md">
                    </form>
                </div>
            </div>
        @endif

        {{-- Profil guru  --}}
        <h1 class="text-[32px] mb-4 font-semibold text-black">Profil Guru</h1>
        <hr class="h-[1px] bg-primaryInp w-full mb-[22px]">
        <div class="flex flex-wrap notebook:flex-nowrap justify-between mb-[90px]">
            <div class="flex-grow notebook:max-w-[48%]">
                <p class="text-xl font-medium mb-[22px] text-black">Deskripsi Guru</p>
                <p class="text-base mb-[22px] text-bodyText">
                    {{ $user->deskripsi_diri }}
                </p>
            </div>
            <div class="flex-grow notebook:max-w-[48%]">
                <p class="text-xl font-medium mb-[22px] text-black">Contact</p>
                <p class="text-base mb-[22px] text-bodyText">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Est iusto minima iure quisquam, eos quasi hic quod porro, quis eveniet 
                    odio nulla tenetur quia repellat distinctio ipsum animi eligendi consequatur veniam fugiat quo itaque. Architecto magnam saepe 
                    soluta delectus nihil, dolor, earum, recusandae provident illo quod facilis? Officia, accusantium dolorum.
                </p>
            </div>
        </div>

        {{-- Pendidikan --}}
        <h1 class="text-[32px] mb-4 font-semibold text-black">Pendidikan</h1>
        <hr class="h-[1px] bg-primaryInp w-full mb-[22px]">
        <div class="flex flex-wrap notebook:flex-nowrap justify-between mb-[90px]">
            <div class="flex-grow notebook:max-w-[48%] hidden notebook:block"></div>
            <div class="flex-grow notebook:max-w-[48%]">
                <div class="flex flex-row w-full">
                    <div class="mr-0 sm:mr-5">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-9 h-9 sm:w-12 sm:h-12 fill-black hidden sm:block">
                            <path d="M12.378 1.602a.75.75 0 00-.756 0L3 6.632l9 5.25 9-5.25-8.622-5.03zM21.75 7.93l-9 5.25v9l8.628-5.032a.75.75 0 00.372-.648V7.93zM11.25 22.18v-9l-9-5.25v8.57a.75.75 0 00.372.648l8.628 5.033z" />
                        </svg>
                    </div>
                    <div class="w-full">
                        <div class="mb-1 flex flex-row justify-between">
                            <p class="text-primaryYellow font-semibold text-base">
                                {{ date("d M Y", strtotime($user->dari_pendidikan)) }} - {{ date("d M Y", strtotime($user->sampai_pendidikan)) }}
                            </p>
                        </div>
        
                        <h1 class="text-[32px] font-bold mb-1 text-black">
                            {{ $user->asal_ptn }}
                        </h1>
        
                        <p class="text-base text-bodyText">
                            {{ $user->deskripsi_pendidikan }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
      
        {{-- Pengalaman --}}
        <h1 class="text-[32px] mb-4 font-semibold text-black">Pengalaman</h1>
        <hr class="h-[1px] bg-primaryInp w-full mb-[22px]">
        <div class="flex flex-wrap notebook:flex-nowrap justify-between mb-[90px]">
            <div class="flex-grow notebook:max-w-[48%] hidden notebook:block"></div>
            <div class="flex-grow notebook:max-w-[48%]">
                @if($user->pengalaman)
                    @foreach ($user->pengalaman as $row)
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
                    @if ($user->minat_mengajar)
                        @foreach ($user->minat_mengajar as $row)
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
                    @if ($user->domisili_mengajar)
                        @foreach ($user->domisili_mengajar as $row)
                            <div class="block bg-primaryYellow rounded-full py-[10px] w-fit px-6">
                                <p class="text-black text-sm">{{ $row->kecamatan->name }}</p>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
            <div class="flex-grow notebook:max-w-[40%]"></div>
        </div>

        {{-- logout --}}
        <div class="w-full flex justify-end">
            @role('admin')
                <a href="{{ route('dashboard') }}" class="mr-4 justify-center rounded-md px-4 py-2 bg-primary flex flex-row max-w-[200px] max-h-[50px] items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-[35px] h-[35px] fill-white mr-4">
                        <path fill-rule="evenodd" d="M9.293 2.293a1 1 0 011.414 0l7 7A1 1 0 0117 11h-1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-3a1 1 0 00-1-1H9a1 1 0 00-1 1v3a1 1 0 01-1 1H5a1 1 0 01-1-1v-6H3a1 1 0 01-.707-1.707l7-7z" clip-rule="evenodd" />
                    </svg>
                    <span class="text-white text-base font-semibold">Dashboard</span>
                </a>
            @endrole
            <form action="{{ route('logout') }}" class="w-fit" method="post">
                @csrf
                <button type="submit" class="justify-center rounded-md px-4 py-2 bg-primarySD flex flex-row max-w-[200px] max-h-[50px] items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-[35px] h-[35px] stroke-white mr-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                    </svg>
                    <span class="text-white text-base font-semibold">Log Out</span>
                </button>
            </form>
        </div>

    </div>
</div>

<script>
    @if(Session::has('success'))
        toastr.success("{{ Session::get('success') }}")
    @endif

    @if(Session::has('failed'))
        toastr.error("{{ Session::get('failed') }}")
    @endif
</script>
</section>
@endsection