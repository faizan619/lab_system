<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ParameterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=1; $i <=25; $i++) {
            DB::table('parameters')->insert([
                "test_id"=>fake()->numberBetween(1,5),
                "sub_test_name"=>fake()->randomElement(['homoglobin','complete blood test','paracyte','lobes','nostril','tongue tore','retina','cavity tongue','losoles','cover leg','first nose','second nose','last leg','no legs','test eye','full eye','headach','no pain','just gain','faturious','lasturios','control','no contol']),
                "unit"=>fake()->title(),
                "help_value"=>fake()->numberBetween(100,999),
                "normal"=>fake()->numberBetween(100,999),
                "min"=>fake()->numberBetween(100,500),
                "max"=>fake()->numberBetween(500,999),
                "decimal_point"=>fake()->randomElement(['.0','.00','.000','.0000']),
                "test_footer"=>fake()->paragraph(),
            ]);
        }
    }
}
