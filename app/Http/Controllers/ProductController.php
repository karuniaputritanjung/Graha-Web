<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Units;
use Gloudemans\Shoppingcart\Facades\Cart as FacadesCart;

class ProductController extends Controller
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
        $detail = [
            'products' => $this->Units->getDataJoin(),
        ];
        return view('shop.index', $detail);
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
        $duplicates = FacadesCart::instance('shopping')->search(function ($cartItem, $rowId) use ($request) {
            return $cartItem->id === $request->id;
        });

        if ($duplicates->isNotEmpty()) {
            return redirect('/Market/index')->with('failed', 'Unit Sudah Dalam Keranjang');
        }

        FacadesCart::instance('shopping')->add($request->id, $request->id, 1, $request->harga)
            ->associate('App\Models\Units');

        return redirect('/Market/index')->with('success', 'Berhasil Menambahkan ke Keranjang');
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
        FacadesCart::instance('shopping')->remove($id);

        return redirect('/Market/index')->with('failed', 'Item Berhasil Dihapus');
    }

    public function Wish(Request $request1)
    {
        //
        $duplicates1 = FacadesCart::instance('Wish')->search(function ($cartItem1, $rowId) use ($request1) {
            return $cartItem1->id === $request1->idwish;
        });

        if ($duplicates1->isNotEmpty()) {
            return redirect('/Market/index')->with('failed', 'Unit Sudah Dalam Wishlist');
        }

        FacadesCart::instance('Wish')->add($request1->idwish, $request1->idwish, 1, $request1->hargawish)
            ->associate('App\Models\Units');

        return redirect('/Market/index')->with('success', 'Berhasil Menambahkan ke Wishlist');
    }

    public function hapus($id)
    {
        //
        FacadesCart::instance('Wish')->remove($id);

        return redirect('/Market/index')->with('failed', 'Item Berhasil Dihapus');
    }

    public function move($id)
    {
        $item = FacadesCart::instance('Wish')->get($id);

        $duplicates2 = FacadesCart::instance('shopping')->search(function ($cartItem2, $rowId) use ($item) {
            return $cartItem2->id === $item->id;
        });

        if ($duplicates2->isNotEmpty()) {
            return redirect('/Market/index')->with('failed', 'Unit Sudah Dalam Keranjang');
        }
        FacadesCart::instance('Wish')->remove($id);

        FacadesCart::instance('shopping')->add($item->id, $item->name, 1, $item->price)
            ->associate('App\Models\Units');

        return redirect('/Market/index')->with('success', 'Berhasil Dipindahkan ke Keranjang');
    }
}
