<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kabupaten extends Model
{
    protected $table = 'kabupaten';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
      'id',
      'nama_kabupaten',
      'jumlah_penduduk',
      'id_provinsi'
    ];
    public function provinsi()
    {
      return $this->belongsTo(provinsi::class, 'id_provinsi', 'id');
    }
}
