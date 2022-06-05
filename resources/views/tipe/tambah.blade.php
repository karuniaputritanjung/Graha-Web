@extends('layouts.app')

@section('title', 'Tambah Tipe')

@section('content')
    <div class="content mt-3">
        <div class="col-xl">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm">
                            <h4 class="card-title mb-0">Tambah Data</h4> </br>
                            <form method="POST" action="/Type/Upload">
                                @csrf

                                <table class="table">
                                    <tbody>
                                            <tr>
                                                <th scope="col">Nama Tipe</th>
                                                <td><input type="text" name="tipe" class="form-control"></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Luas Tanah</th>
                                                <td><input type="number" name="tanah" class="form-control"></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Luas Bangunan</th>
                                                <td><input type="number" name="bangunan" class="form-control"></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Jumlah Lantai</th>
                                                <td><input type="number" name="lantai" class="form-control"></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Jumlah Kamar</th>
                                                <td><input type="number" name="kamar" class="form-control"></td>
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
