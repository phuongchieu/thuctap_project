<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChitietdaotaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ChiTietDaoTao', function (Blueprint $table) {
            $table->dateTime('tungay');
            $table->dateTime('denngay');
            $table->string('tongiao')->lenght(100);
            $table->string('nghedaotao')->lenght(100);
            $table->integer('fk_madanhmucdaotao')->length(11);
            $table->foreign('fk_madanhmucdaotao')->references('madanhmucdaotao')->on('DanhMucDaoTao')->onDelete('cascade');
            $table->integer('fk_madangvien')->length(11);
            $table->foreign('fk_madangvien')->references('madangvien')->on('DangVien')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ChiTietDaoTao');
    }
}
