@extends('layouts.userhomepage')


@section('container2')

<div class="panel-heading">
        <h4>Lampiran Penilaian Angka Kredit</h4>
    </div>

    <div class="sidebar-brand-text mx-3"> 
        <a href= "{{ route('lampiran.create') }}"><lord-icon src="https://cdn.lordicon.com/mrdiiocb.json" trigger="hover" style="width:50px;height:50px"></lord-icon> <p>Tambah Komponen</p></a>
    </div>

   
        

        <br>
        <br>

        <div class="row">
        @foreach($lampiran as $key => $value)
            <div class="col-md-4">   
            <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
            
            <lord-icon
                    src="https://cdn.lordicon.com/bbnkwdur.json"
                    trigger="morph"
                    style="width:100px;height:100px">
            </lord-icon>
            <a href="/image/{{ $value->filename }}" target="_blank">{{ $value->filename }}</a>
            <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                            action="{{ route('lampiran.destroy', $value->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger shadow">Delete</button>
            </form>

            </div>
     
        @endforeach
        </div>
   <!-- {! $lampiran->links() !}-->

 


@endsection