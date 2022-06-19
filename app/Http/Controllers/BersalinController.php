<?php

namespace App\Http\Controllers;

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
        $psnbersalin = Bersalin::with(['DataPasien'])->get();
        return view('pages.pasien.bersalin', compact('psnbersalin', 'nmapasien'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bersalin  $bersalin
     * @return \Illuminate\Http\Response
     */
    public function show(Bersalin $bersalin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bersalin  $bersalin
     * @return \Illuminate\Http\Response
     */
    public function edit(Bersalin $bersalin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bersalin  $bersalin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bersalin $bersalin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bersalin  $bersalin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bersalin $bersalin)
    {
        //
    }
}
