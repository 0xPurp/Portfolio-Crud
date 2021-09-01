<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Skill extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skill', function (Blueprint $table){
            $table->id();
            $table->text('titre');
            $table->text('description');
            $table->integer('html');
            $table->integer('css');
            $table->integer('js');
            $table->integer('php');
            $table->integer('cms');
            $table->integer('photoshop');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('skill');
    }
}
