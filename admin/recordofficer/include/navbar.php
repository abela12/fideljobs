<div class="nk-header nk-header-fixed is-light">
    <div class="container-fluid">
        <div class="nk-header-wrap">
            <div class="nk-menu-trigger d-xl-none ml-n1">
                <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em
                        class="icon ni ni-menu"></em></a>
            </div>
            <div class="nk-header-brand d-xl-none">
                <a href="html/index.html" class="logo-link">
                    <img class="logo-light logo-img" src="./images/logo.png" srcset="./images/logo2x.png 2x" alt="logo">
                    <img class="logo-dark logo-img" src="./images/logo-dark.png" srcset="./images/logo-dark2x.png 2x"
                        alt="logo-dark">
                </a>
            </div><!-- .nk-header-brand -->
            <div class="nk-header-news d-none d-xl-block">
                <div class="nk-news-list">
                    <a class="nk-news-item" href="#">
                        <div class="nk-news-icon">
                            <em class="icon ni ni-card-view"></em>
                        </div>
                        <div class="nk-news-text">
                            <p>Kebele Management System</p>
                            <em class="icon ni ni-external"></em>
                        </div>
                    </a>
                </div>
            </div><!-- .nk-header-news -->
            <div class="nk-header-tools">
                <ul class="nk-quick-nav">
                    <li class="dropdown user-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <div class="user-toggle">
                                <div class="user-avatar sm">
                                    <div class="user-avatar user-avatar-sm bg-warning">
                                        <img src="./images/<?php echo  $_SESSION['userPhoto']; ?>" alt="">
                                    </div>
                                </div>
                                <div class="user-info d-none d-md-block">
                                    <div class="user-status"><?php echo $_SESSION['role']; ?></div>
                                    <div class="user-name dropdown-indicator"><?php echo $_SESSION['fullName']; ?></div>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-right dropdown-menu-s1">
                            <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                <div class="user-card">
                                    <div class="user-avatar user-avatar-sm bg-warning">
                                        <img src="./images/<?php echo  $_SESSION['userPhoto']; ?>" alt="">
                                    </div>
                                    <div class="user-name">
                                        <span class="tb-lead"><?php echo $_SESSION['userName']; ?></span>
                                    </div>
                                </div>
                                <!-- <div class="user-card">
                                    <div class="user-avatar">
                                        <img src="../images/<?php echo  $_SESSION['userPhoto']; ?>" alt="">
                                    </div>
                                    <div class="user-info">
                                        <span class="lead-text">Resident</span>
                                        <span class="sub-text">ashu@kebelemanagementsystem.com</span>
                                    </div>
                                </div> -->
                            </div>
                            <div class="dropdown-inner">
                                <ul class="link-list">
                                    <li><a href="recordofficer/view_profile.php"><em
                                                class="icon ni ni-user-alt"></em><span>View
                                                Profile</span></a></li>

                                    <li><a class="dark-switch" href="#"><em class="icon ni ni-moon"></em><span>Dark
                                                Mode</span></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="dropdown-inner">
                                <ul class="link-list">
                                    <li><a href="./logout.php"><em class="icon ni ni-signout"></em><span>Sign
                                                out</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </li><!-- .dropdown -->

                </ul><!-- .nk-quick-nav -->
            </div><!-- .nk-header-tools -->
        </div><!-- .nk-header-wrap -->
    </div><!-- .container-fliud -->
</div>