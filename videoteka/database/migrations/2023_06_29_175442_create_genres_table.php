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
        Schema::create('genres', function (Blueprint $table) {
           // $table->integer('id')->unsigned()->primary()->autoInceremet(); // moze i ovako
            $table->id();
            $table->string('name_en', 255)->nullable(false)->unique(); // ime broj duzine 255
            $table->string('name_sr', 255)->nullable(true)->unique(); // ime na srpskom
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('genres');
    }
};
