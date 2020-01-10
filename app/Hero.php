<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Hero extends Model
{

    public $timestamps = false;

    protected $fillable = [
        'nome',
        'classe',
        'especialidade',
        'vida',
        'defesa',
        'dano',
        'vel_Atq',
        'vel_Mov'
    ];

    protected $guarded = ['id'];
    protected $table = 'heroes';
}
