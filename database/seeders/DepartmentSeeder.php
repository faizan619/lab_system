<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=1; $i <=8; $i++) {
            DB::table('departments')->insert([
                "department_name"=>fake()->unique()->randomElement(['coding','teaching','programming','medical','engineering','technical','accounts','cardiologist'])
            ]);
        }
    }
}
