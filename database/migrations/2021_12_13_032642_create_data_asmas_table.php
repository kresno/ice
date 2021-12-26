<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataAsmasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_asmas', function (Blueprint $table) {
            $table->increments('id');
            $table->year('tahun');
            $table->string('kode');
            $table->string('tanggal');
            $table->string('pengusul')->nullable();
            $table->string('profil')->nullable();
            $table->string('urusan')->nullable();
            $table->string('usulan')->nullable();
            $table->text('permasalahan')->nullable();
            $table->string('alamat')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('desa')->nullable();
            $table->string('tujuan_usul')->nullable();
            $table->string('pd_awal')->nullable();
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
        Schema::dropIfExists('data_asmas');
    }
}
