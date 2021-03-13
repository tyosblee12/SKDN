<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->string('nim')->primary();
            $table->string('id_kelas');
            $table->foreign('id_kelas')->references('id_kelas')->on('kelas');
            $table->string('id_jurusan');
            $table->foreign('id_jurusan')->references('id_jurusan')->on('jurusan');
            $table->string('nm_mhs',30);
            $table->string('alamat',100);
            $table->string('no_telp',15);
            $table->string('email',30);
            $table->date('TA');
            $table->tinyinteger('status');
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
        Schema::dropIfExists('mahasiswa');
    }
}