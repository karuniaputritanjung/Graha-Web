@extends('layouts.app')

@section('title', 'Edit Unit')

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
                                        <form method="POST" action="/Unit/Update/{{$data->nomor_rumah}}" enctype="multipart/form-data">
                                            @method('patch')
                                            @csrf
                                            <tr>
                                                <th scope="col">Nomor Rumah</th>
                                                <td><input type="text" name="unit" value="{{$data->nomor_rumah}}" class="form-control" readonly></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Blok</th>
                                                <td>
                                                    <select name="blok" class="form-control">
                                                        <option value="">-Pilih Blok-</option>
                                                        @foreach ($blok as $list)
                                                            <option value="{{$list->nama_blok}}"
                                                                @if ($data->blok === $list->nama_blok)
                                                                    selected
                                                                @endif
                                                                >
                                                                {{$list->nama_blok}}</option>
                                                        @endforeach
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Tipe Unit</th>
                                                <td>
                                                    <select name="tipe" class="form-control">
                                                        <option value="">-Pilih Tipe-</option>
                                                        @foreach ($tipe as $list1)
                                                            <option value="{{$list1->id_tipe}}"
                                                                @if ($data->tipe === $list1->id_tipe)
                                                                    selected
                                                                @endif
                                                                >
                                                                {{$list1->nama_tipe}}</option>
                                                        @endforeach
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Harga</th>
                                                <td><input type="text" name="harga" value="{{$data->harga}}" class="form-control"></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Gambar</th>
                                                <td><input type="file" name="gambar" class="form-control"></td>
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
