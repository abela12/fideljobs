<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'include/header.php' ?>
    <?php include 'action/addEducation.php' ?>






</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <?php include 'include/preloder.php' ?>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <?php include 'include/navlogo.php' ?>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Chat box start
        ***********************************-->
        <?php include 'include/chatbox.php' ?>
        <!--**********************************
            Chat box End
        ***********************************-->




        <!--**********************************
            Header start
        ***********************************-->
        <?php include 'include/navbar.php' ?>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <?php include 'include/sidbar.php' ?>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="page-titles">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Profile</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Update Profile</a></li>
                    </ol>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Profile Banner -->
                        <?php include 'include/profile-banner.php' ?>
                    </div>
                </div>
                <div class="row">

                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="profile-blog mb-5">
                                    <h5 class="text-primary d-inline">About Me</h5>
                                    <img src="assets/images/avatar/1.jpg" alt="" class="img-fluid mt-4 mb-4 w-100">
                                    <h4>Fullstack Developer</h4>
                                    <p class="mb-0">My name is alpha coder. I'm 22 years old freelance website
                                        designer, Originally born in Addis Ababa, Ethiopia, finished high school in my
                                        townhome, and now I'm learning Computer Science at St'marry University</p>
                                </div>
                                <div>
                                    <span>add language</span>
                                    <button type="button" class="btn btn-primary btn-sm mb-2" data-toggle="modal"
                                        data-target=".bd-example-modal-lg"><i class="fa fa-plus-circle"></i></button>
                                </div>
                                <div>
                                    <span>Add Social Media</span>
                                    <button type="button" class="btn btn-success mb-2 btn-sm" data-toggle="modal"
                                        data-target=".add-social-media"><i class="fa fa-plus-circle"></i></button>
                                </div>
                                <div>
                                    <span>Add Certificate</span>
                                    <button type="button" class="btn btn-warning mb-2 btn-sm" data-toggle="modal"
                                        data-target=".add-certificate"><i class="fa fa-plus-circle"></i></button>
                                </div>



                                <button type="button" class="btn btn-warning mb-2 btn-sm" data-toggle="modal"
                                    data-target=".add-education-modal">Add Education</button>
                                <button type="button" class="btn btn-danger mb-2 btn-sm" data-toggle="modal"
                                    data-target=".highest-education-modal">Add Highest
                                    Education</button>
                                <button type="button" class="btn btn-primary btn-sm mb-2" data-toggle="modal"
                                    data-target=".work-experience-modal">Add Work Experience</button>





                            </div>

                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="profile-tab">
                                    <div class="custom-tab-1">
                                        <ul class="nav nav-tabs">
                                            <li class="nav-item"><a href="#my-posts" data-toggle="tab"
                                                    class="nav-link active show">Portfolio</a>
                                            </li>
                                            <li class="nav-item"><a href="#about-me" data-toggle="tab"
                                                    class="nav-link">About Me</a>
                                            </li>
                                            <li class="nav-item"><a href="#profile-settings" data-toggle="tab"
                                                    class="nav-link">Setting</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div id="my-posts" class="tab-pane fade active show">

                                            </div>
                                            <div id="about-me" class="tab-pane fade">
                                                <div class="profile-about-me">
                                                    <div class="pt-4 border-bottom-1 pb-3">
                                                        <h4 class="text-primary">About Me</h4>
                                                        <p class="mb-2">My name is Alpha Coder. I'm 22 years old
                                                            freelance website
                                                            designer, Originally born in Addis Ababa, Ethiopia, finished
                                                            high
                                                            school in my townhome, and now I'm learning Computer
                                                            Science at St'marry University.
                                                            My work is entirely based around the website, Back-end
                                                            development, mobile apps development, and Website Hosting.
                                                            My active work life consists of maintaining freelance
                                                            clients
                                                            and traveling to different cities doing different websites,
                                                            mobile app developments, and database development.</p>

                                                    </div>
                                                </div>
                                                <div class="profile-skills mb-5">
                                                    <h4 class="text-primary mb-2">Skills</h4>
                                                    <a href="javascript:void()"
                                                        class="btn btn-primary light btn-xs mb-1">Java</a>
                                                    <a href="javascript:void()"
                                                        class="btn btn-primary light btn-xs mb-1">Wordpress</a>
                                                    <a href="javascript:void()"
                                                        class="btn btn-primary light btn-xs mb-1">Photoshop</a>

                                                </div>
                                                <div class="profile-lang  mb-5">
                                                    <h4 class="text-primary mb-2">Language</h4>
                                                    <a href="javascript:void()" class="text-muted pr-3 f-s-16"><i
                                                            class="flag-icon flag-icon-us"></i> English</a>
                                                    <a href="javascript:void()" class="text-muted pr-3 f-s-16"><i
                                                            class="flag-icon flag-icon-fr"></i> Amharic</a>
                                                    <a href="javascript:void()" class="text-muted pr-3 f-s-16"><i
                                                            class="flag-icon flag-icon-bd"></i> Oromegna</a>
                                                </div>
                                                <div class="profile-personal-info">
                                                    <h4 class="text-primary mb-4">Personal Information</h4>
                                                    <div class="row mb-2">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">Name <span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-9"><span>Alpha Coder</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">Email <span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-9"><span>alpha@blackcoder.com</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">Availability <span
                                                                    class="pull-right">:</span></h5>
                                                        </div>
                                                        <div class="col-9"><span>Full Time (Free Lancer)</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">Age <span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-9"><span>22</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">Location <span
                                                                    class="pull-right">:</span></h5>
                                                        </div>
                                                        <div class="col-9"><span>Ethiopia ,Addis Abeba, Bole</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">Year Experience <span
                                                                    class="pull-right">:</span></h5>
                                                        </div>
                                                        <div class="col-9"><span>02 Year Experiences</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="profile-settings" class="tab-pane fade">
                                                <?php include 'include/profile-settings.php' ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <?php include 'modal/language-modal.php' ?>
                <?php include 'include/profile-modal.php' ?>
                <?php include 'modal/social-media-modal.php'
                ?>
                <?php include 'modal/certificate-modal.php'
                ?>
                <?php include 'modal/education-modal.php' ?>
                <?php include 'modal/experiences-modal.php' ?>
                <?php include 'modal/highest-education-modal.php' ?>
                <?php include 'modal/work-experience-modal.php' ?>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <?php include 'include/footer.php' ?>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--removeIf(production)-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <?php include 'include/script.php' ?>







</body>

</html>