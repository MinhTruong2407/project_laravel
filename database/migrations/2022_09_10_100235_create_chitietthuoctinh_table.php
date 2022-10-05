<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChitietthuoctinhTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitietthuoctinh', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sanpham_id')->nullable();
            $table->foreign('sanpham_id')->references('id')->on('sanpham')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('thuoctinhsanpham_id')->nullable();
            $table->foreign('thuoctinhsanpham_id')->references('id')->on('thuoctinhsanpham')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('kichThuoc');
            $table->string('mauSac');
            $table->string('phongCach');
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
        Schema::dropIfExists('chitietthuoctinh');
    }
}
