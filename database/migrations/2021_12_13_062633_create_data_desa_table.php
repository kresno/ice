<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataDesaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_desa', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->enum('type', ['Desa', 'Kelurahan']);
            $table->integer('kecamatan_id')->unsigned();
            $table->foreign('kecamatan_id')->references('id')->on('data_kecamatan');
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
        Schema::dropIfExists('data_desa');
    }
}
