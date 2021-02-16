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
            $table->string('subject');
            $table->double('score', 3, 1);
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
