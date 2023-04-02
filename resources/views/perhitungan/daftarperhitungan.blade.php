@extends('layouts.userhomepage')


@section('container2')



<div class = "card shadow mb-4">
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
                            @foreach($perhitungan as $key => $value)
                                <tr>
                                    <td>{{$value->judul }}</td>
                                    <td>{{$value->jabatan_pref }}</td>
                                    <td>{{$value->jabatan_next}}</td>
                                    <td>
                                        <a href= "{{ route('perhitungan.edit',$value->id)}}">
                                            <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
                                            <lord-icon
                                                src="https://cdn.lordicon.com/zncllhmn.json"
                                                trigger="hover"
                                                colors="primary:#c76f16"
                                                style="width:50px;height:50px">
                                            </lord-icon>
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
     {!! $perhitungan->links() !!}
    
    
    </div>

@endsection