<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
//User
        \App\Models\User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'is_admin' => true,
            'password' => bcrypt('12345678')
        ]);

        \App\Models\User::factory()->create([
            'name' => 'dosen',
            'email' => 'dosen@gmail.com',
            'is_admin' => false,
            'password' => bcrypt('12345678')
        ]);

// jabatan fungsional pref
        \App\Models\jabatan::create([
       
            'jabatan' => 'Asisten Ahli',
            'angkaKreditKumulatif' => 200 ,
            'pelaksanaanPendidikan' => 55 ,
            'pelaksanaanPenelitian' => 25 ,
            'pelaksanaanPengabdianMasyarakat' => 10 ,
            'penunjang'=> 10 
        ]);

        \App\Models\jabatan::create([
   
            'jabatan' => 'Lektor',
            'angkaKreditKumulatif' => 300 ,
            'pelaksanaanPendidikan' => 45 ,
            'pelaksanaanPenelitian' => 35 ,
            'pelaksanaanPengabdianMasyarakat' => 10 ,
            'penunjang'=> 10 
        ]);

        \App\Models\jabatan::create([
         
            'jabatan' => 'Lektor Kepala',
            'angkaKreditKumulatif' => 400 ,
            'pelaksanaanPendidikan' => 40 ,
            'pelaksanaanPenelitian' => 40 ,
            'pelaksanaanPengabdianMasyarakat' => 10 ,
            'penunjang'=> 10 
        ]);


        \App\Models\jabatan::create([

            'jabatan' => 'Professor',
            'angkaKreditKumulatif' => 700 ,
            'pelaksanaanPendidikan' => 35 ,
            'pelaksanaanPenelitian' => 45 ,
            'pelaksanaanPengabdianMasyarakat' => 10 ,
            'penunjang'=> 10 
        ]);



// jabatan kategori
        \App\Models\kategori::create([
            'user_id' => '1',
            'kategori' => 'Pendidikan dan Pengajaran',
        ]);
        \App\Models\kategori::create([
            'user_id' => '1',
            'kategori' => 'Penelitian',
        ]);
        \App\Models\kategori::create([
            'user_id' => '1',
            'kategori' => 'Pengabdian Masyarakat',
        ]);
        \App\Models\kategori::create([
            'user_id' => '1',
            'kategori' => 'Penunjang',
        ]);

        \App\Models\komponenPak::create([
            'user_id' => 1,
            'kategori_id' => 1,
            'komponen' => 'doctor',
            'batasmaxdiakui' => '1periode',
            'score' => 150
        ]);




     

        \App\Models\pelaksanaanpdp::create(
            [
                'jenispelaksanaan' => ' Melaksanakan perkuliahan Tutorial dan membimbing, Menguji serta menyelenggarakan pendidikan di laboratorium, praktek perguruan bengkel/studio, kebun percobaan, teknologi pengajaran dan praktek lapangan'
            ],
        );
        \App\Models\pelaksanaanpdp::create(
            [
                'jenispelaksanaan' => 'Membimbing seminar mahasiswa'
            ],
        );
        \App\Models\pelaksanaanpdp::create(
            [
                'jenispelaksanaan' => 'Membimbing Kuliah Kerja Nyata (KKN),Praktek Kerja Nyata (PKN),Praktek Kerja  Lapangan (PKL)'
            ],
        );
        \App\Models\pelaksanaanpdp::create(
            [
                'jenispelaksanaan' => 'Membimbing dan ikut Membimbing dalam menghasilkan laporan akhir tugas/skripsi/thesis/disertasi'
            ],
        );
        \App\Models\pelaksanaanpdp::create(
            [
                'jenispelaksanaan' => 'Bertugas sebagai penguji pada Ujian Akhir'
            ],
        );
        \App\Models\pelaksanaanpdp::create(
            [
                'jenispelaksanaan' => 'Bertugas sebagai penguji pada Ujian Akhir'
            ],
        );
        \App\Models\pelaksanaanpdp::create(
            [
                'jenispelaksanaan' => 'Membina kegiatan mahasiswa di Bidang akademi dan kemahasiswaan'
            ],
        );
        \App\Models\pelaksanaanpdp::create(
            [
                'jenispelaksanaan' => 'Mengembangkan program perkuliahan'
            ],
        );
        \App\Models\pelaksanaanpdp::create(
            [
                'jenispelaksanaan' => 'Mengembangkan bahan pengajaran'
            ],
        );
        \App\Models\pelaksanaanpdp::create(
            [
                'jenispelaksanaan' => 'Menyampaikan Orasi Ilmiah'
            ],
        );
        \App\Models\pelaksanaanpdp::create(
            [
                'jenispelaksanaan' => 'Menduduki jabatan pimpinan Perguruan Tinggi'
            ],
        );
        \App\Models\pelaksanaanpdp::create(
            [
                'jenispelaksanaan' => 'Membimbing Dosen yang lebih Rendah jabatan fungsionalnya'
            ],
        );
        \App\Models\pelaksanaanpdp::create(
            [
                'jenispelaksanaan' => 'Melaksanakan kegiatan datasering Dan pencangkokan Dosen'
            ],
        );
        \App\Models\pelaksanaanpdp::create(
            [
                'jenispelaksanaan' => 'Melaksanakan pengembangan diri untuk meningkatkan kompetensi'
            ],
        );






    }


//
}
