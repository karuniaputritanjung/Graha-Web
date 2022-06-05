@extends('layouts.app')

@section('title', 'Detail Tipe')

@section('content')
    <div class="content mt-3">
        <div class="col-xl">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm">
                            <h4 class="card-title mb-0">Detail Tipe Rumah</h4> </br>
                            <table class="table">
                                <tbody>
                                    @foreach ($detail as $data)
                                        <tr>
                                            <th scope="col">Nomor Tipe</th>
                                            <td>{{$data->id_tipe}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Nama Tipe</th>
                                            <td>{{$data->nama_tipe}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Luas Tanah</th>
                                            <td>{{$data->luas_tanah}} Km<sup>2</sup></td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Luas Bangunan</th>
                                            <td>{{$data->luas_rumah}} Km<sup>2</sup></td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Jumlah Lantai</th>
                                            <td>{{$data->jml_lantai}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Jumlah Kamar</th>
                                            <td>{{$data->jml_kamar}}</td>
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
