<?php
include "../include/temp.header.php";
?>







<body class="  " style="zoom: 0.9;">
    <span class="screen-darken"></span>
    <!-- loader Start -->
    <div id="loading">
        <div class="loader simple-loader">
            <div class="loader-body"></div>
        </div>
    </div>
    <!-- loader END -->
    <main class="main-content">
        <!--Nav Start-->
        <nav class="nav navbar navbar-expand-xl navbar-light iq-navbar">
            <div class="container-fluid navbar-inner">
                <button data-trigger="navbar_main" class="d-xl-none btn btn-primary rounded-pill p-1 pt-0" type="button">
                    <svg width="20px" height="20px" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"></path>
                    </svg>
                </button>
                <div class="col-lg-2 col-lg-3 navbar-brand">
                    <a href="../dashboard/index.html" class="d-flex">
                        <!--Logo start-->
                        <svg width="30" class="" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="-0.757324" y="19.2427" width="28" height="4" rx="2" transform="rotate(-45 -0.757324 19.2427)" fill="currentColor" />
                            <rect x="7.72803" y="27.728" width="28" height="4" rx="2" transform="rotate(-45 7.72803 27.728)" fill="currentColor" />
                            <rect x="10.5366" y="16.3945" width="16" height="4" rx="2" transform="rotate(45 10.5366 16.3945)" fill="currentColor" />
                            <rect x="10.5562" y="-0.556152" width="28" height="4" rx="2" transform="rotate(45 10.5562 -0.556152)" fill="currentColor" />
                        </svg>
                        <!--logo End-->
                        <h4 class="logo-title">Hope UI</h4>
                    </a>
                </div>
                <!-- Horizontal Menu Start -->
                <nav id="navbar_main" class="mobile-offcanvas nav navbar navbar-expand-xl hover-nav horizontal-nav mx-md-auto">
                    <div class="container-fluid">
                        <div class="offcanvas-header px-0">
                            <div class="navbar-brand ms-0">
                                <!--Logo start-->
                                <svg width="30" class="text-primary" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="-0.757324" y="19.2427" width="28" height="4" rx="2" transform="rotate(-45 -0.757324 19.2427)" fill="currentColor" />
                                    <rect x="7.72803" y="27.728" width="28" height="4" rx="2" transform="rotate(-45 7.72803 27.728)" fill="currentColor" />
                                    <rect x="10.5366" y="16.3945" width="16" height="4" rx="2" transform="rotate(45 10.5366 16.3945)" fill="currentColor" />
                                    <rect x="10.5562" y="-0.556152" width="28" height="4" rx="2" transform="rotate(45 10.5562 -0.556152)" fill="currentColor" />
                                </svg>
                                <!--logo End-->
                                <h4 class="logo-title">Hope UI</h4>
                            </div>
                            <button class="btn-close float-end"></button>
                        </div>
                        <ul class="navbar-nav">
                            <li class="nav-item"><a class="nav-link active" href="../dashboard/index-horizontal.html"> Horizontal </a></li>
                            <li class="nav-item"><a class="nav-link " href="../dashboard/index-dual-horizontal.html"> Dual Horizontal </a></li>
                            <li class="nav-item"><a class="nav-link " href="../dashboard/index-dual-compact.html"><span class="item-name">Dual Compact</span></a></li>
                            <li class="nav-item"><a class="nav-link " href="./manage.user.php"> Manage users </a></li>
                            <li class="nav-item"><a class="nav-link " href="../dashboard/index-boxed-fancy.html"> Boxed Fancy</a></li>
                        </ul>
                    </div> <!-- container-fluid.// -->
                </nav>
                <!-- Sidebar Menu End --> <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <span class="navbar-toggler-bar bar1 mt-2"></span>
                        <span class="navbar-toggler-bar bar2"></span>
                        <span class="navbar-toggler-bar bar3"></span>
                    </span>
                </button>
                <div class="collapse navbar-collapse col-md-2" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a href="#" class="search-toggle nav-link" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="../assets/images/Flag/flag001.png" class="img-fluid rounded-circle" alt="user" style="height: 30px; min-width: 30px; width: 30px;">
                                <span class="bg-primary"></span>
                            </a>
                            <div class="sub-drop dropdown-menu dropdown-menu-end p-0" aria-labelledby="dropdownMenuButton2">
                                <div class="card shadow-none m-0 border-0">
                                    <div class=" p-0 ">
                                        <ul class="list-group list-group-flush">
                                            <li class="iq-sub-card list-group-item"><a class="p-0" href="#"><img src="../assets/images/Flag/flag-03.png" alt="img-flaf" class="img-fluid me-2" style="width: 15px;height: 15px;min-width: 15px;" />Spanish</a></li>
                                            <li class="iq-sub-card list-group-item"><a class="p-0" href="#"><img src="../assets/images/Flag/flag-04.png" alt="img-flaf" class="img-fluid me-2" style="width: 15px;height: 15px;min-width: 15px;" />Italian</a></li>
                                            <li class="iq-sub-card list-group-item"><a class="p-0" href="#"><img src="../assets/images/Flag/flag-02.png" alt="img-flaf" class="img-fluid me-2" style="width: 15px;height: 15px;min-width: 15px;" />French</a></li>
                                            <li class="iq-sub-card list-group-item"><a class="p-0" href="#"><img src="../assets/images/Flag/flag-05.png" alt="img-flaf" class="img-fluid me-2" style="width: 15px;height: 15px;min-width: 15px;" />German</a></li>
                                            <li class="iq-sub-card list-group-item"><a class="p-0" href="#"><img src="../assets/images/Flag/flag-06.png" alt="img-flaf" class="img-fluid me-2" style="width: 15px;height: 15px;min-width: 15px;" />Japanese</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link" id="notification-drop" data-bs-toggle="dropdown">
                                <svg width="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19.7695 11.6453C19.039 10.7923 18.7071 10.0531 18.7071 8.79716V8.37013C18.7071 6.73354 18.3304 5.67907 17.5115 4.62459C16.2493 2.98699 14.1244 2 12.0442 2H11.9558C9.91935 2 7.86106 2.94167 6.577 4.5128C5.71333 5.58842 5.29293 6.68822 5.29293 8.37013V8.79716C5.29293 10.0531 4.98284 10.7923 4.23049 11.6453C3.67691 12.2738 3.5 13.0815 3.5 13.9557C3.5 14.8309 3.78723 15.6598 4.36367 16.3336C5.11602 17.1413 6.17846 17.6569 7.26375 17.7466C8.83505 17.9258 10.4063 17.9933 12.0005 17.9933C13.5937 17.9933 15.165 17.8805 16.7372 17.7466C17.8215 17.6569 18.884 17.1413 19.6363 16.3336C20.2118 15.6598 20.5 14.8309 20.5 13.9557C20.5 13.0815 20.3231 12.2738 19.7695 11.6453Z" fill="currentColor"></path>
                                    <path opacity="0.4" d="M14.0088 19.2283C13.5088 19.1215 10.4627 19.1215 9.96275 19.2283C9.53539 19.327 9.07324 19.5566 9.07324 20.0602C9.09809 20.5406 9.37935 20.9646 9.76895 21.2335L9.76795 21.2345C10.2718 21.6273 10.8632 21.877 11.4824 21.9667C11.8123 22.012 12.1482 22.01 12.4901 21.9667C13.1083 21.877 13.6997 21.6273 14.2036 21.2345L14.2026 21.2335C14.5922 20.9646 14.8734 20.5406 14.8983 20.0602C14.8983 19.5566 14.4361 19.327 14.0088 19.2283Z" fill="currentColor"></path>
                                </svg>
                                <span class="bg-danger dots"></span>
                            </a>
                            <div class="sub-drop dropdown-menu dropdown-menu-end p-0" aria-labelledby="notification-drop">
                                <div class="card shadow-none m-0">
                                    <div class="card-header d-flex justify-content-between bg-primary py-3">
                                        <div class="header-title">
                                            <h5 class="mb-0 text-white">All Notifications</h5>
                                        </div>
                                    </div>
                                    <div class="card-body p-0">
                                        <a href="#" class="iq-sub-card">
                                            <div class="d-flex align-items-center">
                                                <img class="avatar-40 rounded-pill bg-soft-primary p-1" src="../assets/images/shapes/01.png" alt="">
                                                <div class="ms-3 w-100">
                                                    <h6 class="mb-0 ">Emma Watson Bni</h6>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <p class="mb-0">95 MB</p>
                                                        <small class="float-right font-size-12">Just Now</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="iq-sub-card">
                                            <div class="d-flex align-items-center">
                                                <div class="">
                                                    <img class="avatar-40 rounded-pill bg-soft-primary p-1" src="../assets/images/shapes/02.png" alt="">
                                                </div>
                                                <div class="ms-3 w-100">
                                                    <h6 class="mb-0 ">New customer is join</h6>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <p class="mb-0">Cyst Bni</p>
                                                        <small class="float-right font-size-12">5 days ago</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="iq-sub-card">
                                            <div class="d-flex align-items-center">
                                                <img class="avatar-40 rounded-pill bg-soft-primary p-1" src="../assets/images/shapes/03.png" alt="">
                                                <div class="ms-3 w-100">
                                                    <h6 class="mb-0 ">Two customer is left</h6>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <p class="mb-0">Cyst Bni</p>
                                                        <small class="float-right font-size-12">2 days ago</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="iq-sub-card">
                                            <div class="d-flex align-items-center">
                                                <img class="avatar-40 rounded-pill bg-soft-primary p-1" src="../assets/images/shapes/04.png" alt="">
                                                <div class="w-100 ms-3">
                                                    <h6 class="mb-0 ">New Mail from Fenny</h6>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <p class="mb-0">Cyst Bni</p>
                                                        <small class="float-right font-size-12">3 days ago</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link" id="mail-drop" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <svg width="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.4" d="M22 15.94C22 18.73 19.76 20.99 16.97 21H16.96H7.05C4.27 21 2 18.75 2 15.96V15.95C2 15.95 2.006 11.524 2.014 9.298C2.015 8.88 2.495 8.646 2.822 8.906C5.198 10.791 9.447 14.228 9.5 14.273C10.21 14.842 11.11 15.163 12.03 15.163C12.95 15.163 13.85 14.842 14.56 14.262C14.613 14.227 18.767 10.893 21.179 8.977C21.507 8.716 21.989 8.95 21.99 9.367C22 11.576 22 15.94 22 15.94Z" fill="currentColor"></path>
                                    <path d="M21.4759 5.67351C20.6099 4.04151 18.9059 2.99951 17.0299 2.99951H7.04988C5.17388 2.99951 3.46988 4.04151 2.60388 5.67351C2.40988 6.03851 2.50188 6.49351 2.82488 6.75151L10.2499 12.6905C10.7699 13.1105 11.3999 13.3195 12.0299 13.3195C12.0339 13.3195 12.0369 13.3195 12.0399 13.3195C12.0429 13.3195 12.0469 13.3195 12.0499 13.3195C12.6799 13.3195 13.3099 13.1105 13.8299 12.6905L21.2549 6.75151C21.5779 6.49351 21.6699 6.03851 21.4759 5.67351Z" fill="currentColor"></path>
                                </svg>
                                <span class="bg-primary count-mail"></span>
                            </a>
                            <div class="sub-drop dropdown-menu dropdown-menu-end p-0" aria-labelledby="mail-drop">
                                <div class="card shadow-none m-0">
                                    <div class="card-header d-flex justify-content-between bg-primary py-3">
                                        <div class="header-title">
                                            <h5 class="mb-0 text-white">All Message</h5>
                                        </div>
                                    </div>
                                    <div class="card-body p-0 ">
                                        <a href="#" class="iq-sub-card">
                                            <div class="d-flex  align-items-center">
                                                <div class="">
                                                    <img class="avatar-40 rounded-pill bg-soft-primary p-1" src="../assets/images/shapes/01.png" alt="">
                                                </div>
                                                <div class=" w-100 ms-3">
                                                    <h6 class="mb-0 ">Bni Emma Watson</h6>
                                                    <small class="float-left font-size-12">13 Jun</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="iq-sub-card">
                                            <div class="d-flex align-items-center">
                                                <div class="">
                                                    <img class="avatar-40 rounded-pill bg-soft-primary p-1" src="../assets/images/shapes/02.png" alt="">
                                                </div>
                                                <div class="ms-3">
                                                    <h6 class="mb-0 ">Lorem Ipsum Watson</h6>
                                                    <small class="float-left font-size-12">20 Apr</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="iq-sub-card">
                                            <div class="d-flex align-items-center">
                                                <div class="">
                                                    <img class="avatar-40 rounded-pill bg-soft-primary p-1" src="../assets/images/shapes/03.png" alt="">
                                                </div>
                                                <div class="ms-3">
                                                    <h6 class="mb-0 ">Why do we use it?</h6>
                                                    <small class="float-left font-size-12">30 Jun</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="iq-sub-card">
                                            <div class="d-flex align-items-center">
                                                <div class="">
                                                    <img class="avatar-40 rounded-pill bg-soft-primary p-1" src="../assets/images/shapes/04.png" alt="">
                                                </div>
                                                <div class="ms-3">
                                                    <h6 class="mb-0 ">Variations Passages</h6>
                                                    <small class="float-left font-size-12">12 Sep</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="iq-sub-card">
                                            <div class="d-flex align-items-center">
                                                <div class="">
                                                    <img class="avatar-40 rounded-pill bg-soft-primary p-1" src="../assets/images/shapes/05.png" alt="">
                                                </div>
                                                <div class="ms-3">
                                                    <h6 class="mb-0 ">Lorem Ipsum generators</h6>
                                                    <small class="float-left font-size-12">5 Dec</small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link py-0 d-flex align-items-center" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="../assets/images/avatars/01.png" alt="User-Profile" class="theme-color-default-img img-fluid avatar avatar-50 avatar-rounded">
                                <img src="../assets/images/avatars/avtar_1.png" alt="User-Profile" class="theme-color-purple-img img-fluid avatar avatar-50 avatar-rounded">
                                <img src="../assets/images/avatars/avtar_2.png" alt="User-Profile" class="theme-color-blue-img img-fluid avatar avatar-50 avatar-rounded">
                                <img src="../assets/images/avatars/avtar_4.png" alt="User-Profile" class="theme-color-green-img img-fluid avatar avatar-50 avatar-rounded">
                                <img src="../assets/images/avatars/avtar_5.png" alt="User-Profile" class="theme-color-yellow-img img-fluid avatar avatar-50 avatar-rounded">
                                <img src="../assets/images/avatars/avtar_3.png" alt="User-Profile" class="theme-color-pink-img img-fluid avatar avatar-50 avatar-rounded">
                                <div class="caption ms-3 ">
                                    <h6 class="mb-0 caption-title">Austin Robertson</h6>
                                    <p class="mb-0 caption-sub-title">Marketing Administrator</p>
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="../dashboard/app/user-profile.html">Profile</a></li>
                                <li><a class="dropdown-item" href="../dashboard/app/user-privacy-setting.html">Privacy Setting</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="../dashboard/auth/sign-in.html">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav> <!--Nav End-->





























        <div class="content-inner pb-0 container-fluid" id="page_layout">
            <div class="d-flex justify-content-between align-items-center flex-wrap mb-4 gap-3">
                <div class="d-flex flex-column">
                    <h3>Quick Insights</h3>
                    <p class="text-primary mb-0">Financial Dashboard</p>
                </div>
                <div class="d-flex justify-content-between align-items-center rounded flex-wrap gap-3">
                    <div class="form-group mb-0">
                        <input type="text" name="start" class="form-control range_flatpicker flatpickr-input active" placeholder="24 Jan 2022 to 23 Feb 2022" readonly="readonly">
                    </div>
                    <button type="button" class="btn btn-primary">Analytics</button>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="card card-block card-stretch card-height">
                        <div class="card-body">
                            <div class="d-flex align-items-start justify-content-between mb-2">
                                <p class="mb-0 text-dark">Gross Volume</p>
                                <a class="badge rounded-pill bg-soft-primary" href="javascript:void(0);">
                                    View
                                </a>
                            </div>
                            <div class="mb-3">
                                <h2 class="counter" style="visibility: visible;">$199,556</h2>
                                <small>Last updated 1 hour ago.</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-block card-stretch card-height">
                        <div class="card-body">
                            <div class="d-flex align-items-start justify-content-between mb-2">
                                <p class="mb-0 text-dark">Gross Volume</p>
                                <a class="badge rounded-pill bg-soft-primary" href="javascript:void(0);">
                                    View
                                </a>
                            </div>
                            <div class="mb-3">
                                <h2 class="counter" style="visibility: visible;">$199,556</h2>
                                <small>Last updated 1 hour ago.</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 mb-5 mb-md-0">
                                    <div class="mb-5">
                                        <div class="mb-2 d-flex justify-content-between align-items-center">
                                            <span class="text-dark">Last Transaction</span>
                                            <a class="badge rounded-pill bg-soft-primary" href="javascript:void(0);">
                                                View Report
                                            </a>
                                        </div>
                                        <div class="mb-2">
                                            <h2 class="counter" style="visibility: visible;">$58,556</h2>
                                            <small>This Month</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="iq-scroller-effect">
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <span class="text-dark">Send Money To</span>
                                            <a href="../dashboard/table/border-table.html" class="badge rounded-pill bg-soft-primary">
                                                All Contacts
                                            </a>
                                        </div>
                                        <div class="d-flex align-items-center iq-slider mb-4 gap-2">
                                            <div>
                                                <img class="rounded-circle bg-soft-primary img-fluid avatar-40 mb-2" src="../assets/images/avatars/01.png" alt="profile" loading="lazy">
                                            </div>
                                            <div>
                                                <img class="rounded-circle bg-soft-primary img-fluid avatar-40 mb-2" src="../assets/images/avatars/02.png" alt="profile" loading="lazy">
                                            </div>
                                            <div>
                                                <img class="rounded-circle bg-soft-primary img-fluid avatar-40 mb-2" src="../assets/images/avatars/03.png" alt="profile" loading="lazy">
                                            </div>
                                            <div>
                                                <img class="rounded-circle bg-soft-primary img-fluid avatar-40 mb-2" src="../assets/images/avatars/04.png" alt="profile" loading="lazy">
                                            </div>
                                            <div>
                                                <img class="rounded-circle bg-soft-primary img-fluid avatar-40 mb-2" src="../assets/images/avatars/05.png" alt="profile" loading="lazy">
                                            </div>
                                        </div>

                                        <a class="btn btn-primary w-100 mt-2" href="./manage.user.php">Manage Users</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                  <p class="text-primary mb-0">Financial Dashboard</p>
                    <div class="card card-block card-stretch card-height">
                        <div class="card-header">
                            <div class=" d-flex justify-content-between  flex-wrap">
                                <h4 class="card-title">Net Volumes From Sales</h4>
                                <div class="dropdown">
                                    <a href="#" class="text-secondary dropdown-toggle" id="dropdownMenuButton22" data-bs-toggle="dropdown" aria-expanded="false">
                                        This year
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton22">
                                        <li><a class="dropdown-item" href="#">Year</a></li>
                                        <li><a class="dropdown-item" href="#">Month</a></li>
                                        <li><a class="dropdown-item" href="#">Week</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="dashboard-line-chart">
                                <div id="apexchartshavpg6acj" class="apexcharts-canvas apexchartshavpg6acj apexcharts-theme-light" style="width: 696px; height: 374px;"><svg id="SvgjsSvg1795" width="696" height="374" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                        <g id="SvgjsG1797" class="apexcharts-inner apexcharts-graphical" transform="translate(45.359375, 30)">
                                            <defs id="SvgjsDefs1796">
                                                <clipPath id="gridRectMaskhavpg6acj">
                                                    <rect id="SvgjsRect1803" width="635.8017578125" height="309.348" x="-3.5" y="-1.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="forecastMaskhavpg6acj">
                                                    <rect id="SvgjsRect1826" width="628.8017578125" height="306.348" x="393.0010986328125" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                                </clipPath>
                                                <clipPath id="nonForecastMaskhavpg6acj">
                                                    <rect id="SvgjsRect1827" width="393.0010986328125" height="306.348" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                                </clipPath>
                                                <clipPath id="gridRectMarkerMaskhavpg6acj">
                                                    <rect id="SvgjsRect1804" width="684.8017578125" height="362.348" x="-28" y="-28" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <linearGradient id="SvgjsLinearGradient1828" x1="0" y1="0" x2="0" y2="1">
                                                    <stop id="SvgjsStop1829" stop-opacity="1" stop-color="rgba(58,87,232,1)" offset="0"></stop>
                                                    <stop id="SvgjsStop1830" stop-opacity="1" stop-color="rgba(58,87,232,1)" offset="0.5"></stop>
                                                    <stop id="SvgjsStop1831" stop-opacity="1" stop-color="rgba(58,87,232,1)" offset="1"></stop>
                                                </linearGradient>
                                            </defs>
                                            <line id="SvgjsLine1802" x1="0" y1="0" x2="0" y2="306.348" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="306.348" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                            <g id="SvgjsG1847" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                <g id="SvgjsG1848" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText1850" font-family="Helvetica, Arial, sans-serif" x="0" y="335.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1851">Jan</tspan>
                                                        <title>Jan</title>
                                                    </text><text id="SvgjsText1853" font-family="Helvetica, Arial, sans-serif" x="78.6002197265625" y="335.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1854">Feb</tspan>
                                                        <title>Feb</title>
                                                    </text><text id="SvgjsText1856" font-family="Helvetica, Arial, sans-serif" x="157.200439453125" y="335.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1857">Mar</tspan>
                                                        <title>Mar</title>
                                                    </text><text id="SvgjsText1859" font-family="Helvetica, Arial, sans-serif" x="235.8006591796875" y="335.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1860">Apr</tspan>
                                                        <title>Apr</title>
                                                    </text><text id="SvgjsText1862" font-family="Helvetica, Arial, sans-serif" x="314.40087890625" y="335.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1863">May</tspan>
                                                        <title>May</title>
                                                    </text><text id="SvgjsText1865" font-family="Helvetica, Arial, sans-serif" x="393.0010986328125" y="335.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1866">Jun</tspan>
                                                        <title>Jun</title>
                                                    </text><text id="SvgjsText1868" font-family="Helvetica, Arial, sans-serif" x="471.601318359375" y="335.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1869">Jul</tspan>
                                                        <title>Jul</title>
                                                    </text><text id="SvgjsText1871" font-family="Helvetica, Arial, sans-serif" x="550.2015380859375" y="335.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1872">Aug</tspan>
                                                        <title>Aug</title>
                                                    </text><text id="SvgjsText1874" font-family="Helvetica, Arial, sans-serif" x="628.8017578125" y="335.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1875">Sep</tspan>
                                                        <title>Sep</title>
                                                    </text></g>
                                            </g>
                                            <g id="SvgjsG1834" class="apexcharts-grid">
                                                <g id="SvgjsG1835" class="apexcharts-gridlines-horizontal">
                                                    <line id="SvgjsLine1839" x1="0" y1="51.058" x2="628.8017578125" y2="51.058" stroke="#e0e0e0" stroke-dasharray="7" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1840" x1="0" y1="102.116" x2="628.8017578125" y2="102.116" stroke="#e0e0e0" stroke-dasharray="7" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1841" x1="0" y1="153.174" x2="628.8017578125" y2="153.174" stroke="#e0e0e0" stroke-dasharray="7" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1842" x1="0" y1="204.232" x2="628.8017578125" y2="204.232" stroke="#e0e0e0" stroke-dasharray="7" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1843" x1="0" y1="255.29" x2="628.8017578125" y2="255.29" stroke="#e0e0e0" stroke-dasharray="7" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                </g>
                                                <g id="SvgjsG1836" class="apexcharts-gridlines-vertical"></g>
                                                <line id="SvgjsLine1846" x1="0" y1="306.348" x2="628.8017578125" y2="306.348" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                                <line id="SvgjsLine1845" x1="0" y1="1" x2="0" y2="306.348" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                            </g>
                                            <g id="SvgjsG1805" class="apexcharts-line-series apexcharts-plot-series">
                                                <g id="SvgjsG1806" class="apexcharts-series" seriesName="Sales" data:longestSeries="true" rel="1" data:realIndex="0">
                                                    <path id="SvgjsPath1832" d="M 0 280.819 L 78.6002197265625 97.0102 L 157.200439453125 114.88049999999998 L 235.8006591796875 132.7508 L 314.40087890625 186.36169999999998 L 393.0010986328125 153.174 L 471.601318359375 181.2559 L 550.2015380859375 74.0341 L 628.8017578125 30.634799999999984" fill="none" fill-opacity="1" stroke="url(#SvgjsLinearGradient1828)" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#nonForecastMaskhavpg6acj)" pathTo="M 0 280.819 L 78.6002197265625 97.0102 L 157.200439453125 114.88049999999998 L 235.8006591796875 132.7508 L 314.40087890625 186.36169999999998 L 393.0010986328125 153.174 L 471.601318359375 181.2559 L 550.2015380859375 74.0341 L 628.8017578125 30.634799999999984" pathFrom="M 0 239.56900000000002 L 49.2252197265625 82.7602 L 98.450439453125 98.00550000000001 L 147.6756591796875 113.2508 L 196.90087890625 158.98669999999998 L 246.1260986328125 130.674 L 295.351318359375 154.6309 L 344.5765380859375 63.159099999999995 L 393.8017578125 26.134799999999984" fill-rule="evenodd"></path>
                                                    <path id="SvgjsPath1833" d="M 0 280.819 L 78.6002197265625 97.0102 L 157.200439453125 114.88049999999998 L 235.8006591796875 132.7508 L 314.40087890625 186.36169999999998 L 393.0010986328125 153.174 L 471.601318359375 181.2559 L 550.2015380859375 74.0341 L 628.8017578125 30.634799999999984" fill="none" fill-opacity="1" stroke="url(#SvgjsLinearGradient1828)" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="4" class="apexcharts-line" index="0" clip-path="url(#forecastMaskhavpg6acj)" pathTo="M 0 280.819 L 78.6002197265625 97.0102 L 157.200439453125 114.88049999999998 L 235.8006591796875 132.7508 L 314.40087890625 186.36169999999998 L 393.0010986328125 153.174 L 471.601318359375 181.2559 L 550.2015380859375 74.0341 L 628.8017578125 30.634799999999984" pathFrom="M 0 239.56900000000002 L 49.2252197265625 82.7602 L 98.450439453125 98.00550000000001 L 147.6756591796875 113.2508 L 196.90087890625 158.98669999999998 L 246.1260986328125 130.674 L 295.351318359375 154.6309 L 344.5765380859375 63.159099999999995 L 393.8017578125 26.134799999999984"></path>
                                                    <g id="SvgjsG1807" class="apexcharts-series-markers-wrap" data:realIndex="0">
                                                        <g id="SvgjsG1809" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskhavpg6acj)">
                                                            <circle id="SvgjsCircle1810" r="6" cx="0" cy="280.819" class="apexcharts-marker no-pointer-events wx3defjfhk" stroke="#3a57e8" fill="#ffffff" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="0" j="0" index="0" default-marker-size="6"></circle>
                                                            <circle id="SvgjsCircle1811" r="6" cx="78.6002197265625" cy="97.0102" class="apexcharts-marker no-pointer-events wkta6bk1b" stroke="#3a57e8" fill="#ffffff" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="1" j="1" index="0" default-marker-size="6"></circle>
                                                        </g>
                                                        <g id="SvgjsG1812" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskhavpg6acj)">
                                                            <circle id="SvgjsCircle1813" r="6" cx="157.200439453125" cy="114.88049999999998" class="apexcharts-marker no-pointer-events wapiu9rax" stroke="#3a57e8" fill="#ffffff" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="2" j="2" index="0" default-marker-size="6"></circle>
                                                        </g>
                                                        <g id="SvgjsG1814" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskhavpg6acj)">
                                                            <circle id="SvgjsCircle1815" r="6" cx="235.8006591796875" cy="132.7508" class="apexcharts-marker no-pointer-events wwnymqjkbh" stroke="#3a57e8" fill="#ffffff" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="3" j="3" index="0" default-marker-size="6"></circle>
                                                        </g>
                                                        <g id="SvgjsG1816" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskhavpg6acj)">
                                                            <circle id="SvgjsCircle1817" r="6" cx="314.40087890625" cy="186.36169999999998" class="apexcharts-marker no-pointer-events wi1csi1rs" stroke="#3a57e8" fill="#ffffff" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="4" j="4" index="0" default-marker-size="6"></circle>
                                                        </g>
                                                        <g id="SvgjsG1818" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskhavpg6acj)">
                                                            <circle id="SvgjsCircle1819" r="6" cx="393.0010986328125" cy="153.174" class="apexcharts-marker no-pointer-events wqy5bzceb" stroke="#3a57e8" fill="#ffffff" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="5" j="5" index="0" default-marker-size="6"></circle>
                                                        </g>
                                                        <g id="SvgjsG1820" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskhavpg6acj)">
                                                            <circle id="SvgjsCircle1821" r="6" cx="471.601318359375" cy="181.2559" class="apexcharts-marker no-pointer-events wumpjynnuk" stroke="#3a57e8" fill="#ffffff" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="6" j="6" index="0" default-marker-size="6"></circle>
                                                        </g>
                                                        <g id="SvgjsG1822" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskhavpg6acj)">
                                                            <circle id="SvgjsCircle1823" r="6" cx="550.2015380859375" cy="74.0341" class="apexcharts-marker no-pointer-events wex90k2x9" stroke="#3a57e8" fill="#ffffff" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="7" j="7" index="0" default-marker-size="6"></circle>
                                                        </g>
                                                        <g id="SvgjsG1824" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskhavpg6acj)">
                                                            <circle id="SvgjsCircle1825" r="6" cx="628.8017578125" cy="30.634799999999984" class="apexcharts-marker no-pointer-events w1rfe7yte" stroke="#3a57e8" fill="#ffffff" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="8" j="8" index="0" default-marker-size="6"></circle>
                                                        </g>
                                                    </g>
                                                </g>
                                                <g id="SvgjsG1808" class="apexcharts-datalabels" data:realIndex="0"></g>
                                            </g>
                                            <g id="SvgjsG1837" class="apexcharts-grid-borders">
                                                <line id="SvgjsLine1838" x1="0" y1="0" x2="628.8017578125" y2="0" stroke="#e0e0e0" stroke-dasharray="7" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1844" x1="0" y1="306.348" x2="628.8017578125" y2="306.348" stroke="#e0e0e0" stroke-dasharray="7" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                            </g>
                                            <line id="SvgjsLine1899" x1="0" y1="0" x2="628.8017578125" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                            <line id="SvgjsLine1900" x1="0" y1="0" x2="628.8017578125" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                            <g id="SvgjsG1901" class="apexcharts-yaxis-annotations"></g>
                                            <g id="SvgjsG1902" class="apexcharts-xaxis-annotations"></g>
                                            <g id="SvgjsG1903" class="apexcharts-point-annotations"></g>
                                            <rect id="SvgjsRect1904" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect>
                                            <rect id="SvgjsRect1905" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect>
                                        </g>
                                        <rect id="SvgjsRect1801" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                        <g id="SvgjsG1876" class="apexcharts-yaxis" rel="0" transform="translate(15.359375, 0)">
                                            <g id="SvgjsG1877" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1879" font-family="Helvetica, Arial, sans-serif" x="20" y="31.6" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1880">120</tspan>
                                                    <title>120</title>
                                                </text><text id="SvgjsText1882" font-family="Helvetica, Arial, sans-serif" x="20" y="82.65799999999999" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1883">100</tspan>
                                                    <title>100</title>
                                                </text><text id="SvgjsText1885" font-family="Helvetica, Arial, sans-serif" x="20" y="133.71599999999998" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1886">80</tspan>
                                                    <title>80</title>
                                                </text><text id="SvgjsText1888" font-family="Helvetica, Arial, sans-serif" x="20" y="184.77399999999997" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1889">60</tspan>
                                                    <title>60</title>
                                                </text><text id="SvgjsText1891" font-family="Helvetica, Arial, sans-serif" x="20" y="235.83199999999997" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1892">40</tspan>
                                                    <title>40</title>
                                                </text><text id="SvgjsText1894" font-family="Helvetica, Arial, sans-serif" x="20" y="286.89" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1895">20</tspan>
                                                    <title>20</title>
                                                </text><text id="SvgjsText1897" font-family="Helvetica, Arial, sans-serif" x="20" y="337.948" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1898">0</tspan>
                                                    <title>0</title>
                                                </text></g>
                                        </g>
                                        <g id="SvgjsG1798" class="apexcharts-annotations"></g>
                                    </svg>
                                    <div class="apexcharts-legend" style="max-height: 187px;"></div>
                                    <div class="apexcharts-tooltip apexcharts-theme-light">
                                        <div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                        <div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(58, 87, 232);"></span>
                                            <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                                <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                                <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                        <div class="apexcharts-yaxistooltip-text"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="card card-block card-stretch card-height">
                        <nav class="tab-bottom-bordered">
                            <div class="mb-0 nav nav-tabs justify-content-around" id="nav-tab1" role="tablist">
                                <button class="nav-link py-3 active" id="nav-home-11-tab" data-bs-toggle="tab" data-bs-target="#nav-home-11" type="button" role="tab" aria-controls="nav-home-11" aria-selected="true">Available Medicine</button>
                                <button class="nav-link py-3" id="nav-profile-11-tab" data-bs-toggle="tab" data-bs-target="#nav-profile-11" type="button" role="tab" aria-controls="nav-profile-11" aria-selected="false" tabindex="-1">Settlements</button>
                                <button class="nav-link py-3" id="nav-contact-11-tab" data-bs-toggle="tab" data-bs-target="#nav-contact-11" type="button" role="tab" aria-controls="nav-contact-11" aria-selected="false" tabindex="-1">Refunds</button>
                            </div>
                        </nav>
                        <div class="tab-content iq-tab-fade-up" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home-11" role="tabpanel" aria-labelledby="nav-home-11-tab">
                                <div class="table-responsive">
                                    <table id="transaction-table" class="table mb-0 table-striped" role="grid">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <h6 class="mb-0">$1,833</h6>
                                                    </div>
                                                </td>
                                                <td class="text-primary">
                                                    hui_vxnnjigakm
                                                </td>
                                                <td class="text-dark">1 Hour Ago</td>
                                                <td class="text-end">
                                                    <span class="badge rounded-pill bg-success ">Processed</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <h6 class="mb-0">$1,204</h6>
                                                    </div>
                                                </td>
                                                <td class="text-primary">
                                                    hui_uwsxaiuhhs
                                                </td>
                                                <td class="text-dark">23 Days Ago</td>
                                                <td class="text-end">
                                                    <span class="badge rounded-pill bg-success">Processed</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <h6 class="mb-0">$2,833</h6>
                                                    </div>
                                                </td>
                                                <td class="text-primary">
                                                    hui_taxrcfzhny
                                                </td>
                                                <td class="text-dark">1 month ago</td>
                                                <td class="text-end">
                                                    <span class="badge rounded-pill bg-success">Processed</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <h6 class="mb-0">$2,235</h6>
                                                    </div>
                                                </td>
                                                <td class="text-primary">
                                                    hui_pknfotsmhl
                                                </td>
                                                <td class="text-dark">1 month ago</td>
                                                <td class="text-end">
                                                    <span class="badge rounded-pill bg-success">Processed</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <h6 class="mb-0">$2,442</h6>
                                                    </div>
                                                </td>
                                                <td class="text-primary">
                                                    hui_xqgczqbgto
                                                </td>
                                                <td class="text-dark">3 month ago</td>
                                                <td class="text-end">
                                                    <span class="badge rounded-pill bg-success">Processed</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <h6 class="mb-0">$1,924</h6>
                                                    </div>
                                                </td>
                                                <td class="text-primary">
                                                    hui_eoasrkizdw
                                                </td>
                                                <td class="text-dark">4 month ago</td>
                                                <td class="text-end">
                                                    <span class="badge rounded-pill bg-success">Processed</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-profile-11" role="tabpanel" aria-labelledby="nav-profile-11-tab">
                                <div class="table-responsive">
                                    <table id="transaction-table-1" class="table mb-0 table-striped" role="grid">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <h6 class="mb-0">$2,298</h6>
                                                    </div>
                                                </td>
                                                <td class="text-primary">
                                                    hui_ufsoishqbw
                                                </td>
                                                <td class="text-dark">7 Days Ago</td>
                                                <td class="text-end">
                                                    <span class="badge rounded-pill bg-success ">Processed</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <h6 class="mb-0">$2,032</h6>
                                                    </div>
                                                </td>
                                                <td class="text-primary">
                                                    hui_fescijfgbb
                                                </td>
                                                <td class="text-dark">23 Days </td>
                                                <td class="text-end">
                                                    <span class="badge rounded-pill bg-success">Processed</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <h6 class="mb-0">$1,514</h6>
                                                    </div>
                                                </td>
                                                <td class="text-primary">
                                                    hui_eihghndltk
                                                </td>
                                                <td class="text-dark">1 month ago</td>
                                                <td class="text-end">
                                                    <span class="badge rounded-pill bg-success">Processed</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <h6 class="mb-0">$1,425</h6>
                                                    </div>
                                                </td>
                                                <td class="text-primary">
                                                    hui_bvihnfpdfq
                                                </td>
                                                <td class="text-dark">2 month ago</td>
                                                <td class="text-end">
                                                    <span class="badge rounded-pill bg-success">Processed</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <h6 class="mb-0">$2,838</h6>
                                                    </div>
                                                </td>
                                                <td class="text-primary">
                                                    hui_afrtmvdyjp
                                                </td>
                                                <td class="text-dark">2 month ago</td>
                                                <td class="text-end">
                                                    <span class="badge rounded-pill bg-success">Processed</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <h6 class="mb-0">$2,613</h6>
                                                    </div>
                                                </td>
                                                <td class="text-primary">
                                                    hui_jterqcvjxz
                                                </td>
                                                <td class="text-dark">5 month ago</td>
                                                <td class="text-end">
                                                    <span class="badge rounded-pill bg-success">Processed</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-contact-11" role="tabpanel" aria-labelledby="nav-contact-11-tab">
                                <div class="table-responsive">
                                    <table id="transaction-table-2" class="table mb-0 table-striped" role="grid">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <h6 class="mb-0">$2,866</h6>
                                                    </div>
                                                </td>
                                                <td class="text-primary">
                                                    hui_odqethdqye
                                                </td>
                                                <td class="text-dark">3 Days Ago</td>
                                                <td class="text-end">
                                                    <span class="badge rounded-pill bg-info ">Process</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <h6 class="mb-0">$1,637</h6>
                                                    </div>
                                                </td>
                                                <td class="text-primary">
                                                    hui_nmngvsosnh
                                                </td>
                                                <td class="text-dark">22 Days Ago</td>
                                                <td class="text-end">
                                                    <span class="badge rounded-pill bg-success">Refunded</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <h6 class="mb-0">$2,922</h6>
                                                    </div>
                                                </td>
                                                <td class="text-primary">
                                                    hui_uikgtphcpo
                                                </td>
                                                <td class="text-dark">1 month ago</td>
                                                <td class="text-end">
                                                    <span class="badge rounded-pill bg-success">Refunded</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <h6 class="mb-0">$2,563</h6>
                                                    </div>
                                                </td>
                                                <td class="text-primary">
                                                    hui_cieqrdyqkp
                                                </td>
                                                <td class="text-dark">2 month ago</td>
                                                <td class="text-end">
                                                    <span class="badge rounded-pill bg-info">Process</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <h6 class="mb-0">$2,334</h6>
                                                    </div>
                                                </td>
                                                <td class="text-primary">
                                                    hui_wmdvzpfavx
                                                </td>
                                                <td class="text-dark">3 month ago</td>
                                                <td class="text-end">
                                                    <span class="badge rounded-pill bg-success">Refunded</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <h6 class="mb-0">$2,632</h6>
                                                    </div>
                                                </td>
                                                <td class="text-primary">
                                                    hui_jplpprjzbr
                                                </td>
                                                <td class="text-dark">5 month ago</td>
                                                <td class="text-end">
                                                    <span class="badge rounded-pill bg-danger">Failed</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <a href="javascript:void(0);">
                                <span class="me-2">
                                    View all Settlements
                                </span>
                                <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.5 5L15.5 12L8.5 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>








































        <?php
        include "../include/temp.footer.php";
        ?>

    </main>
    <!-- Wrapper End-->
    <!-- Library Bundle Script -->
    <script src="../assets/js/core/libs.min.js"></script>

    <!-- External Library Bundle Script -->
    <script src="../assets/js/core/external.min.js"></script>

    <!-- Widgetchart Script -->
    <script src="../assets/js/charts/widgetcharts.js"></script>

    <!-- mapchart Script -->
    <script src="../assets/js/charts/vectore-chart.js"></script>
    <script src="../assets/js/charts/dashboard.js"></script>

    <!-- fslightbox Script -->
    <script src="../assets/js/plugins/fslightbox.js"></script>

    <!-- Settings Script -->
    <script src="../assets/js/plugins/setting.js"></script>

    <!-- Slider-tab Script -->
    <script src="../assets/js/plugins/slider-tabs.js"></script>

    <!-- Form Wizard Script -->
    <script src="../assets/js/plugins/form-wizard.js"></script>

    <!-- AOS Animation Plugin-->

    <!-- App Script -->
    <script src="../assets/js/hope-ui.js" defer></script>
</body>

</html>