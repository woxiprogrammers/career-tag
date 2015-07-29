<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobSeekersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_seekers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fullname',255);
            $table->string('contact_no', 255)->nullable();
            $table->date('birthdate')->nullable();
            $table->string('profile_image', 255)->nullable();
            $table->string('profile_video', 255)->nullable();
            $table->string('cv_link', 255)->nullable();
            $table->integer('city_id')->unsigned();
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
        Schema::table('job_seekers', function (Blueprint $table) {
            $table->dropForeign('job_seekers_city_id_foreign');
        });
        Schema::drop('job_seekers');
    }
}
