@extends('layouts.app')

@section('title', 'Detail Surat Keluar')

@section('content')
    <h1>Halaman Detail Surat Keluar</h1>

    @if(isset($suratKeluarShow))
        <p><strong>Nomor Surat:</strong> {{ $suratKeluarShow['nomor_surat'] }}</p>
        <p><strong>Tanggal:</strong> {{ $suratKeluarShow['tanggal'] }}</p>
        <p><strong>Tujuan:</strong> {{ $suratKeluarShow['tujuan'] }}</p>
        <p><strong>Perihal:</strong> {{ $suratKeluarShow['perihal'] }}</p>
    @else
        <p>Surat tidak ditemukan.</p>
    @endif

    <br>
    <a href="{{ route('surat-keluar.index') }}">&laquo; Kembali ke Daftar Surat Keluar</a>
@endsection