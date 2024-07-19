<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CenterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 7; $i++) {
            DB::table("centers")->insert([
                "center_name" => $center_name = fake()->unique()->randomElement(["vasai clinic", "mira road clinic", "virar clinic", "health care center", "yahoo center", "mahalaxmi center", "baba clinic"]),
                "center_short_name"=>$center_name,
                "center_mobile1"=>fake()->unique()->phoneNumber()
            ]);
        }
    }
}
