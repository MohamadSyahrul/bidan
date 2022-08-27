<?php

namespace App\Http\Controllers;

use App\Models\PasienKB;
use App\Models\Datapasien;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PasienKBController extends Controller
{
           /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nmapasien = Datapasien::all();
        $pskb = PasienKB::with(['dt_pasien'])->get();
        return view('pages.pasien.kb', compact('pskb','nmapasien'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nmapasien = Datapasien::all();
        return view('pages.create.kb', compact('nmapasien'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dp = $request->all();
        PasienKB::create($dp);
        return redirect()->route('pasien-kb.index')->with('success', 'Data berhasil disimpan !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $nmapasien = Datapasien::all();
        $row = PasienKB::findOrfail($id);
        return view('pages.edit.kb', compact('nmapasien', 'row'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ps = $request->all();
        $item = PasienKB::findOrFail($id);
        $item->update($ps);
        return redirect()->route('pasien-kb.index')->with('success', 'Data berhasil diperbarui !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = PasienKB::findOrFail($id);
        $item->delete();
        return redirect()->route('pasien-kb.index')->with('success', 'Data berhasil dihapus !');

    }

    public function notifwa(Request $request, $id){

        $no_telp = PasienKB::where('id', $id)->pluck('no_tlp')->first();
        $kb = PasienKB::where('id', $id)->pluck('tgl_kembali')->first();

        $message = 'Wayae KB';
        
        $apikey = '9BW18M4DDUPAASA0';
        $number_key = 'Wkcp0dD1DyUhGO0h';
      if (Carbon::now()->format('Y-m-d') === $kb) {
        # code...
        $response = Http::withHeaders([
            'Content-Type' => 'application/json'
            ])->withOptions([
              'debug' => false,
              'connect_timeout' =>false,
              'timeout' => false,
              'verify' => false,
            ])->post('https://api.watzap.id/v1/send_message',[

                'api_key' => $apikey,
                'number_key' => $number_key,
                
                'phone_no' => $no_telp,
                'message' => $message
            ]);
      }
            return $response;
    }

}
