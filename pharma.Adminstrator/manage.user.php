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
                        <h4 class="logo-title">Yohana Pharmacy</h4>
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
                            <li class="nav-item"><a class="nav-link active" href="./index.php"> Dashboard </a></li>
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
                    <h3>Register Users</h3>
                    <p class="text-primary mb-0">Adminstrator Dashboard</p>
                </div>
                <div class="d-flex justify-content-between align-items-center rounded flex-wrap gap-3">
                    <div class="form-group mb-0">
                        <input type="text" name="start" class="form-control range_flatpicker flatpickr-input active" placeholder="24 Jan 2022 to 23 Feb 2022" readonly="readonly">
                    </div>
                    <button type="button" class="btn btn-primary">Analytics</button>
                </div>
            </div>
            <div class="row">

                <div class="col-lg-8 col-md-12">
                    <div class="card-body card-block card-stretch card-height form-wrapper">
                       


<style>
/* STYLE */


.page-title {
  font-weight: 600;
  font-size: 2.8rem;
  float: left;
}

.fcard {
  width: 100%;
  margin: 0 auto;
  background: #fff;
  box-shadow: 0 0 0 1px rgba(63, 63, 68, 0.05), 0 1px 3px 0 rgba(63, 63, 68, 0.15);
  border-radius: 3px;
  margin-bottom: 1rem;
}

.fcard__section {
  padding: 20px;
}


.fcard__btn {
  padding: 5px;
}

.fcard__section:after {
  display: table;
  content: "";
  clear: both;
}
.fcard__section--border-bottom {
  padding-bottom: 0rem;
}
.fcard__section--border-top {
  padding-top: 2rem;
  border-top: 1px solid #dedede;
}
.fcard__section--collapse {
  padding: 1rem 2rem 1rem 2rem;
}
.fcard__section button {
  display: inline;
  float: left;
  margin-right: 0.8rem;
}

button {
  font-size: 1.6rem;
  padding: 1.2rem 1.2rem;
  background: #172b4d;
  border: 1px solid #172b4d;
  color: #fff;
  border-radius: 3px;
  cursor: pointer;
  transition: 0.25s ease;
  box-shadow: 0 1px 5px 0 rgba(0, 0, 0, 0);
}
button:hover, button:focus {
  background: #fff;
  color: #172b4d;
  box-shadow: 0 1px 5px 0 rgba(0, 0, 0, 0.15);
}

button.secondary {
  background: #f4f6f8;
  border-color: #b9bfc9;
  color: #172b4d;
}
button.secondary:hover, button.secondary:focus {
  border-color: #172b4d;
  box-shadow: 0 1px 5px 0 rgba(0, 0, 0, 0.15);
}

button.primary {
  background: #0052cc;
  border-color: #0052cc;
  color: #fff;
}
button.primary:hover, button.primary:focus {
  background-color: #0043a6;
  box-shadow: 0 1px 5px 0 rgba(0, 0, 0, 0.15);
}

.heading {
  font-size: 1.6rem;
  font-weight: 600;
}

p {
  margin-top: 0.8rem;
}

.form__input-group {
  display: flex;
  flex-wrap: wrap;
}

.form__input {
  width: 100%;
  margin-bottom: 1.6rem;
  flex: 1 1;
  margin-top: 1.6rem;
  min-width: 22rem;
  max-width: calc(100% - 2rem);
}
.form__input:nth-of-type(even) {
  margin-left: 2rem;
}
.form__input label {
  font-size: 1.6rem;
  margin-bottom: 0.4rem;
  display: block;
  font-weight: 600;
}
.form__input input {
  width: 100%;
  display: block;
  padding: 1.2rem;
  font-size: 1.6rem;
  border: 1px solid #b9bfc9;
  border-radius: 3px;
  transition: 0.15s ease;
  background: #fff;
}
.form__input input:focus {
  outline: 0;
  border-color: #0052cc;
  box-shadow: 0 0 0 1px #0052cc, 0 2px 8px 0 rgba(0, 0, 0, 0.15);
}

a {
  color: #0052cc;
  text-decoration: none;
}

@media (max-width: 768px) {
  body {
    padding: 4rem 2rem;
  }

  header {
    margin-bottom: 1.6rem;
  }

  button {
    font-size: 1.4rem;
  }

  .page-title {
    font-size: 2.1rem;
  }

  .form__input-group {
    margin-bottom: 1.6rem;
  }
  .form__input-group .form__input {
    width: 100%;
  }
  .form__input-group .form__input:first-child {
    padding-right: 0;
  }
  .form__input-group .form__input:last-child {
    padding-left: 0;
  }
}




/* STYLE */
</style>



<div class="fcard">
  <div class="fcard__section">
    <h2 class="heading">Discover new ways to explore content</h2>
    <p>Fasten your seatbelt - you're going for a ride. Click the button below to start your journey</p>
  </div>
  <div class="fcard__btn">
    <button class="btn-primary btn-sm">Start journey</button>
  </div>
</div>

<div class="fcard">
  <div class="fcard__section fcard__section--border-bottom">
    <h2 class="heading">Tell us about yourself</h2>   
    <p>We want to get to know you</p>
  </div>
  


        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
            <form>

              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" id="firstName" class="form-control form-control-lg" />
                    <label class="form-label" for="firstName">First Name</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" id="lastName" class="form-control form-control-lg" />
                    <label class="form-label" for="lastName">Last Name</label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 d-flex align-items-center">

                  <div class="form-outline datepicker w-100">
                    <input type="text" class="form-control form-control-lg" id="birthdayDate" />
                    <label for="birthdayDate" class="form-label">Birthday</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <h6 class="mb-2 pb-1">Gender: </h6>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="femaleGender"
                      value="option1" checked />
                    <label class="form-check-label" for="femaleGender">Female</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="maleGender"
                      value="option2" />
                    <label class="form-check-label" for="maleGender">Male</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="otherGender"
                      value="option3" />
                    <label class="form-check-label" for="otherGender">Other</label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="email" id="emailAddress" class="form-control form-control-lg" />
                    <label class="form-label" for="emailAddress">Email</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="tel" id="phoneNumber" class="form-control form-control-lg" />
                    <label class="form-label" for="phoneNumber">Phone Number</label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-12">

                  <select class=" form-select select form-control-lg">
                    <option value="1" disabled>Choose option</option>
                    <option value="2">Subject 1</option>
                    <option value="3">Subject 2</option>
                    <option value="4">Subject 3</option>
                  </select>
                  <label class="form-label select-label">Choose option</label>

                </div>
              </div>

              <div class="mt-4 pt-2">
                <input class="btn btn-primary btn-lg" type="submit" value="Submit" />
              </div>

            </form>
          </div>
        </div>









</div>




























	</div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="card card-block card-stretch card-height">
                        <div class="tab-content iq-tab-fade-up" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home-11" role="tabpanel" aria-labelledby="nav-home-11-tab">
                                <div class="table-responsive">



<style>
    .content-wrapper {
    display: flex;
    padding: 10px;
    border-radius: 4px;
    background: #ffffff;
    margin-bottom: 10px;
}
.profile-pic img {
    border-radius: 50%;
    height: 40px;
    width: 40px;
}

.mail-content-wrapper {
    color: #909191;
    font-size: 13px;
    font-weight: normal;
    padding: 0 10px;
    flex: 1;
}


.mail-content-wrapper .contact-info {
    justify-content: space-between;
}

.mail-content-wrapper .contact-info {
    display: flex;
    align-items: center;
}
.mail-content-wrapper p {
  margin: 0;
}

.mail-content-wrapper .contact-info .contact-name {
  color: #212223;
  font-size: 13px;
  font-weight: 600;
}


</style>







                                <div class="content-wrapper">
                <div class="profile-pic">
                    <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="">
                  </div>
                <div class="mail-content-wrapper">
                      <div class="contact-info">
                          <p class="active"> <b>Mollie Houston</b> <br>Mollie@gmail.com</p>
                          
                          <div class="right">
                              <p class="mail-time">May 8, 2018, 11:18 AM</p>
                              <a class="btn btn-sm btn-icon text-danger " title="" href="#" data-bs-original-title="Delete User">
                                           Delete User <span class="btn-inner">
                                                <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="currentColor">
                                                    <path d="M19.3248 9.46826C19.3248 9.46826 18.7818 16.2033 18.4668 19.0403C18.3168 20.3953 17.4798 21.1893 16.1088 21.2143C13.4998 21.2613 10.8878 21.2643 8.27979 21.2093C6.96079 21.1823 6.13779 20.3783 5.99079 19.0473C5.67379 16.1853 5.13379 9.46826 5.13379 9.46826" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M20.708 6.23975H3.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M17.4406 6.23973C16.6556 6.23973 15.9796 5.68473 15.8256 4.91573L15.5826 3.69973C15.4326 3.13873 14.9246 2.75073 14.3456 2.75073H10.1126C9.53358 2.75073 9.02558 3.13873 8.87558 3.69973L8.63258 4.91573C8.47858 5.68473 7.80258 6.23973 7.01758 6.23973" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                            </span>
                                        </a>                              
                          </div>
                      </div>                  
                </div>
            </div>

            <div class="content-wrapper">
                <div class="profile-pic">
                    <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="">
                  </div>
                <div class="mail-content-wrapper">
                      <div class="contact-info">
                          <h5 class="contact-name">Mollie Houston</h5>
                          <div class="right">
                              <p class="mail-time">May 8, 2018, 11:18 AM</p>
                              <a class="btn btn-sm btn-icon text-danger " title="" href="#" data-bs-original-title="Delete User">
                                           Delete User <span class="btn-inner">
                                                <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="currentColor">
                                                    <path d="M19.3248 9.46826C19.3248 9.46826 18.7818 16.2033 18.4668 19.0403C18.3168 20.3953 17.4798 21.1893 16.1088 21.2143C13.4998 21.2613 10.8878 21.2643 8.27979 21.2093C6.96079 21.1823 6.13779 20.3783 5.99079 19.0473C5.67379 16.1853 5.13379 9.46826 5.13379 9.46826" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M20.708 6.23975H3.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M17.4406 6.23973C16.6556 6.23973 15.9796 5.68473 15.8256 4.91573L15.5826 3.69973C15.4326 3.13873 14.9246 2.75073 14.3456 2.75073H10.1126C9.53358 2.75073 9.02558 3.13873 8.87558 3.69973L8.63258 4.91573C8.47858 5.68473 7.80258 6.23973 7.01758 6.23973" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                            </span>
                                        </a>                              
                          </div>
                      </div>                  
                </div>
            </div>


            <div class="content-wrapper">
                <div class="profile-pic">
                    <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="">
                  </div>
                <div class="mail-content-wrapper">
                      <div class="contact-info">
                          <h5 class="contact-name">Mollie Houston</h5>
                          <div class="right">
                              <p class="mail-time">May 8, 2018, 11:18 AM</p>
                              <a class="btn btn-sm btn-icon text-danger " title="" href="#" data-bs-original-title="Delete User">
                                           Delete User <span class="btn-inner">
                                                <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="currentColor">
                                                    <path d="M19.3248 9.46826C19.3248 9.46826 18.7818 16.2033 18.4668 19.0403C18.3168 20.3953 17.4798 21.1893 16.1088 21.2143C13.4998 21.2613 10.8878 21.2643 8.27979 21.2093C6.96079 21.1823 6.13779 20.3783 5.99079 19.0473C5.67379 16.1853 5.13379 9.46826 5.13379 9.46826" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M20.708 6.23975H3.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M17.4406 6.23973C16.6556 6.23973 15.9796 5.68473 15.8256 4.91573L15.5826 3.69973C15.4326 3.13873 14.9246 2.75073 14.3456 2.75073H10.1126C9.53358 2.75073 9.02558 3.13873 8.87558 3.69973L8.63258 4.91573C8.47858 5.68473 7.80258 6.23973 7.01758 6.23973" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                            </span>
                                        </a>                              
                          </div>
                      </div>                  
                </div>
            </div>


            <div class="content-wrapper">
                <div class="profile-pic">
                    <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="">
                  </div>
                <div class="mail-content-wrapper">
                      <div class="contact-info">
                          <h5 class="contact-name">Mollie Houston</h5>
                          <div class="right">
                              <p class="mail-time">May 8, 2018, 11:18 AM</p>
                              <a class="btn btn-sm btn-icon text-danger " title="" href="#" data-bs-original-title="Delete User">
                                           Delete User <span class="btn-inner">
                                                <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="currentColor">
                                                    <path d="M19.3248 9.46826C19.3248 9.46826 18.7818 16.2033 18.4668 19.0403C18.3168 20.3953 17.4798 21.1893 16.1088 21.2143C13.4998 21.2613 10.8878 21.2643 8.27979 21.2093C6.96079 21.1823 6.13779 20.3783 5.99079 19.0473C5.67379 16.1853 5.13379 9.46826 5.13379 9.46826" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M20.708 6.23975H3.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M17.4406 6.23973C16.6556 6.23973 15.9796 5.68473 15.8256 4.91573L15.5826 3.69973C15.4326 3.13873 14.9246 2.75073 14.3456 2.75073H10.1126C9.53358 2.75073 9.02558 3.13873 8.87558 3.69973L8.63258 4.91573C8.47858 5.68473 7.80258 6.23973 7.01758 6.23973" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                            </span>
                                        </a>                              
                          </div>
                      </div>                  
                </div>
            </div>

          



















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