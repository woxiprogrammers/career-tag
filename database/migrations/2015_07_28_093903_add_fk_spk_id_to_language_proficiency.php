<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFkSpkIdToLanguageProficiency extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('language_proficiency', function (Blueprint $table) {
            $table->foreign('speaking_language_id')
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
        Schema::table('language_proficiency', function (Blueprint $table) {
            $table->dropForeign('language_proficiency_speaking_language_id_foreign');
        });
    }
}
