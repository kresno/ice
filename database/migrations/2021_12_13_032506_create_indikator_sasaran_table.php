<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndikatorSasaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indikator_sasaran', function (Blueprint $table) {
            $table->increments('id');
            $table->text('nama')->nullable();
            $table->integer('sasaran_id')->unsigned();
            $table->foreign('sasaran_id')->references('id')->on('sasaran')->onDelete('cascade');       
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
        Schema::dropIfExists('indikator_sasaran');
    }
}
