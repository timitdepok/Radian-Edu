@extends('dashboard.layout.template')
@section('content')

<div class="px-4 py-7 sm:px-12">
    <div class="w-full">
        <h1 class="text-3xl font-semibold text-black mb-12">Daftar Biodata Guru</h1>
        <div class="relative overflow-x-auto rounded-md">
            <table class="w-full text-sm text-left text-black rounded-t-sm">
                <thead class="text-sm text-white uppercase font-semibold">
                    <tr class="bg-primary">
                        <th scope="col" class="px-6 py-3">
                            No 
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Asal PTN
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Domisili
                        </th>
                        <th scope="col" class="pl-6 py-3">
                            Harga/Sesi
                        </th>
                        <th scope="col" class="pl-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>

                <tbody class="bg-white">
                    @foreach ($guru as $rows => $row)
                        <tr class="border-x border-gray-200">
                            <th scope="row" class="px-6 py-4 font-medium text-black whitespace-nowrap">
                                {{ $guru->firstItem() + $rows }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $row->nama }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $row->asal_ptn }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $row->kabupaten }}
                            </td>
                            <td class="px-6 py-4">
                                Rp. {{ number_format($row->harga, 0, ",", ".") }}
                            </td>
                            <td class="px-6 py-4">
                                <div class="w-fit flex flex-row items-center">
                                    <div class="edit-user w-fit cursor-pointer">
                                        <input type="hidden" name="edit-id" class="input-edit-user" value="{{ $row->id }}" readonly>
                                        <span class=" text-primary">Edit</span>
                                    </div>
                                    <div class="w-fit mr-1 ml-1">
                                        <span>|</span>
                                    </div>
                                    <div class="remove-user w-fit cursor-pointer">
                                        <input type="hidden" name="remove-id" class="input-remove-user" value="{{ $row->id }}" readonly>
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
            {{ $guru->links() }}
        </div>

    </div>
</div>

<!-- Pop-up modal -->
<div id="modal-edit-user" class="fixed z-50 inset-0 overflow-y-auto hidden">
<div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
    <div class="fixed inset-0 transition-opacity">
    <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
    </div>
    <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>&#8203;
    <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
        <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
            <h3 class="text-2xl leading-6 font-semibold mb-2" id="modal-headline">Edit Harga</h3>
            <p class="text-bodyText">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est iusto minima iure quisquam, eos quasi hic quod porro, quis eveniet veniam fugiat quo itaque.</p> 
            <div class="mt-4">
                <input type="hidden" name="user_id" id="user_id">
                <label for="harga" class="block mb-2 text-base font-semibold text-gray-900">Harga</label>
                <input type="number" name="harga" id="harga" class="h-12 text-sm px-4 w-full outline-none border-primaryInp border rounded-md" value="{{ old('harga') }}" required>
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

    $(document).ready(function () { 

        $.ajaxSetup({
            headers: {"X-CSRF-TOKEN" : $("meta[name='csrf-token']").attr("content")}
        });

        // menampilkan pop up modal
        $(".edit-user").on("click", function () {
            let user_id = $(this).find(".input-edit-user").val();
            $.ajax({
                url : "{{ route('get.user') }}",
                type : "POST",
                data : {user_id : user_id},
                success: function(response) {
                    
                    if (response.status == "success" ) {
                        $("#modal-edit-user").removeClass("hidden");
                        $("#user_id").val(user_id);
                        $("#harga").val(response.harga);
                        
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
            let parentElement = $(this).closest("#modal-edit-user");
            let user_id = parentElement.find("#user_id").val();
            let harga = parentElement.find("#harga").val();

            $.ajax({
                url : "{{ route('edit.harga') }}",
                type : "PUT",
                data : {
                    user_id : user_id,
                    harga : harga
                },
                success: function(response) {
                    $('#modal-edit-user').addClass('hidden');

                    swal({
                        icon: `${response.icon}`,
                        title: `${response.title}`,
                        text: `${response.message}`,
                    })
                    .then((willDelete) => {
                        location.reload();
                    });
                },
                error:function(){
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
            $('#modal-edit-user').addClass('hidden');
            location.reload();
        });


        // menghapus user
        $(".remove-user").on("click", function () {
            let user_id = $(this).find(".input-remove-user").val();
            console.log(user_id);

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
                        data : {user_id : user_id},
                        url : "{{ route('remove.user') }}",
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