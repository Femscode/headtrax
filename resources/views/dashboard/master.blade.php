<!doctype html>
<html lang="en" data-theme="light">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <link rel="stylesheet" href="assets/libs/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="assets/libs/glightbox/dist/css/glightbox.min.css" />
  <!-- Favicon icon-->
  <link rel="apple-touch-icon" sizes="180x180" href="{{url('assets/images/width:70px;height:50px')}}" />
  <link rel="icon" type="image/png" sizes="32x32" href="{{url('assets/images/width:70px;height:50px')}}" />
  <link rel="icon" type="image/png" sizes="16x16" href="{{url('assets/images/width:70px;height:50px')}}" />
  <link rel="manifest" href="assets/images/favicon/site.html" />
  <link rel="mask-icon" href="assets/images/favicon/block-safari-pinned-tab.svg" color="#8b3dff" />
  <link rel="shortcut icon" href="{{url('assets/images/width:70px;height:50px')}}" />
  <meta name="msapplication-TileColor" content="#8b3dff" />
  <meta name="msapplication-config" content="assets/images/favicon/tile.xml" />

  <!-- Color modes -->
  <script src="{{url('assets/js/vendors/color-modes.js')}}"></script>
  <link href="{{url('assets/libs/simplebar/dist/simplebar.min.css')}}" rel="stylesheet" />
  <link href="{{url('assets/libs/bootstrap-icons/font/bootstrap-icons.min.css')}}" rel="stylesheet" />
  <link rel="stylesheet" href="{{url('assets/libs/scrollcue/scrollCue.css')}}" />
  <link rel="stylesheet" href="{{url('assets/fonts/css/boxicons.min.css')}}" />
  <link rel="stylesheet" href="{{url('assets/css/theme.min.css')}}">
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-M8S4MT3EYG"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag("js", new Date());

    gtag("config", "G-M8S4MT3EYG");
  </script>
  <script type="text/javascript">
    (function(c, l, a, r, i, t, y) {
      c[a] =
        c[a] ||
        function() {
          (c[a].q = c[a].q || []).push(arguments);
        };
      t = l.createElement(r);
      t.async = 1;
      t.src = "https://www.clarity.ms/tag/" + i;
      y = l.getElementsByTagName(r)[0];
      y.parentNode.insertBefore(t, y);
    })(window, document, "clarity", "script", "kss8za9j58");
  </script>

  <title>Headtrax | Dashboard</title>
  @yield('header')
</head>

<body>
  <!-- Navbar -->
  <header>
    <nav class="navbar navbar-expand-lg  transparent navbar-transparent navbar-dark">
      <div class="container px-3">
        <a class="navbar-brandii d-flex" href="/">
          <img src="https://headtraxsolutions.com/headtrax_files/public/assets/images/logo3.png" style='width:70px;height:50px;border-radius:20px' alt />
          <!-- <h2 class='text-dark'>Headtrax Solutions</h2> -->
        </a>
        <button class="navbar-toggler offcanvas-nav-btn" type="button">
          <i class="bi bi-list"></i>
        </button>
        <div class="offcanvas offcanvas-start offcanvas-nav" style="width: 20rem">
          <div class="offcanvas-header">
            <a href="index.html" class="text-inverse"><img src="assets/images/logo/logo.svg" alt /></a>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body pt-0 align-items-center">
            <ul class="navbar-nav mx-auto align-items-lg-center">
              <li class="nav-item dropdown">
                <a class="nav-link" href="/" role="button">Home</a>

              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="/about-us" role="button">About Us</a>

              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="/our-services" role="button">Our Services</a>

              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="/blogs" role="button">Blogs</a>

              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Docs</a>
                <div class="dropdown-menu dropdown-menu-md" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item mb-3 text-body" href="#">
                    <div class="d-flex align-items-center">
                      <i class="bi bi-file-text fs-4 text-primary"></i>
                      <div class="ms-3 lh-1">
                        <h5 class="mb-1">Documentations</h5>
                        <p class="mb-0 fs-6">Browse the all documentation</p>
                      </div>
                    </div>
                  </a>

                  <a class="dropdown-item text-body" href="#">
                    <div class="d-flex align-items-center">
                      <i class="bi bi-clipboard fs-4 text-primary"></i>
                      <div class="ms-3 lh-1">
                        <h5 class="mb-1">
                          Changelog
                          <span class="text-primary ms-1"></span>
                        </h5>
                        <p class="mb-0 fs-6">See what's new</p>
                      </div>
                    </div>
                  </a>
                </div>
              </li>
            </ul>
            <div class="mt-3 mt-lg-0 d-flex align-items-center">
              <a href="/contact-us" class="btn btn-primary">Contact Us</a>
              <a href="/login" class="btn btn-light mx-2">Login</a>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <main>
    <!--Account home start-->
    <section class="py-lg-7 py-5 bg-light-subtle">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-4">
            <div class="d-flex align-items-center mb-4 justify-content-center justify-content-md-start">
              <img src='{{url("assets/images/avatar/fallback.jpg")}}' style='width:70px;height:50px;border-radius:50%' />

              <div class="ms-3">
                <h5 class="mb-0">{{$user->name}}</h5>

              </div>
            </div>
            <!-- Navbar -->

            <div class="d-md-none text-center d-grid">
              <button class="btn btn-light mb-3 d-flex align-items-center justify-content-between" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAccountMenu" aria-expanded="false" aria-controls="collapseAccountMenu">
                Account Menu
                <i class="bi bi-chevron-down ms-2"></i>
              </button>
            </div>
            <div class="collapse d-md-block" id="collapseAccountMenu">
              <ul class="nav flex-column nav-account">
                <li class="nav-item">
                  <a class="nav-link active" href="/dashboard">
                    <i class="align-bottom bx bx-home"></i>
                    <span class="ms-2">Home</span>
                  </a>
                </li>


                <li class="nav-item">
                  <a class="nav-link" href="/admin/contact-us">
                    <i class="align-bottom bx bx-bell"></i>
                    <span class="ms-2">Contact Us</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/admin/blogs">
                    <i class="align-bottom bx bx-box"></i>
                    <span class="ms-2">Blogs</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/admin/create-blog">
                    <i class="align-bottom bx bx-plus"></i>
                    <span class="ms-2">Create Blog</span>
                  </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="/logout" onclick='return confirm("Are you sure you want to logout?");'>
                    <i class="align-bottom bx bx-log-out"></i>
                    <span class="ms-2">Sign Out</span>
                  </a>
                </li>
              </ul>
            </div>

          </div>
          @yield('content')
        </div>
      </div>
    </section>
    <!--Account home end-->
  </main>
  <footer class="pt-7">
    <!-- <div class="container">
            <div class="row">
                <div class="col-lg-9 col-12">
                    <div class="row" id="ft-links">
                        <div class="col-lg-3 col-12">
                            <div class="position-relative">
                                <div class="mb-3 pb-2 d-flex justify-content-between border-bottom border-bottom-lg-0">
                                    <h4>Service</h4>
                                    <a class="d-block d-lg-none stretched-link text-body" data-bs-toggle="collapse" href="#collapseLanding" role="button" aria-expanded="true" aria-controls="collapseLanding">
                                        <i class="bi bi-chevron-down"></i>
                                    </a>
                                </div>
                                <div class="d-lg-block collapse show" id="collapseLanding" data-bs-parent="#ft-links" style="">
                                    <ul class="list-unstyled mb-0 py-3 py-lg-0">
                                        <li class="mb-2">
                                            <a href="index.html" class="text-decoration-none text-reset">Web App Development</a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="#!" class="text-decoration-none text-reset">Front End Development</a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="#!" class="text-decoration-none text-reset">MVP Development</a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="#!" class="text-decoration-none text-reset">Digital Marketing</a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="#!" class="text-decoration-none text-reset">Content Writing</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-12">
                            <div>
                                <div class="mb-3 pb-2 d-flex justify-content-between border-bottom border-bottom-lg-0 position-relative">
                                    <h4>About us</h4>
                                    <a
                                        class="d-block d-lg-none stretched-link text-body collapsed"
                                        data-bs-toggle="collapse"
                                        href="#collapseAccounts"
                                        role="button"
                                        aria-expanded="false"
                                        aria-controls="collapseAccounts">
                                        <i class="bi bi-chevron-down"></i>
                                    </a>
                                </div>
                                <div class="collapse d-lg-block" id="collapseAccounts" data-bs-parent="#ft-links">
                                    <ul class="list-unstyled mb-0 py-3 py-lg-0">
                                        <li class="mb-2">
                                            <a href="#!" class="text-decoration-none text-reset">Case Studies</a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="#!" class="text-decoration-none text-reset">Blog</a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="#!" class="text-decoration-none text-reset">Services</a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="#!" class="text-decoration-none text-reset">About</a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="#!" class="text-decoration-none text-reset">Career</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-12">
                            <div class="mb-3 pb-2 d-flex justify-content-between border-bottom border-bottom-lg-0 position-relative">
                                <h4>Technology</h4>
                                <a
                                    class="d-block d-lg-none stretched-link text-body collapsed"
                                    data-bs-toggle="collapse"
                                    href="#collapseResources"
                                    role="button"
                                    aria-expanded="false"
                                    aria-controls="collapseResources">
                                    <i class="bi bi-chevron-down"></i>
                                </a>
                            </div>
                            <div class="collapse d-lg-block" id="collapseResources" data-bs-parent="#ft-links">
                                <ul class="list-unstyled mb-0 py-3 py-lg-0">
                                    <li class="mb-2">
                                        <a href="docs/index.html" class="text-decoration-none text-reset">Next.js</a>
                                    </li>
                                    <li class="mb-2">
                                        <a href="#!" class="text-decoration-none text-reset">Sanity</a>
                                    </li>
                                    <li class="mb-2">
                                        <a href="changelog.html" class="text-decoration-none text-reset">Content ful</a>
                                    </li>
                                    <li class="mb-2">
                                        <a href="#!" class="text-decoration-none text-reset">Vercel</a>
                                    </li>
                                    <li class="mb-2">
                                        <a href="#!" class="text-decoration-none text-reset">Netlify</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-12">
                            <div class="mb-3 pb-2 d-flex justify-content-between border-bottom border-bottom-lg-0 position-relative">
                                <h4>Locations</h4>
                                <a
                                    class="d-block d-lg-none stretched-link text-body collapsed"
                                    data-bs-toggle="collapse"
                                    href="#collapseLocations"
                                    role="button"
                                    aria-expanded="false"
                                    aria-controls="collapseLocations">
                                    <i class="bi bi-chevron-down"></i>
                                </a>
                            </div>
                            <div class="collapse d-lg-block" id="collapseLocations" data-bs-parent="#ft-links">
                                <ul class="list-unstyled mb-0 py-3 py-lg-0">
                                    <li class="mb-2">
                                        <a href="docs/index.html" class="text-decoration-none text-reset">India</a>
                                    </li>
                                    <li class="mb-2">
                                        <a href="#!" class="text-decoration-none text-reset">Australia</a>
                                    </li>
                                    <li class="mb-2">
                                        <a href="changelog.html" class="text-decoration-none text-reset">Brazil</a>
                                    </li>
                                    <li class="mb-2">
                                        <a href="#!" class="text-decoration-none text-reset">Canada</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-12">
                    <div class="me-7">
                        <h4 class="mb-4">Headquarters</h4>
                        <p class="text-body-secondary">Codescandy, 412, Residency Rd, Shanthala Nagar, Ashok Nagar, Bengaluru, Karnataka, India 560025</p>
                    </div>
                </div>
            </div>
        </div> -->
    <div class="container mt-7 pt-lg-7 pb-4">
      <div class="row align-items-center">
        <div class="col-md-3">
          <a class="mb-4 mb-lg-0 d-block text-inverse" href="/">
            <img src="https://headtraxsolutions.com/headtrax_files/public/assets/images/logo3.png" style='width:70px;height:50px' alt="" />
          </a>
        </div>
        <div class="col-md-9 col-lg-6">
          <div class="small mb-3 mb-lg-0 text-lg-center">
            Copyright © <?php echo Date('Y'); ?>

            <span class="text-primary"><a href="#">Headtrax Solutions</a></span>
            | Developed by
            <span class="text-primary"><a href="/">CareTech</a></span>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="text-lg-end d-flex align-items-center justify-content-lg-end">
            <div class="dropdown">
              <button class="btn btn-light btn-icon rounded-circle d-flex align-items-center" type="button" aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (auto)">
                <i class="bi theme-icon-active lh-1"><i class="bi theme-icon bi-sun-fill"></i></i>
                <span class="visually-hidden bs-theme-text">Toggle theme</span>
              </button>
              <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bs-theme-text">
                <li>
                  <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="light" aria-pressed="true">
                    <i class="bi theme-icon bi-sun-fill"></i>
                    <span class="ms-2">Light</span>
                  </button>
                </li>
                <li>
                  <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
                    <i class="bi theme-icon bi-moon-stars-fill"></i>
                    <span class="ms-2">Dark</span>
                  </button>
                </li>
                <li>
                  <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="auto" aria-pressed="false">
                    <i class="bi theme-icon bi-circle-half"></i>
                    <span class="ms-2">Auto</span>
                  </button>
                </li>
              </ul>
            </div>
            <div class="ms-3 d-flex gap-2">
              <a href="#!" class="btn btn-instagram btn-light btn-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                  <path
                    d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"></path>
                </svg>
              </a>
              <a href="#!" class="btn btn-facebook btn-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                  <path
                    d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path>
                </svg>
              </a>
              <a href="#!" class="btn btn-twitter btn-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                  <path
                    d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path>
                </svg>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- Scroll top -->
  <div class="btn-scroll-top">
    <svg class="progress-square svg-content" width="100%" height="100%" viewBox="0 0 40 40">
      <path d="M8 1H32C35.866 1 39 4.13401 39 8V32C39 35.866 35.866 39 32 39H8C4.13401 39 1 35.866 1 32V8C1 4.13401 4.13401 1 8 1Z" />
    </svg>
  </div>
  <script src="{{url('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{url('assets/libs/simplebar/dist/simplebar.min.js')}}"></script>
  <script src="{{url('assets/libs/headhesive/dist/headhesive.min.js')}}"></script>
  <script src="{{url('assets/js/theme.min.js')}}"></script>
  <script src="{{url('assets/js/jquery.min.js')}}"></script>
  <script src="{{url('assets/js/sweetalert.js')}}"></script>
  <script src="{{url('assets/libs/jarallax/dist/jarallax.min.js')}}"></script>
  <script src="{{url('assets/js/vendors/jarallax.js')}}"></script>
  <script src="{{url('assets/libs/parallax-js/dist/parallax.min.js')}}"></script>
  <script src="{{url('assets/js/vendors/parallax.js')}}"></script>
  <script src="{{url('assets/libs/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{url('assets/js/vendors/swiper.js')}}"></script>
  <script src="{{url('assets/libs/glightbox/dist/js/glightbox.min.js')}}"></script>
  <script src="{{url('assets/js/vendors/glight.js')}}"></script>
  <script src="{{url('assets/libs/scrollcue/scrollCue.min.js')}}"></script>
  <script src="{{url('assets/js/vendors/scrollcue.js')}}"></script>
  @yield('script')
</body>

</html>