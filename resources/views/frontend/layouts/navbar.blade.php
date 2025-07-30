
<nav id="mainNavbar" class="navbar navbar-expand-lg mt-0 py-0 sticky-top app-header navbar navbar-expand shadow-sm"

    style="background-color: #FCFCFC; box-shadow: 0px 4px 4px rgba(154, 200, 215, 0.10); font-size: 16px; z-index: 1030;">
    <div class="container-fluid">
        <a href="{{ route('home') }}">
            <img src="{{ asset('image/ttt.svg') }}" alt="" style="height: 96px; width: 260px" />
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left: 20px">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="gap: 30px; font-size: 16px">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('aboutus') }}">About Us</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#">Category</a>
                    <div class="mega-dropdown">

                        <div class="mega-column">
                            <h4>Two Wheelers</h4>
                            @foreach ($categories as $category)
                                @if (in_array($category->slug, ['bike', 'scooter']))
                                    <a href="{{ url('/rental/' . $category->slug) }}">
                                        {{ $category->category_name }}
                                    </a>
                                @endif
                            @endforeach
                        </div>

                        <div class="mega-column">
                            <h4>Four Wheelers</h4>
                            @foreach ($categories as $category)
                                @if (!in_array($category->slug, ['bike', 'scooter']))
                                    <a href="{{ url('/rental/' . $category->slug) }}">
                                        {{ $category->category_name }}
                                    </a>
                                @endif
                            @endforeach
                        </div>

                    </div>
                </li>




                <li class="nav-item">
                    <a class="nav-link" href="{{ route('rental.index') }} ">Rental</a>
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
            <input class="form-control me-1" style="width: 250px" type="search" id="vehicleSearch"
                placeholder="which vehicle do you want?" aria-label="Search" />
            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    const searchInput = document.getElementById('vehicleSearch');

                    // Blade-generated routes from categories
                    const routes = {
                        @foreach ($categories as $category)
                            "{{ $category->slug }}": "{{ url('/rental/' . $category->slug) }}",
                        @endforeach
                    };

                    searchInput.addEventListener('keydown', function (e) {
                        if (e.key === 'Enter') {
                            e.preventDefault();
                            const value = searchInput.value.trim().toLowerCase();

                            // Find the first category slug matching partially
                            const matchedSlug = Object.keys(routes).find(key => key.includes(value));

                            if (matchedSlug) {
                                window.location.href = routes[matchedSlug];
                            } else {
                                alert('Vehicle not found!');
                            }
                        }
                    });
                });
            </script>
            @auth
            
                <div style="margin-right: 56px; display: flex;gap: 10px;">
                    
                    {{-- <span class="material-symbols-outlined" style="margin-top: 6px;">
                        notifications
                    </span> --}}
                    <div class="profile-dropdown" id="profileDropdown">
                        <img src="{{ asset('image/profile.svg') }}" alt="Profile" class="profile-icon" id="profileToggle">
                        <div class="dropdown-menu-custom" id="dropdownMenu">
                            {{-- <h5 class="dropdown-header">ACCOUNT</h5> --}}
                            <a href="{{ auth()->user()->role === 'admin' ? route('admin.dashboard') : route('user.dashboard') }}"><i class="nav-icon bi bi-house"></i> Dashboard</a>
                            <a href="{{ auth()->user()->role === 'admin' ? route('admin.profile') : route('user.profile') }} "><i class="nav-icon bi bi-person-circle"
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
            @else
                <a href="{{ route('signup')}} " class="btn custom-purple-btn" style="margin-right: 60px;">Sign Up</a>
            @endauth


        </div>
    </div>
</nav>
