<div class="left_col scroll-view">
    <div class="navbar nav_title">
        <div class="navbar nav_title">
            <a href="{{ url("dashboard") }}" class="">
                <img src="{{ asset('image/tsacLogo.png') }}" alt="TSAC Logo" class="logo_img">
                <span class="logo_text">Tirta Sriwijaya Aquatiq Club</span>
            </a>
        </div>
    </div>
    <div class="clearfix"></div>
    <br />
    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
        <div class="menu_section">
            <h3>General</h3>
            <ul class="nav side-menu">
                <li><a href="{{ route('home.index') }}"><i class="fa fa-home"></i> Home</a>
                </li>
                @if (Session::has('member'))
                    <li><a href="{{ route('absen.index') }}"><i class="fa fa-calendar"></i> Absen Kelas</a></li>
                    <li><a href="{{ route('riwayatabsen.index') }}"><i class="fa fa-bookmark"></i> Riwayat Absen</a></li>
                @endif
                @if (Session::has('pelatih'))
                    <li><a href="{{ route('absenpelatih.index') }}"><i class="fa fa-table"></i> Absen Pelatih</a></li>
                    <li><a href="{{ route('riwayatabsenpelatih.index') }}"><i class="fa fa-bookmark"></i> Riwayat Absen</a></li>
                    <li><a href="{{ route('gajipelatih.index') }}"><i class="fa fa-money"></i> Info Gaji</a></li>
                @endif
                @if (Session::has('admin'))
                    <li><a href="{{ route('absenadmin.index') }}"><i class="fa fa-calendar"></i> Absen Admin</a></li>
                    {{-- <li><a href="{{url('/laporan')}}"><i class="fa fa-file"></i> Daftar Member</a></li> --}}
                    <li><a href="{{ route('pelatih.index') }}"><i class="fa fa-user-plus"></i> Kelola Pelatih</a></li>
                    <li><a href="{{ route('laporan.index') }}"><i class="fa fa-file"></i> Verifikasi Absensi Pelatih</a></li>
                    {{-- <li><a href="{{url('/laporan')}}"><i class="fa fa-file"></i> Laporan Pelatih</a></li> --}}
                    <li><a href="{{route('laporanabsenmember.index')}}"><i class="fa fa-file"></i> Laporan Absensi Member</a></li>
                    {{-- <li><a href="{{route('laporanabsenmember.index')}}"><i class="fa fa-file"></i> Laporan Absensi Pelatih</a></li> --}}
                @endif
                {{-- <li><a><i class="fa fa-bar-chart-o"></i> Data Presentation <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="chartjs.html">Pelatih</a></li>
                    <li><a href="chartjs2.html">Siswa</a></li>
                  </ul>
                </li> --}}

            </ul>
        </div>


    </div>
    <!-- /sidebar menu -->

    <!-- /menu footer buttons -->
    <div class="sidebar-footer hidden-small">
        <a data-toggle="tooltip" data-placement="top" title="Settings">
            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="Lock">
            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
        </a>
        <form id="logout-form" action="{{ url('logout') }}" method="post">
            @csrf
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="#" onclick="document.getElementById('logout-form').submit()">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </form>
    </div>
    <!-- /menu footer buttons -->
</div>
