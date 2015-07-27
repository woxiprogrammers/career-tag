<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserInterviews extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interviews', function (Blueprint $table) {
            $table->increments('id');
            $table->string('additional_info',255);
            $table->tinyInteger('is_active');
            $table->bigInteger('user_id');
            $table->bigInteger('company_id');
            $table->bigInteger('reminder_id');
            $table->date('schedule_date');
            $table->time('schedule_time');
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
        Schema::drop('interviews');
    }
}
