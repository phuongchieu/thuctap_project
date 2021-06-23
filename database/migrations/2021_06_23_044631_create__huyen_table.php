<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHuyenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Huyen', function (Blueprint $table) {
            $table->increments('mahuyen');
            $table->string('tenhuyen')->lenght(100);
            $table->integer('fk_matinh')->length(11);
            $table->foreign('fk_matinh')->references('matinh')->on('Tinh')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Huyen');
    }
}
