<?php

namespace Database\Seeders;

use App\Models\Dokter;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DokterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Dokter::create([
            'nik' => '5438653827583464',
            'nama' => 'dr. Jihan Pratiwi',
            'jenis_kelamin' => 'Perempuan',
            'tgl_lahir' => '1990-02-04',
            'alamat'=> 'Jambi',
            'no_telp' => '0854358749287',
            'user_id' => 6,
        ]);
        Dokter::create([
            'nik' => '6450437583405395',
            'nama' => 'dr. Andre Pratama',
            'jenis_kelamin' => 'Laki-laki',
            'tgl_lahir' => '1985-05-09',
            'alamat'=> 'Mayang',
            'no_telp' => '0896328476264',
            'user_id' => 7,
        ]);
        Dokter::create([
            'nik' => '5741584295820695',
            'nama' => 'dr. Agus Junaide',
            'jenis_kelamin' => 'Laki-laki',
            'tgl_lahir' => '1990-07-06',
            'alamat'=> 'Sipin',
            'no_telp' => '0889473295432',
            'user_id' => 8,
        ]);
        Dokter::create([
            'nik' => '765904803986038',
            'nama' => 'dr. Zulaikha Fitri',
            'jenis_kelamin' => 'Perempuan',
            'tgl_lahir' => '1996-08-08',
            'alamat'=> 'Jambi',
            'no_telp' => '0858954783205',
            'user_id' => 9,
        ]);
        Dokter::create([
            'nik' => '5843593827583464',
            'nama' => 'dr. Gibran Raka Galih',
            'jenis_kelamin' => 'Laki-laki',
            'tgl_lahir' => '1995-07-07',
            'alamat'=> 'Sipin',
            'no_telp' => '0898450280609',
            'user_id' => 10,
        ]);
    }
}
