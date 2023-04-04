@extends('layouts.userhomepage')

        
@section('container2')

<div class="row g-5">
    <div class="col-md-7 col-lg-8">
      <br>
      <h4 class="mb-3">Perhitungan KUM</h4>
          <form action="{{route('userjabatan.store')}}" method="POST" class="needs-validation" novalidate>

              

              {{ csrf_field() }}
              {{ method_field('POST') }}

              <div class="col-12">

                

                  <div class="mb-3 row">
                      <label for="id_jabatan_sekarang" class="col-sm-2 col-form-label">Jabatan Saat Ini</label>
                      
                      <div class="col-sm-9">
                          <select class="form-control" id="id_jabatan_sekarang" name="id_jabatan_sekarang" onchange="getValuePref(this)">
                              <option value="" disabled selected>Pilih Opsi</option>
                          @foreach ($jbt as $j)
                              <option value="{{ $j->id }}">{{ $j->jabatan}} </option>                             
                          @endforeach
                          </select>
                  
                      </div>
                  </div>

                  <div class="mb-3 row">
                      <label for="id_jabatan_dituju" class="col-sm-2 col-form-label">Jabatan Di Usulkan</label>
                      <div class="col-sm-9">
                          <select class="form-control" id="id_jabatan_dituju" name="id_jabatan_dituju" >
                              <option value="" disabled selected>Pilih Opsi</option>
                          @foreach ($jbt as $j)
                              <option value="{{ $j->id}}">{{ $j->jabatan}}</option> 
                          @endforeach
                          </select>
                      </div>
                  </div>

                  <div class="mb-3 row">
                  <label for="kum" class="col-sm-2 col-form-label"></label>
                  <label for="kum2" class="col-sm-2 col-form-label">Total KUM</label>
                      <div class="col-sm-4">
                          
                      <input type="text"readonly class="form-control" id="kum" value="">
                      </div>
                  </div>

                  <div class="mb-3 row">
                      <label for="" class="col-sm-2 col-form-label">Pendidikan</label>
                      <div class="col-sm-9">
                      <input type="text" readonly class="form-control" id="">
                      </div>
                  </div>

                  <div class="mb-3 row">
                      <label for="" class="col-sm-2 col-form-label">Penelitian</label>
                      <div class="col-sm-9">
                      <input type="text" readonly class="form-control" id="">
                      </div>
                  </div>

                  <div class="mb-3 row">
                      <label for="" class="col-sm-2 col-form-label">Pengabdian Masyarakat</label>
                      <div class="col-sm-9">
                      <input type="text" readonly class="form-control" id="">
                      </div>
                  </div>
                  <div class="mb-3 row">
                      <label for="" class="col-sm-2 col-form-label">Penunjang</label>
                      <div class="col-sm-9">
                      <input type="text" readonly class="form-control" id="">
                      </div>
                  </div>
                  </div>
              <button  class="btn btn-primary btn-lg" type="submit">Submit</button>
              </form>
          </div>            
  </div>
@endsection