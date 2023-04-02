
@extends('layouts.userhomepage')



@section('container2')


<div class="container">

<div class="card mt-5 d-flex justify-content-center">
    <div class="card-header text-center">
        <strong>TAMBAH LAMPIRAN</strong>
    </div>

    {{-- card body --}}
    <div class="card-body">

        <form action="{{ route('lampiran.store') }}" method="POST" enctype="multipart/form-data">
            @csrf


            <div class="mb-3">
                <label for="filename" class="form-label">filename</label>
                <input class="form-control @error('filename') is-invalid @enderror" type="file" id="filename" name="filename">
                @error('filename')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>


           
            <div class="form-group mt-2 ">
                <button type="submit" class="btn btn-success">Simpan</button>
            </div>
        </form>

    </div>
</div>
</div>

@endsection

