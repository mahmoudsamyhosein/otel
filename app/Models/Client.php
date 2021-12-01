<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Client extends Model
{
    public function new_alfa(){

        return $this->belongsTo('');

    }
    use HasFactory;
}
