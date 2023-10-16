<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    use HasFactory;

    protected $fillable = [
        'meal_name',
        'ingredients',
        'dietary_info'
    ];

    //Relationship to Residents model
    public function residents() {
        return $this->belongsToMany(Resident::class);
    }
}
