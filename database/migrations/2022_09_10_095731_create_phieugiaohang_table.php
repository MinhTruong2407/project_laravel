<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhieugiaohangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phieugiaohang', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('dondathang_id')->nullable();
            $table->foreign('dondathang_id')->references('id')->on('dondathang')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('hoadon_id')->nullable();
            $table->foreign('hoadon_id')->references('id')->on('hoadon')->onUpdate('cascade')->onDelete('cascade');
            $table->datetime('thoiDiemGiao');
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
        Schema::dropIfExists('phieugiaohang');
    }
}
