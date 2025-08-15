<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Paramount Booking</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{ asset('img/favicon.png') }}" rel="icon">
  <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="{{ url('/') }}" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="{{ asset('img/logo.webp') }}" alt=""> -->
        <svg class="my-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <g id="bgCarrier" stroke-width="0"></g>
          <g id="tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
          <g id="iconCarrier">
            <path d="M22 22L2 22" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
            <path d="M2 11L6.06296 7.74968M22 11L13.8741 4.49931C12.7784 3.62279 11.2216 3.62279 10.1259 4.49931L9.34398 5.12486" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
            <path d="M15.5 5.5V3.5C15.5 3.22386 15.7239 3 16 3H18.5C18.7761 3 19 3.22386 19 3.5V8.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
            <path d="M4 22V9.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
            <path d="M20 9.5V13.5M20 22V17.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
            <path d="M15 22V17C15 15.5858 15 14.8787 14.5607 14.4393C14.1213 14 13.4142 14 12 14C10.5858 14 9.87868 14 9.43934 14.4393M9 22V17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M14 9.5C14 10.6046 13.1046 11.5 12 11.5C10.8954 11.5 10 10.6046 10 9.5C10 8.39543 10.8954 7.5 12 7.5C13.1046 7.5 14 8.39543 14 9.5Z" stroke="currentColor" stroke-width="1.5"></path>
          </g>
        </svg>
        <h1 class="sitename">Paramount</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{ url('/') }}" class="active">Home</a></li>
          <li class="dropdown"><a href="#"><span>Account</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="{{ url('#') }}">Company Details</a></li>
              <li><a href="{{ url('#') }}">Billig and Payments</a></li>
              <li><a href="{{ url('#') }}">Product and Services</a></li>
              <li><a href="{{ url('#') }}">Documents</a></li>
              <li><a href="{{ url('#') }}">Network Devices</a></li>
              <li><a href="{{ url('#') }}">Make a referral</a></li>
            </ul>
          </li>
          <li><a href="{{ url('services.html') }}">Quick access</a></li>
          <li><a href="{{ url('agents.html') }}">Help</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>
  <!--================Header Area =================-->

  <!-- Page Content -->
  <main>
    {{ $slot }}
  </main>
  <!--================ start footer Area  =================-->
  <footer id="footer" class="footer accent-background py-5">

  <div class="container">
    <div class="row gy-4 align-items-center">

      <!-- About & Social -->
      <div class="col-lg-5 col-md-12 footer-about">
        <h5 class="fw-bold text-white mb-3">Workspace Booking System</h5>
        <p class="text-light small">
          Book meeting rooms, desks, or lounge spaces with ease.  
          Work smarter, connect better, and achieve more.
        </p>
        <div class="social-links d-flex gap-3 mt-3">
          <a href="#" class="text-light fs-5"><i class="bi bi-twitter-x"></i></a>
          <a href="#" class="text-light fs-5"><i class="bi bi-facebook"></i></a>
          <a href="#" class="text-light fs-5"><i class="bi bi-instagram"></i></a>
          <a href="#" class="text-light fs-5"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>

      <!-- Useful Links -->
      <div class="col-lg-2 col-6 footer-links">
        <h6 class="fw-bold text-white">Useful Links</h6>
        <ul class="list-unstyled small">
          <li><a href="#" class="text-light text-decoration-none">Home</a></li>
          <li><a href="#" class="text-light text-decoration-none">About Us</a></li>
          <li><a href="#" class="text-light text-decoration-none">Services</a></li>
          <li><a href="#" class="text-light text-decoration-none">Terms of Service</a></li>
          <li><a href="#" class="text-light text-decoration-none">Privacy Policy</a></li>
        </ul>
      </div>

      <!-- Contact -->
      <div class="col-lg-5 col-12">
        <h6 class="fw-bold text-white">Contact</h6>
        <p class="text-light small mb-1">123 Business Street, Kuala Lumpur, Malaysia</p>
        <p class="text-light small mb-1">Email: info@workspace.com</p>
        <p class="text-light small">Phone: +60 123 456 789</p>
      </div>

    </div>

    <hr class="border-light my-4">

    <div class="text-center text-light small">
      &copy; 2025 Workspace Booking System. All Rights Reserved.
    </div>
  </div>

</footer>


  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
