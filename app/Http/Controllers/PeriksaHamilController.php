<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Hamil;
use App\Models\PeriksaaHamil;
use Illuminate\Http\Request;

class PeriksaHamilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $time = Carbon::now()->format('Y-m-d');


        $nmapasien = Hamil::all();
        $psnhamil = PeriksaaHamil::with(['hamil'])->get();
        return view('pages.pasien.periksa-hamil', compact('psnhamil', 'nmapasien'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nmapasien = Hamil::with('dtpasien')->get();
        return view('pages.create.periksahamil', compact('nmapasien'));
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
        PeriksaaHamil::create($dp);
        return redirect()->route('periksa-pasien-hamil.index')->with('success', 'Data berhasil disimpan !');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $update = PeriksaaHamil::findOrfail($id);
        $nmapasien = PeriksaaHamil::with(['hamil'])->get();
        return view('pages.edit.periksa-hamil', compact('nmapasien', 'update'));
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
        $tanggal = Carbon::now();
        $ps = $request->all();
        $ps['tgl_periksa'] = $tanggal->toDateString();
        $item = PeriksaaHamil::findOrFail($id);
        $item->update($ps);
        return redirect()->route('periksa-pasien-hamil.index')->with('success', 'Data berhasil diperbarui !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $item = PeriksaaHamil::findOrFail($id);
        $item->delete();
        return redirect()->route('periksa-pasien-hamil.index')->with('success', 'Data berhasil dihapus !');

    }
}
