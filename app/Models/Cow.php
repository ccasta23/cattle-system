<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

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

    public function vaccines():BelongsToMany{
        return  $this->belongsToMany(
                Vaccine::class,
                'cow_vaccine',
                'fk_cow_id',
                'fk_vaccine_id'
            )->withPivot(
                'cow_vaccine_observations',
                'cow_vaccine_date'
            )->withTimestamps();
    }
}
