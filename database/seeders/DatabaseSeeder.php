<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // $this->call(RoleSeeder::class);
        $this->call([
            UserSeeder::class,
            CustomerSeeder::class,
            RefJenisLanggananSeeder::class,
            PelangganSeeder::class,
            TagihanSeeder::class
        ]);
    }
}
