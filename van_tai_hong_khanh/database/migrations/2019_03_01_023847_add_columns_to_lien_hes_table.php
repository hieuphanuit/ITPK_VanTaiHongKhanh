<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToLienHesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lien_hes', function (Blueprint $table) {
            //
            $table->string('dia_chi')->nullable();
            $table->string('dien_thoai')->nullable();
            $table->string('email')->nullable();
            $table->string('website')->nullable();
            $table->longText('map')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('lien_hes', function (Blueprint $table) {
            //
        });
    }
}
