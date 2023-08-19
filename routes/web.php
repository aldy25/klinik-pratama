<?php

use App\Models\Level;
use App\Models\Pasien;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LabController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ApotikController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\ApotekerController;
use App\Http\Controllers\DiagnosaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\InventarisController;
use App\Http\Controllers\PemeriksaanController;
use App\Http\Controllers\DoctorActionController;
use App\Http\Controllers\TenagaKesehatanController;

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

//ROUTE LOGIN
Route::get('/login', [LoginController::class,'index'])->name('login')->middleware('guest');
Route::get('/', [LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class,'authenticate']);
Route::post('/logout', [LoginController::class,'logout']);


//ROUTE DASHBOARD
Route::get('/dashboard',[DashboardController::class,'index'])->middleware('auth');

//ROUTE PASIEN
Route::get('/pasien', [PasienController::class,'index'])->middleware('auth');
Route::get('/pasien/create', [PasienController::class,'create'])->middleware('auth');
Route::post('/pasien/save', [PasienController::class,'store'])->middleware('auth');
Route::post('/pasien/delete/{id}', [PasienController::class,'destroy'])->middleware('auth');
Route::get('/pasien/edit/{id}',[PasienController::class,'edit'])->middleware('auth');
Route::post('/pasien/update/{id}', [PasienController::class,'update'])->middleware('auth');

//ROUTE OBAT
Route::get('/obat', [ObatController::class,'index'])->middleware('auth');
Route::get('/obat/create', [ObatController::class,'create'])->middleware('auth');
Route::post('/obat/save', [ObatController::class,'store'])->middleware('auth');
Route::post('/obat/delete/{id}', [ObatController::class,'destroy'])->middleware('auth');
Route::get('/obat/edit/{id}',[ObatController::class,'edit'])->middleware('auth');
Route::post('/obat/update/{id}', [ObatController::class,'update'])->middleware('auth');

//ROUTE DOKTER
Route::get('/dokter', [DokterController::class,'index'])->middleware('auth');
Route::get('/dokter/create', [DokterController::class,'create'])->middleware('auth');
Route::post('/dokter/save', [DokterController::class,'store'])->middleware('auth');
Route::post('/dokter/delete/{id}', [DokterController::class,'destroy'])->middleware('auth');
Route::get('/dokter/edit/{id}',[DokterController::class,'edit'])->middleware('auth');
Route::post('/dokter/update/{id}', [DokterController::class,'update'])->middleware('auth');

//ROUTE LAYANAN
Route::get('/layanan', [LayananController::class,'index'])->middleware('auth');
Route::get('/layanan/create', [LayananController::class,'create'])->middleware('auth');
Route::post('/layanan/save', [LayananController::class,'store'])->middleware('auth');
Route::post('/layanan/delete/{id}', [LayananController::class,'destroy'])->middleware('auth');
Route::get('/layanan/edit/{id}',[LayananController::class,'edit'])->middleware('auth');
Route::post('/layanan/update/{id}', [LayananController::class,'update'])->middleware('auth');

//ROUTE DIAGNOSA
//Route::get('/pengobatan', [DiagnosaController::class,'index'])->middleware('auth');
Route::post('/diagnosa/save', [DiagnosaController::class,'store'])->middleware('auth');
Route::post('/diagnosa/delete/{id}', [DiagnosaController::class,'destroy'])->middleware('auth');

//ROUTE PEMERIKSAAN
Route::get('/pengobatan', [PemeriksaanController::class,'index'])->middleware('auth');
Route::get('/pemeriksaan/edit/{id}',[PemeriksaanController::class,'edit'])->middleware('auth');
Route::post('/pemeriksaan/update/{id}', [PemeriksaanController::class,'update'])->middleware('auth');

//Route Apoteker
Route::get('/apoteker', [ApotekerController::class,'index'])->middleware('auth');
Route::get('/apoteker/create', [ApotekerController::class,'create'])->middleware('auth');
Route::post('/apoteker/save', [ApotekerController::class,'store'])->middleware('auth');
Route::post('/apoteker/delete/{id}', [ApotekerController::class,'destroy'])->middleware('auth');
Route::get('/apoteker/edit/{id}',[ApotekerController::class,'edit'])->middleware('auth');
Route::post('/apoteker/update/{id}', [ApotekerController::class,'update'])->middleware('auth');

//ROUTE NAKES
Route::get('/nakes', [TenagaKesehatanController::class,'index'])->middleware('auth');
Route::get('/nakes/create', [TenagaKesehatanController::class,'create'])->middleware('auth');
Route::post('/nakes/save', [TenagaKesehatanController::class,'store'])->middleware('auth');
Route::post('/nakes/delete/{id}', [TenagaKesehatanController::class,'destroy'])->middleware('auth');
Route::get('/nakes/edit/{id}',[TenagaKesehatanController::class,'edit'])->middleware('auth');
Route::post('/nakes/update/{id}', [TenagaKesehatanController::class,'update'])->middleware('auth');

//INVENTARIS
Route::get('/inventaris', [InventarisController::class,'index'])->middleware('auth');
Route::get('/inventaris/create', [InventarisController::class,'create'])->middleware('auth');
Route::post('/inventaris/save', [InventarisController::class,'store'])->middleware('auth');
Route::post('/inventaris/delete/{id}', [InventarisController::class,'destroy'])->middleware('auth');
Route::get('/inventaris/edit/{id}',[InventarisController::class,'edit'])->middleware('auth');
Route::post('/inventaris/update/{id}', [InventarisController::class,'update'])->middleware('auth');

//RESTOCK OBAT
Route::get('/obat/pengambilan', [ApotikController::class,'index'])->middleware('auth');
Route::get('/obat/restock', [ApotikController::class,'create'])->middleware('auth');
Route::post('/obat/restock/update', [ApotikController::class,'update'])->middleware('auth');
Route::get('/obat/resep/{id}', [ApotikController::class, 'show'])->middleware('auth');
Route::post('/obat/konfirmasi/{id}', [ApotikController::class, 'edit'])->middleware('auth');

//TRANSAKSI
Route::post('/transaksi/save', [TransaksiController::class,'store'])->middleware('auth');
Route::get('/transaksi/proses/{id}', [TransaksiController::class,'create'])->middleware('auth');
Route::get('/transaksi', [TransaksiController::class,'index'])->middleware('auth');
Route::get('/transaksi/riwayat', [TransaksiController::class,'show'])->middleware('auth');
Route::post('/transaksi/update/{id}', [TransaksiController::class,'update'])->middleware('auth');
Route::get('/transaksi/cetak/{id}',[TransaksiController::class,'cetak'])->middleware('auth');

//ADMIN
Route::get('/admin', [AdminController::class,'index'])->middleware('auth');
Route::get('/admin/create', [AdminController::class,'create'])->middleware('auth');
Route::post('/admin/save', [AdminController::class,'store'])->middleware('auth');
Route::post('/admin/delete/{id}', [AdminController::class,'destroy'])->middleware('auth');
Route::get('/admin/edit/{id}',[AdminController::class,'edit'])->middleware('auth');
Route::post('/admin/update/{id}', [AdminController::class,'update'])->middleware('auth');

//LAPORAN
Route::get('/laporan', [LaporanController::class,'index'])->middleware('auth');
Route::get('/laporan/cetak/pasien', [LaporanController::class,'cetakPasien'])->middleware('auth');
Route::get('/laporan/cetak/dokter', [LaporanController::class,'cetakDokter'])->middleware('auth');
Route::get('/laporan/cetak/apoteker', [LaporanController::class,'cetakApoteker'])->middleware('auth');
Route::get('/laporan/cetak/admin', [LaporanController::class,'cetakAdmin'])->middleware('auth');
Route::get('/laporan/cetak/nakes', [LaporanController::class,'cetakTenagaKesehatan'])->middleware('auth');
Route::get('/laporan/cetak/obat-habis', [LaporanController::class,'cetakObatHabis'])->middleware('auth');
Route::get('/laporan/cetak/inventaris-rusak', [LaporanController::class,'cetakInventaris'])->middleware('auth');
Route::get('/laporan/cetak/transaksi', [LaporanController::class,'pilih'])->middleware('auth');
Route::post('/laporan/cetak/transaksi', [LaporanController::class,'cetakTransaksi'])->middleware('auth');

//Lab 
Route::get('/lab', [LabController::class,'index'])->middleware('auth');
Route::get('/lab/create', [LabController::class,'create'])->middleware('auth');
Route::post('/lab/save', [LabController::class,'store'])->middleware('auth');
Route::post('/lab/delete/{id}', [LabController::class,'destroy'])->middleware('auth');
Route::get('/lab/edit/{id}',[LabController::class,'edit'])->middleware('auth');
Route::post('/lab/update/{id}', [LabController::class,'update'])->middleware('auth');
Route::get('/lab/cetak/{id}', [LabController::class,'cetak'])->middleware('auth');

//Dokter
Route::get('/data-pasien', [DoctorActionController::class,'index'])->middleware('auth');
Route::get('/pasien/rekam-medis/{id}', [DoctorActionController::class,'create'])->middleware('auth');
Route::get('/pasien/riwayat-lab/{id}', [DoctorActionController::class,'show'])->middleware('auth');

