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
        Schema::create('daftars', function (Blueprint $table) {
            $table->id(); // Field id
            $table->unsignedBigInteger('pasien_id'); // Field pasien_id
            $table->date('tanggal_daftar'); // Field tanggal_daftar
            $table->unsignedBigInteger('poli_id'); // Field poli_id
            $table->text('keluhan'); // Field keluhan
            $table->text('diagnosis')->nullable(); // Field diagnosis, nullable
            $table->text('tindakan')->nullable(); // Field tindakan, nullable
            $table->timestamps(); // Menambahkan created_at dan updated_at
            // Menambahkan foreign key untuk pasien_id
            $table->foreign('pasien_id')->references('id')->on('pasiens')->onDelete('cascade');
            // Menambahkan foreign key untuk poli_id
            $table->foreign('poli_id')->references('id')->on('polis')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daftars');
    }
};
