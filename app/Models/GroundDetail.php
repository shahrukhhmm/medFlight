<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroundDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'case_1_id',
        'departure',
        'arrival',
        'notes',
    ];
}