<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuratMasukController extends Controller
{
    public function index(){
        $suratMasuk = [
            1 => [
                'id'          => 1,
                'nomor surat' => '002/BAA/2025',
                'tanggal'     => '13-04-2025',
                'pengirim'    => 'BAA',
                'perihal'     => 'Edaran Akademik'
            ],
            2 => [
                'id'          => 2,
                'nomor surat' => '002/BSS/2026',
                'tanggal'     => '13-04-2026',
                'pengirim'    => 'BSS',
                'perihal'     => 'Ujian Fisik'
            ]
        ];

        return view('surat-masuk.index', compact('suratMasuk'));
    }

    public function show($id){
        $suratMasuk = [
            1 => [
                'id'          => 1,
                'nomor surat' => '002/BAA/2025',
                'tanggal'     => '13-04-2025',
                'pengirim'    => 'BAA',
                'perihal'     => 'Edaran Akademik'
            ],
            2 => [
                'id'          => 2,
                'nomor surat' => '002/BSS/2026',
                'tanggal'     => '13-04-2026',
                'pengirim'    => 'BSS',
                'perihal'     => 'Ujian Fisik'
            ]
        ];

        // Mengambil data berdasarkan ID yang dikirim dari route
        $suratMasukShow = $suratMasuk[$id] ?? null;

        return view('surat-masuk.show', compact('suratMasukShow'));
    }
}