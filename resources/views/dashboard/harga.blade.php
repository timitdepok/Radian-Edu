@extends('dashboard.layout.template')
@section('content')

<div class="px-4 py-7 sm:px-12">
    <div class="w-full">
        <h1 class="text-3xl font-semibold text-black mb-4">Harga</h1>
        <p class="text-sm text-bodyText mb-8">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus doloribus natus, nemo sapiente, placeat totam repellat, corrupti officiis commodi quam a molestias omnis facilis iste aspernatur voluptas possimus? Eos, temporibus?
        </p>
        <div class="w-full h-fit bg-white mb-6 rounded-md">
            <div class="p-4 bg-primary rounded-t-md">
                <h2 class="text-xl font-semibold text-white">Harga</h2>
            </div>
            <form action="{{ route('harga.save') }}" method="POST" class="mb-0 p-4">
                @csrf
                <div class="mb-4">
                    <label for="min_harga" class="block mb-2 text-base font-semibold text-gray-900">Minimal Harga</label>
                    <input type="number" name="min_harga" id="min_harga" class="h-12 text-sm px-4 w-full outline-none @error('min_harga') border-primarySD @else border-primaryInp @enderror border rounded-md bg-white" placeholder="Masukkan minimal harga" value="{{ $harga->min_harga ?? "" }}" required>
                    @error("min_harga")
                        <p class="text-sm font-normal mt-1 text-primarySD">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="max_harga" class="block mb-2 text-base font-semibold text-gray-900">Maksimal Harga</label>
                    <input type="number" name="max_harga" id="max_harga" class="h-12 text-sm px-4 w-full outline-none @error('max_harga') border-primarySD @else border-primaryInp @enderror border rounded-md bg-white" placeholder="Masukan maksimal harga" value="{{ $harga->max_harga ?? "" }}" required>
                    @error("max_harga")
                        <p class="text-sm font-normal mt-1 text-primarySD">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="keuntungan" class="block mb-2 text-base font-semibold text-gray-900">Keuntungan (%)</label>
                    <input type="number" name="keuntungan" id="keuntungan" class="h-12 text-sm px-4 w-full outline-none @error('keuntungan') border-primarySD @else border-primaryInp @enderror border rounded-md bg-white" placeholder="Masukan keuntungan" value="{{ $harga->keuntungan ?? "" }}" required>
                    @error("keuntungan")
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