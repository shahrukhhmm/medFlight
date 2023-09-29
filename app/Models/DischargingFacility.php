<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DischargingFacility extends Model
{
    use HasFactory;
    protected $fillable = [
        'case_1_id', 'case_2_id', 'present_location', 'phone', 'address', 'city_state', 'room', 'zip', 'unit',
        'unit_phone', 'attending_md', 'fax', 'admission_date', 'discharge_date', 'other',
    ];
}
