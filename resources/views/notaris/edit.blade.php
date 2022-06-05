@extends('layouts.app')

@section('title', 'Edit Notaris')

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
                                        <form method="POST" action="/Notaris/Update/{{$data->id_notaris}}">
                                            @method('patch')
                                            @csrf
                                            <tr>
                                                <th scope="col">ID Notaris</th>
                                                <td><input type="text" name="id" value="{{$data->id_notaris}}" class="form-control" readonly></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Nama</th>
                                                <td><input type="textarea" name="nama" value="{{$data->nama_notaris}}" class="form-control"></td>
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
