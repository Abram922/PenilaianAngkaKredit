@extends('layouts.userhomepage')


@section('container2')

    <div class="row g-5">
      <div class="col-md-7 col-lg-8">
        <br>
        <h4 class="mb-3">Perhitungan KUM</h4>
            <form action="{{route('perhitungan.store')}}" method="POST" class="needs-validation" novalidate>

                

                {{ csrf_field() }}
                {{ method_field('POST') }}

                <div class="col-12">

                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Judul</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" id="judul" name="judul">
                        </div>
                    </div>

                  

                    <div class="mb-3 row">
                        <label for="jabatan_pref" class="col-sm-2 col-form-label">Jabatan Saat Ini</label>
                        
                        <div class="col-sm-9">
                            <select class="form-control" id="jabatan_pref" name="jabatan_pref" onchange="getValuePref(this)">
                                <option value="" disabled selected>Pilih Opsi</option>
                            @foreach ($jfp as $jfpref)
                                <option value="{{ $jfpref->id_jabatan_pref }}">{{ $jfpref->jabatan }} {{ $jfpref->angkaKreditKumulatif }} </option>                             
                            @endforeach
                            </select>
                    
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="jabatan_next" class="col-sm-2 col-form-label">Jabatan Di Usulkan</label>
                        <div class="col-sm-9">
                            <select class="form-control" id="jabatan_next" name="jabatan_next" >
                                <option value="" disabled selected>Pilih Opsi</option>
                            @foreach ($jfn as $jfnext)
                                <option value="{{ $jfnext->id_jabatan_next }}">{{ $jfnext->jabatan }}</option> 
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

    <br>
    <br>
    <br>


    <h4 class="mb-3">Daftar Aktifitas Perhitungan </h4>


    <div class="col-md-10">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <td>Judul</td>
                    <td>Jabatan Saat ini </td>
                    <td>Jabatan Di Usulkan </td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
            @foreach($akumulasiPerhitungan as $key => $value)
                <tr>
                    <td>{{$value->judul }}</td>
                    <td>{{$value->jabatan_pref }}</td>
                    <td>{{$value->jabatan_next}}</td>
                    <td>{{$value->id}}</td>
                    <td>
                        <a href= "{{ route('perhitungan.show', $value->id)}}">
                            <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
                            <button type="submit" class="btn btn-sm btn-primary shadow">Lengkapi</button>
                            
                        </a>
                            

                            <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                action="{{ route('perhitungan.destroy', $value->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger shadow">Delete</button>
                            </form>
                        


                        <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>

                    </td>
                </tr>
            @endforeach
            </tbody>
</table>

    </div>


@endsection