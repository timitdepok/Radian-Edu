@extends('dashboard.layout.template')
@section('content')

<div class="px-4 py-7 sm:px-12">
    <div class="w-full">
        <h1 class="text-3xl font-semibold text-black mb-12">User Registrasi</h1>
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
                            Email
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nomor HP
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Registrasi
                        </th>
                        <th scope="col" class="pl-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>

                <tbody class="bg-white">
                    @foreach ($user_registrasi as $rows => $row)
                        <tr class="border-x border-gray-200">
                            <th scope="row" class="px-6 py-4 font-medium text-black whitespace-nowrap">
                                {{ $user_registrasi->firstItem() + $rows }}
                            </th>
                            <td class="px-6 py-4">
                                <a href="{{ route('biodata.guru', [encrypt($row->id)]) }}" class="cursor-pointer">
                                    {{ $row->nama }} 
                                </a>
                            </td>
                            <td class="px-6 py-4">
                                {{ $row->email }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $row->no_telepon }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $row->created_at->diffForHumans() }}
                            </td>
                            <td class="px-6 py-4">
                                <div class="w-fit flex items-center">
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
            {{ $user_registrasi->links() }}
        </div>

    </div>
</div>
@endsection

@section('javascript')
<script>

    $(document).ready(function () { 

        $.ajaxSetup({
            headers: {"X-CSRF-TOKEN" : $("meta[name='csrf-token']").attr("content")}
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
                        url : "{{ route('remove.user.registrasi') }}",
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
