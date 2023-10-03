<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cow extends Model
{
    //Trait 
    use HasFactory;

    // Primary Key
    protected $primaryKey = 'id_cow';
}
