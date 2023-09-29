<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TravelInstruction extends Model
{
    use HasFactory;

    protected $fillable = [
        'case_1_id',
        'general',
        'loading_2',
        'loading_3',
    ];
}