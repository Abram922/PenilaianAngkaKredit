
@extends('layouts.adminlayout')



@section('content1')

<form action="{{ route('komponenpak.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            

            <div class="mb-3">
                <label for="komponen_id" class="form-label">Komponen</label>
                <input type="text" class="form-control @error('komponen_id') is-invalid @enderror" name="komponen_id" id="komponen_id" autofocus value="{{old('komponen_id')}}">
                @error('komponen_id')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>


            <div class="mb-3">
                <label for="kategori" class="form-label">kategori</label>
                <input class="form-control @error('kategori') is-invalid @enderror" id="kategori" name="kategori">
                @error('kategori')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="batasmaxdiakui" class="form-label">batasmaxdiakui</label>
                <input type="text" class="form-control @error('batasmaxdiakui') is-invalid @enderror" name="batasmaxdiakui" id="batasmaxdiakui" autofocus value="{{old('batasmaxdiakui')}}">
                @error('batasmaxdiakui')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
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


            <button type="submit" class="btn btn-primary">Simpan</button>
</form>





@endsection





