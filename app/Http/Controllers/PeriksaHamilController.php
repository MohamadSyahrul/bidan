<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Hamil;
use App\Models\Datapasien;
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


        $nmapasien = Datapasien::all();
        $psnhamil = Hamil::with(['dtpasien'])->get();
        // foreach ($psnhamil as $row) {
        //     $date1 = date_create($row->tgl_bulan_terakhir);
        //     $date2 = Carbon::now()->format('Y-m-d');
        //     $date3 = date_create($date2);

        //     $diff = date_diff($date1, $date3);
        //     $months = $diff->format("%m months");
        //     $days = $diff->format("%d days");
        //     $result = $months.' '.$days;
        //     // dd($result);
        // }
        return view('pages.pasien.periksa-hamil', compact('psnhamil', 'nmapasien'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nmapasien = Datapasien::all();
        return view('pages.create.periksa-hamil', compact('nmapasien'));
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
        $row = Hamil::findOrfail($id);
        $nmapasien = Datapasien::all();
        return view('pages.edit.periksa-hamil', compact('nmapasien', 'row'));
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
        $item = Hamil::findOrFail($id);
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
        //
    }
}
