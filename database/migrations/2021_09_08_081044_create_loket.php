<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoket extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loket', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('puskesmas_id');
            $table->integer('antrian');
            $table->integer('antrian_akhir');
            $table->string('jenis');
            $table->timestamps();
            $table->foreign('puskesmas_id')->references('id')->on('puskesmas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loket');
    }
}
