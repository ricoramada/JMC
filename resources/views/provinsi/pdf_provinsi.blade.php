<style media="screen">
  table {
    border-left: 0.01em solid #010101;
    border-right: 0;
    border-top: 0.01em solid #010101;
    border-bottom: 0;
    border-collapse: collapse;
  }
  table td,
  table th {
    border-left: 0;
    border-right: 0.01em solid #010101;
    border-top: 0;
    border-bottom: 0.01em solid #010101;
    text-align: center;
  }
</style>
<h1>{{ $data_provinsi->nama_provinsi }}</h6>
<table>
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Jumlah Penduduk</th>
    </tr>
  </thead>
  <tbody>
    <?php $k = 1 ?>
      <tr>
        <th scope="row">{{ $k++ }}</th>
        <td>{{ $jumlah_penduduk }}</td>
      </tr>
  </tbody>
</table>
