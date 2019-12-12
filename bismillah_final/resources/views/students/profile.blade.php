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
                            
                            {{-- <h4 class="heading">Samuel's Awards</h4> --}}
                            <!-- AWARDS -->
                            {{-- <div class="awards"> 
                                <div class="row">
                                    <div class="col-md-3 col-sm-6">
                                        <div class="award-item">
                                            <div class="hexagon">
                                                <span class="lnr lnr-sun award-icon"></span>
                                            </div>
                                            <span>Most Bright Idea</span>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="award-item">
                                            <div class="hexagon">
                                                <span class="lnr lnr-clock award-icon"></span>
                                            </div>
                                            <span>Most On-Time</span>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="award-item">
                                            <div class="hexagon">
                                                <span class="lnr lnr-magic-wand award-icon"></span>
                                            </div>
                                            <span>Problem Solver</span>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="award-item">
                                            <div class="hexagon">
                                                <span class="lnr lnr-heart award-icon"></span>
                                            </div>
                                            <span>Most Loved</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center"><a href="#" class="btn btn-default">See all awards</a></div>
                            </div>--}}
                            <!-- END AWARDS -->
                            <!-- TABBED CONTENT -->
                            <div class="custom-tabs-line tabs-line-bottom left-aligned">
                                <div class="">
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                            Tambah Nilai
                                        </button>
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
                                {{-- <div class="tab-pane fade in active" id="tab-bottom-left1">
                                    <div class="margin-top-30 text-center"><a href="#" class="btn btn-default">See all activity</a></div>
                                </div> --}}
                                {{-- 
                                <div class="tab-pane fade" id="tab-bottom-left2">
                                    <div class="table-responsive">
                                        <table class="table project-table">
                                            <thead>
                                                <tr>
                                                    <th>Title</th>
                                                    <th>Progress</th>
                                                    <th>Leader</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><a href="#">Spot Media</a></td>
                                                    <td>
                                                        <div class="progress">
                                                            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                                                <span>60% Complete</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><img src="assets/img/user2.png" alt="Avatar" class="avatar img-circle"> <a href="#">Michael</a></td>
                                                    <td><span class="label label-success">ACTIVE</span></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#">E-Commerce Site</a></td>
                                                    <td>
                                                        <div class="progress">
                                                            <div class="progress-bar" role="progressbar" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" style="width: 33%;">
                                                                <span>33% Complete</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><img src="{{asset('admin/assets/img/user1.png')}}" alt="Avatar" class="avatar img-circle"> <a href="#">Antonius</a></td>
                                                    <td><span class="label label-warning">PENDING</span></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#">Project 123GO</a></td>
                                                    <td>
                                                        <div class="progress">
                                                            <div class="progress-bar" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;">
                                                                <span>68% Complete</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><img src="{{asset('admin/assets/img/user1.png')}}" alt="Avatar" class="avatar img-circle"> <a href="#">Antonius</a></td>
                                                    <td><span class="label label-success">ACTIVE</span></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#">Wordpress Theme</a></td>
                                                    <td>
                                                        <div class="progress">
                                                            <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
                                                                <span>75%</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><img src="{{asset('admin/assets/img/user2.png')}}" alt="Avatar" class="avatar img-circle"> <a href="#">Michael</a></td>
                                                    <td><span class="label label-success">ACTIVE</span></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#">Project 123GO</a></td>
                                                    <td>
                                                        <div class="progress">
                                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                                                <span>100%</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><img src="{{asset('admin/assets/img/user1.png')}}" alt="Avatar" class="avatar img-circle"> <a href="#">Antonius</a></td>
                                                    <td><span class="label label-default">CLOSED</span></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#">Redesign Landing Page</a></td>
                                                    <td>
                                                        <div class="progress">
                                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                                                <span>100%</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><img src="{{asset('admin/assets/img/user5.png')}}" alt="Avatar" class="avatar img-circle"> <a href="#">Jason</a></td>
                                                    <td><span class="label label-default">CLOSED</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div> --}}
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