<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalTreatment extends Model
{
    use HasFactory;
    protected $fillable = [
        'case_1_id', 'case_2_id', 'oxygen', 'spo2_target', 'class_of_service', 'sit_up_tolerance', 'econ_acceptable',
        'staff_needed', 'special_service_request', 'oxygen_needed_during',
    ];
}
