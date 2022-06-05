@extends('layouts.app')

@section('title', 'Market')

@section('content')
    <div class="content mt-3">
        <div class="col-xl">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm">
                            @if(session('success'))
                                <div class="alert alert-success alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>{{ session('success') }}
                                </div>
                            @elseif(session('failed'))
                                <div class="alert alert-danger alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>{{ session('failed') }}
                                </div>
                            @endif
                            <h4 class="card-title mb-0 text-center">Market</h4> </br>
                            <div class="row" style="margin-top: 50px;">
                                @foreach ($products as $produk)
                                <div class="card ml-5" style="width: 12rem;">
                                    <img src="{{asset('gambar/'. $produk->gambar)}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $produk->nomor_rumah }}</h5>
                                        <p class="card-text">Blok {{ $produk->blok }}, Tipe : {{ $produk->nama_tipe }}, Lokasi : {{ $produk->keterangan_lokasi }}</p>
                                        <p class="card-text text-muted">Rp {{ number_format($produk->harga) }}</p>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <form method="POST" action="/Market/Add/{{$produk->nomor_rumah}}">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{ $produk->nomor_rumah }}">
                                                    <input type="hidden" name="harga" value="{{ $produk->harga }}">
                                                    {{-- <a href="/Market/Add/{{$produk->nomor_rumah}}" class="btn btn-primary btn-block">Add To Cart</a> --}}
                                                    {{-- @if (Cart::content()->get('name') === $produk->nomor_rumah)
                                                        <button type="submit" class="btn btn-primary btn-block" disabled>Add To Cart</button>
                                                    @else
                                                        <button type="submit" class="btn btn-primary btn-block">Add To Cart</button>
                                                    @endif --}}
                                                    <button type="submit" class="btn btn-primary btn-block"><i class="ti-shopping-cart"></i></button>
                                                </form>
                                            </div>
                                            <div class="col-md-6">
                                                <form method="POST" action="/Market/Wish/{{$produk->nomor_rumah}}">
                                                    @csrf
                                                    <input type="hidden" name="idwish" value="{{ $produk->nomor_rumah }}">
                                                    <input type="hidden" name="hargawish" value="{{ $produk->harga }}">

                                                    <button type="submit" class="btn btn-primary btn-block"><i class="ti-heart"></i></button>
                                                </form>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- .content -->
@endsection
