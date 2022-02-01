<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;


    protected $fillable =[
        'name',
        'flat_number_in_shomos',
        'level_name',
        'rooms_count',
        'bathroom_count',
        'single_bed_count',
        'double_bed_count',
        'closit_count',
        'tvs_count',
        'conditioner_type',
        'flat_kind',
        'note',
    ];
}
