@extends('layouts.app')

@section('title', 'Surat Masuk')

@section('content')

    <h1>Halaman Detail Surat Masuk</h1>

    @if(isset($suratMasukShow))
        <p>
            <strong>Nomor Surat: </strong> 
            {{ $suratMasukShow['nomor surat'] }}
        </p>
        <p>
            <strong>Tanggal: </strong> 
            {{ $suratMasukShow['tanggal'] }}
        </p>
        <p>
            <strong>Pengirim: </strong> 
            {{ $suratMasukShow['pengirim'] }}
        </p>
        <p>
            <strong>Perihal: </strong> 
            {{ $suratMasukShow['perihal'] }}
        </p>
    @else
        <p>surat tidak ditemukan.</p>
    @endif

    <br>
    <a href="{{ route('surat-masuk.index') }}">Kembali ke Daftar Surat</a>
@endsection
