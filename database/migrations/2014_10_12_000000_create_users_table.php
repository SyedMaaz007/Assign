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
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->boolean('gender')->nullable();
            $table->string('occupation')->nullable();
            $table->string('family_type')->nullable();
            $table->string('income')->nullable();
            $table->string('is_manglik')->nullable();
            $table->string('price1')->nullable();
            $table->string('price2')->nullable();
            $table->string('ptr_manglik')->nullable();
            $table->string('provider_id')->nullable();
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
