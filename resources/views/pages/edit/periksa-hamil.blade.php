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
                                    <option value="{{$row->id_pasienhamil}}" selected>{{$row->dtpasien->nama}}</option>
                                    @foreach ($nmapasien as $item)
                                    <option value="{{$item->id}}">{{$item->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        {{-- <div class="col-md-6">
                            <div class="form-group">
                                <label for="suami" class="col-form-label">Nama Suami:</label>
                                <textarea class="form-control" id="suami" name="suami">{{ $row->suami }}</textarea>
                            </div>
                        </div> --}}
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="bb" class="col-form-label">Vitamin:</label>
                                <textarea class="form-control" id="bb"
                                    name="vitamin">{{ $row->vitamin }}</textarea>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="idpasien" class="col-form-label">Golongan Darah</label>
                                <select class="form-control" id="idpasien" name="golongan_darah">
                                    <option value="{{$row->golongan_darah}}" selected>{{$row->golongan_darah}}</option>
                                    <option value="AB" selected>AB</option>
                                    <option value="B" selected>B</option>
                                    <option value="A" selected>A</option>
                                    <option value="O" selected>O</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="kode-pasien" class="col-form-label">Umur Kehamilan</label>
                                <input type="text" class="form-control" name="umur_kehamilan" placeholder="Masukan Umur Kehamilan" id="kode-pasien">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="kode-pasien" class="col-form-label">Umur Pasien</label>
                                <input type="text" class="form-control" name="umur_pasien" placeholder="Masukan Umur Pasien" id="kode-pasien">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="bb" class="col-form-label">Perkembangan Janin:</label>
                                <textarea class="form-control" id="bb"
                                    name="perkembangan_janin">{{ $row->perkembangan_janin }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="bb" class="col-form-label">Keterangan:</label>
                                <textarea class="form-control" id="bb"
                                    name="keterangan">{{ $row->keterangan }}</textarea>
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

