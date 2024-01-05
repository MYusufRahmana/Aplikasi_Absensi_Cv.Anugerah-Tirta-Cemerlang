<style>
#sidebar-menu .nav.side-menu li.active-menu {
    background-color: #428bca;
    color: #fff;
}
</style>

<div class="left_col scroll-view" style="height: 100vh; position:fixed">
    <div class="navbar nav_title" style="min-height:none;height:7vh">
        <a href="{{ url('dashboard') }}" class="">
            <img src="{{ asset('image/tsacLogo.png') }}" alt="TSAC Logo" class="logo_img">
            <span class="logo_text">Tirta Sriwijaya Aquatiq Club</span>
        </a>
    </div>
    <div class="clearfix"></div>
    <br />
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu" style="overflow-y :auto; max-height:88vh">
        <div class="menu_section">
            <h3>General</h3>
            <ul class="nav side-menu">
                <li class="{{ Request::is('home*') ? 'active-menu' : '' }}">
                    <a href="{{ route('home.index') }}"><i class="fa fa-home"></i> Home</a>
                </li>
                @if (Session::has('member'))
                    <li class="{{ Request::is('absen*') ? 'active-menu' : '' }}">
                        <a href="{{ route('absen.index') }}"><i class="fa fa-calendar"></i> Absen Kelas</a>
                    </li>
                    <li class="{{ Request::is('riwayatabsen*') ? 'active-menu' : '' }}">
                        <a href="{{ route('riwayatabsen.index') }}"><i class="fa fa-bookmark"></i> Riwayat Absen</a>
                    </li>
                @endif
                @if (Session::has('pelatih'))
                    <li class="{{ Request::is('absenpelatih*') ? 'active-menu' : '' }}">
                        <a href="{{ route('absenpelatih.index') }}"><i class="fa fa-table"></i> Absen Pelatih</a>
                    </li>
                    <li class="{{ Request::is('riwayatabsenpelatih*') ? 'active-menu' : '' }}">
                        <a href="{{ route('riwayatabsenpelatih.index') }}"><i class="fa fa-bookmark"></i> Riwayat Absen</a>
                    </li>
                    <li class="{{ Request::is('absenkelas*') ? 'active-menu' : '' }}">
                        <a href="{{ route('absenkelas.index') }}"><i class="fa fa-table"></i> Lihat Absen Kelas</a>
                    </li>
                    <li class="{{ Request::is('gajipelatih*') ? 'active-menu' : '' }}">
                        <a href="{{ route('gajipelatih.index') }}"><i class="fa fa-money"></i> Info Gaji</a>
                    </li>
                @endif
                @if (Session::has('superadmin'))
                    <li class="{{ Request::is('admin*') ? 'active-menu' : '' }}">
                        <a href="{{ route('admin.index') }}"><i class="fa fa-user-plus"></i>Kelola Admin</a>
                    </li>
                    <li class="{{ Request::is('pelatih*') ? 'active-menu' : '' }}">
                        <a href="{{ route('pelatih.index') }}"><i class="fa fa-user-plus"></i> Kelola Pelatih</a>
                    </li>
                    <li class="{{ Request::is('member*') ? 'active-menu' : '' }}">
                        <a href="{{ route('member.index') }}"><i class="fa fa-user-plus"></i> Kelola Member</a>
                    </li>
                    <li class="{{ Request::is('kelasmember*') ? 'active-menu' : '' }}">
                        <a href="{{ route('kelasmember.index') }}"><i class="fa fa-user"></i> List Kelas Member</a>
                    </li>
                    <li class="{{ Request::is('laporan') ? 'active-menu' : '' }}">
                        <a href="{{ route('laporan.index') }}"><i class="fa fa-file"></i> Verifikasi Absensi Pelatih</a>
                    </li>
                    <li class="{{ Request::is('laporanabsenmember*') ? 'active-menu' : '' }}">
                        <a href="{{ route('laporanabsenmember.index') }}"><i class="fa fa-file"></i> Laporan Absensi Member</a>
                    </li>
                    <li class="{{ Request::is('laporanpelatih*') ? 'active-menu' : '' }}">
                        <a href="{{ url('/laporanpelatih') }}"><i class="fa fa-file"></i> Laporan Absensi Pelatih</a>
                    </li>
                    <li class="{{ Request::is('laporanadmin*') ? 'active-menu' : '' }}">
                        <a href="{{ url('/laporanadmin') }}"><i class="fa fa-file"></i> Laporan Absensi Admin</a>
                    </li>
                @endif
                @if (Session::has('admin'))
                    <li class="{{ Request::is('absenadmin*') ? 'active-menu' : '' }}">
                        <a href="{{ route('absenadmin.index') }}"><i class="fa fa-calendar"></i> Absen Admin</a>
                    </li>
                    <li class="{{ Request::is('riwayatabsenadmin') ? 'active-menu' : '' }}">
                        <a href="{{ route('riwayatabsenadmin.index') }}"><i class="fa fa-bookmark"></i> Riwayat Absen</a>
                    </li>
                    <li class="{{ Request::is('gajiadmin*') ? 'active-menu' : '' }}">
                        <a href="{{ route('gajiadmin.index') }}"><i class="fa fa-money"></i> Info Gaji</a>
                    </li>
                    <li class="{{ Request::is('pelatih*') ? 'active-menu' : '' }}">
                        <a href="{{ route('pelatih.index') }}"><i class="fa fa-user-plus"></i> Kelola Pelatih</a>
                    </li>
                    <li class="{{ Request::is('member*') ? 'active-menu' : '' }}">
                        <a href="{{ route('member.index') }}"><i class="fa fa-user-plus"></i> Kelola Member</a>
                    </li>
                    <li class="{{ Request::is('kelasmember*') ? 'active-menu' : '' }}">
                        <a href="{{ route('kelasmember.index') }}"><i class="fa fa-user"></i> List Kelas Member</a>
                    </li>
                    <li class="{{ Request::is('laporan') ? 'active-menu' : '' }}">
                        <a href="{{ route('laporan.index') }}"><i class="fa fa-check-square-o"></i> Verifikasi Absensi Pelatih</a>
                    </li>
                    <li class="{{ Request::is('laporanabsenmember*') ? 'active-menu' : '' }}">
                        <a href="{{ route('laporanabsenmember.index') }}"><i class="fa fa-file"></i> Laporan Absensi Member</a>
                    </li>
                    <li class="{{ Request::is('laporanpelatih*') ? 'active-menu' : '' }}">
                        <a href="{{ url('/laporanpelatih') }}"><i class="fa fa-file"></i> Laporan Absensi Pelatih</a>
                    </li>
                    <li class="{{ Request::is('laporanadmin*') ? 'active-menu' : '' }}">
                        <a href="{{ url('/laporanadmin') }}"><i class="fa fa-file"></i> Laporan Absensi Admin</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</div>
