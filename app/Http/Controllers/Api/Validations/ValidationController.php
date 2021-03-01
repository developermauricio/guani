<?php

namespace App\Http\Controllers\Api\Validations;

use App\Company;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class ValidationController extends Controller
{

    public function validationEmailUser( Request $request ) {
        $email = User::where('email', $request->email)->first();
        if ( $email ) return response()->json( true );

        return response()->json( false );
    }

    public function validationEmailCompany( Request $request ) {
        $email = Company::where('email', $request->email)->first();
        if ( $email ) return response()->json( true );

        return response()->json( false );
    }

    public function validationDomainCompany( Request $request ) {
        $domain = User::where('fqdn', $request->domain)->first();
        if ( $domain ) return response()->json( true );

        return response()->json( false );
    }
}
