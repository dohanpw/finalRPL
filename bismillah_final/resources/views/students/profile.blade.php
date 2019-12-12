@extends('layouts.master')

@section('content')
<div class="main">
        <!-- MAIN CONTENT -->
        <div class="main-content">
            <div class="container-fluid">
                <div class="panel panel-profile">
                    <div class="clearfix">
                        <!-- LEFT COLUMN -->
                        <div class="profile-left">
                            <!-- PROFILE HEADER -->
                            <div class="profile-header">
                                <div class="overlay"></div>
                                <div class="profile-main">
                                    <img src="{{$student->getAvatar()}}" class="img-circle" alt="Avatar">
                                    <h3 class="name">{{$student->nama_depan}}</h3>
                                    <span class="online-status status-available">Available</span>
                                </div>
                                <div class="profile-stat">
                                    <div class="row">
                                        <div class="col-md-4 stat-item">
                                        {{$student->subject->count()}}<span>Banyak Nilai</span>
                                        </div>
                                        <div class="col-md-4 stat-item">
                                            15 <span>Awards</span>
                                        </div>
                                        <div class="col-md-4 stat-item">
                                            2174 <span>Points</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END PROFILE HEADER -->
                            <!-- PROFILE DETAIL -->
                            <div class="profile-detail">
                                <div class="profile-info">
                                    <h4 class="heading">Basic Info</h4>
                                    <ul class="list-unstyled list-justify">
                                        <li>Jenis Kelamin <span>{{$student->jenis_kelamin}}</span></li>
                                        <li>Agama <span>{{$student->agama}}</span></li>
                                        <li>Alamat <span>{{$student->alamat}}</span></li>
                                    </ul>
                                </div>
                                <div class="text-center"><a href="/siswa/{{$student->id}}/edit" class="btn btn-primary">Edit Profile</a></div>
                            </div>
                            <!-- END PROFILE DETAIL -->
                        </div>
                        <!-- END LEFT COLUMN -->
                        <!-- RIGHT COLUMN -->
                        <div class="profile-right">
                            <!-- END AWARDS -->
                            <!-- TABBED CONTENT -->
                            <div class="custom-tabs-line tabs-line-bottom left-aligned">
                                <div class="">
                                    @if (Auth()->user()->role == 'guru')
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                        Tambah Nilai
                                    </button>
                                    @endif
                                </div>
                                <ul class="nav" role="tablist">
                                    <li class="active"><a href="#tab-bottom-left1" role="tab" data-toggle="tab">Daftar Nilai</a></li>
                                </ul>
                                <div class="panel">
                                       
                                        <div class="panel-body">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Kode</th>
                                                        <th>Nama</th>
                                                        <th>Semester</th>
                                                        <th>Nilai</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($student->subject as $subject)
                                                    <tr>
                                                    <td>{{$subject->kode}}</td>
                                                    <td>{{$subject->nama}}</td>
                                                    <td>{{$subject->semester}}</td>
                                                    <td>{{$subject->pivot->nilai}}</td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                            </div>
                            <div class="tab-content">
                            </div>
                            <!-- END TABBED CONTENT -->
                        </div>
                        <!-- END RIGHT COLUMN -->
                    </div>
                </div>
            </div>
        </div>
        <!-- END MAIN CONTENT -->
    </div>

    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Tambah Nilai</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form action="/siswa/{{$student->id}}/addnilai" method="POST" >
                    @csrf
                    <div class="form-group">
                        <label for="mata pelajaran">Mata Pelajaran</label>
                        <select class="form-control" name="mapel">
							@foreach ($mapel as $mp)
                            <option value="{{$mp->id}}">{{$mp->nama}}</option>
                            @endforeach
						</select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputNilai">Nilai</label>
                        <input type="text" name="nilai" class="form-control" id="exampleInputNilai" placeholder="Masukkan Nilai" value="{{old('nilai')}}">
                    @if ($errors->has('nilai'))
                        
                    @endif
                    </div>
                </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
    
@endsection