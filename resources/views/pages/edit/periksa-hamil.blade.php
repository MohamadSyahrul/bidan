@extends('layout.master')
@section('title')
Edit Data Pasien Hamil
@endsection
@push('plugin-style')
<!-- css -->
<link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css"
    integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />

<!-- Javascript -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js"
    integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $('select').selectize({
            sortField: 'text'
        });
    });

</script>
@endpush

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card card-frame">
            <div class="card-body">
                <form action="{{route('periksa-pasien-hamil.update', $update->id)}}" method="POST">
                    @csrf
                    @method('put')
                    <div class="row">

                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="id_pasienhamil" class="col-form-label">Nama Pasien:</label>
                                <select class="form-control" required id="id_pasienhamil" name="id_hamil">

                                    @foreach ($nmapasien as $item)
                                    <option value="{{$item->hamil->dtpasien->id}}">{{$item->hamil->dtpasien->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="vitamin" class="col-form-label">Vitamin:</label>
                                <input type="text" class="form-control" required name="vitamin" value="{{$update->vitamin}}" id="vitamin">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="keluhan" class="col-form-label">Keterangan</label>
                                <input type="text" class="form-control" required name="keterangan" value="{{$update->keterangan}}" id="keluhan">
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="idpasien" class="col-form-label">Golongan Darah</label>
                                <select class="form-control" required id="idpasien" name="golongan_darah">
                                    <option value="{{$update->golongan_darah}}" selected>Golongan darah saat ini ({{$update->golongan_darah}})</option>
                                    <option value="A">A</option>
                                    <option value="AB">AB</option>
                                    <option value="B">B</option>
                                    <option value="O">O</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tgl" class="col-form-label">Perkembangan Janin</label>
                                <input type="text" class="form-control" value="{{$update->perkembanganjanin}}" id="tgl"
                                    name="perkembanganjanin">
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
