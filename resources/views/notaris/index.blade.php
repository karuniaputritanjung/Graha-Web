@extends('layouts.app')

@section('title', 'List Data Notaris')

@section('content')
    <div class="content mt-3">
        <div class="col-xl">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm">
                            <h4 class="card-title mb-0">Daftar Nama Notaris</h4> </br>
                            <a href="/Notaris/Tambah" class="btn btn-success" style="margin-bottom: 10px; border-radius: 5px; font-size: 14px;"><i class="ti-plus"></i> Tambah Data</a>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">ID Notaris</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @php $no = 1; @endphp --}}
                                    @foreach ($notaris as $data)
                                        <tr>
                                            <td>{{$data->id_notaris}}</td>
                                            <td>{{$data->nama_notaris}}</td>
                                            <td>
                                                <a href="{{-- /Notaris/Detail/{{$data->id_notaris}} --}}" class="badge badge-primary">Detail</a>
                                                <a href="/Notaris/Edit/{{$data->id_notaris}}" class="badge badge-success">Edit</a>
                                                <a href="/Notaris/Delete/{{$data->id_notaris}}" class="badge badge-danger" onclick="return confirm('yakin?');">Hapus</a>
                                            </td>
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
