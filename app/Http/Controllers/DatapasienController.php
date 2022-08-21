<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Datapasien;
use Illuminate\Http\Request;

class DatapasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $psn = Datapasien::all();
        return view('pages.dtpasien.index', compact('psn'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.dtpasien.create');
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
        $dp['kode_pasien'] = GenerateNomorPasien($tanggal->toDateString(), $request->nama);
        // dd($dp);
        Datapasien::create($dp);
        return redirect()->route('data-pasien.index')->with('success', 'Data berhasil disimpan !');
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
        $item = Datapasien::findOrfail($id);
        return view('pages.dtpasien.edit', compact('item'));
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
        $ps['kode_pasien'] = GenerateNomorPasien($tanggal->toDateString(), $request->nama);
        $item = Datapasien::findOrFail($id);
        $item->update($ps);
        return redirect()->route('data-pasien.index')->with('success', 'Data berhasil diperbarui !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Datapasien::findOrFail($id);
        $item->delete();
        return redirect()->route('data-pasien.index')->with('success', 'Data berhasil dihapus !');

    }
}
