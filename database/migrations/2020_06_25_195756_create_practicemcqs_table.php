<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePracticemcqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('practicemcqs', function (Blueprint $table) {
            $table->id();
            $table->string('chapter');
            $table ->string('question');
            $table->string('A');
            $table->string('B');
            $table->string('C');
            $table->string('D');
            $table->string('CorrectAnswer');
            $table->string('selection')->nullable();
            $table->mediumText('Explanation')->nullable();
            $table->string('question_image')->nullable();
            $table->string('type')->default('text');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('practicemcqs');
    }
}
