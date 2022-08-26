<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Bersalin;
use App\Models\Datapasien;
use Illuminate\Http\Request;

class BersalinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nmapasien = Datapasien::all();
        $psnbersalin = Bersalin::with(['DataPasien', 'Hamil'])->get();
        // dd($psnbersalin);
        return view('pages.pasien.bersalin', compact('psnbersalin', 'nmapasien'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nmapasien = Datapasien::all();
        return view('pages.create.bersalin', compact('nmapasien'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tanggal = Carbon::now();
        $dp = $request->all();
        $dp['tgl_periksa'] = $tanggal->toDateString();
        Bersalin::create($dp);
        return redirect()->route('pasien-bersalin.index')->with('success', 'Data berhasil disimpan !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bersalin  $Bersalin
     * @return \Illuminate\Http\Response
     */
    public function show(Bersalin $Bersalin)
    {
      //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bersalin  $Bersalin
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $nmapasien = Datapasien::all();
        $row = Bersalin::with('dataPasien')->findOrfail($id);
        return view('pages.edit.bersalin', compact('nmapasien', 'row'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bersalin  $Bersalin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tanggal = Carbon::now();
        
        $ps = $request->all();
        $ps['tgl_periksa'] = $tanggal->toDateString();
        $row = Bersalin::findOrFail($id);
        $row->update($ps);
        return redirect()->route('pasien-bersalin.index')->with('success', 'Data berhasil diperbarui !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bersalin  $Bersalin
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Bersalin::findOrFail($id);
        $item->delete();
        return redirect()->route('pasien-bersalin.index')->with('success', 'Data berhasil dihapus !');
    }
}
