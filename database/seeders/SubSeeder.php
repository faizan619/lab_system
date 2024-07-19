<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i < 9; $i++) {
            DB::table("subs")->insert([
                "sub_department_name"=>fake()->randomElement(["radiologist","python","maths","sonography","javascript","science","cardiologist","laravel","typescript"]),
                "dept_id"=>fake()->numberBetween(1,7)
            ]);
        }
    }
}
