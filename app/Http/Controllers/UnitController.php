<?php

namespace App\Http\Controllers;

use App\Models\Bloks;
use App\Models\Types;
use App\Models\Units;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->Units = new Units();
    }

    public function index()
    {
        //
        $unit = Units::all();
        return view('rumah.index', ['unit' => $unit]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $blok = Bloks::all();
        $tipe = Types::all();
        return view('rumah.tambah', compact('blok', 'tipe'));
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
        $file = $request->file('gambar');
        $nama_file = $file->getClientOriginalName();
        $file->move(public_path() . '/gambar', $nama_file);
        // if ($request->file('gambar')) {
        //     $gambar = $request->file('gambar')->store('gambar', 'public');
        // } else {
        //     $gambar = null;
        // }
        $input = Units::create([
            'nomor_rumah' => $request->unit,
            'blok' => $request->blok,
            'tipe' => $request->tipe,
            'harga' => $request->harga,
            'gambar' => $nama_file,
            'status' => $request->status,
        ]);

        if (!is_null($input)) {

            return Redirect('/Unit/index')->with("success", "Tambah Data Berhasil.");
        } else {
            return Redirect('/Unit/index')->with("failed", "Tambah Data Gagal.");
        }
        // return Redirect('/Unit/index');
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
        // $detail = Units::where('nomor_rumah', $id)->get();
        $detail = [
            'detail' => $this->Units->getDataByJoin($id),
        ];
        return view('rumah.detail', $detail);
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
        $blok = Bloks::all();
        $tipe = Types::all();
        $edit = Units::where('nomor_rumah', $id)->get();
        return view('rumah.edit', compact('edit', 'blok', 'tipe'));
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
        $file = $request->file('gambar');
        $nama_file = $file->getClientOriginalName();
        $file->move(public_path() . '/gambar', $nama_file);
        $unit = Units::find($id);
        if ($unit->gambar != ''  && $unit->gambar != null) {
            unlink("gambar/" . $unit->gambar);
        }
        // $path = public_path() . '/gambar/';
        //code for remove old file
        //upload new file
        //for update in table
        // $unit->update(['file' => $filename]);

        Units::where('nomor_rumah', $id)
            ->update([
                'nomor_rumah' => $request->unit,
                'blok' => $request->blok,
                'tipe' => $request->tipe,
                'harga' => $request->harga,
                'gambar' => $nama_file
            ]);
        return Redirect('/Unit/index')->with('edit', 'Ubah Data Berhasil');
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
        $image = Units::find($id);

        unlink("gambar/" . $image->gambar);

        Units::where("nomor_rumah", $id)->delete();
        // $data = Units::find($id);
        // $data->delete();
        return Redirect('/Unit/index')->with("success", "Hapus Data Berhasil.");
    }
}
