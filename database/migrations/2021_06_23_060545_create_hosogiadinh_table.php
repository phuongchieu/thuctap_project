<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHosogiadinhTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('HoSoGiaDinh', function (Blueprint $table) {
            $table->increments('stt');
            $table->integer('fk_madangvien')->length(11);
            $table->foreign('fk_madangvien')->references('madangvien')->on('DangVien')->onDelete('cascade');
            $table->string('tennguoithan')->lenght(100);
            $table->string('quanhe')->lenght(100);
            $table->dateTime('ngaysinh');
            $table->string('noisinh')->lenght(100);
            $table->string('nghenghiep')->lenght(100);
            $table->string('diachi')->lenght(100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('HoSoGiaDinh');
    }
}
