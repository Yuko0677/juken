<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Admin\Standardscore;

class CreateStandardscoreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('standardscores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('test_name');
            $table->date('exam_at');
            $table->foreignId('subject_id');
            //$table->string('subject');
            $table->float('score');
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
        Schema::dropIfExists('standardscores');
    }
}
