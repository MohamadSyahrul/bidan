@extends('layout.master')
@section('title')
Tambah Data Pasien Bayi
@endsection
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card card-frame">
            <div class="card-body">
                <form action="{{route('pasien-bayi.store')}}" method="POST">
                    @csrf
                    <div class="row">
            
                        <div class="col-12">
                            <div class="form-group">
                                <label for="id_pasienbayi" class="col-form-label">Nama Pasien:</label>
                                <select class="form-control" id="id_pasienbayi" name="id_pasienbayi">
                                    <option>Pilih...</option>
                                    @foreach ($nmapasien as $item)
                                    <option value="{{$item->id}}">{{$item->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="keluhan" class="col-form-label">Keluhan:</label>
                                <input type="text" class="form-control" name="keluhan" id="keluhan">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="berat_badan" class="col-form-label">Berat Badan:</label>
                                <input type="text" class="form-control" name="berat_badan" id="berat_badan">
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

