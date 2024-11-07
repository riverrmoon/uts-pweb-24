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
        Schema::create('pasiens', function (Blueprint $table) {
            $table->id(); // Field id sebagai primary key dan auto-increment
            $table->string('no_pasien', 255); // Field no_pasien
            $table->string('nama', 255); // Field nama
            $table->enum('jenis_kelamin', ['laki-laki', 'perempuan']); // Field jenis_kelamin
            $table->string('umur', 255); // Field umur
            $table->text('alamat')->nullable(); // Field alamat, nullable
            $table->string('foto')->nullable(); // Field foto, nullable
            $table->timestamps(); // Menambahkan created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pasiens');
    }
};
