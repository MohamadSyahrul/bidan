@extends('layout.master')
@section('title')
Pasien Bayi
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

                <a href="{{route('pasien-bayi.create')}}" class="btn bg-gradient-info float-end">
                    Tambah
                </a>

                <h6 class="float-start">Data Pasien Bayi</h6>
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
                                    Keluhan</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Berat Badan</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Umur
                                        </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Tanggal Lahir</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Tanggal Periksa</th>
                                <th class="text-secondary opacity-7"></th>
                            </tr>
                        </thead>
                        <tbody id="myTable" class="text-center">
                            @foreach ($psnbayi as $item)
                            <tr>
                                <td>
                                    <p class="text-sm text-uppercase font-weight-bold mb-0">
                                        {{$item->dataPasien->nama ?? ''}}</p>

                                </td>
                                <td>
                                    <span class="text-sm text-capitalize font-weight-bold">{{$item->keluhan}}</span>
                                </td>
                                <td>
                                    <span class="text-sm text-capitalize font-weight-bold">{{$item->berat_badan}}</span>
                                </td>
                                <?php
                                        $date1 = date_create($item->dataPasien->tgl_lahir);
                                    $date2 = Carbon\Carbon::now()->format('Y-m-d');
                                    $date3 = date_create($date2);
                                    
                                    $diff = date_diff($date1, $date3);
                                    // $tahun = $diff->format("%y tahun");
                                    $months = $diff->format("%m bulan");
                                    $day = $diff->format("%d hari");
                                    $umur = $months.' '.$day;
                                ?>
                                    <td>
                                    <p class="text-sm text-uppercase font-weight-bold mb-0">
                                        {{$umur}}</p>
                                        
                                    </td>
                                    <td>
                                        <span class="text-sm text-capitalize font-weight-bold">{{date('d-m-Y', strtotime($item->dataPasien->tgl_lahir))}}</span>
                                    </td>
                                <td>
                                    <span class="text-sm text-capitalize font-weight-bold">{{date('d-m-Y', strtotime($item->tgl_periksa))}}</span>
                                </td>
                                <td class="align-middle">
                                    <a href="{{route('pasien-bayi.edit', $item->id)}}" class="text-secondary font-weight-bold text-xs">
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



{{-- modal edit --}}
@foreach ($psnbayi as $item)
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
                            <textarea class="form-control" id="bb"
                                name="berat_badan">{{ $item->berat_badan }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="tgl-periksa" class="col-form-label">Tanggal Periksa:</label>
                            <input type="date" class="form-control" name="tgl_periksa" value="{{ $item->tgl_periksa }}"
                                id="tgl-periksa">
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
