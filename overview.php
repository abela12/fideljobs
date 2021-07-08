<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './include/header.php' ?>

</head>

<body>

    <div class="main-wrapper main-wrapper-02">

        <!-- Login Header Start -->
        <?php include 'include/'?>
        <!-- Login Header End -->

        <!-- Courses Admin Start -->
        <div class="section overflow-hidden position-relative" id="wrapper">

            <!-- Sidebar Wrapper Start -->
            <div class="sidebar-wrapper">
                <div class="menu-list">
                    <a class="active" href="courses-admin.html"><img src="assets/images/menu-icon/icon-1.png"
                            alt="Icon"></a>
                    <a href="messages.html"><img src="assets/images/menu-icon/icon-2.png" alt="Icon"></a>
                    <a href="overview.html"><img src="assets/images/menu-icon/icon-3.png" alt="Icon"></a>
                    <a href="engagement.html"><img src="assets/images/menu-icon/icon-4.png" alt="Icon"></a>
                    <a href="traffic-conversion.html"><img src="assets/images/menu-icon/icon-5.png" alt="Icon"></a>
                </div>
            </div>
            <!-- Sidebar Wrapper End -->

            <div class="page-content-wrapper py-0">

                <!-- Admin Tab Menu Start -->
                <div class="nav flex-column nav-pills admin-tab-menu">
                    <a href="overview.html" class="active">Overview</a>
                    <a href="students.html">Student’s</a>
                    <a href="reviews.html">Review’s</a>
                    <a href="engagement.html">Course Engagement</a>
                    <a href="traffic-conversion.html">Traffic & Conversion</a>
                </div>
                <!-- Admin Tab Menu End -->

                <!-- Page Content Wrapper Start -->
                <div class="main-content-wrapper">
                    <div class="container-fluid">

                        <!-- Overview Top Start -->
                        <div class="admin-top-bar flex-wrap">
                            <div class="courses-select">
                                <select>
                                    <option data-display="All Courses">All Courses</option>
                                    <option value="1">option</option>
                                    <option value="2">option</option>
                                    <option value="3">option</option>
                                    <option value="4">Potato</option>
                                </select>
                            </div>

                            <div class="overview-box">
                                <div class="single-box">
                                    <h5 class="title">Total Revenue</h5>
                                    <div class="count">$568.00</div>
                                    <p><span>$235.00</span> This months</p>
                                </div>

                                <div class="single-box">
                                    <h5 class="title">Total Enrollment’s</h5>
                                    <div class="count">2,570</div>
                                    <p><span>345</span> This months</p>
                                </div>

                                <div class="single-box">
                                    <h5 class="title">Instgructor Rating</h5>
                                    <div class="count">
                                        4.5

                                        <span class="rating-star">
                                            <span class="rating-bar" style="width: 80%;"></span>
                                        </span>
                                    </div>
                                    <p><span>58</span> This months</p>
                                </div>
                            </div>
                        </div>
                        <!-- Overview Top End -->

                        <!-- Graph Top Start -->
                        <div class="graph">
                            <div class="graph-title">
                                <h4 class="title">Get top insights about your performance</h4>

                                <div class="months-select">
                                    <select>
                                        <option data-display="Last 12 months">Last 12 months</option>
                                        <option value="1">Last 6 months</option>
                                        <option value="1">Last 3 months</option>
                                        <option value="1">Last 2 months</option>
                                        <option value="1">Last 1 months</option>
                                        <option value="1">Last 1 week</option>
                                    </select>
                                </div>
                            </div>

                            <div class="graph-content">
                                <div id="uniqueReport"></div>
                            </div>

                            <div class="graph-btn">
                                <a class="btn btn-primary btn-hover-dark" href="#">Revenue Report <i
                                        class="icofont-rounded-down"></i></a>
                            </div>
                        </div>
                        <!-- Graph Top End -->

                    </div>
                </div>
                <!-- Page Content Wrapper End -->

            </div>

        </div>
        <!-- Courses Admin End -->

        <!-- Footer Start  -->
        <?php include './include/footer.php' ?>
        <!-- Footer End -->



    </div>






    <!-- JS
    ============================================ -->

    <!-- Modernizer & jQuery JS -->
    <script src="assets/js/vendor/modernizr-3.11.2.min.js"></script>
    <script src="assets/js/vendor/jquery-3.5.1.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="assets/js/plugins/popper.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>

    <!-- Plugins JS -->
    <script src="assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="assets/js/plugins/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/plugins/video-playlist.js"></script>
    <script src="assets/js/plugins/jquery.nice-select.min.js"></script>
    <script src="assets/js/plugins/ajax-contact.js"></script>

    <!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->
    <!-- <script src="assets/js/plugins.min.js"></script> -->


    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

    <!-- Charts JS -->
    <script src="assets/js/plugins/apexcharts.min.js"></script>
    <script src="assets/js/overview.js"></script>

</body>

</html>