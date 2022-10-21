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

    public function usuario()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }

    public function hotel()
    {
        return $this->belongsTo(Hotel::class, 'hotels_id', 'id');
    }

    public function setor()
    {
        return $this->belongsTo(Setor::class, 'setors_id', 'id');
    }
}
