<?php

namespace Database\Seeders;

use App\Models\Pasien;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Pasien::create([
            'no_rm' => 'RM-KP-1',
            'nama' => 'Khoirul',
            'jenis_kelamin' => 'Laki-laki',
            'tgl_lahir' => '2000/01/01',
            'alamat' => 'Tanjung Jabung Barat',
            'no_telp' => '086543267837',
            'nama_kk' => 'Khoirul'
        ]);
        
        
        Pasien::create([
            'no_rm' => 'RM-KP-2',
            'nama' => 'Hani',
            'jenis_kelamin' => 'Perempuan',
            'tgl_lahir' => '2001/01/01',
            'alamat' => 'Bungo',
            'no_telp' => '083456784546',
            'nama_kk' => 'Hani',
        ]);
        Pasien::create([
            'no_rm' => 'RM-KP-3',
            'nama' => 'Ozy',
            'jenis_kelamin' => 'Laki-laki',
            'tgl_lahir' => '2001/02/01',
            'alamat' => 'Kerinci',
            'no_telp' => '088765473876',
            'nama_kk' => 'Ozy'
        ]);
        Pasien::create([
            'no_rm' => 'RM-KP-4',
            'nama' => 'Ica',
            'jenis_kelamin' => 'Perempuan',
            'tgl_lahir' => '2001/01/02',
            'alamat' => 'Jambi',
            'no_telp' => '089875432678',
            'nama_kk' => 'Ica'
        ]);
    }
}
