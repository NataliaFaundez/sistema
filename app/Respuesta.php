<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Respuesta extends Model
{
    //
    protected $table = "respuestas";

    protected $fillable = [

        'respuesta',
        'preguntas_id',
        'encuestas_id',
    ];
}
