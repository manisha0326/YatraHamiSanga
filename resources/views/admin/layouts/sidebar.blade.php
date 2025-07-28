

<aside class="app-sidebar bg-body-secondary shadow d-flex flex-column" data-bs-theme="dark" style="height: 100vh;">
  <div class="sidebar-brand p-3" style="height: 86px;">
    <a href="/" class="brand-link">
      <img
        src="{{ asset('image/dashboardlogo.png') }}"
        alt="AdminLTE Logo"
        class="brand-image opacity-75 shadow"
        style="width: 140px; max-height: 100px;"
      />
    </a>
  </div>
  
  <div class="flex-grow-1 overflow-auto">
    <nav class="mt-4" style="padding:0px 10px;">
      <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="{{ route('admin.dashboard') }}" class="nav-link">
            <i class="nav-icon bi bi-house"></i>
            <p>Dashboard</p>
          </a>
        </li>

        <li class="nav-item has-submenu {{ request()->is('admin/category/*') ? 'menu-open' : '' }}">
          <div class="nav-link d-flex justify-content-between align-items-center submenu-toggle">
          <span>
            <i class="nav-icon bi bi-list"></i>
            <p class="mb-0 d-inline">Category</p>
          </span>
          <i class="submenu-icon bi bi-chevron-down"></i>
          </div>

          <ul class="nav nav-treeview submenu">
            <li class="nav-item"><a href="{{ route('admin.category.create') }}" class="nav-link {{ request()->is('admin/category/create') ? 'active' : '' }}">Create</a></li>
             <li class="nav-item"><a href="{{ route('admin.category.view') }}" class="nav-link {{ request()->is('admin/category/view') ? 'active' : '' }}">View</a></li>
            {{-- <li class="nav-item"><a href="{{ route('admin.category.update',$category->id) }}" class="nav-link {{ request()->is('admin/category/update') ? 'active' : '' }}">Edit</a></li> --}}
            </ul>
        </li>
        <li class="nav-item has-submenu {{ request()->is('admin/brand/*') ? 'menu-open' : '' }}">
          <div class="nav-link d-flex justify-content-between align-items-center submenu-toggle">
          <span>
            <i class="nav-icon bi bi-tags"></i>
            <p class="mb-0 d-inline">Brand</p>
          </span>
          <i class="submenu-icon bi bi-chevron-down"></i>
          </div>

          <ul class="nav nav-treeview submenu">
            <li class="nav-item"><a href="{{ route('admin.brand.create') }}" class="nav-link {{ request()->is('admin/brand/create') ? 'active' : '' }}">Create</a></li>
             <li class="nav-item"><a href="{{ route('admin.brand.view') }}" class="nav-link {{ request()->is('admin/brand/view') ? 'active' : '' }}">View</a></li>
            {{-- <li class="nav-item"><a href="{{ route('admin.brand.update') }}" class="nav-link {{ request()->is('admin/brand/update') ? 'active' : '' }}">Edit</a></li> --}}
            
          </ul>
        </li>
        {{-- <li class="nav-item has-submenu {{ request()->is('admin/vehicle/*') ? 'menu-open' : '' }} ">
          <div class="nav-link d-flex justify-content-between align-items-center submenu-toggle">
          <span>
            <i class="nav-icon bi bi-truck"></i>
            <p class="mb-0 d-inline">Vehicle</p>
          </span>
          <i class="submenu-icon bi bi-chevron-down"></i>
          </div>

          <ul class="nav nav-treeview submenu">
            <li class="nav-item"><a href="{{ route('vehicle.create') }}" class="nav-link {{ request()->is('admin/vehicle/create') ? 'active' : '' }} " >Create</a></li>
            <li class="nav-item"><a href="{{ route('vehicle.view') }}" class="nav-link {{ request()->is('admin/vehicle/view') ? 'active' : '' }}">View</a></li>
            <li class="nav-item"><a href="{{ route('vehicle.update') }}" class="nav-link {{ request()->is('admin/vehicle/update') ? 'active' : '' }}">Edit</a></li>
            <li class="nav-item"><a href="{{ route('vehicle.delete') }}" class="nav-link {{ request()->is('admin/vehicle/delete') ? 'active' : '' }}">Delete</a></li>
          </ul>
        </li> --}}
        <li class="nav-item">
          <a href="{{ route('admin.UserDetails') }}" class="nav-link">
            <i class="nav-icon bi bi-people"></i>
            <p>User Details</p>
          </a>
        </li>
      </ul>
    </nav>
  </div>

  
  <div style="padding:0px 10px;margin-bottom:12px">
    <ul class="nav sidebar-menu flex-column">
      <li class="nav-item">
        <a href="{{ route('admin.profile') }}" class="nav-link">
          <i class="nav-icon bi bi-person-circle"></i>
          <p>Profile</p>
        </a>
      </li>
      <li class="nav-item">
                <a href="#" class="nav-link"
                  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  <i class="nav-icon bi bi-box-arrow-right"></i>
                  <p>Logout</p>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>
              </li>
    </ul>
  </div>
</aside>
