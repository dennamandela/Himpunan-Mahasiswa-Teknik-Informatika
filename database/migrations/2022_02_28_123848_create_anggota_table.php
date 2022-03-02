<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnggotaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anggota', function (Blueprint $table) {
            $table->increments('id');
            $table->String('nim', 10);
            $table->String('nama_anggota');
            $table->String('program_studi', 25);
            $table->date('tanggal_lahir');
            $table->Integer('angkatan');
            $table->String('jenis_kelamin', 20);
            $table->String('agama', 15);
            $table->String('foto');
            $table->foreignId('user_id')->unique();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anggota');
    }
}
