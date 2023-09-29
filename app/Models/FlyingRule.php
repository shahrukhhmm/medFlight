<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlyingRule extends Model
{
    use HasFactory;
    protected $fillable = [
        'case_1_id',
        'pre_diet_check',
        'pre_dvt_check',
        'pre_bowel_check',
        'pre_other_check',
        'in_oxygen_check',
        'in_foley_check',
        'iv_fluids',
        'iv_fluid_check',
        'solution',
        'solution_check',
        'rate_ml',
        'rate_ml_check',
        'in_other_check',
        'in_medication_check',
        'in_hour',
        'in_sedation_check',
        'in_analgesia_check',
        'in_provider',
        'in_signature',
        'in_date',
    ];
}