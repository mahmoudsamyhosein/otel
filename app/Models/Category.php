<?php

namespace App\Models;
use App\Models\Guest;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable=[

     
            'eng_name',
            'ar_name',
            'discount',
    ];

    public function guests(){

        return $this->hasMany('App\booking');
    }


    
}
