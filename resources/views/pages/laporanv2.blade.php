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

                <table cellspacing="5" cellpadding="5" border="0">
                    <form action="{{url('laporanversi2')}}" method="GET">
                        <div class="row g-3 ">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <input type="date" class="form-control" name="start" id="surat" required>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <input type="date" class="form-control" name="end" id="surat" required></div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <button type="submit" class="btn bg-primary text-white">Filter</button>
                                </div>
                            </div>
                        <div>
                    </form>
                </table>
                
                <h6 class="float-start">Data Laporan Pasien</h6>
                <div class="col-2 mt-4">
                    <input class="form-control" id="myInput" type="search" placeholder="Search..." aria-label="Search">
                </div>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center text-center justify-content-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Pasien</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">NIK Pasien</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jenis Kelamin</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Alamat Pasien</th>
                            </tr>
                        </thead>
                        <tbody id="myTable" class="text-center">
                            @foreach ($ds as $item)
                            <tr>
                                <td>{{$item->nama}}</td>
                                <td>{{$item->nik}}</td>
                                <td>{{$item->jenis_kelamin}}</td>
                                <td>{{$item->alamat}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="text-right">
                                    Jumlah Total Pasien Sakit : <br>
                                    Jumlah Total Pasien KB : <br>
                                    Jumlah Total Pasien Bayi : <br> 
                                    Jumlah Total Pasien Hamil : <br> 
                                    Jumlah Total Pasien Bersalin : <br> 
                                </td>
                                <td>
                                    {{$sakit}}<br>
                                    {{$kb}}<br>
                                    {{$bayi}}<br>
                                    {{$hamil}}<br>
                                    {{$bersalin}}<br>

                                </td>
                            </tr>
                        </tfoot>
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
