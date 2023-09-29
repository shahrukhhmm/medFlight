<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientNurseToNurse extends Model
{
    use HasFactory;

    protected $fillable = [
        'case_1_id',
        'rn_name',
        'date_time',
        'temp',
        'hr',
        'bp',
        'rr',
        'fio2',
        'spo2',
        'allergies',
        'nuero',
        'cv',
        'pulm',
        'gl',
        'gu',
        'skin',
        'analgesia',
        'sedation',
        'iv',
        'notes',
        'created_at',
    ];
}