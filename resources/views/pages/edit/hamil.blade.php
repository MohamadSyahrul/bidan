@extends('layout.master')
@section('title')
Edit Data Pasien Hamil
@endsection
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card card-frame">
            <div class="card-body">
                <form action="{{route('pasien-hamil.update',$row->id)}}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="row">
            
                        <div class="col-12">
                            <div class="form-group">
                                <label for="idpasien" class="col-form-label">Nama Pasien:</label>
                                <select class="form-control" id="idpasien" name="id_pasienhamil">
                                    <option>Pilih...</option>
                                    @foreach ($nmapasien as $item)
                                    <option value="{{$item->id}}">{{$item->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="suami" class="col-form-label">Nama Suami:</label>
                                <textarea class="form-control" id="suami" name="suami">{{ $row->suami }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="bb" class="col-form-label">Vitamin:</label>
                                <textarea class="form-control" id="bb"
                                    name="vitamin">{{ $row->vitamin }}</textarea>
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

