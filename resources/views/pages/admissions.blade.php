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
              <li><a href="{{ asset('assets/admissions.html') }}" class="active">Admissions</a></li>
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
        <h1>Admissions</h1>
        <p>Esse dolorum voluptatum ullam est sint nemo et est ipsa porro placeat quibusdam quia assumenda numquam molestias.</p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ asset('assets/index.html') }}">Home</a></li>
            <li class="current">Admissions</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Admissions Section -->
    <section id="admissions" class="admissions section">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-5 g-lg-5">
          <div class="col-lg-6">
            <div class="admissions-info" data-aos="fade-up">
              <h2>Begin Your Academic Journey Today</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet.</p>

              <div class="admissions-steps mt-5">
                <h3>How to Apply</h3>
                <div class="steps-wrapper mt-4">
                  <div class="step-item" data-aos="fade-up" data-aos-delay="100">
                    <div class="step-number">1</div>
                    <div class="step-content">
                      <h4>Submit Application</h4>
                      <p>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Sed porttitor lectus nibh. Praesent sapien massa.</p>
                    </div>
                  </div>

                  <div class="step-item" data-aos="fade-up" data-aos-delay="200">
                    <div class="step-number">2</div>
                    <div class="step-content">
                      <h4>Send Documents</h4>
                      <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel.</p>
                    </div>
                  </div>

                  <div class="step-item" data-aos="fade-up" data-aos-delay="300">
                    <div class="step-number">3</div>
                    <div class="step-content">
                      <h4>Interview Process</h4>
                      <p>Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Nulla porttitor accumsan tincidunt.</p>
                    </div>
                  </div>

                  <div class="step-item" data-aos="fade-up" data-aos-delay="400">
                    <div class="step-number">4</div>
                    <div class="step-content">
                      <h4>Receive Decision</h4>
                      <p>Vivamus suscipit tortor eget felis porttitor volutpat. Cras ultricies ligula sed magna dictum porta. Nulla quis lorem ut libero.</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="deadlines mt-5" data-aos="fade-up">
                <h3>Key Admission Deadlines</h3>
                <div class="deadline-grid mt-4">
                  <div class="deadline-item">
                    <h4>Fall Semester</h4>
                    <div class="date">March 15, 2023</div>
                  </div>
                  <div class="deadline-item">
                    <h4>Spring Semester</h4>
                    <div class="date">October 1, 2023</div>
                  </div>
                  <div class="deadline-item">
                    <h4>Summer Session</h4>
                    <div class="date">January 30, 2024</div>
                  </div>
                  <div class="deadline-item">
                    <h4>Early Decision</h4>
                    <div class="date">November 15, 2023</div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="admissions-requirements" data-aos="fade-up">
              <h3>Admission Requirements</h3>
              <div class="requirements-list mt-4">
                <div class="requirement-item" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon-box">
                    <i class="bi bi-mortarboard-fill"></i>
                  </div>
                  <div>
                    <h4>Academic Records</h4>
                    <p>Pellentesque in ipsum id orci porta dapibus. Vivamus magna justo, lacinia eget consectetur sed.</p>
                  </div>
                </div>

                <div class="requirement-item" data-aos="fade-up" data-aos-delay="200">
                  <div class="icon-box">
                    <i class="bi bi-file-earmark-text"></i>
                  </div>
                  <div>
                    <h4>Recommendation Letters</h4>
                    <p>Nulla quis lorem ut libero malesuada feugiat. Curabitur non nulla sit amet nisl tempus.</p>
                  </div>
                </div>

                <div class="requirement-item" data-aos="fade-up" data-aos-delay="300">
                  <div class="icon-box">
                    <i class="bi bi-journal-richtext"></i>
                  </div>
                  <div>
                    <h4>Personal Statement</h4>
                    <p>Proin eget tortor risus. Vivamus suscipit tortor eget felis porttitor volutpat.</p>
                  </div>
                </div>

                <div class="requirement-item" data-aos="fade-up" data-aos-delay="400">
                  <div class="icon-box">
                    <i class="bi bi-graph-up"></i>
                  </div>
                  <div>
                    <h4>Standardized Tests</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris blandit aliquet elit.</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="request-info mt-5" data-aos="fade-up">
              <div class="card">
                <div class="card-body">
                  <h3 class="card-title">Request Information</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin gravida nibh vel velit auctor aliquet.</p>

                  <form class="php-email-form mt-4" action="forms/contact.php">
                    <div class="mb-3">
                      <input type="text" name="name" class="form-control" placeholder="Full Name" required="">
                    </div>
                    <div class="mb-3">
                      <input type="email" name="email" class="form-control" placeholder="Email Address" required="">
                    </div>
                    <div class="mb-3">
                      <input type="tel" name="phone" class="form-control" placeholder="Phone Number">
                    </div>
                    <div class="mb-3">
                      <select name="subject" class="form-select" required="">
                        <option value="" selected="" disabled="">Program of Interest</option>
                        <option value="Undergraduate">Undergraduate</option>
                        <option value="Graduate">Graduate</option>
                        <option value="Doctoral">Doctoral</option>
                        <option value="Certificate">Certificate</option>
                      </select>
                    </div>
                    <div class="mb-3">
                      <textarea name="message" class="form-control" rows="3" placeholder="Questions or Comments" required=""></textarea>
                    </div>
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your request has been sent. Thank you!</div>
                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Submit Request</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="cta-wrapper mt-5" data-aos="fade-up">
          <div class="row g-0">
            <div class="col-md-6">
              <div class="cta-item tour">
                <i class="bi bi-building"></i>
                <h3>Visit Our Campus</h3>
                <p>Nulla porttitor accumsan tincidunt. Vivamus suscipit tortor eget felis porttitor volutpat.</p>
                <a href="{{ asset('assets/#') }}" class="btn btn-secondary">Schedule a Tour</a>
              </div>
            </div>
            <div class="col-md-6">
              <div class="cta-item apply">
                <i class="bi bi-file-earmark-check"></i>
                <h3>Ready to Apply?</h3>
                <p>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur non nulla sit amet.</p>
                <a href="{{ asset('assets/#') }}" class="btn btn-primary">Start Application</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Admissions Section -->

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
