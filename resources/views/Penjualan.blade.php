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
                        <th>Aksi</th>
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

                            <td>

                                <button
                                    type="button"
                                    class="btn-edit"
                                    onclick="openEditModal(
                                        {{ $item->id }},
                                        '{{ $item->tanggal }}',
                                        {{ $item->jumlah_kg }},
                                        {{ $item->harga_per_kg }},
                                        {{ $item->biaya_operasional }}
                                    )">
                                    Edit
                                </button>

                                <form action="{{ route('penjualan.destroy', $item->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')

                                    <button
                                        type="submit"
                                        class="btn-delete"
                                        onclick="return confirm('Yakin hapus data ini?')">
                                        Hapus
                                    </button>
                                </form>

                            </td>

                        </tr>

                    @empty

                        <tr>
                            <td colspan="8" style="text-align:center;">
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

                <input type="date" name="tanggal" required>

                <input type="number" name="jumlah_kg" placeholder="Jumlah Kg" required>

                <input type="number" name="harga_per_kg" placeholder="Harga per Kg" required>

                <input type="number" name="biaya_operasional" placeholder="Biaya Operasional" required>

            </div>

            <button type="submit" class="btn-tambah">
                Simpan Data
            </button>

        </form>

    </div>

</div>

<!-- MODAL EDIT -->
<div id="modalEdit" class="modal">

    <div class="modal-content">

        <div class="modal-header">

            <h3>Edit Penjualan</h3>

            <span class="close" onclick="closeEditModal()">
                &times;
            </span>

        </div>

        <form id="formEdit" method="POST">
            @csrf
            @method('PUT')

            <div class="grid">

                <input type="date" name="tanggal" id="edit_tanggal" required>

                <input type="number" name="jumlah_kg" id="edit_jumlah" required>

                <input type="number" name="harga_per_kg" id="edit_harga" required>

                <input type="number" name="biaya_operasional" id="edit_biaya" required>

            </div>

            <button type="submit" class="btn-tambah">
                Update Data
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

/* EDIT */
function openEditModal(id, tanggal, jumlah, harga, biaya) {

    document.getElementById('modalEdit').style.display = 'flex';

    document.getElementById('edit_tanggal').value = tanggal;
    document.getElementById('edit_jumlah').value = jumlah;
    document.getElementById('edit_harga').value = harga;
    document.getElementById('edit_biaya').value = biaya;

    document.getElementById('formEdit').action = '/penjualan/' + id;
}

function closeEditModal() {
    document.getElementById('modalEdit').style.display = 'none';
}

window.onclick = function(event) {

    let modalTambah = document.getElementById('modalTambah');
    let modalEdit = document.getElementById('modalEdit');

    if(event.target == modalTambah){
        closeModal();
    }

    if(event.target == modalEdit){
        closeEditModal();
    }
}

</script>

</body>
</html>