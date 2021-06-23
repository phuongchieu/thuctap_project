<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateXaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Xa', function (Blueprint $table) {
            $table->increments('maxa');
            $table->string('tenxa')->lenght(100);
            $table->integer('fk_mahuyen')->length(11);
            $table->foreign('fk_mahuyen')->references('mahuyen')->on('Huyen')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Xa');
    }
}
