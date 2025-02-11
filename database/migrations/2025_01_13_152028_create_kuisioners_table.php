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
        Schema::create('kuisioners', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_id')->nullable();
            $table->string('nama_kth', 255);
            $table->string('desa', 255); // desa
            $table->string('kecamatan', 255); // kecamatan
            $table->string('kabupaten', 255); // kabupaten
            $table->string('koordinat', 255);
            $table->string('nama_ketua', 255); // nama ketua
            $table->string('no_hp'); // nomor hp
            $table->string('nomor_tgl_rekening'); // nomor/tanggal registrasi
            $table->string('status_kth', 255); // status KTH
            $table->string('keterangan', 255)->nullable(); // keterangan (opsional)
            $table->string('tahun_tidak_aktif')->nullable(); // tahun tidak aktif (opsional)
            $table->string('jenis_usaha', 255); // jenis usaha
            $table->string('NIB', 255)->nullable(); // NIB (opsional)
            $table->string('PIRT', 255)->nullable(); // PIRT (opsional)
            $table->string('sertifikat_halal', 255)->nullable(); // sertifikat halal (opsional)
            $table->string('Merk_dagang', 255); // merk DGG
            $table->string('Potensi_produksi', 255); // potensi produksi
            $table->string('NTE_perbulan'); // nilai total ekonomi per bulan
            $table->string('Jangkauan_pemasaran', 255); // jangkauan pemasaran
            $table->string('Kendala', 255)->nullable(); // kendala (opsional)
            $table->string('Kebutuhan_pengembangan', 255)->nullable(); // kebutuhan pengembangan (opsional)
            $table->string('ket', 255)->nullable(); // keterangan tambahan (opsional)
            $table->timestamps(); // created_at dan updated_at

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kuisioners');
    }
};
