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

<a href="/tambahProvinsi"><button type="button" class="btn btn-success btn-lg">Tambahkan Data</button></a>
<br>
<br>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary text-uppercase">Provinsi</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Provinsi</th>
                      <th scope="col">Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Provinsi</th>
                      <th scope="col">Action</th>
                    </tr>
                </tfoot>
                <tbody>
                  <?php $no = 1 ?>
                  <?php foreach ($data as $k): ?>
                  <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $k->nama_provinsi }}</td>
                    <td>
                      <a href="{{ url('editProvinsi/'. $k->id) }}"><button type="button" class="btn btn-primary">Edit</button></a>
                      <a href="{{ url('menghapusProvinsi/'. $k->id ) }}"><button type="button" class="btn btn-danger">Hapus</button></a>
                      <a href="{{ url('detailProvinsi/'. $k->id ) }}" class="btn btn-secondary">Detail</a>
                    </td>
                  </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
