<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kuisioner extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'nama_kth',
        'desa',
        'kecamatan',
        'kabupaten',
        'koordinat',
        'nama_ketua',
        'no_hp',
        'nomor_tgl_rekening',
        'status_kth',
        'keterangan',
        'tahun_tidak_aktif',
        'jenis_usaha',
        'NIB',
        'PIRT',
        'sertifikat_halal',
        'Merk_dagang',
        'Potensi_produksi',
        'NTE_perbulan',
        'Jangkauan_pemasaran',
        'Kendala',
        'Kebutuhan_pengembangan',
        'ket',

    ];
}
