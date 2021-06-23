<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDanhmuckhenthuongTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DanhMucKhenThuong', function (Blueprint $table) {
            $table->increments('madanhmuckhenthuong');
            $table->string('tendanhmuckhenthuong')->lenght(100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('DanhMucKhenThuong');
    }
}
