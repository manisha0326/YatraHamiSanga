
<nav class="navbar navbar-expand-lg mt-0 py-0"
    style="background-color: #FCFCFC; box-shadow: 0px 4px 4px rgba(154, 200, 215, 0.10);font-size: 16px;">
    <div class="container-fluid">
        <a href="{{ route('home') }}">
            <img src="{{ asset('image/ttt.svg') }}" alt="" style="height: 96px; width: 260px" />
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left: 20px">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="gap: 12px; font-size: 16px">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('aboutus') }}">About Us</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#">Category</a>
                    <div class="mega-dropdown">
                        <div class="mega-column">
                            <h4>Two Wheelers</h4>
                            <a href="{{ url('/rental/scooter') }}">Scooter</a>
                            <a href="{{ url('/rental/bike') }}">Bike</a>
                        </div>
                        <div class="mega-column">
                            <h4>Four Wheelers</h4>
                            <a href="{{ url('/rental/car') }}">Car</a>
                            <a href="{{ url('/rental/scorpio') }}">Scorpio</a>
                            <a href="{{ url('/rental/hiace') }}">Hiace</a>
                        </div>
                    </div>
                </li>



                <li class="nav-item">
                    <a class="nav-link" href="{{ route('Rental.Bike') }}">Rental</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contactus') }}">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('payment') }}">Booking</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('faqs') }}">FAQs</a>
                </li>

            </ul>
            <div style="margin-right: 56px; display: flex;gap: 10px;">
                <input class="form-control me-1" style="width: 250px" type="search"
                    placeholder="which vehicle do you want?" aria-label="Search" />
                <span class="material-symbols-outlined" style="margin-top: 6px;">
                    notifications
                </span>
                <div class="profile-dropdown" id="profileDropdown">
                    <img src="{{ asset('image/profile.svg') }}" alt="Profile" class="profile-icon" id="profileToggle">
                    <div class="dropdown-menu-custom" id="dropdownMenu">
                        {{-- <h5 class="dropdown-header">ACCOUNT</h5> --}}
                        <a href="{{ route('user.dashboard') }}"><i class="nav-icon bi bi-house"></i> Dashboard</a>
                        <a href="#"><i class="nav-icon bi bi-person-circle"
                                style="width: 25px;height: 28px;margin-top: 4px;"></i> Profile</a>
                        <hr class="dropdown-divider">
                        <a href="#"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="nav-icon bi bi-box-arrow-right"></i>Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>



        </div>
    </div>
</nav>
