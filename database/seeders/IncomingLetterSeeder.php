<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IncomingLetterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('incoming_letters')->insert([
            [
                'nomor_surat' => '002/BAA/2025',
                'tanggal' => '2025-04-13',
                'pengirim' => 'BAA',
                'perihal' => 'Edaran Akademik',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nomor_surat' => '002/BSS/2026',
                'tanggal' => '2026-04-13',
                'pengirim' => 'BSS',
                'perihal' => 'Ujian Fisik',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}