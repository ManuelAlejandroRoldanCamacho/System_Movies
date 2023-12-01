<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * 
     * 
     * Terminar estas migraciones
     */
    public function up(): void
    {
        if (!Schema::hasTable('movies')) {
            Schema::create('movies', function (Blueprint $table) {
                $table->id('id_movie');
                $table->string('title_movie', 100)->nullable(false);
                $table->string('description_movie', 300)->nullable(false);
                $table->date('release_date')->nullable(false);
                $table->string('duration', 20)->nullable(false);
                $table->string('image', 100)->nullable(false);
                $table->string('trailler', 100)->nullable(false);
                $table->double('calification', 2, 1)->nullable(false);
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movie');
    }
};
