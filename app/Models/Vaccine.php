<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Vaccine extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_vaccine';

    public function cows():BelongsToMany
    {

        return $this->belongsToMany(
            Cow::class,
            'cow_vaccine',
            'fk_vaccine_id',
            'fk_cow_id'
        )->withPivot(
            'cow_vaccine_observations',
            'cow_vaccine_date'
        )->withTimestamps();
    }
}
