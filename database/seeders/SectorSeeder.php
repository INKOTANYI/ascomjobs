<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectorSeeder extends Seeder
{
    public function run()
    {
        $sectors = [
            ['district_id' => 1, 'name' => 'Gikomero', 'code' => '01101'],
            ['district_id' => 1, 'name' => 'Jali', 'code' => '01102'],
            ['district_id' => 2, 'name' => 'Gahanga', 'code' => '01201'],
            ['district_id' => 3, 'name' => 'Nyakabanda', 'code' => '01301'],
            ['district_id' => 4, 'name' => 'Kabare', 'code' => '02101'],
            ['district_id' => 5, 'name' => 'Kizanye', 'code' => '02201'],
            ['district_id' => 6, 'name' => 'Cyeru', 'code' => '03101'],
            ['district_id' => 7, 'name' => 'Kinigi', 'code' => '03201'],
            ['district_id' => 8, 'name' => 'Bwishyura', 'code' => '04101'],
            ['district_id' => 9, 'name' => 'Gisenyi', 'code' => '04201'],
            ['district_id' => 10, 'name' => 'Huye', 'code' => '05101'],
            ['district_id' => 11, 'name' => 'Kaduha', 'code' => '05201'],
        ];

        DB::table('sectors')->insert($sectors);
    }
}
