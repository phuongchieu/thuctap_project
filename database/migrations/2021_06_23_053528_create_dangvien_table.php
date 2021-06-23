<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDangvienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DangVien', function (Blueprint $table) {
            $table->increments('madangvien');
            $table->string('tendangvien')->lenght(100);
            $table->dateTime('ngaysinh');
            $table->string('quequan')->lenght(100);
            $table->dateTime('ngayvaodang');
            $table->dateTime('ngaychinhthuc');
            $table->integer('fk_maxa')->length(11);
            $table->foreign('fk_maxa')->references('maxa')->on('Xa')->onDelete('cascade');
            $table->integer('fk_chucvu')->length(11);
            $table->foreign('fk_chucvu')->references('machucvu')->on('ChucVu')->onDelete('cascade');
            $table->string('donvi')->lenght(100);
            $table->string('tongiao')->lenght(100);
            $table->string('dantoc')->lenght(100);
            $table->integer('cmnd')->length(11);
            $table->string('hokhautt')->lenght(100);
            $table->string('trinhdo')->lenght(100);
            $table->string('hinh3x4')->lenght(100);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('DangVien');
    }
}
