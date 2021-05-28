@extends('welcome')

@section('content')
<div class="row">
  <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
    <div class="card card-signin my-5">
      <div class="card-body">
        <h5 class="card-title text-center">Edit Data</h5>
        <form class="form-signin" action="{{ url('editProvinsi/'. $data->id . '/edit') }}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="inputPassword">Kabupaten</label>
            <input type="text" name="nama_provinsi" class="form-control form-control-lg" placeholder="Nama Provinsi" value="{{ $data->nama_provinsi }}" required>
          </div>

          <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Edit</button>
          <hr class="md-2">
          <a class="btn btn-lg btn-success btn-block text-uppercase" href="/"><i class="fas fa-long-arrow-alt-left"></i> Kembali</a>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
