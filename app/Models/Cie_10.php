<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cie_10 extends Model
{
    protected $fillable = [
        'code',
        'dx',
        'dx_group_id',
        'dx_section_id'
    ];
    use HasFactory;
}
