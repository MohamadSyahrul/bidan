@extends('layout.master')
@section('title')
Pasien KB
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
                <button type="button" class="btn bg-gradient-info float-end" data-bs-toggle="modal"
                    data-bs-target="#exampleModalMessage">
                    Tambah</button>
                <h6 class="float-start">Data Pasien KB</h6>
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
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Alamat</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Nama Suami</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Suntik KB</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Tanggal KB</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Tanggal Kembali</th>
                                <th class="text-secondary opacity-7"></th>
                            </tr>
                        </thead>
                        <tbody id="myTable" class="text-center">
                            @foreach ($pskb as $item)
                            <tr>
                                <td>
                                    <p class="text-sm text-uppercase font-weight-bold mb-0">{{$item->dt_pasien->nama}}</p>
                                </td>
                                <td>
                                    <p class="text-sm text-capitalize font-weight-bold mb-0">{{$item->dt_pasien->alamat}}</p>
                                </td>
                                <td>
                                    <span class="text-sm text-capitalize font-weight-bold">{{$item->nama_suami}}</span>
                                </td>
                                <td>
                                    <span class="text-sm text-capitalize font-weight-bold">{{$item->suntik_kb}}</span>
                                </td>
                                <td>
                                    <span class="text-sm text-capitalize font-weight-bold">{{$item->tgl_kb}}</span>
                                </td>
                                <td>
                                    <span class="text-sm text-capitalize font-weight-bold">{{$item->tgl_kembali}}</span>
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
                                                    <h6 class="modal-title" id="modal-title-notification">Hapus Data
                                                        Pasien Bayi</h6>
                                                    <button type="button" class="btn-close text-dark"
                                                        data-bs-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{route('pasien-bayi.destroy', $item->id)}}"
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
                <form action="{{route('pasien-kb.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="id_pasien" class="col-form-label">Nama Pasien:</label>
                        <select class="form-control" id="id_pasien" name="id_pasien">
                            <option>Pilih...</option>
                            @foreach ($nmapasien as $item)
                            <option value="{{$item->id}}">{{$item->nama}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="nama_suami" class="col-form-label">Nama Suami:</label>
                        <input type="text" class="form-control" name="nama_suami" id="nama_suami" required>
                    </div>
                    <div class="form-group">
                        <label for="suntik_kb" class="col-form-label">Suntik KB:</label>
                        <input type="text" class="form-control" name="suntik_kb" placeholder="1 bulan" id="suntik_kb" required>
                    </div>
                    <div class="form-group">
                        <label for="tgl_kb" class="col-form-label">Tgl KB:</label>
                        <input type="date" class="form-control" id="tgl_kb" name="tgl_kb" required>
                    </div>
                    <div class="form-group">
                        <label for="tgl_kembali" class="col-form-label">Tgl Kembali:</label>
                        <input type="date" class="form-control" id="tgl_kembali" name="tgl_kembali" required>
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
@foreach ($pskb as $item)
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
                <form action="{{route('pasien-kb.update',$item->id)}}" method="POST">
                    @method('PUT')
                    @csrf
                        <div class="form-group">
                            <label for="id_pasien" class="col-form-label">Nama Pasien:</label>
                            <select class="form-control" id="id_pasien" name="id_pasien">
                                <option>Pilih...</option>
                                @foreach ($nmapasien as $item)
                                <option value="{{$item->id}}">{{$item->nama}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="nama_suami" class="col-form-label">Nama Suami:</label>
                            <input type="text" class="form-control" name="nama_suami" id="nama_suami" required placeholder="{{ $item->nama_suami }}">
                        </div>
                        <div class="form-group">
                            <label for="suntik_kb" class="col-form-label">Suntik KB:</label>
                            <input type="text" class="form-control" name="suntik_kb" placeholder="1 bulan" id="suntik_kb" required placeholder="{{$item->suntik_kb}}">
                        </div>
                        <div class="form-group">
                            <label for="tgl_kb" class="col-form-label">Tgl KB:</label>
                            <input type="date" class="form-control" id="tgl_kb" name="tgl_kb" required placeholder="{{$item->tgl_kb}}">
                        </div>
                        <div class="form-group">
                            <label for="tgl_kembali" class="col-form-label">Tgl Kembali:</label>
                            <input type="date" class="form-control" id="tgl_kembali" name="tgl_kembali" required placeholder="{{$item->tgl_kembali}}">
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
