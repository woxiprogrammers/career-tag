<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('name',255);
            $table->string('email')->unique();
            $table->string('password', 255);
            $table->string('contact_no', 255)->nullable();
            $table->date('birthdate')->nullable();
            $table->string('company_link', 255)->nullable();
            $table->string('profile_image', 255)->nullable();
            $table->string('profile_video', 255)->nullable();
            $table->string('company_registration_no', 255)->nullable();
            $table->integer('role_id');
            $table->bigInteger('city_id')->nullable();
            $table->bigInteger('user_company_id')->nullable();
            $table->tinyInteger('is_active');
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
        Schema::drop('users');
    }
}
