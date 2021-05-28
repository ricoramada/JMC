@extends('welcome')
@section('content')
<div class="card">
  <div class="card-header">
    Detail
  </div>
  <div class="card-body">
    <h2 class="card-title">Provinsi : {{ $data_provinsi->nama_provinsi }}</h2>
    <h4 class="card-title">Jumlah Penduduk Total : {{ $jumlah_penduduk }}</h4>
    <a href="/provinsi" class="btn btn-success">Kembali</a>
    <a href="{{ url('generate/'. $data_provinsi->id) }}" class="btn btn-primary">Print</a>
  </div>
</div>
@endsection
