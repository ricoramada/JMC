<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class provinsi extends Model
{
  protected $table = 'provinsi';
  protected $primaryKey = 'id';
  public $timestamps = false;
  protected $fillable = [
    'id',
    'nama_provinsi'
  ];
}
