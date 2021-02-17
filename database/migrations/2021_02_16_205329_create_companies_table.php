<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address')->nullable();
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->string('slug')->nullable();
            $table->string('nit')->nullable();
            $table->string('picture')->nullable();
            $table->enum('state', [\App\Company::ACTIVE, \App\Company::INACTIVE])->default(\App\Company::ACTIVE);
            $table->unsignedBigInteger('companytype_id')->nullable();
            $table->foreign('companytype_id')->references('id')->on('company_types');
            $table->unsignedBigInteger('manager_id')->nullable();
            $table->foreign('manager_id')->references('id')->on('managers');
            $table->unsignedBigInteger('categorycompany_id')->nullable();
            $table->foreign('categorycompany_id')->references('id')->on('category_companies');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
}
