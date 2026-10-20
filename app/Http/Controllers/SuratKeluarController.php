<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuratKeluarController extends Controller
{
    private $daftarSuratKeluar = [
        '1' => [
            'nomor_surat' => '001/SK/2026',
            'tanggal'     => '15-05-2026',
            'tujuan'      => 'Dinas Pendidikan',
            'perihal'     => 'Undangan Rapat',
        ],
        '2' => [
            'nomor_surat' => '002/SK/2026',
            'tanggal'     => '20-05-2026',
            'tujuan'      => 'Kementerian Agama',
            'perihal'     => 'Pemberitahuan Kegiatan',
        ],
    ];

    public function index()
    {
        $suratKeluar = $this->daftarSuratKeluar;
        return view('surat-keluar.index', compact('suratKeluar'));
    }

    public function show($id)
    {
        $suratKeluarShow = $this->daftarSuratKeluar[$id] ?? null;
        return view('surat-keluar.show', compact('suratKeluarShow'));
    }
}