<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prodi;
class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prodis = Prodi::get();
        return view('prodi.index',['prodis'=>$prodis]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('prodi.addProdi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $prodis = new Prodi;
        $prodis->prodi = $request->prodi;
        $prodis->save();
        $prodis = Prodi::get();
        return view('prodi.index',['prodis'=>$prodis]);
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
        $prodiedit =  Prodi::find($id);

        return view('prodi.editProdi',['prodiedit'=>$prodiedit]);
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
        $prodiedit = Prodi::find($id);
        $prodiedit->prodi = $request->prodi;
        $prodiedit->save();
        $prodis = Prodi::get();
        return view('prodi.index',['prodis'=>$prodis]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Prodi::find($id)->delete();
        $prodis = Prodi::get();
        return view('prodi.index',['prodis'=>$prodis]);
    }
}
