<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RushHours extends Model
{
    use HasFactory;


    protected $fillable = [
        'from',
        'to',
        'category',
        'sa',
        'su',
        'mo',
        'tu',
        'we',
        'th',
        'fr',
    ];
}
