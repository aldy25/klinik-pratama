<?php

namespace Database\Seeders;
use App\Models\Inventaris;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InventarisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Inventaris::create([
            'nama' => 'Meja',
            'kondisi'=>'Baik',
            'keterangan' => '-',
        ]);

        Inventaris::create([
            'nama' => 'Baliho',
            'kondisi'=>'Rusak',
            'keterangan' => 'Tiang baliho patah',
        ]);
    }
}
