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
        Schema::create('tutor_schedules', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('tutor_name')->length(150);
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->timestamps();
            $table->foreign('tutor_name')->references('nik')->on('tutors')->onDelete('restrict')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tutor_schedules');
    }
};
