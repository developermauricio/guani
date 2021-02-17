<?php

namespace App\Http\Controllers\Api\IdentificationTypes;

use App\Http\Controllers\Controller;
use App\IdentificationType;
use Illuminate\Http\Request;

class IdentificationTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listIdentificationTypes = IdentificationType::all();
        return response()->json( $listIdentificationTypes );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( IdentificationType $identificationType )
    {
        return response()->json( $identificationType );
    }

}
