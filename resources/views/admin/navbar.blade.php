    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href="index.html"><img src="admin/assets/images/logo.svg" alt="logo" /></a>
        <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="admin/assets/images/logo-mini.svg" alt="logo" /></a>
      </div>
      <ul class="nav">

        <li class="nav-item menu-items">
          <a class="nav-link" href={{url('/user')}}>
            <span class="menu-icon">
              <i class="mdi mdi-speedometer"></i>
            </span>
            <span class="menu-title">User</span>
          </a>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link"
           href={{url('/foodmenu')}}    >
            <span class="menu-icon">
              <i class="mdi mdi-laptop"></i>
            </span>
            <span class="menu-title">FoodMenu</span>
            <i class="menu-arrow"></i>
          </a>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="{{url('/chef')}}">
            <span class="menu-icon">
              <i class="mdi mdi-playlist-play"></i>
            </span>
            <span class="menu-title">Chefs</span>
          </a>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="{{url('/viewreservation')}}">
            <span class="menu-icon">
              <i class="mdi mdi-table-large"></i>
            </span>
            <span class="menu-title">Reservations</span>
          </a>
        </li>

      </ul>
    </nav>