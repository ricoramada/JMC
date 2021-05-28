<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\provinsi;
use App\Models\kabupaten;
use PDF;

class control_provinsi extends Controller
{
    // View Provinsi
    public function showProvinsi()
    {
      $data = provinsi::where('id', '>', 0)->get();
      return view('provinsi.view_provinsi', compact('data'));
    }

    // Menambahkan Data Provinsi
    public function formInsertProvinsi()
    {
      return view('provinsi.insert_provinsi');
    }
    public function insertProvinsi(Request $req)
    {
      $data = [
        'nama_provinsi' => $req->nama_provinsi
      ];
      provinsi::create($data);
      return redirect('/provinsi')->with('message', 'Success Menambahkan Data!');
    }

    // Edit Data Provinsi
    public function formEditProvinsi($id)
    {
      $data = provinsi::where('id', $id)->first();
      return view('provinsi.edit_provinsi', compact('data'));
    }
    public function editProvinsi($id, Request $req)
    {
      $data = provinsi::where('id', $id);
      $data->update([
          'nama_provinsi' => $req->nama_provinsi,
      ]);
      return redirect('/provinsi')->with('message', 'Success Edit Data!');
    }

    // Detail Data Provinsi
    public function detailProvinsi($id)
    {
      $data = kabupaten::where('id_provinsi', $id);
      $jumlah_penduduk = $data->sum('jumlah_penduduk');
      $data_provinsi = provinsi::where('id', $id)->first();
      return view('provinsi.detail_provinsi', compact('jumlah_penduduk', 'data_provinsi'));
    }

    // Menghapus Data Provinsi
    public function deleteProvisi($id)
    {
      $data = provinsi::findOrFail($id);
      $data->delete();
      return redirect('/provinsi');
    }

    // Print Data Provinsi
    public function generate($id)
    {
      $data = kabupaten::where('id_provinsi', $id);
      $jumlah_penduduk = $data->sum('jumlah_penduduk');
      $data_provinsi = provinsi::where('id', $id)->first();
      $pdf = PDF::loadView('provinsi.pdf_provinsi', compact('jumlah_penduduk', 'data_provinsi'));
      return $pdf->download('Jumlah Penduduk Perprovinsi.pdf');
    }
}
