@extends('profile.layout.template')
@section('content')

<section class="text-gray-600 body-font font-poppins overflow-hidden bg-white">
<div class="container px-5 py-9 mx-auto max-w-[1120px] pt-12 pb-12">
    <div class="w-full h-[200px] bg-primary absolute top-0 right-0 z-0 bg-cover bg-center" style="background-image: url({{ asset('/img/profile/profil_hero.png') }});"></div>
    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data" class="my-8 flex flex-col notebook:block z-50 relative">
        @csrf
        <div class="w-full flex flex-col justify-center z-50 mb-24 relative">
            <div class="flex flex-col items-center w-full">
                <div class="w-fit relative mr-0 8x75:mr-7">
                    <div class="bg-cover bg-top w-[200px] h-[200px] overflow-hidden justify-center rounded-full">
                        <img src="{{ asset('storage/' . $user->foto) }}" id="foto-profile" class="h-full w-full object-cover" alt="">
                    </div>
                    <label for="update_foto" class="cursor-pointer block w-fit bottom-0 right-0 bg-primary p-4 rounded-full absolute">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 stroke-white">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.827 6.175A2.31 2.31 0 015.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 00-1.134-.175 2.31 2.31 0 01-1.64-1.055l-.822-1.316a2.192 2.192 0 00-1.736-1.039 48.774 48.774 0 00-5.232 0 2.192 2.192 0 00-1.736 1.039l-.821 1.316z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 12.75a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zM18.75 10.5h.008v.008h-.008V10.5z" />
                        </svg>                          
                        <input type="file" name="update_foto" id="update_foto" class="hidden">   
                    </label>
                </div>
            </div>
        </div>

        {{-- Profil guru  --}}
        <h1 class="text-[32px] mb-4 font-semibold text-black">Profil Guru</h1>
        <hr class="h-[1px] bg-primaryInp w-full mb-[22px]">
        <div class="flex flex-wrap notebook:flex-nowrap justify-between mb-[90px]">
            <div class="flex-grow notebook:max-w-[48%]">

                {{-- nama --}}
                <div class="mb-4 notebook:mb-4">
                    <p class="text-xl font-medium mb-[22px] text-black">Nama</p>
                    <input type="text" name="nama" class="text-sm h-12 px-4 py-4 w-full outline-none @error('nama') border-primarySD @else border-primaryInp @enderror border rounded-md" value="{{ old('nama') ? old('nama') : $user->nama }}" >
                    @error("nama")
                        <p class="text-sm font-normal mt-1 text-primarySD">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <p class="text-xl font-medium mb-[22px] text-black">Nomor Telepon</p>
                    <input type="text" name="no_telepon" id="no_telepon" class="h-12 sm:min-w-[523px] text-sm px-4 w-full outline-none @error('no_telepon') border-primarySD @else border-primaryInp @enderror border rounded-md" pattern="[0]{1}[8]{1}[0-9]{8,11}" value="{{ old('no_telepon') ? old('no_telepon') : $user->no_telepon }}" >
                    @error("no_telepon")
                      <p class="text-sm font-normal mt-1 text-primarySD">{{ $message }}</p>
                    @enderror
                  </div>
                
                {{-- deskripsi diri --}}
                <div class="mb-4 notebook:mb-0">
                    <p class="text-xl font-medium mb-[22px] text-black">Deskripsi Guru</p>
                    <textarea name="deskripsi_diri" id="deskripsi_diri" cols="40" rows="9" class="sm:min-w-[338px] text-sm px-4 py-4 w-full outline-none @error('deskripsi_diri') border-primarySD @else border-primaryInp @enderror border rounded-md" >{{ old('deskripsi_diri') ? old('deskripsi_diri') : $user->deskripsi_diri }}</textarea>
                    @error("deskripsi_diri")
                        <p class="text-sm font-normal mt-1 text-primarySD">{{ $message }}</p>
                    @enderror
                </div>
                
                
            </div>
            <div class="flex-grow notebook:max-w-[48%]">

                <div class="mb-4">
                    <p class="text-xl font-medium mb-[22px] text-black">Kegiatan Mengajar</p>
                    <div class="block relative">
                    <div class="rounded-r-md absolute bg-white border-t border-r border-b @error('kegiatan_mengajar') border-primarySD @else border-primaryInp @enderror pr-4 flex items-center justify-center right-0 h-full">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                        </svg>                  
                    </div>
                    <select name="kegiatan_mengajar" id="kgt_mengajar" class="appearance-none h-12 text-sm px-4 w-full outline-none @error('kegiatan_mengajar') border-primarySD @else border-primaryInp @enderror  border rounded-md" >
                        <option style="display: none;" value=""></option>
                        <option @if(old("kegiatan_mengajar") ? old("kegiatan_mengajar") : $user->kegiatan_mengajar == "Online" ) selected @endif value="Online">Online</option>
                        <option @if(old("kegiatan_mengajar") ? old("kegiatan_mengajar") : $user->kegiatan_mengajar == "Offline" ) selected @endif value="Offline">Offline</option>
                        <option @if(old("kegiatan_mengajar") ? old("kegiatan_mengajar") : $user->kegiatan_mengajar == "Online dan Offline" ) selected @endif value="Online dan Offline">Online dan Offline</option>
                    </select>
                    </div>
                    @error("kegiatan_mengajar")
                        <p class="text-sm font-normal mt-1 text-primarySD">{{ $message }}</p>
                    @enderror
                </div>

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
            <div class="flex-grow hidden notebook:block notebook:max-w-[48%]"></div>
            <div class="flex-grow notebook:max-w-[48%]">
                <div class="flex flex-row w-full">
                    <div class="w-full">
            
                        {{-- tanggal masuk dan keluar universitas  --}}
                        <div class="mb-4 flex flex-row justify-between">
                            <div class="w-[48%]">
                                <label for="mulai" class="block mb-2 text-base font-semibold text-gray-900">Dari</label>
                                <input type="date" name="dari_pendidikan" id="mulai" class="h-12 text-sm px-4 w-full outline-none @error('dari_pendidikan') border-primarySD @else border-primaryInp @enderror border rounded-md" value="{{ old('dari_pendidikan') ? old('dari_pendidikan') : $user->dari_pendidikan }}" >
                                @error("dari_pendidikan")
                                  <p class="text-sm font-normal mt-1 text-primarySD">{{ $message }}</p>
                                @enderror
                            </div>
            
                            <div class="w-[48%]">
                                <label for="sampai" class="block mb-2 text-base font-semibold text-gray-900">Sampai</label>
                                <input type="date" name="sampai_pendidikan" id="sampai_pendidikan" class="h-12 text-sm px-4 w-full outline-none @error('sampai_pendidikan') border-primarySD @else border-primaryInp @enderror border rounded-md" value="{{ old('sampai_pendidikan') ? old('sampai_pendidikan') : $user->sampai_pendidikan }}" >
                                @error("sampai_pendidikan")
                                  <p class="text-sm font-normal mt-1 text-primarySD">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        
                        {{-- nama univeristas --}}
                        <div class="mb-4">
                            <label for="universitas" class="block mb-2 text-base font-semibold text-gray-900">Universitas</label>
                            <input type="text" name="universitas" id="universitas" class="h-12 sm:min-w-[523px] text-sm px-4 w-full outline-none @error('universitas') border-primarySD @else border-primaryInp @enderror border rounded-md" value="{{ old('universitas') ? old('universitas') : $user->universitas  }}" >
                            @error("universitas")
                              <p class="text-sm font-normal mt-1 text-primarySD">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        {{-- deskripsi mengenai pendidikan --}}
                        <div class="mb-4">
                            <label for="deskripsi" class="block mb-2 text-base font-semibold text-gray-900">Deskripsi</label>
                            <textarea name="deskripsi_pendidikan" id="deskripsi" cols="40" rows="8" class="sm:min-w-[338px] text-sm px-4 py-4 w-full outline-none @error('deskripsi_pendidikan') border-primarySD @else border-primaryInp @enderror border rounded-md" >{{ old('deskripsi_pendidikan') ? old('deskripsi_pendidikan') : $user->deskripsi_pendidikan }}</textarea>
                            @error("deskripsi_pendidikan")
                              <p class="text-sm font-normal mt-1 text-primarySD">{{ $message }}</p>
                            @enderror
                        </div>

                    </div>
                </div>
            </div>
        </div>
      
        {{-- Pengalaman --}}
        <div class="w-full flex flex-row justify-between items-center">
            <h1 class="text-[32px] mb-4 font-semibold text-black">Pengalaman</h1>
            <div id="tambah-pengalaman" class="w-fit cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7 stroke-primary">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
        </div>
        <hr class="h-[1px] bg-primaryInp w-full mb-[22px]">
        <div class="flex flex-wrap notebook:flex-nowrap justify-between mb-[90px]">
            <div class="flex-grow hidden notebook:block notebook:max-w-[48%]"></div>
            <div class="flex-grow notebook:max-w-[48%]">
                <div id="list-pengalaman" class="w-full divide-y divide-primaryInp">
                    <div class="w-full">
                        <input type="hidden" name="id_pengalaman[]" value="{{ $user->pengalaman[0]->id }}">
  
                        {{-- tanggal masuk dan keluar perusahaan  --}}
                        <div class="mb-4 flex flex-row justify-between">
                              <div class="w-[48%]">
                                  <label for="dari_pengalaman" class="block mb-2 text-base font-semibold text-gray-900">Dari</label>
                                  <input type="date" name="dari_pengalaman[]" id="dari_pengalaman" class="h-12 text-sm px-4 w-full outline-none @error('dari_pengalaman.0') border-primarySD @else border-primaryInp @enderror border rounded-md" value="{{ old('dari_pengalaman.0') ? old('dari_pengalaman.0') : $user->pengalaman[0]->dari_pengalaman }}" >
                                  @error("dari_pengalaman.0")
                                    <p class="text-sm font-normal mt-1 text-primarySD">{{ $message }}</p>
                                  @enderror
                                </div>
              
                              <div class="w-[48%]">
                                  <label for="sampai_pengalaman" class="block mb-2 text-base font-semibold text-gray-900">Sampai</label>
                                  <input type="date" name="sampai_pengalaman[]" id="sampai_pengalaman" class="h-12 text-sm px-4 w-full outline-none @error('sampai_pengalaman.0') border-primarySD @else border-primaryInp @enderror border rounded-md" value="{{ old('sampai_pengalaman.0') ? old('sampai_pengalaman.0') : $user->pengalaman[0]->sampai_pengalaman }}" >
                                  @error("sampai_pengalaman.0")
                                    <p class="text-sm font-normal mt-1 text-primarySD">{{ $message }}</p>
                                  @enderror
                              </div>
                        </div>
                          
                        {{-- nama perusahaan --}}
                        <div class="mb-4">
                          <label for="perusahaan" class="block mb-2 text-base font-semibold text-gray-900">Perusahaan</label>
                          <input type="text" name="perusahaan[]" id="perusahaan" class="h-12 sm:min-w-[523px] text-sm px-4 w-full outline-none @error('perusahaan.0') border-primarySD @else border-primaryInp @enderror border rounded-md" value="{{ old('perusahaan.0') ? old('perusahaan.0') : $user->pengalaman[0]->perusahaan }}" >
                          @error("perusahaan.0")
                            <p class="text-sm font-normal mt-1 text-primarySD">{{ $message }}</p>
                          @enderror
                        </div>
                        
                        {{-- deskripsi mengenai perusahaan --}}
                        <div class="mb-0">
                            <label for="deskrips_plg" class="block mb-2 text-base font-semibold text-gray-900">Deskripsi</label>
                            <textarea name="deskripsi_pengalaman[]" id="deskripsi_plg" cols="40" rows="8" class="sm:min-w-[338px] text-sm px-4 py-4 w-full outline-none @error('deskripsi_pengalaman.0') border-primarySD @else border-primaryInp @enderror border rounded-md" >{{ old('deskripsi_pengalaman.0') ? old('deskripsi_pengalaman.0') : $user->pengalaman[0]->deskripsi_pengalaman }}</textarea>
                            @error("deskripsi_pengalaman.0")
                              <p class="text-sm font-normal mt-1 text-primarySD">{{ $message }}</p>
                            @enderror
                        </div> 
                    </div>

                    @isset($user->pengalaman)
                        @php $i = 1 @endphp
                        @foreach ($user->pengalaman->skip(1) as $row)
                            @if (old("hapus_pengalaman"))
                                @php 
                                    $data = old("hapus_pengalaman");
                                    array_unshift($data, 0);
                                @endphp
                                @if (array_search($row->id, $data))
                                    <input type="hidden" name="hapus_pengalaman[]" value="{{ $row->id  }}">
                                    @php continue; @endphp
                                @endif
                            @endif
                            <div class="pengalaman input-list w-full mt-4 pt-6 relative">
                                
                                <input type="hidden" class="id_pengalaman" name="id_pengalaman[]" value="{{ $row->id  }}">
                                <input type="hidden" class="hapus-pengalaman" name="hapus_pengalaman[]" value="{{ $row->id  }}" disabled>

                                {{-- untuk menghapus input pengalaman --}}
                                <div class="icon-hapus-pengalaman absolute top-0 right-0 mt-2 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="fill-primarySD w-7 h-7">
                                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-1.72 6.97a.75.75 0 10-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 101.06 1.06L12 13.06l1.72 1.72a.75.75 0 101.06-1.06L13.06 12l1.72-1.72a.75.75 0 10-1.06-1.06L12 10.94l-1.72-1.72z" clip-rule="evenodd" />
                                    </svg>                              
                                </div>
                                
                                {{-- tanggal masuk dan keluar perusahaan  --}}
                                <div class="elemen-input-pengalaman mb-4 flex flex-row justify-between">
                                    <div class="w-[48%]">
                                        <label for="dari_pengalaman.{{ $i }}" class="block mb-2 text-base font-semibold text-gray-900">Dari</label>
                                        <input type="date" name="dari_pengalaman[]" id="dari_pengalaman.{{ $i }}" class="h-12 text-sm px-4 w-full outline-none @error("dari_pengalaman.".$i) border-primarySD @else border-primaryInp @enderror border rounded-md" value="{{ old('dari_pengalaman.'.$i) ? old('dari_pengalaman.'.$i) : $row->dari_pengalaman }}" >
                                        @error("dari_pengalaman.".$i)
                                            <p class="text-sm font-normal mt-1 text-primarySD">{{ $message }}</p>
                                        @enderror
                                        </div>
                    
                                    <div class="w-[48%]">
                                        <label for="sampai_pengalaman.{{ $i }}" class="block mb-2 text-base font-semibold text-gray-900">Sampai</label>
                                        <input type="date" name="sampai_pengalaman[]" id="sampai_pengalaman.{{ $i }}" class="h-12 text-sm px-4 w-full outline-none @error('sampai_pengalaman.'.$i) border-primarySD @else border-primaryInp @enderror border rounded-md" value="{{ old('sampai_pengalaman.'.$i) ? old('sampai_pengalaman.'.$i) : $row->sampai_pengalaman }}" >
                                        @error("sampai_pengalaman.".$i)
                                            <p class="text-sm font-normal mt-1 text-primarySD">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                
                                {{-- nama perusahaan --}}
                                <div class="elemen-input-pengalaman mb-4">
                                <label for="perusahaan.{{ $i }}" class="block mb-2 text-base font-semibold text-gray-900">Perusahaan</label>
                                <input type="text" name="perusahaan[]" id="perusahaan.{{ $i }}" class="h-12 sm:min-w-[523px] text-sm px-4 w-full outline-none @error('perusahaan.'.$i) border-primarySD @else border-primaryInp @enderror border rounded-md" value="{{ old('perusahaan.'.$i) ? old('perusahaan.'.$i) : $row->perusahaan }}" >
                                @error("perusahaan.".$i)
                                    <p class="text-sm font-normal mt-1 text-primarySD">{{ $message }}</p>
                                @enderror
                                </div>
                                
                                {{-- deskripsi mengenai perusahaan --}}
                                <div class="elemen-input-pengalaman mb-0">
                                    <label for="deskrips_plg" class="block mb-2 text-base font-semibold text-gray-900">Deskripsi</label>
                                    <textarea name="deskripsi_pengalaman[]" id="deskripsi_plg" cols="40" rows="8" class="sm:min-w-[338px] text-sm px-4 py-4 w-full outline-none @error('deskripsi_pengalaman.'.$i)) border-primarySD @else border-primaryInp @enderror border rounded-md" >{{ old('deskripsi_pengalaman.'.$i) ? old('deskripsi_pengalaman.'.$i) : $row->deskripsi_pengalaman }}</textarea>
                                    @error("deskripsi_pengalaman.".$i)
                                    <p class="text-sm font-normal mt-1 text-primarySD">{{ $message }}</p>
                                    @enderror
                                </div> 
                            </div>
                            @php $i++ @endphp
                        @endforeach
                    @endisset

                    {{-- berfungsi saat jika ada validasi yang error maka value inputan tidak akan hilang   --}}
                    @if(old("key_tambah_pengalaman"))
                      @for ($i = 0; $i < count(old("key_tambah_pengalaman")); $i++)
                        <div class="input-list w-full mt-4 pt-6 relative">
                            
                            <div class="remove-experience absolute top-0 right-0 mt-2 cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="fill-primarySD w-7 h-7">
                                    <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-1.72 6.97a.75.75 0 10-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 101.06 1.06L12 13.06l1.72 1.72a.75.75 0 101.06-1.06L13.06 12l1.72-1.72a.75.75 0 10-1.06-1.06L12 10.94l-1.72-1.72z" clip-rule="evenodd" />
                                </svg>                              
                            </div>
  
                            <input type="hidden" name="key_tambah_pengalaman[]" value="{{ old("key_tambah_pengalaman.". $i) }}">
  
                            <div class="mb-4 flex flex-row justify-between">
                              <div class="w-[48%]">
                                  <label for="" class="block mb-2 text-base font-semibold text-gray-900">Dari</label>
                                  <input type="date" name="tambah_dari_pengalaman[]" id="" class="h-12 text-sm px-4 w-full outline-none @error('tambah_dari_pengalaman.'.$i) border-primarySD @else border-primaryInp @enderror border rounded-md" value="{{ old('tambah_dari_pengalaman.'.$i) }}" >
                                  @error("tambah_dari_pengalaman.".$i)
                                    <p class="text-sm font-normal mt-1 text-primarySD">{{ $message }}</p>
                                  @enderror
                                </div>
              
                              <div class="w-[48%]">
                                  <label for="" class="block mb-2 text-base font-semibold text-gray-900">Sampai</label>
                                  <input type="date" name="tambah_sampai_pengalaman[]" id="" class="h-12 text-sm px-4 w-full outline-none @error('tambah_sampai_pengalaman.'.$i) border-primarySD @else border-primaryInp @enderror border rounded-md" value="{{ old('tambah_sampai_pengalaman.'.$i) }}" >
                                  @error("tambah_sampai_pengalaman.".$i)
                                    <p class="text-sm font-normal mt-1 text-primarySD">{{ $message }}</p>
                                  @enderror
                              </div>
                            </div>
                            
                            
                            <div class="mb-4">
                              <label for="" class="block mb-2 text-base font-semibold text-gray-900">Perusahaan</label>
                              <input type="text" name="tambah_perusahaan[]" id="" class="h-12 sm:min-w-[523px] text-sm px-4 w-full outline-none @error('tambah_perusahaan.'.$i) border-primarySD @else border-primaryInp @enderror border rounded-md" value="{{ old('tambah_perusahaan.'.$i) }}" >
                              @error("tambah_perusahaan.".$i)
                                <p class="text-sm font-normal mt-1 text-primarySD">{{ $message }}</p>
                              @enderror
                            </div>
                            
                            
                            <div class="mb-0">
                                <label for="" class="block mb-2 text-base font-semibold text-gray-900">Deskripsi</label>
                                <textarea name="tambah_deskripsi_pengalaman[]" id="" cols="40" rows="8" class="sm:min-w-[338px] text-sm px-4 py-4 w-full outline-none @error('tambah_deskripsi_pengalaman.'.$i)) border-primarySD @else border-primaryInp @enderror border rounded-md" >{{ old('tambah_deskripsi_pengalaman.'.$i) }}</textarea>
                                @error("tambah_deskripsi_pengalaman.".$i)
                                  <p class="text-sm font-normal mt-1 text-primarySD">{{ $message }}</p>
                                @enderror
                            </div> 
                        </div>
                      @endfor
                    @endif
  
                </div>
            </div>
        </div>

        {{-- Minat Mengajar --}}
        <h1 class="text-[32px] mb-4 font-semibold text-black">Minat Mengajar</h1>
        <hr class="h-[1px] bg-primaryInp w-full mb-[22px]">
        <div class="flex flex-wrap notebook:flex-nowrap justify-between mb-[90px]">
            <div class="flex-grow w-full notebook:max-w-[60%]">

                {{-- minat mengajar --}}
                <div class="mb-5">
                    <label class="block text-gray-700 text-md font-semibold mb-2" for="pair">
                        Minat Mengajar
                    </label>
                    <select
                        class="selectpicker h-12 sm:min-w-[523px] text-sm px-4 w-full outline-none border-primaryInp border rounded-md" style="width: 100%" 
                        data-placeholder=""
                        id = "minat_mengajar"
                        data-allow-clear="false"
                        title="Select city...">
                        <option value="" style="display: none;"></option>
                    </select>
                    @error("list_minat_mengajar")
                        <div class="w-full bg-red-100 border border-primarySD px-6 py-[10px] h-fit rounded-md mt-3">
                            <p class="text-sm font-normal mt-1 text-primarySD">{{ $message }}</p>
                        </div>
                    @enderror
                </div>

                <div id="list-minat-mengajar" class="w-full flex flex-wrap gap-3">
                    @if ($user->minat_mengajar)
                        @foreach ($user->minat_mengajar as $row)
                            @if(old("hapus_minat_mengajar"))
                                @php 
                                    $data = old("hapus_minat_mengajar");
                                    array_unshift($data, 0);
                                @endphp
                                @if (array_search($row->id, $data))
                                    <div class="minat-mengajar bg-primaryYellow rounded-full py-[10px] w-fit px-6 flex-row items-center hidden">
                                        <input type="hidden" class="hapus-minat-mengajar" name="hapus_minat_mengajar[]" value="{{ $row->id }}">
                                        <div class="icon-hapus-minat-mengajar cursor-pointer w-fit ml-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 stroke-black">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                        </div>
                                    </div>
                                @php continue; @endphp
                                @endif
                            @endif
                            <div class="minat-mengajar bg-primaryYellow rounded-full py-[10px] w-fit px-6 flex-row flex items-center">
                                <p class="text-black text-sm">{{ $row->mata_pelajaran->tingkatan->tingkatan }} - {{ $row->mata_pelajaran->mata_pelajaran }}</p>
                                <input type="hidden" class="hapus-minat-mengajar" name="hapus_minat_mengajar[]" value="{{ $row->id }}" disabled>
                                <div class="icon-hapus-minat-mengajar cursor-pointer w-fit ml-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 stroke-black">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </div>
                            </div>
                        @endforeach
                    @endif
                    @if(old("tambah_minat_mengajar"))
                        @for ($i = 0; $i < count(old("tambah_minat_mengajar")); $i++)
                        @php
                            $result = explode("#-#", old("tambah_minat_mengajar.".$i));   
                        @endphp
                            <div class="minat-mengajar bg-primaryYellow rounded-full py-[10px] w-fit px-6 flex-row flex items-center">
                                <p class="text-black text-sm">{{ $result[1] }} - {{ $result[2] }} </p>
                                <input type="hidden" class="tambah-minat-mengajar" name="tambah_minat_mengajar[]" value="{{ old('tambah_minat_mengajar.'.$i) }}">
                                <div class="icon-hapus-tambah-minat-mengajar cursor-pointer w-fit ml-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 stroke-black">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </div>
                            </div>
                        @endfor
                    @endif
                </div>
                
            </div>
            <div class="flex-grow notebook:max-w-[40%]"></div>
        </div>
  
        {{-- Domisili Mengajar --}}
        <h1 class="text-[32px] mb-4 font-semibold text-black">Domisili Mengajar</h1>
        <hr class="h-[1px] bg-primaryInp w-full mb-[22px]">
        <div class="flex flex-wrap notebook:flex-nowrap justify-between mb-[90px]">
            <div class="flex-grow w-full notebook:max-w-[60%]">

                {{-- input domisili mengajar  --}}
                <div class="mb-5">
                    <label class="block text-gray-700 text-md font-semibold mb-2" for="pair">
                        Domisili Mengajar
                    </label>
                    <select
                        class="selectpicker" style="width: 100%" 
                        data-placeholder=""
                        data-allow-clear="false"
                        id="domisili_mengajar"
                        title="Pilih domisili mengajar">
                    </select>
                    @error("list_domisili_mengajar")
                        <div class="w-full bg-red-100 border border-primarySD px-6 py-[10px] h-fit rounded-md mt-3">
                            <p class="text-sm font-normal mt-1 text-primarySD">{{ $message }}</p>
                        </div>
                    @enderror
                </div>

                {{-- list domisili mengajar --}}
                <div id="list-domisili-mengajar" class="w-full flex flex-wrap gap-3">
                    @if ($user->domisili_mengajar)
                        @foreach ($user->domisili_mengajar as $row)
                            @if(old("hapus_domisili_mengajar"))
                                @php 
                                    $data = old("hapus_domisili_mengajar");
                                    array_unshift($data, 0);
                                @endphp
                                @if (array_search($row->id, $data))
                                    <div class="domisili-mengajar bg-primaryYellow rounded-full py-[10px] w-fit px-6 flex-row items-center hidden">
                                        <input type="hidden" class="hapus-domisili-mengajar" name="hapus_domisili_mengajar[]" value="{{ $row->id }}">
                                        <div class="icon-hapus-domisili-mengajar cursor-pointer w-fit ml-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 stroke-black">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                        </div>
                                    </div>
                                @php continue; @endphp
                                @endif
                            @endif
                            <div class="domisili-mengajar bg-primaryYellow rounded-full py-[10px] w-fit px-6 flex-row flex items-center">
                                <p class="text-black text-sm">{{ $row->kecamatan->name }}</p>
                                <input type="hidden" class="hapus-domisili-mengajar" name="hapus_domisili_mengajar[]" value="{{ $row->id }}" disabled>
                                <div class="icon-hapus-domisili-mengajar cursor-pointer w-fit ml-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 stroke-black">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </div>
                            </div>
                        @endforeach
                    @endif
                    @if(old("tambah_domisili_mengajar"))
                        @for ($i = 0; $i < count(old("tambah_domisili_mengajar")); $i++)
                        @php
                            $result = explode("#-#", old("tambah_domisili_mengajar.".$i));   
                        @endphp
                            <div class="domisili-mengajar bg-primaryYellow rounded-full py-[10px] w-fit px-6 flex-row flex items-center">
                                <p class="text-black text-sm">{{ $result[1] }}</p>
                                <input type="hidden" class="tambah-domisili-mengajar" name="tambah_domisili_mengajar[]" value="{{ old('tambah_domisili_mengajar.'.$i) }}">
                                <div class="icon-hapus-tambah-domisili-mengajar cursor-pointer w-fit ml-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 stroke-black">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </div>
                            </div>
                        @endfor
                    @endif
                </div>
            </div>
            <div class="flex-grow notebook:max-w-[40%]"></div>
        </div>

         {{-- logout --}}
         <div class="w-full flex justify-end">
             <a href="{{ route('profile') }}" class="justify-center rounded-md px-8 py-2 border-2 border-primary flex flex-row w-fit h-[50px] items-center mr-2">
                 <span class="text-primary text-base font-semibold">Batal</span>
             </a>
            <button type="submit" class="justify-center rounded-md px-8 py-2 bg-primary flex flex-row w-fit h-[50px] items-center">
                <span class="text-white text-base font-semibold">Selesai</span>
            </button>
        </div>

    </form>
</div>
</section>

<script>

    // validasi update foto 
    @error('update_foto')
        swal({title: "Warning!", text: "{{ $message }}", icon: "warning"});
    @enderror
    
</script>

<script>

$(document).ready(function() {

    $.ajaxSetup({
        headers: {"X-CSRF-TOKEN" : $("meta[name='csrf-token']").attr("content")}
    });

    // update foto
    $(document).ready(function() {
        $("#update_foto").change(function() {
          var file = this.files[0];
          var update_foto = $("#update_foto");
          if (file) {
            var ext = file.name.split('.').pop().toLowerCase();
            if (ext != "png" && ext != "jpeg" && ext != "jpg") {
                update_foto.val("");
                swal({
                    title: "Warning!",
                    text: "Format file tidak valid. Silakan upload file dengan format png, jpeg, atau jpg.",
                    icon: "warning",
                });
                // alert("Format file tidak valid. Silakan upload file dengan format png, jpeg, atau jpg.");
                return false;
            }
            var reader = new FileReader();
            reader.onload = function(event) {
              $("#foto-profile").attr("src", event.target.result);
            };
            reader.readAsDataURL(file);
          }
        });
    });
    // ---------- 

    // pengalaman

    // --untuk menghapus data pengalaman
    $(document).on("click", ".icon-hapus-pengalaman", function() {
        let parentElement = $(this).closest(".pengalaman");
        let input_hapus_pengalaman = parentElement.find(".hapus-pengalaman");
        let input_id_pengalaman = parentElement.find(".id_pengalaman");
        var inputElements = parentElement.find('.elemen-input-pengalaman');
    
        new swal({

              title: "Anda yakin?",
              text: "Anda yakin ingin menghapus data ini?",
              icon: "warning",
              buttons: true,
              dangerMode: true,
          })
          .then((willDelete) => {
              if (willDelete) {
                    
                    parentElement.addClass("hidden");
                    input_hapus_pengalaman.prop("disabled", false);
                    input_id_pengalaman.remove();
                    inputElements.remove();

                    //show success message
                    swal({
                        icon: "success",
                        title: "Success",
                        text: "Berhasil menghapus data"
                    });

              }else {
              swal("Data batal untuk di hapus.");
              }
          });
    });

    // --menambahkan input pengalaman 
    $("#tambah-pengalaman").on("click", function(){

        $("#list-pengalaman").append(
            `<div class="input-list w-full mt-4 pt-6 relative">              
                <div class="icon-hapus-tambah-pengalaman absolute top-0 right-0 mt-2 cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="fill-primarySD w-7 h-7">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-1.72 6.97a.75.75 0 10-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 101.06 1.06L12 13.06l1.72 1.72a.75.75 0 101.06-1.06L13.06 12l1.72-1.72a.75.75 0 10-1.06-1.06L12 10.94l-1.72-1.72z" clip-rule="evenodd" />
                    </svg>                              
                </div>

                <input type="hidden" name="key_tambah_pengalaman[]" value="xxxxx">

                <div class="mb-4 flex flex-row justify-between">
                    <div class="w-[48%]">
                        <label for="" class="block mb-2 text-base font-semibold text-gray-900">Dari</label>
                        <input type="date" name="tambah_dari_pengalaman[]" id="" class="h-12 text-sm px-4 w-full outline-none border-primaryInp border rounded-md" value="" >
                    </div>

                    <div class="w-[48%]">
                        <label for="" class="block mb-2 text-base font-semibold text-gray-900">Sampai</label>
                        <input type="date" name="tambah_sampai_pengalaman[]" id="" class="h-12 text-sm px-4 w-full outline-none border-primaryInp border rounded-md" value="" >
                    </div>
                </div>
                
                
                <div class="mb-4">
                    <label for="" class="block mb-2 text-base font-semibold text-gray-900">Perusahaan</label>
                    <input type="text" name="tambah_perusahaan[]" id="" class="h-12 sm:min-w-[523px] text-sm px-4 w-full outline-none border-primarySD border-primaryInp border rounded-md" value="" >
                </div>
                
                
                <div class="mb-0">
                    <label for="" class="block mb-2 text-base font-semibold text-gray-900">Deskripsi</label>
                    <textarea name="tambah_deskripsi_pengalaman[]" id="" cols="40" rows="8" class="sm:min-w-[338px] text-sm px-4 py-4 w-full outline-none border-primarySD border-primaryInp border rounded-md" ></textarea>
                </div> 
            </div>`
        );
    });
    //--------------------------

    // --untuk menghapus data tambah pengalaman
    $(document).on("click", ".icon-hapus-tambah-pengalaman", function() {
        new swal({
              title: "Anda yakin?",
              text: "Anda yakin ingin menghapus data ini?",
              icon: "warning",
              buttons: true,
              dangerMode: true,
          })
          .then((willDelete) => {
              if (willDelete) {
                    $(this).parents(".input-list").remove()
                    //show success message
                    swal({
                    icon: "success",
                    title: "Success",
                    text: "Berhasil menghapus data"
                })
              }else {
              swal("Data batal untuk di hapus.");
              }
          });
    });

    //--------------------------

    // update domisili mengajar 

    // --input domisili mengajar
    $('#domisili_mengajar').select2({
        placeholder : "Pilih domisili",
        ajax : {
            type : "post",
            url : "{{ route('get.domisili.mengajar') }}",
            processResults : function({data}){
                return {
                    results : $.map(data, function (item) {
                        return {
                            id : `${item.kecamatan_id}#-#${item.provinsi}#-#${item.kabupaten}#-#${item.kecamatan}`,
                            text : `${item.provinsi} - ${item.kabupaten} - ${item.kecamatan}`
                        }  
                    })
                }  
            }
        }
    });
    //--------------------------

    // --untuk menghapus data domisili mengaja
    $(document).on("click", ".icon-hapus-domisili-mengajar", function() {
        let input_hapus_minat_mengajar = $(this).prev(".hapus-domisili-mengajar");
        let minat_mengajar = $(this).closest(".domisili-mengajar");

        new swal({

              title: "Anda yakin?",
              text: "Anda yakin ingin menghapus data ini?",
              icon: "warning",
              buttons: true,
              dangerMode: true,
          })
          .then((willDelete) => {
              if (willDelete) {
                    
                    input_hapus_minat_mengajar.prop("disabled", false);
                    minat_mengajar.addClass("hidden");

                    //show success message
                    swal({
                    icon: "success",
                    title: "Success",
                    text: "Berhasil menghapus data"
                })
              }else {
              swal("Data batal untuk di hapus.");
              }
          });
    });
    //--------------------------

    // --menambahkan domisili mengajar 
    $("#domisili_mengajar").on("change", function(){
        let domisili = $("#domisili_mengajar").val();
        let result = domisili.split("#-#");

        $("#list-domisili-mengajar").append(
            `<div class="domisili-mengajar block bg-primaryYellow rounded-full py-[10px] w-fit px-6 flex-row flex items-center">
                <p class="text-black text-sm">${result[3]}</p>
                <input type="hidden" class="tambah-domisili-mengajar" name="tambah_domisili_mengajar[]" value="${result[0]}#-#${result[3]}">
                <div class="icon-hapus-tambah-domisili-mengajar cursor-pointer w-fit ml-1">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 stroke-black">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </div>
            </div>`
        );
    });
    //--------------------------

    // --untuk menghapus data domisili mengajar yang sudah di tambahkan 
    $("body").on("click", ".icon-hapus-tambah-domisili-mengajar", function(){
          new swal({
              title: "Anda yakin?",
              text: "Anda yakin ingin menghapus data ini?",
              icon: "warning",
              buttons: true,
              dangerMode: true,
          })
          .then((willDelete) => {
              if (willDelete) {
                  $(this).parents(".domisili-mengajar").remove()
                  swal({
                  icon: "success",
                  title: "Success",
                  text: "Berhasil menghapus data"
                  })
              }else {
              swal("Data batal untuk di hapus.");
              }
          });
    });
    //--------------------------

    //------------------------------------


    // update domisili mengajar 

    // --input domisili mengajar
    $('#minat_mengajar').select2({
        ajax : {
            type : "post",
            url : "{{ route('get.minat.mengajar') }}",
            processResults : function({data}){
                return {
                    results : $.map(data, function (item) {
                        return {
                            id : `${item.mapel_id}#-#${item.tingkatan}#-#${item.mata_pelajaran}`,
                            text : `${item.tingkatan} - ${item.mata_pelajaran}`
                        }  
                    })
                }  
            }
        }
    });

    // --untuk menghapus data minat mengaja
    $(document).on("click", ".icon-hapus-minat-mengajar", function() {
        let input_hapus_minat_mengajar = $(this).prev(".hapus-minat-mengajar");
        let minat_mengajar = $(this).closest(".minat-mengajar");

        new swal({

              title: "Anda yakin?",
              text: "Anda yakin ingin menghapus data ini?",
              icon: "warning",
              buttons: true,
              dangerMode: true,
          })
          .then((willDelete) => {
              if (willDelete) {
                    
                    input_hapus_minat_mengajar.prop("disabled", false);
                    minat_mengajar.addClass("hidden");

                    //show success message
                    swal({
                    icon: "success",
                    title: "Success",
                    text: "Berhasil menghapus data"
                })
              }else {
              swal("Data batal untuk di hapus.");
              }
          });
    });
    //--------------------------

    // --menambahkan minat mengajar 
    $("#minat_mengajar").on("change", function(){
        let minat = $("#minat_mengajar").val();
        let result = minat.split("#-#");

        $("#list-minat-mengajar").append(
            `<div class="minat-mengajar block bg-primaryYellow rounded-full py-[10px] w-fit px-6 flex-row flex items-center">
                <p class="text-black text-sm">${result[1]} - ${result[2]}</p>
                <input type="hidden" class="tambah_minat_mengajar" name="tambah_minat_mengajar[]" value="${result[0]}#-#${result[1]}#-#${result[2]}">
                <div class="icon-hapus-tambah_minat_mengajar cursor-pointer w-fit ml-1">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 stroke-black">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </div>
            </div>`
        );
    });
    //--------------------------

    // --untuk menghapus data minat mengajar yang sudah di tambahkan 
    $("body").on("click", ".icon-hapus-tambah_minat_mengajar", function(){
          new swal({
              title: "Anda yakin?",
              text: "Anda yakin ingin menghapus data ini?",
              icon: "warning",
              buttons: true,
              dangerMode: true,
          })
          .then((willDelete) => {
              if (willDelete) {
                  $(this).parents(".minat-mengajar").remove()
                  swal({
                  icon: "success",
                  title: "Success",
                  text: "Berhasil menghapus data"
                  })
              }else {
              swal("Data batal untuk di hapus.");
              }
          });
    });
    //--------------------------

    //------------------------------------
});
</script>
@endsection