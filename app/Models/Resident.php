<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resident extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'date_of_birth', 'notes','dietary_preferences', 'room_number' ];

//    Setting up the relationship between the Resident and the meal model
    public function meals() {
        return $this->belongsToMany(Meal::class);
    }

}
