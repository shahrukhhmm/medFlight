<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReceivingFacility extends Model
{
    use HasFactory;
    protected $fillable = [
        'case_1_id', 'case_2_id', 'destination', 'phone', 'address', 'city_state', 'room', 'zip', 'contact_person',
        'phone2', 'attending_md', 'other',
    ];
}
