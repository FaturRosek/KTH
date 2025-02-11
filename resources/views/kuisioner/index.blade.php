@extends('layout.app')

@section('konten')
        <form action="{{ route('kuisioner.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
                <div class="col-md-6 d-flex align-items-end">
                    <div class="flex-grow-1 me-2">
                        <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                        <label for="nama_kth" class="form-label">Nama KTH</label>
                        <input type="text" name="nama_kth" id="nama_kth" class="form-control" placeholder="Nama KTH">
                    </div>
                    <div>
                        <label for="kelas_kth" class="form-label">Kelas</label>
                        <select id="kelas_kth" class="form-control">
                            <option value="" disabled selected>Kelas KTH</option>
                            <option value="pemula">Pemula</option>
                            <option value="utama">Utama</option>
                            <option value="madya">Madya</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="desa" class="form-label">Nama Desa</label>
                    <input type="text" name="desa" id="desa" placeholder="Nama Desa" class="form-control">
                </div>
            </div>                                  
            <div class="row mb-3">
                <div class="col-md-6">
                <label for="label" class="form-label">Nama Kecamatan</label>
                <input type="text" name="kecamatan" id="kecamatan" class="form-control"
                        placeholder="Nama Kecamatan">
                </div>
                <div class="col-md-6">
                <label for="label" class="form-label">Nama Kabupaten</label>
                <input type="text" name="kabupaten" id="kabupaten" class="form-control"
                        placeholder="Nama Kabupaten">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                <label for="label" class="form-label">Koordinat Sekretariat KTH</label>
                <input type="text" name="koordinat" id="koordinat" class="form-control"
                        placeholder="Koordinat Sekretariat KTH">
                </div>
                <div class="col-md-6">
                <label for="label" class="form-label">Nama Ketua</label>
                    <input type="text" name="nama_ketua" id="nama_ketua" class="form-control"
                    placeholder="Nama Ketua">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                <label for="label" class="form-label">Nomer HP</label>
                    <input type="text" name="no_hp" id="no_hp" class="form-control"
                    placeholder="No HP">
                </div>
                <div class="col-md-6">
                    <label for="label" class="form-label">Nomer Tanggal Rekening</label>
                    <input type="text" name="nomor_tgl_rekening" id="nomor_tgl_rekening" class="form-control"
                    placeholder="Nomer Tanggal Rekening">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="statusKth" class="form-label">Status KTH</label>
                    <select name="status_kth" id="status_kth" class="form-control">
                        <option value="" disabled selected>Status KTH</option>
                        <option value="aktif">Aktif</option>
                        <option value="tidak_aktif">Tidak Aktif</option>
                    </select>
                </div>                
                <div class="col-md-6">
                    <label for="" class="form-label">Keterangan</label>
                    <input type="text" name="keterangan" id="keterangan" class="form-control"
                    placeholder="Keterangan">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="" class="form-label">Tahun Tidak Aktif</label>
                    <input type="text" name="tahun_tidak_aktif" id="tahun_tidak_aktif" class="form-control"
                    placeholder="Tahun Tidak Aktif">
                </div>
                <div class="col-md-6">
                    <label for="" class="form-label">Jenis Usaha</label>
                    <input type="text" name="jenis_usaha" id="jenis_usaha" class="form-control"
                    placeholder="Jenis Usaha">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="" class="form-label">NIB</label>
                    <input type="text" name="NIB" id="NIB" class="form-control"
                    placeholder="NIB">
                </div>
                <div class="col-md-6">
                    <label for="" class="form-label">PIRT</label>
                    <input type="text" name="PIRT" id="PIRT" class="form-control"
                    placeholder="PIRT">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="label" class="form-label">Sertifikat Halal</label>
                    <div class="col">
                        <input type="file" name="sertifikat_halal" id="sertifikat_halal" class="form-control">
                    </div>
                </div>        
                <div class="col-md-6">
                    <label for="" class="form-label">Merek Dagang</label>
                    <input type="text" name="Merk_dagang" id="Merk_dagang" class="form-control" placeholder="Merek Dagang">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="" class="form-label">Potensi Produksi</label>
                    <input type="text" name="Potensi_produksi" id="Potensi_produksi" class="form-control"
                            placeholder="Potensi produksi">
                </div>
                <div class="col-md-6">
                    <label for="" class="form-label">NTE Perbulan</label>
                    <input type="text" name="NTE_perbulan" id="NTE_perbulan" class="form-control"
                        placeholder="NTE perbulan">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="" class="form-label">Jangkauan Pemasaran</label>
                    <input type="text" name="Jangkauan_pemasaran" id="Jangkauan_pemasaran" class="form-control"
                        placeholder="Jangkauan pemasaran">
                </div>
                <div class="col-md-6">
                    <label for="" class="form-label">Kendala</label>
                    <input type="text" name="Kendala" id="Kendala" class="form-control"
                        placeholder="Kendala">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="" class="form-label">Kebutuhan Pengembangan</label>
                    <input type="text" name="Kebutuhan_pengembangan" id="Kebutuhan_pengembangan" class="form-control"
                        placeholder="Kebutuhan Pengembangan">
                </div>
                <div class="col">
                    <label for="" class="form-label">Keterangan</label>
                    <input type="text" name="ket" id="ket" class="form-control"
                        placeholder="keterangan">
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>

<script>
    document.getElementById("kelas_kth").addEventListener("change", function() {
        var inputField = document.getElementById("nama_kth");
        var selectedValue = this.value;

        // Mengubah huruf pertama menjadi kapital
        var formattedValue = selectedValue.charAt(0).toUpperCase() + selectedValue.slice(1);

        if (inputField.value.trim() !== "") {
            inputField.value += " " + formattedValue;
        } else {
            inputField.value = formattedValue;
        }
    });
</script>
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