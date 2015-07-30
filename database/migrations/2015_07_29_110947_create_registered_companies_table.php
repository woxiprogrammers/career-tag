<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegisteredCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registered_companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fullname',255);
            $table->string('contact_no', 255)->nullable();
            $table->string('company_link', 255)->nullable();
            $table->string('company_registration_no', 255)->nullable();
            $table->string('profile_image', 255)->nullable();
            $table->string('profile_video', 255)->nullable();
            $table->integer('city_id')->unsigned();
            $table->integer('parent_company_id')->unsigned()->nullable();
            $table->integer('created_user_id')->unsigned()->nullable();
            $table->tinyInteger('is_active');
            $table->timestamps();
            $table->foreign('city_id')
                ->references('id')->on('cities')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('registered_companies', function (Blueprint $table) {
            $table->dropForeign('registered_companies_city_id_foreign');
        });
        Schema::drop('registered_companies');
    }
}
