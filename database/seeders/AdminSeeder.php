<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'nik' => '346781909334668',
            'nama' => 'Uus Galih Pratama',
            'jenis_kelamin' => 'Laki-laki',
            'tgl_lahir' => '1980-02-04',
            'alamat'=> 'Jambi',
            'no_telp' => '0893643764927',
            'user_id' => 2,
        ]);
        Admin::create([
            'nik' => '232438190957657',
            'nama' => 'Tia Dwi',
            'jenis_kelamin' => 'Perempuan',
            'tgl_lahir' => '1995-01-08',
            'alamat'=> 'Jambi',
            'no_telp' => '0854366587688',
            'user_id' => 3,
        ]);
    }
}
