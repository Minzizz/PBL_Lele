<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management</title>

    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">

    <style>
        .modal-overlay{
            display:none;
            position:fixed;
            top:0;left:0;
            width:100%;height:100%;
            background:rgba(0,0,0,0.5);
            justify-content:center;
            align-items:center;
        }

        .modal-box{
            background:white;
            padding:20px;
            width:320px;
            border-radius:10px;
        }

        .modal-box input{
            width:100%;
            margin-bottom:10px;
            padding:6px;
        }
    </style>
</head>

<body class="admin-page">

<div class="admin-container">

    @include('sidebar_admin')

    <main class="admin-content">

        {{-- HEADER --}}
        <div class="admin-page-header">
            <div>
                <h1>User Management</h1>
                <p class="admin-subtitle">Kelola seluruh akun pengguna sistem</p>
            </div>
        </div>

        {{-- ALERT --}}
        @if(session('success'))
            <div class="admin-alert-success">
                {{ session('success') }}
            </div>
        @endif

        {{-- FORM TAMBAH --}}
        <button type="button"
                class="admin-add-user-btn"
                onclick="openAddModal()">
            + Tambah User
        </button>

        {{-- TABLE --}}
        <div class="admin-table-card">

            <div class="admin-table-header">
                <h2>Daftar User</h2>

                <span class="admin-total-user">
                    Total User : {{ $users->count() }}
                </span>
            </div>

            <div class="admin-table-wrapper">

                <table class="admin-table">

                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>

                    @forelse($users as $user)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td><strong>{{ $user->name }}</strong></td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <span class="admin-role-badge">
                                    {{ ucfirst($user->role ?? 'user') }}
                                </span>
                            </td>

                            <td>

                                {{-- BUTTON EDIT --}}
                                <button type="button"
                                        class="admin-edit-btn"
                                        onclick="openEditModal({{ $user }})">
                                    Edit
                                </button>

                                {{-- DELETE --}}
                                <form action="{{ route('users.destroy', $user->id) }}"
                                      method="POST"
                                      style="display:inline-block">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                            class="admin-delete-btn"
                                            onclick="return confirm('Yakin hapus user ini?')">
                                        Hapus
                                    </button>
                                </form>

                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="admin-empty">
                                Belum ada data user
                            </td>
                        </tr>
                    @endforelse

                    </tbody>

                </table>

            </div>
        </div>

    </main>

</div>

{{-- MODAL EDIT --}}
<div id="editModal" class="modal-overlay">
    <div class="modal-box">

        <h3>Edit User</h3>

        <form id="editForm" method="POST">
            @csrf
            @method('PUT')

            <input type="text" name="name" id="editName" required>
            <input type="email" name="email" id="editEmail" required>

            <input type="password" name="password" placeholder="Password baru">
            <input type="password" name="password_confirmation" placeholder="Konfirmasi">

            <button type="submit" class="admin-edit-btn">Update</button>
            <button type="button" onclick="closeEditModal()">Batal</button>
        </form>

    </div>
</div>

{{-- MODAL TAMBAH --}}
<div id="addModal" class="modal-overlay">
    <div class="modal-box">

        <h3>Tambah User</h3>

        <form action="{{ route('users.store') }}" method="POST">
            @csrf

            <input type="text" name="name" placeholder="Nama" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="password" name="password_confirmation" placeholder="Konfirmasi" required>

            <!-- 🔥 ROLE TAMBAHAN -->
            <select name="role" required style="width:100%; padding:6px; margin-bottom:10px;">
                <option value="">Pilih Role</option>
                <option value="admin">Admin</option>
                <option value="petugas">Petugas</option>
                <option value="akuntan">Akuntan</option>
            </select>

            <button type="submit" class="admin-add-user-btn">Simpan</button>
            <button type="button" onclick="closeAddModal()">Batal</button>
        </form>

    </div>
</div>
</div>

{{-- SCRIPT --}}
<script>
function openEditModal(user)
{
    document.getElementById('editModal').style.display = 'flex';

    document.getElementById('editName').value = user.name;
    document.getElementById('editEmail').value = user.email;

    document.getElementById('editForm').action = '/users/' + user.id;
}

function closeEditModal()
{
    document.getElementById('editModal').style.display = 'none';
}
function openAddModal()
{
    document.getElementById('addModal').style.display = 'flex';
}

function closeAddModal()
{
    document.getElementById('addModal').style.display = 'none';
}
</script>

</body>
</html>