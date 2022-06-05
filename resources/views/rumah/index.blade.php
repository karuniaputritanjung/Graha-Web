@extends('layouts.app')

@section('title', 'List Data Unit')

@section('content')
    <div class="content mt-3">
        <div class="col-xl">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm">
                            @if(Session::get('success'))
                                <div class="alert alert-success alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>{{Session::get('success')}}
                                </div>
                            @elseif(Session::get('failed'))
                                <div class="alert alert-danger alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>{{Session::get('failed')}}
                                </div>
                            @elseif(Session::get('edit'))
                                <div class="alert alert-info alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>{{Session::get('edit')}}
                                </div>
                            @endif
                            <h4 class="card-title mb-0">Daftar Unit</h4> </br>
                            <a href="/Unit/Tambah" class="btn btn-success" style="margin-bottom: 10px; border-radius: 5px; font-size: 14px;"><i class="ti-plus"></i> Tambah Data</a>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">No Rumah</th>
                                        <th scope="col">Blok</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @php $no = 1; @endphp --}}
                                    @foreach ($unit as $data)
                                        <tr>
                                            <td>{{$data->nomor_rumah}}</td>
                                            <td>{{$data->blok}}</td>
                                            <td>
                                                <a href="/Unit/Detail/{{$data->nomor_rumah}}" class="badge badge-primary">Detail</a>
                                                <a href="/Unit/Edit/{{$data->nomor_rumah}}" class="badge badge-success">Edit</a>
                                                <a href="/Unit/Delete/{{$data->nomor_rumah}}" class="badge badge-danger" onclick="return confirm('yakin?');">Hapus</a>
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
