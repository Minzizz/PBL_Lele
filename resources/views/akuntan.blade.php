<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengeluaran - Ternak Lele Saiful</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('css/akuntan.css') }}">
</head>

<body class="product-page akuntan-page">

<div class="container">

    @include('sidebar_akuntan')

    <main class="catalog-container">

    {{-- ================= PENGELUARAN ================= --}}
    <header class="catalog-header">
        <h1 class="header-title">Data Pengeluaran</h1>

        <p class="header-subtitle">
            Monitoring biaya operasional ternak lele
        </p>
    </header>

    <div class="table-wrapper">

        <table class="data-table">

            <thead>
                <tr>
                    <th>No</th>
                    <th>Kuartal</th>
                    <th>Tahun</th>
                    <th>Biaya Pakan</th>
                    <th>Biaya Listrik</th>
                    <th>Biaya Air</th>
                    <th>Biaya Vitamin</th>
                    <th>Total Biaya</th>
                </tr>
            </thead>

            <tbody>
                @forelse($pengeluarans as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>Kuartal {{ $item->kuartal }}</td>
                    <td>{{ $item->tahun }}</td>
                    <td>Rp {{ number_format($item->biaya_pakan,0,',','.') }}</td>
                    <td>Rp {{ number_format($item->biaya_listrik,0,',','.') }}</td>
                    <td>Rp {{ number_format($item->biaya_air,0,',','.') }}</td>
                    <td>Rp {{ number_format($item->biaya_vitamin,0,',','.') }}</td>
                    <td>Rp {{ number_format($item->total_biaya,0,',','.') }}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="8" class="text-center">
                        Belum ada data pengeluaran
                    </td>
                </tr>
                @endforelse
            </tbody>

        </table>

    </div>

    {{-- JARAK --}}
    <div style="height:50px;"></div>

    {{-- ================= PENJUALAN ================= --}}
    <header class="catalog-header">
        <h1 class="header-title">Data Penjualan</h1>

        <p class="header-subtitle">
            Monitoring hasil penjualan lele
        </p>
    </header>

    <div class="table-wrapper">

        <table class="data-table">

            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Jumlah Kg</th>
                    <th>Harga / Kg</th>
                    <th>Total Pendapatan</th>
                    <th>Biaya Operasional</th>
                    <th>Keuntungan</th>
                </tr>
            </thead>

            <tbody>
                @forelse($penjualans as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->tanggal }}</td>
                    <td>{{ $item->jumlah_kg }}</td>
                    <td>Rp {{ number_format($item->harga_per_kg,0,',','.') }}</td>
                    <td>Rp {{ number_format($item->total_pendapatan,0,',','.') }}</td>
                    <td>Rp {{ number_format($item->biaya_operasional,0,',','.') }}</td>
                    <td>Rp {{ number_format($item->keuntungan,0,',','.') }}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="text-center">
                        Belum ada data penjualan
                    </td>
                </tr>
                @endforelse
            </tbody>

        </table>

    </div>

</main>
</div>

</body>

</html>