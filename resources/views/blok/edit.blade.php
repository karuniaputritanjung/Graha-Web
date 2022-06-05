@extends('layouts.app')

@section('title', 'Edit Blok')

@section('content')
    <div class="content mt-3">
        <div class="col-xl">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm">
                            <h4 class="card-title mb-0">Edit Data</h4> </br>
                                <table class="table">
                                    <tbody>
                                        @foreach ($edit as $data)
                                        <form method="POST" action="/Blok/Update/{{$data->nama_blok}}">
                                            @method('patch')
                                            @csrf
                                            <tr>
                                                <th scope="col">Nama Blok</th>
                                                <td><input type="text" name="blok" value="{{$data->nama_blok}}" class="form-control" readonly></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Jalan</th>
                                                <td><input type="textarea" name="jalan" value="{{$data->jalan}}" class="form-control"></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Keterangan Lokasi</th>
                                                <td><input type="textarea" name="lokasi" value="{{$data->keterangan_lokasi}}" class="form-control"></td>
                                            </tr>
                                            <tr>
                                                <th scope="col"></th>
                                                <td><button type="submit" class="btn btn-primary">Update</button></td>
                                            </tr>
                                            <form>
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
