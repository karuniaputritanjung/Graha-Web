<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notaris;
use App\Models\Transaksi;
use App\Models\Units;
use App\Mail\BuktiCheckout;
use Illuminate\Support\Facades\Mail;
use Gloudemans\Shoppingcart\Facades\Cart as FacadesCart;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $notaris =  Notaris::all();
        $pilihan =  $request->pilih;
        return view('shop.checkout', ['pilih' => $pilihan, 'notaris' => $notaris]);
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
        //
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
    }

    public function submit(Request $request, $id)
    {
        $harga = $request->bayar;
        // dd($harga);
        $diskon = $request->diskon;
        // if ($discount == "HUT") {
        //     $diskon = 25;
        // } elseif ($discount == "NewYear") {
        //     $diskon = 15;
        // } elseif ($discount == "-") {
        //     $diskon = 0;
        // }
        $notaris = Notaris::all();
        $total = $harga - ($harga * ($diskon / 100));
        $imel = $request->email;
        $data = [
            'id_transaksi' => date('dmYHis'),
            'nama' => $request->nama,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'provinsi' => $request->provinsi,
            'kota' => $request->kabupaten,
            'kecamatan' => $request->kecamatan,
            'desa' => $request->desa,
            'kodepos' => $request->kode,
            'nohp' => $request->hp,
            'metode_pembayaran' => $request->metode,
            'biaya' => $total,
            'nomor_rumah' => $request->norumah,
            'notaris' => $request->notaris,
            'tgl_pembelian' => date('d-m-Y'),
        ];
        Transaksi::create([
            'id_transaksi' => date('dmYHis'),
            'nama' => $request->nama,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'provinsi' => $request->provinsi,
            'kota' => $request->kabupaten,
            'kecamatan' => $request->kecamatan,
            'desa' => $request->desa,
            'kodepos' => $request->kode,
            'nohp' => $request->hp,
            'metode_pembayaran' => $request->metode,
            'biaya' => $total,
            'nomor_rumah' => $request->norumah,
            'notaris' => $request->notaris,
            'tgl_pembelian' => date('d-m-Y'),
        ]);

        Units::where('nomor_rumah', $request->norumah)
            ->update([
                'status' => 'Sold Out',
            ]);

        Mail::to($imel)->send(new BuktiCheckout($data, $notaris));
        FacadesCart::instance('shopping')->remove($id);
        return view('dashboard');
    }
}
