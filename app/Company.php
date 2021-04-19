<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    const ACTIVE = 1;
    const INACTIVE = 2;

    public function companyType() {
        return $this->belongsTo( CompanyType::class );
    }

    public function user() {
        return $this->belongsTo( User::class );
    }

    public function companyCategory() {
       return $this->belongsTo( CategoryCompany::class );
    }
}
