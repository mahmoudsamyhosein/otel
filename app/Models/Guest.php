<?php

namespace App\Models;

use App\Models\Booking;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Database\Factories\GuestFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'guest_type',
        'approve_type',
        'place_of_issue',
        'date_of_birth',
        'email',
        'phone_of_work',
        'category',
        'nationalty',
        'id_copy',
        'date_of_expiry',
        'kind',
        'phone',
        'place_of_work',
        'address',
        'note',
        'notes_2', 
        'approve_number',
    ];



    public function booking(){

        return $this->hasMany('App\booking');
    }

    
}


