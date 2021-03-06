<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HamilController;
use App\Http\Controllers\BersalinController;
use App\Http\Controllers\PasienKBController;
use App\Http\Controllers\DatapasienController;
use App\Http\Controllers\PasienBayiController;
use App\Http\Controllers\PasienSakitController;

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

Route::get('tambah-pasien', function () {
    return view('pages.dtpasien.create');
});



Route::get('/dashboard', function () {
    return view('pages.dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resource('data-pasien', DatapasienController::class)->middleware(['auth']);
Route::resource('pasien-sakit', PasienSakitController::class)->middleware(['auth']);
Route::resource('pasien-bayi', PasienBayiController::class)->middleware(['auth']);
Route::resource('pasien-kb', PasienKBController::class)->middleware(['auth']);
Route::resource('pasien-bersalin', BersalinController::class)->middleware(['auth']);
Route::resource('pasien-hamil', HamilController::class)->middleware(['auth']);

require __DIR__.'/auth.php';
