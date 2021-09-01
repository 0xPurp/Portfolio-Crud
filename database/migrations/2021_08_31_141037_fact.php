<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Fact extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fact', function(Blueprint $table){
        $table->id();
        $table->text('titre');
        $table->text('description');
        $table->integer('client');
        $table->integer('projets');
        $table->integer('support');
        $table->integer('team');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fact');
    }
}
