<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Phongsv extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phongsinhvien', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('masv');
            $table->string('hoten');
            $table->string('phong');
            $table->string('gioitinh');
            $table->string('lop');
            $table->string('khoa');
            $table->string('id_phong');
            $table->string('tienp');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('phongsinhvien');
    }
}
