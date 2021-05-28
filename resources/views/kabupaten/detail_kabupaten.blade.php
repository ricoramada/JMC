@extends('welcome')
@section('content')
<div class="card">
  <div class="card-header">
    Detail
  </div>
  <div class="card-body">
    <h2 class="card-title">Kabupaten : {{ $data->nama_kabupaten }}</h2>
    <h5 class="card-text">Jumlah Penduduk : {{ $data->jumlah_penduduk }}</h5>
    <h5 class="card-text">Provinsi : {{ $data->provinsi->nama_provinsi }}</h5>
    <a href="/" class="btn btn-success">Kembali</a>
    <a href="{{ url('generate-pdf/'. $data->id ) }}" class="btn btn-primary">Print</a>
  </div>
</div>
@endsection
