@extends('dashboard.layout.template')
@section('content')

<div class="px-4 py-7 sm:px-12">
    <div class="w-full">
        <h1 class="text-3xl font-semibold text-black mb-12">Tingkatan</h1>
        <div class="w-full h-fit bg-white mb-6 rounded-md">
            <div class="p-4 bg-primary rounded-t-md">
                <h2 class="text-xl font-semibold text-white">Tambah tingkatan</h2>
            </div>
            <form action="{{ route('tambah.tingkatan') }}" method="POST" class="mb-0 p-4">
                @csrf
                <div class="mb-4">
                    <label for="tingkatan" class="block mb-2 text-base font-semibold text-gray-900">Tingkatan</label>
                    <input type="text" name="tingkatan" id="tingkatan" class="h-12 text-sm px-4 w-full outline-none @error('tingkatan') border-primarySD @else border-primaryInp @enderror border rounded-md bg-white" placeholder="Masukkan tingkatan pendidikan" value="{{ old('tingkatan') }}" required>
                    @error("tingkatan")
                      <p class="text-sm font-normal mt-1 text-primarySD">{{ $message }}</p>
                    @enderror
                </div>
                <div class="w-full flex justify-end">
                    <button type="submit" id="save" class="py-4 px-6 text-white bg-primary font-semibold rounded-md text-sm text-center">Tambah</button>
                </div>
            </form>
        </div>
        <div class="relative overflow-x-auto rounded-md">
            <table class="w-full text-sm text-left text-black rounded-t-sm">
                <thead class="text-sm text-white uppercase font-semibold">
                    <tr class="bg-primary">
                        <th scope="col" class="px-6 py-3">
                            No 
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tingkatan
                        </th>

                        <th scope="col" class="pl-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>

                <tbody class="bg-white">
                    @foreach ($tingkatan as $rows => $row)
                        <tr class="border-x border-gray-200">
                            <th scope="row" class="px-6 py-4 font-medium text-black whitespace-nowrap">
                                {{ $tingkatan->firstItem() + $rows }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $row->tingkatan }} 
                            </td>
                            <td class="px-6 py-4">
                                <div class="w-fit flex flex-row items-center">
                                    <div class="edit-tingkatan w-fit cursor-pointer">
                                        <input type="hidden" name="edit-id" class="input-edit-tingkatan" value="{{ $row->id }}" readonly>
                                        <span class=" text-primary">Edit</span>
                                    </div>
                                    <div class="w-fit mr-1 ml-1">
                                        <span>|</span>
                                    </div>
                                    <div class="remove-tingkatan w-fit cursor-pointer">
                                        <input type="hidden" name="remove-id" class="input-remove-tingkatan" value="{{ $row->id }}" readonly>
                                        <span class=" text-primarySD">Hapus</span>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>
        <div class="w-full mt-4 mb-2">
            {{ $tingkatan->links() }}
        </div>
    </div>
</div>

<!-- Pop-up modal -->
<div id="modal-edit-tingkatan" class="fixed z-50 inset-0 overflow-y-auto hidden">
<div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
    <div class="fixed inset-0 transition-opacity">
    <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
    </div>
    <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>&#8203;
    <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
        <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
            <h3 class="text-2xl leading-6 font-semibold mb-2" id="modal-headline">Edit Tingkatan</h3>
            <p class="text-bodyText">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est iusto minima iure quisquam, eos quasi hic quod porro, quis eveniet veniam fugiat quo itaque.</p> 
            <div class="mt-4">
                <input type="hidden" name="tingkatan_id" id="tingkatan_id">
                <label for="edit-tingkatan" class="block mb-2 text-base font-semibold text-gray-900">Tingkatan</label>
                <input type="text" name="tingkatan" id="edit-tingkatan" class="h-12 text-sm px-4 w-full outline-none border-primaryInp border rounded-md bg-white" value="" required>
            </div>
        </div>
    <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
    <button type="button"  id="btn-update" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-6 py-3 bg-blue-500 text-base font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:ml-3 sm:w-auto sm:text-sm">Update</button>
    <button type="button"  id="btn-cancel" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-6 py-3 bg-white text-base font-medium text-gray-700 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">Cancel</button>
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

    $(document).ready(function () { 

        $.ajaxSetup({
            headers: {"X-CSRF-TOKEN" : $("meta[name='csrf-token']").attr("content")}
        });

        // menampilkan pop up modal
        $(".edit-tingkatan").on("click", function () {
            let tingkatan_id = $(this).find(".input-edit-tingkatan").val();
            $.ajax({
                url : "{{ route('get.tingkatan') }}",
                type : "POST",
                data : {tingkatan_id : tingkatan_id},
                success: function(response) {
                    
                    if (response.status == "success" ) {
                        $("#modal-edit-tingkatan").removeClass("hidden");
                        $("#tingkatan_id").val(tingkatan_id);
                        $("#edit-tingkatan").val(response.tingkatan);

                    }else{
                        swal({
                            icon: `error`,
                            title: `404 Not Found`,
                            text: `Terjadi kesalahan. data tidak ditemukan!.`,
                        });
                    }
                },
                error:function(err){
                    swal({
                        icon: `error`,
                        title: `404 Not Found`,
                        text: `Terjadi kesalahan. harap coba lagi nanti!`,
                    });
                }
            });
        });

        // untuk mengupdate data 
        $("#btn-update").on("click", function() {
            let parentElement = $(this).closest("#modal-edit-tingkatan");
            let tingkatan_id = parentElement.find("#tingkatan_id").val();
            let tingkatan = parentElement.find("#edit-tingkatan").val();
            $.ajax({

                url : "{{ route('edit.tingkatan') }}",
                type : "PUT",
                data : {
                    tingkatan_id : tingkatan_id,
                    tingkatan : tingkatan
                },
                success: function(response) {
                    $('#modal-edit-tingkatan').addClass('hidden');

                    swal({
                        icon: `${response.icon}`,
                        title: `${response.title}`,
                        text: `${response.message}`,
                    })
                    .then((willDelete) => {
                        location.reload();
                    });
                },
                error:function(err){
                    swal({
                        icon: `error`,
                        title: `404 Not Found`,
                        text: `Terjadi kesalahan. harap coba lagi nanti!`,
                    });
                }
            });
        });

        // untuk mengcancel pop up modal 
        $("#btn-cancel").on("click", function() {
            $('#modal-edit-tingkatan').addClass('hidden');
            location.reload();
        });


        // menghapus tingkatan
        $(".remove-tingkatan").on("click", function () {
            let tingkatan_id = $(this).find(".input-remove-tingkatan").val();
            console.log(tingkatan_id);

            new swal({
                title: "Anda yakin?",
                text: "Anda yakin ingin menghapus data ini?",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        method : "POST",
                        data : {tingkatan_id : tingkatan_id},
                        url : "{{ route('remove.tingkatan') }}",
                        success:function(response){ 
                            swal({icon: `${response.icon}`,title: `${response.title}`,text: `${response.message}`,})
                            .then((willDelete) => {
                                if (willDelete) {
                                    location.reload();
                                } else {
                                    location.reload();
                                }
                            });
                        },
                        error:function(err){
                            swal({
                                icon: `error`,
                                title: `404 Not Found`,
                                text: `Terjadi kesalahan. harap coba lagi nanti!`,
                            });
                        }
                    });
                }else {
                    swal("Data batal untuk dihapus.");
                }
            });
        });

    });

</script>
@endsection