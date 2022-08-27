@extends('layout.master')
@section('title')
Laporan
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header pb-0">
               
                {{-- <div class="col-2 mt-4">
                    <input class="form-control" id="myInput" type="search" placeholder="Search..." aria-label="Search">
                </div> --}}
                <form action="{{route('rekap')}}" method="POST" >
                    @csrf
                    <div class="row g-3 ">
                        <h6 class="float-start">REKAP PER</h6>
                        <div class="col-md-2">
                            <div class="form-group">
                                {{-- <label for="suami" class="col-form-label">Dari Tanggal :</label> --}}
                                <input type="date" class="form-control" name="dari" id="suami" value="{{ $dari }}" required>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                {{-- <label for="suami" class="col-form-label">Sampai Tanggal:</label> --}}
                                    <input type="date" class="form-control" name="sampai" id="suami" value="{{ $sampai }}" required></div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="jenis-kelamin" class="col-form-label">Status Pasien</label>
                                <select class="form-control" id="jenis-kelamin" name="status">
                                    <option value="1">Aktif</option>
                                    <option value="0">Non Aktif</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                {{-- <label for="suami" class="col-form-label">Sampai Tanggal:</label> --}}
                                <button type="submit" class="btn bg-gradient-primary">Filter</button>
                            </div>
                        </div>
                        
                </form>
    
            </div>

          

            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center text-center justify-content-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kategori
                                    Periksa
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Total</th>
                            </tr>
                        </thead>
                        <tbody id="myTable" class="text-center">
                            <tr>
                                <td>
                                    <span class="text-sm text-uppercase font-weight-bold">hamil</span>

                                </td>
                                <td>
                                    <span class="text-sm text-capitalize font-weight-bold">{{$hamil}}</span>
                                </td>
                                
                            </tr>
                            <tr>
                                <td>
                                    <span class="text-sm text-uppercase font-weight-bold">bersalin</span>

                                </td>
                                <td>
                                    <span class="text-sm text-capitalize font-weight-bold">{{$bersalin}}</span>
                                </td>
                               
                            </tr>
                            <tr>
                                <td>
                                    <span class="text-sm text-uppercase font-weight-bold">bayi</span>

                                </td>
                                <td>
                                    <span class="text-sm text-capitalize font-weight-bold">{{$bayi}}</span>
                                </td>
                               
                            </tr>
                            <tr>
                                <td>
                                    <span class="text-sm text-uppercase font-weight-bold">sakit</span>

                                </td>
                                <td>
                                    <span class="text-sm text-capitalize font-weight-bold">{{$sakit}}</span>
                                </td>
                                
                            </tr>
                            <tr>
                                <td>
                                    <span class="text-sm text-uppercase font-weight-bold">kb</span>

                                </td>
                                <td>
                                    <span class="text-sm text-capitalize font-weight-bold">{{$kb}}</span>
                                </td>
                               
                            </tr>
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
