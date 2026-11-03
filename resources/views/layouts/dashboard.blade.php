@extends('layouts.app')

@section('content')
<div style="display: flex; justify-content: space-between; align-items: center;">
    <h1>Dashboard</h1>
    
    <!-- Tombol Logout -->
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" style="background-color: #dc3545; color: white; border: none; padding: 8px 16px; cursor: pointer; border-radius: 4px;">
            Logout
        </button>
    </form>
</div>

<!-- Informasi User yang sedang Login -->
<div style="background-color: #f8f9fa; padding: 15px; border-radius: 5px; margin-bottom: 20px; border: 1px solid #dee2e6;">
    <p style="margin: 0;">Selamat Datang, <strong>{{ Auth::user()->name }}</strong>!</p>
    <p style="margin: 5px 0 0 0;">Role Anda: <span style="background-color: #0d6efd; color: white; padding: 2px 8px; border-radius: 10px; font-size: 12px;">{{ Auth::user()->role }}</span></p>
</div>

<p>Selamat Datang di Sistem Informasi Surat.</p>
@endsection