<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuatrinhcongtacTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('QuaTrinhCongTac', function (Blueprint $table) {
            $table->increments('maqtct');
            $table->integer('fk_madangvien')->length(11);
            $table->foreign('fk_madangvien')->references('madangvien')->on('DangVien')->onDelete('cascade');
            $table->dateTime('tungay');
            $table->dateTime('denngay');
            $table->string('noicutru')->lenght(100);
            $table->string('lamgi')->lenght(100);
            $table->integer('fk_madonvi')->length(11);
            $table->foreign('fk_madonvi')->references('madonvi')->on('DonVi')->onDelete('cascade');
            $table->integer('trangthai')->length(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('QuaTrinhCongTac');
    }
}
