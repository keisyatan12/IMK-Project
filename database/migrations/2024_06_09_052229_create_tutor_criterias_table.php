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
        Schema::create('tutor_criterias', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pengirim')->length(150);
            $table->enum('jenis_kelamin',['L','P','Both']);
            $table->enum('provinsi',['Nanggroe Aceh Darussalam','Sumatera Utara', 'Sumatera Selatan','Sumatera Barat','Bengkulu','Riau','Kepulauan Riau','Jambi','Lampung','Bangka Belitung','Kalimantan Barat','Kalimantan Timur','Kalimantan Selatan','Kalimantan Tengah','Kalimantan Utara','Banten','DKI Jakarta','Jawa Barat','Jawa Tengah', 'Jawa Timur', 'Daerah Istimewa Yogyakarta','Bali','Nusa Tenggara Timur','Nusa Tenggara Barat','Gorontalo','Sulawesi Barat','Sulawesi Tengah','Sulawesi Utara','Sulawesi Tenggara','Sulawesi Selatan','Maluku Utara','Maluku','Papua Barat','Papua','Papua Tengah','Papua Pegunungan','Papua Selatan','Papua Barat Daya']);
            $table->string('alamat_mengajar')->length(250);
            $table->string('universitas/sekolah')->length(250);
            $table->enum('student_level',['S3','S2', 'S1','SMA','SMK','SMP','SD','TK']);
            $table->string('jurusan')->length(100);
            $table->string('mata_pelajaran');
            $table->enum('hari',['Senin','Selasa', 'Rabu','Kamis','Jumat','Sabtu','Minggu']);
            $table->string('cover_image');
            $table->string('jam');
            $table->string('fee');
            $table->string('additional_notes')->length(250);
            $table->timestamps();
            $table->foreign('nama_pengirim')->references('nik')->on('parents')->onDelete('restrict')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tutor_criterias');
    }
};
