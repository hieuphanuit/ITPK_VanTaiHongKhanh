<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToHinhAnhs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('hinh_anhs', function (Blueprint $table) {
            //
            $table->string('url')->nullable();
            $table->string('loai_hinh_anh')->nullable();
            $table->string('album')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('hinh_anhs', function (Blueprint $table) {
            //
        });
    }
}
