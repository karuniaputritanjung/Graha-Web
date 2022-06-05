@extends('layouts.app')

@section('title', 'List Data Tipe')

@section('content')
    <div class="content mt-3">
        <div class="col-xl">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm">
                            <h4 class="card-title mb-0">Daftar Tipe Rumah</h4> </br>
                            <a href="/Type/Tambah" class="btn btn-success" style="margin-bottom: 10px; border-radius: 5px; font-size: 14px;"><i class="ti-plus"></i> Tambah Data</a>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">No Tipe</th>
                                        <th scope="col">Tipe</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @php $no = 1; @endphp --}}
                                    @foreach ($tipe as $data)
                                        <tr>
                                            <td>{{$data->id_tipe}}</td>
                                            <td>{{$data->nama_tipe}}</td>
                                            <td>
                                                <a href="/Type/Detail/{{$data->id_tipe}}" class="badge badge-primary">Detail</a>
                                                <a href="/Type/Edit/{{$data->id_tipe}}" class="badge badge-success">Edit</a>
                                                <a href="/Type/Delete/{{$data->id_tipe}}" class="badge badge-danger" onclick="return confirm('yakin?');">Hapus</a>
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
