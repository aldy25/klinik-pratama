<?php

namespace Database\Seeders;

use App\Models\Apoteker;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ApotekerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Apoteker::create([
            'nik' => '5342789334668',
            'nama' => 'Tretan Aldo',
            'jenis_kelamin' => 'Laki-laki',
            'tgl_lahir' => '1980-02-04',
            'alamat'=> 'Jambi',
            'no_telp' => '089364532427',
            'user_id' => 4,
        ]);
        Apoteker::create([
            'nik' => '232435457657',
            'nama' => 'Dustin Hendra',
            'jenis_kelamin' => 'Laki-laki',
            'tgl_lahir' => '1995-01-08',
            'alamat'=> 'Jambi',
            'no_telp' => '082245646688',
            'user_id' => 5,
        ]);
    }
}
