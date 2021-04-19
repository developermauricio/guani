<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyType extends Model
{

    const ADMINISTRADOR = 1;
    const INCENTIVADORA = 2;
    const REDENTORA = 3;

    /* public function company( ) {
       return $this->hasMany( Company::class );
    } */
}
