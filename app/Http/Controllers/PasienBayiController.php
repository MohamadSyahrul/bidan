<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Datapasien;
use App\Models\PasienBayi;
use Illuminate\Http\Request;

class PasienBayiController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nmapasien = Datapasien::all();
        $psnbayi = PasienBayi::with(['dataPasien'])->get();
        // dd($psnbayi);
        return view('pages.pasien.bayi', compact('psnbayi','nmapasien'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nmapasien = Datapasien::all();
        return view('pages.create.bayi', compact('nmapasien'));
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
        PasienBayi::create($dp);
        return redirect()->route('pasien-bayi.index')->with('success', 'Data berhasil disimpan !');
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
        $row = PasienBayi::with('dataPasien')->findOrfail($id);
        // dd($row);
        return view('pages.edit.bayi', compact('row', 'nmapasien'));
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
        $item = PasienBayi::findOrFail($id);
        $item->update($ps);
        return redirect()->route('pasien-bayi.index')->with('success', 'Data berhasil diperbarui !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = PasienBayi::findOrFail($id);
        $item->delete();
        return redirect()->route('pasien-bayi.index')->with('success', 'Data berhasil dihapus !');

    }
}
