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
        Schema::create('jobseekers', function (Blueprint $table) {
            $table->string('nik')->length(16)->primary();
            $table->unsignedBigInteger('user_id');
            $table->string('nama_jobseeker')->length(150);
            $table->enum('jenis_kelamin',['L','P']);
            $table->string('tempat_lahir')->length(100);
            $table->date('tanggal_lahir');
            $table->string('no_hp')->length(14);
            $table->enum('provinsi',['Nanggroe Aceh Darussalam','Sumatera Utara', 'Sumatera Selatan','Sumatera Barat','Bengkulu','Riau','Kepulauan Riau','Jambi','Lampung','Bangka Belitung','Kalimantan Barat','Kalimantan Timur','Kalimantan Selatan','Kalimantan Tengah','Kalimantan Utara','Banten','DKI Jakarta','Jawa Barat','Jawa Tengah', 'Jawa Timur', 'Daerah Istimewa Yogyakarta','Bali','Nusa Tenggara Timur','Nusa Tenggara Barat','Gorontalo','Sulawesi Barat','Sulawesi Tengah','Sulawesi Utara','Sulawesi Tenggara','Sulawesi Selatan','Maluku Utara','Maluku','Papua Barat','Papua','Papua Tengah','Papua Pegunungan','Papua Selatan','Papua Barat Daya']);
            $table->string('alamat_domisili')->length(250);
            $table->string('universitas/sekolah')->length(250);
            $table->enum('jenjang_pendidikan',['S3','S2', 'S1','SMA','SMK']);
            $table->string('jurusan')->length(100);
            $table->string('image');
            $table->string('cv');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('restrict')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobseekers');
    }
};
