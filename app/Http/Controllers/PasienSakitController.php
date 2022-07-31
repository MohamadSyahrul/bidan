<?php

namespace App\Http\Controllers;

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
        //
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
        PasienSakit::create($dp);
        return redirect()->route('pasien-sakit.index');
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
        //
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
        $item = PasienSakit::findOrFail($id);
        $item->update($ps);
        return redirect()->route('pasien-sakit.index');
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
        return redirect()->route('pasien-sakit.index');

    }
}
