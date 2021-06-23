<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDanhmucdaotaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DanhMucDaoTao', function (Blueprint $table) {
            $table->increments('madanhmucdaotao');
            $table->string('tendanhmucdaotao')->lenght(100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('DanhMucDaoTao');
    }
}
