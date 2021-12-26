<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataSpmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_spm', function (Blueprint $table) {
            $table->increments('id');
            $table->string('jenis_pelayanan');
            $table->text('indikator');
            $table->integer('bidang_urusan_id')->unsigned();
            $table->foreign('bidang_urusan_id')->references('id')->on('bidang_urusan')->onDelete('cascade');
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
        Schema::dropIfExists('data_spm');
    }
}
