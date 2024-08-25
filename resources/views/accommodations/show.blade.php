<!doctype html>

<html
  lang="en"
  class="light-style layout-menu-fixed layout-wide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
  data-style="light">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Res Details</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet" />

    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="accommodations.css">

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>

    <style>
        .container-fluid {
            padding-left: 0;
            padding-right: 0;
        }

        .accommodation-title {
            font-size: 2em;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .accommodation-info {
            margin-bottom: 30px;
            margin-left:1.5%;
        }

        .address {
            font-size: 1.2em;
            color: #555;
            margin-bottom: 15px;
        }

        .address i {
            color: #007bff; /* Color of the icon */
            margin-right: 8px;
        }

        .features-list h3 {
            font-size: 1.5em;
            margin-bottom: 10px;
            color: #333;
        }

        .features-list .features {
            list-style: none;
            padding-left: 0;
        }

        .features-list .features li {
            font-size: 1.1em;
            color: #333;
            margin-bottom: 8px;
        }

        .features-list .features li i {
            color: #28a745; /* Color of the check icon */
            margin-right: 8px;
        }

        .image-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 10px; /* Space between grid items */
            padding: 0 15px; /* Optional padding to avoid touching screen edges */
        }

        .image-item {
            flex: 1 1 calc(33.333% - 10px); /* 3 images per row with gap */
            border-radius: 10px; /* Slightly curved borders */
            overflow: hidden;
        }

        .image-item img {
            width: 100%;
            height: auto;
            display: block;
            border-radius: 10px; /* Curved borders on images */
        }

        @media (max-width: 768px) {
            .image-item {
                flex: 1 1 calc(50% - 10px); /* 2 images per row on smaller screens */
            }
        }

        @media (max-width: 480px) {
            .image-item {
                flex: 1 1 100%; /* 1 image per row on very small screens */
            }
        }

        

        

        h1 {
            position: relative;
            padding: 0;
            margin: 0;
            font-family: "Raleway", sans-serif;
            font-weight: 300;
            font-size: 40px;
            color: #080808;
            -webkit-transition: all 0.4s ease 0s;
            -o-transition: all 0.4s ease 0s;
            transition: all 0.4s ease 0s;
        }
        
        h1 span {
            display: block;
            font-size: 0.5em;
            line-height: 1.3;
        }
        h1 em {
            font-style: normal;
            font-weight: 600;
        }
        
        .twelve h1 {
            font-size:26px; 
            font-weight:700;  
            letter-spacing:1px; 
            text-transform:uppercase; 
            width:160px; 
            text-align:center; 
            margin:auto; 
            margin-bottom:20px;
            white-space:nowrap; 
            padding-bottom:2px;
        }
        .twelve h1:before {
            background-color: #f39200;
            content: '';
            display: block;
            height: 3px;
            width: 75px;
            margin-bottom: 0px;
        }
        .twelve h1:after {
            background-color: #f39200;
            content: '';
            display: block;
            position:absolute; right:0; bottom:0;
            height: 3px;
            width: 75px;
            margin-bottom: 0.05em;
        }

        ol.style_1 {
            display: flex; /* Align items side by side */
            flex-wrap: wrap; /* Allow items to wrap to the next line */
            counter-reset: li;
            padding-left: 0; /* Remove the padding since we handle spacing with Flexbox */
            gap: 30px; /* Space between items */
        }

        ol.style_1 li {
            margin-bottom: 0; /* Remove margin-bottom as we're using gap */
            position: relative;
            counter-increment: li;
            min-height: 2rem;
            padding-left: 2.75rem; /* Create space for the circle */
            list-style: none;
            flex: 0 0 auto; /* Ensure each item stays its own size */
        }

        ol.style_1 li::before {
            content: counter(li);
            position: absolute;
            left: 0; /* Position the circle at the left of the li element */
            top: 0;
            height: calc(2rem - 1px);
            width: calc(2rem - 1px);
            align-items: center;
            justify-content: center;
            display: flex; /* Center the number inside the circle */
            border-radius: 50%;
            border: 2px solid #c50000;
            background-color: #fff; /* Optional: add a background color inside the circle */
        }

        ol.style_1 li::after {
            content: '';
            display: none; /* Hide the vertical line */
        }



    </style>
<link rel="stylesheet" href="h1.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="index.html" class="app-brand-link">
                <span class="app-brand-logo demo">
                    <img src="../assets/img/logo.png" alt="UMP Logo" width="160">
                </span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm d-flex align-items-center justify-content-center"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboards -->
            <li class="menu-item active open">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-home-smile"></i>
                <div class="text-truncate" data-i18n="Dashboards">Accommodations</div>
                <!-- <span class="badge rounded-pill bg-danger ms-auto">5</span> -->
              </a>
              <ul class="menu-sub">
                <li class="menu-item active">
                  <a href="#" class="menu-link">
                    <div class="text-truncate" data-i18n="Analytics">{{ $accommodation->name }}</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="{{ route('accommodations.index') }}" class="menu-link">
                  <div class="text-truncate" data-i18n="Analytics">View Accommodations</div>
                </a>
                </li>
                
              </ul>
            </li>



            
            <!-- Misc -->
            <li class="menu-header small text-uppercase"><span class="menu-header-text">Misc</span></li>
            <li class="menu-item">
              <a
                href="https://github.com/themeselection/sneat-html-admin-template-free/issues"
                target="_blank"
                class="menu-link">
                <i class="menu-icon tf-icons bx bx-support"></i>
                <div class="text-truncate" data-i18n="Support">Support</div>
              </a>
            </li>
            <li class="menu-item">
              <a
                href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/documentation/"
                target="_blank"
                class="menu-link">
                <i class="menu-icon tf-icons bx bx-file"></i>
                <div class="text-truncate" data-i18n="Documentation">Documentation</div>
              </a>
            </li>
          </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-fluid navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar">
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-4 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-6" href="javascript:void(0)">
                <i class="bx bx-menu bx-md"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                  <i class="bx bx-search bx-md"></i>
                  <input
                    type="text"
                    class="form-control border-0 shadow-none ps-1 ps-sm-2"
                    placeholder="Search..."
                    aria-label="Search..." />
                </div>
              </div>
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Place this tag where you want the button to render. -->
                <li class="nav-item lh-1 me-4">
                  <a
                    class="github-button"
                    href="https://github.com/themeselection/sneat-html-admin-template-free"
                    data-icon="octicon-star"
                    data-size="large"
                    data-show-count="true"
                    aria-label="Star themeselection/sneat-html-admin-template-free on GitHub"
                    >Star</a
                  >
                </li>

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a
                    class="nav-link dropdown-toggle hide-arrow p-0"
                    href="javascript:void(0);"
                    data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="mb-0">{{ Auth::user()->name }}</h6>
                            <small class="text-muted">Welcome</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider my-1"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-user bx-md me-3"></i><span>My Profile</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#"> <i class="bx bx-cog bx-md me-3"></i><span>Settings</span> </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <span class="d-flex align-items-center align-middle">
                          <i class="flex-shrink-0 bx bx-credit-card bx-md me-3"></i
                          ><span class="flex-grow-1 align-middle">Billing Plan</span>
                          <span class="flex-shrink-0 badge rounded-pill bg-danger">4</span>
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider my-1"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="javascript:void(0);">
                        <i class="bx bx-power-off bx-md me-3"></i><span>Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-fluid flex-grow-1 container-p-y">
              <!-- Layout Demo -->
              <div class="layout-demo-wrapper">
                <div class="layout-demo-placeholder">
                  
                    
                    <div class="container-fluid">
                    <div class="twelve">
                        <h1>{{ $accommodation->name }}</h1>
                    </div>

                        <!-- Responsive Image Grid -->
                        <div class="image-grid">
                                @foreach ($accommodation->images as $image)
                                    <div class="image-item">
                                        <img src="{{ asset('storage/' . $image->image_path) }}" alt="{{ $accommodation->name }}">
                                    </div>
                                @endforeach
                        </div>
                        <hr style="width:80%; margin:auto; height: 10px; color: #000">
                        
                       
                        <div class="accommodation-info">
                            

                            <!-- Features -->
                            <div>
                                <h3>Features</h3>


                            

                                <ol class="style_1">
                                    @foreach (explode(',', $accommodation->features) as $feature)
                                        <li>{{ $feature }}</li>
                                    @endforeach
                                </ol>
                            </div>

                            <!-- Address -->
                            <div class="address">
                            <h4>Address</h4>
                                <i class="fas fa-map-marker-alt"></i> <!-- FontAwesome icon -->
                                <span>{{ $accommodation->address }}</span>
                            </div>
                        </div>


                        

                        <div class="description">
                            <p>{{ $accommodation->description }}</p>
                        </div>
                    </div>
                </div>
                <div class="layout-demo-info">
                  <h4>Res Overview</h4>
                </div>
              </div>
              <!--/ Layout Demo -->
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-fluid">
                <div
                  class="footer-container d-flex align-items-center justify-content-between py-4 flex-md-row flex-column">
                  <div class="text-body">
                    ©
                    <script>
                      document.write(new Date().getFullYear());
                    </script>
                    , made with ❤️ by
                    <a href="#" target="_blank" class="footer-link">Natasha</a>
                  </div>
                  <div class="d-none d-lg-inline-block">
                    <a href="https://themeselection.com/license/" class="footer-link me-4" target="_blank">License</a>
                    <a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More Themes</a>

                    <a
                      href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/documentation/"
                      target="_blank"
                      class="footer-link me-4"
                      >Documentation</a
                    >

                    <a
                      href="https://github.com/themeselection/sneat-html-admin-template-free/issues"
                      target="_blank"
                      class="footer-link"
                      >Support</a
                    >
                  </div>
                </div>
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../assets/vendor/js/menu.js"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag before closing body tag for github widget button. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
