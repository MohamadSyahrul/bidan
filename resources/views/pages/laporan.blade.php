@extends('layout.master')
@section('title')
Laporan
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header pb-0">
                <button type="button" class="btn bg-gradient-info float-end">
                    Statistik</button>
                <h6 class="float-start">Laporan</h6>
                <div class="col-2 mt-4">
                    <input class="form-control" id="myInput" type="search" placeholder="Search..." aria-label="Search">
                </div>
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
