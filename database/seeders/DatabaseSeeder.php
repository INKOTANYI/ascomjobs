<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            ProvinceSeeder::class,
            DistrictSeeder::class,
            SectorSeeder::class,
        ]);
    }
}
