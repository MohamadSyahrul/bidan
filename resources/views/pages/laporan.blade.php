@extends('layout.master')
@section('title')
Laporan
@endsection
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header pb-0">
                <button type="button" class="btn bg-gradient-info float-end" data-bs-toggle="modal"
                    data-bs-target="#exampleModalMessage">
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
                                <th class="text-secondary opacity-7"></th>
                            </tr>
                        </thead>
                        <tbody id="myTable" class="text-center">
                            <tr>
                                <td>
                                    <span class="text-sm text-uppercase font-weight-bold">hamil</span>

                                </td>
                                <td>
                                    <span class="text-sm text-capitalize font-weight-bold">2</span>
                                </td>
                                <td class="align-middle">
                                    <a href="javascript:;" class="text-secondary font-weight-bold text-xs"
                                        data-bs-toggle="modal" data-bs-target="#edit-data"><i class="fa-solid fa-file-pdf"></i>
                                        PDF
                                    </a>
                                </td>
                            </tr>
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
                <form action="{{route('data-pasien.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nama-pasien" class="col-form-label">Nama Pasien:</label>
                        <input type="text" class="form-control" name="nama" placeholder="nama" id="nama-pasien">
                    </div>
                    <div class="form-group">
                        <label for="jenis-kelamin" class="col-form-label">Jenis Kelamin:</label>
                        <select class="form-control" id="jenis-kelamin" name="jenis_kelamin">
                            <option>Pilih...</option>
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="tangal-lahir" class="col-form-label">Tanggal Lahir:</label>
                        <input type="date" class="form-control" name="tgl_lahir" id="tangal-lahir">
                    </div>

                    <div class="form-group">
                        <label for="alamat-pasien" class="col-form-label">Alamat Pasien:</label>
                        <textarea class="form-control" id="alamat-pasien" name="alamat"></textarea>
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
