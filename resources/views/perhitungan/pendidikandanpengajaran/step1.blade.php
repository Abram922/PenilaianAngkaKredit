@extends('layouts.userhomepage')

        
@section('container2')
<div class="card shadow mb-2">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Pendidikan dan Pengajaran</h6>
    </div>
    <br>
    
    
        <div class="card-body">
            
            <div class="chart-area">
                
                    <form action="" enctype="multipart/form-data">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="nama">Nama Kegiatan</label>
                                <input type="text" readonly class="form-control" id="namaKegiatan" value="{{$value->namaKegiatan}}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="tempat_Instansi">Tempat Instansi</label>
                                <input type="text" readonly class="form-control" id="tempatInstansi" value="{{$value->tempatKegiatan}}" >
                            </div>
                        </div>

                        

                            <a type="button" href="" class="btn btn-primary"> Simpan </a>
                            
                        


                        
                    </form>
                
                
                
            </div>
            
        </div>
    
</div>





@endsection