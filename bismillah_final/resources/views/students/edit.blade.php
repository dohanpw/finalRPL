@extends('layouts.master')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-body">

                        

                    
        
                        <h1 class="mt-3">Edit Data Mahasiswa </h1>
                        @if (session('sukses'))
                            <div class="alert alert-success" role="alert">
                                {{session('sukses')}}
                            </div>
                        @endif
                        

                        <form method="POST" action="/siswa/{{$student->id}}/update" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="nama">Nama Depan</label>
                                <input type="text" class="form-control @error('nama_depan') is-invalid @enderror" id="nama_depan" 
                                placeholder="masukkan nama" name="nama_depan" value="{{$student->nama_depan}}">
                                @error('nama')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama  Belakang</label>
                                <input type="text" class="form-control @error('nama_belakang') is-invalid @enderror" id="nama_belakang" 
                                placeholder="masukkan nama" name="nama_belakang" value="{{$student->nama_belakang}}">
                                @error('nama')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="nama">Agama</label>
                                <input type="text" class="form-control @error('agama') is-invalid @enderror" id="Agama" 
                                placeholder="masukkan agama" name="agama" value="{{$student->agama}}">
                                @error('nama')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        
                            <div class="form-grup">
                                <label for="jenis_kelamin">Jenis kelamin</label>
                                <select class="form-control" name="jenis_kelamin">
                                    <option value="L" @if ($student->jenis_kelamin == 'L')
                                        selected
                                    @endif>Laki-laki</option>
                                    <option value="P" @if ($student->jenis_kelamin == 'P')
                                        selected
                                    @endif>Perempuan</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="email">e-mail</label>
                                <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" 
                                placeholder="masukkan email" name="email" value="{{$student->email}}">
                                @error('email')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                                <div class="form-group">
                                    <label for="jurusan">Alamat</label>
                                <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" 
                                placeholder="alamat" name="alamat" value="{{$student->alamat}}">
                                    @error('alamat')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="jurusan">Avatar</label>
                                <input type="file" class="form-control @error('avatar') is-invalid @enderror" id="avatar" 
                                placeholder="avatar" name="avatar" value="{{$student->avatar}}">
                                    @error('avatar')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-primary">Update Data!</button>
                                
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection