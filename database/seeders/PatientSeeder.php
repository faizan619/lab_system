<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=1; $i <= 7; $i++) {

            DB::table('patients')->insert([
                "user_id_type"=>fake()->randomElement(['aadhar','pan']),
                "user_card_no"=>fake()->randomNumber(8,true),
                "title"=>fake()->randomElement(['mr','mrs']),
                "fname"=>fake()->unique()->randomElement(['rupesh','suman','vikas','aakash','abhay','shubham','ajay']),
                "mname"=>fake()->randomElement(['thakur','yadav','acharya']),
                "dob"=>fake()->date(),
                "age"=>fake()->numberBetween(18,32),
                "gender"=>fake()->randomElement(['male','female']),
                "mobile1"=>fake()->phoneNumber(),
                "blood_group"=>fake()->randomElement(['A+','A-','B+','B-','AB+','AB-','O+','O-']),
                "area"=>fake()->randomElement(['vasai','mira road','dharavi','shanti nagar','virar','naigaon','dahisar','surat'])
            ]);
        }
    }
}
