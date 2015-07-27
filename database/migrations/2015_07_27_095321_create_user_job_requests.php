<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserJobRequests extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_requests', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('status');
            $table->bigInteger('user_id');
            $table->bigInteger('reference_id');
            $table->bigInteger('company_id');
            $table->timestamps('applied_on');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('job_requests');
    }
}
