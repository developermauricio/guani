<?php

//use App\Http\Controllers\Api\IdentificationTypes\IdentificationTypeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/* Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
}); */

Route::resource('identification-types', 'Api\IdentificationTypes\IdentificationTypeController')->only( [ 'index', 'show' ] );
Route::resource('countries', 'Api\Country\CountryController')->only( [ 'index', 'show' ] );
Route::resource('cities', 'Api\City\CityController')->only( [ 'show' ] );



