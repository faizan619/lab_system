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
            $table->string('user_card_no','20');
            $table->enum('title',['mr','mrs']);
            $table->string('fname','100');
            $table->string('mname','50');
            $table->string('lname','50');
            $table->date('dob');
            $table->integer('age');
            $table->enum('gender',['male','female']);
            $table->string('mobile1','15')->unique();
            $table->string('mobile2','15');
            $table->enum('blood_group',['A+','A-','B+','B-','AB+','AB-','O+','O-']);
            $table->string('email','50')->unique()->nullable();
            $table->string('area','50');
            $table->text('address');
            $table->date('register_date')->default(DB::raw('CURRENT_DATE'));
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
