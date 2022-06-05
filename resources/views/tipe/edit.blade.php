@extends('layouts.app')

@section('title', 'Edit Tipe')

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
                                        <form method="POST" action="/Type/Update/{{$data->id_tipe}}">
                                            @method('patch')
                                            @csrf
                                            <tr>
                                                <th scope="col">Nomor Tipe</th>
                                                <td><input type="number" name="id" value="{{$data->id_tipe}}" class="form-control" readonly></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Nama Tipe</th>
                                                <td><input type="text" name="tipe" value="{{$data->nama_tipe}}" class="form-control"></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Luas Tanah</th>
                                                <td><input type="number" name="tanah" value="{{$data->luas_tanah}}" class="form-control"></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Luas Rumah</th>
                                                <td><input type="number" name="bangunan" value="{{$data->luas_rumah}}" class="form-control"></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Jumlah Lantai</th>
                                                <td><input type="number" name="lantai" value="{{$data->jml_lantai}}" class="form-control"></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Jumlah Kamar</th>
                                                <td><input type="number" name="kamar" value="{{$data->jml_kamar}}" class="form-control"></td>
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
