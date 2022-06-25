<?php

namespace App\Http\Controllers;

use App\Models\Hamil;
use App\Models\Bersalin;
use App\Models\PasienKB;
use App\Models\PasienBayi;
use App\Models\PasienSakit;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index(){
        $bersalin = Bersalin::count();
        $hamil = Hamil::count();
        $bayi = PasienBayi::count();
        $kb = PasienKB::count();
        $sakit = PasienSakit::count();

        return view('pages.laporan', compact('bersalin','hamil','bayi','kb','sakit'));
    }
}
