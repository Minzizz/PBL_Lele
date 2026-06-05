<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Lele</title>

    <link rel="stylesheet" href="{{ asset('css/petugas.css') }}">
</head>
<body>

<div class="container">

    @include('sidebar')

    <main class="content">

        <div class="table-card">

            <div class="table-header">
                <h2>Data Jenis Lele</h2>

                <button class="btn-tambah"
                    onclick="document.getElementById('modalTambah').style.display='flex'">
                    + Jenis Lele Baru
                </button>
            </div>

            <table>

                <thead>
                    <tr>
                        <th>No</th>
                        <th>Gambar</th>
                        <th>Jenis Lele</th>
                        <th>Ukuran Minimum</th>
                        <th>Deskripsi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach($kategoriLeles as $lele)

                    <tr>

                        <td>{{ $loop->iteration }}</td>

                        <td>
                            @if($lele->gambar)
                                <img
                                    src="{{ asset('storage/' . $lele->gambar) }}"
                                    alt="{{ $lele->nama_kategori }}"
                                    class="img-lele">
                            @else
                                Tidak ada gambar
                            @endif
                        </td>

                        <td>{{ $lele->nama_kategori }}</td>

                        <td>{{ $lele->ukuran_minimum }} gram</td>

                        <td>{{ $lele->deskripsi }}</td>

                        <td>

                            <button
                                class="btn-edit"
                                onclick="document.getElementById('editModal{{ $lele->id }}').style.display='flex'">
                                Edit
                            </button>

                            <form
                                action="{{ route('lele.destroy', $lele->id) }}"
                                method="POST"
                                style="display:inline">

                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn-delete">
                                    Hapus
                                </button>

                            </form>

                        </td>

                    </tr>

                    {{-- MODAL EDIT --}}
                    <div id="editModal{{ $lele->id }}" class="modal">

                        <div class="modal-content">

                            <div class="modal-header">
                                <h3>Edit Data Lele</h3>

                                <span class="close"
                                    onclick="document.getElementById('editModal{{ $lele->id }}').style.display='none'">
                                    &times;
                                </span>
                            </div>

                            <form action="{{ route('lele.update', $lele->id) }}"
                                method="POST"
                                enctype="multipart/form-data">

                                @csrf
                                @method('PUT')

                                <div class="grid">

                                    <input
                                        type="text"
                                        name="nama_kategori"
                                        value="{{ $lele->nama_kategori }}"
                                        required>

                                    <input
                                        type="number"
                                        name="ukuran_minimum"
                                        value="{{ $lele->ukuran_minimum }}"
                                        required>

                                </div>

                                <textarea
                                    name="deskripsi"
                                    rows="4">{{ $lele->deskripsi }}</textarea>

                                <input
                                    type="file"
                                    name="gambar">

                                <br><br>

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

{{-- MODAL TAMBAH --}}
<div id="modalTambah" class="modal">

    <div class="modal-content">

        <div class="modal-header">

            <h3>Tambah Jenis Lele</h3>

            <span class="close"
                onclick="document.getElementById('modalTambah').style.display='none'">
                &times;
            </span>

        </div>

        <form
            action="{{ route('lele.store') }}"
            method="POST"
            enctype="multipart/form-data">

            @csrf

            <div class="grid">

                <input
                    type="text"
                    name="nama_kategori"
                    placeholder="Nama Jenis Lele"
                    required>

                <input
                    type="number"
                    name="ukuran_minimum"
                    placeholder="Ukuran Minimum"
                    required>

            </div>

            <textarea
                name="deskripsi"
                rows="4"
                placeholder="Deskripsi"></textarea>

            <input
                type="file"
                name="gambar"
                required>

            <br><br>

            <button type="submit" class="btn-tambah">
                Simpan Data
            </button>

        </form>

    </div>

</div>

</body>
</html>