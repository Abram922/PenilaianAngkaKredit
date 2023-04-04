@extends('layouts.userhomepage')
@section('container2')

<div class="col-md-12" style="margin-top: 30px">
    <h3>Input Data Pelaksanaan Pendidikan</h3>
    <br>



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
    </form>
</div>

@endsection