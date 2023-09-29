<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TravelInfo extends Model
{
    use HasFactory;
    protected $fillable = [
        'case_1_id',
        'travel_date',
        'travel_hour',
        'travel_ftf_start_date',
        'travel_ftf_end_date',
        'depart_airport',
        'arrive_airport',
        'airline',
        'depart_time',
        'depart_facility',
        'arrive_time',
        'arrive_date',
    ];
}