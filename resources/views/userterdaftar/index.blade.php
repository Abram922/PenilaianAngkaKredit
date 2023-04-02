@extends('layouts.userhomepage')


@section('container2')
 <!--CSS-->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--CSS-->

<!--Grid-->
<div class="container text-center">

  <div class="row">

    <div class="col-md-auto">
      <!--Card-->
      <div class="card" style="width: 20rem; height: 5rem">
      <div class="card-body">
        <div class="row">
          <div class="col">
            <div class="card"  style="width: 5rem;">
              <div class="card-body">
              </div>
            </div>
          </div>
          <div class="col">
            <H6>Pendidikan</H6>
          </div>
        </div>
      </div>
      </div>
      <!--Card-->

      <br>
            <!--Card-->
            <div class="card" style="width: 20rem; height: 5rem">
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <div class="card"  style="width: 5rem;">
                    <div class="card-body">
                    </div>
                  </div>
                </div>
                <div class="col">
                  <H6>Penelitian</H6>
                </div>
              </div>
            </div>
            </div>
            <!--Card-->

            <br>

            <!--Card-->
            <div class="card" style="width: 20rem; height: 5rem">
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <div class="card"  style="width: 5rem;">
                    <div class="card-body">
                    </div>
                  </div>
                </div>
                <div class="col">
                  <H6>Pengabdian Masyarakat</H6>
                </div>
              </div>
            </div>
            </div>
            <!--Card-->
    </div>

    <br>


    <div class="col-md-auto">
              <!--Card-->
              <div class="card" style="width: 20rem; height: 5rem">
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <div class="card"  style="width: 5rem;">
                    <div class="card-body">
                    </div>
                  </div>
                </div>
                <div class="col">
                  <H6>Pendidikan dan Pengajaran</H6>
                </div>
              </div>
            </div>
            </div>
            <!--Card-->

            <br>

            <!--Card-->
            <div class="card" style="width: 20rem; height: 5rem">
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <div class="card"  style="width: 5rem;">
                    <div class="card-body">
                    </div>
                  </div>
                </div>
                <div class="col">
                  <H6>Dokumen Penunjang</H6>
                </div>
              </div>
            </div>
            </div>
            <!--Card-->
    </div>

    <!--Masuk ke profil-->
    <div class="col">
      <!--Card-->
      <div class="card mb-3">
        <div class="row g-0">
          <div class="col-md-4">
            <!--Foto-->
            <div class="card" style="width: 13rem;">
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><b>Foto Dosen</b><br><p class="card-text"><small class="text-muted">Abram Pane</small></p></li>
                <li class="list-group-item"></li>
                <li class="list-group-item"><img src="{{asset('/image/abram.jpg')}}" style="width: 12rem; height: 14rem" class="img-fluid rounded-start" alt="..."></li>
              </ul>
            </div>
             <!--Foto-->
          </div>
          <div class="col-md-8">
            <div class="card-body">

             <!--Table--> 
            <table class="table">
              <tbody>
              <tr>
                  <td>Nama</th>
                  <td>:</th>
                  <td>{{ Auth::user()->name }}</td>
                </tr>
                <tr>
                  <td>NIDN</td>
                  <td>:</td>
                  <td>11420084</td>
                </tr>
                <tr>
                  <td>Pangkat</td>
                  <td>:</td>
                  <td>Mahasiswa</td>
                </tr>
                <tr>
                  <td>Jabatan</td>
                  <td>:</td>
                  <td>Lektor</td>
                </tr>
                <tr>
                  <td>Fakultas/Jurusan</td>
                  <td>:</td>
                  <td>Teknologi Rekayasa Perangkat Lunak</td>
                </tr>
              </tbody>
            </table>
          <!--Table--> 

              </div>
          </div>
        </div>
      </div>
      <!--Card-->
    </div>
    <!--Penutup-->

  </div>
</div>
<!--Grid-->

<br>
<div class="container">
<!--Searching-->
    <div class="row">
      <div class="col">
        <div class="input-group">
        <div class="input-group-text"><i class="fa fa-search"></i></div>
        <input type="text" class="form-control" id="autoSizingInputGroup" placeholder="Search"> 
      </div>

      </div>
      <div class="col">
      </div>
    </div>
  <!--Searching-->
</div>

<br><br>
<div class="container">
<table class="table table-striped table-bordered data" >
        <thead style="background: #1C82AD">
            <tr>
                <td><b>No</b></td>
                <td><b>Komponen Penilaian Angka Krefit</b></td>
                <td><b>Kategori</b></td>
                <td><b>Batas Maksimal Diakui</b></td>
                <td><b>Score</b></td>
            </tr>
        </thead>
        <tbody>
        <tr>
                <td>1</td>
                <td>Mengikuti Pendidikan formal dan memperoleh gelar/ sebutan/ ijazah</td>
                <td>Pendidikan</td>
                <td></td>
                <td></td>
            </tr>
        
        @foreach($komponenpak as $key => $value)
            <tr>
                <td></td>
                <td>{{$value->komponen }}</td>
                <td>{{$value->kategori }}</td>
                <td>{{$value->batasmaxdiakui }}</td>
                <td>{{$value->score }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <!--{ $komponenpak->links() }-->
    
</div>


@endsection