<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard Admin|Laundry Bahagia</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
      <!-- Meta -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="description" content="Mega Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
      <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
      <meta name="author" content="codedthemes" />
      <!-- Favicon icon -->
      <link rel="icon" href="{{ asset('admin') }}/assets/images/favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="{{ asset('admin') }}/https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
    <!-- waves.css -->
    <link rel="stylesheet" href="{{ asset('admin') }}/assets/pages/waves/css/waves.min.css" type="text/css" media="all">
      <!-- Required Fremwork -->
      <link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/assets/css/bootstrap/css/bootstrap.min.css">
      <!-- waves.css -->
      <link rel="stylesheet" href="{{ asset('admin') }}/assets/pages/waves/css/waves.min.css" type="text/css" media="all">
      <!-- themify icon -->
      <link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/assets/icon/themify-icons/themify-icons.css">
      <!-- Font Awesome -->
      <link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/assets/icon/font-awesome/css/font-awesome.min.css">
      <!-- scrollbar.css -->
      <link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/assets/css/jquery.mCustomScrollbar.css">
        <!-- am chart export.css -->
        <link rel="stylesheet" href="{{ asset('admin') }}/https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
      <!-- Style.css -->
      <link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/assets/css/style.css">
  </head>

  <body>
  <!-- Pre-loader start -->
  <div class="theme-loader">
      <div class="loader-track">
          <div class="preloader-wrapper">
              <div class="spinner-layer spinner-blue">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>
              <div class="spinner-layer spinner-red">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>
            
              <div class="spinner-layer spinner-yellow">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>
            
              <div class="spinner-layer spinner-green">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Pre-loader end -->
  <div id="pcoded" class="pcoded">
      <div class="pcoded-overlay-box"></div>
      <div class="pcoded-container navbar-wrapper">
          <nav class="navbar header-navbar pcoded-header">
              <div class="navbar-wrapper">
                  <div class="navbar-logo">
                      <a class="mobile-menu waves-effect waves-light" id="mobile-collapse" href="#!">
                          <i class="ti-menu"></i>
                      </a>
                      <div class="mobile-search waves-effect waves-light">
                          <div class="header-search">
                              <div class="main-search morphsearch-search">
                                  <div class="input-group">
                                      <span class="input-group-addon search-close"><i class="ti-close"></i></span>
                                      <input type="text" class="form-control" placeholder="Enter Keyword">
                                      <span class="input-group-addon search-btn"><i class="ti-search"></i></span>
                                  </div>
                              </div>
                          </div>
                      </div>
                      {{-- <a href="index.html">
                          <img class="img-fluid" src="{{ asset('img/logo.jpg') }}" alt="Theme-Logo" />
                      </a> --}}
                      <a class="mobile-options waves-effect waves-light">
                          <i class="ti-more"></i>
                      </a>
                  </div>
                
                  <div class="navbar-container container-fluid">
                      <ul class="nav-left">
                          <li>
                              <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                          </li>
                          <li class="header-search">
                              <div class="main-search morphsearch-search">
                                  <div class="input-group">
                                      <span class="input-group-addon search-close"><i class="ti-close"></i></span>
                                      <input type="text" class="form-control">
                                      <span class="input-group-addon search-btn"><i class="ti-search"></i></span>
                                  </div>
                              </div>
                          </li>
                          <li>
                              <a href="#!" onclick="javascript:toggleFullScreen()" class="waves-effect waves-light">
                                  <i class="ti-fullscreen"></i>
                              </a>
                          </li>
                      </ul>
                      <ul class="nav-right">
                          <li class="header-notification">
                              <a href="#!" class="waves-effect waves-light">
                                  <i class="ti-bell"></i>
                                  <span class="badge bg-c-red"></span>
                              </a>
                              <ul class="show-notification">
                                  <li>
                                      <h6>Notifications</h6>
                                      <label class="label label-danger">New</label>
                                  </li>
                                  <li class="waves-effect waves-light">
                                      <div class="media">
                                          <img class="d-flex align-self-center img-radius" src="assets/images/avatar-2.jpg" alt="Generic placeholder image">
                                          <div class="media-body">
                                              <h5 class="notification-user">Laundry Bahagia</h5>
                                              <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                              <span class="notification-time">30 minutes ago</span>
                                          </div>
                                      </div>
                                  </li>
                                  <li class="waves-effect waves-light">
                                      <div class="media">
                                          <img class="d-flex align-self-center img-radius" src="assets/images/avatar-4.jpg" alt="Generic placeholder image">
                                          <div class="media-body">
                                              <h5 class="notification-user">Joseph William</h5>
                                              <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                              <span class="notification-time">30 minutes ago</span>
                                          </div>
                                      </div>
                                  </li>
                                  <li class="waves-effect waves-light">
                                      <div class="media">
                                          <img class="d-flex align-self-center img-radius" src="assets/images/avatar-3.jpg" alt="Generic placeholder image">
                                          <div class="media-body">
                                              <h5 class="notification-user">Sara Soudein</h5>
                                              <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                              <span class="notification-time">30 minutes ago</span>
                                          </div>
                                      </div>
                                  </li>
                              </ul>
                          </li>
                          <li class="user-profile header-notification">
                              <a href="#!" class="waves-effect waves-light">
                                  <img src="{{ asset('img/logo.jpg') }}" class="img-radius" alt="User-Profile-Image">
                                  <span>Laundry Bahagia</span>
                                  <i class="ti-angle-down"></i>
                              </a>
                              <ul class="show-notification profile-notification">
                                  <li class="waves-effect waves-light">
                                      <a href="#!">
                                          <i class="ti-settings"></i> Settings
                                      </a>
                                  </li>
                                 
                                  <li class="waves-effect waves-light">
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                                  </li>
                              </ul>
                          </li>
                      </ul>
                  </div>
              </div>
          </nav>

          <div class="pcoded-main-container">
              <div class="pcoded-wrapper">
                  <nav class="pcoded-navbar">
                      <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                      <div class="pcoded-inner-navbar main-menu">
                          <div class="">
                              <div class="main-menu-header">
                                  <img class="img-80 img-radius" src="{{ asset('img/logo.jpg') }}" alt="User-Profile-Image">
                                  <div class="user-details font-weight-bold">
                                      <span id="more-details" style="font-weight: 50px; font-size:1.2rem">Laundry Bahagia</i></span>
                                  </div>
                              </div>
        
                              
                          </div>
                          <div class="pcoded-navigation-label" data-i18n="nav.category.navigation">Home Laundry</div>
                          <ul class="pcoded-item pcoded-left-item">
                              <li class="active">
                                  <a href="{{ url('home',[]) }}" class="waves-effect waves-dark">
                                      <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                      <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                              </li>
                              <li class="pcoded-hasmenu">
                                  <a href="javascript:void(0)" class="waves-effect waves-dark">
                                      <span class="pcoded-micon"><i class="ti-pencil-alt "></i></span>
                                      <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Pesanan</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                                  <ul class="pcoded-submenu">
                                      <li class=" ">
                                          <a href="{{ url('pesanan',[]) }}" class="waves-effect waves-dark">
                                              <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                              <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Data Pesanan</span>
                                              <span class="pcoded-mcaret"></span>
                                          </a>
                                      </li>
                                  </ul>
                                  <ul class="pcoded-submenu">
                                    <li class=" ">
                                        <a href="{{ url('pesanan/create',[]) }}" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Tambah Pesanan</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                </ul>
                              </li>

                              <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-receipt"></i></span>
                                    <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Detail Pesanan</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class=" ">
                                        <a href="{{ url('detailpesanan',[]) }}" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Data Detail Pesanan</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="pcoded-submenu">
                                  <li class=" ">
                                      <a href="{{ url('detailpesanan/create',[]) }}" class="waves-effect waves-dark">
                                          <span class="pcoded-micon"><i class="ti-plus"></i></span>
                                          <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Tambah Detail Pesanan</span>
                                          <span class="pcoded-mcaret"></span>
                                      </a>
                                  </li>
                              </ul>
                            </li>
                          </ul>
                          <div class="pcoded-navigation-label" data-i18n="nav.category.forms">Transaksi </div>
                          <ul class="pcoded-item pcoded-left-item">
                              <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-user"></i></span>
                                    <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Pelanggan</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class=" ">
                                        <a href="{{ url('pelanggan',[]) }}" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Data Pelanggan</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="pcoded-submenu">
                                  <li class=" ">
                                      <a href="{{ url('pelanggan/create',[]) }}" class="waves-effect waves-dark">
                                          <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                          <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Tambah Pelanggan</span>
                                          <span class="pcoded-mcaret"></span>
                                      </a>
                                  </li>
                              </ul>
                              <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-money"></i></span>
                                    <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Pembayaran</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class=" ">
                                        <a href="{{ url('pembayaran',[]) }}" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Data Pembayaran</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="pcoded-submenu">
                                  <li class=" ">
                                      <a href="{{ url('pembayaran/create',[]) }}" class="waves-effect waves-dark">
                                          <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                          <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Tambah Pembayaran</span>
                                          <span class="pcoded-mcaret"></span>
                                      </a>
                                  </li>
                              </ul>
                            </li>
                        </li>
                          </ul>
        
                          <div class="pcoded-navigation-label" data-i18n="nav.category.forms">Pelayanan</div>
                          <ul class="pcoded-item pcoded-left-item">
                            <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-package"></i></span>
                                    <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Layanan</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class=" ">
                                        <a href="{{ url('layanan',[]) }}" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Data Layanan</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="pcoded-submenu">
                                  <li class=" ">
                                      <a href="{{ url('layanan/create',[]) }}" class="waves-effect waves-dark">
                                          <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                          <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Tambah Layanan</span>
                                          <span class="pcoded-mcaret"></span>
                                      </a>
                                  </li>
                              </ul>
                            </li>

                            <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-truck"></i></span>
                                    <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Antar Jemput</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class=" ">
                                        <a href="{{ url('antarjemput',[]) }}" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Data Antar Jemput</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="pcoded-submenu">
                                  <li class=" ">
                                      <a href="{{ url('antarjemput/create',[]) }}" class="waves-effect waves-dark">
                                          <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                          <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Tambah Antar Jemput</span>
                                          <span class="pcoded-mcaret"></span>
                                      </a>
                                  </li>
                              </ul>
                            </li>
                        </ul>
                          <div class="pcoded-navigation-label" data-i18n="nav.category.other">Pengguna</div>
                          <ul class="pcoded-item pcoded-left-item">
                            <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-id-badge"></i></span>
                                    <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Pegawai</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class=" ">
                                        <a href="{{ url('pegawai',[]) }}" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Data Pegawai</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="pcoded-submenu">
                                  <li class=" ">
                                      <a href="{{ url('pegawai/create',[]) }}" class="waves-effect waves-dark">
                                          <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                          <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Tambah Pegawai</span>
                                          <span class="pcoded-mcaret"></span>
                                      </a>
                                  </li>
                              </ul>
                            </li>

                            <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-user"></i></span>
                                    <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">User</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class=" ">
                                        <a href="{{ url('user',[]) }}" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Data User</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                          </ul>
                      </div>
                  </nav>
                  <div class="pcoded-content">
                      <!-- Page-header start -->
                      <div class="page-header">
                          <div class="page-block">
                              <div class="row align-items-center">
                                  <div class="col-md-8">
                                      <div class="page-header-title font-weight-bold">
                                          <h4 class="m-b-10">Dashboard</h4>
                                          <p class="m-b-0">Welcome to Laundry Bahagia, {{ Auth::user()->name }}</p>
                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                      <ul class="breadcrumb-title">
                                          <li class="breadcrumb-item">
                                              <a href="index.html"> <i class="fa fa-home"></i> </a>
                                          </li>
                                          <li class="breadcrumb-item"><a href="#!">Dashboard</a>
                                          </li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <!-- Page-header end -->
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="container-fluid">
                                    @if(Session::has('pesan'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        {{ Session::get('pesan') }}
                
                                    </div>
                                        
                                    @endif
                                    @yield('content-admin')
                
                                    <!-- Page Heading -->
                                    
                
                                    <!-- Content Row -->
                                    
                
                                </div>
                                </div>
                                <div id="styleSelector"> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 10]>
    <div class="ie-warning">
        <h1>Warning!!</h1>
        <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
        <div class="iew-container">
            <ul class="iew-download">
                <li>
                    <a href="http://www.google.com/chrome/">
                        <img src="assets/images/browser/chrome.png" alt="Chrome">
                        <div>Chrome</div>
                    </a>
                </li>
                <li>
                    <a href="https://www.mozilla.org/en-US/firefox/new/">
                        <img src="assets/images/browser/firefox.png" alt="Firefox">
                        <div>Firefox</div>
                    </a>
                </li>
                <li>
                    <a href="http://www.opera.com">
                        <img src="assets/images/browser/opera.png" alt="Opera">
                        <div>Opera</div>
                    </a>
                </li>
                <li>
                    <a href="https://www.apple.com/safari/">
                        <img src="assets/images/browser/safari.png" alt="Safari">
                        <div>Safari</div>
                    </a>
                </li>
                <li>
                    <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                        <img src="assets/images/browser/ie.png" alt="">
                        <div>IE (9 & above)</div>
                    </a>
                </li>
            </ul>
        </div>
        <p>Sorry for the inconvenience!</p>
    </div>
    <![endif]-->
    <!-- Warning Section Ends -->
    
    <!-- Required Jquery -->
    <script type="text/javascript" src="{{ asset('admin') }}/assets/js/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('admin') }}/assets/js/jquery-ui/jquery-ui.min.js "></script>
    <script type="text/javascript" src="{{ asset('admin') }}/assets/js/popper.js/popper.min.js"></script>
    <script type="text/javascript" src="{{ asset('admin') }}/assets/js/bootstrap/js/bootstrap.min.js "></script>
    <script type="text/javascript" src="{{ asset('admin') }}/assets/pages/widget/excanvas.js "></script>
    <!-- waves js -->
    <script src="{{ asset('admin') }}/assets/pages/waves/js/waves.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="{{ asset('admin') }}/assets/js/jquery-slimscroll/jquery.slimscroll.js "></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="{{ asset('admin') }}/assets/js/modernizr/modernizr.js "></script>
    <!-- slimscroll js -->
    <script type="text/javascript" src="{{ asset('admin') }}/assets/js/SmoothScroll.js"></script>
    <script src="{{ asset('admin') }}/assets/js/jquery.mCustomScrollbar.concat.min.js "></script>
    <!-- Chart js -->
    <script type="text/javascript" src="{{ asset('admin') }}/assets/js/chart.js/Chart.js"></script>
    <!-- amchart js -->
    <script src="{{ asset('admin') }}/https://www.amcharts.com/lib/3/amcharts.js"></script>
    <script src="{{ asset('admin') }}/assets/pages/widget/amchart/gauge.js"></script>
    <script src="{{ asset('admin') }}/assets/pages/widget/amchart/serial.js"></script>
    <script src="{{ asset('admin') }}/assets/pages/widget/amchart/light.js"></script>
    <script src="{{ asset('admin') }}/assets/pages/widget/amchart/pie.min.js"></script>
    <script src="{{ asset('admin') }}/https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
    <!-- menu js -->
    <script src="{{ asset('admin') }}/assets/js/pcoded.min.js"></script>
    <script src="{{ asset('admin') }}/assets/js/vertical-layout.min.js "></script>
    <!-- custom js -->
    <script type="text/javascript" src="{{ asset('admin') }}/assets/pages/dashboard/custom-dashboard.js"></script>
    <script type="text/javascript" src="{{ asset('admin') }}/assets/js/script.js "></script>
</body>

</html>
