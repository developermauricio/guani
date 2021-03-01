<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    const ADMINISTRADOR = 1;
    const CONTADOR = 2;
    const ASISTENTE_CONTABLE = 3;
    const FINANCIERO = 4;
    const SOPORTE = 5;

}
