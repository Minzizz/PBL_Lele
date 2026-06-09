<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Penjualan</title>

    <link rel="stylesheet" href="{{ asset('css/akuntan.css') }}">
</head>

<body class="akuntan-page">

<div class="container">

    @include('sidebar_akuntan')

    <main class="content">

        <div class="table-card">

            <div class="table-header">

                <h2>Data Penjualan</h2>

                <button
                    type="button"
                    class="btn-tambah"
                    onclick="openModal()">
                    + Tambah Penjualan
                </button>

            </div>

            <table>

                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Jumlah (Kg)</th>
                        <th>Harga/Kg</th>
                        <th>Total Pendapatan</th>
                        <th>Biaya Operasional</th>
                        <th>Keuntungan</th>
                    </tr>
                </thead>

                <tbody>

                    @forelse($penjualans as $item)

                        <tr>
                            <td>{{ $loop->iteration }}</td>

                            <td>
                                {{ \Carbon\Carbon::parse($item->tanggal)->format('d-m-Y') }}
                            </td>

                            <td>{{ $item->jumlah_kg }}</td>

                            <td>
                                Rp {{ number_format($item->harga_per_kg,0,',','.') }}
                            </td>

                            <td>
                                Rp {{ number_format($item->total_pendapatan,0,',','.') }}
                            </td>

                            <td>
                                Rp {{ number_format($item->biaya_operasional,0,',','.') }}
                            </td>

                            <td>
                                Rp {{ number_format($item->keuntungan,0,',','.') }}
                            </td>
                        </tr>

                    @empty

                        <tr>
                            <td colspan="7" style="text-align:center;">
                                Belum ada data penjualan
                            </td>
                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </main>

</div>

<!-- MODAL TAMBAH -->

<div id="modalTambah" class="modal">

    <div class="modal-content">

        <div class="modal-header">

            <h3>Tambah Penjualan</h3>

            <span class="close" onclick="closeModal()">
                &times;
            </span>

        </div>

        <form action="{{ route('penjualan.store') }}" method="POST">

            @csrf

            <div class="grid">

                <input
                    type="date"
                    name="tanggal"
                    required>

                <input
                    type="number"
                    name="jumlah_kg"
                    placeholder="Jumlah Kg"
                    required>

                <input
                    type="number"
                    name="harga_per_kg"
                    placeholder="Harga per Kg"
                    required>

                <input
                    type="number"
                    name="biaya_operasional"
                    placeholder="Biaya Operasional"
                    required>

            </div>

            <button
                type="submit"
                class="btn-tambah">
                Simpan Data
            </button>

        </form>

    </div>

</div>

<script>

function openModal() {
    document.getElementById('modalTambah').style.display = 'flex';
}

function closeModal() {
    document.getElementById('modalTambah').style.display = 'none';
}

window.onclick = function(event) {

    let modal = document.getElementById('modalTambah');

    if(event.target == modal){
        closeModal();
    }
}

</script>

</body>
</html>