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
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(false);
            $table->string('surname')->nullable(false);
<<<<<<<< HEAD:videoteka/database/migrations/2023_06_30_113344_create_people_table.php
            $table->date('b_date')->nullable(true);     
========
            $table->date('b_date')->nullable();
>>>>>>>> parent of 6c5980b (push):videoteka/database/migrations/2023_06_30_142510_create_people_table.php
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('people');
    }
};
