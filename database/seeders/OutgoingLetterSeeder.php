<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OutgoingLetterSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'nomor_surat' => '001/SK/X/2026',
                'tanggal'     => '2026-10-05',
                'tujuan'      => 'PT Maju Mundur',
                'perihal'     => 'Permohonan Kerjasama',
                'keterangan'  => 'Kerjasama lab komputer',
            ],
            [
                'nomor_surat' => '002/SK/X/2026',
                'tanggal'     => '2026-10-06',
                'tujuan'      => 'Universitas Lain',
                'perihal'     => 'Undangan Seminar',
                'keterangan'  => 'Seminar nasional web dev',
            ],
        ];

        foreach ($data as $surat) {
            DB::table('outgoing_letters')->updateOrInsert(
                ['nomor_surat' => $surat['nomor_surat']],
                $surat + ['created_at' => now(), 'updated_at' => now()]
            );
        }
    }
}