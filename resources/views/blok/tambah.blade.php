@extends('layouts.app')

@section('title', 'Tambah Blok')

@section('content')
    <div class="content mt-3">
        <div class="col-xl">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm">
                            <h4 class="card-title mb-0">Tambah Data</h4> </br>
                            <form method="POST" action="/Blok/Upload">
                                @csrf

                                <table class="table">
                                    <tbody>
                                            <tr>
                                                <th scope="col">Nama Blok</th>
                                                <td><input type="text" name="blok" class="form-control"></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Jalan</th>
                                                <td><input type="textarea" name="jalan" class="form-control"></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Keterangan Lokasi</th>
                                                <td><input type="textarea" name="lokasi" class="form-control"></td>
                                            </tr>
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
