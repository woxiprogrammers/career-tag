<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserAbilityTestQuestion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ability_test_questions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description',255);
            $table->tinyInteger('is_active');
            $table->integer('language_id')->unsigned();
            $table->integer('question_type_id')->unsigned();
            $table->integer('question_category_id')->unsigned();
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
        Schema::drop('ability_test_questions');
    }
}
