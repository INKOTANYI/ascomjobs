<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder
{
    public function run()
    {
        $departments = [
            ['name' => 'Computer Science', 'code' => 'CS01', 'description' => 'Focus on software development and algorithms.'],
            ['name' => 'Computer Networking', 'code' => 'CN02', 'description' => 'Specialization in network infrastructure and security.'],
            ['name' => 'Finance', 'code' => 'FN03', 'description' => 'Management of financial systems and economics.'],
            ['name' => 'Electronics', 'code' => 'EL04', 'description' => 'Study of electronic circuits and devices.'],
            ['name' => 'Engineering', 'code' => 'EN05', 'description' => 'Broad field covering civil, mechanical, and electrical engineering.'],
            ['name' => 'Information Technology', 'code' => 'IT06', 'description' => 'Focus on IT services and systems management.'],
            ['name' => 'Business Administration', 'code' => 'BA07', 'description' => 'Management and organizational leadership skills.'],
            ['name' => 'Agriculture', 'code' => 'AG08', 'description' => 'Study of crop production and agricultural technology.'],
            ['name' => 'Health Sciences', 'code' => 'HS09', 'description' => 'Training in medical and healthcare practices.'],
            ['name' => 'Education', 'code' => 'ED10', 'description' => 'Preparation for teaching and educational development.'],
        ];

        DB::table('departments')->insert($departments);
    }
}
