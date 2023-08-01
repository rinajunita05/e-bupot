<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PPController;
use App\Http\Controllers\PengController;
use App\Http\Controllers\SPTController;



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

Route::get('authkey', [AuthController::class, 'authkey']); 
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::get('authorization', [AuthController::class, 'loginByToken']);
Route::get('authorize', [AuthController::class, 'loginByToken']);
Route::post('custom-login', [AuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [AuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [AuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [AuthController::class, 'signOut'])->name('signout');

Route::get('dashboard', [SPTController::class, 'dashboard']); 
Route::get('pengaturan', [PengController::class, 'pengaturan']); 
Route::post('proses_tambah_pengaturan', [PengController::class, 'proses_tambah_pengaturan']); 
Route::get('ganti_status_peng/{id}', [PengController::class, 'ganti_status_peng']); 

Route::get('pajakpenghasilan', [PPController::class, 'pajakpenghasilan']); 
Route::get('daftarbuktisetorsendiri', [PPController::class, 'daftarbuktisetorsendiri']);
Route::get('rekampphsendiri', [PPController::class, 'rekampphsendiri']); 
Route::post('proses_tambah_pphsendiri', [PPController::class, 'proses_tambah_pphsendiri']);
Route::post('proses_edit_pphsendiri/{id}', [PPController::class, 'proses_edit_pphsendiri']);
Route::get('hapus_pphsendiri/{id}', [PPController::class, 'hapus_pphsendiri']); 
Route::get('editpphsendiri/{id}', [PPController::class, 'editpphsendiri']); 

Route::get('daftarbuktipotongBPPs', [PPController::class, 'daftarbuktipotongBPPs']); 
Route::get('rekambp1', [PPController::class, 'daftardokumen']); 
Route::post('proses_tambah_pphpasal', [PPController::class, 'proses_tambah_pphpasal']); 
Route::get('hapus_dokumen/{id}', [PPController::class, 'hapus_dokumenpph']); 
Route::get('hapus_pphpasal/{id}', [PPController::class, 'hapus_pphpasal']); 
Route::get('editpphpasal/{id}', [PPController::class, 'editpphpasal']); 
Route::post('proses_edit_pphpasal/{id}', [PPController::class, 'proses_edit_pphpasal']);

Route::get('daftarbupotnon', [PPController::class, 'daftarbupotnon']); 
Route::get('rekambupotnon', [PPController::class, 'rekambupotnon']); 
Route::post('proses_tambah_pphnon', [PPController::class, 'proses_tambah_pphnon']);
Route::get('editpphnon/{id}', [PPController::class, 'editpphnon']); 
Route::post('proses_edit_pphnon/{id}', [PPController::class, 'proses_edit_pphnon']);
Route::get('hapus_dokumennon/{id}', [PPController::class, 'hapus_dokumennon']); 
Route::get('hapus_pphnon/{id}', [PPController::class, 'hapus_pphnon']); 
Route::get('editpphnon/{id}', [PPController::class, 'editpphnon']); 

Route::get('impordata', [PPController::class, 'impordata']); 
Route::get('hapus_importdata/{id}', [PPController::class, 'hapus_importdata']);
Route::get('posting', [PPController::class, 'posting']); 

Route::get('sptmasa', [SPTController::class, 'sptmasa']);
Route::get('/tambah', [SPTController::class, 'tambah']); 
Route::get('daftarbuktisetor', [SPTController::class, 'sptmasa']); 
Route::post('tambah_buktisetor', [SPTController::class, 'proses_tambah_buktisetor']);
Route::get('hapus_buktisetor/{id}', [SPTController::class, 'hapus_buktisetor']); 
Route::get('/penyiapanspt', [SPTController::class, 'penyiapanspt']);
Route::get('/draft2/{id}', [SPTController::class, 'lengkapispt']);
Route::get('/kirimspt', [SPTController::class, 'kirimspt']);
Route::get('/dbp1', [SPTController::class, 'dbp1']);
Route::post('simpan_doss_dopp', [SPTController::class, 'simpan_doss_dopp']);
Route::get('/dopp', [SPTController::class, 'dopp']);
Route::get('previewspt', [SPTController::class, 'previewspt']); 
Route::post('tambah_spt', [SPTController::class, 'tambah_spt']);
Route::get('/indukspt', [SPTController::class, 'indukspt']);
Route::get('/dbp', [SPTController::class, 'dbp']);
Route::get('/uploadspt', [SPTController::class, 'uploadspt']);
Route::get('update_id_billing/{sptmasa_id}', [SPTController::class, 'update_id_billing']);
Route::get('surat_billing/{sptmasa_id}', [SPTController::class, 'surat_billing']);
Route::get('surat_bpe/{sptmasa_id}', [SPTController::class, 'surat_bpe']);
Route::get('surat_induk', [SPTController::class, 'surat_induk']);

Route::get('suratbupotnon/{id}', [PPController::class, 'suratbupotnon']); 
Route::get('suratbupotpasal/{id}', [PPController::class, 'suratbupotpasal']); 
Route::get('suratbupotsendiri', [PPController::class, 'suratbupotsendiri']); 
Route::get('download_folder', [PPController::class, 'getDownload']); 




// Route::get('/coba', function () {
//     return view('coba');
// });
// Route::get('/suratbupotnon', function () {
//     return view('suratbupotnon');
// });
// Route::get('/tambah', function () {
//     return view('tambah');
// });
