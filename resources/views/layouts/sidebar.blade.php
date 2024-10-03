{{-- HALAMAN SIDEBAR --}}
<aside class="main-sidebar sidebar-light-primary elevation-2">
    <a href="{{ route('dashboard') }}" class="brand-link text-center">
        <img src="{{ asset('img/logo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3 " style="opacity: .8">
        <span class="brand-text font-weight-bold">BAHAN BAKU</span>
    </a>
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-child-indent nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-header">MAIN MENU</li>
                <!-- Menu untuk semua pengguna -->
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                {{-- akses menu role = admin --}}
                @if (in_array(Auth::user()->role, [1, 3, 4]))
                    <li class="nav-item has-treeview {{ request()->routeIs(['lokasi.index', 'jabatan.index', 'unitkerja.index', 'kategorikaryawan.index', 'kategoriijincuti.index']) ? 'menu-open' : '' }}">
                        <a href="#" class="nav-link {{ request()->routeIs(['lokasi.index', 'jabatan.index', 'unitkerja.index', 'kategorikaryawan.index', 'kategoriijincuti.index']) ? 'active' : '' }}">
                            <i class="nav-icon fas fa-cogs"></i>
                            <p>
                                Kelola Master Data
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @if (in_array(Auth::user()->role, [1]))
                                <li class="nav-item">
                                    <a href="{{ route('lokasi.index') }}" class="nav-link {{ request()->routeIs('lokasi.index') ? 'active' : '' }}">
                                        <i class="nav-icon fas fa-location-arrow"></i>
                                        <p>Kelola Lokasi</p>
                                    </a>
                                </li>
                            @endif
                            @if (in_array(Auth::user()->role, [1, 3, 4]))
                                <li class="nav-item">
                                    <a href="{{ route('jabatan.index') }}" class="nav-link {{ request()->routeIs('jabatan.index') ? 'active' : '' }}">
                                        <i class="nav-icon fas fa-database"></i>
                                        <p>Kelola Jabatan</p>
                                    </a>
                                </li>
                            @endif
                            @if (in_array(Auth::user()->role, [1, 3, 4]))
                                <li class="nav-item">
                                    <a href="{{ route('unitkerja.index') }}" class="nav-link {{ request()->routeIs('unitkerja.index') ? 'active' : '' }}">
                                        <i class="nav-icon fas fa-database"></i>
                                        <p>Kelola Unit Kerja</p>
                                    </a>
                                </li>
                            @endif
                            @if (in_array(Auth::user()->role, [1, 3, 4]))
                                <li class="nav-item">
                                    <a href="{{ route('kategorikaryawan.index') }}" class="nav-link {{ request()->routeIs('kategorikaryawan.index') ? 'active' : '' }}">
                                        <i class="nav-icon fas fa-database"></i>
                                        <p>Kelola Kategori Karyawan</p>
                                    </a>
                                </li>
                            @endif
                            {{-- akses menu role = admin,hrd,staffhrd --}}
                            @if (in_array(Auth::user()->role, [1, 3, 4]))
                                <li class="nav-item">
                                    <a href="{{ route('kategoriijincuti.index') }}" class="nav-link {{ request()->routeIs('kategoriijincuti.index') ? 'active' : '' }}">
                                        <i class="nav-icon fas fa-envelope-open-text"></i>
                                        <p>Kategori Ijin/Cuti</p>
                                    </a>
                                </li>
                            @endif
                        </ul>
                    </li>
                @endif
                {{-- akses menu role = admin,direktur,hrd,staffhrd,kabag --}}
                @if (in_array(Auth::user()->role, [1, 2, 3, 4, 5]))
                    <li class="nav-item">
                        <a href="{{ route('datakaryawan.index') }}" class="nav-link {{ request()->routeIs('datakaryawan.index') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-database"></i>
                            <p>Data Karyawan</p>
                        </a>
                    </li>
                @endif
                {{-- akses menu role = admin,direktur,hrd,staffhrd,kabag,karyawan --}}
                @if (in_array(Auth::user()->role, [1, 2, 3, 4, 5, 6]))
                    <li class="nav-item">
                        <a href="{{ route('absensi.index') }}" class="nav-link {{ request()->routeIs('absensi.index') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-envelope-open-text"></i>
                            <p>Absensi</p>
                        </a>
                    </li>
                @endif
                {{-- akses menu role = admin,direktur,hrd,staffhrd,kabag,karyawan --}}
                @if (in_array(Auth::user()->role, [1, 2, 3, 4, 5, 6]))
                    <li class="nav-item">
                        <a href="{{ route('absensi.data') }}" class="nav-link {{ request()->routeIs('absensi.data') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-envelope-open-text"></i>
                            <p>Rekap Absensi Personal</p>
                        </a>
                    </li>
                @endif
                {{-- akses menu role = admin,direktur,hrd,staffhrd,kabag,karyawan --}}
                @if (in_array(Auth::user()->role, [1, 2, 3, 4, 5]))
                    <li class="nav-item">
                        <a href="{{ route('absensi.dataall') }}" class="nav-link {{ request()->routeIs('absensi.dataall') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-envelope-open-text"></i>
                            <p>Rekap Absensi Karyawan</p>
                        </a>
                    </li>
                @endif
                @if (in_array(Auth::user()->role, [1, 3, 4, 5, 6]))
                    <li class="nav-item has-treeview {{ request()->routeIs(['ijin.index', 'cuti.index']) ? 'menu-open' : '' }}">
                        <a href="#" class="nav-link {{ request()->routeIs(['ijin.index', 'cuti.index']) ? 'active' : '' }}">
                            <i class="nav-icon fas fa-cogs"></i>
                            <p>
                                Pengajuan Ijin/Cuti
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            {{-- akses menu role = admin,hrd,staffhrd,kabag,karyawan --}}
                            @if (in_array(Auth::user()->role, [1, 3, 4, 5, 6]))
                                <li class="nav-item">
                                    <a href="{{ route('ijin.index') }}" class="nav-link {{ request()->routeIs('ijin.index') ? 'active' : '' }}">
                                        <i class="nav-icon fas fa-envelope"></i>
                                        <p>Pengajuan Ijin</p>
                                    </a>
                                </li>
                            @endif
                            {{-- akses menu role = admin,hrd,staffhrd,kabag,karyawan --}}
                            @if (in_array(Auth::user()->role, [1, 3, 4, 5, 6]))
                                <li class="nav-item">
                                    <a href="{{ route('cuti.index') }}" class="nav-link {{ request()->routeIs('cuti.index') ? 'active' : '' }}">
                                        <i class="nav-icon fas fa-envelope-open"></i>
                                        <p>Pengajuan Cuti</p>
                                    </a>
                                </li>
                            @endif
                        </ul>
                    </li>
                @endif
                @if (in_array(Auth::user()->role, [1, 3, 4, 5]))
                    <li class="nav-item">
                        <a href="{{ route('approval.index') }}" class="nav-link {{ request()->routeIs('approval.index') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-envelope-open"></i>
                            <p>Approval</p>
                        </a>
                    </li>
                @endif
                @if (in_array(Auth::user()->role, [2]))
                    <li class="nav-item">
                        <a href="{{ route('approval.index') }}" class="nav-link {{ request()->routeIs('approval.index') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-envelope-open"></i>
                            <p>Data Pengajuan Ijin/Cuti</p>
                        </a>
                    </li>
                @endif
            </ul>
        </nav>

    </div>
</aside>
