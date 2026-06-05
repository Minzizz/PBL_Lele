<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kolam</title>

    <link rel="stylesheet" href="{{ asset('css/petugas.css') }}">
</head>
<body>

<div class="container">

    @include('sidebar')

    <main class="content">

        <div class="table-card">

            <div class="table-header">
                <h2>Data Kolam</h2>

                <button class="btn-tambah"
                    onclick="document.getElementById('modalTambah').style.display='flex'">
                    + Kolam Baru
                </button>
            </div>

            <table>

                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Kolam</th>
                        <th>Lokasi</th>
                        <th>Kapasitas</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>

                @foreach($kolams as $kolam)

                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $kolam->nama_kolam }}</td>
                        <td>{{ $kolam->lokasi }}</td>
                        <td>{{ number_format($kolam->kapasitas) }}</td>

                        <td>

                            <button
                                class="btn-edit"
                                onclick="document.getElementById('editModal{{ $kolam->id }}').style.display='flex'">
                                Edit
                            </button>

                            <form
                                action="{{ route('kolam.destroy',$kolam->id) }}"
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

                    {{-- Modal Edit --}}
                    <div id="editModal{{ $kolam->id }}" class="modal">

                        <div class="modal-content">

                            <div class="modal-header">
                                <h3>Edit Data Kolam</h3>

                                <span class="close"
                                    onclick="document.getElementById('editModal{{ $kolam->id }}').style.display='none'">
                                    &times;
                                </span>
                            </div>

                            <form action="{{ route('kolam.update',$kolam->id) }}" method="POST">

                                @csrf
                                @method('PUT')

                                <div class="grid">

                                    <input
                                        type="text"
                                        name="nama_kolam"
                                        value="{{ $kolam->nama_kolam }}"
                                        placeholder="Nama Kolam"
                                        required>

                                    <input
                                        type="text"
                                        name="lokasi"
                                        value="{{ $kolam->lokasi }}"
                                        placeholder="Lokasi"
                                        required>

                                    <input
                                        type="number"
                                        name="kapasitas"
                                        value="{{ $kolam->kapasitas }}"
                                        placeholder="Kapasitas"
                                        required>

                                </div>

                                <br>

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

    </main>

</div>

{{-- Modal Tambah --}}
<div id="modalTambah" class="modal">

    <div class="modal-content">

        <div class="modal-header">

            <h3>Tambah Data Kolam</h3>

            <span class="close"
                onclick="document.getElementById('modalTambah').style.display='none'">
                &times;
            </span>

        </div>

        <form action="{{ route('kolam.store') }}" method="POST">

            @csrf

            <div class="grid">

                <input
                    type="text"
                    name="nama_kolam"
                    placeholder="Nama Kolam"
                    required>

                <input
                    type="text"
                    name="lokasi"
                    placeholder="Lokasi"
                    required>

                <input
                    type="number"
                    name="kapasitas"
                    placeholder="Kapasitas"
                    required>

            </div>

            <br>

            <button type="submit" class="btn-tambah">
                Simpan Data
            </button>

        </form>

    </div>

</div>

</body>
</html>