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

    /*=============================================
       RUTAS PARA LA EMPRESA INCENTIVADORA
    =============================================*/
    Route::get('/dashboard', 'Emincentivadora\DashboardController@index')->name('incentivadora.index.dashboard');

    /*=============================================
        RUTAS PARA LA EMPRESA ADMINISTRADORA
    =============================================*/
    Route::group(["middleware" => "guani.admin"], function () {
        /* RUTAS PARA EMPRESA INCENTIVADORA DESDE EL ADMIN*/
        Route::get('/incentivadoras/create-company', 'CompanyIncentivadoraController@index')->name('admin.index.create.company.incentivadora'); //Ruta para la vista CREAR EMPRESA INCENTIVADORA
        Route::post("/company-incentivadora-store", "CompanyIncentivadoraController@storeCompanyIncentivadora")->name("admin.store.company.incentivadora"); //Ruta para CREAR EMPRESA INCENTIVADORA
        Route::get('/incentivadoras/all-companies', 'CompanyIncentivadoraController@allIndex')->name('admin.allIndex.companies.incentivadora');//Ruta para la vista EMPRESAS INCENTIVADORAS
    });

});


Route::get('/', function () {
    return redirect('/login');
});

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('admin.index.dashboard');
