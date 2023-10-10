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

    //Mass Assignment
    protected $fillable = [
        'cow_name',
        'cow_alias',
        'cow_code',
        'cow_birthdate',
        'cow_weight',
        'cow_height',
        'cow_breed'
    ];
}
