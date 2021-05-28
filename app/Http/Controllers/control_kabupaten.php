<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kabupaten;
use App\Models\provinsi;
use PDF;

class control_kabupaten extends Controller
{
  // View Data Kabupaten
  public function showKabupaten()
  {
    $data = kabupaten::join('provinsi', 'provinsi.id', '=', 'kabupaten.id_provinsi')->get(['kabupaten.id','provinsi.nama_provinsi', 'kabupaten.nama_kabupaten', 'kabupaten.jumlah_penduduk']);
    $jumlah_penduduk = $data->sum('jumlah_penduduk');
    return view('kabupaten.view_kabupaten', compact('data', 'jumlah_penduduk'));
  }

  // Detail Perdata Kabupaten
  public function detailKabupaten($id)
  {
    $data = kabupaten::where('id', $id)->first();
    return view('kabupaten.detail_kabupaten', compact('data'));
  }

  // Menambahkan Data Kabupaten
  public function formInsert()
  {
    $data_provinsi = provinsi::where('id', '>', 0)->get();
    return view('kabupaten.insert_kabupaten', compact('data_provinsi'));
  }
  public function insertKabupaten(Request $req)
  {
    $data = [
      'nama_kabupaten' => $req->nama_kabupaten,
      'jumlah_penduduk' => $req->jumlah_penduduk,
      'id_provinsi' => $req->id_provinsi
    ];
    kabupaten::create($data);
    return redirect('/')->with('message', 'Success Menambahkan Data!');
  }

  // Edit Data Kabupaten
  public function formEdit($id)
  {
    $data = kabupaten::where('id', $id)->first();
    $data_provinsi = provinsi::all();
    return view('kabupaten.edit_kabupaten', compact('data', 'data_provinsi'));
  }
  public function editKabupaten($id, Request $req)
  {
    $data = kabupaten::where('id', $id);
    $data->update([
        'nama_kabupaten' => $req->nama_kabupaten,
        'jumlah_penduduk' => $req->jumlah_penduduk,
        'id_provinsi' => $req->id_provinsi
    ]);
    return redirect('/')->with('message', 'Success Edit Data!');
  }

  // Menghapus Data Kabupaten
  public function deleteKabupaten($id)
  {
    $data = kabupaten::findOrFail($id);
    $data->delete();
    return redirect('/')->with('message', 'Success Menghapus Data!');
  }

  // Print Data Kabupaten
  public function generatePDF($id)
  {
    $data_kabupaten = kabupaten::where('id', $id)->first();
    $pdf = PDF::loadView('kabupaten.pdf_kabupaten', compact('data_kabupaten'));
    return $pdf->download('Jumlah Penduduk Perkabupaten.pdf');
  }
}
