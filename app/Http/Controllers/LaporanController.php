<?php

namespace App\Http\Controllers;

use App\Models\Hamil;
use App\Models\Bersalin;
use App\Models\PasienKB;
use App\Models\PasienBayi;
use App\Models\PasienSakit;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;

class LaporanController extends Controller
{
    public function index(Request $request){
      
        if($request->isMethod('get')) {
            $bersalin = 0;
            $hamil =0;
            $bayi = 0;
            $kb = 0;
            $sakit = 0;
            $dari = null;
            $sampai = null;
            return view('pages.laporan', compact('bersalin','hamil','bayi','kb','sakit','dari','sampai'));
        }else{
            // $validator = Validator::make($request->all(), [
            //     'dari' => 'required',
            //     'sampai' => 'required',
            // ]);

            $bersalin = Bersalin::whereDate('tgl_periksa','>=', $request->dari)->whereDate('tgl_periksa','>=', $request->sampai)->count();
            $hamil = Hamil::whereDate('tgl_periksa','>=', $request->dari)->whereDate('tgl_periksa','>=', $request->sampai)->count();
            $bayi = PasienBayi::whereDate('tgl_periksa','>=', $request->dari)->whereDate('tgl_periksa','>=', $request->sampai)->count();
            $kb = PasienKB::whereDate('tgl_kb','>=', $request->dari)->whereDate('tgl_kb','>=', $request->sampai)->count();
            $sakit = PasienSakit::whereDate('tgl_periksa','>=', $request->dari)->whereDate('tgl_periksa','>=', $request->sampai)->count();
            return view('pages.laporan', compact('bersalin','hamil','bayi','kb','sakit','dari','sampai'));

        }
        

        // return view('pages.laporan', compact('bersalin','hamil','bayi','kb','sakit'));
    }

    public function rekap(Request $request){
       
            // $validator = Validator::make($request->all(), [
            //     'dari' => 'required',
            //     'sampai' => 'required',
            // ]);
            $dari = $request->dari;
            $sampai = $request->sampai;
            // dd($dari);
            $bersalin = Bersalin::whereDate('tgl_periksa','>=', $dari)->whereDate('tgl_periksa','<=', $sampai)->count();
            $hamil = Hamil::whereDate('tgl_periksa','>=', $dari)->whereDate('tgl_periksa','<=', $sampai)->count();
            $bayi = PasienBayi::whereDate('tgl_periksa','>=', $dari)->whereDate('tgl_periksa','<=', $sampai)->count();
            $kb = PasienKB::whereDate('tgl_kb','>=', $dari)->whereDate('tgl_kb','<=', $sampai)->count();
            $sakit = PasienSakit::whereDate('tgl_periksa','>=', $dari)->whereDate('tgl_periksa','<=', $sampai)->count();
            return view('pages.laporan', compact('bersalin','hamil','bayi','kb','sakit','dari','sampai'));

       
    }
}
