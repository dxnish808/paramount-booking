
<x-app-layout> 
    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="hero-wrapper">
          <div class="row g-4">

            <div class="col-lg-7">
              <div class="hero-content" data-aos="zoom-in" data-aos-delay="200">
                <div class="content-header">
                    <h1>Work, Connect, Relax</h1>
                    <p>Reserve a meeting room, desk, or lounge space in just a few clicks. Stay productive with flexible booking options.</p>
                    </div>
                <style>
                  /* Only affect this page's search form */
                  .property-search-form .search-grid {
                    display: grid;
                    grid-template-columns: repeat(4, 1fr); /* 4 equal columns */
                    gap: 15px;
                  }

                  .property-search-form #search-location {
                    width: 100%;
                  }

                  .property-search-form .search-field.location-field {
                    grid-column: span 2; /* Location takes 2 blocks */
                  }

                  .property-search-form .time-row {
                    display: flex;
                    gap: 15px;
                  }

                  .property-search-form .time-row .search-field {
                    flex: 1;
                  }
                  </style>

                  <div class="search-container" data-aos="fade-up" data-aos-delay="300">
                    <div class="search-header">
                      <h3>Book Now</h3>
                    </div>

                    <form action="" class="property-search-form">
                      <div class="search-grid">
                        <div class="search-field location-field">
                          <label for="search-location" class="field-label">Location</label>
                          <input type="text" id="search-location" name="location" placeholder="Enter city or neighborhood" required>
                          <i class="bi bi-geo-alt field-icon"></i>
                        </div>

                        <div class="search-field">
                          <label for="search-type" class="field-label">Workspaces</label>
                          <select id="search-type" name="property_type" required>
                            <option value="">All Types</option>
                            <option value="Desk">Desk</option>
                            <option value="lounge">Lounge</option>
                            <option value="meetingRoom">Meeting room</option>
                          </select>
                          <i class="bi bi-building field-icon"></i>
                        </div>

                        <div class="search-field">
                          <label for="search-date" class="field-label">Date</label>
                          <input type="date" id="search-date" name="date" required>
                          <i class="bi bi-calendar field-icon"></i>
                        </div>

                        <div class="time-row" style="grid-column: span 2;">
                          <div class="search-field">
                            <label for="search-start" class="field-label">Start Time</label>
                            <input type="time" id="search-start" name="start_time" required>
                            <i class="bi bi-clock field-icon"></i>
                          </div>

                          <div class="search-field">
                            <label for="search-end" class="field-label">End Time</label>
                            <input type="time" id="search-end" name="end_time" required>
                            <i class="bi bi-clock-history field-icon"></i>
                          </div>
                        </div>
                      </div>

                      <button type="submit" class="search-btn">
                        <i class="bi bi-search"></i>
                        <span>Search</span>
                      </button>
                    </form>
                  </div>
              </div>
            </div><!-- End Hero Content -->

            <div class="col-lg-5">
              <div class="hero-visual" data-aos="fade-left" data-aos-delay="400">
                <div class="visual-container">
                  <div class="featured-property">
                    <img src="{{ asset('img/real-estate/property-exterior-8.webp') }}" alt="Featured Property" class="img-fluid">
                    <div class="property-info">
                      <div class="property-details">
                        <span><i class="bi bi-geo-alt"></i> Bachok Kelantan</span>
                      </div>
                    </div>
                  </div>

                  <div class="overlay-images">
                    <div class="overlay-img overlay-1">
                      <img src="{{ asset('img/real-estate/property-interior-4.webp') }}" alt="Interior View" class="img-fluid">
                    </div>
                    <div class="overlay-img overlay-2">
                      <img src="{{ asset('img/real-estate/property-exterior-2.webp') }}" alt="Exterior View" class="img-fluid">
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Hero Visual -->

          </div>
        </div>

      </div>

    </section><!-- /Hero Section -->

<section id="featured-services" class="featured-services section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Dedicated Workspaces</h2>
    <p>Book your ideal workspace by the week, month, or year — designed for productivity, comfort, and collaboration.</p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row g-4">

      <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
        <div class="service-card">
          <div class="service-icon">
            <i class="bi bi-laptop"></i>
          </div>
          <div class="service-info">
            <h3><a href="#">Meeting Rooms</a></h3>
            <p>Fully equipped spaces for team discussions, client meetings, and presentations.</p>
            <ul class="service-highlights">
              <li><i class="bi bi-check-circle-fill"></i> Whiteboard & Projector</li>
              <li><i class="bi bi-check-circle-fill"></i> High-speed Wi-Fi</li>
              <li><i class="bi bi-check-circle-fill"></i> Complimentary Coffee</li>
            </ul>
            <a href="#" class="service-link">
              <span>Book Now</span>
              <i class="bi bi-arrow-up-right"></i>
            </a>
          </div>
          <div class="service-visual">
            <img src="{{ asset('img/workspace/meeting-room.webp') }}" class="img-fluid" alt="Meeting Room" loading="lazy">
          </div>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
        <div class="service-card">
          <div class="service-icon">
            <i class="bi bi-person-workspace"></i>
          </div>
          <div class="service-info">
            <h3><a href="#">Dedicated Desks</a></h3>
            <p>Your own personal desk with all the amenities you need to work efficiently.</p>
            <ul class="service-highlights">
              <li><i class="bi bi-check-circle-fill"></i> 24/7 Access</li>
              <li><i class="bi bi-check-circle-fill"></i> High-speed Wi-Fi</li>
              <li><i class="bi bi-check-circle-fill"></i> Complimentary Coffee</li>
            </ul>
            <a href="#" class="service-link">
              <span>Reserve Desk</span>
              <i class="bi bi-arrow-up-right"></i>
            </a>
          </div>
          <div class="service-visual">
            <img src="{{ asset('img/workspace/dedicated-desk.webp') }}" class="img-fluid" alt="Dedicated Desk" loading="lazy">
          </div>
        </div>
      </div><!-- End Service Item -->

    </div>

    <div class="row g-4 mt-4">

      <div class="col-lg-6" data-aos="fade-right" data-aos-delay="400">
        <div class="service-card">
          <div class="service-icon">
            <i class="bi bi-cup-hot"></i>
          </div>
          <div class="service-info">
            <h3><a href="#">Lounge Spaces</a></h3>
            <p>Relax, network, or brainstorm in our comfortable and stylish lounge areas.</p>
            <ul class="service-highlights">
              <li><i class="bi bi-check-circle-fill"></i> Complimentary Coffee & Tea</li>
              <li><i class="bi bi-check-circle-fill"></i> Open Seating</li>
              <li><i class="bi bi-check-circle-fill"></i> High-speed Wi-Fi</li>
            </ul>
            <a href="#" class="service-link">
              <span>Join Now</span>
              <i class="bi bi-arrow-up-right"></i>
            </a>
          </div>
          <div class="service-visual">
            <img src="{{ asset('img/workspace/lounge-space.webp') }}" class="img-fluid" alt="Lounge Space" loading="lazy">
          </div>
        </div>
      </div><!-- End Service Item -->
    </div>
  </div>

</section><!-- /Featured Services Section -->

    <section id="why-us" class="why-us section">
  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Why Us</h2>
    <p>Your go-to platform for flexible workspaces, anytime, anywhere.</p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row gy-4">

      <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
        <div class="content">
          <h3>Why Choose Our Workspace Booking Platform?</h3>
          <p>We provide a seamless way to book meeting rooms, desks, or lounge spaces — whether you need them for a day, a week, a month, or a full year. With modern facilities and instant booking, you focus on your work, and we handle the rest.</p>

          <div class="features-list">
            <div class="feature-item d-flex align-items-center mb-3">
              <div class="icon-wrapper me-3">
                <i class="bi bi-wifi"></i>
              </div>
              <div>
                <h5>Free High-Speed Wi-Fi</h5>
                <p>Stay connected and productive with fast, reliable internet in all spaces.</p>
              </div>
            </div>

            <div class="feature-item d-flex align-items-center mb-3">
              <div class="icon-wrapper me-3">
                <i class="bi bi-cup-hot"></i>
              </div>
              <div>
                <h5>Complimentary Coffee & Tea</h5>
                <p>Enjoy unlimited coffee and tea to keep your day fueled and focused.</p>
              </div>
            </div>

            <div class="feature-item d-flex align-items-center mb-3">
              <div class="icon-wrapper me-3">
                <i class="bi bi-easel"></i>
              </div>
              <div>
                <h5>Whiteboards & Projectors</h5>
                <p>Perfect for brainstorming sessions, presentations, and team meetings.</p>
              </div>
            </div>

            <div class="feature-item d-flex align-items-center mb-3">
              <div class="icon-wrapper me-3">
                <i class="bi bi-calendar-check"></i>
              </div>
              <div>
                <h5>Flexible Booking Options</h5>
                <p>Reserve by the hour, day, week, or month to fit your unique schedule.</p>
              </div>
            </div>
          </div>

          <div class="cta-buttons mt-4">
            <a href="#" class="btn btn-primary me-3">View Available Spaces</a>
            <a href="#" class="btn btn-outline-primary">Contact Support</a>
          </div>
        </div>
      </div>

      <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
        <div class="stats-section">
          <div class="row gy-4">
            <div class="col-md-6">
              <div class="stat-card text-center">
                <div class="stat-icon mb-3">
                  <i class="bi bi-door-open"></i>
                </div>
                <div class="stat-number">
                  <span data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="2" class="purecounter"></span>+
                </div>
                <div class="stat-label">Available Workspaces</div>
                <p>Meeting rooms, desks, and lounges ready for your booking.</p>
              </div>
            </div>

            <div class="col-md-6">
              <div class="stat-card text-center">
                <div class="stat-icon mb-3">
                  <i class="bi bi-hand-thumbs-up"></i>
                </div>
                <div class="stat-number">
                  <span data-purecounter-start="0" data-purecounter-end="97" data-purecounter-duration="2" class="purecounter"></span>%
                </div>
                <div class="stat-label">User Satisfaction</div>
                <p>Rated highly by professionals, teams, and remote workers alike.</p>
              </div>
            </div>

            <div class="col-md-6">
              <div class="stat-card text-center">
                <div class="stat-icon mb-3">
                  <i class="bi bi-clock-history"></i>
                </div>
                <div class="stat-number">
                  <span data-purecounter-start="0" data-purecounter-end="24" data-purecounter-duration="2" class="purecounter"></span>/7
                </div>
                <div class="stat-label">Booking Access</div>
                <p>Reserve spaces anytime with our online booking system.</p>
              </div>
            </div>

            <div class="col-md-6">
              <div class="stat-card text-center">
                <div class="stat-icon mb-3">
                  <i class="bi bi-star-fill"></i>
                </div>
                <div class="stat-number">
                  <span data-purecounter-start="0" data-purecounter-end="500" data-purecounter-duration="2" class="purecounter"></span>+
                </div>
                <div class="stat-label">Positive Reviews</div>
                <p>Trusted by hundreds of happy members and repeat clients.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>

</section><!-- /Why Us Section -->



    <!-- Home About Section -->
    <section id="home-about" class="home-about section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-5">

          <div class="col-lg-5" data-aos="zoom-in" data-aos-delay="200">
            <div class="image-gallery">
              <div class="primary-image">
                <img src="{{ asset('img/real-estate/property-exterior-1.webp') }}" alt="Modern Property" class="img-fluid">
                <div class="experience-badge">
                  <div class="badge-content">
                    <div class="number"><span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>+</div>
                    <div class="text">Years<br>Experience</div>
                  </div>
                </div>
              </div>
              <div class="secondary-image">
                <img src="{{ asset('img/real-estate/property-interior-4.webp') }}" alt="Luxury Interior" class="img-fluid">
              </div>
            </div>
          </div>

          <div class="col-lg-7" data-aos="fade-left" data-aos-delay="300">
            <div class="content">
              <div class="section-header">
                <span class="section-label">About Our Company</span>
                <h2>Building Dreams, Creating Homes Since 2008</h2>
              </div>

              <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>

              <div class="achievements-list">
                <div class="achievement-item">
                  <div class="achievement-icon">
                    <i class="bi bi-house-door"></i>
                  </div>
                  <div class="achievement-content">
                    <h4><span data-purecounter-start="0" data-purecounter-end="3200" data-purecounter-duration="2" class="purecounter"></span>+ Properties Sold</h4>
                    <p>Successfully completed transactions</p>
                  </div>
                </div>
                <div class="achievement-item">
                  <div class="achievement-icon">
                    <i class="bi bi-people"></i>
                  </div>
                  <div class="achievement-content">
                    <h4><span data-purecounter-start="0" data-purecounter-end="98" data-purecounter-duration="1" class="purecounter"></span>% Client Satisfaction</h4>
                    <p>Happy customers recommend us</p>
                  </div>
                </div>
              </div>

              <div class="action-section">
                <a href="about.html" class="btn-cta">
                  <span>Discover Our Story</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
                <div class="contact-info">
                  <div class="contact-icon">
                    <i class="bi bi-telephone"></i>
                  </div>
                  <div class="contact-details">
                    <span>Call us today</span>
                    <strong>+1 (555) 123-4567</strong>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>

    </section><!-- /Home About Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Testimonials</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="testimonial-grid">

          <div class="testimonial-item" data-aos="zoom-in" data-aos-delay="100">
            <div class="testimonial-card">
              <div class="testimonial-header">
                <div class="testimonial-image">
                  <img src="{{ asset('img/person/person-f-5.webp') }}" class="img-fluid" alt="Testimonial 1">
                </div>
                <div class="testimonial-meta">
                  <h3>Sophia Martinez</h3>
                  <h4>Creative Director</h4>
                  <div class="company-logo">
                    <i class="bi bi-building"></i>
                  </div>
                </div>
              </div>
              <div class="testimonial-body">
                <i class="bi bi-chat-quote-fill quote-icon"></i>
                <p>Leveraging cutting-edge design principles to create immersive brand experiences that resonate with modern audiences.</p>
              </div>
            </div>
          </div>

          <div class="testimonial-item featured" data-aos="zoom-in" data-aos-delay="200">
            <div class="testimonial-card">
              <div class="testimonial-header">
                <div class="testimonial-image">
                  <img src="{{ asset('img/person/person-m-5.webp') }}" class="img-fluid" alt="Testimonial 2">
                </div>
                <div class="testimonial-meta">
                  <h3>Alexander Wright</h3>
                  <h4>CEO &amp; Founder</h4>
                  <div class="company-logo">
                    <i class="bi bi-buildings"></i>
                  </div>
                </div>
              </div>
              <div class="testimonial-body">
                <i class="bi bi-chat-quote-fill quote-icon"></i>
                <p>Revolutionary solutions have transformed our business landscape, driving unprecedented growth and market leadership position.</p>
              </div>
            </div>
          </div>

          <div class="testimonial-item" data-aos="zoom-in" data-aos-delay="300">
            <div class="testimonial-card">
              <div class="testimonial-header">
                <div class="testimonial-image">
                  <img src="{{ asset('img/person/person-f-6.webp') }}" class="img-fluid" alt="Testimonial 3">
                </div>
                <div class="testimonial-meta">
                  <h3>Isabella Kim</h3>
                  <h4>Product Strategist</h4>
                  <div class="company-logo">
                    <i class="bi bi-building-check"></i>
                  </div>
                </div>
              </div>
              <div class="testimonial-body">
                <i class="bi bi-chat-quote-fill quote-icon"></i>
                <p>Strategic implementation of innovative technologies has elevated our product development and market penetration.</p>
              </div>
            </div>
          </div>

          <div class="testimonial-item" data-aos="zoom-in" data-aos-delay="400">
            <div class="testimonial-card">
              <div class="testimonial-header">
                <div class="testimonial-image">
                  <img src="{{ asset('img/person/person-m-6.webp') }}" class="img-fluid" alt="Testimonial 4">
                </div>
                <div class="testimonial-meta">
                  <h3>James Cooper</h3>
                  <h4>Tech Lead</h4>
                  <div class="company-logo">
                    <i class="bi bi-building-gear"></i>
                  </div>
                </div>
              </div>
              <div class="testimonial-body">
                <i class="bi bi-chat-quote-fill quote-icon"></i>
                <p>Exceptional technical expertise and innovative solutions have streamlined our development processes significantly.</p>
              </div>
            </div>
          </div>

        </div>

      </div>

    </section><!-- /Testimonials Section -->

</x-app-layout>

