<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Partner</title>

    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>

<body class="admin-page">

<div class="admin-container">

    @include('sidebar_admin')

    <main class="admin-content">

        <div class="admin-header">
            <h1>Kelola Partner</h1>
        </div>

        @if(session('success'))
            <div class="admin-alert-success">
                {{ session('success') }}
            </div>
        @endif

        {{-- BUTTON TAMBAH --}}
        <div style="margin-bottom:20px;">
            <button type="button"
                class="admin-btn"
                onclick="openPartnerModal()">
                + Tambah Partner
            </button>
        </div>

        {{-- TABLE --}}
        <div class="partner-table-wrapper">

            <table class="partner-table">

                <thead>
                    <tr>
                        <th>Logo</th>
                        <th>Nama Partner</th>
                        <th>Jenis Usaha</th>
                        <th>Deskripsi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>

                @forelse($partners as $p)

                    <tr>
                        <td>
                            @if($p->logo)
                                <img src="{{ asset('storage/' . $p->logo) }}"
                                     class="partner-logo">
                            @endif
                        </td>

                        <td>{{ $p->nama_partner }}</td>
                        <td>{{ $p->jenis_usaha }}</td>
                        <td>{{ $p->deskripsi }}</td>

                        <td class="partner-action">

                            <button type="button"
                                class="admin-btn"
                                onclick="openEditModal(
                                    '{{ $p->id }}',
                                    `{{ $p->nama_partner }}`,
                                    `{{ $p->jenis_usaha }}`,
                                    `{{ $p->deskripsi }}`
                                )">
                                Edit
                            </button>

                            <form action="{{ route('admin.partner.destroy',$p->id) }}"
                                  method="POST">

                                @csrf
                                @method('DELETE')

                                <button class="admin-delete-btn"
                                        onclick="return confirm('Yakin hapus data?')">
                                    Hapus
                                </button>

                            </form>

                        </td>
                    </tr>

                @empty
                    <tr>
                        <td colspan="5">Belum ada data partner</td>
                    </tr>
                @endforelse

                </tbody>

            </table>

        </div>

    </main>

</div>

{{-- ================= TAMBAH MODAL ================= --}}
<div id="partner-modal" class="partner-modal">

    <div class="partner-modal-content">

        <div class="partner-modal-header">
            <h2>Tambah Partner</h2>
            <span class="partner-close-btn" onclick="closePartnerModal()">&times;</span>
        </div>

        <form class="partner-form"
              action="{{ route('admin.partner.store') }}"
              method="POST"
              enctype="multipart/form-data">

            @csrf

            <input type="text" name="nama_partner" placeholder="Nama Partner" required>
            <input type="text" name="jenis_usaha" placeholder="Jenis Usaha">

            <textarea name="deskripsi" placeholder="Deskripsi Partner" rows="4"></textarea>

            <input type="file" name="logo">

            <button type="submit" class="admin-btn">
                Simpan Partner
            </button>

        </form>

    </div>
</div>

{{-- ================= EDIT MODAL ================= --}}
<div id="edit-partner-modal" class="partner-modal">

    <div class="partner-modal-content">

        <div class="partner-modal-header">
            <h2>Edit Partner</h2>
            <span class="partner-close-btn" onclick="closeEditModal()">&times;</span>
        </div>

        <form id="editPartnerForm"
              method="POST"
              enctype="multipart/form-data"
              class="partner-form">

            @csrf
            @method('PUT')

            <input type="text" name="nama_partner" id="edit-nama">
            <input type="text" name="jenis_usaha" id="edit-jenis">
            <textarea name="deskripsi" id="edit-deskripsi" rows="4"></textarea>

            <input type="file" name="logo">

            <button type="submit" class="admin-btn">
                Update Partner
            </button>

        </form>

    </div>
</div>

{{-- ================= SCRIPT ================= --}}
<script>
    function openPartnerModal() {
        document.getElementById('partner-modal').style.display = 'flex';
    }

    function closePartnerModal() {
        document.getElementById('partner-modal').style.display = 'none';
    }

    function openEditModal(id, nama, jenis, deskripsi) {

        document.getElementById('editPartnerForm').action =
            `{{ url('/admin/partner') }}/${id}`;

        document.getElementById('edit-nama').value = nama;
        document.getElementById('edit-jenis').value = jenis;
        document.getElementById('edit-deskripsi').value = deskripsi;

        document.getElementById('edit-partner-modal').style.display = 'flex';
    }

    function closeEditModal() {
        document.getElementById('edit-partner-modal').style.display = 'none';
    }

    window.onclick = function(e) {
        let modal = document.getElementById('edit-partner-modal');
        if (e.target === modal) closeEditModal();
    }
</script>

</body>
</html>