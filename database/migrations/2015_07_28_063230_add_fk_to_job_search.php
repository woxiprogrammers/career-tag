<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFkToJobSearch extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('job_search', function (Blueprint $table) {
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
        Schema::table('job_search', function (Blueprint $table) {
            $table->dropForeign('job_search_city_id_foreign');
        });
    }
}
