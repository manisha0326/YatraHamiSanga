 <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark" style="height: 900px">
        <!--begin::Sidebar Brand-->
        <div class="sidebar-brand" style="margin:10px;height: 86px;">
          <!--begin::Brand Link-->
          <a href="route('/')" class="brand-link" >
            <!--begin::Brand Image-->
            <div style="margin-bottom: 10px;">
              <img
                src="{{ asset('image/dashboardlogo.png') }}"
                alt="AdminLTE Logo"
                class="brand-image opacity-75 shadow"
                style="width: 140px; max-height: 100px;"
              />
            </div>
            <!--end::Brand Image-->
            
          </a>
          <!--end::Brand Link-->
        </div>
        <!--end::Sidebar Brand-->
        <!--begin::Sidebar Wrapper-->
        <div class="sidebar-wrapper">
          <nav class="mt-2">
            <!--begin::Sidebar Menu-->
            <ul
              class="nav sidebar-menu flex-column"
              data-lte-toggle="treeview"
              role="menu"
              data-accordion="false"
            >
              <li class="nav-item">
                <a href="{{ route('user.dashboard') }}" class="nav-link">
                  <i class="nav-icon bi bi-house"></i>
                  <p>Dashboard</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('user.bookingHistory') }}" class="nav-link">
                  <i class="nav-icon bi-journal-text"></i>
                  <p>Booking History</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('user.AvailableVehicles') }}" class="nav-link">
                  <i class="nav-icon bi-car-front"></i>
                  <p>Available Vehicles</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('user.Cancelvehicle') }}" class="nav-link">
                  <i class="nav-icon bi-x-circle"></i>
                  <p>Cancel Vehicles</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('user.help') }}" class="nav-link">
                  <i class="nav-icon bi bi-question-circle"></i>
                  <p>Help</p>
                </a>
              </li>
            </ul>

            <ul class="nav sidebar-menu flex-column mb-2" style="margin-top:480px">
              <li class="nav-item">
                <a href="{{ route('user.profile') }}" class="nav-link">
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
            <!--end::Sidebar Menu-->
          </nav>
        </div>
        <!--end::Sidebar Wrapper-->
      </aside>