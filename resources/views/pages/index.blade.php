@extends('layouts.app')

@section('content')


  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

  <div class="hero-container">
    <img
       src="{{asset('assets/img/education/banner.png')}}"
       alt="banner"
       class="banner-image video-background"
       data-aos="zoom-in"
       data-aos-delay="100"
    />
    
    <div class="overlay"></div>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-7" data-aos="zoom-out" data-aos-delay="100">
          <div class="hero-content">
            <h1>Empowering Futures Through Education</h1>
            <p>At Nkana College, we prepare students for success with a perfect blend of academic excellence, practical skills, and global perspectives. Your journey to a brighter future starts here.</p>
            <div class="cta-buttons">
              <a href="{{ asset('assets/#') }}" class="btn-primary">Start Your Journey</a>
              <a href="{{ asset('assets/#') }}" class="btn-secondary">Discover Programs</a>
            </div>
          </div>
        </div>
        <div class="col-lg-5" data-aos="zoom-out" data-aos-delay="200">
          <div class="stats-card">
            <div class="stats-header">
              <h3>Why Choose Us</h3>
              <div class="decoration-line"></div>
            </div>
            <div class="stats-grid">
              <div class="stat-item">
                <div class="stat-icon">
                  <i class="bi bi-trophy-fill"></i>
                </div>
                <div class="stat-content">
                  <h4>98%</h4>
                  <p>Graduate Employment</p>
                </div>
              </div>
              <div class="stat-item">
                <div class="stat-icon">
                  <i class="bi bi-globe"></i>
                </div>
                <div class="stat-content">
                  <h4>12+</h4>
                  <p>International Partners</p>
                </div>
              </div>
              <div class="stat-item">
                <div class="stat-icon">
                  <i class="bi bi-mortarboard"></i>
                </div>
                <div class="stat-content">
                  <h4>15:1</h4>
                  <p>Student-Faculty Ratio</p>
                </div>
              </div>
              <div class="stat-item">
                <div class="stat-icon">
                  <i class="bi bi-building"></i>
                </div>
                <div class="stat-content">
                  <h4>4+</h4>
                  <p>Diploma Programs</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="event-ticker">
    <div class="container">
      <div class="row gy-4">
        <div class="col-md-6 col-xl-4 col-12 ticker-item">
          <span class="date">NOV 15</span>
          <span class="title">Open House Day</span>
          <a href="{{ asset('assets/#') }}" class="btn-register">Register</a>
        </div>
        <div class="col-md-6 col-12 col-xl-4  ticker-item">
          <span class="date">DEC 5</span>
          <span class="title">Application Workshop</span>
          <a href="{{ asset('assets/#') }}" class="btn-register">Register</a>
        </div>
        <div class="col-md-6 col-12 col-xl-4 ticker-item">
          <span class="date">JAN 10</span>
          <span class="title">International Student Orientation</span>
          <a href="{{ asset('assets/#') }}" class="btn-register">Register</a>
        </div>
      </div>
    </div>
  </div>

</section>
<!-- /Hero Section -->

    <!-- About Section -->
    <!-- /About Section -->

    <!-- Featured Programs Section -->
<section id="featured-programs" class="featured-programs section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Featured Programs</h2>
    <p>Explore our diverse diploma programs offered at Nkana College of Education and Applied Sciences.</p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
      <ul class="program-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
        <li data-filter="*" class="filter-active">All Programs</li>
        <li data-filter=".filter-health">Health Sciences</li>
        <li data-filter=".filter-teaching">Teaching</li>
        <li data-filter=".filter-environment">Environmental Sciences</li>
      </ul>

      <div class="row g-4 isotope-container">

        <!-- Clinical Medicine -->
        <div class="col-lg-6 isotope-item filter-health" data-aos="zoom-in" data-aos-delay="100">
          <div class="program-item">
            <div class="program-badge">Diploma</div>
            <div class="row g-0">
              <div class="col-md-4">
                <div class="program-image-wrapper">
                  <img src="{{ asset('assets/img/education/education-3.webp') }}" class="img-fluid" alt="Clinical Medicine">
                </div>
              </div>
              <div class="col-md-8">
                <div class="program-content">
                  <h3>Clinical Medicine</h3>
                  <div class="program-highlights">
                    <span><i class="bi bi-clock"></i> 3 Years</span>
                    <span><i class="bi bi-people-fill"></i> Full Time</span>
                    <span><i class="bi bi-calendar3"></i> Full Time Only</span>
                  </div>
                  <p>The Clinical Medicine program trains students to diagnose, manage, and treat common medical conditions. It emphasizes practical experience and clinical exposure in hospitals and health centers.</p>
                  <a href="{{ asset('assets/#') }}" class="program-btn"><span>Learn More</span> <i class="bi bi-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div><!-- End Program Item -->

        <!-- Registered Nursing -->
        <div class="col-lg-6 isotope-item filter-health" data-aos="zoom-in" data-aos-delay="200">
          <div class="program-item">
            <div class="program-badge">Diploma</div>
            <div class="row g-0">
              <div class="col-md-4">
                <div class="program-image-wrapper">
                  <img src="{{ asset('assets/img/education/education-1.webp') }}" class="img-fluid" alt="Registered Nursing">
                </div>
              </div>
              <div class="col-md-8">
                <div class="program-content">
                  <h3>Registered Nursing</h3>
                  <div class="program-highlights">
                    <span><i class="bi bi-clock"></i> 3 Years</span>
                    <span><i class="bi bi-people-fill"></i> Full Time</span>
                    <span><i class="bi bi-calendar3"></i> Full Time Only</span>
                  </div>
                  <p>This program provides professional training for aspiring nurses to deliver high-quality healthcare, focusing on patient care, ethics, and clinical skills development.</p>
                  <a href="{{ asset('assets/#') }}" class="program-btn"><span>Learn More</span> <i class="bi bi-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div><!-- End Program Item -->

        <!-- Early Childhood Teaching -->
        
        
        
      <!-- Early Childhood Teaching will be here  -->
        
        
        
        
        
        
        
        <!-- End Program Item -->

        <!-- Primary Teaching -->
        <div class="col-lg-6 isotope-item filter-teaching" data-aos="zoom-in" data-aos-delay="200">
          <div class="program-item">
            <div class="program-badge">Diploma</div>
            <div class="row g-0">
              <div class="col-md-4">
                <div class="program-image-wrapper">
                  <img src="{{ asset('assets/img/education/education-9.webp') }}" class="img-fluid" alt="Primary Teaching">
                </div>
              </div>
              <div class="col-md-8">
                <div class="program-content">
                  <h3>Primary Teaching</h3>
                  <div class="program-highlights">
                    <span><i class="bi bi-clock"></i> 3 Years</span>
                    <span><i class="bi bi-people-fill"></i> Distance</span>
                    <span><i class="bi bi-calendar3"></i> Full Time</span>
                  </div>
                  <p>This program prepares educators with practical and theoretical skills to teach effectively at the primary level, emphasizing pedagogy, assessment, and curriculum development.</p>
                  <a href="{{ asset('assets/#') }}" class="program-btn"><span>Learn More</span> <i class="bi bi-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div><!-- End Program Item -->

        <!-- Environmental Health Technology -->
        <div class="col-lg-6 isotope-item filter-environment" data-aos="zoom-in" data-aos-delay="100">
          <div class="program-item">
            <div class="program-badge">Diploma</div>
            <div class="row g-0">
              <div class="col-md-4">
                <div class="program-image-wrapper">
                  <img src="{{ asset('assets/img/education/education-5.webp') }}" class="img-fluid" alt="Environmental Health Technology">
                </div>
              </div>
              <div class="col-md-8">
                <div class="program-content">
                  <h3>Environmental Health Technology</h3>
                  <div class="program-highlights">
                    <span><i class="bi bi-clock"></i> 3 Years</span>
                    <span><i class="bi bi-people-fill"></i> Full Time</span>
                    <span><i class="bi bi-calendar3"></i> Full Time Only</span>
                  </div>
                  <p>This program focuses on promoting public health through environmental management, disease prevention, and sanitation practices for healthy communities.</p>
                  <a href="{{ asset('assets/#') }}" class="program-btn"><span>Learn More</span> <i class="bi bi-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div><!-- End Program Item -->

      </div>
    </div>
  </div>

</section><!-- /Featured Programs Section -->

   







   <!-- Students Life Block Section -->
<section id="students-life-block" class="students-life-block section">

<!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
  <h2>Student Life</h2>
  <p>Experience a vibrant campus environment where learning meets personal growth, creativity, and community engagement.</p>
</div><!-- End Section Title -->

<div class="container" data-aos="fade-up" data-aos-delay="100">

  <div class="row align-items-center gy-4">
    <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
      <div class="students-life-img position-relative">
        <img src="{{ asset('assets/img/education/OIP.webp') }}" 
             class="img-fluid rounded-4 shadow-sm" 
             alt="Student Life"
             style="max-height: 550px; width: 90%; object-fit: cover;">
        <div class="img-overlay">
          <h3>Discover Campus Life</h3>
          <a href="{{ asset('assets/students-life.html') }}" class="explore-btn">Explore More <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>
    </div>

    <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
      <div class="students-life-content">

        <div class="row g-4 mb-4">

          <div class="col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="student-activity-item">
              <div class="icon-box">
                <i class="bi bi-people"></i>
              </div>
              <h4>Student Clubs</h4>
              <p>Join diverse clubs and societies to develop leadership, teamwork, and personal interests beyond the classroom.</p>
            </div>
          </div>

          <div class="col-md-6" data-aos="zoom-in" data-aos-delay="300">
            <div class="student-activity-item">
              <div class="icon-box">
                <i class="bi bi-trophy"></i>
              </div>
              <h4>Sports Events</h4>
              <p>Participate in competitive and recreational sports to stay active, build resilience, and foster school spirit.</p>
            </div>
          </div>

          <div class="col-md-6" data-aos="zoom-in" data-aos-delay="400">
            <div class="student-activity-item">
              <div class="icon-box">
                <i class="bi bi-music-note-beamed"></i>
              </div>
              <h4>Arts &amp; Culture</h4>
              <p>Engage in music, theatre, and cultural activities to explore creativity and celebrate diverse talents on campus.</p>
            </div>
          </div>

          <div class="col-md-6" data-aos="zoom-in" data-aos-delay="500">
            <div class="student-activity-item">
              <div class="icon-box">
                <i class="bi bi-globe-americas"></i>
              </div>
              <h4>Global Experiences</h4>
              <p>Gain international exposure through exchange programs, seminars, and global projects to broaden your horizons.</p>
            </div>
          </div>

        </div>

        <div class="students-life-cta" data-aos="fade-up" data-aos-delay="600">
          <a href="{{ asset('assets/students-life.html') }}" class="btn btn-primary">View All Student Activities</a>
        </div>
      </div>
    </div>
  </div>

</div>
<!-- /Students Life Block Section -->

 <!-- Stats Section -->
<section id="stats" class="stats section">

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row">
      <div class="col-lg-6">
        <div class="stats-overview" data-aos="fade-right" data-aos-delay="200">
          <h2 class="stats-title">Empowering Excellence for Over 50 Years</h2>
          <p class="stats-description">
            For more than five decades, we have been dedicated to nurturing knowledge, innovation, and leadership. 
            Our institution continues to deliver quality education that shapes future professionals and transforms communities.
          </p>
          <div class="stats-cta">
            <a href="{{ asset('assets/#') }}" class="btn btn-primary">Learn More</a>
            <a href="{{ asset('assets/#') }}" class="btn btn-outline">Take a Virtual Tour</a>
          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="row g-4">
          <div class="col-md-6">
            <div class="stats-card" data-aos="zoom-in" data-aos-delay="300">
              <div class="stats-icon">
                <i class="bi bi-people-fill"></i>
              </div>
              <div class="stats-number">
                <span data-purecounter-start="0" data-purecounter-end="90" data-purecounter-duration="1" class="purecounter"></span>%
              </div>
              <div class="stats-label">Graduation Rate</div>
              <p></p>
            </div>
          </div>

          <div class="col-md-6">
            <div class="stats-card" data-aos="zoom-in" data-aos-delay="400">
              <div class="stats-icon">
                <i class="bi bi-person-workspace"></i>
              </div>
              <div class="stats-number">
                <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>:1
              </div>
              <div class="stats-label">Student-Faculty Ratio</div>
              <p></p>
            </div>
          </div>

          <div class="col-md-6">
            <div class="stats-card" data-aos="zoom-in" data-aos-delay="500">
              <div class="stats-icon">
                <i class="bi bi-award"></i>
              </div>
              <div class="stats-number">
                <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>+
              </div>
              <div class="stats-label">Academic Programs</div>
              <p></p>
            </div>
          </div>

          <div class="col-md-6">
            <div class="stats-card" data-aos="zoom-in" data-aos-delay="600">
              <div class="stats-icon">
                <i class="bi bi-cash-stack"></i>
              </div>
              <div class="stats-number">
                $<span data-purecounter-start="0" data-purecounter-end="2" data-purecounter-duration="1" class="purecounter"></span>M
              </div>
              <div class="stats-label">Research Funding</div>
              <p></p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Achievements Section -->
    <div class="row mt-5">
      <div class="col-lg-12">
        <div class="achievements-gallery" data-aos="fade-up" data-aos-delay="700">
          <div class="row g-4">
            
            <div class="col-md-4">
              <div class="achievement-item">
                <img src="{{ asset('assets/img/education/education-1.webp') }}" alt="Achievement" class="img-fluid">
                <div class="achievement-content">
                  <h4>Top-Ranked Programs</h4>
                  <p></p>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="achievement-item">
                <img src="{{ asset('assets/img/education/education-2.webp') }}" alt="Achievement" class="img-fluid">
                <div class="achievement-content">
                  <h4>Modern Learning Facilities</h4>
                  <p></p>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="achievement-item">
                <img src="{{ asset('assets/img/education/education-3.webp') }}" alt="Achievement" class="img-fluid">
                <div class="achievement-content">
                  <h4>Global Alumni Network</h4>
                  <p></p>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

  </div>

</section><!-- /Stats Section -->
   <!-- Recent News Section -->
    <section id="recent-news" class="recent-news section">

      <div class="container section-title" data-aos="fade-up">
  <h2>Recent News</h2>
  <p>Catch up on the latest updates, achievements, and announcements from our campus community.</p>
</div><Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <article>

              <div class="post-img">
                <img src="{{ asset('assets/img/blog/banner.png') }}" alt="" class="img-fluid">
              </div>

              <p class="post-category">Health Day</p>

              <h2 class="title">
                <a href="{{ asset('assets/blog-details.html') }}">Join us for Health Day to promote wellness,  and learn tips for a healthy lifestyle."</a>
              </h2>

              <div class="d-flex align-items-center">
                <img src="{{ asset('assets/img/person/person-f-12.webp') }}" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author">Mary mulenga</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Jan 1, 2022</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <article>

              <div class="post-img">
                <img src="{{ asset('assets/img/blog/Events.webp') }}" alt="" class="img-fluid">
              </div>

              <p class="post-category">New Program</p>

              <h2 class="title">
                <a href="{{ asset('assets/blog-details.html') }}">Explore our new program designed to equip students with practical skill dynamic professional environment.</a>
              </h2>

              <div class="d-flex align-items-center">
                <img src="{{ asset('assets/img/person/person-f-13.webp') }}" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author">Allisa Mayer</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Jun 5, 2022</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <article>

             <div class="post-img">
  <img src="{{ asset('assets/img/education/nurses.webp') }}" alt="" class="img-fluid">
</div>

<p class="post-category">Campus Life</p>

<h2 class="title">
  <a href="{{ asset('assets/blog-details.html') }}">Annual Health Awareness Week Promotes Student Wellbeing</a>
</h2>

<div class="d-flex align-items-center">
  <img src="{{ asset('assets/img/person/person-m-10.webp') }}" alt="" class="img-fluid post-author-img flex-shrink-0">
  <div class="post-meta">
    <p class="post-author">School Health Committee</p>
    <p class="post-date">
      <time datetime="2025-10-22">Oct 22, 2025</time>
    </p>
  </div>
</div>

            </article>
          </div><!-- End post list item -->

        </div><!-- End recent posts list -->

      </div>

    </section><!-- /Recent News Section -->

    <!-- Events Section -->
    <section id="events" class="events section">

     <div class="container section-title" data-aos="fade-up">
  <h2>Events</h2>
  <p>Stay updated with our latest campus activities, workshops, and student-focused events that foster learning and community engagement.</p>
</div>
<!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="event-filters mb-4">
          <div class="row justify-content-center g-3">
            <div class="col-md-4">
              <select class="form-select">
                <option selected="">All Months</option>
                <option>January</option>
                <option>February</option>
                <option>March</option>
                <option>April</option>
                <option>May</option>
                <option>June</option>
              </select>
            </div>
            <div class="col-md-4">
              <select class="form-select">
                <option selected="">All Categories</option>
                <option>Academic</option>
                <option>Arts</option>
                <option>Sports</option>
                <option>Community</option>
              </select>
            </div>
          </div>
        </div>

        <div class="row g-4">

          <div class="col-lg-6">
            <div class="event-card">
              <div class="event-date">
                <span class="month">FEB</span>
                <span class="day">15</span>
                <span class="year">2025</span>
              </div>
              <div class="event-content">
                <div class="event-tag academic">Academic</div>
                <h3>Science Fair Exhibition</h3>
                <p>Showcasing student innovation and creativity, the Science Fair Exhibition highlights exciting projects and experiments across various scientific disciplines.</p>
                <div class="event-meta">
                  <div class="meta-item">
                    <i class="bi bi-clock"></i>
                    <span>09:00 AM - 03:00 PM</span>
                  </div>
                  <div class="meta-item">
                    <i class="bi bi-geo-alt"></i>
                    <span>Main Auditorium</span>
                  </div>
                </div>
                <div class="event-actions">
                  <a href="{{ asset('assets/#') }}" class="btn-learn-more">Learn More</a>
                  <a href="{{ asset('assets/#') }}" class="btn-calendar"><i class="bi bi-calendar-plus"></i> Add to Calendar</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="event-card">
              <div class="event-date">
                <span class="month">MAR</span>
                <span class="day">10</span>
                <span class="year">2025</span>
              </div>
              <div class="event-content">
                <div class="event-tag sports">Sports</div>
                <h3>Annual Sports Day</h3>
                <p>Annual Sports Day celebrates athleticism and teamwork, bringing students together for fun, competition, and school spirit.</p>
                <div class="event-meta">
                  <div class="meta-item">
                    <i class="bi bi-clock"></i>
                    <span>08:30 AM - 05:00 PM</span>
                  </div>
                  <div class="meta-item">
                    <i class="bi bi-geo-alt"></i>
                    <span>School Playground</span>
                  </div>
                </div>
                <div class="event-actions">
                  <a href="{{ asset('assets/#') }}" class="btn-learn-more">Learn More</a>
                  <a href="{{ asset('assets/#') }}" class="btn-calendar"><i class="bi bi-calendar-plus"></i> Add to Calendar</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="event-card">
              <div class="event-date">
                <span class="month">APR</span>
                <span class="day">22</span>
                <span class="year">2025</span>
              </div>
              <div class="event-content">
                <div class="event-tag arts">Arts</div>
                <h3>Spring Music Concert</h3>
                <p>The Spring Music Concert showcases student talent, blending melodies and performances in a celebration of music and creativity.</p>
                <div class="event-meta">
                  <div class="meta-item">
                    <i class="bi bi-clock"></i>
                    <span>06:30 PM - 08:30 PM</span>
                  </div>
                  <div class="meta-item">
                    <i class="bi bi-geo-alt"></i>
                    <span>Performing Arts Center</span>
                  </div>
                </div>
                <div class="event-actions">
                  <a href="{{ asset('assets/#') }}" class="btn-learn-more">Learn More</a>
                  <a href="{{ asset('assets/#') }}" class="btn-calendar"><i class="bi bi-calendar-plus"></i> Add to Calendar</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="event-card">
              <div class="event-date">
                <span class="month">MAY</span>
                <span class="day">8</span>
                <span class="year">2025</span>
              </div>
              <div class="event-content">
                <div class="event-tag community">Community</div>
                <h3>Parent-Teacher Conference</h3>
                <p>he Parent-Teacher Conference provides an opportunity for parents and teachers to discuss student progress, achievements, and ways to support learning at home and school..</p>
                <div class="event-meta">
                  <div class="meta-item">
                    <i class="bi bi-clock"></i>
                    <span>01:00 PM - 07:00 PM</span>
                  </div>
                  <div class="meta-item">
                    <i class="bi bi-geo-alt"></i>
                    <span>Various Classrooms</span>
                  </div>
                </div>
                <div class="event-actions">
                  <a href="{{ asset('assets/#') }}" class="btn-learn-more">Learn More</a>
                  <a href="{{ asset('assets/#') }}" class="btn-calendar"><i class="bi bi-calendar-plus"></i> Add to Calendar</a>
                </div>
              </div>
            </div>
          </div>

        </div>

        <div class="text-center mt-5">
          <a href="{{ asset('assets/#') }}" class="btn-view-all">View All Events</a>
        </div>

      </div>

    </section><!-- /Events Section -->

  </main>
  <!-- Scroll Top -->
  <a href="{{ asset('assets/#') }}"Dolorum optio tempore voluptas dignissimos id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>
@endsection
