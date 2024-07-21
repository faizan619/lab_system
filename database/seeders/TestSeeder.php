<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 7; $i++) {

            DB::table("tests")->insert([
                "test_name" => $test_name = fake()->randomElement(["chest", "breast", "brain", "lungs", "nose", "teeth", "eyes", "legs", "finger", "tongue"]),
                "short_name" => $test_name,
                "tech_name" => $test_name,
                "test_price" => fake()->numberBetween(1000, 9999),
                "sub_dept_id" => $i,
                "center_id"=> $i,
            ]);
        }
    }
}
