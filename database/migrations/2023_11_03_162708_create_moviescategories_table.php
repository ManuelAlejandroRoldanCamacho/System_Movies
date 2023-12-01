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
        if (!Schema::hasTable('movies_categories')) {
            Schema::create('movies_categories', function (Blueprint $table) {
                $table->id('id_movies_categories');
                $table->unsignedBigInteger('id_movie')->nullable(false);
                $table->unsignedBigInteger('id_category')->nullable(false);
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies_categories');
    }
};
