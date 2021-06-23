<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNguoidungTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('NguoiDung', function (Blueprint $table) {
            $table->increments('manguoidung');
            $table->string('tendangnhap')->lenght(100);
            $table->string('tennguoidung')->lenght(100);
            $table->string('matkhau')->lenght(100);
            $table->string('email')->lenght(100);
            $table->integer('quyen')->length(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('NguoiDung');
    }
}
