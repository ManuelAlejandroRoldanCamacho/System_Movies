<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    use HasFactory;

    //protected $table = 't_categories';
    protected $primaryKey = 'id_category'; 
    //public $timestamps = false;

}
