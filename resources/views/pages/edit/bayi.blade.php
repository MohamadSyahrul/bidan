@extends('layout.master')
@section('title')
Edit Data Pasien Bayi
@endsection
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card card-frame">
            <div class="card-body">
                <form action="{{route('pasien-bayi.update',$row->id)}}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="idpasien" class="col-form-label">Nama Pasien:</label>
                                <select class="form-control" id="idpasien" name="id_pasienbayi" >
                                    <option value="{{$row->dataPasien->id}}">{{$row->dataPasien->nama}}</option>
                                    @foreach ($nmapasien as $item)
                                    <option value="{{$item->id}}">{{$item->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="keluhan" class="col-form-label"> Keluhan:</label>
                                <input type="text" class="form-control" name="keluhan" value="{{ $row->keluhan }}"  id="keluhan">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="bb" class="col-form-label">Berat badan:</label>
                                <input type="text" class="form-control" id="bb"
                                    name="berat_badan" value="{{ $row->berat_badan }}">
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
