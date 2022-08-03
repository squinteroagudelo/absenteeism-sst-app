<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incapacity extends Model
{
    protected $fillable = [
        'incapacity_type_id',
        'employee_id',
        'cie_10_id',
        'start_day',
        'end_day',
        'incapacity_kind_id',
        'paid_company',
        'paid_eps',
        'paid_arl',
        'paid_afp',
    ];
    use HasFactory;
}
