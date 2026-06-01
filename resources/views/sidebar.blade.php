<aside class="sidebar">

    <div class="sidebar-header">
        <h2>Petugas</h2>
        <p>Sistem Monitoring Lele</p>
    </div>

    <ul>

        <li>
            <a href="/petugas"
               class="{{ request()->is('petugas') ? 'active' : '' }}">
                🏠 Dashboard
            </a>
        </li>

        <li>
            <a href="/monitoring"
               class="{{ request()->is('monitoring') ? 'active' : '' }}">
                📊 Monitoring Kolam
            </a>
        </li>

        <li>
            <a href="/kolam"
               class="{{ request()->is('kolam') ? 'active' : '' }}">
                🏞 Data Kolam
            </a>
        </li>

        <li>
            <a href="/lele"
               class="{{ request()->is('lele') ? 'active' : '' }}">
                🐟 Data Lele
            </a>
        </li>

    </ul>

</aside>