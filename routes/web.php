<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\control_kabupaten;
use App\Http\Controllers\control_provinsi;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Kabupaten
Route::get('/', [control_kabupaten::class, 'showKabupaten']);
Route::get('/tambahKabupaten', [control_kabupaten::class, 'formInsert']);
Route::post('/tambahKabupaten/proses', [control_kabupaten::class, 'insertKabupaten']);
Route::get('/menghapusKabupaten/{id}', [control_kabupaten::class, 'deleteKabupaten']);
Route::get('/detailKabupaten/{id}', [control_kabupaten::class, 'detailKabupaten']);
Route::get('/editKabupaten/{id}', [control_kabupaten::class, 'formEdit']);
Route::post('/editKabupaten/{id}/edit', [control_kabupaten::class, 'editKabupaten']);
Route::get('generate-pdf/{id}', [control_kabupaten::class, 'generatePDF']);

// Provinsi
Route::get('/provinsi', [control_provinsi::class, 'showProvinsi']);
Route::get('/tambahProvinsi', [control_provinsi::class, 'formInsertProvinsi']);
Route::post('/tambahProvinsi/proses', [control_provinsi::class, 'insertProvinsi']);
Route::get('/menghapusProvinsi/{id}', [control_provinsi::class, 'deleteProvisi']);
Route::get('/detailProvinsi/{id}', [control_provinsi::class, 'detailProvinsi']);
Route::get('/editProvinsi/{id}', [control_provinsi::class, 'formEditProvinsi']);
Route::post('/editProvinsi/{id}/edit', [control_provinsi::class, 'EditProvinsi']);
Route::get('generate/{id}', [control_provinsi::class, 'generate']);
