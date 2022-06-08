<?php

namespace App\Http\Controllers;

use App\Models\PasienKB;
use App\Models\Datapasien;
use Illuminate\Http\Request;

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
        PasienKB::create($dp);
        return redirect()->route('pasien-kb.index');
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
        $item = PasienKB::findOrFail($id);
        $item->update($ps);
        return redirect()->route('pasien-kb.index');
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
        return redirect()->route('pasien-kb.index');

    }
}
