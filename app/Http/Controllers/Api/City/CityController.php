<?php

namespace App\Http\Controllers\Api\City;

use App\City;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listCities = City::all();
        return response()->json( $listCities );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create( City $city )
    {
        return response()->json( $city );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //public function show($id)
    public function show( City $city )
    {
        return response()->json( $city );
    }

    public function getListCitiesForCode( Request $request ) {
       $listCities = City::where( 'country_code', $request->country_code )->get();
       return response()->json( $listCities );
    }
}
