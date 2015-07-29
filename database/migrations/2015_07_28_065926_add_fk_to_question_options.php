<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFkToQuestionOptions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('question_options', function (Blueprint $table) {
            $table->foreign('ability_test_question_id')
                ->references('id')->on('ability_test_questions')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('language_id')
                ->references('id')->on('system_languages')
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
        Schema::table('question_options', function (Blueprint $table) {
            $table->dropForeign('question_options_ability_test_question_id_foreign');
            $table->dropForeign('question_options_language_id_foreign');
        });
    }
}
