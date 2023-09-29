<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientDocumentStatus extends Model
{
    use HasFactory;
    protected $fillable = [
        'case_1_id',
        'fitness_check',
        'medfit_check',
        'dc_order_check',
        'constent_check',
        'identification_check',
        'other',
    ];
}