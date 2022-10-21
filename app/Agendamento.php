<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agendamento extends Model
{
    protected $fillable = [
        'dt',
        'periodo',
        'status', 
        'hotels_id',
        'users_id',
        'setors_id',
    ];
}
