@extends('layouts.userhomepage')

        
@section('container2')
<br>
<br>

    <div>

    </div>
    <div class="col-md-12">
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
    <br>
    <br>
    <br>

    <div class="col-md-10">
        <h3 class="mb-3">Aktifitas Perhitungan Angka Kredit </h3>
        <a href="#" data-toggle="modal" data-target="#myModal" class="btn btn-info">+ Pendidikan dan Pengajaran</a>
            <a type="button" href="" class="btn btn-warning">+ Penelitian</a>
            <a type="button" href="" class="btn btn-info">+ Pengabdian Masyarakat</a>
            <a type="button" href="" class="btn btn-primary" data-toggle="modal" data-target="#myModal2">+ Penunjang</a>
            
            <br>
            <br>
    </div>

    <div class="col-md-12">
        <div class="row">
            <div class="col">
                <div class="card" style="width: 215px;border:none">
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" data-toggle="modal" data-target="#modalpelaksanaan">
                        Tambah+
                        <span class="visually-hidden"></span>
                      </span>
                    <img src="{{asset('asetweb/logopendidikan.png')}}" class="card-img-top" alt="...">
                    <div class="text-center">
                        <a class="btn btn-primary" style="width: 174px; height:48px; margin-top: -120px;border-radius:10px  ">Pendidikan</a>
                    </div>
                  </div>
            </div>
            <div class="col">
                <div class="card" style="width: 215px;border:none" >
                    <img src="{{asset('asetweb/logopengabdian.png')}}" class="card-img-top" alt="...">
                    <div class="text-center">
                        <a href="" data-toggle="modal" data-target="#myModal" class="btn btn-primary" style="width: 174px; height:48px; margin-top: -120px;border-radius:10px  ">Pelaksanaan Pengajaran</a>
                    </div>
                  </div>
            </div>
            <div class="col">
                <div class="card" style="width: 215px;border:none">
                    <img src="{{asset('asetweb/logopenelitian.png')}}" class="card-img-top" alt="...">
                    <div class="text-center">
                        <a href="#" class="btn btn-primary" style="width: 174px; height:48px; margin-top: -120px;border-radius:10px  ">Penelitian</a>
                    </div>
                  </div>
            </div>
        </div>
        <br>
        <br>

        <div class="row">
            <div class="col">
                <div class="card" style="width: 215px;border:none">
                    <img src="{{asset('asetweb/logodokumenpenunjang.png')}}" class="card-img-top" alt="...">
                    <div class="text-center">
                        <a href="#" class="btn btn-primary" style="width: 174px; height:48px; margin-top: -120px;border-radius:10px  ">Pendidikan</a>
                    </div>
                      
                  </div>
            </div>
            <div class="col">
                <div class="card" style="width: 215px;border:none">
                    <img src="{{asset('asetweb/logolampiran.png')}}" class="card-img-top" alt="...">
                    <div class="text-center">
                        <a href="#" class="btn btn-primary" style="width: 174px; height:48px; margin-top: -120px;border-radius:10px  ">Pengabdian</a>
                    </div>
                  </div>
            </div>
            <div class="col">
                <div class="card" style="width: 215px;border:none">
                    <img src="{{asset('asetweb/logokum.png')}}" class="card-img-top" alt="...">
                    <div class="text-center">
                        <a href="#" class="btn btn-primary" style="width: 174px; height:48px; margin-top: -120px;border-radius:10px  ">Penelitian</a>
                    </div>
                  </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>

        

        <div class="col-md-10">
            <h3 class="mb-3">Pelaksanaan Pengajaran</h3>
            <br>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <td>Nama Kegiatan</td>
                        <td>Tempat Kegiatan</td>
                        <td>SKS</td>
                        <td>Jumlah Kelas</td>
                        <td>Jumlah Angka Kredit</td>
                        <td>Volume Dosen</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                @foreach($unsurpendidikandanpengajaran as $key => $value)
                    <tr>
                        <td>{{$value->namaKegiatan}}</td>
                        <td>{{$value->tempatInstansi}}</td>
                        <td>{{$value->sks}}</td>
                        <td>{{$value->jumlahkelas}}</td>
                        <td>{{$value->jumlahAngkaKredit}}</td>
                        <td>{{$value->volumeDosen}}</td>
                        <td>
                                <a href="" class="btn btn-warning"></a>
                                <a href="" class="btn btn-danger"></a>
                        </td>
                        
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
            

        
    <br>
    <br>
    

    
        <

    <br>
    <br>
    {{-- 1 --}}
    <div>
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Pendidikan dan Pengajaran</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{route('unsurpdp.store')}}" enctype="multipart/form-data" >
                            @csrf

                            <div class="form-group row">
                                <div class="col-md">
                                    <label for="namaKegiatan">Nama Kegiatan</label>
                                    <input type="text" class="form-control" id="namaKegiatan" name="namaKegiatan">
                                </div>
                                <div class="col-md">
                                    <label for="tempatInstansi">tempatInstansi</label>
                                    <input type="text" class="form-control" id="tempatInstansi" name="tempatInstansi">
                                </div>
                            </div>

                            <div class="form-group ">
                                <label for="jenispelaksanaan">Jenis Pelaksanaan</label>
                                <select class="form-control" id="idjenispelaksanaan" name="idjenispelaksanaan">
                                    <option>Pilih Jenis Pelaksanaan</option>
                                    @foreach ($pelaksanaanpdps as $p)
                                        <option @if($p->withsks == 0 ) id="is-sks" @endif class="" value="{{$p->id}}" title="{{$p->jenispelaksanaan}}">{{Str::limit($p->jenispelaksanaan,100)}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group row">
                                
                                <div class="col-md">
                                    <label for="kelas">Kelas</label>
                                    <input disabled type="number" class="form-control x" id="jumlahkelas" name="jumlahkelas" onkeyup="sum()">
                                </div>
                                <div class="col-md">
                                    <label for="volumeDosen">Volume Dosen</label>
                                    <input disabled type="number" class="form-control x" id="volumeDosen" name="volumeDosen" onkeyup="sum()" >
                                </div>
                                <div class="col-md">
                                    <label for="sks">SKS</label>
                                    <input disabled type="number" class="form-control x" id="sks" name="sks" onkeyup="sum()">
                                </div>

                                <input  hidden type="number" class="form-control" id="kelasxvdosen" name="kelasxvdosen">
                                
                                <div class="col-md">
                                    <label for="angkaKredit">Angka Kredit</label>
                                    <input  type="number" class="form-control" id="jumlahAngkaKredit" name="jumlahAngkaKredit" onkeyup="sum()">
                                </div>

                                <input  hidden type="number" class="form-control" id="hasil3" name="hasil3">
                            </div>
                           

                            <div class="form-group ">
                                <label for="keterangan">Keterangan Kegiatan</label>
                                <input type="text" class="form-control" id="keterangan" name="keterangan"  placeholder="maksimal 100 kata">
                            </div>

                            <input type="text" id="idPerhitungan" name="idPerhitungan" value="{{$id}}" hidden>
                            <div class="form-group ">
                                <label for="bukti">Bukti</label>
                                <input class="form-control @error('bukti') is-invalid @enderror" type="file" id="bukti" name="bukti">
                                @error('bukti')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                </div>
            </div>
        </div>
    </div>

    {{-- 2 --}}

    <div>
        <div class="modal fade" id="myModal2" tabindex="-2" role="dialog" aria-labelledby="myModal2">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h4 class="modal-title" id="">Pelaksanaan Pengajaran</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{route('unsurpdp.store')}}" enctype="multipart/form-data" >
                            @csrf
                            <div class="form-group ">
                                <label for="jenispelaksanaan">Jenis Pelaksanaan</label>
                                <select class="form-control" id="idkomponen" name="idkomponen">
                                    @foreach ($pelaksanaanpdps as $p)
                                        <option value="{{$p->id}}" title="{{$p->jenispelaksanaan}}">{{Str::limit($p->jenispelaksanaan,100)}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <input type="text" id="idPerhitungan" name="idPerhitungan" value="{{$id}}" hidden>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                </div>
            </div>
        </div>
        
    </div>



    <script>
        const selectElement = document.getElementById('idjenispelaksanaan');
        const sks = document.getElementById('sks');
        const volumeDosen = document.getElementById('volumeDosen');
        const angkaKredit = document.getElementById('jumlahAngkaKredit');
        const jumlahkelas = document.getElementById('jumlahkelas');
        // var options = selectElement
        // console.log(sks)
        //console.log(selectElement);

        selectElement.onchange = function() {
           var options = selectElement.options[selectElement.selectedIndex];
           
           if(options.id == 'is-sks'){
                sks.removeAttribute('disabled');
                jumlahkelas.removeAttribute('disabled');
                volumeDosen.removeAttribute('disabled');
                angkaKredit.setAttribute('disabled','');
           }else{
                sks.setAttribute('disabled','');
                jumlahkelas.setAttribute('disabled','');
                volumeDosen.setAttribute('disabled','');
                angkaKredit.removeAttribute('disabled');
           }
           
        }

        function sum(){
            var ckelas = document.getElementById("jumlahkelas").value ;
            var cvolumeDosen = document.getElementById("volumeDosen").value ;
            var csks = document.getElementById("sks").value ;
            var ckelasxvdosen = document.getElementById("kelasxvdosen").value ;

            
            var hasil1 = parseFloat(ckelas)*parseFloat(cvolumeDosen);

            if(!isNaN(hasil1)){
                document.getElementById("kelasxvdosen").value = parseFloat(hasil1);
            }

            var hasil2 = parseFloat(ckelasxvdosen) / parseFloat(csks);
            if(!isNaN(hasil2)){
                document.getElementById("jumlahAngkaKredit").value = parseFloat(hasil2);
            }

            
        }

        




        // Add event listener for the 'change' event
        // selectElement.addEventListener('change', (event) => {
        // Get the selected value of the select element
        // const selectedValue = event.target.value;

        // Find the form field to enable/disable
        // const sks = document.getElementById('sks');
        // const angkaKredit = document.getElementById('angkaKredit');
        // const volumeDosen = document.getElementById('volumeDosen');

        // Enable/disable the form field based on the selected value of the select element
        // if (selectedValue == 1) {
        //     console.log("option 1 dipiilih");
        //     sks.disabled = true;
        //     angkaKredit.disabled = true;
        //     volumeDosen.disabled = true;
        // } else {
        //     console.log("option lain dipiilih");
        //     sks.disabled = false;
        //     angkaKredit.disabled = false;
        //     volumeDosen.disabled = false;
        // }
        // sks.dispatchEvent(new Event('input'));
        // angkaKredit.dispatchEvent(new Event('input'));
        // volumeDosen.dispatchEvent(new Event('input'));
        // });
    </script>

   



@endsection