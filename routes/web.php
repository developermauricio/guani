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

        /* RUTAS PARA EL PERFIL DESDE EL ADMIN*/
        Route::get('/profile-guani', 'UserController@indexProfile')->name('admin.index.perfil');
        /* RUTAS PARA EMPRESA INCENTIVADORA DESDE EL ADMIN*/
        Route::get('/incentivadoras/create-company', 'CompanyIncentivadoraController@index')->name('admin.index.create.company.incentivadora'); //Ruta para la vista CREAR EMPRESA INCENTIVADORA
        Route::post("/company-incentivadora-store", "CompanyIncentivadoraController@storeCompanyIncentivadora")->name("admin.store.company.incentivadora"); //Ruta para CREAR EMPRESA INCENTIVADORA
        Route::get('/incentivadoras/all-companies', 'CompanyIncentivadoraController@allIndex')->name('admin.allIndex.companies.incentivadora');//Ruta para la vista EMPRESAS INCENTIVADORAS

        /* RUTAS PARA EMPRESA REDENTORA DESDE EL ADMIN */
        Route::get("/redentoras/create-company", "CompanyRedentoraController@index")->name("admin.index.create.company.redentora"); //Ruta para la vista CREAR EMPRESA REDENTORA
        Route::get("/redentoras/profile-company", "CompanyRedentoraController@profileIndex")->name("admin.index.profile.company.redentora"); //Ruta para la vista CREAR EMPRESA REDENTORA
        Route::get("/redentoras/edit-company", "CompanyRedentoraController@editIndex")->name("admin.index.edit.company.redentora"); //Ruta para la vista CREAR EMPRESA REDENTORA
        Route::get('/redentoras/all-companies', 'CompanyRedentoraController@allIndex')->name('admin.allIndex.companies.redentora'); //Ruta para la vista EMPRESAS REDENTORAS
        Route::post("/company-redentora-store", "CompanyRedentoraController@store")->name("admin.store.company.redentora"); //Ruta para CREAR EMPRESA REDENTORA

    });

});


Route::get('/', function () {
    return redirect('/login');
});

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('admin.index.dashboard');
