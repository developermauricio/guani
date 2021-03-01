<?php

namespace App\Http\Controllers\Api\CategoryCompanies;

use App\CategoryCompany;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryCompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listCategoryCompanies = CategoryCompany::all();
        return response()->json( $listCategoryCompanies );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( CategoryCompany $categoryCompany )
    {
        return response()->json( $categoryCompany );
    }
}
