<?php

namespace App\Http\Controllers;

use App\Models\Bloks;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class BlokController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $blok = Bloks::all();
        return view('blok.index', ['blok' => $blok]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('blok.tambah');
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
        // $blok = new Bloks();
        // $blok->nama_blok = $request->blok;
        // $blok->jalan = $request->jalan;
        // $blok->keterangan_lokasi = $request->lokasi;

        // $blok->save();

        // Bloks::create($request->all());
        Bloks::create([
            'nama_blok' => $request->blok,
            'jalan' => $request->jalan,
            'keterangan_lokasi' => $request->lokasi
        ]);
        return Redirect('/Blok/index');
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
        $detail = Bloks::where('nama_blok', $id)->get();
        return view('blok.detail', ['detail' => $detail]);
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
        $get = Bloks::where('nama_blok', $id)->get();
        return view('blok.edit', ['edit' => $get]);
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
        Bloks::where('nama_blok', $id)
            ->update([
                'nama_blok' => $request->blok,
                'jalan' => $request->jalan,
                'keterangan_lokasi' => $request->lokasi
            ]);
        return Redirect('/Blok/index');
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
        Bloks::find($id)->delete();

        return Redirect('/Blok/index');
    }
}
