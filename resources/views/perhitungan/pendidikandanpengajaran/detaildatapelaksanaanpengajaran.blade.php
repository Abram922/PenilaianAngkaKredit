@extends('layouts.userhomepage')

        
@section('container2')
<div class="col-md-10">
    <h3 class="mb-3">Aktifitas Perhitungan Angka Kredit </h3>


    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <td>No</td>
                <td>Keterangan Pelaksanaan</td>
                <td>Semester/Waktu</td>
                <td>Jumlah Dosen</td>
                <td>Jumlah Kelas</td>
                <td>Jumlah SKS</td>
                <td>Angka Kredit</td>
                <td>Bukti File</td>
                <td>Aksi</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <a href= "">
                        <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
                        <lord-icon
                            src="https://cdn.lordicon.com/zncllhmn.json"
                            trigger="hover"
                            colors="primary:#c76f16"
                            style="width:50px;height:50px">
                        </lord-icon>
                    </a>
                        

                        <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                            action="" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger shadow">Delete</button>
                        </form>
                    


                    <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>

                </td>
            </tr>
        </tbody>
    </table>
</div>


@endsection