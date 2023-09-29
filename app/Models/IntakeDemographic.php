<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IntakeDemographic extends Model
{
    use HasFactory;
    protected $fillable = [
        'case_1_id', 'client_name', 'dob', 'age', 'diagnosis', 'height', 'weight', 'contact_number',
        'secondary_contact', 'contact_number_2', 'relationship', 'email', 'other', 'address', 'client_rep',
    ];
}
