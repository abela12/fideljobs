<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'include/header.php'
    ?>

    <?php
    //login confirmation
    // confirm_logged_in();

    ?>
    <style>
    .items-link a {
        color: #8b92dd;
        display: block;
        border: 1px solid #8b92dd;
        border-radius: 30px;
        padding: 4px 33px;
        text-align: center;
        margin-bottom: 25px;
    }

    .items-link a:hover {
        color: #fff;
        background: #8b92dd;
        border: 1px solid transparent;
    }

    .items-link span {
        color: #454d72;
    }

    .items-link2 {
        padding-top: 35px;
        text-align: center
    }
    </style>
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
    <div id="main-wrapper" class="right-profile">

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

        <?php include 'include/profile.php'
        ?>

        <!--**********************************
            Content body start
        ***********************************-->
        <?php include 'include/mainContent.php' ?>
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
    <!-- Required vendors -->
    <?php include 'include/script.php' ?>


</body>

</html>