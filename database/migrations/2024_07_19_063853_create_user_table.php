<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->enum('jenis_kelamin',['Laki-Laki','Perempuan']);
            $table->bigint('nomor_induk')->unique();
            $table->int('id_fakultas');
            $table->int('id_prodi');
            $table->text('foto');
            $table->string('password');
            $table->enum('status',['Mahasiswa','Dosen']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user');
    }
};