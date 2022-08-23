<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Datapasien;
use App\Models\PasienSakit;
use Illuminate\Http\Request;

class PasienSakitController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $psnsakit = PasienSakit::with(['data_pasien'])->get();
        // dd($psnsakit->keluhan);
        $nmapasien = Datapasien::all();
        return view('pages.pasien.sakit', compact('psnsakit','nmapasien'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
                $nmapasien = Datapasien::all();
        return view('pages.create.sakit', compact('nmapasien'));
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
        PasienSakit::create($dp);
        return redirect()->route('pasien-sakit.index')->with('success', 'Data berhasil disimpan !');
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
        $item = PasienSakit::findOrfail($id);
        // dd($item);
        return view('pages.edit.sakit', compact('nmapasien', 'item'));
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
        $dp['tgl_periksa'] = $tanggal->toDateString();
        $item = PasienSakit::findOrFail($id);
        $item->update($ps);
        return redirect()->route('pasien-sakit.index')->with('success', 'Data berhasil diperbarui !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = PasienSakit::findOrFail($id);
        $item->delete();
        return redirect()->route('pasien-sakit.index')->with('success', 'Data berhasil dihapus !');

    }
}
