<?php

namespace App\Http\Controllers;

use App\Models\Kuisioner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KuisionerController extends Controller
{
    public function index()
    {
        return view('kuisioner.index'); // Mengarahkan ke view kuisioner
    }
    public function store(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'nama_kth' => 'required|max:255|string',
            'desa' => 'required|max:255|string',
            'kecamatan' => 'required|max:255|string',
            'kabupaten' => 'required|max:255|string',
            'koordinat' => 'required|max:255|string',
            'nama_ketua' => 'required|max:255|string',
            'no_hp' => 'required|max:255|string',
            'nomor_tgl_rekening' => 'required|max:255|string',
            'status_kth' => 'required|max:255|string',
            'keterangan' => 'required|max:255|string',
            'tahun_tidak_aktif' => 'required|max:255|string',
            'jenis_usaha' => 'required|max:255|string',
            'NIB' => 'required|max:255|string',
            'PIRT' => 'required|max:255|string',
            'sertifikat_halal' => 'nullable|mimes:png,jpg,jpeg,webp|max:3048',
            'Merk_dagang' => 'required|max:255|string',
            'Potensi_produksi' => 'required|max:255|string',
            'NTE_perbulan' => 'required|max:255|string',
            'Jangkauan_pemasaran' => 'required|max:255|string',
            'Kendala' => 'required|max:255|string',
            'Kebutuhan_pengembangan' => 'required|max:255|string',
            'ket' => 'required|max:255|string',

        ]);

        $filename = NULL;
        $path = 'uploads/sertif/';

        if ($request->hasFile('sertifikat_halal')) {
            $file = $request->file('sertifikat_halal');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move($path, $filename);
        }

        Kuisioner::create([
            'user_id' => Auth::id(),
            'nama_kth' => $request->nama_kth,
            'desa' => $request->desa,
            'kecamatan' => $request->kecamatan,
            'kabupaten' => $request->kabupaten,
            'koordinat' => $request->koordinat,
            'nama_ketua' => $request->nama_ketua,
            'no_hp' => $request->no_hp,
            'nomor_tgl_rekening' => $request->nomor_tgl_rekening,
            'status_kth' => $request->status_kth,
            'keterangan' => $request->keterangan,
            'tahun_tidak_aktif' => $request->tahun_tidak_aktif,
            'jenis_usaha' => $request->jenis_usaha,
            'NIB' => $request->NIB,
            'PIRT' => $request->PIRT,
            'sertifikat_halal' => $filename ? $path . $filename : NULL,
            'Merk_dagang' => $request->Merk_dagang,
            'Potensi_produksi' => $request->Potensi_produksi,
            'NTE_perbulan' => $request->NTE_perbulan,
            'Jangkauan_pemasaran' => $request->Jangkauan_pemasaran,
            'Kendala' => $request->Kendala,
            'Kebutuhan_pengembangan' => $request->Kebutuhan_pengembangan,
            'ket' => $request->ket,
        ]);

        return redirect()->route('dashboard.index')->with('status', 'Data Berhasil Ditambahkan');
    }
    public function destroy($id)
    {
        $kuisioner = Kuisioner::findOrFail($id);
        // Jika ada file sertifikat_halal, hapus dari storage
        if ($kuisioner->sertifikat_halal && file_exists(public_path($kuisioner->sertifikat_halal))) {
            unlink(public_path($kuisioner->sertifikat_halal));
        }
        $kuisioner->delete();
        return redirect()->route('dashboard.index')->with('status', 'Data berhasil dihapus');
    }
}
