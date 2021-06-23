<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChitietkhenthuongTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ChiTietKhenThuong', function (Blueprint $table) {
            $table->integer('fk_madanhmuckhenthuong')->length(11);
            $table->foreign('fk_madanhmuckhenthuong')->references('madanhmuckhenthuong')->on('DanhMucKhenThuong')->onDelete('cascade');
            $table->integer('fk_madangvien')->length(11);
            $table->foreign('fk_madangvien')->references('madangvien')->on('DangVien')->onDelete('cascade');
            $table->dateTime('ngaythangnam');
            $table->string('coquancapqd')->lenght(100);
            $table->string('lydo')->lenght(100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ChiTietKhenThuong');
    }
}
