@extends('layouts.app')

@section('title', 'List Data Blok')

@section('content')
    <div class="content mt-3">
        <div class="col-xl">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm">
                            <h4 class="card-title mb-0">Daftar Blok</h4> </br>
                            <a href="/Blok/Tambah" class="btn btn-success" style="margin-bottom: 10px; border-radius: 5px; font-size: 14px;"><i class="ti-plus"></i> Tambah Data</a>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nama Blok</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach ($blok as $data)
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>{{$data->nama_blok}}</td>
                                            <td>
                                                <a href="/Blok/Detail/{{$data->nama_blok}}" class="badge badge-primary">Detail</a>
                                                <a href="/Blok/Edit/{{$data->nama_blok}}" class="badge badge-success">Edit</a>
                                                <a href="/Blok/Delete/{{$data->nama_blok}}" class="badge badge-danger" onclick="return confirm('yakin?');">Hapus</a>
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
