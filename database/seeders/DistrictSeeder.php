<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistrictSeeder extends Seeder
{
    public function run()
    {
        $districts = [
            ['province_id' => 1, 'name' => 'Gasabo', 'code' => '011'],
            ['province_id' => 1, 'name' => 'Kicukiro', 'code' => '012'],
            ['province_id' => 1, 'name' => 'Nyarugenge', 'code' => '013'],
            ['province_id' => 2, 'name' => 'Kayonza', 'code' => '021'],
            ['province_id' => 2, 'name' => 'Ngoma', 'code' => '022'],
            ['province_id' => 3, 'name' => 'Burera', 'code' => '031'],
            ['province_id' => 3, 'name' => 'Musanze', 'code' => '032'],
            ['province_id' => 4, 'name' => 'Karongi', 'code' => '041'],
            ['province_id' => 4, 'name' => 'Rubavu', 'code' => '042'],
            ['province_id' => 5, 'name' => 'Huye', 'code' => '051'],
            ['province_id' => 5, 'name' => 'Nyamagabe', 'code' => '052'],
        ];

        DB::table('districts')->insert($districts);
    }
}
