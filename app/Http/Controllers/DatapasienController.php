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
        $dp = $request->all();
        $p = Datapasien::latest()->first();
        
        if($p){
        if ($request->jenis_kelamin === 'P') {
            Datapasien::create([
                'nama' => $request->nama,
                'nik' => $request->nik,
                'kode'=> $request->kode_pasien,
                'alamat' => $request->alamat,
                'jenis_kelamin' => $request->jenis_kelamin,
                'tgl_lahir' =>$request->tgl_lahir,
                'kode_pasien' => 'P.0' . $p->id += 1,
                'status' => true,
                'suami' => $request->suami,
                
            ]);
        }
        if($request->jenis_kelamin === 'L'){
            Datapasien::create([
                'nama' => $request->nama,
                'nik' => $request->nik,
                'kode'=> $request->kode_pasien,
                'alamat' => $request->alamat,
                'jenis_kelamin' => $request->jenis_kelamin,
                'tgl_lahir' =>$request->tgl_lahir,
                'kode_pasien' => 'L.0' . $p->id += 1,
                'status' => true,
                'suami' => $request->suami,
                
                
            ]);
        }
    }
        if($p===null){
            if ($request->jenis_kelamin === 'P') {
                Datapasien::create([
                    'nama' => $request->nama,
                    'nik' => $request->nik,
                    'kode'=> $request->kode_pasien,
                    'alamat' => $request->alamat,
                    'jenis_kelamin' => $request->jenis_kelamin,
                    'tgl_lahir' =>$request->tgl_lahir,
                    'kode_pasien' =>'P.0' . 1,
                    'status' => true,
                    'suami' => $request->suami,
                    
                ]);
            }
            if($request->jenis_kelamin === 'L'){
                Datapasien::create([
                    'nama' => $request->nama,
                    'nik' => $request->nik,
                    'kode'=> $request->kode_pasien,
                    'alamat' => $request->alamat,
                    'jenis_kelamin' => $request->jenis_kelamin,
                    'tgl_lahir' =>$request->tgl_lahir,
                    'kode_pasien' =>'L.0' . 1,
                    'status' => true,
                    'suami' => $request->suami,
                    
        
                ]);
    }
}

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
        $ps = $request->all();
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
    
    public function ubahStatus($id)
    {
        Datapasien::where("id", $id)->update(['status' => 0]);
        return back();
    }
    public function ubahStatusAktif($id)
    {
        Datapasien::where("id", $id)->update(['status' => 1]);
        return back();
    }
}
