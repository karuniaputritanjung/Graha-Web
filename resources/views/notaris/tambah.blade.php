@extends('layouts.app')

@section('title', 'Tambah Data')

@section('content')
    <div class="content mt-3">
        <div class="col-xl">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm">
                            <h4 class="card-title mb-0">Tambah Data Notaris</h4> </br>
                            <form method="POST" action="/Notaris/Upload">
                                @csrf

                                <table class="table">
                                    <tbody>
                                            <tr>
                                                <th scope="col">ID Notaris</th>
                                                <td><input type="text" name="id" class="form-control"></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Nama Notaris</th>
                                                <td>
                                                    <input type="text" name="nama" placeholder="Muhammad Taufik Hidayanto, S.T." class="form-control">
                                                </td>
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
