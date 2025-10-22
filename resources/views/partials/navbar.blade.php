<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="{{ url('/') }}" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="{{ asset('assets/assets/img/logo.webp') }}" alt=""> -->
        <i class="bi bi-buildings"></i>
        <h1 class="sitename">NCASE</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{ url('/') }}" class="active">Home</a></li>
          <li class="dropdown"><a href="{{ url('/about') }}"><span>About</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="{{ url('/about') }}">About Us</a></li>
              <li><a href="{{ url('/admissions') }}">Admissions</a></li>
              <li><a href="{{ url('/academics') }}">Academics</a></li>
              <li><a href="{{ url('/faculty-staff') }}">Faculty &amp; Staff</a></li>
              <li><a href="{{ url('/campus-facilities') }}">Campus &amp; Facilities</a></li>
            </ul>
          </li>

          <li><a href="{{ url('/students-life') }}">Students Life</a></li>
          <li><a href="{{ url('/news') }}">News</a></li>
          <li><a href="{{ url('/events') }}">Events</a></li>
          <li><a href="{{ url('/alumni') }}">Alumni</a></li>
          <li class="dropdown"><a href="#"><span>More Pages</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="{{ url('/news-details') }}">News Details</a></li>
              <li><a href="{{ url('/event-details') }}">Event Details</a></li>
              <li><a href="{{ url('/privacy') }}">Privacy</a></li>
              <li><a href="{{ url('/terms-of-service') }}">Terms of Service</a></li>
              <li><a href="{{ url('/404') }}">Error 404</a></li>
              <li><a href="{{ url('/starter-page') }}">Starter Page</a></li>
            </ul>
          </li>

          <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Dropdown 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>
          </li>
          <li><a href="{{ url('/contact') }}">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>
