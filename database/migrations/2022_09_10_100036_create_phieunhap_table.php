<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhieunhapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phieunhap', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('nhanvien_id')->nullable();
            $table->foreign('nhanvien_id')->references('id')->on('nhanvien')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('nhacungcap_id')->nullable();
            $table->foreign('nhacungcap_id')->references('id')->on('nhacungcap')->onUpdate('cascade')->onDelete('cascade');
            $table->datetime('ngayNhap');
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
        Schema::dropIfExists('phieunhap');
    }
}
