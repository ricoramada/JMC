@extends('welcome')

@section('content')
<div class="row">
  <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
    <div class="card card-signin my-5">
      <div class="card-body">
        <h5 class="card-title text-center">Tambahkan Data</h5>
        <form class="form-signin" action="{{ url('/tambahKabupaten/proses') }}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="inputPassword">Kabupaten</label>
            <input type="text" name="nama_kabupaten" class="form-control form-control-lg" placeholder="Nama Kabupaten" required>
          </div>

          <div class="form-group">
            <label for="inputEmail">Jumlah Penduduk</label>
            <input type="text" name="jumlah_penduduk" class="form-control form-control-lg" placeholder="Jumlah Penduduk" required>
          </div>

          <div class="form-group">
            <label for="nama_member">Provinsi</label>
            <select class="form-control form-control-lg" name="id_provinsi">
              <option value="" selected disabled>--Pilih Provinsi--</option>
              <?php foreach ($data_provinsi as $k): ?>
              <option value="{{ $k->id }}">{{ $k->nama_provinsi }}</option>
              <?php endforeach; ?>
            </select>
          </div>

          <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Tambahkan</button>
          <hr class="md-2">
          <a class="btn btn-lg btn-success btn-block text-uppercase" href="/"><i class="fas fa-long-arrow-alt-left"></i> Kembali</a>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
