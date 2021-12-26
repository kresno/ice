<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndikatorTujuanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indikator_tujuan', function (Blueprint $table) {
            $table->increments('id');
            $table->text('nama')->nullable();
            $table->integer('tujuan_id')->unsigned();
            $table->foreign('tujuan_id')->references('id')->on('tujuan')->onDelete('cascade');
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
        Schema::dropIfExists('indikator_tujuan');
    }
}
