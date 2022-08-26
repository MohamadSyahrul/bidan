@extends('layout.master')
@section('title')
Pasien Hamil
@endsection
{{-- @push('plugin-style')
    <link id="pagestyle" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet" />
    <link id="pagestyle" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
@endpush --}}
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header pb-0">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <strong>Success!</strong> {{ $message }}
                    </div>   
                @endif
                <a href="{{route('pasien-hamil.create')}}" class="btn bg-gradient-info float-end">
                    Tambah</a>
                <h6 class="float-start">Data Pasien Hamil</h6>
                <div class="col-2 mt-4">
                    <input class="form-control" id="myInput" type="search" placeholder="Search..." aria-label="Search">
                </div>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center text-center justify-content-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Keterangan
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tgl Datang Bulan Terakhir
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Vitamin</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Tanggal Periksa</th>
                                <th class="text-secondary opacity-7"></th>
                            </tr>
                        </thead>
                        <tbody id="myTable" class="text-center">
                            @foreach ($psnhamil as $item)
                            <tr>
                                <td>
                                    <span class="text-sm text-uppercase font-weight-bold">
                                        {{$item->dtpasien->nama ?? ''}}</span>

                                </td>
                                <td>
                                    <span class="text-sm text-capitalize font-weight-bold">{{$item->keterangan}}</span>
                                </td>
                                <td>
                                    <span class="text-sm text-capitalize font-weight-bold">{{$item->tgl_bulan_terakhir}}</span>
                                </td>
                                <td>
                                    <span class="text-sm text-capitalize font-weight-bold">{{$item->vitamin}}</span>
                                </td>
                                <td>
                                    <span class="text-sm text-capitalize font-weight-bold">{{$item->tgl_periksa}}</span>
                                </td>
                                <td class="align-middle">
                                    <a href="{{route('pasien-hamil.edit', $item->id)}}" class="text-secondary font-weight-bold text-xs">
                                        Edit
                                    </a>

                                    <a href="javascript:;" class="text-danger font-weight-bold text-xs"
                                        data-bs-toggle="modal" data-bs-target="#hapus-data{{$item->id}}">
                                        Hapus
                                    </a>
                                    {{-- modal hapus --}}
                                    <div class="modal fade" id="hapus-data{{$item->id}}" tabindex="-1" role="dialog"
                                        aria-labelledby="hapus-data" aria-hidden="true">
                                        <div class="modal-dialog modal-danger modal-dialog-centered modal-"
                                            role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h6 class="modal-title" id="modal-title-notification">Hapus Data
                                                        Pasien Bayi</h6>
                                                    <button type="button" class="btn-close text-dark"
                                                        data-bs-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{route('pasien-hamil.destroy', $item->id)}}"
                                                        method="POST">
                                                        @method('delete')
                                                        @csrf
                                                        <div class="py-3 text-center">
                                                            <i class="ni ni-bell-55 ni-3x"></i>
                                                            <h4 class="text-gradient text-danger mt-4">Apakah Kamu Yakin
                                                                ?
                                                            </h4>
                                                            <p>Apakah Anda benar-benar ingin menghapus data
                                                                ini?</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                                            <button type="button"
                                                                class="btn btn-white text-secondary ml-auto"
                                                                data-bs-dismiss="modal">Batal</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('plugin-script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function () {

        $("#myInput").on("keyup", function () {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });

</script>
@endpush
