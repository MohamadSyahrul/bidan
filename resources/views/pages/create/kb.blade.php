@extends('layout.master')
@section('title')
Tambah Data Pasien kb
@endsection
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card card-frame">
            <div class="card-body">
                <form action="{{route('pasien-kb.store')}}" method="POST">
                    @csrf
                    <div class="row">
            
                        <div class="col-12">
                            <div class="form-group">
                                <label for="id_pasien" class="col-form-label">Nama Pasien:</label>
                                <select class="form-control" id="id_pasien" name="id_pasien">
                                    <option>Pilih...</option>
                                    @foreach ($nmapasien as $item)
                                    <option value="{{$item->id}}">{{$item->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nama_suami" class="col-form-label">Nama Suami:</label>
                                <input type="text" class="form-control" name="nama_suami" id="nama_suami" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="suntik_kb" class="col-form-label">Suntik KB:</label>
                                <input type="text" class="form-control" name="suntik_kb" placeholder="1 bulan" id="suntik_kb" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tgl_kb" class="col-form-label">Tgl KB:</label>
                                <input type="date" class="form-control" id="tgl_kb" name="tgl_kb" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tgl_kembali" class="col-form-label">Tgl Kembali:</label>
                                <input type="date" class="form-control" id="tgl_kembali" name="tgl_kembali" required>
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
