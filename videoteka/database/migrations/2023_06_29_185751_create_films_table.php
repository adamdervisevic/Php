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
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(false);
            $table->smallInteger('year', false, true)->nullable(false);
<<<<<<<< HEAD:videoteka/database/migrations/2023_06_30_105138_create_films_table.php
            // $table->unsignedSmallInteger('year'); ovo je isto kao i prethodni red
            $table->smallInteger('running_h', false, true)->nullable(true);
            $table->smallInteger('running_m', false, true)->nullable(true);
            $table->decimal('rating', 3, 1, true)->nullable(true);
========
            $table->smallInteger('running_h', false, true)->nullable(true);
            $table->smallInteger('running_m', false, true)->nullable(true);
            $table->decimal('rating', 3, 1, true)->nullable(true);
            /*$table->unsignedSmallInteger('year');
            $table->smallInteger('year')->unsigned();*/
>>>>>>>> parent of 6c5980b (push):videoteka/database/migrations/2023_06_29_185751_create_films_table.php
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('films');
    }
};
