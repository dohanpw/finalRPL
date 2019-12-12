@extends('layouts.master')

@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <h3 class="page-title">Daftar Siswa</h3>
                @if (session('sukses'))
                            <div class="alert alert-success" role="alert">
                                {{session('sukses')}}
                            </div>
                        @endif
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <div class="right">
                                <a href="/siswa/create" class="btn btn-primary btn-sm">Tambah Siswa</a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Nama Depan</th>
                                        <th>Nama Belakang</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Agama</th>
                                        {{-- <th>Email</th> --}}
                                        <th>Alamat</th>
                                        <th>Aksi</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($student as $std)
                                    <tr>
                                        <td><a href="/siswa/{{$std->id}}/profile">{{$std->nama_depan}}</a></td>
                                        <td><a href="/siswa/{{$std->id}}/profile">{{$std->nama_belakang}}</a></td>
                                        <td>{{$std->jenis_kelamin}}</td>
                                        <td>{{$std->agama}}</td>
                                        {{-- <td>{{$std->nama_depan}}</td> --}}
                                        <td>{{$std->alamat}}</td>
                                        <td>
                                            <a href="/siswa/{{$std->id}}/edit" class="btn btn-warning btn-xs">Edit</a>
                                            <a href="/siswa/{{$std->id}}/delete" class="btn btn-danger btn-xs" onclick="return confirm('Data Akan di Hapus?')">Delete</a>    
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
    </div>
@endsection