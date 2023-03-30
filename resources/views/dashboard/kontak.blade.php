@extends('dashboard.layout.template')
@section('content')

<div class="px-4 py-7 sm:px-12">
    <div class="w-full">
        <h1 class="text-3xl font-semibold text-black mb-4">Kontak</h1>
        <p class="text-sm text-bodyText mb-8">
           Silahkan masukan kontak yang bisa dihubungi untuk customer ketika ingin memesan guru ataupun tutor ketika ingin mendaftar menjadi tutor di Radian
        </p>
        <div class="w-full h-fit bg-white mb-6 rounded-md">
            <div class="p-4 bg-primary rounded-t-md">
                <h2 class="text-xl font-semibold text-white">Kontak</h2>
            </div>
            <form action="{{ route('kontak.save') }}" method="POST" class="mb-0 p-4">
                @csrf
                
                <div class="mb-4">
                    <label for="kontak_tes_tulis" class="block mb-2 text-base font-semibold text-gray-900">Kontak Tes Tulis</label>
                    <input type="text" name="kontak_tes_tulis" id="kontak_tes_tulis" class="h-12 text-sm px-4 w-full outline-none @error('kontak_tes_tulis') border-primarySD @else border-primaryInp @enderror border rounded-md bg-white" placeholder="Masukan kontak micro teaching" pattern="[0]{1}[8]{1}[0-9]{8,11}" value="{{ $kontak->kontak_tes_tulis ?? "" }}" required>
                    @error("kontak_tes_tulis")
                        <p class="text-sm font-normal mt-1 text-primarySD">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="kontak_pesan_guru" class="block mb-2 text-base font-semibold text-gray-900">Kontak Pesan Guru</label>
                    <input type="text" name="kontak_pesan_guru" id="kontak_pesan_guru" class="h-12 text-sm px-4 w-full outline-none @error('kontak_pesan_guru') border-primarySD @else border-primaryInp @enderror border rounded-md bg-white" placeholder="Masukan kontak pesan guru" pattern="[0]{1}[8]{1}[0-9]{8,11}" value="{{ $kontak->kontak_pesan_guru ?? "" }}" required>
                    @error("kontak_pesan_guru")
                        <p class="text-sm font-normal mt-1 text-primarySD">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="email" class="block mb-2 text-base font-semibold text-gray-900">Email</label>
                    <input type="email" name="email" id="email" class="h-12 text-sm px-4 w-full outline-none @error('email') border-primarySD @else border-primaryInp @enderror border rounded-md bg-white" placeholder="Masukan email" value="{{ $kontak->email ?? "" }}" required>
                    @error("email")
                        <p class="text-sm font-normal mt-1 text-primarySD">{{ $message }}</p>
                    @enderror
                </div>
                <div class="w-full flex justify-end">
                    <button type="submit" id="save" class="py-4 px-6 text-white bg-primary font-semibold rounded-md text-sm text-center">Selesai</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
@section('javascript')
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