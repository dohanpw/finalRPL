@extends('layouts.master')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">  
                <div class="col-md-6">
                    <div class="panel">
                        <div class="panel-body">
                            <div class="panel-heding">
                            <h3>Ranking 5 besar</h3>
                            </div>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Ranking</th>
                                        <th>Name</th>
                                        <th>Nilai</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $ranking = 1;
                                    @endphp
                                    @foreach ($siswa as $siswa)
                                    <tr>
                                    <td>{{$ranking}}</td>
                                    <td>{{$siswa->nama_depan}} {{$siswa->nama_belakang}}</td>
                                    <td>{{$siswa->ratanilai}}</td>
                                    </tr>
                                    @php
                                        $ranking++
                                    @endphp
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel">
                    <div class="panel-body">
                        <div class="col-md-3">
                            <div class="metric">
                                <span class="icon"><i class="lnr lnr-user"></i></span>
                                <p>
                                    <span class="number">{{$banyaksiswa}}</span>
                                    <span class="title">Banyak Siswa</span>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="metric">
                                        <span class="icon"><i class="lnr lnr-user"></i></span>
                                        <p>
                                            <span class="number">{{$banyakguru}}</span>
                                            <span class="title">Banyak Guru</span>
                                        </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection