<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<div class="admin-sidebar">

    <div class="admin-logo">
        <h2><i class="fas fa-fish"></i> Ternak Lele</h2>
        <p>Administrator Panel</p>
    </div>

    <ul class="admin-menu">

        <!-- BERANDA -->
        <li>
            <a href="{{ route('admin') }}"
               class="{{ request()->routeIs('admin') ? 'active' : '' }}">
                <i class="fas fa-chart-line"></i>
                Beranda
            </a>
        </li>

        <!-- USER MANAGEMENT -->
        <li>
            <a href="{{ route('users.index') }}"
               class="{{ request()->routeIs('users.*') ? 'active' : '' }}">
                <i class="fas fa-users"></i>
                User Management
            </a>
        </li>

        <!-- PARTNER MANAGEMENT -->
        <li>
            <a href="{{ route('admin.partner.index') }}"
               class="{{ request()->routeIs('adminpartner.*') ? 'active' : '' }}">
                <i class="fas fa-handshake"></i>
                Partner Management
            </a>
        </li>

    </ul>

</div>