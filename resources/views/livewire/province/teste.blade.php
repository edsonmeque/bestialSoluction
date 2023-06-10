
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>CORK Admin Template - Font Icons UI Kit</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <link href="assets/css/scrollspyNav.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="plugins/font-icons/fontawesome/css/regular.css">
    <link rel="stylesheet" href="plugins/font-icons/fontawesome/css/fontawesome.css">

    <style>
        .feather-icon .icon-section {
            padding: 30px;
        }
        .feather-icon .icon-section h4 {
            color: #3b3f5c;
            font-size: 17px;
            font-weight: 600;
            margin: 0;
            margin-bottom: 16px;
        }
        .feather-icon .icon-content-container {
            padding: 0 16px;
            width: 86%;
            margin: 0 auto;
            border: 1px solid #bfc9d4;
            border-radius: 6px;
        }
        .feather-icon .icon-section p.fs-text {
            padding-bottom: 30px;
            margin-bottom: 30px;
        }
        .feather-icon .icon-container { cursor: pointer; }
        .feather-icon .icon-container svg {
            color: #3b3f5c;
            margin-right: 6px;
            vertical-align: middle;
            width: 20px;
            height: 20px;
            fill: rgba(0, 23, 55, 0.08);
        }
        .feather-icon .icon-container:hover svg {
            color: #1b55e2;
            fill: rgba(27, 85, 226, 0.23921568627450981);
        }
        .feather-icon .icon-container span { display: none; }
        .feather-icon .icon-container:hover span { color: #1b55e2; }
        .feather-icon .icon-link {
            color: #1b55e2;
            font-weight: 600;
            font-size: 14px;
        }


        /*FAB*/
        .fontawesome .icon-section {
            padding: 30px;
        }
        .fontawesome .icon-section h4 {
            color: #3b3f5c;
            font-size: 17px;
            font-weight: 600;
            margin: 0;
            margin-bottom: 16px;
        }
        .fontawesome .icon-content-container {
            padding: 0 16px;
            width: 86%;
            margin: 0 auto;
            border: 1px solid #bfc9d4;
            border-radius: 6px;
        }
        .fontawesome .icon-section p.fs-text {
            padding-bottom: 30px;
            margin-bottom: 30px;
        }
        .fontawesome .icon-container { cursor: pointer; }
        .fontawesome .icon-container i {
            font-size: 20px;
            color: #3b3f5c;
            vertical-align: middle;
            margin-right: 10px;
        }
        .fontawesome .icon-container:hover i { color: #1b55e2; }
        .fontawesome .icon-container span { color: #888ea8; display: none; }
        .fontawesome .icon-container:hover span { color: #1b55e2; }
        .fontawesome .icon-link {
            color: #1b55e2;
            font-weight: 600;
            font-size: 14px;
        }
    </style>
</head>
<body class="sidebar-noneoverflow">

    <!--  BEGIN NAVBAR  -->
    <div class="header-container">
        <header class="header navbar navbar-expand-sm">

            <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></a>

            <div class="nav-logo align-self-center">
                <a class="navbar-brand" href="index.html"><img alt="logo" src="assets/img/90x90.jpg"> <span class="navbar-brand-name">CORK</span></a>
            </div>

            <ul class="navbar-item flex-row mr-auto">
                <li class="nav-item align-self-center search-animated">
                    <form class="form-inline search-full form-inline search" role="search">
                        <div class="search-bar">
                            <input type="text" class="form-control search-form-control  ml-lg-auto" placeholder="Search...">
                        </div>
                    </form>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search toggle-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                </li>
            </ul>

            <ul class="navbar-item flex-row nav-dropdowns">
                <li class="nav-item dropdown language-dropdown more-dropdown">
                    <div class="dropdown custom-dropdown-icon">
                        <a class="dropdown-toggle btn" href="#" role="button" id="customDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/img/ca.png" class="flag-width" alt="flag"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></a>

                        <div class="dropdown-menu dropdown-menu-right animated fadeInUp" aria-labelledby="customDropdown">
                            <a class="dropdown-item" data-img-value="de" data-value="de" href="javascript:void(0);"><img src="assets/img/de.png" class="flag-width" alt="flag"> German</a>
                            <a class="dropdown-item" data-img-value="jp" data-value="jp" href="javascript:void(0);"><img src="assets/img/jp.png" class="flag-width" alt="flag"> Japanese</a>
                            <a class="dropdown-item" data-img-value="fr" data-value="fr" href="javascript:void(0);"><img src="assets/img/fr.png" class="flag-width" alt="flag"> French</a>
                            <a class="dropdown-item" data-img-value="ca" data-value="en" href="javascript:void(0);"><img src="assets/img/ca.png" class="flag-width" alt="flag"> English</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item dropdown message-dropdown">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="messageDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg><span class="badge badge-success"></span>
                    </a>
                    <div class="dropdown-menu p-0 position-absolute animated fadeInUp" aria-labelledby="messageDropdown">
                        <div class="">
                            <a class="dropdown-item">
                                <div class="">

                                    <div class="media">
                                        <div class="user-img">
                                            <div class="avatar avatar-xl">
                                                <span class="avatar-title rounded-circle">KY</span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <div class="">
                                                <h5 class="usr-name">Kara Young</h5>
                                                <p class="msg-title">ACCOUNT UPDATE</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </a>
                            <a class="dropdown-item">
                                <div class="">
                                    <div class="media">
                                        <div class="user-img">
                                            <div class="avatar avatar-xl">
                                                <span class="avatar-title rounded-circle">DA</span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <div class="">
                                                <h5 class="usr-name">Daisy Anderson</h5>
                                                <p class="msg-title">ACCOUNT UPDATE</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a class="dropdown-item">
                                <div class="">

                                    <div class="media">
                                        <div class="user-img">
                                            <div class="avatar avatar-xl">
                                                <span class="avatar-title rounded-circle">OG</span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <div class="">
                                                <h5 class="usr-name">Oscar Garner</h5>
                                                <p class="msg-title">ACCOUNT UPDATE</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </a>
                        </div>
                    </div>
                </li>

                <li class="nav-item dropdown notification-dropdown">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="notificationDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg><span class="badge badge-success"></span>
                    </a>
                    <div class="dropdown-menu position-absolute animated fadeInUp" aria-labelledby="notificationDropdown">
                        <div class="notification-scroll">

                            <div class="dropdown-item">
                                <div class="media server-log">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-server"><rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect><rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect><line x1="6" y1="6" x2="6" y2="6"></line><line x1="6" y1="18" x2="6" y2="18"></line></svg>
                                    <div class="media-body">
                                        <div class="data-info">
                                            <h6 class="">Server Rebooted</h6>
                                            <p class="">45 min ago</p>
                                        </div>

                                        <div class="icon-status">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="dropdown-item">
                                <div class="media ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                    <div class="media-body">
                                        <div class="data-info">
                                            <h6 class="">Licence Expiring Soon</h6>
                                            <p class="">8 hrs ago</p>
                                        </div>

                                        <div class="icon-status">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="dropdown-item">
                                <div class="media file-upload">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                                    <div class="media-body">
                                        <div class="data-info">
                                            <h6 class="">Kelly Portfolio.pdf</h6>
                                            <p class="">670 kb</p>
                                        </div>

                                        <div class="icon-status">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="nav-item dropdown user-profile-dropdown order-lg-0 order-1">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="user-profile-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="media">
                            <img src="assets/img/90x90.jpg" class="img-fluid" alt="admin-profile">
                            <div class="media-body align-self-center">
                                <h6><span>Hi,</span> Alan</h6>
                            </div>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </a>
                    <div class="dropdown-menu position-absolute animated fadeInUp" aria-labelledby="user-profile-dropdown">
                        <div class="">
                            <div class="dropdown-item">
                                <a class="" href="user_profile.html"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> My Profile</a>
                            </div>
                            <div class="dropdown-item">
                                <a class="" href="apps_mailbox.html"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-inbox"><polyline points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline><path d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"></path></svg> Inbox</a>
                            </div>
                            <div class="dropdown-item">
                                <a class="" href="auth_lockscreen.html"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg> Lock Screen</a>
                            </div>
                            <div class="dropdown-item">
                                <a class="" href="auth_login.html"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg> Sign Out</a>
                            </div>
                        </div>
                    </div>

                </li>
            </ul>
        </header>
    </div>
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN TOPBAR  -->
        <div class="topbar-nav header navbar" role="banner">
            <nav id="topbar">
                <ul class="navbar-nav theme-brand flex-row  text-center">
                    <li class="nav-item theme-logo">
                        <a href="index.html">
                            <img src="assets/img/90x90.jpg" class="navbar-logo" alt="logo">
                        </a>
                    </li>
                    <li class="nav-item theme-text">
                        <a href="index.html" class="nav-link"> CORK </a>
                    </li>
                </ul>

                <ul class="list-unstyled menu-categories" id="topAccordion">

                    <li class="menu single-menu">
                        <a href="#dashboard" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle autodroprown">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                <span>Dashboard</span>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="dashboard" data-parent="#topAccordion">
                            <li>
                                <a href="index.html"> Analytics </a>
                            </li>
                            <li>
                                <a href="index2.html"> Sales </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu single-menu">
                        <a href="#app" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-cpu"><rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect><rect x="9" y="9" width="6" height="6"></rect><line x1="9" y1="1" x2="9" y2="4"></line><line x1="15" y1="1" x2="15" y2="4"></line><line x1="9" y1="20" x2="9" y2="23"></line><line x1="15" y1="20" x2="15" y2="23"></line><line x1="20" y1="9" x2="23" y2="9"></line><line x1="20" y1="14" x2="23" y2="14"></line><line x1="1" y1="9" x2="4" y2="9"></line><line x1="1" y1="14" x2="4" y2="14"></line></svg>
                                <span>Apps</span>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="app" data-parent="#topAccordion">
                            <li>
                                <a href="apps_chat.html"> Chat </a>
                            </li>
                            <li>
                                <a href="apps_mailbox.html"> Mailbox </a>
                            </li>
                            <li>
                                <a href="apps_todoList.html"> Todo List </a>
                            </li>
                            <li>
                                <a href="apps_notes.html">Notes</a>
                            </li>
                            <li>
                                <a href="apps_scrumboard.html">Task Board</a>
                            </li>
                            <li>
                                <a href="apps_contacts.html">Contacts</a>
                            </li>
                            <li>
                                <a href="apps_invoice.html">Invoice List</a>
                            </li>
                            <li>
                                <a href="apps_calendar.html"> Calendar</a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu single-menu">
                        <a href="#components" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                                <span>Components</span>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="components" data-parent="#topAccordion">
                            <li>
                                <a href="component_tabs.html"> Tabs </a>
                            </li>
                            <li>
                                <a href="component_accordion.html"> Accordions  </a>
                            </li>
                            <li>
                                <a href="component_modal.html"> Modals </a>
                            </li>
                            <li>
                                <a href="component_cards.html"> Cards </a>
                            </li>
                            <li>
                                <a href="component_bootstrap_carousel.html">Carousel</a>
                            </li>
                            <li>
                                <a href="component_blockui.html"> Block UI </a>
                            </li>
                            <li>
                                <a href="component_countdown.html"> Countdown </a>
                            </li>
                            <li>
                                <a href="component_counter.html"> Counter </a>
                            </li>
                            <li>
                                <a href="component_sweetalert.html"> Sweet Alerts </a>
                            </li>
                            <li>
                                <a href="component_timeline.html"> Timeline </a>
                            </li>
                            <li>
                                <a href="component_snackbar.html"> Notifications </a>
                            </li>
                            <li>
                                <a href="component_session_timeout.html"> Session Timeout </a>
                            </li>
                            <li>
                                <a href="component_media_object.html"> Media Object </a>
                            </li>
                            <li>
                                <a href="component_list_group.html"> List Group </a>
                            </li>
                            <li>
                                <a href="component_pricing_table.html"> Pricing Tables </a>
                            </li>
                            <li>
                                <a href="component_lightbox.html"> Lightbox </a>
                            </li>
                        </ul>
                    </li>


                    <li class="menu single-menu">
                        <a href="#uiKit" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-zap"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg>
                                <span>UI Kit</span>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="uiKit" data-parent="#topAccordion">
                            <li>
                                <a href="ui_alerts.html"> Alerts </a>
                            </li>
                            <li>
                                <a href="ui_avatar.html"> Avatar </a>
                            </li>
                            <li>
                                <a href="ui_badges.html"> Badges </a>
                            </li>
                            <li>
                                <a href="ui_breadcrumbs.html"> Breadcrumbs </a>
                            </li>
                            <li>
                                <a href="ui_buttons.html"> Buttons </a>
                            </li>
                            <li>
                                <a href="ui_buttons_group.html"> Button Groups </a>
                            </li>
                            <li>
                                <a href="ui_color_library.html"> Color Library </a>
                            </li>
                            <li>
                                <a href="ui_dropdown.html"> Dropdown </a>
                            </li>
                            <li>
                                <a href="ui_infobox.html"> Infobox </a>
                            </li>
                            <li>
                                <a href="ui_jumbotron.html"> Jumbotron </a>
                            </li>
                            <li>
                                <a href="ui_loader.html"> Loader </a>
                            </li>
                            <li>
                                <a href="ui_pagination.html"> Pagination </a>
                            </li>
                            <li>
                                <a href="ui_popovers.html"> Popovers </a>
                            </li>
                            <li>
                                <a href="ui_progress_bar.html"> Progress Bar </a>
                            </li>
                            <li>
                                <a href="ui_search.html"> Search </a>
                            </li>
                            <li>
                                <a href="ui_tooltips.html"> Tooltips </a>
                            </li>
                            <li>
                                <a href="ui_treeview.html"> Treeview </a>
                            </li>
                            <li>
                                <a href="ui_typography.html"> Typography </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu single-menu">
                        <a href="#tables" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layout"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg>
                                <span>Tables</span>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="tables"  data-parent="#topAccordion">
                            <li>
                                <a href="table_basic.html"> Basic </a>
                            </li>
                            <li class="sub-sub-submenu-list">
                                <a href="#datatable" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> DataTables <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="datatable" data-parent="#datatable">
                                    <li>
                                        <a href="table_dt_basic.html"> Basic </a>
                                    </li>
                                    <li>
                                        <a href="table_dt_basic-dark.html"> Dark </a>
                                    </li>
                                    <li>
                                        <a href="table_dt_ordering_sorting.html"> Order Sorting </a>
                                    </li>
                                    <li>
                                        <a href="table_dt_multi-column_ordering.html"> Multi-Column </a>
                                    </li>
                                    <li>
                                        <a href="table_dt_multiple_tables.html"> Multiple Tables</a>
                                    </li>
                                    <li>
                                        <a href="table_dt_alternative_pagination.html"> Alt. Pagination</a>
                                    </li>
                                    <li>
                                        <a href="table_dt_custom.html"> Custom </a>
                                    </li>
                                    <li>
                                        <a href="table_dt_range_search.html"> Range Search </a>
                                    </li>
                                    <li>
                                        <a href="table_dt_html5.html"> HTML5 Export </a>
                                    </li>
                                    <li>
                                        <a href="table_dt_live_dom_ordering.html"> Live DOM ordering </a>
                                    </li>
                                    <li>
                                        <a href="table_dt_miscellaneous.html"> Miscellaneous </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="menu single-menu">
                        <a href="#forms" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clipboard"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect></svg>
                                <span>Forms</span>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="forms"  data-parent="#topAccordion">
                            <li>
                                <a href="form_bootstrap_basic.html"> Basic </a>
                            </li>
                            <li>
                                <a href="form_input_group_basic.html"> Input Group </a>
                            </li>
                            <li>
                                <a href="form_layouts.html"> Layouts </a>
                            </li>
                            <li>
                                <a href="form_validation.html"> Validation </a>
                            </li>
                            <li>
                                <a href="form_input_mask.html"> Input Mask </a>
                            </li>
                            <li>
                                <a href="form_bootstrap_select.html"> Bootstrap Select </a>
                            </li>
                            <li>
                                <a href="form_select2.html"> Select2 </a>
                            </li>
                            <li>
                                <a href="form_bootstrap_touchspin.html"> TouchSpin </a>
                            </li>
                            <li>
                                <a href="form_maxlength.html"> Maxlength </a>
                            </li>
                            <li>
                                <a href="form_checkbox_radio.html"> Checkbox &amp; Radio </a>
                            </li>
                            <li>
                                <a href="form_switches.html"> Switches </a>
                            </li>
                            <li>
                                <a href="form_wizard.html"> Wizards </a>
                            </li>
                            <li>
                                <a href="form_fileupload.html"> File Upload </a>
                            </li>
                            <li>
                                <a href="form_quill.html"> Quill Editor </a>
                            </li>
                            <li>
                                <a href="form_markdown.html"> Markdown Editor </a>
                            </li>
                            <li>
                                <a href="form_date_range_picker.html"> Date &amp; Range Picker </a>
                            </li>
                            <li>
                                <a href="form_clipboard.html"> Clipboard </a>
                            </li>
                            <li>
                                <a href="form_typeahead.html"> Typeahead </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu single-menu">
                        <a href="#page" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
                                <span>Pages</span>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="page"  data-parent="#topAccordion">
                            <li>
                                <a href="pages_helpdesk.html"> Helpdesk </a>
                            </li>
                            <li>
                                <a href="pages_contact_us.html"> Contact Form </a>
                            </li>
                            <li>
                                <a href="pages_faq.html"> FAQ </a>
                            </li>
                            <li>
                                <a href="pages_faq2.html"> FAQ 2 </a>
                            </li>
                            <li>
                                <a href="pages_privacy.html"> Privacy Policy </a>
                            </li>
                            <li>
                                <a href="pages_coming_soon.html"> Coming Soon </a>
                            </li>
                            <li>
                                <a href="user_profile.html"> Profile </a>
                            </li>
                            <li>
                                <a href="user_account_setting.html"> Account Settings </a>
                            </li>
                            <li class="sub-sub-submenu-list">
                                <a href="#pages-error" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Error <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="pages-error" data-parent="#more">
                                    <li>
                                        <a href="pages_error404.html"> 404 </a>
                                    </li>
                                    <li>
                                        <a href="pages_error500.html"> 500 </a>
                                    </li>
                                    <li>
                                        <a href="pages_error503.html"> 503 </a>
                                    </li>
                                    <li>
                                        <a href="pages_maintenence.html"> Maintanence </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="sub-sub-submenu-list">
                                <a href="#user-login" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Login <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="user-login" data-parent="#page">
                                    <li>
                                        <a href="auth_login.html"> Login </a>
                                    </li>
                                    <li>
                                        <a href="auth_login_boxed.html"> Login Boxed </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="sub-sub-submenu-list">
                                <a href="#user-register" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Register <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="user-register" data-parent="#page">
                                    <li>
                                        <a href="auth_register.html"> Register </a>
                                    </li>
                                    <li>
                                        <a href="auth_register_boxed.html"> Register Boxed </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="sub-sub-submenu-list">
                                <a href="#user-passRecovery" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Password Recovery <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="user-passRecovery" data-parent="#page">
                                    <li>
                                        <a href="auth_pass_recovery.html"> Recover ID </a>
                                    </li>
                                    <li>
                                        <a href="auth_pass_recovery_boxed.html"> Recover ID Boxed </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="sub-sub-submenu-list">
                                <a href="#user-lockscreen" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Lockscreen <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="user-lockscreen" data-parent="#page">
                                    <li>
                                        <a href="auth_lockscreen.html"> Unlock </a>
                                    </li>
                                    <li>
                                        <a href="auth_lockscreen_boxed.html"> Unlock Boxed </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="menu single-menu active">
                        <a href="#more" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg>
                                <span>More</span>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </a>
                        <ul class="collapse submenu list-unstyled show" id="more" data-parent="#topAccordion">
                            <li>
                                <a href="dragndrop_dragula.html"> Drag and Drop</a>
                            </li>
                            <li>
                                <a href="widgets.html"> Widgets </a>
                            </li>
                            <li>
                                <a href="map_jvector.html"> Vector Maps</a>
                            </li>
                            <li>
                                <a href="charts_apex.html"> Charts </a>
                            </li>
                            <li class="active">
                                <a href="fonticons.html"> Font Icons </a>
                            </li>
                            <li class="sub-sub-submenu-list">
                                <a href="#starter-kit" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Starter Kit <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>
                                <ul class="collapse list-unstyled sub-submenu eq-animated eq-fadeInUp" id="starter-kit" data-parent="#more">
                                    <li>
                                        <a href="starter_kit_blank_page.html"> Blank Page </a>
                                    </li>
                                    <li>
                                        <a href="starter_kit_breadcrumb.html"> Breadcrumb </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="../../documentation/index.html"> Documentation </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
        <!--  END TOPBAR  -->

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="container">

                <div class="container">

                    <div class="sidenav">
                        <div class="sidenav-content">
                            <a href="#font-icon_feather" class="active">Feather</a>
                            <a href="#font-icon_fontawesome">Fontawesome</a>
                        </div>
                    </div>

                    <div class="row layout-spacing layout-top-spacing feather-icon">
                        <div id="font-icon_feather" class="col-lg-12">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-content widget-content-area bx-top-6">
                                    <div class="icon-section">
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <h4>Feather</h4>

                                                <p class="">Feather is a collection of simply beautiful open source icons. Each icon is designed on a 24x24 grid with an emphasis on simplicity, consistency and usability.</p>

                                                <p class="fs-text">Check --- <a href="https://feathericons.com/" target="_blank" class="icon-link">Feather Icon Offical Website</a></p>
                                            </div>

                                            <div class="icon-content-container">

                                                <div class="row">

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="activity"></i><span class="icon-name"> activity</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="airplay"></i><span class="icon-name"> airplay</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="alert-circle"></i><span class="icon-name"> alert-circle</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="alert-octagon"></i><span class="icon-name"> alert-octagon</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="alert-triangle"></i><span class="icon-name"> alert-triangle</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="align-center"></i><span class="icon-name"> align-center</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="align-justify"></i><span class="icon-name"> align-justify</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="align-left"></i><span class="icon-name"> align-left</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="align-right"></i><span class="icon-name"> align-right</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="anchor"></i><span class="icon-name"> anchor</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="aperture"></i><span class="icon-name"> aperture</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="archive"></i><span class="icon-name"> archive</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="arrow-down"></i><span class="icon-name"> arrow-down</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="arrow-down-circle"></i><span class="icon-name"> arrow-down-circle</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="arrow-down-left"></i><span class="icon-name"> arrow-down-left</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="arrow-down-right"></i><span class="icon-name"> arrow-down-right</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="arrow-left"></i><span class="icon-name"> arrow-left</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="arrow-left-circle"></i><span class="icon-name"> arrow-left-circle</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="arrow-right"></i><span class="icon-name"> arrow-right</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="arrow-right-circle"></i><span class="icon-name"> arrow-right-circle</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="arrow-up"></i><span class="icon-name"> arrow-up</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="arrow-up-circle"></i><span class="icon-name"> arrow-up-circle</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="arrow-up-left"></i><span class="icon-name"> arrow-up-left</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="arrow-up-right"></i><span class="icon-name"> arrow-up-right</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="at-sign"></i><span class="icon-name"> at-sign</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="award"></i><span class="icon-name"> award</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="bar-chart"></i><span class="icon-name"> bar-chart</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="bar-chart-2"></i><span class="icon-name"> bar-chart-2</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="battery"></i><span class="icon-name"> battery</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="battery-charging"></i><span class="icon-name"> battery-charging</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="bell"></i><span class="icon-name"> bell</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="bell-off"></i><span class="icon-name"> bell-off</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="bluetooth"></i><span class="icon-name"> bluetooth</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="bold"></i><span class="icon-name"> bold</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="book"></i><span class="icon-name"> book</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="bookmark"></i><span class="icon-name"> bookmark</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="book-open"></i><span class="icon-name"> book-open</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="box"></i><span class="icon-name"> box</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="briefcase"></i><span class="icon-name"> briefcase</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="calendar"></i><span class="icon-name"> calendar</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="camera"></i><span class="icon-name"> camera</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="camera-off"></i><span class="icon-name"> camera-off</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="cast"></i><span class="icon-name"> cast</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="check"></i><span class="icon-name"> check</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="check-circle"></i><span class="icon-name"> check-circle</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="check-square"></i><span class="icon-name"> check-square</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="chevron-down"></i><span class="icon-name"> chevron-down</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="chevron-left"></i><span class="icon-name"> chevron-left</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="chevron-right"></i><span class="icon-name"> chevron-right</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="chevrons-down"></i><span class="icon-name"> chevrons-down</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="chevrons-left"></i><span class="icon-name"> chevrons-left</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="chevrons-right"></i><span class="icon-name"> chevrons-right</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="chevrons-up"></i><span class="icon-name"> chevrons-up</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="chevron-up"></i><span class="icon-name"> chevron-up</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="chrome"></i><span class="icon-name"> chrome</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="clipboard"></i><span class="icon-name"> clipboard</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="clock"></i><span class="icon-name"> clock</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="cloud"></i><span class="icon-name"> cloud</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="cloud-drizzle"></i><span class="icon-name"> cloud-drizzle</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="cloud-lightning"></i><span class="icon-name"> cloud-lightning</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="cloud-off"></i><span class="icon-name"> cloud-off</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="cloud-rain"></i><span class="icon-name"> cloud-rain</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="cloud-snow"></i><span class="icon-name"> cloud-snow</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="code"></i><span class="icon-name"> code</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="codepen"></i><span class="icon-name"> codepen</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="codesandbox"></i><span class="icon-name"> codesandbox</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="coffee"></i><span class="icon-name"> coffee</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="columns"></i><span class="icon-name"> columns</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="command"></i><span class="icon-name"> command</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="compass"></i><span class="icon-name"> compass</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="copy"></i><span class="icon-name"> copy</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="corner-down-left"></i><span class="icon-name"> corner-down-left</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="corner-down-right"></i><span class="icon-name"> corner-down-right</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="corner-left-down"></i><span class="icon-name"> corner-left-down</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="corner-left-up"></i><span class="icon-name"> corner-left-up</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="corner-right-down"></i><span class="icon-name"> corner-right-down</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="corner-right-up"></i><span class="icon-name"> corner-right-up</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="corner-up-left"></i><span class="icon-name"> corner-up-left</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="corner-up-right"></i><span class="icon-name"> corner-up-right</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="cpu"></i><span class="icon-name"> cpu</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="credit-card"></i><span class="icon-name"> credit-card</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="crop"></i><span class="icon-name"> crop</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="crosshair"></i><span class="icon-name"> crosshair</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="database"></i><span class="icon-name"> database</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="delete"></i><span class="icon-name"> delete</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="disc"></i><span class="icon-name"> disc</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="dollar-sign"></i><span class="icon-name"> dollar-sign</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="download"></i><span class="icon-name"> download</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="download-cloud"></i><span class="icon-name"> download-cloud</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="droplet"></i><span class="icon-name"> droplet</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="edit"></i><span class="icon-name"> edit</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="edit-2"></i><span class="icon-name"> edit-2</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="edit-3"></i><span class="icon-name"> edit-3</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="external-link"></i><span class="icon-name"> external-link</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="eye"></i><span class="icon-name"> eye</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="eye-off"></i><span class="icon-name"> eye-off</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="facebook"></i><span class="icon-name"> facebook</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="fast-forward"></i><span class="icon-name"> fast-forward</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="feather"></i><span class="icon-name"> feather</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="figma"></i><span class="icon-name"> figma</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="file"></i><span class="icon-name"> file</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="file-minus"></i><span class="icon-name"> file-minus</span>
                                                        </div>
                                                    </div>


                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="file-plus"></i><span class="icon-name"> file-plus</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="file-text"></i><span class="icon-name"> file-text</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="film"></i><span class="icon-name"> film</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="filter"></i><span class="icon-name"> filter</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="flag"></i><span class="icon-name"> flag</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="folder"></i><span class="icon-name"> folder</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="folder-minus"></i><span class="icon-name"> folder-minus</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="folder-plus"></i><span class="icon-name"> folder-plus</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="framer"></i><span class="icon-name"> framer</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="frown"></i><span class="icon-name"> frown</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="gift"></i><span class="icon-name"> gift</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="git-branch"></i><span class="icon-name"> git-branch</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="git-commit"></i><span class="icon-name"> git-commit</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="github"></i><span class="icon-name"> github</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="git-merge"></i><span class="icon-name"> git-merge</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="git-pull-request"></i><span class="icon-name"> git-pull-request</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="globe"></i><span class="icon-name"> globe</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="grid"></i><span class="icon-name"> grid</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="hard-drive"></i><span class="icon-name"> hard-drive</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="hash"></i><span class="icon-name"> hash</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="headphones"></i><span class="icon-name"> headphones</span>
                                                        </div>
                                                    </div>


                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="heart"></i><span class="icon-name"> heart</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="help-circle"></i><span class="icon-name"> help-circle</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="hexagon"></i><span class="icon-name"> hexagon</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="home"></i><span class="icon-name"> home</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="image"></i><span class="icon-name"> image</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="inbox"></i><span class="icon-name"> inbox</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="info"></i><span class="icon-name"> info</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="instagram"></i><span class="icon-name"> instagram</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="italic"></i><span class="icon-name"> italic</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="key"></i><span class="icon-name"> key</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="layers"></i><span class="icon-name"> layers</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="layout"></i><span class="icon-name"> layout</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="life-buoy"></i><span class="icon-name"> life-buoy</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="link"></i><span class="icon-name"> link</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="link-2"></i><span class="icon-name"> link-2</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="linkedin"></i><span class="icon-name"> linkedin</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="list"></i><span class="icon-name"> list</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="loader"></i><span class="icon-name"> loader</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="lock"></i><span class="icon-name"> lock</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="log-in"></i><span class="icon-name"> log-in</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="log-out"></i><span class="icon-name"> log-out</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="mail"></i><span class="icon-name"> mail</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="map"></i><span class="icon-name"> map</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="map-pin"></i><span class="icon-name"> map-pin</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="maximize"></i><span class="icon-name"> maximize</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="maximize-2"></i><span class="icon-name"> maximize-2</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="meh"></i><span class="icon-name"> meh</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="menu"></i><span class="icon-name"> menu</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="message-circle"></i><span class="icon-name"> message-circle</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="message-square"></i><span class="icon-name"> message-square</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="mic"></i><span class="icon-name"> mic</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="mic-off"></i><span class="icon-name"> mic-off</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="minimize"></i><span class="icon-name"> minimize</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="minimize-2"></i><span class="icon-name"> minimize-2</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="minus"></i><span class="icon-name"> minus</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="minus-circle"></i><span class="icon-name"> minus-circle</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="minus-square"></i><span class="icon-name"> minus-square</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="monitor"></i><span class="icon-name"> monitor</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="moon"></i><span class="icon-name"> moon</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="more-horizontal"></i><span class="icon-name"> more-horizontal</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="more-vertical"></i><span class="icon-name"> more-vertical</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="mouse-pointer"></i><span class="icon-name"> mouse-pointer</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="move"></i><span class="icon-name"> move</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="music"></i><span class="icon-name"> music</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="navigation"></i><span class="icon-name"> navigation</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="navigation-2"></i><span class="icon-name"> navigation-2</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="octagon"></i><span class="icon-name"> octagon</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="package"></i><span class="icon-name"> package</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="paperclip"></i><span class="icon-name"> paperclip</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="pause"></i><span class="icon-name"> pause</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="pause-circle"></i><span class="icon-name"> pause-circle</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="pen-tool"></i><span class="icon-name"> pen-tool</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="percent"></i><span class="icon-name"> percent</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="phone"></i><span class="icon-name"> phone</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="phone-call"></i><span class="icon-name"> phone-call</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="phone-forwarded"></i><span class="icon-name"> phone-forwarded</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="phone-incoming"></i><span class="icon-name"> phone-incoming</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="phone-missed"></i><span class="icon-name"> phone-missed</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="phone-off"></i><span class="icon-name"> phone-off</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="phone-outgoing"></i><span class="icon-name"> phone-outgoing</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="pie-chart"></i><span class="icon-name"> pie-chart</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="play"></i><span class="icon-name"> play</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="play-circle"></i><span class="icon-name"> play-circle</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="plus"></i><span class="icon-name"> plus</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="plus-circle"></i><span class="icon-name"> plus-circle</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="plus-square"></i><span class="icon-name"> plus-square</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="pocket"></i><span class="icon-name"> pocket</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="power"></i><span class="icon-name"> power</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="printer"></i><span class="icon-name"> printer</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="radio"></i><span class="icon-name"> radio</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="refresh-ccw"></i><span class="icon-name"> refresh-ccw</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="refresh-cw"></i><span class="icon-name"> refresh-cw</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="repeat"></i><span class="icon-name"> repeat</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="rewind"></i><span class="icon-name"> rewind</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="rotate-ccw"></i><span class="icon-name"> rotate-ccw</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="rotate-cw"></i><span class="icon-name"> rotate-cw</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="rss"></i><span class="icon-name"> rss</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="save"></i><span class="icon-name"> save</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="scissors"></i><span class="icon-name"> scissors</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="search"></i><span class="icon-name"> search</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="send"></i><span class="icon-name"> send</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="server"></i><span class="icon-name"> server</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="settings"></i><span class="icon-name"> settings</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="share"></i><span class="icon-name"> share</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="share-2"></i><span class="icon-name"> share-2</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="shield"></i><span class="icon-name"> shield</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="shield-off"></i><span class="icon-name"> shield-off</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="shopping-bag"></i><span class="icon-name"> shopping-bag</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="shopping-cart"></i><span class="icon-name"> shopping-cart</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="shuffle"></i><span class="icon-name"> shuffle</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="sidebar"></i><span class="icon-name"> sidebar</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="skip-back"></i><span class="icon-name"> skip-back</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="skip-forward"></i><span class="icon-name"> skip-forward</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="slack"></i><span class="icon-name"> slack</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="slash"></i><span class="icon-name"> slash</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="sliders"></i><span class="icon-name"> sliders</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="smartphone"></i><span class="icon-name"> smartphone</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="smile"></i><span class="icon-name"> smile</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="speaker"></i><span class="icon-name"> speaker</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="star"></i><span class="icon-name"> star</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="stop-circle"></i><span class="icon-name"> stop-circle</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="sun"></i><span class="icon-name"> sun</span>
                                                        </div>
                                                    </div>


                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="sunrise"></i><span class="icon-name"> sunrise</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="sunset"></i><span class="icon-name"> sunset</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="tablet"></i><span class="icon-name"> tablet</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="tag"></i><span class="icon-name"> tag</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="target"></i><span class="icon-name"> target</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="terminal"></i><span class="icon-name"> terminal</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="thermometer"></i><span class="icon-name"> thermometer</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="thumbs-down"></i><span class="icon-name"> thumbs-down</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="thumbs-up"></i><span class="icon-name"> thumbs-up</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="toggle-left"></i><span class="icon-name"> toggle-left</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="toggle-right"></i><span class="icon-name"> toggle-right</span>
                                                        </div>
                                                    </div>


                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="trash"></i><span class="icon-name"> trash</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="trash-2"></i><span class="icon-name"> trash-2</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="trello"></i><span class="icon-name"> trello</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="trending-down"></i><span class="icon-name"> trending-down</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="trending-up"></i><span class="icon-name"> trending-up</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="triangle"></i><span class="icon-name"> triangle</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="truck"></i><span class="icon-name"> truck</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="tv"></i><span class="icon-name"> tv</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="twitter"></i><span class="icon-name"> twitter</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="type"></i><span class="icon-name"> type</span>
                                                        </div>
                                                    </div>


                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="umbrella"></i><span class="icon-name"> umbrella</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="underline"></i><span class="icon-name"> underline</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="unlock"></i><span class="icon-name"> unlock</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="upload"></i><span class="icon-name"> upload</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="upload-cloud"></i><span class="icon-name"> upload-cloud</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="user"></i><span class="icon-name"> user</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="user-check"></i><span class="icon-name"> user-check</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="user-minus"></i><span class="icon-name"> user-minus</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="user-plus"></i><span class="icon-name"> user-plus</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="users"></i><span class="icon-name"> users</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="user-x"></i><span class="icon-name"> user-x</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="video"></i><span class="icon-name"> video</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="video-off"></i><span class="icon-name"> video-off</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="voicemail"></i><span class="icon-name"> voicemail</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="volume"></i><span class="icon-name"> volume</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="volume-1"></i><span class="icon-name"> volume-1</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="volume-2"></i><span class="icon-name"> volume-2</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="volume-x"></i><span class="icon-name"> volume-x</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="watch"></i><span class="icon-name"> watch</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="wifi"></i><span class="icon-name"> wifi</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="wifi-off"></i><span class="icon-name"> wifi-off</span>
                                                        </div>
                                                    </div>


                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="wind"></i><span class="icon-name"> wind</span>
                                                        </div>
                                                    </div>


                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="x"></i><span class="icon-name"> x</span>
                                                        </div>
                                                    </div>


                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="x-circle"></i><span class="icon-name"> x-circle</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="x-octagon"></i><span class="icon-name"> x-octagon</span>
                                                        </div>
                                                    </div>


                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="x-square"></i><span class="icon-name"> x-square</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="youtube"></i><span class="icon-name"> youtube</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="zap"></i><span class="icon-name"> zap</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="zap-off"></i><span class="icon-name"> zap-off</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="zoom-in"></i><span class="icon-name"> zoom-in</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i data-feather="zoom-out"></i><span class="icon-name"> zoom-out</span>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div> <!-- Arrows Icons -->

                                    <div class="code-section-container show-code">

                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;!-- Use SVG code directly --&gt;
&lt;svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"&gt;&lt;polyline points="22 12 18 12 15 21 9 3 6 12 2 12"&gt;&lt;/polyline&gt;&lt;/svg&gt;

&lt;!-- OR --&gt;

&lt;!-- Use it inside &lt;i&gt; tag  --&gt;
&lt;i data-feather="activity"&gt;&lt;/i&gt;

&lt;!-- with js code  --&gt;
&lt;script type="text/javascript"&gt;
    feather.replace();
&lt;/script&gt;</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row layout-spacing fontawesome">
                        <div id="font-icon_fontawesome" class="col-lg-12">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-content widget-content-area bx-top-6">
                                    <div class="icon-section">


                                        <div class="row">

                                            <div class="col-xl-12">
                                                <h4>Fontawesome</h4>
                                                <p class="">Get vector icons and social logos on your website with Font Awesome, the web's most popular icon set and toolkit.</p>
                                                <p class="fs-text">Download complete fonts library. Check --- <a href="https://fontawesome.com/" target="_blank" class="icon-link">FontAwesome Official Website</a></p>

                                            </div>

                                            <div class="icon-content-container">
                                                <div class="row">

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i class="far fa-address-book"></i><span class="icon-name"> address-book</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i class="far fa-bell"></i><span class="icon-name"> bell</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i class="far fa-bookmark"></i><span class="icon-name"> bookmark</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i class="far fa-calendar"></i><span class="icon-name"> calendar</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i class="far fa-chart-bar"></i><span class="icon-name"> chart-bar</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i class="far fa-clipboard"></i><span class="icon-name"> clipboard</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i class="far fa-clone"></i><span class="icon-name"> clone</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i class="far fa-comment-dots"></i><span class="icon-name"> comment-dots</span>
                                                        </div>
                                                    </div>


                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i class="far fa-compass"></i><span class="icon-name"> compass</span>
                                                        </div>
                                                    </div>


                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i class="far fa-copy"></i><span class="icon-name"> copy</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i class="far fa-edit"></i><span class="icon-name"> edit</span>
                                                        </div>
                                                    </div>


                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i class="far fa-envelope"></i><span class="icon-name"> envelope</span>
                                                        </div>
                                                    </div>


                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i class="far fa-eye"></i><span class="icon-name"> eye</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i class="far fa-file"></i><span class="icon-name"> file</span>
                                                        </div>
                                                    </div>


                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i class="far fa-flag"></i><span class="icon-name"> flag</span>
                                                        </div>
                                                    </div>


                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i class="far fa-folder"></i><span class="icon-name"> folder</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i class="far fa-gem"></i><span class="icon-name"> gem</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i class="far fa-heart"></i><span class="icon-name"> heart</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i class="far fa-image"></i><span class="icon-name"> image</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i class="far fa-map"></i><span class="icon-name"> map</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i class="far fa-paper-plane"></i><span class="icon-name">paper-plane</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i class="far fa-save"></i><span class="icon-name"> save</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i class="far fa-smile"></i><span class="icon-name"> smile</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i class="far fa-star"></i><span class="icon-name"> star</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i class="far fa-sticky-note"></i><span class="icon-name"> avianex</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i class="far fa-times-circle"></i><span class="icon-name"> times-circle</span>
                                                        </div>
                                                    </div>

                                                     <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i class="far fa-user"></i><span class="icon-name"> user</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i class="far fa-trash-alt"></i><span class="icon-name"> trash-alt</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i class="far fa-registered"></i><span class="icon-name"> registered</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i class="far fa-keyboard"></i><span class="icon-name"> keyboard</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i class="far fa-hourglass"></i><span class="icon-name"> hourglass</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i class="far fa-dot-circle"></i><span class="icon-name"> dot-circle</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i class="far fa-copyright"></i><span class="icon-name"> copyright</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i class="far fa-clock"></i><span class="icon-name"> clock</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i class="far fa-building"></i><span class="icon-name"> far fa-building</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i class="far fa-file-code"></i><span class="icon-name">file-code</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i class="far fa-hdd"></i><span class="icon-name"> HDD</span>
                                                        </div>
                                                    </div>

                                                   <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i class="far fa-life-ring"></i><span class="icon-name"> life-ring</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i class="far fa-money-bill-alt"></i><span class="icon-name"> money-bill-alt</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i class="far fa-lightbulb"></i><span class="icon-name"> lightbulb</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i class="far fa-question-circle"></i><span class="icon-name"> question-circle</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i class="far fa-square"></i><span class="icon-name"> square</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i class="far fa-list-alt"></i><span class="icon-name"> list-alt</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto py-3">
                                                        <div class="icon-container">
                                                            <i class="far fa-thumbs-up"></i><span class="icon-name"> thumbs-up</span>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>


                                    </div>

                                    <div class="code-section-container">

                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;!-- Use fontawesome with a class on i tag directly --&gt;
&lt;i class="far fa-address-book"&gt;&lt;/i&gt;
</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                </div>
        <div class="footer-wrapper">
                <div class="footer-section f-section-1">
                    <p class="">Copyright © 2020 <a target="_blank" href="https://designreset.com">DesignReset</a>, All rights reserved.</p>
                </div>
                <div class="footer-section f-section-2">
                    <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></p>
                </div>
            </div>
        </div>
        <!--  END CONTENT AREA  -->


    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <script src="assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/app.js"></script>

    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="plugins/highlight/highlight.pack.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- END GLOBAL MANDATORY STYLES -->
    <script src="assets/js/scrollspyNav.js"></script>
    <script src="plugins/font-icons/feather/feather.min.js"></script>
    <script type="text/javascript">
        feather.replace();
    </script>
</body>
</html>
