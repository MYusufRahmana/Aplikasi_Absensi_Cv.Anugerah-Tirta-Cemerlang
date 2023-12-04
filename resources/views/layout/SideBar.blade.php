
<div class="left_col scroll-view">
          <div class="navbar nav_title">
            <div class="navbar nav_title">
              <a href="index.html" class="">
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
                <li><a><i class="fa fa-home"></i> Home</a>
                </li>
                <li><a href="#"><i class="fa fa-desktop"></i> Absen </a>
                </li>
                <li><a><i class="fa fa-table"></i> Tables</a>
                </li>
                <li><a><i class="fa fa-bar-chart-o"></i> Data Presentation <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="chartjs.html">Pelatih</a></li>
                    <li><a href="chartjs2.html">Siswa</a></li>
                  </ul>
                </li>

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
            <form id="logout-form" action="{{ route('logout') }}" method="post">
              @csrf
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="#" onclick="document.getElementById('logout-form').submit()">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </form>
          </div>
          <!-- /menu footer buttons -->
        </div>