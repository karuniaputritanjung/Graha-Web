<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Types;

class ApiType extends Controller
{
    //
    public function index()
    {
        // return ["data" => "Berhasil Ditemukan"];
        $tipe = Types::all();
        return view('tipe.index', ['tipe' => $tipe]);
        // return response()->json([
        //     'status' => true,
        //     'message' => "Pengambilan Indeks Data Berhasil",
        //     'Data' => $blok,
        // ], 200);
    }


    public function add(Request $request)
    {
        $tipe = new Types();
        $tipe->nama_tipe = $request->tipe;
        $tipe->luas_tanah = $request->tanah;
        $tipe->luas_rumah = $request->bangunan;
        $tipe->jml_lantai = $request->lantai;
        $tipe->jml_kamar = $request->kamar;
        $tipe->save();
        return Redirect('/api/tipe');
        // return ["data" => "Berhasil Ditemukan"];
    }

    public function show($id)
    {
        $detail = Types::where('id_tipe', $id)->get();
        return view('tipe.detail', ['detail' => $detail]);

        // return response()->json([
        //     'status' => true,
        //     'message' => "Detail Data Blok",
        //     'Data' => $blok,
        // ], 200);
        // return view('blok.detail', ['detail' => $blok]);
    }

    public function edit(Request $request)
    {
        $tipe = Types::find($request->id_tipe);

        $tipe->nama_tipe = $request->tipe;
        $tipe->luas_tanah = $request->tanah;
        $tipe->luas_rumah = $request->bangunan;
        $tipe->jml_lantai = $request->lantai;
        $tipe->jml_kamar = $request->kamar;
        $tipe->save();
        return Redirect('/api/tipe');
    }

    public function delete($id)
    {
        $tipe = Types::find($id);
        $tipe->delete();
        return Redirect('/api/tipe');
    }
}
