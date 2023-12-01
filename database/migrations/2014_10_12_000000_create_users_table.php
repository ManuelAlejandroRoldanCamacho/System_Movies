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
        if (!Schema::hasTable('users')) {
            Schema::create('users', function (Blueprint $table) {
                $table->id('id');
                $table->string('user_first_name', 100)->nullable(false);
                $table->string('user_last_name', 100)->nullable(false);
                $table->string('email', 100)->nullable(false);
                $table->string('phone_number', 20)->nullable(false);
                $table->date('date_birth')->nullable(false);
                $table->string('password', 100)->nullable(false);
                $table->string('user_rol', 10)->nullable(false)->default('User');
                $table->string('user_photo', 100)->nullable()->default(null);
                $table->timestamps();
                $table->rememberToken();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
