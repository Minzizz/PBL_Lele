<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Petugas</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>

<div class="wrapper">

    <!-- SIDEBAR -->
    <aside class="sidebar">

        <div class="logo">
            <h2>Petugas</h2>
        </div>

        <ul class="menu">
            <li class="active">
                <i class="fas fa-water"></i>
                <span>Kolam</span>
            </li>
            <li>
                <i class="fas fa-fish"></i>
                <span>Kategori Lele</span>
            </li>
            <li>
                <i class="fas fa-chart-line"></i>
                <span>Monitoring</span>
            </li>
        </ul>
    </aside>

    <!-- MAIN -->
    <main class="main-content">

        <div class="topbar">
            <h1>Dashboard Petugas</h1>
        </div>
        <!-- CARD -->
        <div class="cards">
            <div class="card">
                <h3>Total Kolam</h3>
                <p>{{ $totalKolam }}</p>
            </div>
            <div class="card">
                <h3>Total Monitoring</h3>
                <p>{{ $totalMonitoring }}</p>
            </div>
            <div class="card">
                <h3>Kategori Lele</h3>
                <p>{{ $totalKategori }}</p>
            </div>
        </div>
        <!-- TABLE -->
        <div class="table-box">
            <h2>Data Kolam</h2>
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Kolam</th>
                        <th>Kategori</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kolams as $index => $kolam)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $kolam->nama_kolam }}</td>
                        <td>{{ $kolam->kategori ?? '-' }}</td>
                        <td>
                            <span class="status aktif">
                                {{ $kolam->status }}
                            </span>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
</div>

</body>
</html>