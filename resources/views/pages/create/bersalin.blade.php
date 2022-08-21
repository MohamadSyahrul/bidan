@extends('layout.master')
@section('title')
Tambah Data Pasien Bersalin
@endsection
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card card-frame">
            <div class="card-body">
                <form action="{{route('pasien-bersalin.store')}}" method="POST">
                    @csrf
                    <div class="row">
            
                        <div class="col-12">
                            <div class="form-group">
                                <label for="id_pasienbersalin" class="col-form-label">Nama Pasien:</label>
                                <select class="form-control" id="id_pasienbersalin" name="id_pasienbersalin">
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
                                <input type="text" class="form-control" name="suami" id="suami">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tgl_lahir" class="col-form-label">Tgl Lahir:</label>
                                <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir">
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

