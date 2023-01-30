<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" href="/dashboard">
              <i class="fas fa-home"></i>
              Dashboard
            </a>
          </li>
          @can('admin')
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/user') ? 'active' : '' }}" href="/dashboard/user">
              <i class="fas fa-users"></i>
              User
            </a>
          </li>
          @endcan
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/preservasi*') ? 'active' : '' }}" href="/dashboard/preservasi">
              <i class="fas fa-archive"></i>
              Preservasi
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/pembangunan*') ? 'active' : '' }}" href="/dashboard/pembangunan">
              <i class="fas fa-archive"></i>
              Pembangunan
            </a>
          </li>
        </ul>
    </div>
</nav>