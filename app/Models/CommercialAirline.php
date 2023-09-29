<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommercialAirline extends Model
{
    use HasFactory;
    protected $fillable = [
        'case_1_id',
        'passenger_name',
        'discharging_md',
        'discharging_facility',
        'rehab_unit',
        'unit_phone',
    ];
}