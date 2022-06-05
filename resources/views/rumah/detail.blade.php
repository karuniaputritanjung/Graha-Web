@extends('layouts.app')

@section('title', 'Detail Unit')

@section('content')
    <div class="content mt-3">
        <div class="col-xl">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm">
                            <h4 class="card-title mb-0">Detail Unit</h4> </br>
                            <table class="table">
                                <tbody>
                                    @foreach ($detail as $data)
                                        <tr>
                                            <th scope="col">Nomor Rumah</th>
                                            <td>{{$data->nomor_rumah}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Blok</th>
                                            <td>{{$data->blok}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Jalan</th>
                                            <td>{{$data->jalan}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Tipe</th>
                                            <td>{{$data->nama_tipe}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Luas Tanah</th>
                                            <td>{{$data->luas_tanah}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Luas Bangunan</th>
                                            <td>{{$data->luas_rumah}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Jumlah Lantai</th>
                                            <td>{{$data->jml_lantai}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Jumlah Kamar</th>
                                            <td>{{$data->jml_kamar}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Harga</th>
                                            <td>Rp {{ number_format($data->harga) }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Status</th>
                                            <td>{{ $data->status }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Gambar</th>
                                            <td><img style="width: 200px" src="{{asset('gambar/'. $data->gambar)}}"></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- .content -->
@endsection
