<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
<<<<<<<< HEAD:videoteka/database/migrations/2023_06_30_130951_create_film_writer_table.php
        Schema::create('film_writer', function (Blueprint $table) {
            $table->unsignedBigInteger('film_id')->nullable(true);
            $table->unsignedBigInteger('person_id')->nullable(true);
 
         
            $table->primary(['film_id', 'person_id'], 'film_writer_pk');
 
            $table->foreign('film_id', 'film_writer_film_fk')->references('id')->on('films')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('person_id', 'film_writer_person_fk')->references('id')->on('people')->onUpdate('cascade')->onDelete('no action');
 
         });
========
        Schema::create('film_director', function (Blueprint $table) {
            $table->unsignedBigInteger('film_id')->nullable(true);
            $table->unsignedBigInteger('person_id')->nullable(true);

            $table->primary(['film_id', 'person_id'], 'film_person_pk');

            $table->foreign('film_id', 'film_person_film_fk')->references('id')->on('films')
                ->onUpdate('cascade')->onDelete('no action');

            $table->foreign('person_id', 'film_person_person_fk')->references('id')->on('people')
                ->onUpdate('cascade')->onDelete('no action');
        });
>>>>>>>> parent of 6c5980b (push):videoteka/database/migrations/2023_06_30_143800_create_film_director_table.php
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('film_writer');
    }
};