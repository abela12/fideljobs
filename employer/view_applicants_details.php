<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'include/header.php';
    $msg = "";

    if (isset($_GET['id'])) {
        $job_id = intval($_GET['id']);
    }
    if (isset($_GET['action']) and $_GET['action'] == 'Closed') {
        $closed_job = mysqli_query($conn, "UPDATE `job` SET `job_status`= 'Closed' WHERE id = '$job_id'");
        if ($closed_job) {
            $msgClass = "alert alert-secondary";
            $msg = "yes";
            // header("location:my-jobs.php");
        }
    }
    if (isset($_GET['job_seeker_username']) && $_GET['job_seeker_username'] != "") {

        $job_seeker_username = escape($_GET['job_seeker_username']);
    }

    ?>

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
           FIXME: spelling error(sidebar) Sidebar start 
        ***********************************-->
        <?php include 'include/sidbar.php' ?>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <?php include 'job/view_applicants_details_content.php' ?>
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