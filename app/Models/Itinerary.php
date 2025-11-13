<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Itinerary extends Model
{
    use HasFactory;

    // Table name
    protected $table = 'itineraries';

    // Fields that can be filled through forms
    protected $fillable = [
        'trip_name',
        'destinations',
        'overview',
        'suggested_dates',
        'difficulty_level',
        'submitted_by',
    ];
}
