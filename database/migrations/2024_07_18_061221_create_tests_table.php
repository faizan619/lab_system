<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tests', function (Blueprint $table) {
            $table->id();
            $table->string('test_name',100);
            $table->string('short_name',100);
            $table->string('tech_name',100);
            $table->integer('test_price');
            $table->foreignId('sub_dept_id')->references('id')->on('subs')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('center_id')->references('id')->on('centers')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('seperate',10);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tests');
    }
};
