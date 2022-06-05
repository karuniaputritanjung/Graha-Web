@extends('layouts.app')

@section('title', 'Detail Blok')

@section('content')
    <div class="content mt-3">
        <div class="col-xl">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm">
                            <h4 class="card-title mb-0">Detail Blok</h4> </br>
                            <table class="table">
                                <tbody>
                                    @foreach ($detail as $data)
                                        <tr>
                                            <th scope="col">Nama Blok</th>
                                            <td>{{$data->nama_blok}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Jalan</th>
                                            <td>{{$data->jalan}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Keterangan Lokasi</th>
                                            <td>{{$data->keterangan_lokasi}}</td>
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
