<?php

namespace App\Http\Controllers;

use App\Models\Types;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tipe = Types::all();
        return view('tipe.index', ['tipe' => $tipe]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('tipe.tambah');
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
        Types::create([
            'nama_tipe' => $request->tipe,
            'luas_tanah' => $request->tanah,
            'luas_rumah' => $request->bangunan,
            'jml_lantai' => $request->lantai,
            'jml_kamar' => $request->kamar
        ]);
        return Redirect('/Type/index');
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
        $detail = Types::where('id_tipe', $id)->get();
        return view('tipe.detail', ['detail' => $detail]);
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
        $get = Types::where('id_tipe', $id)->get();
        return view('tipe.edit', ['edit' => $get]);
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
        //
        Types::where('id_tipe', $id)
            ->update([
                'nama_tipe' => $request->tipe,
                'luas_tanah' => $request->tanah,
                'luas_rumah' => $request->bangunan,
                'jml_lantai' => $request->lantai,
                'jml_kamar' => $request->kamar
            ]);
        return Redirect('/Type/index');
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
        Types::find($id)->delete();

        return Redirect('/Type/index');
    }
}
