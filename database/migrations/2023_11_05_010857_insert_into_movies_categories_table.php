<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('movies_categories', function (Blueprint $table) {

            DB::table('movies_categories')->insert([

                ['id_movie' => 1, 'id_category' => 1],
                ['id_movie' => 2, 'id_category' => 1],
                ['id_movie' => 3, 'id_category' => 1],
                ['id_movie' => 4, 'id_category' => 9],
                ['id_movie' => 5, 'id_category' => 1],
                ['id_movie' => 6, 'id_category' => 1],
                ['id_movie' => 7, 'id_category' => 1],
                ['id_movie' => 8, 'id_category' => 1],
                ['id_movie' => 9, 'id_category' => 2],
                ['id_movie' => 10, 'id_category' => 1],
                ['id_movie' => 11, 'id_category' => 1],
                ['id_movie' => 12, 'id_category' => 1],
                ['id_movie' => 13, 'id_category' => 2],
                ['id_movie' => 14, 'id_category' => 2],
                ['id_movie' => 15, 'id_category' => 1],
                ['id_movie' => 16, 'id_category' => 1],
                ['id_movie' => 17, 'id_category' => 1],
                ['id_movie' => 18, 'id_category' => 1],
                ['id_movie' => 19, 'id_category' => 1],
                ['id_movie' => 20, 'id_category' => 1],
                ['id_movie' => 21, 'id_category' => 2],
                ['id_movie' => 22, 'id_category' => 2],
                ['id_movie' => 23, 'id_category' => 2],
                ['id_movie' => 24, 'id_category' => 1],
                ['id_movie' => 25, 'id_category' => 1],
                ['id_movie' => 26, 'id_category' => 2],
                ['id_movie' => 27, 'id_category' => 1],
                ['id_movie' => 28, 'id_category' => 1],
                ['id_movie' => 29, 'id_category' => 1],
                ['id_movie' => 30, 'id_category' => 1],
                ['id_movie' => 31, 'id_category' => 1],
                ['id_movie' => 32, 'id_category' => 1],
                ['id_movie' => 33, 'id_category' => 1],
                ['id_movie' => 34, 'id_category' => 1],
                ['id_movie' => 35, 'id_category' => 1],
                ['id_movie' => 36, 'id_category' => 1],
                ['id_movie' => 37, 'id_category' => 1],
                ['id_movie' => 38, 'id_category' => 6],
                ['id_movie' => 39, 'id_category' => 2],
                ['id_movie' => 40, 'id_category' => 2],
                ['id_movie' => 41, 'id_category' => 1],
                ['id_movie' => 42, 'id_category' => 1],
                ['id_movie' => 43, 'id_category' => 2],
                ['id_movie' => 44, 'id_category' => 1],
                ['id_movie' => 45, 'id_category' => 2],
                ['id_movie' => 46, 'id_category' => 2],
                ['id_movie' => 47, 'id_category' => 1],
                ['id_movie' => 48, 'id_category' => 1],
                ['id_movie' => 49, 'id_category' => 2],
                ['id_movie' => 50, 'id_category' => 2],
                ['id_movie' => 51, 'id_category' => 2],
                ['id_movie' => 52, 'id_category' => 1],
                ['id_movie' => 53, 'id_category' => 1],
                ['id_movie' => 54, 'id_category' => 1],
                ['id_movie' => 55, 'id_category' => 1],
                ['id_movie' => 56, 'id_category' => 2],
                ['id_movie' => 57, 'id_category' => 2],
                ['id_movie' => 58, 'id_category' => 2],
                ['id_movie' => 59, 'id_category' => 2],
                ['id_movie' => 60, 'id_category' => 1],
                ['id_movie' => 61, 'id_category' => 1],
                ['id_movie' => 62, 'id_category' => 1],
                ['id_movie' => 63, 'id_category' => 1],
                ['id_movie' => 64, 'id_category' => 1],
                ['id_movie' => 65, 'id_category' => 2],
                ['id_movie' => 66, 'id_category' => 2],
                ['id_movie' => 67, 'id_category' => 1],
                ['id_movie' => 68, 'id_category' => 2],
                ['id_movie' => 69, 'id_category' => 2],
                ['id_movie' => 70, 'id_category' => 2],
                ['id_movie' => 71, 'id_category' => 4],
                ['id_movie' => 72, 'id_category' => 4],
                ['id_movie' => 73, 'id_category' => 1],
                ['id_movie' => 74, 'id_category' => 2],
                ['id_movie' => 75, 'id_category' => 1],
                ['id_movie' => 76, 'id_category' => 2],
                ['id_movie' => 77, 'id_category' => 2],
                ['id_movie' => 78, 'id_category' => 1],
                ['id_movie' => 79, 'id_category' => 1],
                ['id_movie' => 80, 'id_category' => 2],
                ['id_movie' => 81, 'id_category' => 1],
                ['id_movie' => 82, 'id_category' => 1],
                ['id_movie' => 83, 'id_category' => 1],
                ['id_movie' => 84, 'id_category' => 1],
                ['id_movie' => 85, 'id_category' => 1],
                ['id_movie' => 86, 'id_category' => 1],
                ['id_movie' => 87, 'id_category' => 2],
                ['id_movie' => 88, 'id_category' => 1],
                ['id_movie' => 89, 'id_category' => 1],
                ['id_movie' => 90, 'id_category' => 2],
                ['id_movie' => 91, 'id_category' => 2],
                ['id_movie' => 92, 'id_category' => 1],
                ['id_movie' => 93, 'id_category' => 1],
                ['id_movie' => 94, 'id_category' => 1],
                ['id_movie' => 95, 'id_category' => 1],
                ['id_movie' => 96, 'id_category' => 1],
                ['id_movie' => 97, 'id_category' => 1],
                ['id_movie' => 98, 'id_category' => 1],
                ['id_movie' => 99, 'id_category' => 2],
                ['id_movie' => 100, 'id_category' => 2],
                ['id_movie' => 1, 'id_category' => 2],
                ['id_movie' => 2, 'id_category' => 2],
                ['id_movie' => 3, 'id_category' => 2],
                ['id_movie' => 4, 'id_category' => 16],
                ['id_movie' => 5, 'id_category' => 2],
                ['id_movie' => 6, 'id_category' => 2],
                ['id_movie' => 7, 'id_category' => 2],
                ['id_movie' => 8, 'id_category' => 2],
                ['id_movie' => 9, 'id_category' => 9],
                ['id_movie' => 10, 'id_category' => 7],
                ['id_movie' => 11, 'id_category' => 6],
                ['id_movie' => 12, 'id_category' => 6],
                ['id_movie' => 13, 'id_category' => 3],
                ['id_movie' => 14, 'id_category' => 3],
                ['id_movie' => 15, 'id_category' => 2],
                ['id_movie' => 16, 'id_category' => 2],
                ['id_movie' => 17, 'id_category' => 2],
                ['id_movie' => 18, 'id_category' => 2],
                ['id_movie' => 19, 'id_category' => 2],
                ['id_movie' => 20, 'id_category' => 2],
                ['id_movie' => 21, 'id_category' => 3],
                ['id_movie' => 22, 'id_category' => 10],
                ['id_movie' => 23, 'id_category' => 10],
                ['id_movie' => 24, 'id_category' => 6],
                ['id_movie' => 25, 'id_category' => 2],
                ['id_movie' => 26, 'id_category' => 3],
                ['id_movie' => 27, 'id_category' => 7],
                ['id_movie' => 28, 'id_category' => 7],
                ['id_movie' => 29, 'id_category' => 2],
                ['id_movie' => 30, 'id_category' => 2],
                ['id_movie' => 31, 'id_category' => 2],
                ['id_movie' => 32, 'id_category' => 2],
                ['id_movie' => 33, 'id_category' => 2],
                ['id_movie' => 34, 'id_category' => 2],
                ['id_movie' => 35, 'id_category' => 2],
                ['id_movie' => 36, 'id_category' => 9],
                ['id_movie' => 37, 'id_category' => 2],
                ['id_movie' => 38, 'id_category' => 9],
                ['id_movie' => 39, 'id_category' => 3],
                ['id_movie' => 40, 'id_category' => 3],
                ['id_movie' => 41, 'id_category' => 2],
                ['id_movie' => 42, 'id_category' => 2],
                ['id_movie' => 43, 'id_category' => 5],
                ['id_movie' => 44, 'id_category' => 2],
                ['id_movie' => 45, 'id_category' => 3],
                ['id_movie' => 46, 'id_category' => 3],
                ['id_movie' => 47, 'id_category' => 2],
                ['id_movie' => 48, 'id_category' => 2],
                ['id_movie' => 49, 'id_category' => 10],
                ['id_movie' => 50, 'id_category' => 10],
                ['id_movie' => 51, 'id_category' => 10],
                ['id_movie' => 52, 'id_category' => 6],
                ['id_movie' => 53, 'id_category' => 6],
                ['id_movie' => 54, 'id_category' => 2],
                ['id_movie' => 55, 'id_category' => 2],
                ['id_movie' => 56, 'id_category' => 3],
                ['id_movie' => 57, 'id_category' => 3],
                ['id_movie' => 58, 'id_category' => 9],
                ['id_movie' => 59, 'id_category' => 9],
                ['id_movie' => 60, 'id_category' => 2],
                ['id_movie' => 61, 'id_category' => 2],
                ['id_movie' => 62, 'id_category' => 2],
                ['id_movie' => 63, 'id_category' => 2],
                ['id_movie' => 64, 'id_category' => 2],
                ['id_movie' => 65, 'id_category' => 3],
                ['id_movie' => 66, 'id_category' => 3],
                ['id_movie' => 67, 'id_category' => 2],
                ['id_movie' => 68, 'id_category' => 3],
                ['id_movie' => 69, 'id_category' => 3],
                ['id_movie' => 70, 'id_category' => 10],
                ['id_movie' => 71, 'id_category' => 9],
                ['id_movie' => 72, 'id_category' => 9],
                ['id_movie' => 73, 'id_category' => 2],
                ['id_movie' => 74, 'id_category' => 10],
                ['id_movie' => 75, 'id_category' => 2],
                ['id_movie' => 76, 'id_category' => 3],
                ['id_movie' => 77, 'id_category' => 3],
                ['id_movie' => 78, 'id_category' => 2],
                ['id_movie' => 79, 'id_category' => 2],
                ['id_movie' => 80, 'id_category' => 3],
                ['id_movie' => 81, 'id_category' => 2],
                ['id_movie' => 82, 'id_category' => 2],
                ['id_movie' => 83, 'id_category' => 2],
                ['id_movie' => 84, 'id_category' => 2],
                ['id_movie' => 85, 'id_category' => 2],
                ['id_movie' => 86, 'id_category' => 2],
                ['id_movie' => 87, 'id_category' => 3],
                ['id_movie' => 88, 'id_category' => 2],
                ['id_movie' => 89, 'id_category' => 2],
                ['id_movie' => 90, 'id_category' => 9],
                ['id_movie' => 91, 'id_category' => 9],
                ['id_movie' => 92, 'id_category' => 2],
                ['id_movie' => 93, 'id_category' => 2],
                ['id_movie' => 94, 'id_category' => 2],
                ['id_movie' => 95, 'id_category' => 2],
                ['id_movie' => 96, 'id_category' => 2],
                ['id_movie' => 97, 'id_category' => 2],
                ['id_movie' => 98, 'id_category' => 2],
                ['id_movie' => 99, 'id_category' => 10],
                ['id_movie' => 100, 'id_category' => 3],
                ['id_movie' => 1, 'id_category' => 11],
                ['id_movie' => 2, 'id_category' => 9],
                ['id_movie' => 3, 'id_category' => 9],
                ['id_movie' => 5, 'id_category' => 7],
                ['id_movie' => 6, 'id_category' => 7],
                ['id_movie' => 7, 'id_category' => 7],
                ['id_movie' => 8, 'id_category' => 7],
                ['id_movie' => 9, 'id_category' => 10],
                ['id_movie' => 11, 'id_category' => 17],
                ['id_movie' => 12, 'id_category' => 17],
                ['id_movie' => 13, 'id_category' => 5],
                ['id_movie' => 14, 'id_category' => 5],
                ['id_movie' => 15, 'id_category' => 7],
                ['id_movie' => 16, 'id_category' => 7],
                ['id_movie' => 17, 'id_category' => 7],
                ['id_movie' => 18, 'id_category' => 7],
                ['id_movie' => 19, 'id_category' => 11],
                ['id_movie' => 20, 'id_category' => 7],
                ['id_movie' => 21, 'id_category' => 5],
                ['id_movie' => 22, 'id_category' => 11],
                ['id_movie' => 23, 'id_category' => 11],
                ['id_movie' => 24, 'id_category' => 17],
                ['id_movie' => 25, 'id_category' => 7],
                ['id_movie' => 26, 'id_category' => 5],
                ['id_movie' => 29, 'id_category' => 9],
                ['id_movie' => 30, 'id_category' => 17],
                ['id_movie' => 31, 'id_category' => 5],
                ['id_movie' => 32, 'id_category' => 7],
                ['id_movie' => 33, 'id_category' => 7],
                ['id_movie' => 34, 'id_category' => 7],
                ['id_movie' => 35, 'id_category' => 7],
                ['id_movie' => 36, 'id_category' => 17],
                ['id_movie' => 37, 'id_category' => 11],
                ['id_movie' => 38, 'id_category' => 17],
                ['id_movie' => 39, 'id_category' => 5],
                ['id_movie' => 40, 'id_category' => 5],
                ['id_movie' => 41, 'id_category' => 11],
                ['id_movie' => 42, 'id_category' => 7],
                ['id_movie' => 43, 'id_category' => 10],
                ['id_movie' => 44, 'id_category' => 11],
                ['id_movie' => 45, 'id_category' => 5],
                ['id_movie' => 46, 'id_category' => 5],
                ['id_movie' => 47, 'id_category' => 11],
                ['id_movie' => 48, 'id_category' => 11],
                ['id_movie' => 49, 'id_category' => 11],
                ['id_movie' => 50, 'id_category' => 11],
                ['id_movie' => 51, 'id_category' => 11],
                ['id_movie' => 52, 'id_category' => 9],
                ['id_movie' => 53, 'id_category' => 9],
                ['id_movie' => 54, 'id_category' => 5],
                ['id_movie' => 55, 'id_category' => 5],
                ['id_movie' => 56, 'id_category' => 5],
                ['id_movie' => 57, 'id_category' => 9],
                ['id_movie' => 58, 'id_category' => 10],
                ['id_movie' => 59, 'id_category' => 10],
                ['id_movie' => 60, 'id_category' => 11],
                ['id_movie' => 61, 'id_category' => 11],
                ['id_movie' => 62, 'id_category' => 11],
                ['id_movie' => 63, 'id_category' => 9],
                ['id_movie' => 64, 'id_category' => 10],
                ['id_movie' => 65, 'id_category' => 5],
                ['id_movie' => 66, 'id_category' => 5],
                ['id_movie' => 67, 'id_category' => 10],
                ['id_movie' => 68, 'id_category' => 5],
                ['id_movie' => 69, 'id_category' => 5],
                ['id_movie' => 70, 'id_category' => 11],
                ['id_movie' => 71, 'id_category' => 14],
                ['id_movie' => 72, 'id_category' => 14],
                ['id_movie' => 73, 'id_category' => 9],
                ['id_movie' => 74, 'id_category' => 11],
                ['id_movie' => 75, 'id_category' => 7],
                ['id_movie' => 76, 'id_category' => 5],
                ['id_movie' => 77, 'id_category' => 5],
                ['id_movie' => 78, 'id_category' => 17],
                ['id_movie' => 79, 'id_category' => 7],
                ['id_movie' => 80, 'id_category' => 5],
                ['id_movie' => 81, 'id_category' => 7],
                ['id_movie' => 82, 'id_category' => 9],
                ['id_movie' => 83, 'id_category' => 11],
                ['id_movie' => 84, 'id_category' => 7],
                ['id_movie' => 85, 'id_category' => 5],
                ['id_movie' => 86, 'id_category' => 5],
                ['id_movie' => 87, 'id_category' => 5],
                ['id_movie' => 88, 'id_category' => 7],
                ['id_movie' => 89, 'id_category' => 5],
                ['id_movie' => 90, 'id_category' => 11],
                ['id_movie' => 91, 'id_category' => 11],
                ['id_movie' => 92, 'id_category' => 7],
                ['id_movie' => 93, 'id_category' => 7],
                ['id_movie' => 94, 'id_category' => 7],
                ['id_movie' => 95, 'id_category' => 11],
                ['id_movie' => 96, 'id_category' => 11],
                ['id_movie' => 97, 'id_category' => 7],
                ['id_movie' => 98, 'id_category' => 7],
                ['id_movie' => 99, 'id_category' => 11],
                ['id_movie' => 100, 'id_category' => 5],
                ['id_movie' => 1, 'id_category' => 7],
                ['id_movie' => 2, 'id_category' => 7],
                ['id_movie' => 3, 'id_category' => 7],
                ['id_movie' => 9, 'id_category' => 14],
                ['id_movie' => 13, 'id_category' => 9],
                ['id_movie' => 14, 'id_category' => 9],
                ['id_movie' => 19, 'id_category' => 7],
                ['id_movie' => 21, 'id_category' => 10],
                ['id_movie' => 22, 'id_category' => 14],
                ['id_movie' => 23, 'id_category' => 14],
                ['id_movie' => 26, 'id_category' => 6],
                ['id_movie' => 29, 'id_category' => 11],
                ['id_movie' => 31, 'id_category' => 7],
                ['id_movie' => 34, 'id_category' => 17],
                ['id_movie' => 37, 'id_category' => 7],
                ['id_movie' => 39, 'id_category' => 10],
                ['id_movie' => 40, 'id_category' => 10],
                ['id_movie' => 43, 'id_category' => 11],
                ['id_movie' => 45, 'id_category' => 6],
                ['id_movie' => 46, 'id_category' => 6],
                ['id_movie' => 47, 'id_category' => 7],
                ['id_movie' => 48, 'id_category' => 7],
                ['id_movie' => 49, 'id_category' => 13],
                ['id_movie' => 52, 'id_category' => 17],
                ['id_movie' => 53, 'id_category' => 17],
                ['id_movie' => 54, 'id_category' => 11],
                ['id_movie' => 55, 'id_category' => 11],
                ['id_movie' => 56, 'id_category' => 6],
                ['id_movie' => 57, 'id_category' => 10],
                ['id_movie' => 58, 'id_category' => 11],
                ['id_movie' => 59, 'id_category' => 11],
                ['id_movie' => 63, 'id_category' => 11],
                ['id_movie' => 64, 'id_category' => 11],
                ['id_movie' => 65, 'id_category' => 10],
                ['id_movie' => 66, 'id_category' => 10],
                ['id_movie' => 67, 'id_category' => 11],
                ['id_movie' => 68, 'id_category' => 10],
                ['id_movie' => 69, 'id_category' => 10],
                ['id_movie' => 70, 'id_category' => 13],
                ['id_movie' => 73, 'id_category' => 11],
                ['id_movie' => 74, 'id_category' => 13],
                ['id_movie' => 76, 'id_category' => 10],
                ['id_movie' => 77, 'id_category' => 10],
                ['id_movie' => 80, 'id_category' => 10],
                ['id_movie' => 82, 'id_category' => 17],
                ['id_movie' => 83, 'id_category' => 7],
                ['id_movie' => 84, 'id_category' => 17],
                ['id_movie' => 85, 'id_category' => 7],
                ['id_movie' => 86, 'id_category' => 7],
                ['id_movie' => 87, 'id_category' => 9],
                ['id_movie' => 89, 'id_category' => 11],
                ['id_movie' => 90, 'id_category' => 16],
                ['id_movie' => 91, 'id_category' => 16],
                ['id_movie' => 92, 'id_category' => 17],
                ['id_movie' => 95, 'id_category' => 7],
                ['id_movie' => 96, 'id_category' => 7],
                ['id_movie' => 100, 'id_category' => 10],
                ['id_movie' => 13, 'id_category' => 10],
                ['id_movie' => 14, 'id_category' => 10],
                ['id_movie' => 21, 'id_category' => 11],
                ['id_movie' => 22, 'id_category' => 16],
                ['id_movie' => 23, 'id_category' => 16],
                ['id_movie' => 26, 'id_category' => 10],
                ['id_movie' => 39, 'id_category' => 11],
                ['id_movie' => 40, 'id_category' => 11],
                ['id_movie' => 43, 'id_category' => 14],
                ['id_movie' => 45, 'id_category' => 10],
                ['id_movie' => 46, 'id_category' => 10],
                ['id_movie' => 56, 'id_category' => 10],
                ['id_movie' => 57, 'id_category' => 14],
                ['id_movie' => 64, 'id_category' => 13],
                ['id_movie' => 67, 'id_category' => 13],
                ['id_movie' => 68, 'id_category' => 11],
                ['id_movie' => 69, 'id_category' => 11],
                ['id_movie' => 82, 'id_category' => 18],
                ['id_movie' => 87, 'id_category' => 10],
                ['id_movie' => 89, 'id_category' => 7],
                ['id_movie' => 95, 'id_category' => 18],
                ['id_movie' => 96, 'id_category' => 18],
                ['id_movie' => 100, 'id_category' => 11],
                ['id_movie' => 13, 'id_category' => 11],
                ['id_movie' => 14, 'id_category' => 11],
                ['id_movie' => 21, 'id_category' => 14],
                ['id_movie' => 26, 'id_category' => 7],
                ['id_movie' => 43, 'id_category' => 16],
                ['id_movie' => 45, 'id_category' => 7],
                ['id_movie' => 46, 'id_category' => 7],
                ['id_movie' => 56, 'id_category' => 7],
                ['id_movie' => 68, 'id_category' => 16],
                ['id_movie' => 69, 'id_category' => 16],
                ['id_movie' => 87, 'id_category' => 11],
                ['id_movie' => 100, 'id_category' => 16],
                ['id_movie' => 13, 'id_category' => 14],
                ['id_movie' => 14, 'id_category' => 14],

            ]);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('movies_categories', function (Blueprint $table) {
            DB::table('movies_categories')->truncate();
        });
    }
};