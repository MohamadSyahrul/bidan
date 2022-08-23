<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Hamil;
use App\Models\Datapasien;
use Illuminate\Http\Request;

class HamilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nmapasien = Datapasien::all();
        $psnhamil = Hamil::with(['dtpasien'])->get();
        return view('pages.pasien.hamil', compact('psnhamil', 'nmapasien'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nmapasien = Datapasien::all();
        return view('pages.create.hamil', compact('nmapasien'));
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
        Hamil::create($dp);
        return redirect()->route('pasien-hamil.index')->with('success', 'Data berhasil disimpan !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hamil  $hamil
     * @return \Illuminate\Http\Response
     */
    public function show(Hamil $hamil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hamil  $hamil
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row = Hamil::findOrfail($id);
        $nmapasien = Datapasien::all();
        return view('pages.edit.hamil', compact('nmapasien', 'row'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hamil  $hamil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tanggal = Carbon::now();
        $ps = $request->all();
        $ps['tgl_periksa'] = $tanggal->toDateString();
        $item = Hamil::findOrFail($id);
        $item->update($ps);
        return redirect()->route('pasien-hamil.index')->with('success', 'Data berhasil diperbarui !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hamil  $hamil
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Hamil::findOrFail($id);
        $item->delete();
        return redirect()->route('pasien-hamil.index')->with('success', 'Data berhasil dihapus !');
    }
}
