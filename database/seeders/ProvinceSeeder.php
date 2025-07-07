<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvinceSeeder extends Seeder
{
    public function run()
    {
        $provinces = [
            ['name' => 'Kigali City', 'code' => '01'],
            ['name' => 'Eastern Province', 'code' => '02'],
            ['name' => 'Northern Province', 'code' => '03'],
            ['name' => 'Western Province', 'code' => '04'],
            ['name' => 'Southern Province', 'code' => '05'],
        ];

        DB::table('provinces')->insert($provinces);
    }
}
