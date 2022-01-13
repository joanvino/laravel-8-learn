<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
            <span data-feather="home"></span>
            <i class="bi bi-house"></i>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : '' }}" href="/dashboard/posts">
            <span data-feather="file"></span>
            <i class="bi bi-file-text"></i>
            My Post Blog
          </a>
        </li>
      </ul>

        @can('admin')
          
  

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Administrator</span>
        </h6>

        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/user*') ? 'active' : '' }}" href="/dashboard/user">
              <span data-feather="file"></span>
              <i class="bi bi-grid-3x3-gap-fill"></i>
             Post Blog Categories
            </a>
          </li>
        </ul>
        @endcan
        
        @can('ketua')
          
  

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>ketua Administrator</span>
        </h6>

 
        @endcan
    </div>
  </nav>