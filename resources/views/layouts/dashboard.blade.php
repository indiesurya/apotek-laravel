<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="images/favicon.png" />
</head>
<body>
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
            <a class="navbar-brand brand-logo" href="/"><img src="images/logo.svg" alt="logo" /></a>
            <a class="navbar-brand brand-logo-mini" href="/"><img src="images/logo-mini.svg" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
            </button>
            <div class="search-field d-none d-xl-block">
            <form class="d-flex align-items-center h-100" action="#">
                <div class="input-group">
                <div class="input-group-prepend bg-transparent">
                    <i class="input-group-text border-0 mdi mdi-magnify"></i>
                </div>
                <input type="text" class="form-control bg-transparent border-0" placeholder="Search products">
                </div>
            </form>
            </div>
            <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
                <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <div class="nav-profile-img">
                    <img src="images/faces/face28.png" alt="image">
                </div>
                <div class="nav-profile-text">
                    <p class="mb-1 text-black">{{Auth::user()->name}}</p>
                </div>
                </a>
                <div class="dropdown-menu navbar-dropdown dropdown-menu-right p-0 border-0 font-size-sm" aria-labelledby="profileDropdown" data-x-placement="bottom-end">
                <div class="p-3 text-center bg-primary">
                    <img class="img-avatar img-avatar48 img-avatar-thumb" src="images/faces/face28.png" alt="">
                </div>
                <div class="p-2">
                    <h5 class="dropdown-header text-uppercase pl-2 text-dark">User Options</h5>
                    <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="#">
                    <span>Inbox</span>
                    <span class="p-0">
                        <span class="badge badge-primary">3</span>
                        <i class="mdi mdi-email-open-outline ml-1"></i>
                    </span>
                    </a>
                    <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="#">
                    <span>Profile</span>
                    <span class="p-0">
                        <span class="badge badge-success">1</span>
                        <i class="mdi mdi-account-outline ml-1"></i>
                    </span>
                    </a>
                    <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="javascript:void(0)">
                    <span>Settings</span>
                    <i class="mdi mdi-settings"></i>
                    </a>
                    <div role="separator" class="dropdown-divider"></div>
                    <h5 class="dropdown-header text-uppercase  pl-2 text-dark mt-2">Actions</h5>
                    <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="#">
                    <span>Lock Account</span>
                    <i class="mdi mdi-lock ml-1"></i>
                    </a>
                    <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="#">
                    <span>Log Out</span>
                    <i class="mdi mdi-logout ml-1"></i>
                    </a>
                </div>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <i class="mdi mdi-email-outline"></i>
                <span class="count-symbol bg-success"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                <h6 class="p-3 mb-0 bg-primary text-white py-4">Messages</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                    <img src="images/faces/face4.jpg" alt="image" class="profile-pic">
                    </div>
                    <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Mark send you a message</h6>
                    <p class="text-gray mb-0"> 1 Minutes ago </p>
                    </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                    <img src="images/faces/face2.jpg" alt="image" class="profile-pic">
                    </div>
                    <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Cregh send you a message</h6>
                    <p class="text-gray mb-0"> 15 Minutes ago </p>
                    </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                    <img src="images/faces/face3.jpg" alt="image" class="profile-pic">
                    </div>
                    <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Profile picture updated</h6>
                    <p class="text-gray mb-0"> 18 Minutes ago </p>
                    </div>
                </a>
                <div class="dropdown-divider"></div>
                <h6 class="p-3 mb-0 text-center">4 new messages</h6>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                <i class="mdi mdi-bell-outline"></i>
                <span class="count-symbol bg-danger"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                <h6 class="p-3 mb-0 bg-primary text-white py-4">Notifications</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                    <div class="preview-icon bg-success">
                        <i class="mdi mdi-calendar"></i>
                    </div>
                    </div>
                    <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject font-weight-normal mb-1">Event today</h6>
                    <p class="text-gray ellipsis mb-0"> Just a reminder that you have an event today </p>
                    </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                    <div class="preview-icon bg-warning">
                        <i class="mdi mdi-settings"></i>
                    </div>
                    </div>
                    <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject font-weight-normal mb-1">Settings</h6>
                    <p class="text-gray ellipsis mb-0"> Update dashboard </p>
                    </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                    <div class="preview-icon bg-info">
                        <i class="mdi mdi-link-variant"></i>
                    </div>
                    </div>
                    <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject font-weight-normal mb-1">Launch Admin</h6>
                    <p class="text-gray ellipsis mb-0"> New admin wow! </p>
                    </div>
                </a>
                <div class="dropdown-divider"></div>
                <h6 class="p-3 mb-0 text-center">See all notifications</h6>
                </div>
            </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
            </button>
        </div>
    </nav>
    <div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
        <li class="nav-item nav-category">Fitur</li>
        <li class="nav-item">
            <a class="nav-link" href="/">
            <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
            <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/dataobat">
            <span class="icon-bg"><i class="mdi mdi-table-large menu-icon"></i></span>
            <span class="menu-title">Data Obat</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/kategori">
            <span class="icon-bg"><i class="mdi mdi-table-large menu-icon"></i></span>
            <span class="menu-title">Kategori Obat</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/distributor">
            <span class="icon-bg"><i class="mdi mdi-table-large menu-icon"></i></span>
            <span class="menu-title">Distributor</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/pemasukan">
            <span class="icon-bg"><i class="mdi mdi-table-large menu-icon"></i></span>
            <span class="menu-title">Total Pemasukan</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/pengeluaran">
            <span class="icon-bg"><i class="mdi mdi-table-large menu-icon"></i></span>
            <span class="menu-title">Total Pengeluaran</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
            <span class="icon-bg"><i class="mdi mdi-crosshairs-gps menu-icon"></i></span>
            <span class="menu-title">Input Data</span>
            <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="/input-data-obat">Data Obat</a></li>
                <li class="nav-item"> <a class="nav-link" href="/input-kategori">Kategori</a></li>
                <li class="nav-item"> <a class="nav-link" href="/input-distributor">Distributor</a></li>
                <li class="nav-item"> <a class="nav-link" href="/input-pengeluaran">Pengeluaran</a></li>
            </ul>
            </div>
        </li>
        <li class="nav-item sidebar-user-actions">
            <div class="user-details">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                <div class="d-flex align-items-center">
                    <div class="sidebar-profile-img">
                    <img src="images/faces/face28.png" alt="image">
                    </div>
                    <div class="sidebar-profile-text">
                    <p class="mb-1">{{Auth::user()->name}}</p>
                    </div>
                </div>
                </div>
                <div class="badge badge-danger">3</div>
            </div>
            </div>
        </li>
        <li class="nav-item sidebar-user-actions">
            <div class="sidebar-user-menu">
            <a href="/logout" class="nav-link"><i class="mdi mdi-logout menu-icon"></i>
                <span class="menu-title">Log Out</span></a>
            </div>
        </li>
        </ul>
    </nav>

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row" id="proBanner">
                <div class="col-12">
                    <i class="" id="bannerClose"></i>
                </div>
            </div>
            <div class="d-xl-flex justify-content-between align-items-start">
                <h2 class="text-dark font-weight-bold mb-2">{{ $page }}</h2>
            </div>
            @yield('content')
        </div>
    </div>

    <footer class="footer">
        <div class="footer-inner-wraper">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright ©Indie Surya</span>
            </div>
        </div>
    </footer>
</div>
<script src="vendors/js/vendor.bundle.base.js"></script>
<script src="vendors/chart.js/Chart.min.js"></script>
<script src="vendors/jquery-circle-progress/js/circle-progress.min.js"></script>
<script src="js/off-canvas.js"></script>
<script src="js/hoverable-collapse.js"></script>
<script src="js/misc.js"></script>
<script src="js/dashboard.js"></script>
</body>
</html>