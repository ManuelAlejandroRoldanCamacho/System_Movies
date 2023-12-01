<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movies_Categories extends Model
{
    use HasFactory;

    protected $table = 'movies_categories';
    protected $primaryKey = 'id_movies_categories'; 
    //public $timestamps = false;

}
