@extends('layouts.userhomepage')
@section('container2')

<div class="col-md-12" style="margin-top: 60px">
    <div class="col-md-12 jumbotron d-flex" style="height: 136px"> 
        <div>
            <h3>Hi, Abram  W Pane</h3>
            <p>Kelola Data Kamu Disini</p>
        </div>
        <div class="ms-auto">

            <img src="{{asset('asetweb/c.png')}}" alt="" style="margin-top: -100px;height: 250px; width: 430px; ">
        </div>
        
    </div>
        
</div>

<div class="col-md-12"  style="margin-top:110px">
    <div class="row">
        <div class="col">
            <div class="card" style="width: 215px;border:none">
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" data-toggle="modal" data-target="#modalpelaksanaan">
                    Tambah+
                    <span class="visually-hidden"></span>
                  </span>
                <img src="{{asset('asetweb/logopendidikan.png')}}" class="card-img-top" alt="...">
                <div class="text-center">
                    <a href="{{ route('input') }}" class="btn btn-primary" style="width: 174px; height:48px; margin-top: -70px;border-radius:10px  ">Pendidikan</a>
                </div>
              </div>
        </div>
        <div class="col">
            <div class="card" style="width: 215px;border:none" >
                <img src="{{asset('asetweb/logopengabdian.png')}}" class="card-img-top" alt="...">
                <div class="text-center">
                    <a href="" data-toggle="modal" data-target="#myModal" class="btn btn-primary" style="width: 174px; height:48px; margin-top: -70px;border-radius:10px  ">Pelaksanaan Pengajaran</a>
                </div>
              </div>
        </div>
    </div>
</div>


@endsection