<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChitietdondathangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitietdondathang', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('dondathang_id')->nullable();
            $table->foreign('dondathang_id')->references('id')->on('dondathang')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('sanpham_id')->nullable();
            $table->foreign('sanpham_id')->references('id')->on('sanpham')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('soLuong');
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
        Schema::dropIfExists('chitietdondathang');
    }
}
