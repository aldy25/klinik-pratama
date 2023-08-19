<?php

namespace Database\Seeders;

use App\Models\Obat;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ObatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Obat::create([
            'nama' => 'Amoxilin',
            'harga' => 12000,
            'satuan' => 'kaplet',
            'stok' => 100
        ]
        );
        Obat::create([
            'nama' => 'Acarbose',
            'harga' => 10000,
            'satuan' => 'kaplet',
            'stok' => 100
        ]
        );
        Obat::create([
            'nama' => 'Acetazolamide',
            'harga' => 15000,
            'satuan' => 'kaplet',
            'stok' => 100
        ]
        );
        Obat::create([
            'nama' => 'Acetylcysteine',
            'harga' => 12000,
            'satuan' => 'kaplet',
            'stok' => 100
        ]
        );
    }
}
