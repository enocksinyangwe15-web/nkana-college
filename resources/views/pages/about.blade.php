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
          <li class="dropdown"><a href="{{ asset('assets/about.html') }}" class="active"><span>About</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="{{ asset('assets/about.html') }}" class="active">About Us</a></li>
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
        <h1>About</h1>
        <p>Esse dolorum voluptatum ullam est sint nemo et est ipsa porro placeat quibusdam quia assumenda numquam molestias.</p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ asset('assets/index.html') }}">Home</a></li>
            <li class="current">About</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- History Section -->
    <section id="history" class="history section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row align-items-center g-5">
          <div class="col-lg-6">
            <div class="about-content" data-aos="fade-up" data-aos-delay="200">
              <h3>Our Story</h3>
              <h2>Educating Minds, Inspiring Hearts</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae odio ac nisi tristique venenatis. Nullam feugiat ipsum vitae justo finibus, in sagittis dolor malesuada. Aenean vel fringilla est, a vulputate massa.</p>

              <div class="timeline">
                <div class="timeline-item">
                  <div class="timeline-dot"></div>
                  <div class="timeline-content">
                    <h4>1965</h4>
                    <p>Etiam at tincidunt arcu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                  </div>
                </div>

                <div class="timeline-item">
                  <div class="timeline-dot"></div>
                  <div class="timeline-content">
                    <h4>1982</h4>
                    <p>Donec dignissim, odio ac imperdiet luctus, ante nisl accumsan justo, nec tempus augue mi in nulla.</p>
                  </div>
                </div>

                <div class="timeline-item">
                  <div class="timeline-dot"></div>
                  <div class="timeline-content">
                    <h4>1998</h4>
                    <p>Suspendisse potenti. Nullam lacinia dictum auctor. Phasellus euismod sem at dui imperdiet, ac tincidunt mi placerat.</p>
                  </div>
                </div>

                <div class="timeline-item">
                  <div class="timeline-dot"></div>
                  <div class="timeline-content">
                    <h4>2010</h4>
                    <p>Vestibulum ultrices magna ut faucibus sollicitudin. Sed eget venenatis enim, nec imperdiet ex.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="about-image" data-aos="zoom-in" data-aos-delay="300">
              <img src="{{ asset('assets/assets/img/education/campus-5.webp') }}" alt="Campus" class="img-fluid rounded">

              <div class="mission-vision" data-aos="fade-up" data-aos-delay="400">
                <div class="mission">
                  <h3>Our Mission</h3>
                  <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.</p>
                </div>

                <div class="vision">
                  <h3>Our Vision</h3>
                  <p>Nulla porttitor accumsan tincidunt. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Cras ultricies ligula sed magna dictum porta.</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row mt-5">
          <div class="col-lg-12">
            <div class="core-values" data-aos="fade-up" data-aos-delay="500">
              <h3 class="text-center mb-4">Core Values</h3>
              <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                <div class="col">
                  <div class="value-card">
                    <div class="value-icon">
                      <i class="bi bi-book"></i>
                    </div>
                    <h4>Academic Excellence</h4>
                    <p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.</p>
                  </div>
                </div>

                <div class="col">
                  <div class="value-card">
                    <div class="value-icon">
                      <i class="bi bi-people"></i>
                    </div>
                    <h4>Community Engagement</h4>
                    <p>Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.</p>
                  </div>
                </div>

                <div class="col">
                  <div class="value-card">
                    <div class="value-icon">
                      <i class="bi bi-lightbulb"></i>
                    </div>
                    <h4>Innovation</h4>
                    <p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.</p>
                  </div>
                </div>

                <div class="col">
                  <div class="value-card">
                    <div class="value-icon">
                      <i class="bi bi-globe"></i>
                    </div>
                    <h4>Global Perspective</h4>
                    <p>Donec sollicitudin molestie malesuada. Curabitur non nulla sit amet nisl tempus.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /History Section -->

    <!-- Leadership Section -->
    <section id="leadership" class="leadership section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row mb-5">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
            <h3 class="section-subtitle">Meet Our Leadership</h3>
            <h2 class="section-heading">Dedicated Administration Guiding Our Educational Excellence</h2>
            <p class="section-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ipsum sit nibh amet egestas tellus. Eu leo morbi massa sem faucibus nulla gravida vulputate adipiscing. Sed malesuada quam scelerisque amet commodo arcu mollis.</p>
            <div class="stats-container mt-4">
              <div class="row">
                <div class="col-md-4 col-6">
                  <div class="stat-item">
                    <h3>25+</h3>
                    <p>Years of Excellence</p>
                  </div>
                </div>
                <div class="col-md-4 col-6">
                  <div class="stat-item">
                    <h3>45+</h3>
                    <p>Faculty Members</p>
                  </div>
                </div>
                <div class="col-md-4 col-6">
                  <div class="stat-item">
                    <h3>98%</h3>
                    <p>Student Success</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
            <div class="about-image">
              <img src="{{ asset('assets/assets/img/education/teacher-1.webp') }}" alt="Our Leadership Team" class="img-fluid rounded">
            </div>
          </div>
        </div>

        <div class="leadership-team">
          <div class="row">
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
              <div class="leader-card">
                <div class="leader-image">
                  <img src="{{ asset('assets/assets/img/person/person-m-2.webp') }}" alt="Principal" class="img-fluid">
                  <div class="social-links">
                    <a href="{{ asset('assets/#') }}"><i class="bi bi-linkedin"></i></a>
                    <a href="{{ asset('assets/#') }}"><i class="bi bi-twitter-x"></i></a>
                    <a href="{{ asset('assets/#') }}"><i class="bi bi-envelope"></i></a>
                  </div>
                </div>
                <div class="leader-info">
                  <h4>Dr. Michael Anderson</h4>
                  <p class="position">Principal</p>
                  <p class="bio">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla luctus lectus a facilisis bibendum.</p>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
              <div class="leader-card">
                <div class="leader-image">
                  <img src="{{ asset('assets/assets/img/person/person-f-3.webp') }}" alt="Vice Principal" class="img-fluid">
                  <div class="social-links">
                    <a href="{{ asset('assets/#') }}"><i class="bi bi-linkedin"></i></a>
                    <a href="{{ asset('assets/#') }}"><i class="bi bi-twitter-x"></i></a>
                    <a href="{{ asset('assets/#') }}"><i class="bi bi-envelope"></i></a>
                  </div>
                </div>
                <div class="leader-info">
                  <h4>Dr. Sarah Johnson</h4>
                  <p class="position">Vice Principal</p>
                  <p class="bio">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla luctus lectus a facilisis bibendum.</p>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
              <div class="leader-card">
                <div class="leader-image">
                  <img src="{{ asset('assets/assets/img/person/person-m-5.webp') }}" alt="Dean of Students" class="img-fluid">
                  <div class="social-links">
                    <a href="{{ asset('assets/#') }}"><i class="bi bi-linkedin"></i></a>
                    <a href="{{ asset('assets/#') }}"><i class="bi bi-twitter-x"></i></a>
                    <a href="{{ asset('assets/#') }}"><i class="bi bi-envelope"></i></a>
                  </div>
                </div>
                <div class="leader-info">
                  <h4>Prof. David Martinez</h4>
                  <p class="position">Dean of Students</p>
                  <p class="bio">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla luctus lectus a facilisis bibendum.</p>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
              <div class="leader-card">
                <div class="leader-image">
                  <img src="{{ asset('assets/assets/img/person/person-f-8.webp') }}" alt="Academic Director" class="img-fluid">
                  <div class="social-links">
                    <a href="{{ asset('assets/#') }}"><i class="bi bi-linkedin"></i></a>
                    <a href="{{ asset('assets/#') }}"><i class="bi bi-twitter-x"></i></a>
                    <a href="{{ asset('assets/#') }}"><i class="bi bi-envelope"></i></a>
                  </div>
                </div>
                <div class="leader-info">
                  <h4>Dr. Emily Chen</h4>
                  <p class="position">Academic Director</p>
                  <p class="bio">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla luctus lectus a facilisis bibendum.</p>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
              <div class="leader-card">
                <div class="leader-image">
                  <img src="{{ asset('assets/assets/img/person/person-m-7.webp') }}" alt="Financial Director" class="img-fluid">
                  <div class="social-links">
                    <a href="{{ asset('assets/#') }}"><i class="bi bi-linkedin"></i></a>
                    <a href="{{ asset('assets/#') }}"><i class="bi bi-twitter-x"></i></a>
                    <a href="{{ asset('assets/#') }}"><i class="bi bi-envelope"></i></a>
                  </div>
                </div>
                <div class="leader-info">
                  <h4>Robert Wilson</h4>
                  <p class="position">Financial Director</p>
                  <p class="bio">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla luctus lectus a facilisis bibendum.</p>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
              <div class="leader-card">
                <div class="leader-image">
                  <img src="{{ asset('assets/assets/img/person/person-f-10.webp') }}" alt="Head of Admissions" class="img-fluid">
                  <div class="social-links">
                    <a href="{{ asset('assets/#') }}"><i class="bi bi-linkedin"></i></a>
                    <a href="{{ asset('assets/#') }}"><i class="bi bi-twitter-x"></i></a>
                    <a href="{{ asset('assets/#') }}"><i class="bi bi-envelope"></i></a>
                  </div>
                </div>
                <div class="leader-info">
                  <h4>Jessica Parker</h4>
                  <p class="position">Head of Admissions</p>
                  <p class="bio">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla luctus lectus a facilisis bibendum.</p>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
              <div class="leader-card">
                <div class="leader-image">
                  <img src="{{ asset('assets/assets/img/person/person-m-11.webp') }}" alt="IT Director" class="img-fluid">
                  <div class="social-links">
                    <a href="{{ asset('assets/#') }}"><i class="bi bi-linkedin"></i></a>
                    <a href="{{ asset('assets/#') }}"><i class="bi bi-twitter-x"></i></a>
                    <a href="{{ asset('assets/#') }}"><i class="bi bi-envelope"></i></a>
                  </div>
                </div>
                <div class="leader-info">
                  <h4>Thomas Lee</h4>
                  <p class="position">IT Director</p>
                  <p class="bio">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla luctus lectus a facilisis bibendum.</p>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
              <div class="leader-card">
                <div class="leader-image">
                  <img src="{{ asset('assets/assets/img/person/person-f-12.webp') }}" alt="Student Welfare Officer" class="img-fluid">
                  <div class="social-links">
                    <a href="{{ asset('assets/#') }}"><i class="bi bi-linkedin"></i></a>
                    <a href="{{ asset('assets/#') }}"><i class="bi bi-twitter-x"></i></a>
                    <a href="{{ asset('assets/#') }}"><i class="bi bi-envelope"></i></a>
                  </div>
                </div>
                <div class="leader-info">
                  <h4>Amanda Rodriguez</h4>
                  <p class="position">Student Welfare Officer</p>
                  <p class="bio">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla luctus lectus a facilisis bibendum.</p>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Leadership Section -->

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
