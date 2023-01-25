<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
              <span data-feather="home" class="align-text-bottom"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/user') ? 'active' : '' }}" aria-current="page" href="/dashboard/user">
              <span data-feather="home" class="align-text-bottom"></span>
              User
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/preservasi*') ? 'active' : '' }}" aria-current="page" href="/dashboard/preservasi">
              <span data-feather="home" class="align-text-bottom"></span>
              Preservasi
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/pembangunan*') ? 'active' : '' }}" aria-current="page" href="/dashboard/pembangunan">
              <span data-feather="home" class="align-text-bottom"></span>
              Pembangunan
            </a>
          </li>
        </ul>
    </div>
</nav>