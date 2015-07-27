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
            $table->bigIncrements('id');
            $table->string('description',255);
            $table->tinyInteger('is_active');
            $table->integer('question_type_id');
            $table->integer('question_category_id');
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
