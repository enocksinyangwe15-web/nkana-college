@extends('layouts.app')

@section('content')

<main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background" style="background-image: url(assets/img/education/showcase-1.webp);">
      <div class="container position-relative">
        <h1>Admissions</h1>
        <p>Start your academic journey at Nkana College of Applied Sciences (NCASE), where excellence meets opportunity.</p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ route('admissions') }}">Home</a></li>
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
              <p>NCASE offers a wide range of applied sciences and technical programs designed to equip students with practical skills and academic excellence.</p>

              <div class="admissions-steps mt-5">
                <h3>How to Apply</h3>
                <div class="steps-wrapper mt-4">
                  <div class="step-item" data-aos="fade-up" data-aos-delay="100">
                    <div class="step-number">1</div>
                    <div class="step-content">
                      <h4>Submit Application</h4>
                      <p>Complete the online application form available on the NCASE website and submit all required information.</p>
                    </div>
                  </div>

                  <div class="step-item" data-aos="fade-up" data-aos-delay="200">
                    <div class="step-number">2</div>
                    <div class="step-content">
                      <h4>Send Required Documents</h4>
                      <p>Provide academic transcripts, recommendation letters, and any other required documentation.</p>
                    </div>
                  </div>

                  <div class="step-item" data-aos="fade-up" data-aos-delay="300">
                    <div class="step-number">3</div>
                    <div class="step-content">
                      <h4>Interview Process</h4>
                      <p>Attend an interview with the admissions committee if applicable.</p>
                    </div>
                  </div>

                  <div class="step-item" data-aos="fade-up" data-aos-delay="400">
                    <div class="step-number">4</div>
                    <div class="step-content">
                      <h4>Receive Admission Decision</h4>
                      <p>You will be notified of the admission decision via email or through the student portal.</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="deadlines mt-5" data-aos="fade-up">
                <h3>Key Admission Deadlines</h3>
                <div class="deadline-grid mt-4">
                  <div class="deadline-item">
                    <h4>Fall Semester</h4>
                    <div class="date">August 15, 2025</div>
                  </div>
                  <div class="deadline-item">
                    <h4>Spring Semester</h4>
                    <div class="date">January 10, 2026</div>
                  </div>
                  <div class="deadline-item">
                    <h4>Summer Session</h4>
                    <div class="date">May 20, 2026</div>
                  </div>
                  <div class="deadline-item">
                    <h4>Early Decision</h4>
                    <div class="date">November 1, 2025</div>
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
                    <p>Submit official transcripts from previous educational institutions.</p>
                  </div>
                </div>

                <div class="requirement-item" data-aos="fade-up" data-aos-delay="200">
                  <div class="icon-box">
                    <i class="bi bi-file-earmark-text"></i>
                  </div>
                  <div>
                    <h4>Recommendation Letters</h4>
                    <p>Provide at least two recommendation letters from teachers or mentors.</p>
                  </div>
                </div>

                <div class="requirement-item" data-aos="fade-up" data-aos-delay="300">
                  <div class="icon-box">
                    <i class="bi bi-journal-richtext"></i>
                  </div>
                  <div>
                    <h4>Personal Statement</h4>
                    <p>Explain your goals, interests, and why you wish to study at NCASE.</p>
                  </div>
                </div>

                <div class="requirement-item" data-aos="fade-up" data-aos-delay="400">
                  <div class="icon-box">
                    <i class="bi bi-graph-up"></i>
                  </div>
                  <div>
                    <h4>Standardized Tests</h4>
                    <p>Submit SAT, ACT, or other standardized test results if required by the program.</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="request-info mt-5" data-aos="fade-up">
              <div class="card">
                <div class="card-body">
                  <h3 class="card-title">Request Information</h3>
                  <p>Fill out the form below to receive more information about programs, admissions, and campus life.</p>

                  <form class="php-email-form mt-4" action="{{ route('contact.submit') }}">
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
                <p>Explore NCASE classrooms, labs, and campus facilities in person.</p>
                <a href="{{ route('campus') }}" class="btn btn-secondary">Schedule a Tour</a>
              </div>
            </div>
            <div class="col-md-6">
              <div class="cta-item apply">
                <i class="bi bi-file-earmark-check"></i>
                <h3>Ready to Apply?</h3>
                <p>Start your application online and become part of NCASE’s academic community.</p>
                <a href="{{ route('admissions') }}" class="btn btn-primary">Start Application</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Admissions Section -->

</main>

@endsection
