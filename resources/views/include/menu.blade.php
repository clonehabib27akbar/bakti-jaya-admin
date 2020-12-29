<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            
            <li>
                <a href="#/"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-book fa-fw"></i> Master<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#/flot">Sekolah</a>
                    </li>
                    <li>
                        <a href="#/flot">Siswa</a>
                    </li>
                    <li>
                        <a href="#/morris">Guru</a>
                    </li>
                    <li>
                        <a href="#/morris">Mata Pelajaran</a>
                    </li>
                    <li>
                        <a href="#/morris">Tahun Akademik</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-calendar fa-fw"></i> Akademik<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#/flot">Jadwal Pelajaran</a>
                    </li>
                    <li>
                        <a href="#/morris">Nilai</a>
                    </li>
                    
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-money fa-fw"></i> Keuangan<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#/flot">SPP</a>
                    </li>
                    <li>
                        <a href="#/morris">Uang Gedung</a>
                    </li>
                    
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#/tables"><i class="fa fa-user fa-fw"></i> Alumni</a>
            </li>

            <li>
             <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                 <i class="fa fa-power-off"></i> {{__('Logout') }}
             </a>

             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                 @csrf
             </form>
             
                    
               
            </li>
            
            
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
@yield('content')