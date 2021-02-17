<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        Storage::deleteDirectory('users');
        Storage::deleteDirectory('companies');
        Storage::deleteDirectory('users');
        Storage::deleteDirectory('beneficiary');
        Storage::deleteDirectory('imagebeneficiary');
        Storage::deleteDirectory('projects_images');
        Storage::deleteDirectory('music');

        Storage::makeDirectory('users');
        Storage::makeDirectory('companies');

        $this->call(UserTableSeeder::class);
        /*=============================================
            TIPO DE DOCUMENTO
        =============================================*/
        factory(\App\IdentificationType::class, 1)->create(['name' => 'Cédula de Ciudadania']);
        factory(\App\IdentificationType::class, 1)->create(['name' => 'Tarjeta de Identidad']);
        factory(\App\IdentificationType::class, 1)->create(['name' => 'Cédula de Extranjeria']);

        /*=============================================
            CARGOS EN LA EMPRESA ADMINISTRADORA
        =============================================*/
        factory(\App\Position::class, 1)->create(['name' => 'Administrador']);
        factory(\App\Position::class, 1)->create(['name' => 'Contador']);
        factory(\App\Position::class, 1)->create(['name' => 'Asistente Contable']);
        factory(\App\Position::class, 1)->create(['name' => 'Financiero']);
        factory(\App\Position::class, 1)->create(['name' => 'Soporte']);

        /*=============================================
            TIPO DE EMPRESA
        =============================================*/
        factory(\App\CompanyType::class, 1)->create(['name' => 'Administrador']);
        factory(\App\CompanyType::class, 1)->create(['name' => 'Incentivadora']);
        factory(\App\CompanyType::class, 1)->create(['name' => 'Redentora']);

        /*=============================================
           CATEGORIAS PARA LAS EMPRESAS
       =============================================*/
        factory(\App\CategoryCompany::class, 1)->create(['name' => 'Reparación']);
        factory(\App\CategoryCompany::class, 1)->create(['name' => 'Mantenimiento']);
        factory(\App\CategoryCompany::class, 1)->create(['name' => 'Telecomunicación']);
        factory(\App\CategoryCompany::class, 1)->create(['name' => 'Electricidad']);
        factory(\App\CategoryCompany::class, 1)->create(['name' => 'Bancos']);
        factory(\App\CategoryCompany::class, 1)->create(['name' => 'Telefonía']);
        factory(\App\CategoryCompany::class, 1)->create(['name' => 'Diseño']);
        factory(\App\CategoryCompany::class, 1)->create(['name' => 'Organización de eventos']);
        factory(\App\CategoryCompany::class, 1)->create(['name' => 'Hotel']);
        factory(\App\CategoryCompany::class, 1)->create(['name' => 'Cine']);
        factory(\App\CategoryCompany::class, 1)->create(['name' => 'Discoteca']);
        factory(\App\CategoryCompany::class, 1)->create(['name' => 'Restaurante']);

//        /*=============================================
//            CREAMOS LO ROLES DEL SISTEMA
//        =============================================*/
//        factory(\Spatie\Permission\Models\Role::class, 1)->create([
//            'rol' => 'Administrador',
//            'description' => 'rol del administrador tiene todos los permisos'
//        ]);
//        factory(\Spatie\Permission\Models\Role::class, 1)->create([
//            'rol' => 'Soporte',
//            'description' => 'Encargado de ver la información de soporte'
//        ]);
//        factory(\Spatie\Permission\Models\Role::class, 1)->create([
//            'rol' => 'Representante Empresa',
//            'description' => 'Representante de la empresa'
//        ]);
//        factory(\Spatie\Permission\Models\Role::class, 1)->create([
//            'rol' => 'Contabilidad',
//            'description' => 'Encargado de ver la información contable'
//        ]);
//        factory(\Spatie\Permission\Models\Role::class, 1)->create([
//            'rol' => 'Asistente',
//            'description' => 'Usuario con ciertos permisos'
//        ]);

        /*=============================================
          CREAMOS EL ADMINISTRADOR DEL SISTEMA
        =============================================*/
        factory(\App\User::class, 1)->create([
            'name' => 'Felipe',
            'last_name' => 'Gonzales',
            'email' => 'admin@admin.co',
            'companytype_id' => 1,
            'password' => bcrypt('password')
        ])->each(function (\App\User $u) {
            $u->roles()->attach(['1']);
        });
        /*=============================================
          CREAMOS EL USUARIO DE SOPORTE
        =============================================*/
        factory(\App\User::class, 1)->create([
            'name' => 'Soporte',
            'email' => 'soporte@soporte.com',
            'password' => bcrypt('password')
        ])->each(function (\App\User $u) {
            $u->roles()->attach('2');
        });
        /*=============================================
          CREAMOS EL USUARIO DE SOPORTE
        =============================================*/
        factory(\App\User::class, 1)->create([
            'name' => 'Contabilidad',
            'email' => 'contabilidad@contabilidad.com',
            'password' => bcrypt('password')
        ])->each(function (\App\User $u) {
            $u->roles()->attach('3');
        });

        /*=============================================
            CREANDO 5 EMPRESAS Y REPRESENTATES INENTIVADORAS
        =============================================*/
        factory(\App\User::class, 5)->create(['companytype_id' => 2])
            ->each(function (\App\User $u) {
                factory(\App\Manager::class, 1)->create(['user_id' => $u->id])
                    ->each(function (\App\Manager $m) use($u){
                        factory(\App\Company::class, 1)->create(['user_id' => 1, 'manager_id' => $m->id, 'companytype_id' => 2 ]);
                    });
                $u->roles()->attach('5');
            });

        /*=============================================
            CREANDO 5 EMPRESAS Y REPRESENTATES INENTIVADORAS
        =============================================*/
        factory(\App\User::class, 5)->create(['companytype_id' => 3])
            ->each(function (\App\User $u) {
                factory(\App\Manager::class, 1)->create(['user_id' => $u->id])
                    ->each(function (\App\Manager $m) use($u){
                        factory(\App\Company::class, 1)->create(['user_id' => 1, 'manager_id' => $m->id, 'companytype_id' => 3 ]);
                    });
                $u->roles()->attach('5');
            });

    }
}
