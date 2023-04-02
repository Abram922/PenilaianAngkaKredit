@extends('layouts.userhomepage')


@section('container2')

        <div class="row">
            <div class="col-md-5" Center>
                <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
                <lord-icon
                        src="https://cdn.lordicon.com/bbnkwdur.json"
                        trigger="morph"
                        style="width:150px;height:150px">
                </lord-icon>
                <h5><a href="{{route('perhitungan.index')}}">Perhitungan</a></h5>   
            </div>
            
            <div class="col-md-5" Center>                
                <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
                <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
                    <lord-icon
                        src="https://cdn.lordicon.com/nocovwne.json"
                        trigger="hover"
                        style="width:150px;height:150px">
                    </lord-icon>
                <h5 ><a href='filelampiran'>Lampiran</a></h5>  
            </div>
            
         </div>



@endsection