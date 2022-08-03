<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'name',
        'lastname',
        'document_type_id',
        'document',
        'salary',
        'position_id',
        'department_id',
        'eps_id',
        'arl_id',
        'afp_id'
    ];
    use HasFactory;
}
