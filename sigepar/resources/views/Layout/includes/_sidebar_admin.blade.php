<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('assets/img/Logo_HKI.jpg')}}" alt="HKI Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">HKI Parsoburan</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image"> 
          <img src="{{asset('fileweb/' . Auth::user()->avatar)}}" class="img-circle elevation-2" alt="User Image">
        </div>
         @if(auth()->user()->role =='admin')
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
        @endif
         @if(auth()->user()->role =='pengurus')
        <div class="info">
          <a href="#" class="d-block">Pengurus</a>
        </div>
        @endif
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                @if(auth()->user()->role =='admin')
               <li class="nav-item active">
                <a href="{{url('/Dashboard_admin')}}" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Dashboard
                  </p>
                </a>
              </li>
              @endif
                @if(auth()->user()->role =='pengurus')
               <li class="nav-item active">
                <a href="{{url('/Dashboard_pengurus')}}" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Dashboard
                  </p>
                </a>
              </li>
              @endif
              @if(auth()->user()->role =='admin')
               <li class="nav-item active">
                <a href="{{url('/Dashboard_users')}}" class="nav-link">
                    <i class="nav-icon fas fa-users"></i>
                  <p>
                    Users
                  </p>
                </a>
              </li>
              @endif
             @if(auth()->user()->role =='pengurus')  
            <li class="nav-item ">
            <a href="#" class="nav-link" >
                <i class="nav-icon fas fa-solid fa-church"></i>
              <p>
                Curh Data
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/Jemaat')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Jemaat</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/Data_Jemaat')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Jemaat</p>
                </a>
              </li>
             
              <li class="nav-item">
                <a href="{{url('/Data_Keuangan')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Keuangan</p>
                </a>
              </li>
            </ul>
          </li>
          @endif

                    <li class="nav-item ">
            <a href="#" class="nav-link" >
              <i class="nav-icon fas fa-book"></i>
              <p>
                Data Sacrament
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/Sakramen_Baptis')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sakramen Baptis</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/Peneguhan_Sidi')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Peneguhan Sidi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/Pernikahan')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pernikahan</p>
                </a>
              </li>
            </ul>
          </li>
          @if(auth()->user()->role =='admin')
          <li class="nav-item active">
            <a href="{{url('/DataPengurus_Gereja')}}" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
              <p>
                Pengurus Gereja
              </p>
            </a>
          </li>
          @endif
          @if(auth()->user()->role =='admin')
          <li class="nav-item active">
            <a href="/worshipProcedure" class="nav-link">
                <i class='fas fa-praying-hands'></i>
              <p>
                Worship Procedure 
              </p>
            </a>
          </li>
          <li class="nav-item active">
            <a href="/pengumuman" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
              <p>
                Announcement
              </p>
            </a>
          </li>
          <li class="nav-item active">
            <a href="/gallery" class="nav-link">
                <i class="nav-icon far fa-image"></i>
              <p>
                Galery
              </p>
            </a>
          </li>
          <!-- <li class="nav-item active">
            <a href="/slider" class="nav-link">
                <i class="nav-icon far fa-image"></i>
              <p>
                Sliders
              </p>
            </a>
          </li> -->
          <li class="nav-item active">
            <a href="/aboutus" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
              <p>
                About
              </p>
            </a>
          </li>
          @endif
          <li class="nav-item active">
            <a href="{{url('/logout')}}" class="nav-link">
                <i class="nav-icon fas  fa-sign-out"></i>
              <p>
                Log Out
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
    
  </aside>