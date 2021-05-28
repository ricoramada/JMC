@extends('welcome')

@section('content')
@if ($message = Session::get('message'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>{{ $message }}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
<a href="/tambahKabupaten"><button type="button" class="btn btn-success btn-lg">Tambahkan Data</button></a>
<br>
<br>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary text-uppercase">Kabupaten</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Kabupaten</th>
                      <th scope="col">Jumlah Penduduk</th>
                      <th scope="col">Provinsi</th>
                      <th scope="col">Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Kabupaten</th>
                      <th scope="col">Jumlah Penduduk</th>
                      <th scope="col">Provinsi</th>
                      <th scope="col">Action</th>
                    </tr>
                </tfoot>
                <tbody>
                  <?php $no = 1 ?>
                  <?php foreach ($data as $k => $datas) : ?>
                  <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $datas->nama_kabupaten }}</td>
                    <td>{{ $datas->jumlah_penduduk }}</td>
                    <td>{{ $datas->nama_provinsi }}</td>
                    <td>
                      <a href="{{ url('editKabupaten/'. $datas->id ) }}"><button type="button" class="btn btn-primary">Edit</button></a>
                      <a href="{{ url('menghapusKabupaten/'. $datas->id ) }}" class="btn btn-danger">Hapus</a>
                      <a href="{{ url('detailKabupaten/'. $datas->id ) }}" class="btn btn-secondary">Detail</a>
                    </td>
                  </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
            <form class="float-right">
              <input class="form-control form-control-lg mr-sm-2" type="search" aria-label="Search" value="{{ $jumlah_penduduk }}" disabled>
            </form>
            <h6 class="float-right p-3">Jumlah Penduduk di seluruh Kabupaten :</h6>
        </div>
    </div>
</div>
@endsection
