<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DatapasienController;

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


require __DIR__.'/auth.php';