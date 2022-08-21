@extends('layout.master')
@section('title')
Tambah Data Pasien
@endsection
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card card-frame">
            <div class="card-body">
                <form action="{{route('data-pasien.store')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="kode-pasien" class="col-form-label">Kode Pasien:</label>
                                <input type="text" class="form-control" disabled name="kode_pasien" placeholder="Kode Pasien digenerate Otomatis" id="kode-pasien">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nama-pasien" class="col-form-label">Nama Pasien:</label>
                                <input type="text" class="form-control" name="nama" placeholder="nama" id="nama-pasien">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="jenis-kelamin" class="col-form-label">Jenis Kelamin:</label>
                                <select class="form-control" id="jenis-kelamin" name="jenis_kelamin">
                                    <option>Pilih...</option>
                                    <option value="L">Laki-laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tangal-lahir" class="col-form-label">Tanggal Lahir:</label>
                                <input type="date" class="form-control" name="tgl_lahir" id="tangal-lahir">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="alamat-pasien" class="col-form-label">Alamat Pasien:</label>
                                <textarea class="form-control" id="alamat-pasien" name="alamat"></textarea>
                            </div>
                        </div>

                    </div>
                    <div class="float-end">
                        <button type="button" class="btn bg-gradient-secondary">Batal</button>
                        <button type="submit" class="btn bg-gradient-primary">Simpan</button>
                    </div>
                </form>
            </div>              
        </div>
    </div>
</div>

@endsection

