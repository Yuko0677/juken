<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Admin\TargetSchool;

class CreateTargetschoolTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('targetschools', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('ranking');
            $table->string('name');
            $table->string('url')->nullable();
            $table->string('standardscore')->nullable();
            $table->string('access')->nullable();
            $table->string('point')->nullable();
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
        Schema::dropIfExists('targetschools');
    }
}
