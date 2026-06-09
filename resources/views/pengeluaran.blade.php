<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pengeluaran</title>

    <link rel="stylesheet" href="{{ asset('css/akuntan.css') }}">
</head>

<body class="akuntan-page">

<div class="container">

    @include('sidebar_akuntan')

    <main class="content">

        {{-- HEADER --}}
        <div class="table-header">
            <h2>Data Pengeluaran</h2>

            <button type="button" class="btn-tambah" onclick="openModal()">
                + Tambah Pengeluaran
            </button>
        </div>

        {{-- TABLE --}}
        <div class="table-card">
            <table>
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
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($pengeluarans as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->kuartal }}</td>
                            <td>{{ $item->tahun }}</td>

                            <td>Rp {{ number_format($item->biaya_pakan,0,',','.') }}</td>
                            <td>Rp {{ number_format($item->biaya_listrik,0,',','.') }}</td>
                            <td>Rp {{ number_format($item->biaya_air,0,',','.') }}</td>
                            <td>Rp {{ number_format($item->biaya_vitamin,0,',','.') }}</td>
                            <td>Rp {{ number_format($item->total_biaya,0,',','.') }}</td>

                            <td>
                                <button type="button"
                                    class="btn-edit"
                                    onclick="openEditModal(
                                        {{ $item->id }},
                                        {{ $item->kuartal }},
                                        {{ $item->tahun }},
                                        {{ $item->biaya_pakan }},
                                        {{ $item->biaya_listrik }},
                                        {{ $item->biaya_air }},
                                        {{ $item->biaya_vitamin }}
                                    )">
                                    Edit
                                </button>
                                <form action="{{ route('pengeluaran.destroy', $item->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                            class="btn-delete"
                                            onclick="return confirm('Yakin hapus data?')">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="9" style="text-align:center;">
                                Belum ada data pengeluaran
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

    </main>
</div>

{{-- MODAL TAMBAH --}}
<div id="modalTambah" class="modal">

    <div class="modal-content">

        <div class="modal-header">
            <h3>Tambah Pengeluaran</h3>

            <span class="close" onclick="closeModal()">&times;</span>
        </div>

        <form action="{{ route('pengeluaran.store') }}" method="POST">
            @csrf

            <div class="grid">

                <select name="kuartal" required>
                    <option value="">Pilih Kuartal</option>
                    <option value="1">Kuartal 1</option>
                    <option value="2">Kuartal 2</option>
                    <option value="3">Kuartal 3</option>
                    <option value="4">Kuartal 4</option>
                </select>

                <input type="number" name="tahun" placeholder="Tahun" required>

                <input type="number" name="biaya_pakan" placeholder="Biaya Pakan" required>
                <input type="number" name="biaya_listrik" placeholder="Biaya Listrik" required>
                <input type="number" name="biaya_air" placeholder="Biaya Air" required>
                <input type="number" name="biaya_vitamin" placeholder="Biaya Vitamin" required>

            </div>

            <div style="margin-top:20px;">
                <button type="submit" class="btn-tambah">
                    Simpan Data
                </button>
            </div>

        </form>

    </div>
</div>
<div id="modalEdit" class="modal">

    <div class="modal-content">

        <div class="modal-header">
            <h3>Edit Pengeluaran</h3>

            <span class="close" onclick="closeEditModal()">&times;</span>
        </div>

        <form id="formEdit" method="POST">
            @csrf
            @method('PUT')

            <div class="grid">

                <input type="number" name="kuartal" id="edit_kuartal" required>
                <input type="number" name="tahun" id="edit_tahun" required>

                <input type="number" name="biaya_pakan" id="edit_pakan" required>
                <input type="number" name="biaya_listrik" id="edit_listrik" required>
                <input type="number" name="biaya_air" id="edit_air" required>
                <input type="number" name="biaya_vitamin" id="edit_vitamin" required>

            </div>

            <div style="margin-top:20px;">
                <button type="submit" class="btn-tambah">
                    Update Data
                </button>
            </div>

        </form>

    </div>
</div>


{{-- SCRIPT --}}
<script>
function openModal() {
    document.getElementById('modalTambah').style.display = 'flex';
}

function closeModal() {
    document.getElementById('modalTambah').style.display = 'none';
}

window.onclick = function(event) {
    let modal = document.getElementById('modalTambah');
    if (event.target === modal) {
        modal.style.display = 'none';
    }
}
function openEditModal(id, kuartal, tahun, pakan, listrik, air, vitamin) {
    document.getElementById('modalEdit').style.display = 'flex';

    document.getElementById('edit_kuartal').value = kuartal;
    document.getElementById('edit_tahun').value = tahun;
    document.getElementById('edit_pakan').value = pakan;
    document.getElementById('edit_listrik').value = listrik;
    document.getElementById('edit_air').value = air;
    document.getElementById('edit_vitamin').value = vitamin;

    document.getElementById('formEdit').action = '/pengeluaran/update/' + id;
}

function closeEditModal() {
    document.getElementById('modalEdit').style.display = 'none';
}
</script>

</body>
</html>