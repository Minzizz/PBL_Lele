<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monitoring Kolam</title>

    <link rel="stylesheet" href="{{ asset('css/petugas.css') }}">
</head>
<body>
<div class="container">

       @include('sidebar')

        <div class="table-card">
        <div class="table-header">
            <h2>Data Monitoring</h2>

            <button class="btn-tambah"
                onclick="document.getElementById('modalTambah').style.display='flex'">
                + Monitoring Baru
            </button>
        </div>

        <table>

            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Suhu</th>
                    <th>Kondisi</th>
                    <th>Ikan Mati</th>
                    <th>Laporan</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>

            @foreach($monitorings as $item)

                <tr>

                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->tanggal }}</td>
                    <td>{{ $item->suhu_air }}°C</td>
                    <td>{{ ucfirst($item->kondisi_air) }}</td>
                    <td>{{ $item->ikan_mati }}</td>
                    <td>{{ $item->laporan_deskriptif }}</td>

                    <td>

                        <button
                            class="btn-edit"
                            onclick="document.getElementById('editModal{{ $item->id }}').style.display='flex'">
                            Edit
                        </button>

                        <form
                            action="{{ route('monitoring.destroy',$item->id) }}"
                            method="POST"
                            style="display:inline">

                            @csrf
                            @method('DELETE')

                            <button class="btn-delete">
                                Hapus
                            </button>

                        </form>

                    </td>

                </tr>

                {{-- MODAL EDIT --}}
                <div id="editModal{{ $item->id }}" class="modal">

                    <div class="modal-content">

                        <div class="modal-header">

                            <h3>Edit Monitoring</h3>

                            <span class="close"
                                onclick="document.getElementById('editModal{{ $item->id }}').style.display='none'">
                                &times;
                            </span>

                        </div>

                        <form action="{{ route('monitoring.update',$item->id) }}"
                              method="POST">

                            @csrf
                            @method('PUT')

                            <div class="grid">

                                <input
                                    type="date"
                                    name="tanggal"
                                    value="{{ $item->tanggal }}"
                                    required>

                                <input
                                    type="number"
                                    step="0.1"
                                    name="suhu_air"
                                    value="{{ $item->suhu_air }}">

                                <select name="kondisi_air">

                                    <option value="jernih" {{ $item->kondisi_air == 'jernih' ? 'selected' : '' }}>
                                        Jernih
                                    </option>

                                    <option value="keruh" {{ $item->kondisi_air == 'keruh' ? 'selected' : '' }}>
                                        Keruh
                                    </option>

                                    <option value="hijau" {{ $item->kondisi_air == 'hijau' ? 'selected' : '' }}>
                                        Hijau Pekat
                                    </option>

                                    <option value="bau" {{ $item->kondisi_air == 'bau' ? 'selected' : '' }}>
                                        Berbau
                                    </option>

                                </select>

                                <input
                                    type="number"
                                    name="ikan_mati"
                                    value="{{ $item->ikan_mati }}">

                            </div>

                            <textarea
                                name="laporan_deskriptif"
                                rows="4">{{ $item->laporan_deskriptif }}</textarea>

                            <button type="submit" class="btn-edit">
                                Update Data
                            </button>

                        </form>

                    </div>

                </div>

            @endforeach

            </tbody>

        </table>

    </div>

</div>

{{-- MODAL TAMBAH --}}
<div id="modalTambah" class="modal">

    <div class="modal-content">

        <div class="modal-header">

            <h3>Tambah Monitoring</h3>

            <span class="close"
                onclick="document.getElementById('modalTambah').style.display='none'">
                &times;
            </span>

        </div>

        <form action="{{ route('monitoring.store') }}" method="POST">

            @csrf

            <div class="grid">

                <input
                    type="date"
                    name="tanggal"
                    required>

                <input
                    type="number"
                    step="0.1"
                    name="suhu_air"
                    placeholder="Suhu Air">

                <select name="kondisi_air">

                    <option value="jernih">Jernih</option>
                    <option value="keruh">Keruh</option>
                    <option value="hijau">Hijau Pekat</option>
                    <option value="bau">Berbau</option>

                </select>

                <input
                    type="number"
                    name="ikan_mati"
                    placeholder="Jumlah Ikan Mati">

            </div>

            <textarea
                name="laporan_deskriptif"
                rows="4"
                placeholder="Laporan Harian"></textarea>

            <button type="submit" class="btn-tambah">
                Simpan Data
            </button>

        </form>

    </div>

</div>

</body>
</html>