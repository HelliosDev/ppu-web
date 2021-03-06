    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="logo-pro">
                            <a href="{{route('src.index')}}"><img class="main-logo" src="{{asset('assetLogin/img/logo/logo.png')}}" alt="" /></a>
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
                                                    <li class="nav-item"><a href="#" class="nav-link">Home</a>
                                                    </li>
                                                    <li class="nav-item"><a href="#" class="nav-link">About</a>
                                                    </li>
                                                    <li class="nav-item"><a href="#" class="nav-link">Services</a>
                                                    </li>
                                                    <li class="nav-item dropdown res-dis-nn">
                                                        <a href="#" data-toggle="dropdown" role="button"
                                                            aria-expanded="false" class="nav-link dropdown-toggle">Project
                                                            <span class="angle-down-topmenu"><i
                                                                    class="fa fa-angle-down"></i></span></a>
                                                        <div role="menu" class="dropdown-menu animated zoomIn">
                                                            <a href="#" class="dropdown-item">Documentation</a>
                                                            <a href="#" class="dropdown-item">Expert Backend</a>
                                                            <a href="#" class="dropdown-item">Expert FrontEnd</a>
                                                            <a href="#" class="dropdown-item">Contact Support</a>
                                                        </div>
                                                    </li>
                                                    <li class="nav-item"><a href="#" class="nav-link">Support</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                            <div class="header-right-info">
                                                <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                    <li class="nav-item"><a href="#" data-toggle="dropdown" role="button"
                                                            aria-expanded="false" class="nav-link dropdown-toggle"><i
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
                                                                    <a href="#">
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
                                                                    <a href="#">
                                                                        <div class="notification-icon">
                                                                            <i class="fa fa-cloud edu-cloud-computing-down"
                                                                                aria-hidden="true"></i>
                                                                        </div>
                                                                        <div class="notification-content">
                                                                            <span class="notification-date">16 Sept</span>
                                                                            <h2>Sulaiman din</h2>
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
                                                            <img src="{{asset('assetLogin/img/product/pro4.jpg')}}" alt="" />
                                                            <span class="admin-name">Prof.Anderson</span>
                                                            <i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
                                                        </a>
                                                        <ul role="menu"
                                                            class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                            <li>
                                                                <a href="myProfile.html">
                                                                    <span class="edu-icon edu-user-rounded author-log-ic">
                                                                    </span>MyProfile</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <span class="edu-icon edu-locked author-log-ic">
                                                                    </span>LogOut</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="nav-item nav-setting-open"><a href="#" data-toggle="dropdown"
                                                            role="button" aria-expanded="false"
                                                            class="nav-link dropdown-toggle"><i
                                                                class="educate-icon educate-menu"></i></a>
    
                                                        <div role="menu"
                                                            class="admintab-wrap menu-setting-wrap menu-setting-wrap-bg dropdown-menu animated zoomIn">
                                                            <ul class="nav nav-tabs custon-set-tab">
                                                                <li class="active"><a data-toggle="tab"
                                                                        href="#Notes">Notes</a>
                                                                </li>
                                                                <li><a data-toggle="tab" href="#Projects">Projects</a>
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
                                                                                    <a href="#">
                                                                                        <div class="notes-list-flow">
                                                                                            <div class="notes-img">
                                                                                                <img src="{{asset('assetLogin/img/contact/4.jpg')}}"
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
                                                                                    <a href="#">
                                                                                        <div class="notes-list-flow">
                                                                                            <div class="notes-img">
                                                                                                <img src="{{asset('assetLogin/contact/1.jpg')}}"
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
                                                                            <h2><i class="fa fa-cube"></i> Latest projects
                                                                            </h2>
                                                                            <p> You have 20 projects. 5 not completed.</p>
                                                                        </div>
                                                                        <div
                                                                            class="project-st-list-area project-st-menu-scrollbar">
                                                                            <ul class="projects-st-menu-list">
                                                                                <li>
                                                                                    <a href="#">
                                                                                        <div class="project-list-flow">
                                                                                            <div
                                                                                                class="projects-st-heading">
                                                                                                <h2>Web Development</h2>
                                                                                                <p> The point of using Lorem
                                                                                                    Ipsum is that it has a
                                                                                                    more or less normal.</p>
                                                                                                <span
                                                                                                    class="project-st-time">1
                                                                                                    hours ago</span>
                                                                                            </div>
                                                                                            <div
                                                                                                class="projects-st-content">
                                                                                                <p>Completion with: 28%</p>
                                                                                                <div
                                                                                                    class="progress progress-mini">
                                                                                                    <div style="width: 28%;"
                                                                                                        class="progress-bar progress-bar-danger hd-tp-1">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <p>Project end: 4:00 pm -
                                                                                                    12.06.2014</p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#">
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
                                                                            </ul>
                                                                        </div>
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