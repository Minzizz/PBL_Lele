<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>

    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>

<body class="admin-page">

<div class="admin-container">

    @include('sidebar_admin')

    <main class="admin-content">

        <!-- HEADER -->
        <div class="admin-header">
            <h1>Dashboard Admin</h1>
        </div>

        <!-- CARD GRID -->
        <div class="admin-card-grid">

            <!-- USER -->
            <div class="admin-card">
                <h3>Total User</h3>
                <div class="card-value">{{ $totalUser }}</div>
            </div>

            <!-- PENGELUARAN -->
            <div class="admin-card">
                <h3>Total Pengeluaran</h3>
                <div class="card-value">
                    Rp {{ number_format($totalPengeluaran,0,',','.') }}
                </div>

                <a href="javascript:void(0)"
                   class="admin-btn"
                   onclick="openModal('pengeluaran')">
                    Lihat Data
                </a>
            </div>

            <!-- PENJUALAN -->
            <div class="admin-card">
                <h3>Total Penjualan</h3>
                <div class="card-value">
                    Rp {{ number_format($totalPenjualan,0,',','.') }}
                </div>

                <a href="javascript:void(0)"
                   class="admin-btn"
                   onclick="openModal('penjualan')">
                    Lihat Data
                </a>
            </div>

            <!-- KEUNTUNGAN -->
            <div class="admin-card">
                <h3>Total Keuntungan</h3>
                <div class="card-value">
                    Rp {{ number_format($totalPenjualan - $totalPengeluaran,0,',','.') }}
                </div>
            </div>

        </div>

        <!-- TABLE USER -->
        <div class="admin-table-section">

            <div class="table-header">
                <h2>Data User</h2>
            </div>

            <table class="admin-table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Role</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach(\App\Models\User::all() as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->role ?? 'user' }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>

    </main>

</div>

<!-- 🔥 MODAL -->
<div id="dataModal" class="modal-overlay" onclick="closeModal(event)">
    <div class="modal-box">

        <h2 id="modalTitle">Data</h2>

        <table class="admin-table">
            <thead id="modalHead"></thead>
            <tbody id="modalBody"></tbody>
        </table>

        <button class="modal-close" onclick="closeModal()">
            Tutup
        </button>

    </div>
</div>

<!-- 🔥 SCRIPT -->
<script>
function openModal(type)
{
    document.getElementById('dataModal').style.display = 'flex';

    let title = '';
    let head = '';
    let body = '';

    if(type === 'pengeluaran') {

        title = 'Data Pengeluaran';

        head = `
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Jumlah</th>
                <th>Tanggal</th>
            </tr>
        `;

        body = `
            @foreach(\App\Models\Pengeluaran::all() as $data)
            <tr>
                <td>{{ $data->id }}</td>
                <td>{{ $data->nama }}</td>
                <td>{{ $data->jumlah }}</td>
                <td>{{ $data->created_at }}</td>
            </tr>
            @endforeach
        `;
    }

    if(type === 'penjualan') {

        title = 'Data Penjualan';

        head = `
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Total</th>
                <th>Tanggal</th>
            </tr>
        `;

        body = `
            @foreach(\App\Models\Penjualan::all() as $data)
            <tr>
                <td>{{ $data->id }}</td>
                <td>{{ $data->nama ?? '-' }}</td>
                <td>{{ $data->total }}</td>
                <td>{{ $data->created_at }}</td>
            </tr>
            @endforeach
        `;
    }

    document.getElementById('modalTitle').innerText = title;
    document.getElementById('modalHead').innerHTML = head;
    document.getElementById('modalBody').innerHTML = body;
}

function closeModal(e)
{
    if(!e || e.target.id === 'dataModal') {
        document.getElementById('dataModal').style.display = 'none';
    }
}
</script>

</body>
</html>