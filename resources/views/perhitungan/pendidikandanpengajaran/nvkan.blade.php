<form method="POST" action="{{route('unsurpdp.store')}}" enctype="multipart/form-data" >
    @csrf
    <div class="form-group ">
        <label for="keterangan">Jenis Pelaksanaan</label>
        <select class="form-control" id="idkomponen" name="idkomponen">
            @foreach ($pelaksanaanpdps as $p)
                <option value="{{$p->id}}" title="{{$p->jenispelaksanaan}}">{{Str::limit($p->jenispelaksanaan,100)}}</option>
            @endforeach
        </select>
    </div>
    <input type="text" id="idPerhitungan" name="idPerhitungan" value="{{$id}}" hidden>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>


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
    <div class="form-group row">
        <div class="col-md">
            <label for="score" class="form-label">score</label>
            <select class="form-control" id="komponen" name="komponen">
                @foreach ($komponens as $komponen)
                    <option value="{{ $komponen->id }}">{{ $komponen->komponen }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md">
            <label for="sks">SKS</label>
            <input type="text" class="form-control" id="sks" name="sks">
        </div>
        <div class="col-md">
            <label for="angkaKredit">Angka Kredit</label>
            <input type="number" class="form-control" id="angkaKredit" name="angkaKredit">
        </div>
        <div class="col-md">
            <label for="volumeDosen">Volume Dosen</label>
            <input type="number" class="form-control" id="volumeDosen" name="volumeDosen">
        </div>
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