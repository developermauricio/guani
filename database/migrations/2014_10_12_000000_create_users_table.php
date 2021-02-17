<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('document')->nullable();
            $table->unsignedBigInteger('documentype_id')->nullable();
            $table->foreign('documentype_id')->references('id')->on('identification_types');
            $table->string("fqdn")->unique()->nullable();
            $table->string('name');
            $table->string('last_name')->nullable();
            $table->string('address')->nullable();
            $table->enum('state', [\App\User::ACTIVE, \App\User::INACTIVE])->default(\App\User::ACTIVE);
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->string('slug')->nullable();
            $table->unsignedBigInteger('companytype_id')->nullable();
            $table->foreign('companytype_id')->references('id')->on('company_types');
            $table->text('biography')->nullable();
            $table->string('picture')->nullable();
            $table->dateTime('birthday')->nullable();
            $table->unsignedBigInteger('city_id')->nullable();
            $table->foreign('city_id')->references('id')->on('cities');
            $table->unsignedBigInteger('position_id')->nullable();
            $table->foreign('position_id')->references('id')->on('positions');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
