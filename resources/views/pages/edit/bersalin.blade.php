@extends('layout.master')
@section('title')
Edit Data Pasien Bersalin
@endsection
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card card-frame">
            <div class="card-body">
                <form action="{{route('pasien-bersalin.update',$row->id)}}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="idpasien" class="col-form-label">Nama Pasien:</label>
                                <select class="form-control" id="idpasien" name="id_pasienbersalin">
                                    <option value="{{ $row->dataPasien->id  }}">{{ $row->dataPasien->nama }}</option>
                                    @foreach ($nmapasien as $item)
                                    <option value="{{$item->id}}">{{$item->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="suami" class="col-form-label">Nama Suami:</label>
                                <input class="form-control" type="text" id="suami" name="suami" value="{{ $row->suami }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tgl-lahir" class="col-form-label">Tanggal lahir:</label>
                                <input type="date" class="form-control" name="tgl_lahir" value="{{ $row->tgl_lahir }}"
                                    id="tgl-lahir">
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

