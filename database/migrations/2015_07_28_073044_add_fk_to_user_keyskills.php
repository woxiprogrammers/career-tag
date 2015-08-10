<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFkToUserKeyskills extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_keyskills', function (Blueprint $table) {
            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('keyskill_id')
                ->references('id')->on('keyskills')
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
        Schema::table('user_keyskills', function (Blueprint $table) {
            $table->dropForeign('user_keyskills_user_id_foreign');
            $table->dropForeign('user_keyskills_keyskill_id_foreign');
        });
    }
}
