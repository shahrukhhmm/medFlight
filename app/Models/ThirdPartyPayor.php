<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThirdPartyPayor extends Model
{
    use HasFactory;
    protected $fillable = [
        'case_1_id', 'company', 'contact', 'phone', 'email', 'address', 'additional_rep', 'relevent_history', 'notes',
    ];
}
