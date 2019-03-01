<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThongTinLienHesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thong_tin_lien_hes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('ten')->nullable();
            $table->string('dia_chi')->nullable();
            $table->string('so_dien_thoai')->nullable();
            $table->string('email')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('thong_tin_lien_hes');
    }
}
