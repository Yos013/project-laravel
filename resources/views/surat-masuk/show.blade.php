<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Surat Masuk</title>
</head>
<body>
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
</body>
</html>