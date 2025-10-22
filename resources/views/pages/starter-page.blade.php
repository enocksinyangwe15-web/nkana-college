@extends('layouts.app')

@section('content')
<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="{{ asset('assets/index.html') }}" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="{{ asset('assets/assets/img/logo.webp') }}" alt=""> -->
        <i class="bi bi-buildings"></i>
        <h1 class="sitename">NiceSchool</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{ asset('assets/index.html') }}">Home</a></li>
          <li class="dropdown"><a href="{{ asset('assets/about.html') }}"><span>About</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="{{ asset('assets/about.html') }}">About Us</a></li>
              <li><a href="{{ asset('assets/admissions.html') }}">Admissions</a></li>
              <li><a href="{{ asset('assets/academics.html') }}">Academics</a></li>
              <li><a href="{{ asset('assets/faculty-staff.html') }}">Faculty &amp; Staff</a></li>
              <li><a href="{{ asset('assets/campus-facilities.html') }}">Campus &amp; Facilities</a></li>
            </ul>
          </li>

          <li><a href="{{ asset('assets/students-life.html') }}">Students Life</a></li>
          <li><a href="{{ asset('assets/news.html') }}">News</a></li>
          <li><a href="{{ asset('assets/events.html') }}">Events</a></li>
          <li><a href="{{ asset('assets/alumni.html') }}">Alumni</a></li>
          <li class="dropdown"><a href="{{ asset('assets/#') }}"><span>More Pages</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="{{ asset('assets/news-details.html') }}">News Details</a></li>
              <li><a href="{{ asset('assets/event-details.html') }}">Event Details</a></li>
              <li><a href="{{ asset('assets/privacy.html') }}">Privacy</a></li>
              <li><a href="{{ asset('assets/terms-of-service.html') }}">Terms of Service</a></li>
              <li><a href="{{ asset('assets/404.html') }}">Error 404</a></li>
              <li><a href="{{ asset('assets/starter-page.html') }}" class="active">Starter Page</a></li>
            </ul>
          </li>

          <li class="dropdown"><a href="{{ asset('assets/#') }}"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="{{ asset('assets/#') }}">Dropdown 1</a></li>
              <li class="dropdown"><a href="{{ asset('assets/#') }}"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="{{ asset('assets/#') }}">Deep Dropdown 1</a></li>
                  <li><a href="{{ asset('assets/#') }}">Deep Dropdown 2</a></li>
                  <li><a href="{{ asset('assets/#') }}">Deep Dropdown 3</a></li>
                  <li><a href="{{ asset('assets/#') }}">Deep Dropdown 4</a></li>
                  <li><a href="{{ asset('assets/#') }}">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="{{ asset('assets/#') }}">Dropdown 2</a></li>
              <li><a href="{{ asset('assets/#') }}">Dropdown 3</a></li>
              <li><a href="{{ asset('assets/#') }}">Dropdown 4</a></li>
            </ul>
          </li>
          <li><a href="{{ asset('assets/contact.html') }}">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background" style="background-image: url(assets/img/education/showcase-1.webp);">
      <div class="container position-relative">
        <h1>Starter Page</h1>
        <p>Esse dolorum voluptatum ullam est sint nemo et est ipsa porro placeat quibusdam quia assumenda numquam molestias.</p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ asset('assets/index.html') }}">Home</a></li>
            <li class="current">Starter Page</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Starter Section Section -->
    <section id="starter-section" class="starter-section section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Starter Section</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up">
        <p>Use this page as a starter for your own custom pages.</p>
      </div>

    </section><!-- /Starter Section Section -->

  </main>

  <footer id="footer" class="footer position-relative dark-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="{{ asset('assets/index.html') }}" class="logo d-flex align-items-center">
            <span class="sitename">NiceSchool</span>
          </a>
          <div class="footer-contact pt-3">
            <p>A108 Adam Street</p>
            <p>New York, NY 535022</p>
            <p class="mt-3"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
            <p><strong>Email:</strong> <span>info@example.com</span></p>
          </div>
          <div class="social-links d-flex mt-4">
            <a href="{{ asset('assets/') }}"><i class="bi bi-twitter-x"></i></a>
            <a href="{{ asset('assets/') }}"><i class="bi bi-facebook"></i></a>
            <a href="{{ asset('assets/') }}"><i class="bi bi-instagram"></i></a>
            <a href="{{ asset('assets/') }}"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="{{ asset('assets/#') }}">Home</a></li>
            <li><a href="{{ asset('assets/#') }}">About us</a></li>
            <li><a href="{{ asset('assets/#') }}">Services</a></li>
            <li><a href="{{ asset('assets/#') }}">Terms of service</a></li>
            <li><a href="{{ asset('assets/#') }}">Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="{{ asset('assets/#') }}">Web Design</a></li>
            <li><a href="{{ asset('assets/#') }}">Web Development</a></li>
            <li><a href="{{ asset('assets/#') }}">Product Management</a></li>
            <li><a href="{{ asset('assets/#') }}">Marketing</a></li>
            <li><a href="{{ asset('assets/#') }}">Graphic Design</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Hic solutasetp</h4>
          <ul>
            <li><a href="{{ asset('assets/#') }}">Molestiae accusamus iure</a></li>
            <li><a href="{{ asset('assets/#') }}">Excepturi dignissimos</a></li>
            <li><a href="{{ asset('assets/#') }}">Suscipit distinctio</a></li>
            <li><a href="{{ asset('assets/#') }}">Dilecta</a></li>
            <li><a href="{{ asset('assets/#') }}">Sit quas consectetur</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Nobis illum</h4>
          <ul>
            <li><a href="{{ asset('assets/#') }}">Ipsam</a></li>
            <li><a href="{{ asset('assets/#') }}">Laudantium dolorum</a></li>
            <li><a href="{{ asset('assets/#') }}">Dinera</a></li>
            <li><a href="{{ asset('assets/#') }}">Trodelas</a></li>
            <li><a href="{{ asset('assets/#') }}">Flexo</a></li>
          </ul>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">MyWebsite</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="{{ asset('assets/https://bootstrapmade.com/') }}">BootstrapMade</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="{{ asset('assets/#') }}" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('assets/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('assets/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('assets/assets/js/main.js') }}"></script>
@endsection
