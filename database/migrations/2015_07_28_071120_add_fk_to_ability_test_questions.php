<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFkToAbilityTestQuestions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ability_test_questions', function (Blueprint $table) {
            $table->foreign('question_type_id')
                ->references('id')->on('question_types')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('language_id')
                ->references('id')->on('system_languages')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('question_category_id')
                ->references('id')->on('question_categories')
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
        Schema::table('ability_test_questions', function (Blueprint $table) {
            $table->dropForeign('ability_test_questions_question_type_id_foreign');
            $table->dropForeign('ability_test_questions_language_id_foreign');
            $table->dropForeign('ability_test_questions_question_category_id_foreign');
        });
    }
}
