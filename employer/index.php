<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'include/header.php' ?>

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
        <?php include 'include/navheader.php' ?>
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
            <!-- row -->
            <div class="container-fluid">
                <div class="form-head d-flex mb-0 mb-lg-4 align-items-start">
                    <div class="mr-auto d-none d-lg-block">
                        <h2 class="text-black font-w600">Employer Dashboard Page</h2>
                        <div>
                            <a href="javascript:void(0);" class="fs-18 text-primary font-w600">Employer / </a>
                            <a href="javascript:void(0);" class="fs-18"></a>
                        </div>
                    </div>
                    <div class="d-none d-lg-flex align-items-center">
                        <div class="text-right">
                            <h3 class="fs-20 text-black mb-0">
                                <?php date_default_timezone_set("Africa/Addis_Ababa");
                                echo "The time in " . date_default_timezone_get() . " is " . date("H:i:s"); ?>
                            </h3>
                            <span class="fs-14"><?php echo date('y/m/d') ?></span>
                        </div>
                        <a class="ml-4 text-black p-3 rounded border text-center width60" href="javascript:void(0);">
                            <i class="las la-cog scale5"></i>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <input name="somedate" type="date" min="<?php echo date('y/m/d') ?>">
                    <script>
                    var today = new Date().toISOString().split('T')[0];
                    document.getElementsByName("somedate")[0].setAttribute('min', today);
                    </script>

                    <?php //include 'include/job-count.php' 
                    ?>

                </div>
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

    <!--**********************************
        Scripts
    ***********************************-->
    <?php include 'include/script.php' ?>


</body>

</html>