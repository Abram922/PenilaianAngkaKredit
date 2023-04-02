
@extends('layouts.adminlayout')



@section('container')

        <form action="{{ route('komponenpak.update',$komponenpak->id) }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}
                <div class="mb-3">
                    <label for="komponen" class="form-label">Komponen</label>
                    <input type="text" class="form-control @error('komponen') is-invalid @enderror" name="komponen" id="komponen" autofocus value="{{old('komponen', $komponenpak->komponen)}}">
                    @error('komponen')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>


                <div class="mb-3">
                    <label for="kategori_id" class="form-label">kategori</label>
                    <input class="form-control @error('kategori_id') is-invalid @enderror" id="kategori_id" name="kategori_id" id="komponen" autofocus value="{{old('komponen', $komponenpak->kategori_id)}}">
                    @error('kategori_id')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                


                <div class="mb-3">
                    <label for="score" class="form-label">score</label>
                    <input class="form-control @error('score') is-invalid @enderror" id="score" name="score" id="komponen" autofocus value="{{old('komponen', $komponenpak->score)}}">
                    @error('score')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="batasmaxdiakui" class="form-label">batasmaxdiakui</label>
                    <input type="text" class="form-control @error('batasmaxdiakui') is-invalid @enderror" name="batasmaxdiakui" id="batasmaxdiakui" autofocus id="komponen" autofocus value="{{old('komponen', $komponenpak->batasmaxdiakui)}}">
                    @error('batasmaxdiakui')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>


            <button type="submit" class="btn btn-success">Update</button>
        </form>





@endsection





