<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'contract_no',
        'booking_status',
        'flat',
        'flat_kind',
        'booking_kind',
        'sign_in',
        'sign_out',
        'duration',
        'rent_value',
        'amount',
        'taxes',
        'total',
        'insurances',
        'paid_up',
        'Balance',
        
    ];
}
