<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {

            DB::table('users')->insert([
                ['user_first_name' => 'Marc', 'user_last_name' => 'Knight', 'email' => '123@gmail.com', 'phone_number' => 'xxxxxxxxx', 'date_birth' => '2000-02-25', 'password' => Hash::make('123'), 'user_rol' => 'Admin', 'user_photo' => null],
                ['user_first_name' => 'Joseph', 'user_last_name' => 'Ramos', 'email' => '1234@gmail.com', 'phone_number' => 'xxxxxxxxx', 'date_birth' => '2000-02-25', 'password' => Hash::make('123'), 'user_rol' => 'User', 'user_photo' => null]
            ]);
            //Contraseña para usuario y admin de prueba es "123"
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            DB::table('users')->truncate();
        });
    }
};
