<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Database\Factories\GuestFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'approve_type',
        'approve_number',
        'place_of_issue',
        'phone',
        'email',
    ];

    
}


