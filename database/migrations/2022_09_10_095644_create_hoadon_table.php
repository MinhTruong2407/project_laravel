<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHoadonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoadon', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('nhanvien_id')->nullable();
            $table->foreign('nhanvien_id')->references('id')->on('nhanvien')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('khachhang_id')->nullable();
            $table->foreign('khachhang_id')->references('id')->on('khachhang')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('trangThaiThanhToan')->default(0);
            $table->double('tongTien')->default(0);
            $table->datetime('ngayDat');
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
        Schema::dropIfExists('hoadon');
    }
}
