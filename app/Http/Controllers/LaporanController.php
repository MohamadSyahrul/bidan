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

            $bersalin = Bersalin::whereRelation('DataPasien', 'status', $status)->whereDate('tgl_periksa','>=', $dari)->whereDate('tgl_periksa','<=', $sampai)->count();
            $hamil = Hamil::whereRelation('dtpasien', 'status', $status)->whereDate('tgl_periksa','>=', $dari)->whereDate('tgl_periksa','<=', $sampai)->count();
            $bayi = PasienBayi::whereRelation('dataPasien', 'status', $status)->whereDate('tgl_periksa','>=', $dari)->whereDate('tgl_periksa','<=', $sampai)->count();
            $kb = PasienKB::whereRelation('dt_pasien', 'status', $status)->whereDate('tgl_kb','>=', $dari)->whereDate('tgl_kb','<=', $sampai)->count();
            $sakit = PasienSakit::whereRelation('data_pasien', 'status', $status)->whereDate('tgl_periksa','>=', $dari)->whereDate('tgl_periksa','<=', $sampai)->count();
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
            $status = $request->status;
            // dd($dari);
            $bersalin = Bersalin::whereRelation('DataPasien', 'status', $status)->whereDate('tgl_periksa','>=', $dari)->whereDate('tgl_periksa','<=', $sampai)->count();
            $hamil = Hamil::whereRelation('dtpasien', 'status', $status)->whereDate('tgl_periksa','>=', $dari)->whereDate('tgl_periksa','<=', $sampai)->count();
            $bayi = PasienBayi::whereRelation('dataPasien', 'status', $status)->whereDate('tgl_periksa','>=', $dari)->whereDate('tgl_periksa','<=', $sampai)->count();
            $kb = PasienKB::whereRelation('dt_pasien', 'status', $status)->whereDate('tgl_kb','>=', $dari)->whereDate('tgl_kb','<=', $sampai)->count();
            $sakit = PasienSakit::whereRelation('data_pasien', 'status', $status)->whereDate('tgl_periksa','>=', $dari)->whereDate('tgl_periksa','<=', $sampai)->count();
            return view('pages.laporan', compact('bersalin','hamil','bayi','kb','sakit','dari','sampai'));

       
    }
}
