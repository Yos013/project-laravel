@extends('layouts.app')

@section('title', 'Surat Keluar')

@section('content')
    <h2>halaman ini menampilkan halaman surat keluar</h2>
    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>No Urut</th>
                <th>No Surat</th>
                <th>Tanggal</th>
                <th>Tujuan</th>
                <th>Perihal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($suratKeluar as $id => $item)
                <tr>
                    <td>{{ $id }}</td>
                    <td>{{ $item['nomor_surat'] }}</td>
                    <td>{{ $item['tanggal'] }}</td>
                    <td>{{ $item['tujuan'] }}</td>
                    <td>{{ $item['perihal'] }}</td>
                    <td>
                        <a href="{{ route('surat-keluar.show', $id) }}">Detail</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" align="center">Tidak ada data surat keluar.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection