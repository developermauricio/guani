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
        factory(\App\User::class, 1)->create([
            "name" => "Mauricio Gutierrez",
            "email" => "admin@admin.co",
            "type" => "admin",
            "password" => bcrypt("password")
        ]);

        factory(\App\User::class, 1)->create([
            "name" => "Rodinson Samuel Tombe",
            "email" => "app@cliente.co",
            "type" => "incentivadora",
            "password" => bcrypt("password")
        ]);
        factory(\App\User::class, 1)->create([
            "name" => "Cristian Salazar",
            "email" => "app@incentivadora.co",
            "type" => "redentora",
            "password" => bcrypt("password")
        ]);
    }
}
