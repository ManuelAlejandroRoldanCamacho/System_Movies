<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    //protected $table = 't_movies';
    protected $primaryKey = 'id_movie'; 
    //public $timestamps = false;

}
