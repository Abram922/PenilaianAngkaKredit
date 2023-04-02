
@extends('layouts.adminlayout')

@section('container')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Development Approach</h6>
    </div>
    <div class="card-body">
    <form action="{{ route('komponenpak.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            

            <div class="mb-3">
                <label for="komponen" class="form-label">Komponen</label>
                <input type="text" class="form-control @error('komponen') is-invalid @enderror" name="komponen" id="komponen" autofocus value="{{old('komponen')}}">
                @error('komponen')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>


            <div class="mb-3">
                <label for="kategori_id" class="form-label">Kategori</label>
                <select class="form-control" id="kategori_id" name="kategori_id">
                    @foreach ($kategoris as $kategori)
                        <option value="{{ $kategori->kategori_id }}">{{ $kategori->kategori }}</option>
                    @endforeach
                </select>
            </div>

            
            <div class="mb-3">
                <label for="score" class="form-label">score</label>
                <input class="form-control @error('score') is-invalid @enderror" id="score" name="score">
                @error('score')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="batasmaxdiakui" class="form-label">Batas Maksimal Diakui</label>
                <input type="text" class="form-control @error('batasmaxdiakui') is-invalid @enderror" name="batasmaxdiakui" id="batasmaxdiakui" autofocus value="{{old('batasmaxdiakui')}}">
                @error('batasmaxdiakui')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>


            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>

<div class = "card shadow mb-4">
<table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <td>Komponen</td>
                                <td>Kategori</td>
                                <td>Batas Maksimal Diakui</td>
                                <td>Score</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($komponenpak as $key => $value)
                            <tr>
                                <td>{{$value->komponen }}</td>
                                <td>{{$value->kategori->kategori }}</td>
                                <td>{{$value->batasmaxdiakui }}</td>
                                <td>{{$value->score }}</td>
                                <td>
                                    <a href= "{{ route('komponenpak.edit',$value->id)}}">
                                        <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
                                        <lord-icon
                                            src="https://cdn.lordicon.com/zncllhmn.json"
                                            trigger="hover"
                                            colors="primary:#c76f16"
                                            style="width:50px;height:50px">
                                        </lord-icon>
                                    </a>
                                        

                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                            action="{{ route('komponenpak.destroy', $value->id) }}" method="POST">
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
 {!! $komponenpak->links() !!}


</div>



        

@endsection









