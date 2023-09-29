<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlightDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'case_1_id',
        'rn_outbound',
        'client_rn',
        'rn_return',
        'notes',
    ];
}