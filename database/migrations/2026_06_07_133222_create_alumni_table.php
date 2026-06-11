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
        Schema::create('alumni', function (Blueprint $table) {
        $table->id();

        $table->string('nama_gelar');
        $table->year('tahun_angkatan');
        $table->string('nim_3_digit', 3);

        $table->enum('jenis_kelamin', [
            'Laki-laki',
            'Perempuan'
        ]);

        $table->string('tempat_lahir');
        $table->date('tanggal_lahir');

        $table->string('no_hp');
        $table->string('no_whatsapp');

        $table->string('provinsi');
        $table->string('kota_kabupaten');
        $table->string('kecamatan');
        $table->string('kelurahan');
        $table->text('alamat');

        $table->string('institusi');
        $table->string('jabatan');
        $table->text('alamat_kerja');

        $table->text('bidang_keahlian')->nullable();
        $table->text('hobi')->nullable();
        $table->text('pesan_harapan')->nullable();

        $table->string('foto')->nullable();

        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumni');
    }
};
