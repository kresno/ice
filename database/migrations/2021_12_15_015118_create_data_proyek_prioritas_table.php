<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataProyekPrioritasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_proyek_prioritas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->integer('bidang_prioritas_id')->unsigned();
            $table->foreign('bidang_prioritas_id')->references('id')->on('data_bidang_prioritas');
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
        Schema::dropIfExists('data_proyek_prioritas');
    }
}
