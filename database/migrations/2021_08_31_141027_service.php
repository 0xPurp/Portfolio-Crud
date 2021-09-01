<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Service extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service', function (Blueprint $table){
        $table->id();
        $table->text('titre');
        $table->text('description');
        $table->text('titrediv1');
        $table->text('descdiv1');
        $table->text('titrediv2');
        $table->text('descdiv2');
        $table->text('titrediv3');
        $table->text('descdiv3');
        $table->text('titrediv4');
        $table->text('descdiv4');
        $table->text('titrediv5');
        $table->text('descdiv5');
        $table->text('titrediv6');  
        $table->text('descdiv6');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('service');
    }
}
