<header class="main-header">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
    </a>
    <!-- Logo -->
    <a href="index.html" class="logo">
        <!-- mini logo -->
        <b class="logo-mini">
            <span class="light-logo"><img src="../images/logo-light.png" alt="logo" /></span>
            <span class="dark-logo"><img src="../images/logo-dark.png" alt="logo" /></span>
        </b>
        <!-- logo-->
        <span class="logo-lg">
            {{-- <img
          src="../images/logo-light-text.png"
          alt="LMS"
          class="light-logo"
        /> --}}
            <h3>LMS</h3>
            <img src="../images/logo-dark-text.png" alt="logo" class="dark-logo" />
        </span>
    </a>
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top">
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                {{-- <li class="search-box">
            <a class="nav-link hidden-sm-down" href="javascript:void(0)"
              ><i class="iconsmind-Magnifi-Glass2"></i
            ></a>
            <form class="app-search" style="display: none">
              <input
                type="text"
                class="form-control"
                placeholder="Search &amp; enter"
              />
              <a class="srh-btn"><i class="ti-close"></i></a>
            </form>
          </li> --}}
                <!-- Notifications -->




                <li id=notificationbell class="dropdown notifications-menu" style="display: none">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="iconsmind-Bell"></i>
                    </a>
                    <ul class="dropdown-menu scale-up">
                        <li class="header" style="color:red">Stage Changed To:-</li>


                        <li id=stage class="header"></li>


                    </ul>
                </li>
                <!-- User Account-->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="iconsmind-User"></i>
                    </a>
                    <ul class="dropdown-menu scale-up">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="../images/login.png" class="float-left rounded-circle" alt="User Image" />

                            <p>
                                {{ Auth::user()->name }}
                            </p>
                        </li>

                        <!-- Menu Body -->
                        <li class="user-body">
                            <div class="row no-gutters">
                                {{-- <div class="col-12 text-left">
                                    <a href="#"><i class="ion ion-person"></i> My Profile</a>
                                </div>
                                <div class="col-12 text-left">
                                    <a href="#"><i class="ion ion-email-unread"></i> Inbox</a>
                                </div>
                                <div class="col-12 text-left">
                                    <a href="#"><i class="ion ion-settings"></i> Setting</a>
                                </div>
                                <div role="separator" class="divider col-12"></div>
                                <div class="col-12 text-left">
                                    <a href="#"><i class="ti-settings"></i> Account Setting</a>
                                </div>
                                <div role="separator" class="divider col-12"></div> --}}
                                <div class="col-12 text-left">
                                    <a class="dropdown-item" href="{{ route('logout') }} "
                                        onclick="event.preventDefault();
                                                      document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                            <!-- /.row -->
                        </li>
                    </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->
                <li>
                    <a href="#" data-toggle="control-sidebar"><i class="iconsmind-Gears-2"></i></a>
                </li>

            </ul>
        </div>
    </nav>
</header>
