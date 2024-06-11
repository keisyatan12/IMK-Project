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
        Schema::create('superadmins', function (Blueprint $table) {
            $table->string('nik')->length(16)->primary();
            $table->unsignedBigInteger('user_id');
            $table->string('nama_superadmin')->length(150);
            $table->enum('jenis_kelamin',['L','P']);
            $table->string('tempat_lahir')->length(100);
            $table->date('tanggal_lahir');
            $table->string('alamat_domisili')->length(250);
            $table->enum('jenjang_pendidikan',['S3','S2', 'S1','SMA','SMK']);
            $table->string('jurusan')->length(100);
            $table->string('image');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('restrict')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('superadmins');
    }
};
