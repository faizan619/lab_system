<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->enum('user_id_type',['aadhar','pan']);
            $table->string('user_card_no','20')->unique();
            $table->enum('title',['mr','mrs']);
            $table->string('fname','100');
            $table->string('mname','50')->nullable();
            $table->string('lname','50')->nullable();
            $table->date('dob');
            $table->integer('age');
            $table->enum('gender',['male','female']);
            $table->string('mobile1','20')->unique();
            $table->string('mobile2','15')->nullable();
            $table->enum('blood_group',['A+','A-','B+','B-','AB+','AB-','O+','O-']);
            $table->string('email','50')->unique()->nullable();
            $table->string('area','50');
            $table->text('address')->nullable();
            // $table->date('register_date')->default(DB::raw('CURRENT_DATE'));
            $table->date('register_date')->default(now());
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
