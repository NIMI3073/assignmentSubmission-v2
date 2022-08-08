<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home | EasySubmit</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- faviconf
  ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('dashboard-assets/img/favicon.ico') }}">
    <!-- Google Fonts
  ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ asset('dashboard-assets/css/bootstrap.min.css') }}">
    <!-- Bootstrap CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ asset('dashboard-assets/css/font-awesome.min.css') }}">
    <!-- owl.carousel CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ asset('dashboard-assets/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard-assets/css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard-assets/css/owl.transitions.css') }}">
    <!-- animate CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ asset('dashboard-assets/css/animate.css') }}">
    <!-- normalize CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ asset('dashboard-assets/css/normalize.css') }}">
    <!-- meanmenu icon CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ asset('dashboard-assets/css/meanmenu.min.css') }}">
    <!-- main CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ asset('dashboard-assets/css/main.css') }}">
    <!-- educate icon CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ asset('dashboard-assets/css/educate-custon-icon.css') }}">
    <!-- morrisjs CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ asset('dashboard-assets/css/morrisjs/morris.css') }}">
    <!-- mCustomScrollbar CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ asset('dashboard-assets/css/scrollbar/jquery.mCustomScrollbar.min.css') }}">
    <!-- metisMenu CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ asset('dashboard-assets/css/metisMenu/metisMenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard-assets/css/metisMenu/metisMenu-vertical.css') }}">
    <!-- calendar CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ asset('dashboard-assets/css/calendar/fullcalendar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard-assets/css/calendar/fullcalendar.print.min.css') }}">
    <!-- style CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ asset('dashboard-assets/style.css') }}">
    <!-- responsive CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ asset('dashboard-assets/css/responsive.css') }}">
    <!-- modernizr JS
  ============================================ -->
    <script src="{{ asset('dashboard-assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>
    <!-- forms CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ asset('dashboard-assets/css/form/all-type-forms.css') }}">
    <!-- dropzone CSS
            ============================================ -->
    <link rel="stylesheet" href="{{ asset('dashboard-assets/css/dropzone/dropzone.css') }}">
</head>

<body>
    <!--[if lt IE 8]>
  <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="../dashboard-assets/http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
 <![endif]-->
    <!-- Start Left menu area -->
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="index"><strong><i>EasySubmit</i></strong></a>

            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                     <ul class="metismenu" id="menu1">
                        <div class="sidenav">
                            @if (auth()->user()->type === 'lecturer')
                            <a href="{{ asset ('panel/lecturer') }}">
                                <span class="educate-icon educate-home icon-wrap"></span>
                                <span class="mini-click-non">EasySubmit</span>
                            </a >
                            @endif
                           
                            @if(auth()->user()->type === 'student')

                                <a href="{{ asset ('panel/student-profile') }}">
                                    <span class="educate-icon educate-home icon-wrap"></span>
                                    <span class="mini-click-non">EasySubmit</span>
                                    </a>

                                    @endif
        {{-- @if(auth()->user()->type === 'lecturer')

                            <a href="{{ asset ('panel/all-lecturer') }}">
                                <span
                                class="educate-icon educate-professor icon-wrap"></span>
                            <span class="mini-click-non">Lecturer</span>
                            </a>
                            
                            @endif --}}

                @if(auth()->user()->type === 'super_admin')

                            <a href="{{ asset ('panel/admin/super_admin') }}">
                                <span class="educate-icon educate-student icon-wrap"></span> <span
                                    class="mini-click-non">Super Admin</span>
                            </a>

                            <li><a title="Add Professor" href="{{ asset ('panel/admin/lecturer-page') }}"><span
                                class="mini-sub-pro">Lecturer page</span></a></li>

                                <li><a title="Add Professor" href="{{ asset ('panel/admin/student-page') }}"><span
                                    class="mini-sub-pro">Student page</span></a></li>
                        
                            @endif



                            @if(auth()->user()->type === 'lecturer')

                            <li>
                                <a class="has-arrow" href="{{ asset ('all-course') }}" aria-expanded="false"><span
                                        class="educate-icon educate-course icon-wrap"></span>
                                    <span class="mini-click-non">Courses</span></a>
                                <ul class="submenu-angle" aria-expanded="false">
                                    <li><a title="All Professors" href="{{ asset ('panel/all-courses') }}">
                                        <span
                                                class="mini-sub-pro">All course</span></a></li>
                                    <li><a title="Add Professor" href="{{ asset ('panel/add-course') }}"><span
                                                class="mini-sub-pro">Add course</span></a></li>
                                 
                                            
                                </ul>
                            </li>
                            @endif


                            @if(auth()->user()->type === 'lecturer')
                            <a href="{{ asset ('panel/assignment') }}">
                                <span
                                class="educate-icon educate-library icon-wrap"></span>
                            <span class="mini-click-non">Add New Assignment</span>
                            </a>
                            @endif


                            @if (auth ()->user()->type === 'student')
                                <a href="{{ asset ('panel/assignment-upload') }}">
                                    <span class="educate-icon educate-library icon-wrap"></span>
                                    <span> Assignment course search </span></a>
                                    @endIf
                                 

                          </div>
                    </nav>
                </nav>
            </div>
      

    <!-- End Left menu area -->
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="{{ asset ('panel/index') }}">
                            <h1><strong><i>EasySubmit</i></strong></h1>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse"
                                                class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                                <i class="educate-icon educate-nav"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n">
                                            <ul class="nav navbar-nav mai-top-nav">
                                                <li class="nav-item"><a
                                                        href="{{ asset('panel/index') }}"
                                                        class="nav-link">Home</a>
                                                </li>
                                                <li class="nav-item"><a
                                                        href="about"
                                                        class="nav-link">About</a>
                                                </li>
                                                <li class="nav-item"><a
                                                        href="contact"
                                                        class="nav-link">Contact Us</a>
                                                </li>
                                                <li class="nav-item dropdown res-dis-nn">
                                                    <a href="{{ asset('dashboard-assets/#') }}" data-toggle="dropdown"
                                                        role="button" aria-expanded="false"
                                                        class="nav-link dropdown-toggle">AssignmentZone
                                                        <span class="angle-down-topmenu"><i
                                                                class="fa fa-angle-down"></i></span></a>
                                                    <div role="menu" class="dropdown-menu animated zoomIn">
                                                        <a href="{{ asset('dashboard-assets/#') }}"
                                                            class="dropdown-item" style="color: black">AssignmentZone</a>
                                                        <a href="{{ asset('panel/student-profile') }}"
                                                            class="dropdown-item" style="color: black">Student</a>
                                                        <a href="{{ asset('panel/lecturer') }}"
                                                            class="dropdown-item" style="color: black">Lecturer</a>
                                                        <a href="{{ asset('panel/index') }}"
                                                            class="dropdown-item" style="color: black">Dashboard</a>

                                                    </div>
                                                </li>
                                          
                                                
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                <li class="nav-item dropdown">
                                                    <a href="{{ asset('dashboard-assets/#') }}"
                                                        data-toggle="dropdown" role="button" aria-expanded="false"
                                                        class="nav-link dropdown-toggle"><i
                                                            class="educate-icon educate-message edu-chat-pro"
                                                            aria-hidden="true"></i><span
                                                            class="indicator-ms"></span></a>
                                                    <div role="menu"
                                                        class="author-message-top dropdown-menu animated zoomIn">
                                                        <div class="message-single-top">
                                                            <h1>Message</h1>
                                                        </div>
                                                        <ul class="message-menu">

                                                            <li>
                                                                <a href="{{ asset('dashboard-assets/#') }}">
                                                                    <div class="message-img">
                                                                        <img src="../dashboard-assets/img/contact/2.jpg"
                                                                            alt="">
                                                                    </div>
                                                                    
                                                                    <div class="message-content">
                                                                        <span class="message-date">16 Sept</span>
                                                                        <h2>Victor Jara</h2>
                                                                        <p>Please done this project as soon possible.
                                                                        </p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="message-view">
                                                            <a href="../dashboard-assets/#">View All Messages</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="nav-item"><a
                                                        href="{{ asset('dashboard-assets/#') }}"
                                                        data-toggle="dropdown" role="button" aria-expanded="false"
                                                        class="nav-link dropdown-toggle"><i
                                                            class="educate-icon educate-bell"
                                                            aria-hidden="true"></i><span
                                                            class="indicator-nt"></span></a>
                                                    <div role="menu"
                                                        class="notification-author dropdown-menu animated zoomIn">
                                                        <div class="notification-single-top">
                                                            <h1>Notifications</h1>
                                                        </div>
                                                        <ul class="notification-menu">
                                                            <li>
                                                                <a href="{{ asset('dashboard-assets/#') }}">
                                                                    <div class="notification-icon">
                                                                        <i class="educate-icon educate-checked edu-checked-pro admin-check-pro"
                                                                            aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                        <span class="notification-date">16 Sept</span>
                                                                        <h2>Advanda Cro</h2>
                                                                        <p>Please done this project as soon possible.
                                                                        </p>
                                                                    </div>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href="{{ asset('dashboard-assets/#') }}">
                                                                    <div class="notification-icon">
                                                                        <i class="fa fa-eraser edu-shield"
                                                                            aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                        <span class="notification-date">16 Sept</span>
                                                                        <h2>Victor Jara</h2>
                                                                        <p>Please done this project as soon possible.
                                                                        </p>
                                                                    </div>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                        <div class="notification-view">
                                                            <a href="#">View All Notification</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button"
                                                        aria-expanded="false" class="nav-link dropdown-toggle">
                                                        <img src="{{ asset('panel/img/product/pro4.jpg') }}"
                                                            alt="" />
                                                        <span class="admin-name">Profile</span>
                                                        <i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
                                                    </a>
                                                    <ul role="menu"
                                                        class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        <li><a href="#"><span
                                                                    class="edu-icon edu-home-admin author-log-ic"></span>My
                                                                Account</a>
                                                        </li>
                                                        <li><a href="#"><span
                                                                    class="edu-icon edu-user-rounded author-log-ic"></span>My
                                                                Profile</a>
                                                        </li>

                                                        <li><a href="#"><span
                                                                    class="edu-icon edu-settings author-log-ic"></span>Settings</a>
                                                        </li>
                                                        <li><a href="{{ route('logout') }}"><span
                                                                    class="edu-icon edu-locked author-log-ic"></span>Log
                                                                Out</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="nav-item nav-setting-open"><a href="#"
                                                        data-toggle="dropdown" role="button" aria-expanded="false"
                                                        class="nav-link dropdown-toggle"><i
                                                            class="educate-icon educate-menu"></i></a>

                                                    <div role="menu"
                                                        class="admintab-wrap menu-setting-wrap menu-setting-wrap-bg dropdown-menu animated zoomIn">
                                                        <ul class="nav nav-tabs custon-set-tab">
                                                            <li class="active"><a data-toggle="tab"
                                                                    href="{{ asset('dashboard-assets/#Notes') }}">Notes</a>
                                                            </li>
                                                            <li><a data-toggle="tab"
                                                                    href="{{ asset('panel/#Projects') }}">Projects</a>
                                                            </li>
                                                            <li><a data-toggle="tab"
                                                                    href="{{ asset('panel/#Settings') }}">Settings</a>
                                                            </li>
                                                        </ul>

                                                        <div class="tab-content custom-bdr-nt">
                                                            <div id="Notes" class="tab-pane fade in active">
                                                                <div class="notes-area-wrap">
                                                                    <div class="note-heading-indicate">
                                                                        <h2><i class="fa fa-comments-o"></i> Latest
                                                                            Notes</h2>
                                                                        <p>You have 10 new message.</p>
                                                                    </div>
                                                                    <div class="notes-list-area notes-menu-scrollbar">
                                                                        <ul class="notes-menu-list">
                                                                            <li>
                                                                                <a href="panel/#">
                                                                                    <div class="notes-list-flow">
                                                                                        <div class="notes-img">
                                                                                            <img src="panel/img/contact/1.jpg"
                                                                                                alt="" />
                                                                                        </div>
                                                                                        <div class="notes-content">
                                                                                            <p> The point of using Lorem
                                                                                                Ipsum is that it has a
                                                                                                more-or-less normal.</p>
                                                                                            <span>Yesterday 2:45
                                                                                                pm</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>

                                                                            <li>
                                                                                <a href="../dashboard-assets/#">
                                                                                    <div class="notes-list-flow">
                                                                                        <div class="notes-img">
                                                                                            <img src="../dashboard-assets/img/contact/3.jpg"
                                                                                                alt="" />
                                                                                        </div>
                                                                                        <div class="notes-content">
                                                                                            <p> The point of using Lorem
                                                                                                Ipsum is that it has a
                                                                                                more-or-less normal.</p>
                                                                                            <span>Yesterday 2:45
                                                                                                pm</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="Projects" class="tab-pane fade">
                                                                <div class="projects-settings-wrap">
                                                                    <div class="note-heading-indicate">
                                                                        <h2><i class="fa fa-cube"></i> Latest
                                                                            projects</h2>
                                                                        <p> You have 20 projects. 5 not completed.</p>
                                                                    </div>
                                                                    <div
                                                                        class="project-st-list-area project-st-menu-scrollbar">
                                                                        <ul class="projects-st-menu-list">

                                                                            <li>
                                                                                <a href="../dashboard-assets/#">
                                                                                    <div class="project-list-flow">
                                                                                        <div
                                                                                            class="projects-st-heading">
                                                                                            <h2>Software Development
                                                                                            </h2>
                                                                                            <p> The point of using Lorem
                                                                                                Ipsum is that it has a
                                                                                                more or less normal.</p>
                                                                                            <span
                                                                                                class="project-st-time">2
                                                                                                hours ago</span>
                                                                                        </div>
                                                                                        <div
                                                                                            class="projects-st-content project-rating-cl">
                                                                                            <p>Completion with: 68%</p>
                                                                                            <div
                                                                                                class="progress progress-mini">
                                                                                                <div style="width: 68%;"
                                                                                                    class="progress-bar hd-tp-2">
                                                                                                </div>
                                                                                            </div>
                                                                                            <p>Project end: 4:00 pm -
                                                                                                12.06.2014</p>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>

                                                                            <li>
                                                                                <a href="../dashboard-assets/#">
                                                                                    <div class="project-list-flow">
                                                                                        <div
                                                                                            class="projects-st-heading">
                                                                                            <h2>Web Design</h2>
                                                                                            <p> The point of using Lorem
                                                                                                Ipsum is that it has a
                                                                                                more or less normal.</p>
                                                                                            <span
                                                                                                class="project-st-time">4
                                                                                                hours ago</span>
                                                                                        </div>
                                                                                        <div
                                                                                            class="projects-st-content project-rating-cl2">
                                                                                            <p>Completion with: 38%</p>
                                                                                            <div
                                                                                                class="progress progress-mini">
                                                                                                <div style="width: 38%;"
                                                                                                    class="progress-bar progress-bar-danger hd-tp-4">
                                                                                                </div>
                                                                                            </div>
                                                                                            <p>Project end: 4:00 pm -
                                                                                                12.06.2014</p>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>

                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="Settings" class="tab-pane fade">
                                                                <div class="setting-panel-area">
                                                                    <div class="note-heading-indicate">
                                                                        <h2><i class="fa fa-gears"></i> Settings
                                                                            Panel</h2>
                                                                        <p> You have 20 Settings. 5 not completed.</p>
                                                                    </div>
                                                                    <ul class="setting-panel-list">
                                                                        <li>
                                                                            <div class="checkbox-setting-pro">
                                                                                <div class="checkbox-title-pro">
                                                                                    <h2>Show notifications</h2>
                                                                                    <div class="ts-custom-check">
                                                                                        <div class="onoffswitch">
                                                                                            <input type="checkbox"
                                                                                                name="collapsemenu"
                                                                                                class="onoffswitch-checkbox"
                                                                                                id="example">
                                                                                            <label
                                                                                                class="onoffswitch-label"
                                                                                                for="example">
                                                                                                <span
                                                                                                    class="onoffswitch-inner"></span>
                                                                                                <span
                                                                                                    class="onoffswitch-switch"></span>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="checkbox-setting-pro">
                                                                                <div class="checkbox-title-pro">
                                                                                    <h2>Disable Chat</h2>
                                                                                    <div class="ts-custom-check">
                                                                                        <div class="onoffswitch">
                                                                                            <input type="checkbox"
                                                                                                name="collapsemenu"
                                                                                                class="onoffswitch-checkbox"
                                                                                                id="example3">
                                                                                            <label
                                                                                                class="onoffswitch-label"
                                                                                                for="example3">
                                                                                                <span
                                                                                                    class="onoffswitch-inner"></span>
                                                                                                <span
                                                                                                    class="onoffswitch-switch"></span>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="checkbox-setting-pro">
                                                                                <div class="checkbox-title-pro">
                                                                                    <h2>Enable history</h2>
                                                                                    <div class="ts-custom-check">
                                                                                        <div class="onoffswitch">
                                                                                            <input type="checkbox"
                                                                                                name="collapsemenu"
                                                                                                class="onoffswitch-checkbox"
                                                                                                id="example4">
                                                                                            <label
                                                                                                class="onoffswitch-label"
                                                                                                for="example4">
                                                                                                <span
                                                                                                    class="onoffswitch-inner"></span>
                                                                                                <span
                                                                                                    class="onoffswitch-switch"></span>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li>

                                                                        </li>
                                                                        <li>
                                                                            <div class="checkbox-setting-pro">
                                                                                <div class="checkbox-title-pro">
                                                                                    <h2>Update everyday</h2>
                                                                                    <div class="ts-custom-check">
                                                                                        <div class="onoffswitch">
                                                                                            <input type="checkbox"
                                                                                                name="collapsemenu"
                                                                                                checked=""
                                                                                                class="onoffswitch-checkbox"
                                                                                                id="example2">
                                                                                            <label
                                                                                                class="onoffswitch-label"
                                                                                                for="example2">
                                                                                                <span
                                                                                                    class="onoffswitch-inner"></span>
                                                                                                <span
                                                                                                    class="onoffswitch-switch"></span>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="checkbox-setting-pro">
                                                                                <div class="checkbox-title-pro">
                                                                                    <h2>Global search</h2>
                                                                                    <div class="ts-custom-check">
                                                                                        <div class="onoffswitch">
                                                                                            <input type="checkbox"
                                                                                                name="collapsemenu"
                                                                                                checked=""
                                                                                                class="onoffswitch-checkbox"
                                                                                                id="example6">
                                                                                            <label
                                                                                                class="onoffswitch-label"
                                                                                                for="example6">
                                                                                                <span
                                                                                                    class="onoffswitch-inner"></span>
                                                                                                <span
                                                                                                    class="onoffswitch-switch"></span>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="checkbox-setting-pro">
                                                                                <div class="checkbox-title-pro">
                                                                                    <h2>Offline users</h2>
                                                                                    <div class="ts-custom-check">
                                                                                        <div class="onoffswitch">
                                                                                            <input type="checkbox"
                                                                                                name="collapsemenu"
                                                                                                checked=""
                                                                                                class="onoffswitch-checkbox"
                                                                                                id="example5">
                                                                                            <label
                                                                                                class="onoffswitch-label"
                                                                                                for="example5">
                                                                                                <span
                                                                                                    class="onoffswitch-inner"></span>
                                                                                                <span
                                                                                                    class="onoffswitch-switch"></span>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                        <li><a data-toggle="collapse" data-target="#Charts"
                                                href="../dashboard-assets/#">Home <span
                                                    class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul class="collapse dropdown-header-top">
                                                <li><a href="panel/index">Dashboard</a></li>

                                            </ul>
                                        </li>

                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main-body">
                @yield('body')
            </div>

            <div class="footer-copyright-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="footer-copy-right">
                                <p>Copyright © 2022. All rights reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 

        <!-- jquery
  ============================================ -->
        <script src="{{ asset('dashboard-assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
        <!-- bootstrap JS
  ============================================ -->
        <script src="{{ asset('dashboard-assets/js/bootstrap.min.js') }}"></script>
        <!-- wow JS
  ============================================ -->
        <script src="{{ asset('dashboard-assets/js/wow.min.js') }}"></script>
        <!-- price-slider JS
  ============================================ -->
        <script src="{{ asset('dashboard-assets/js/jquery-price-slider.js') }}"></script>
        <!-- meanmenu JS
  ============================================ -->
        <script src="{{ asset('dashboard-assets/js/jquery.meanmenu.js') }}"></script>
        <!-- owl.carousel JS
  ============================================ -->
        <script src="{{ asset('dashboard-assets/js/owl.carousel.min.js') }}"></script>
        <!-- sticky JS
  ============================================ -->
        <script src="{{ asset('dashboard-assets/js/jquery.sticky.js') }}"></script>
        <!-- scrollUp JS
  ============================================ -->
        <script src="{{ asset('dashboard-assets/js/jquery.scrollUp.min.js') }}"></script>
        <!-- counterup JS
  ============================================ -->
        <script src="{{ asset('dashboard-assets/js/counterup/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('dashboard-assets/js/counterup/waypoints.min.js') }}"></script>
        <script src="{{ asset('dashboard-assets/js/counterup/counterup-active.js') }}"></script>
        <!-- mCustomScrollbar JS
  ============================================ -->
        <script src="{{ asset('dashboard-assets/js/scrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
        <script src="{{ asset('dashboard-assets/js/scrollbar/mCustomScrollbar-active.js') }}"></script>
        <!-- metisMenu JS
  ============================================ -->
        <script src="{{ asset('dashboard-assets/js/metisMenu/metisMenu.min.js') }}"></script>
        <script src="{{ asset('dashboard-assets/js/metisMenu/metisMenu-active.js') }}"></script>
        <!-- morrisjs JS
  ============================================ -->
        <script src="{{ asset('dashboard-assets/js/morrisjs/raphael-min.js') }}"></script>
        <script src="{{ asset('dashboard-assets/js/morrisjs/morris.js') }}"></script>
        <script src="{{ asset('dashboard-assets/js/morrisjs/morris-active.js') }}"></script>
        <!-- morrisjs JS
  ============================================ -->
        <script src="{{ asset('dashboard-assets/js/sparkline/jquery.sparkline.min.js') }}"></script>
        <script src="{{ asset('dashboard-assets/js/sparkline/jquery.charts-sparkline.js') }}"></script>
        <script src="{{ asset('dashboard-assets/js/sparkline/sparkline-active.js') }}"></script>
        <!-- calendar JS
  ============================================ -->
        <script src="{{ asset('dashboard-assets/js/calendar/moment.min.js') }}"></script>
        <script src="{{ asset('dashboard-assets/js/calendar/fullcalendar.min.js') }}"></script>
        <script src="{{ asset('dashboard-assets/js/calendar/fullcalendar-active.js') }}"></script>
        <!-- plugins JS
  ============================================ -->
        <script src="{{ asset('dashboard-assets/js/jquery.maskedinput.min.js') }}"></script>
        <script src="{{ asset('dashboard-assets/js/masking-active.js') }}"></script>
        <!-- datepicker JS
      ============================================ -->
        <script src="{{ asset('/js/datepicker/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('dashboard/js/datepicker/datepicker-active.js') }}"></script>
        <!-- form validate JS
      ============================================ -->
        <script src="{{ asset('dashboard-assets/js/form-validation/jquery.form.min.js') }}"></script>
        <script src="{{ asset('dashboard-assets/js/form-validation/jquery.validate.min.js') }}"></script>
        <script src="{{ asset('/js/form-validation/form-active.js') }}"></script>
        <!-- dropzone JS
      ============================================ -->
        <script src="{{ asset('js/dropzone/dropzone.js') }}"></script>
        <script src="{{ asset('dashboard-assets/js/plugins.js') }}"></script>
        <!-- main JS
  ============================================ -->
        <script src="{{ asset('dashboard-assets/js/main.js') }}"></script>
        <!-- tawk chat JS
  ============================================ -->
        <script src="{{ asset('dashboard-assets/js/tawk-chat.js') }}"></script>
</body>

</html> 
