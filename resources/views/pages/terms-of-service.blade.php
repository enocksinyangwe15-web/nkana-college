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
              <li><a href="{{ asset('assets/terms-of-service.html') }}" class="active">Terms of Service</a></li>
              <li><a href="{{ asset('assets/404.html') }}">Error 404</a></li>
              <li><a href="{{ asset('assets/starter-page.html') }}">Starter Page</a></li>
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
        <h1>Terms Of Service</h1>
        <p>Esse dolorum voluptatum ullam est sint nemo et est ipsa porro placeat quibusdam quia assumenda numquam molestias.</p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ asset('assets/index.html') }}">Home</a></li>
            <li class="current">Terms Of Service</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Terms Of Service Section -->
    <section id="terms-of-service" class="terms-of-service section">

      <div class="container" data-aos="fade-up">
        <!-- Hero Section -->
        <div class="terms-hero" data-aos="fade-up">
          <span class="badge">Last Updated: February 27, 2025</span>
          <h2>Terms &amp; Conditions</h2>
          <p>These terms and conditions outline your rights and responsibilities when using our services</p>
          <div class="terms-highlights">
            <div class="highlight-item">
              <i class="bi bi-shield-check"></i>
              <span>Secure Service</span>
            </div>
            <div class="highlight-item">
              <i class="bi bi-lock"></i>
              <span>Data Protection</span>
            </div>
            <div class="highlight-item">
              <i class="bi bi-hand-thumbs-up"></i>
              <span>Fair Terms</span>
            </div>
          </div>
        </div>

        <!-- Terms Grid -->
        <div class="terms-grid" data-aos="fade-up">
          <!-- Agreement Card -->
          <div class="terms-card" data-aos="fade-up" data-aos-delay="100">
            <div class="card-header">
              <div class="header-icon">
                <i class="bi bi-file-text"></i>
              </div>
              <h3>Agreement Terms</h3>
            </div>
            <div class="card-content">
              <p>By accessing our service, you confirm that you are agreeing to be bound by these terms of service. These terms apply to all users and visitors.</p>
              <ul class="check-list">
                <li>Acceptance of terms</li>
                <li>Compliance with laws</li>
                <li>Service availability</li>
                <li>User obligations</li>
              </ul>
            </div>
          </div>

          <!-- User Rights Card -->
          <div class="terms-card" data-aos="fade-up" data-aos-delay="200">
            <div class="card-header">
              <div class="header-icon">
                <i class="bi bi-person-check"></i>
              </div>
              <h3>User Rights</h3>
            </div>
            <div class="card-content">
              <p>As a user, you have specific rights when using our service, including data privacy and access to features.</p>
              <ul class="check-list">
                <li>Account control</li>
                <li>Data privacy</li>
                <li>Service access</li>
                <li>Content ownership</li>
              </ul>
            </div>
          </div>

          <!-- Restrictions Card -->
          <div class="terms-card" data-aos="fade-up" data-aos-delay="300">
            <div class="card-header">
              <div class="header-icon">
                <i class="bi bi-shield-x"></i>
              </div>
              <h3>Restrictions</h3>
            </div>
            <div class="card-content">
              <div class="restrictions-list">
                <div class="restriction-item">
                  <i class="bi bi-x-circle"></i>
                  <span>No unauthorized data collection</span>
                </div>
                <div class="restriction-item">
                  <i class="bi bi-x-circle"></i>
                  <span>No service misuse</span>
                </div>
                <div class="restriction-item">
                  <i class="bi bi-x-circle"></i>
                  <span>No intellectual property violation</span>
                </div>
                <div class="restriction-item">
                  <i class="bi bi-x-circle"></i>
                  <span>No harmful activities</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Key Points -->
        <div class="terms-points" data-aos="fade-up">
          <h3>Key Points to Note</h3>
          <div class="points-grid">
            <div class="point-item">
              <div class="point-icon">
                <i class="bi bi-clock-history"></i>
              </div>
              <div class="point-content">
                <h4>Service Availability</h4>
                <p>We strive to provide uninterrupted service but cannot guarantee 100% availability.</p>
              </div>
            </div>

            <div class="point-item">
              <div class="point-icon">
                <i class="bi bi-shield-check"></i>
              </div>
              <div class="point-content">
                <h4>Privacy Protection</h4>
                <p>Your data is protected according to our privacy policy and applicable laws.</p>
              </div>
            </div>

            <div class="point-item">
              <div class="point-icon">
                <i class="bi bi-pencil-square"></i>
              </div>
              <div class="point-content">
                <h4>Content Rights</h4>
                <p>You retain rights to your content while granting us license to use it.</p>
              </div>
            </div>
          </div>

          <!-- Important Notices -->
          <div class="terms-notices" data-aos="fade-up">
            <div class="notice-wrapper">
              <div class="notice-items">
                <div class="notice-item">
                  <div class="notice-marker">
                    <i class="bi bi-exclamation-circle"></i>
                  </div>
                  <div class="notice-content">
                    <h4>Service Modifications</h4>
                    <p>We reserve the right to modify or discontinue any part of our service with or without notice.</p>
                  </div>
                </div>

                <div class="notice-item">
                  <div class="notice-marker">
                    <i class="bi bi-exclamation-circle"></i>
                  </div>
                  <div class="notice-content">
                    <h4>Account Termination</h4>
                    <p>We may terminate accounts that violate these terms or for any other reason at our discretion.</p>
                  </div>
                </div>

                <div class="notice-item">
                  <div class="notice-marker">
                    <i class="bi bi-exclamation-circle"></i>
                  </div>
                  <div class="notice-content">
                    <h4>Terms Updates</h4>
                    <p>These terms may be updated at any time. Continued use of the service implies acceptance.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Contact Box -->
          <div class="terms-contact" data-aos="fade-up">
            <div class="contact-wrapper">
              <div class="contact-content">
                <div class="contact-text">
                  <h4>Need Clarification?</h4>
                  <p>If you have questions about these terms, our support team is here to help.</p>
                </div>
                <div class="contact-actions">
                  <a href="{{ asset('assets/#') }}" class="btn-primary">Contact Support</a>
                  <a href="{{ asset('assets/#') }}" class="btn-outline">Download Terms</a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- /Terms Of Service Section -->

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
