<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->string('nis', 20)->primary();
            $table->string('nama', 20);
            $table->string('jk', 1);
            $table->text('alamat')->nullable();
            $table->string('tmp_lahir', 50);
            $table->date('tgl_lahir');
            $table->string('telepon', 20)->nullable();
            $table->integer('id_jurusan', 11);
            $table->integer('nilai', 11)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswa');
    }
}
