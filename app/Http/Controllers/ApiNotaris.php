<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notaris;

class ApiNotaris extends Controller
{
    //
    public function index()
    {
        // return ["data" => "Berhasil Ditemukan"];
        $notaris = Notaris::all();
        return view('notaris.index', ['notaris' => $notaris]);
        // return response()->json([
        //     'status' => true,
        //     'message' => "Pengambilan Indeks Data Berhasil",
        //     'Data' => $blok,
        // ], 200);
    }


    public function add(Request $request)
    {
        $notaris = new Notaris();
        $notaris->id_notaris = $request->id;
        $notaris->nama_notaris = $request->nama;
        $notaris->save();
        return Redirect('/api/notaris');
        // return ["data" => "Berhasil Ditemukan"];
    }

    public function show($id)
    {
        // $detail = Types::where('id_tipe', $id)->get();
        // return view('tipe.detail', ['detail' => $detail]);

        // return response()->json([
        //     'status' => true,
        //     'message' => "Detail Data Blok",
        //     'Data' => $blok,
        // ], 200);
        // return view('blok.detail', ['detail' => $blok]);
    }

    public function edit(Request $request)
    {
        $notaris = Notaris::find($request->id);

        $notaris->nama_notaris = $request->nama;
        $notaris->save();
        return Redirect('/api/notaris');
    }

    public function delete($id)
    {
        $notaris = Notaris::find($id);
        $notaris->delete();
        return Redirect('/api/notaris');
    }
}
