<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAspirasiMasyarakatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aspirasi_masyarakat', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nama_instansi');
            $table->string('perihal');
            $table->enum('pilih',['dosen','mahasiswa','alumni','publik']);
            $table->text('isi');
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
        Schema::dropIfExists('aspirasi_masyarakat');
    }
}
