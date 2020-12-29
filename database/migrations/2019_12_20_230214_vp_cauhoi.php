<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class VpCauhoi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vp_CauHoi', function (Blueprint $table) {
            $table->Increments('id_cauhoi');
            $table->string('Ma_cauhoi');
            $table->string('Ma_chude');
            $table->string('Noi_dung');
            $table->string('DA_dung');
            $table->string('DA_nhieu1');
            $table->string('DA_nhieu2');
            $table->string('DA_nhieu3');
            $table->rememberToken();
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
        Schema::dropIfExists('vp_CauHoi');
    }
}
