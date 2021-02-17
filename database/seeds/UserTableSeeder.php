<?php

use Illuminate\Database\Seeder;
use \Spatie\Permission\Models\Role;
use \Spatie\Permission\Models\Permission;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        /* LISTA DE TODOS LOS ROLES PARA LA EMPRESA */
        $empRolMarketing = Role::create(['name' => 'Administrador']);
        $empRolFinanciero = Role::create(['name' => 'Soporte']);
        $empRolLabelManagement = Role::create(['name' => 'Contador']);
        $empRolAdministrador = Role::create(['name' => 'Finanzas']);
        $empRolLibre = Role::create(['name' => 'Representante Empresa']);
    }
}
