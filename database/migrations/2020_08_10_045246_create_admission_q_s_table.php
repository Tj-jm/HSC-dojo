<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdmissionQSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admission_q_s', function (Blueprint $table) {
            $table->id();
            $table->string('subject');
            $table->string('chapter');
            $table->string('question');
            $table->string('type');
            $table->string('A')->nullable();
            $table->string('B')->nullable();
            $table->string('C')->nullable();
            $table->string('D')->nullable();
            $table->string('CorrectAnswer')->nullable();
            $table->float('significant')->nullable();
            $table->integer('power')->nullable();
            $table->string('unit')->nullable();
            $table->string('tag');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admission_q_s');
    }
}
