<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->enum('jeniskel',['L','P']);
            $table->string('tempatlahir');
            $table->date('tanggallahir');
            $table->text('alamat');
            $table->unsignedBigInteger('id_user');
            // $table->string('statusAkun')->default('diproses');
            $table->string('statusMahasiswa')->default('diproses');
            $table->string('noktp',16);
            $table->enum('prodi',['IF','SI','MJ']);



            $table->timestamps();

            $table->foreign('id_user')->references('id')->on('users');
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
};
