<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class pendaftaranseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('peserta')->insert([
        'nama'=>'Ucok',
        'konsentrasi'=>'Elektronika Industri',
        'nim'=> '200001',
        'judul'=> 'Coba coba',
        'jenis_acara'=>'STE'
        ]);
    }
}
