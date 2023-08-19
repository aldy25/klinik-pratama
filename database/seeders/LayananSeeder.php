<?php

namespace Database\Seeders;

use App\Models\Layanan;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Layanan::create([
            'nama' => 'Berobat',
            'harga' => 50000
        ]);
        Layanan::create([
            'nama' => 'Tindik Telinga',
            'harga' => 50000
        ]);
        Layanan::create([
            'nama' => 'Nebulizer',
            'harga' => 60000
        ]);
        Layanan::create([
            'nama' => 'Suntik Vitamin',
            'harga' => 20000
        ]);
        Layanan::create([
            'nama' => 'Pencabutan Kuku',
            'harga' => 100000
        ]);
        Layanan::create([
            'nama' => 'Sunat Anak Perempuan',
            'harga' => 100000
        ]);
        Layanan::create([
            'nama' => 'Sunat Laser Laki-laki',
            'harga' => 600000
        ]);
        Layanan::create([
            'nama' => 'Sunat Biasa Laki-laki',
            'harga' => 500000
        ]);
        Layanan::create([
            'nama' => 'Sunat Dengan Klem Laki-laki',
            'harga' => 1200000
        ]);
        Layanan::create([
            'nama'=> 'Suntik KB 1 bulan, 3 Bulan',
            'harga' => 20000
        ]);
        Layanan::create([
            'nama' => 'GAnti Perban / Perban Luka',
            'harga' => 20000
        ]);
        Layanan::create([
            'nama' => 'Pembersihan Luka Tusu Tanpa Jahitan',
            'harga' => 100000
        ]);
        Layanan::create([
            'nama' => 'Jahitan Luka 1 (Satu) + Bius',
            'harga' => 50000
        ]);
    }
}
