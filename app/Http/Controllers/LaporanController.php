<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Hamil;
use App\Models\Bersalin;
use App\Models\Datapasien;
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

    public function laporanv2(){
        if (request()->start || request()->end) {
            $start = Carbon::parse(request()->start)->toDateTimeString();
            $end = Carbon::parse(request()->end)->toDateTimeString();
            $ds = Datapasien::whereBetween('created_at',[$start,$end])->get();

            $bersalin = Bersalin::whereBetween('tgl_periksa', [$start, $end])->count();
            // dd($bersalin);
            $hamil = Hamil::whereBetween('tgl_periksa', [$start, $end])->count();
            $bayi = PasienBayi::whereBetween('tgl_periksa', [$start, $end])->count();
            $kb = PasienKB::whereBetween('tgl_kb', [$start, $end])->count();
            $sakit = PasienSakit::whereBetween('tgl_periksa', [$start, $end])->count();
        } else {
            $ds = Datapasien::latest()->get();
            $bersalin = Bersalin::count();
            // dd($bersalin);
            $hamil = Hamil::count();
            $bayi = PasienBayi::count();
            $kb = PasienKB::count();
            $sakit = PasienSakit::count();
        }
        return view('pages.laporanv2', compact('ds','bersalin','hamil','bayi','kb','sakit'));
    }
}
