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
            $table->id();
<<<<<<<< HEAD:videoteka/database/migrations/2023_06_29_175423_create_genres_table.php
            $table->string('name_en', 255)->nullable(false)->unique();
            $table->string('name_sr', 255)->nullable(true)->unique();
========
            $table->string('name_en')->nullable(false)->unique();
            $table->string('name_sr')->nullable(true)->unique();
>>>>>>>> parent of 6c5980b (push):videoteka/database/migrations/2023_06_29_175431_create_genres_table.php
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
