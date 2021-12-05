<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;


    protected $fillable =[
        'name',
        'city',
        'address',
        'email',
        'hotel_name',
        'how_know_us',
    ];
}
