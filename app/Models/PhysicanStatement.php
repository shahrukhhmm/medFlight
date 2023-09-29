<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhysicanStatement extends Model
{
    use HasFactory;
    protected $fillable = [
        'case_1_id',
        'passenger_name',
        'date_of_travel',
        'from',
        'to',
        'airline',
        'flight',
        'departure_time',
        'arival_time',
        'discharging_facility',
        'discharging_md',
        'facility_address',
        'phone_number',
        'addmision_date',
        'diagnosis',
        'ftf_from_date',
        'class_of_service',
        'economy',
        'passenger',
        'oxygen_required',
        'oxygen_needed',
        'sop2_target',
        'attendant',
        'special_service',
        'forseen',
        'contagious',
        'prognosis',
        'facility',
        'address',
        'physician_name',
        'signature',
        'date',
    ];
}