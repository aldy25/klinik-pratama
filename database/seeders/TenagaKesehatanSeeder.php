<?php

namespace Database\Seeders;

use App\Models\TenagaKesehatan;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TenagaKesehatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TenagaKesehatan::create([
            'nik' => '6571909334668',
            'nama' => 'Kiki Pratama',
            'jenis_kelamin' => 'Laki-laki',
            'tgl_lahir' => '1980-02-04',
            'alamat'=> 'Jambi',
            'no_telp' => '089365464927',
        ]);
        TenagaKesehatan::create([
            'nik' => '523450957655',
            'nama' => 'Dwi Ayu',
            'jenis_kelamin' => 'Perempuan',
            'tgl_lahir' => '1995-01-08',
            'alamat'=> 'Jambi',
            'no_telp' => '085454877686',
        ]);
    }
}
