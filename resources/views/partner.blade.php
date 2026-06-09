<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partner Kami</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

<div class="partner-container">

    <div class="partner-header">
        <h1>Partner Kami</h1>
    </div>

    <div class="partner-grid">

        @forelse($partners as $p)

            <div class="partner-card">

                <div class="partner-logo-box">
                    @if($p->logo)
                        <img src="{{ asset('storage/' . $p->logo) }}">
                    @else
                        <div class="no-logo">Tidak ada logo</div>
                    @endif
                </div>

                <h3>{{ $p->nama_partner }}</h3>

                <span class="partner-type">
                    {{ $p->jenis_usaha ?? '-' }}
                </span>

                <p>
                    {{ $p->deskripsi ?? '-' }}
                </p>

            </div>

        @empty

            <div class="empty">
                Belum ada data partner
            </div>

        @endforelse

    </div>

</div>

</body>
</html>