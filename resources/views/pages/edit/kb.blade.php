@extends('layout.master')
@section('title')
Edit Data Pasien kb
@endsection
@push('plugin-style')
<!-- css -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />

<!-- Javascript -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>

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
                <form action="{{route('pasien-kb.update',$row->id)}}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="row">
            
                        <div class="col-12">
                            <div class="form-group">
                                <label for="id_pasien" class="col-form-label">Nama Pasien:</label>
                                <select class="form-control" id="id_pasien" name="id_pasien">
                                    
                                    @foreach ($nmapasien as $item)
                                    <option value="{{$item->id}}">{{$item->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="telp-pasien" class="col-form-label">No Telp Pasien:</label>
                                <input type="text" class="form-control" name="no_tlp" value="{{$row->no_tlp}}" id="telp-pasien">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="suntik_kb" class="col-form-label">Suntik KB:</label>
                                <input type="text" class="form-control" name="suntik_kb" id="suntik_kb" required value="{{$row->suntik_kb}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tgl_kb" class="col-form-label">Tgl KB:</label>
                                <input type="date" class="form-control" id="tgl_kb" name="tgl_kb" required value="{{$row->tgl_kb}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tgl_kembali" class="col-form-label">Tgl Kembali:</label>
                                <input type="date" class="form-control" id="tgl_kembali" name="tgl_kembali" required value="{{$row->tgl_kembali}}">
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

