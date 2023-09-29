<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoadingDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'case_1_id',
        'loading_1',
        'loading_2',
        'loading_3',
    ];
}