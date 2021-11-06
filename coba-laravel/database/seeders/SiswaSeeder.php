<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Query Builder
        DB::table('siswa')
        ->insert([
            [
            "nis" => "202101001",
            "jk" => "Sugeng",
            "jk" => "L",
            "alamat" => "Jalan j",
            "tmp_lahir" => "Situbondo",
            "tgl_lahir" => date_create(strtotime("2000-01-11")),
            "telepon" => "08812345",
            "id_jurusan" => 1,
            "nilai" => 80
            ]
        ]);
        // Eloquent
        Siswa::insert([
            [
            "nis" => "202101001",
            "jk" => "Sugeng",
            "jk" => "L",
            "alamat" => "Jalan j",
            "tmp_lahir" => "Situbondo",
            "tgl_lahir" => date_create(strtotime("2000-01-11")),
            "telepon" => "08812345",
            "id_jurusan" => 1,
            "nilai" => 80
            ]
            ]);
    }
}
