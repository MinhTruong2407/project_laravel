<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBinhluanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('binhluan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('khachhang_id')->nullable();
            $table->foreign('khachhang_id')->references('id')->on('khachhang')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('sanpham_id')->nullable();
            $table->foreign('sanpham_id')->references('id')->on('sanpham')->onUpdate('cascade')->onDelete('cascade');
            $table->string('noiDung');
            $table->datetime('thoiGianBinhLuan');
            $table->integer('soSao');
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
        Schema::dropIfExists('binhluan');
    }
}
