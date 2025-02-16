@extends('layout.app')

@section('konten')
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr class="text-center align-middle">
                    <th>No.</th>
                    <th>Nama Penyuluh</th>
                    <th>Nama KTH</th>
                    <th>Desa</th>
                    <th>Kecamatan</th>
                    <th>Kabupaten</th>
                    <th>Koordinat</th>
                    <th>Nama Ketua</th>
                    <th>No HP</th>
                    <th>Nomor Tanggal Register</th>
                    <th>Status KTH</th>
                    <th>Keterangan Tidak Aktif</th>
                    <th>Tahun Tidak Aktif</th>
                    <th>Jenis Usaha</th>
                    <th>SK Pengukuhan</th>
                    <th>PIRT</th>
                    <th>Sertifikat Halal</th>
                    <th>Merk Dagang</th>
                    <th>Potensi Produksi</th>
                    <th>NTE Perbulan</th>
                    <th>Jangkauan Pemasaran</th>
                    <th>Kendala</th>
                    <th>Kebutuhan Pengembangan</th>
                    <th>Keterangan</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kuisioner as $k)
                    <tr class="text-center align-middle">
                        <td>{{ $loop->iteration }}</td>
                        <td style="word-wrap: break-word;">{{ $k->nama_penyuluh }}</td>
                        <td>{{$k->nama_kth}}</td>
                        <td>{{ $k->desa }}</td>
                        <td>{{ $k->kecamatan }}</td>
                        <td>{{ $k->kabupaten }}</td>
                        <td>{{ $k->koordinat }}</td>
                        <td>{{ $k->nama_ketua }}</td>
                        <td>{{ $k->no_hp }}</td>
                        <td>{{ $k->nomor_tgl_register }}</td>
                        <td>{{ $k->status_kth }}</td>
                        <td>{{ $k->keterangan }}</td>
                        <td>{{ $k->tahun_tidak_aktif }}</td>
                        <td>{{ $k->jenis_usaha }}</td>
                        <td>
                            @if ($k->sk_pengukuhan)
                            <a href="{{ asset($k->sk_pengukuhan) }}" target="_blank" class="btn btn-primary btn-sm">Lihat</a>
                            @else
                                -
                            @endif
                        </td>
                        <td>{{ $k->PIRT }}</td>
                        <td>
                            @if ($k->sertifikat_halal)
                                <a href="{{ asset($k->sertifikat_halal) }}" target="_blank" class="btn btn-primary btn-sm">Lihat</a>
                            @else
                                -
                            @endif
                        </td>
                        <td>{{ $k->Merk_dagang }}</td>
                        <td>{{ $k->Potensi_produksi }}</td>
                        <td>{{ $k->NTE_perbulan }}</td>
                        <td>{{ $k->Jangkauan_pemasaran }}</td>
                        <td>{{ $k->Kendala }}</td>
                        <td>{{ $k->Kebutuhan_pengembangan }}</td>
                        <td>{{ $k->ket }}</td>
                        <td>
                            <form action="{{ route('kuisioner.destroy', $k->id) }}" method="POST" class="d-inline"
                                onsubmit="return confirm('Delete?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger m-0 delete-button" data-id="{{ $k->id }}"><i
                                        class="fas fa-trash"></i></button>
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
