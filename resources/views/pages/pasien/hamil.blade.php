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
                <button type="button" class="btn bg-gradient-info float-end" data-bs-toggle="modal"
                    data-bs-target="#exampleModalMessage">
                    Tambah</button>
                <h6 class="float-start">Data Pasien Hamil</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center justify-content-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Alamat</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Keluhan</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Berat Badan</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Tanggal Lahir</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Tanggal Periksa</th>
                                <th class="text-secondary opacity-7"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($psnhamil as $item)
                            <tr>
                                <td>
                                    <div class="d-flex px-2">
                                        <div class="my-auto">
                                            <h6 class="mb-0 text-sm">{{$item->dataPasien->nama ?? ''}}</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="text-sm font-weight-bold mb-0">{{$item->dataPasien->alamat ?? ''}}</p>
                                </td>
                                <td>
                                    <span class="text-xs font-weight-bold">{{$item->keluhan}}</span>
                                </td>
                                <td>
                                    <span class="text-xs font-weight-bold">{{$item->berat_badan}}</span>
                                </td>
                                <td>
                                    <span class="text-xs font-weight-bold">{{$item->dataPasien->tgl_lahir ?? ''}}</span>
                                </td>
                                <td>
                                    <span class="text-xs font-weight-bold">{{$item->tgl_periksa}}</span>
                                </td>
                                <td class="align-middle">
                                    <a href="javascript:;" class="text-secondary font-weight-bold text-xs"
                                        data-bs-toggle="modal" data-bs-target="#edit-data{{$item->id}}">
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
                                                    <h6 class="modal-title" id="modal-title-notification">Hapus Data Pasien Bayi</h6>
                                                    <button type="button" class="btn-close text-dark"
                                                        data-bs-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{route('pasien-hamil.destroy', $item->id)}}" method="POST">
                                                        @method('delete')
                                                        @csrf
                                                        <div class="py-3 text-center">
                                                            <i class="ni ni-bell-55 ni-3x"></i>
                                                            <h4 class="text-gradient text-danger mt-4">Apakah Kamu Yakin ?
                                                            </h4>
                                                            <p>Apakah Anda benar-benar ingin menghapus data
                                                                ini?</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                                            <button type="button" class="btn btn-white text-secondary ml-auto"
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

{{-- modal tambah --}}
<div class="modal fade" id="exampleModalMessage" tabindex="-1" role="dialog" aria-labelledby="exampleModalMessageTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('pasien-hamil.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="id_pasienbayi" class="col-form-label">Nama Pasien:</label>
                        <select class="form-control" id="id_pasienbayi" name="id_pasienbayi">
                            <option>Pilih...</option>
                            @foreach ($nmapasien as $item)
                                <option value="{{$item->id}}">{{$item->nama}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="keluhan" class="col-form-label">Keluhan:</label>
                        <input type="text" class="form-control" name="keluhan"
                            id="keluhan">
                    </div>
                    <div class="form-group">
                        <label for="berat_badan" class="col-form-label">Berat Badan:</label>
                        <input type="text" class="form-control" name="berat_badan"
                            id="berat_badan">
                    </div>
                    <div class="form-group">
                        <label for="tgl_periksa" class="col-form-label">Tgl periksa:</label>
                        <input type="date" class="form-control" id="tgl_periksa" name="tgl_periksa">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn bg-gradient-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

{{-- modal edit --}}
@foreach ($psnhamil as $item)
<div class="modal fade" id="edit-data{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="edit-data"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('pasien-bayi.update',$item->id)}}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="idpasien" class="col-form-label">Nama Pasien:</label>
                        <select class="form-control" id="idpasien" name="id_pasienbayi">
                            <option>Pilih...</option>
                            @foreach ($nmapasien as $item)
                                <option value="{{$item->id}}">{{$item->nama}}</option>
                            @endforeach
                        </select>

                    <div class="form-group">
                        <label for="keluhan" class="col-form-label">Keluhan:</label>
                        <textarea class="form-control" id="keluhan" name="keluhan">{{ $item->keluhan }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="bb" class="col-form-label">Berat badan:</label>
                        <textarea class="form-control" id="bb" name="berat_badan">{{ $item->berat_badan }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="tgl-periksa" class="col-form-label">Tanggal Periksa:</label>
                        <input type="date" class="form-control" name="tgl_periksa" value="{{ $item->tgl_periksa }}" id="tgl-periksa">
                    </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn bg-gradient-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endforeach

@endsection

{{-- @push('plugin-script')
<script>
$(document).ready(function() {
    $('#tablepasien').DataTable();
} );
</script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
@endpush --}}
