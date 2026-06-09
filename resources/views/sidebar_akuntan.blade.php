<div class="sidebar">

    <div class="logo">
        <h2>Ternak Lele</h2>
        <p>Panel Akuntan</p>
    </div>

    <ul class="sidebar-menu">
        <li class="{{ request()->routeIs('akuntan.*') ? 'active' : '' }}">
            <a href="{{ route('akuntan') }}">
                � Akuntan
            </a>
        </li>
        <li class="{{ request()->routeIs('pengeluaran.*') ? 'active' : '' }}">
            <a href="{{ route('pengeluaran.index') }}">
                💰 Pengeluaran
            </a>
        </li>

        <li class="{{ request()->routeIs('penjualan.*') ? 'active' : '' }}">
            <a href="{{ route('penjualan.index') }}">
                📈 Penjualan
            </a>
        </li>

    </ul>

</div>