<?php

namespace App\Exports;

use App\Models\Kuisioner;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class KuisionerExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return Kuisioner::select(
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
        )->get();
    }

    public function headings(): array
    {
        return [
            'Nama KTH',
            'Alamat - Desa',
            'Alamat - Kecamatan',
            'Alamat - Kabupaten',
            'Nama Ketua',
            'No HP',
            'No & Tgl Register KTH',
            'Status KTH (Aktif/Tidak Aktif)',
            'Keterangan (Tidak aktif karena?)',
            'Tahun Terhitung Tidak Aktif?',
            'Jenis Usaha',
            'Kelengkapan Perizinan Usaha - NIB',
            'Kelengkapan Perizinan Usaha - PIRT',
            'Kelengkapan Perizinan Usaha - Sertifikat Halal',
            'Kelengkapan Perizinan Usaha - Merk Dagang (Sudah/Terdaftar)',
            'Potensi Produksi (Per Tahun/Satuan Menyesuaikan)',
            'NTE Per Bulan (Rp)',
            'Jangkauan Pemasaran (Desa/Kec/Kab/Prov/DN/LN)',
            'Kendala',
            'Kebutuhan Pengembangan Usaha (Pelatihan, Modal, AEP, dll)',
            'Keterangan'
        ];
    }
}
