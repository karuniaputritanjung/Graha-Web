@extends('layouts.app')

@section('title', 'Tambah Unit')

@section('content')
    <div class="content mt-3">
        <div class="col-xl">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm">
                            <h4 class="card-title mb-0">Tambah Data</h4> </br>
                            <form method="POST" action="/Unit/Upload" enctype="multipart/form-data">
                                @csrf

                                <table class="table">
                                    <tbody>
                                            <tr>
                                                <th scope="col">Nomor Unit</th>
                                                <td><input type="text" name="unit" class="form-control"></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Blok</th>
                                                <td>
                                                    <select name="blok" class="form-control">
                                                        <option value="">-Pilih Blok-</option>
                                                        @foreach ($blok as $list)
                                                            <option value="{{$list->nama_blok}}">{{$list->nama_blok}}</option>
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
                                                            <option value="{{$list1->id_tipe}}">{{$list1->nama_tipe}}</option>
                                                        @endforeach
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Harga</th>
                                                <td><input type="text" name="harga" class="form-control"></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Gambar</th>
                                                <td><input type="file" name="gambar" class="form-control"></td>
                                            </tr>
                                            <input type="hidden" name="status" value="Tersedia">
                                            <tr>
                                                <th scope="col"></th>
                                                <td><button type="submit" class="btn btn-primary">Upload</button></td>
                                            </tr>
                                    </tbody>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- .content -->
@endsection
