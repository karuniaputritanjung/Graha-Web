@extends('layouts.app')

@section('title', 'Form Checkout')

@section('content')
    <div class="content mt-3">
        <div class="col-xl">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title mb-0">Checkout</h3>
                    <hr />
                    @foreach (Cart::instance('shopping')->content() as $item)
                    @if ($item->id === $pilih)
                    <div class="row mt-5">
                        <div class="col-md-6">
                            <h4 class="card-title mb-0">Detail Tagihan</h4> </br>
                            <form method="POST" action="/Market/PushCheckout/{{ $item->rowId }}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Nama</label>
                                    <input type="text" name="nama" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="name">Alamat</label>
                                    <input type="text" name="alamat" class="form-control">
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Provinsi</label>
                                            <input type="text" name="provinsi" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Kabupaten/Kota</label>
                                            <input type="text" name="kabupaten" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Kecamatan</label>
                                            <input type="text" name="kecamatan" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Desa</label>
                                            <input type="text" name="desa" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Kode Pos</label>
                                            <input type="text" name="kode" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Telepon/Hp</label>
                                            <input type="number" name="hp" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <h4 class="card-title mb-0 mt-3">Detail Pembayaran</h4> </br>
                                <div class="form-group">
                                    <label for="name">Metode Pembayaran</label>
                                    <select name="metode" class="form-control" id="">
                                        <option value="">-- Pilih Metode Pembayaran --</option>
                                        <option value="Cash">Cash</option>
                                        <option value="Transfer">Transfer</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="name">Nama Notaris</label>
                                    <select name="notaris" class="form-control" id="">
                                        <option value="">-- Pilih Notaris --</option>
                                        @foreach ($notaris as $not)
                                            <option value="{{$not->id_notaris}}">{{$not->nama_notaris}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="name">Discount/Promo</label>
                                    <select name="diskon" class="form-control" id="">
                                        <option value="">-- Pilih Promo --</option>
                                        <option value="25">Hari Kemerdekaan (25%)</option>
                                        <option value="15">Tahun Baru (15%)</option>
                                        <option value="0">Tidak Ada</option>
                                    </select>
                                </div>
                                <input type="hidden" name="bayar" value="{{ $item->model->harga }}">
                                <input type="hidden" name="norumah" value="{{ $item->model->nomor_rumah }}">
                                <button type="submit" class="btn btn-primary btn-block">Konfirmasi</button>
                            </form>
                        </div>
                        <div class="col-md-6">
                            <h4 class="card-title mb-0">Detail Barang</h4> </br>
                            <hr />
                            <div class="row">
                                {{-- @foreach (Cart::instance('shopping')->content() as $item)
                                @if ($item->id === $pilih) --}}
                                    <div class="col-md-4">
                                        <img src="{{asset('gambar/'. $item->model->gambar)}}" alt="">
                                    </div>
                                    <div class="col-md-4">
                                        <table>
                                            <tr>
                                                <td>Keterangan :</td>
                                            </tr>
                                            <tr>
                                                <td>{{ $item->model->nomor_rumah }}</td>
                                                {{-- <td>Blok : {{ $item->model->blok }}</td>
                                                <td>Rp {{ number_format($item->model->harga) }}</td> --}}
                                            </tr>
                                            <tr>
                                                <td>Blok : {{ $item->model->blok }}</td>
                                            </tr>
                                            <tr>
                                                <td>Rp {{ number_format($item->model->harga) }}</td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="col-md-4">
                                        <table>
                                            <tr>
                                                <td>
                                                    <button class="btn btn-outline-dark" style="background-color: white; width: 100px; height: 100px;" disabled>Qty : {{ $item->qty }}</button>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                            </div>
                            <hr />
                            <div class="row">
                                <div class="col-md-4 text-start">
                                    Subtotal
                                </div>
                                <div class="col-md-4"></div>
                                <div class="col-md-4">
                                    Rp {{ Cart::instance('shopping')->subtotal() }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 text-start" style="font-weight: bold">
                                    Total
                                </div>
                                <div class="col-md-4"></div>
                                <div class="col-md-4">
                                    Rp {{ Cart::instance('shopping')->total() }}
                                </div>
                            </div>
                        </div>
                    </div>
                    @else
                        Anda Belum Memilih Unit, Sebelum Checkout Silahkan <a style="color: #0275d8" href="{{'/Market/index'}}">Checklist Unit</a> di Keranjang
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div> <!-- .content -->
@endsection
