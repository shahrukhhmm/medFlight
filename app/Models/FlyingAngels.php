<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlyingAngels extends Model
{
    use HasFactory;

    protected $fillable = [
        'case_1_id',
        'from',
        'to',
        'fax',
        'pages',
        'phone',
        'date',
        're',
        'dear_name',
        'facesheet_check',
        'commercial_check',
        'fitness_check',
        'constent_check',
        'photo_check',
        'appropiate_check',
        'other_check',
        'other',
        'please_check',
        'comment',
    ];
}