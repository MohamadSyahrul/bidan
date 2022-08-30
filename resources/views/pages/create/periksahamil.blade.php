@extends('layout.master')
@section('title')
Tambah Data Pasien Hamil
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
                <form action="{{route('periksa-pasien-hamil.store')}}" method="POST">
                    @csrf
                    <div class="row">

                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="id_pasienhamil" class="col-form-label">Nama Pasien:</label>
                                <select class="form-control" required id="id_pasienhamil" name="id_hamil">

                                    @foreach ($nmapasien as $item)
                                    <option value="{{$item->dtpasien->id}}">{{$item->dtpasien->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="vitamin" class="col-form-label">Vitamin:</label>
                                <input type="text" class="form-control" required name="vitamin" id="vitamin">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="keluhan" class="col-form-label">Keterangan</label>
                                <input type="text" class="form-control" required name="keterangan" id="keluhan">
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="idpasien" class="col-form-label">Golongan Darah</label>
                                <select class="form-control" required id="idpasien" name="golongan_darah">
                                    <option value="A" selected>A</option>
                                    <option value="AB" selected>AB</option>
                                    <option value="B" selected>B</option>
                                    <option value="O" selected>O</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tgl" class="col-form-label">Perkembangan Janin</label>
                                <input type="text" class="form-control" id="tgl"
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
