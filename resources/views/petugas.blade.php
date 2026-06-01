<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard Petugas</title>

    <link rel="stylesheet" href="{{ asset('css/petugas.css') }}">
</head>
<body>

<div class="container">

    <!-- Sidebar -->
   @include('sidebar')

    <!-- Content -->
    <main class="content">

        <h1>Dashboard Petugas</h1>

        <div class="cards">
            <div class="card">
                <h3>Total Kolam</h3>
                <p>{{ $kolams->count() }}</p>
            </div>

            <div class="card">
                <h3>Total Monitoring</h3>
                <p>{{ $monitorings->count() }}</p>
            </div>

            <div class="card">
                <h3>Jenis Lele</h3>
                <p>{{ $kategoriLeles->count() }}</p>
            </div>
        </div>

        <!-- Monitoring -->
        <section id="monitoring">
            <h2>Monitoring Kolam</h2>

            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Suhu Air</th>
                        <th>Kondisi Air</th>
                        <th>Ikan Mati</th>
                        <th>Laporan</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($monitorings as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->tanggal }}</td>
                        <td>{{ $item->suhu_air }} °C</td>
                        <td>{{ $item->kondisi_air }}</td>
                        <td>{{ $item->ikan_mati }}</td>
                        <td>{{ $item->laporan_deskriptif }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </section>

        <!-- Kolam -->
        <section id="kolam">
            <h2>Data Kolam</h2>

            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Kolam</th>
                        <th>Lokasi</th>
                        <th>Kapasitas</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($kolams as $kolam)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $kolam->nama_kolam }}</td>
                        <td>{{ $kolam->lokasi }}</td>
                        <td>{{ $kolam->kapasitas }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </section>

        <!-- Lele -->
        <section id="lele">
            <h2>Data Lele</h2>

            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Jenis Lele</th>
                        <th>Ukuran Minimum</th>
                        <th>Deskripsi</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($kategoriLeles as $lele)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $lele->nama_kategori }}</td>
                        <td>{{ $lele->ukuran_minimum }}</td>
                        <td>{{ $lele->deskripsi }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </section>

    </main>

</div>

</body>
</html>