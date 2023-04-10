@extends('home.layout.template')
@section('content')

<section class="text-gray-600 body-font font-poppins overflow-hidden bg-white">

    
<div class="container px-5 py-9 mx-auto max-w-[1120px] pt-12 8x75:pt-14 pb-12 8x75:pb-28">
        
    <div class="w-full h-[200px] 8x75:h-[350px] bg-primary absolute top-0 right-0 z-0 bg-cover bg-center" style="background-image: url({{ asset('/img/profile/profil_hero.png') }});"></div>

    <div class="my-8 flex flex-col notebook:block z-50 relative">
        <div class="w-full flex flex-col 8x75:flex-row justify-center items-center 8x75:justify-between z-50 8x75:mb-32 mb-24 relative">
            <div class="flex flex-col 8x75:flex-row items-center w-full ">
                
                {{-- profil guru  --}}
                <div class="image w-44 h-52 rounded-md mr-4 bg-cover bg-top" style="background-image: url({{ asset('storage/' . $guru->foto) }})"></div>
                <div class="w-fit flex flex-col h-full">
                    <h1 class="mt-4 8x75:mt-0 text-4xl 8x75:max-w-[500px] overflow-hidden 8x75:max-h-[80px] font-semibold text-black text-center 8x75:text-left 8x75:text-white mb-3">{{ ucwords(strtolower($guru->nama)) }}</h1>
                    <p class="font-medium text-xl text-black text-center 8x75:text-left 8x75:text-white mb-3">Tutor Lulusan {{ $guru->jurusan }} {{ $guru->asal_ptn }} </p>
                    <p class="font-medium text-black text-center 8x75:text-left 8x75:text-white mb-3">{{ $guru->kegiatan_mengajar }}</p>
                    
                    {{-- kabupaten  --}}
                    <div class="flex flex-row items-center justify-center 8x75:justify-start mb-3">
                        <div class="p-[10px] bg-primary rounded-md mr-4 hidden 8x75:block">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 fill-white">
                                <path fill-rule="evenodd" d="M9.69 18.933l.003.001C9.89 19.02 10 19 10 19s.11.02.308-.066l.002-.001.006-.003.018-.008a5.741 5.741 0 00.281-.14c.186-.096.446-.24.757-.433.62-.384 1.445-.966 2.274-1.765C15.302 14.988 17 12.493 17 9A7 7 0 103 9c0 3.492 1.698 5.988 3.355 7.584a13.731 13.731 0 002.273 1.765 11.842 11.842 0 00.976.544l.062.029.018.008.006.003zM10 11.25a2.25 2.25 0 100-4.5 2.25 2.25 0 000 4.5z" clip-rule="evenodd" />
                            </svg>                                                      
                        </div>
                        <p class="font-medium text-black text-center 8x75:text-white">{{ $guru->kabupaten }}</p>
                    </div>

                    {{-- harga  --}}
                    <div class="flex flex-row items-center justify-center 8x75:justify-start">
                        <div class="p-[10px] bg-primary rounded-md mr-4 hidden 8x75:block">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 fill-white">
                                <path fill-rule="evenodd" d="M1 4a1 1 0 011-1h16a1 1 0 011 1v8a1 1 0 01-1 1H2a1 1 0 01-1-1V4zm12 4a3 3 0 11-6 0 3 3 0 016 0zM4 9a1 1 0 100-2 1 1 0 000 2zm13-1a1 1 0 11-2 0 1 1 0 012 0zM1.75 14.5a.75.75 0 000 1.5c4.417 0 8.693.603 12.749 1.73 1.111.309 2.251-.512 2.251-1.696v-.784a.75.75 0 00-1.5 0v.784a.272.272 0 01-.35.25A49.043 49.043 0 001.75 14.5z" clip-rule="evenodd" />
                            </svg>                                                                                 
                        </div>
                        <p class="font-medium text-black text-center 8x75:text-white">Rp. {{ number_format($guru->harga + ($guru->harga * ($keuntungan / 100)), 0, ",", ".") }} / Sesi</p>
                    </div>

                </div>
            </div>

            {{-- Pesan guru  --}}
            <div class="w-full 8x75:w-[200px] 8x75:flex-col flex justify-center 8x75:justify-between items-center 8x75:items-start mt-6 8x75:mt-0">
                <a href="#Pesan-Guru" class="justify-center rounded-md px-4 py-2 bg-primaryYellow  max-w-[200px] max-h-[50px] items-center">
                    <span class="text-black text-lg font-semibold">Pesan Guru</span>
                </a>
            </div>
        </div>

        <div class="w-full mb-9">
            @if ($guru->tes_tulis && !$guru->top_star)
                {{-- deskripsi recomended  --}}
                <div class="item p-6 rounded-md bg-blue-100 border border-blue-500">
                    <div class="flex flex-row items-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8 mr-2 fill-primary">
                            <path fill-rule="evenodd" d="M8.603 3.799A4.49 4.49 0 0112 2.25c1.357 0 2.573.6 3.397 1.549a4.49 4.49 0 013.498 1.307 4.491 4.491 0 011.307 3.497A4.49 4.49 0 0121.75 12a4.49 4.49 0 01-1.549 3.397 4.491 4.491 0 01-1.307 3.497 4.491 4.491 0 01-3.497 1.307A4.49 4.49 0 0112 21.75a4.49 4.49 0 01-3.397-1.549 4.49 4.49 0 01-3.498-1.306 4.491 4.491 0 01-1.307-3.498A4.49 4.49 0 012.25 12c0-1.357.6-2.573 1.549-3.397a4.49 4.49 0 011.307-3.497 4.49 4.49 0 013.497-1.307zm7.007 6.387a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
                        </svg>                              
                        <span class="text-lg font-semibold text-primary block">Recomended</span>
                    </div>
                    <p class="text-base">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Commodi consequuntur fugit, similique corporis atque numquam? Distinctio, asperiores dolore inventore accusantium nihil ipsa molestiae et 
                        corporis fuga odio iure aperiam, eligendi earum a autem suscipit corrupti alias perspiciatis, quibusdam quod. Velit nihil, natus fugiat, sit minus at quos impedit voluptatum consequuntur expedita 
                        labore voluptates eos dicta aliquid quo optio! Est, a!
                    </p>
                </div>

            @elseif ($guru->tes_tulis && $guru->top_star)
                {{-- deskripsi Senior master --}}
                <div class="item p-6 rounded-md bg-blue-100 border border-blue-500">
                    <div class="flex flex-row items-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8 mr-2 fill-primary">
                            <path fill-rule="evenodd" d="M5.166 2.621v.858c-1.035.148-2.059.33-3.071.543a.75.75 0 00-.584.859 6.753 6.753 0 006.138 5.6 6.73 6.73 0 002.743 1.346A6.707 6.707 0 019.279 15H8.54c-1.036 0-1.875.84-1.875 1.875V19.5h-.75a2.25 2.25 0 00-2.25 2.25c0 .414.336.75.75.75h15a.75.75 0 00.75-.75 2.25 2.25 0 00-2.25-2.25h-.75v-2.625c0-1.036-.84-1.875-1.875-1.875h-.739a6.706 6.706 0 01-1.112-3.173 6.73 6.73 0 002.743-1.347 6.753 6.753 0 006.139-5.6.75.75 0 00-.585-.858 47.077 47.077 0 00-3.07-.543V2.62a.75.75 0 00-.658-.744 49.22 49.22 0 00-6.093-.377c-2.063 0-4.096.128-6.093.377a.75.75 0 00-.657.744zm0 2.629c0 1.196.312 2.32.857 3.294A5.266 5.266 0 013.16 5.337a45.6 45.6 0 012.006-.343v.256zm13.5 0v-.256c.674.1 1.343.214 2.006.343a5.265 5.265 0 01-2.863 3.207 6.72 6.72 0 00.857-3.294z" clip-rule="evenodd" />
                        </svg>                              
                        <span class="text-lg font-semibold text-primary block">Senior Master</span>
                    </div>
                    <p class="text-base">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Commodi consequuntur fugit, similique corporis atque numquam? Distinctio, asperiores dolore inventore accusantium nihil ipsa molestiae et 
                        corporis fuga odio iure aperiam, eligendi earum a autem suscipit corrupti alias perspiciatis, quibusdam quod. Velit nihil, natus fugiat, sit minus at quos impedit voluptatum consequuntur expedita 
                        labore voluptates eos dicta aliquid quo optio! Est, a!
                    </p>
                </div>
            @else
                {{-- deskripsi baru  --}}
                <div class="item p-6 rounded-md bg-blue-100 border border-blue-500">
                    <div class="flex flex-row items-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8 mr-2 fill-primary">
                            <path fill-rule="evenodd" d="M5.25 2.25a3 3 0 00-3 3v4.318a3 3 0 00.879 2.121l9.58 9.581c.92.92 2.39 1.186 3.548.428a18.849 18.849 0 005.441-5.44c.758-1.16.492-2.629-.428-3.548l-9.58-9.581a3 3 0 00-2.122-.879H5.25zM6.375 7.5a1.125 1.125 0 100-2.25 1.125 1.125 0 000 2.25z" clip-rule="evenodd" />
                        </svg>                              
                        <span class="text-lg font-semibold text-primary block">Baru</span>
                    </div>
                    <p class="text-base">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Commodi consequuntur fugit, similique corporis atque numquam? Distinctio, asperiores dolore inventore accusantium nihil ipsa molestiae et 
                        corporis fuga odio iure aperiam, eligendi earum a autem suscipit corrupti alias perspiciatis, quibusdam quod. Velit nihil, natus fugiat, sit minus at quos impedit voluptatum consequuntur expedita 
                        labore voluptates eos dicta aliquid quo optio! Est, a!
                    </p>
                </div>
            @endif
        </div>

        {{-- data minat mengajar dan deskripsi guru  --}}
        <div class="flex flex-wrap notebook:flex-nowrap justify-between mb-[90px]">
            <div class="flex-grow notebook:max-w-[48%]">
                <p class="text-xl font-medium mb-[22px] text-black">Tentang {{  ucwords(strtolower($guru->nama)) }} </p>
                <p class="text-base mb-[22px] text-bodyText">
                    {{ $guru->deskripsi_diri }}
                </p>
            </div>
            <div class="flex-grow notebook:max-w-[48%]">
                <p class="text-xl font-medium mb-[22px] text-black">Rules</p>
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
            <div class="flex-grow max-w-[48%] hidden notebook:block"></div>
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
                                {{ date("d M Y", strtotime($guru->dari_pendidikan)) }} - {{ date("d M Y", strtotime($guru->sampai_pendidikan)) }}
                            </p>
                        </div>
        
                        <h1 class="text-[32px] font-bold mb-1 text-black">
                            {{ $guru->asal_ptn }}
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
            <div class="flex-grow notebook:max-w-[48%] hidden notebook:block"></div>
            <div class="flex-grow notebook:max-w-[48%]">
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
      
        <div id="Pesan-Guru" class="w-full">
            {{-- title  --}}
            <h1 class="text-black text-4xl sm:text-5xl text-center max-w-[700px] font-semibold mx-auto mb-8">PESAN DAN ATUR JADWAL SESUKAMU SEKARANG JUGA</h1>
            
            {{-- subtitle  --}}
            <p class="text-base text-bodyText text-center mb-8">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate ipsam minus voluptatem temporibus recusandae vel.</p>

            {{-- form  --}}
            <form action="{{ route('pesan.guru') }}" method="POST">
                @csrf

                {{-- nama  --}}
                <div class="mb-9">
                    <label class="block mb-2 text-xl font-medium" for="nama">Nama Lengkap</label>
                    <input type="text" name="nama" id="nama" class="h-12 sm:min-w-[523px] text-lg px-4 w-full outline-none @error('nama') border-primarySD @else border-primaryInp @enderror border rounded-md bg-white" placeholder="Nama lengkap" required>
                    @error('nama')
                        <p class="text-sm font-normal mt-1 text-primarySD">{{ $message }}</p>  
                    @enderror
                </div>

                {{-- mata pelajaran  --}}
                <div class="mb-9">
                    <div class="mb-4">
                        <label for="mata_pelajaran" class="block mb-2 text-xl font-medium">Mata Pelajaran</label>
                        <div class="block relative">
                          <div class="rounded-r-md absolute bg-white border-t border-r border-b @error('mata_pelajaran') border-primarySD @else border-primaryInp @enderror pr-4 flex items-center justify-center right-0 h-full">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                            </svg>                  
                          </div>
                          <select name="mata_pelajaran" id="mata_pelajaran" class="h-12 sm:min-w-[523px] text-lg px-4 w-full outline-none @error('mata_pelajaran') border-primarySD @else border-primaryInp @enderror border rounded-md bg-white" required>
                            <option value="" style="display: none;">Pilih mata pelajaran</option>
                            @isset($guru->minat_mengajar)
                                @foreach ($guru->minat_mengajar as $row)
                                    @php
                                        $mapel = $row->mata_pelajaran->tingkatan->tingkatan . " - " . $row->mata_pelajaran->mata_pelajaran;   
                                    @endphp
                                    <option @if(old("mata_pelajaran") == $mapel) selected @endif value="{{ $mapel }}">{{ $mapel }}</option>
                                @endforeach
                            @endisset
                          </select>
                        </div>
                        @error("mata_pelajaran")
                          <p class="text-sm font-normal mt-1 text-primarySD">{{ $message }}</p>
                        @enderror
                      </div>
                </div>

                {{-- jumlah sesi  --}}
                <div class="mb-9">
                    <label class="block mb-2 text-xl font-medium" for="jumlah_sesi">Jumlah Sesi</label>
                    <input type="number" name="jumlah_sesi" id="jumlah_sesi" class="h-12 sm:min-w-[523px] text-lg px-4 w-full outline-none @error('jumlah_sesi') border-primarySD @else border-primaryInp @enderror border rounded-md bg-white" placeholder="Pilih jumlah sesi" required>
                    @error('jumlah_sesi')
                        <p class="text-sm font-normal mt-1 text-primarySD">{{ $message }}</p>
                    @enderror
                </div>

                {{-- pengajuan tanggal  --}}
                <div class="mb-9">
                    <label class="block mb-2 text-xl font-medium" for="ajukan_tanggal">Ajukan Tanggal</label>
                    <input type="date" name="ajukan_tanggal" id="ajukan_tanggal" class="h-12 sm:min-w-[523px] text-lg px-4 w-full outline-none @error('ajukan_tanggal') border-primarySD @else border-primaryInp @enderror border rounded-md bg-white" required>
                    @error('ajukan_tanggal')
                        <p class="text-sm font-normal mt-1 text-primarySD">{{ $message }}</p>
                    @enderror
                </div>

                {{-- nama guru  --}}
                <input type="hidden" name="nama_guru" value="{{ $guru->nama }}" required>

                {{-- key  --}}
                <input type="hidden" name="key" value="{{ encrypt($guru->id) }}" required>

                {{-- jumlah_bayar  --}}
                <input type="hidden" name="jumlah_bayar" value="{{ $guru->harga + ($guru->harga * ($keuntungan / 100)) }}" required>

                <button type="submit" name="submit" value="submit" class="bg-primary px-4 py-3 text-base font-medium text-white rounded-md">Pesan Guru Sekarang</button>
            </form>

        </div>

    </div>
</div>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{ asset('/js/detail_guru.js') }}"></script>

@endsection