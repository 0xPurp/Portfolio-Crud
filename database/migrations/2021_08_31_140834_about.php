<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class About extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about', function (Blueprint $table){
            $table->id();
            $table->string('name', 99);
            $table->text('titre');
            $table->text("description");
            $table->string("sous-titre", 99);
            $table->text("sous-description",99);
            $table->string("birthday",70);
            $table->string("website",70);
            $table->string("phone");
            $table->string("city",70);
            $table->integer("age");
            $table->string("diplome",70);
            $table->string("email",70);
            $table->string("freelance",70);
            $table->text("lastdescription");
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
        Schema::dropIfExists('about');
    }
}
