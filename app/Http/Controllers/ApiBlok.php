<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bloks;
use SebastianBergmann\CodeCoverage\Report\Xml\Unit;

class ApiBlok extends Controller
{
    //
    public function index()
    {
        // return ["data" => "Berhasil Ditemukan"];
        $blok = Bloks::all();
        // $blok = Bloks::all();
        return view('blok.index', ['blok' => $blok]);
        // return response()->json([
        //     'status' => true,
        //     'message' => "Pengambilan Indeks Data Berhasil",
        //     'Data' => $blok,
        // ], 200);
    }


    public function add(Request $request)
    {
        $blok = new Bloks();
        $blok->nama_blok = $request->nama_blok;
        $blok->jalan = $request->jalan;
        $blok->keterangan_lokasi = $request->lokasi;
        $blok->save();
        return Redirect('/api/blok');
        // return ["data" => "Berhasil Ditemukan"];
    }

    public function show($id)
    {
        $blok = Bloks::where('nama_blok', $id)->get();

        // return response()->json([
        //     'status' => true,
        //     'message' => "Detail Data Blok",
        //     'Data' => $blok,
        // ], 200);
        return view('blok.detail', ['detail' => $blok]);
    }

    public function edit(Request $request)
    {
        $blok = Bloks::find($request->nama_blok);

        $blok->jalan = $request->jalan;
        $blok->keterangan_lokasi = $request->lokasi;

        $blok->save();
        return Redirect('/api/blok');
    }

    public function delete($id)
    {
        $blok = Bloks::find($id);
        $blok->delete();
        return Redirect('/api/blok');
    }
}
