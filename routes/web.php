<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/**
 * RUTAS QUE NECESITAN AUTENTICACIÓN Y PERTENECEN AL ADMINISTRADOR DEL SISTEMA (ROOT)
 */
Route::group(["middleware" => ["auth", "root"]], function () {

    Route::get('/dashboard', 'Emincentivadora\DashboardController@index')->name('incentivadora.index.dashboard');
    Route::group(["middleware" => "guani.admin"], function () {
        Route::get('/create-company-incentivadora', 'CompanyIncentivadoraController@index')->name('admin.index.create.company.incentivadora');
        Route::post("/company-incentivadora-store", "CompanyIncentivadoraController@storeCompanyIncentivadora")->name("admin.store.company.incentivadora");
    });

});


Route::get('/', function () {
    return redirect('/login');
});

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('admin.index.dashboard');
