<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;
use App\Prodi;
class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahas = Mahasiswa::get();
        // return view('mahasiswa.index',compact('mahas'));
        // return view('mahasiswa.index')->with('mahas',$mahas);
        return view('mahasiswa.index',['mahas'=>$mahas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $prodis = Prodi::all();
        return view('mahasiswa.addMaha',['prodis'=>$prodis]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

     $mahas = new Mahasiswa;
     $mahas->nim = $request->nim;
     $mahas->nama = $request->nama;
     $mahas->alamat = $request->alamat;
     $mahas->prodis_id = $request->prodi;
     $mahas->save();
     $mahas = Mahasiswa::get();
     return view('mahasiswa.index',['mahas'=>$mahas]);

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
        $mahaedit =  Mahasiswa::find($id);

        return view('mahasiswa.editMaha',['mahaedit'=>$mahaedit]);
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
        $mahaedit = Mahasiswa::find($id);
        $mahaedit->nim = $request->nim;
        $mahaedit->nama = $request->nama;
        $mahaedit->alamat = $request->alamat;
        $mahaedit->prodis_id = $request->prodi;
        $mahaedit->save();
        $mahas = Mahasiswa::get();
        return view('mahasiswa.index',['mahas'=>$mahas]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Mahasiswa::find($id)->delete();
        $mahas = Mahasiswa::get();
        return view('mahasiswa.index',['mahas'=>$mahas]);
    }

}
