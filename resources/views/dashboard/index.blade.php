@extends('layout.app')

@section('konten')
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead class="table-dark">
                        <tr class="text-center align-middle">
                            <th>No.</th>
                            <th>Nama KTH</th>
                            <th>Desa</th>
                            <th>Kecamatan</th>
                            <th>Kabupaten</th>
                            <th>Koordinat</th>
                            <th>Nama Ketua</th>
                            <th>No HP</th>
                            <th>Nomor Tgl Rekening</th>
                            <th>Status KTH</th>
                            <th>Keterangan</th>
                            <th>Tahun Tidak Aktif</th>
                            <th>Jenis Usaha</th>
                            <th>NIB</th>
                            <th>PIRT</th>
                            <th>Sertifikat Halal</th>
                            <th>Merk Dagang</th>
                            <th>Potensi Produksi</th>
                            <th>NTE Perbulan</th>
                            <th>Jangkauan Pemasaran</th>
                            <th>Kendala</th>
                            <th>Kebutuhan Pengembangan</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kuisioner as $k)
                            <tr class="text-center align-middle">
                                <td>{{ $loop->iteration }}</td>
                                <td style="word-wrap: break-word;">{{ $k->nama_kth }}</td>
                                <td>{{ $k->desa }}</td>
                                <td>{{ $k->kecamatan }}</td>
                                <td>{{ $k->kabupaten }}</td>
                                <td>{{ $k->koordinat }}</td>
                                <td>{{ $k->nama_ketua }}</td>
                                <td>{{ $k->no_hp }}</td>
                                <td>{{ $k->nomor_tgl_rekening }}</td>
                                <td>{{ $k->status_kth }}</td>
                                <td>{{ $k->keterangan }}</td>
                                <td>{{ $k->tahun_tidak_aktif }}</td>
                                <td>{{ $k->jenis_usaha }}</td>
                                <td>{{ $k->NIB }}</td>
                                <td>{{ $k->PIRT }}</td>
                                <td>
                                    <img src="{{ asset($k->sertifikat_halal) }}" class="img-thumbnail"
                                        style="max-width: 50px; max-height: 50px;" alt="Img" />
                                </td>
                                <td>{{ $k->Merk_dagang }}</td>
                                <td>{{ $k->Potensi_produksi }}</td>
                                <td>{{ $k->NTE_perbulan }}</td>
                                <td>{{ $k->Jangkauan_pemasaran }}</td>
                                <td>{{ $k->Kendala }}</td>
                                <td>{{ $k->Kebutuhan_pengembangan }}</td>
                                <td>{{ $k->ket }}</td>
                                <td>
                                    <form action="{{ route('kuisioner.destroy', $k->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="d-flex justify-content-end mb-3">
                <a href="{{ route('export.kuisioner') }}" class="btn btn-success">
                    <i class="fas fa-file-excel"></i> Export ke Excel
                </a>
            </div>
    <style>
        @media (max-width: 768px) {
            #main {
                margin-left: 0 !important;
                margin-top: 60px;
                padding: 10px;
            }
        }
    </style>
@endsection

