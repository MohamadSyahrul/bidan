@extends('layout.master')
@section('title')
Data Pasien
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
                <a href="{{route('data-pasien.create')}}" class="btn bg-gradient-info float-end">
                    Tambah
                </a>

                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <strong>Success!</strong> {{ $message }}
                    </div>   
                @endif

                <h6 class="float-start">Data Pasien</h6>
                <div class="col-2 mt-4">
                    <input class="form-control" id="myInput" type="search" placeholder="Search..." aria-label="Search">
                </div>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center text-center justify-content-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">NIK
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kode Pasien
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Alamat</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Jenis Kelamin</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Tanggal Lahir</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Umur</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Status</th>
                                <th class="text-secondary opacity-7"></th>
                            </tr>
                        </thead>
                        <tbody id="myTable" class="text-center">
                            @foreach ($psn as $item)
                            <tr>
                                <td>
                                    <p class="text-sm text-uppercase font-weight-bold mb-0">{{$item->nik}}</p>
                                </td>
                                <td>
                                    <p class="text-sm text-uppercase font-weight-bold mb-0">{{$item->kode_pasien}}</p>
                                </td>
                                <td>
                                    <p class="text-sm text-uppercase font-weight-bold mb-0">{{$item->nama}}</p>

                                </td>
                                <td>
                                    <p class="text-sm text-capitalize font-weight-bold mb-0">{{$item->alamat}}</p>
                                </td>
                                <td>
                                    <span class="text-sm text-capitalize font-weight-bold">{{$item->jenis_kelamin}}</span>
                                </td>
                                <td>
                                    <span class="text-sm text-capitalize font-weight-bold">{{date('d-m-Y', strtotime($item->tgl_lahir))}}</span>
                                </td>
                                <?php
                                    $date1 = date_create($item->tgl_lahir);
                                   $date2 = Carbon\Carbon::now()->format('Y-m-d');
                                   $date3 = date_create($date2);
                                   
                                   $diff = date_diff($date1, $date3);
                                   $tahun = $diff->format("%y tahun");
                                   $months = $diff->format("%m bulan");
                                   $umur = $tahun.' '.$months;
                               ?>
                                <td>
                                    <span class="text-sm text-capitalize font-weight-bold">{{$umur}}</span>
                                </td>
                                <td>
                                    <span class="text-sm text-capitalize font-weight-bold">
                                        @if ($item->status == 1)
                                            <a href="ubahstatus/{{$item->id}}">
                                                <span class="badge badge-pill badge-md bg-gradient-success">Aktif</span>
                                            </a>
                                        @else
                                            <a href="ubahstatusaktif/{{$item->id}}">
                                                <span class="badge badge-pill badge-md bg-gradient-warning">Non Aktif</span>
                                            </a>
                                        @endif
                                    </span>
                                </td>
                                <td class="align-middle">
                                    <a href="{{route('data-pasien.edit', $item->id)}}" class="text-secondary font-weight-bold text-xs">
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
                                                        Pasien</h6>
                                                    <button type="button" class="btn-close text-dark"
                                                        data-bs-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{route('data-pasien.destroy', $item->id)}}"
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
