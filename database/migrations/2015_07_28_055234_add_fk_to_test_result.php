<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFkToTestResult extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_test_results', function (Blueprint $table) {
            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('ability_test_question_id')
                ->references('id')->on('ability_test_questions')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('question_option_id')
                ->references('id')->on('question_options')
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
        Schema::table('user_test_results', function (Blueprint $table) {
            $table->dropForeign('user_test_results_user_id_foreign');
            $table->dropForeign('user_test_results_ability_test_question_id_foreign');
            $table->dropForeign('user_test_results_question_option_id_foreign');
        });
    }
}
