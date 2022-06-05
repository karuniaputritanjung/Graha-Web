<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Units;

class ApiUnit extends Controller
{
    //
    public function index()
    {
        // return ["data" => "Berhasil Ditemukan"];
        $unit = Units::all();
        return view('rumah.index', ['unit' => $unit]);
        // return response()->json([
        //     'status' => true,
        //     'message' => "Pengambilan Indeks Data Berhasil",
        //     'Data' => $blok,
        // ], 200);
    }


    public function add(Request $request)
    {
        $file = $request->file('gambar');
        $nama_file = $file->getClientOriginalName();
        $file->move(public_path() . '/gambar', $nama_file);
        // $path = $file->store('public/gambar');
        $unit = new Units();
        $unit->nomor_rumah = $request->unit;
        $unit->blok = $request->blok;
        $unit->tipe = $request->tipe;
        $unit->harga = $request->harga;
        $unit->gambar = $nama_file;
        $unit->status = $request->status;
        $unit->save();
        return Redirect('/api/unit');
        // return ["data" => "Berhasil Ditemukan"];
    }

    public function show($id)
    {
        $this->Units = new Units();
        $detail = [
            'detail' => $this->Units->getDataByJoin($id),
        ];
        return view('rumah.detail', $detail);

        // return response()->json([
        //     'status' => true,
        //     'message' => "Detail Data Blok",
        //     'Data' => $blok,
        // ], 200);
        // return view('blok.detail', ['detail' => $blok]);
    }

    public function edit(Request $request)
    {


        // if ($unit->gambar != ''  || $unit->gambar != null) {
        //     unlink("gambar/" . $unit->gambar);
        // }

        $file = $request->file('gambar');
        $nama_file = $file->getClientOriginalName();
        $file->move(public_path() . '/gambar', $nama_file);
        $unit = Units::find($request->unit);
        if ($unit->gambar != '') {
            unlink("gambar/" . $unit->gambar);
        }
        $unit->blok = $request->blok;
        $unit->tipe = $request->tipe;
        $unit->harga = $request->harga;
        $unit->gambar = $nama_file;
        $unit->save();





        // $unit->nomor_rumah = $request->unit;
        // $unit->blok = $request->blok;
        // $unit->tipe = $request->tipe;
        // $unit->harga = $request->harga;
        // $unit->gambar = $nama_file;
        // $unit->save();
        return Redirect('/api/unit');
    }

    public function delete($id)
    {
        $unit = Units::find($id);
        unlink("gambar/" . $unit->gambar);
        $unit->delete();
        return Redirect('/api/unit');
    }
}
