<?php

use App\Models\Datapasien;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HamilController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\BersalinController;
use App\Http\Controllers\PasienKBController;
use App\Http\Controllers\DatapasienController;
use App\Http\Controllers\PasienBayiController;
use App\Http\Controllers\PasienSakitController;
use App\Http\Controllers\PeriksaHamilController;

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

Route::get('/', function () {
    return view('auth.login');
});

// Route::get('tambah-pasien', function () {
//     return view('pages.laporanv2');
// });



Route::get('/dashboard', function () {
    $dtpasien = Datapasien::count();
    $daynow = Datapasien::whereDate('created_at', date('Y-m-d'))->get()->count();
    $data = Datapasien::whereMonth('created_at', date('m'))
            ->get()->count();
return view('pages.dashboard', compact('dtpasien','daynow', 'data'));
})->middleware(['auth'])->name('dashboard');

Route::get('ubahstatus/{id}', [DatapasienController::class, 'ubahStatus'])->middleware(['auth']);
Route::get('ubahstatusaktif/{id}', [DatapasienController::class, 'ubahStatusAktif'])->middleware(['auth']);


Route::resource('data-pasien', DatapasienController::class)->middleware(['auth']);
Route::resource('pasien-sakit', PasienSakitController::class)->middleware(['auth']);
Route::resource('pasien-bayi', PasienBayiController::class)->middleware(['auth']);
Route::resource('pasien-kb', PasienKBController::class)->middleware(['auth']);
Route::resource('pasien-bersalin', BersalinController::class)->middleware(['auth']);
Route::resource('pasien-hamil', HamilController::class)->middleware(['auth']);
Route::resource('periksa-pasien-hamil', PeriksaHamilController::class)->middleware(['auth']);

Route::get('laporan', [LaporanController::class, 'index'])->middleware(['auth']);
Route::post('laporan', [LaporanController::class, 'rekap'])->middleware(['auth'])->name('rekap');

Route::get('laporanversi2', [LaporanController::class, 'laporanv2'])->middleware(['auth']);

require __DIR__.'/auth.php';
