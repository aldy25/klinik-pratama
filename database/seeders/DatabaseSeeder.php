<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'email' => 'dedycorbuzier@gmail.com',
            'level_id' => 1,
            'password' => bcrypt('1234')
        ]);
        User::create([
            'email' => 'uusgalih@gmail.com',
            'level_id' => 2,
            'password' => bcrypt('1234')
        ]);
        User::create([
            'email' => 'tiadwi@gmail.com',
            'level_id' => 2,
            'password' => bcrypt('1234')
        ]);
        User::create([
            'email' => 'tretan@gmail.com',
            'level_id' => 4,
            'password' => bcrypt('1234')
        ]);
        User::create([
            'email' => 'dustin12@gmail.com',
            'level_id' => 4,
            'password' => bcrypt('1234')
        ]);
        User::create([
            'email' => 'jihanpratiwi@gmail.com',
            'level_id' => 3,
            'password' => bcrypt('1234')
        ]);
        User::create([
            'email' => 'andrepratama@gmail.com',
            'level_id' => 3,
            'password' => bcrypt('1234')
        ]);
        User::create([
            'email' => 'agusjunaidi@gmail.com',
            'level_id' => 3,
            'password' => bcrypt('1234')
        ]);
        User::create([
            'email' => 'zulaikhafitri@gmail.com',
            'level_id' => 3,
            'password' => bcrypt('1234')
        ]);
        User::create([
            'email' => 'gibranrakagalih@gmail.com',
            'level_id' => 3,
            'password' => bcrypt('1234')
        ]);

        $this->call([
            AdminSeeder::class,
            DokterSeeder::class,
            PasienSeeder::class,
            LayananSeeder::class,
            LevelSeeder::class,
            ObatSeeder::class,
            TenagaKesehatanSeeder::class,
            ApotekerSeeder::class,
            InventarisSeeder::class,
            LabSeeder::class,
        ]);
    }
}
