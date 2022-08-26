@extends('layout.master')
@section('title')
Edit Data Pasien Bersalin
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
                <form action="{{route('pasien-bersalin.update',$row->id)}}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="idpasien" class="col-form-label">Nama Pasien:</label>
                                <select class="form-control" required id="idpasien" name="id_pasienbersalin">
                                    <option value="{{ $row->dataPasien->id  }}">{{ $row->dataPasien->nama }}</option>
                                    @foreach ($nmapasien as $item)
                                    <option value="{{$item->id}}">{{$item->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tgl-lahir" class="col-form-label">Tanggal lahir:</label>
                                <input type="date" class="form-control" required name="tgl_lahir" value="{{ $row->tgl_lahir }}"
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

