<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'include/header.php';

    $msgClass = "alert alert-secondary";
    $msg = "";

    if (isset($_GET['job_id']) && $_GET['job_id'] != "" && isset($_GET['jobseekerid']) && $_GET['jobseekerid'] != "") {

        $jobseekerid = $_GET['jobseekerid'];
        $jobId = $_GET['job_id'];

        if (isset($_GET['action']) && $_GET['action'] == "Approve") {
            $approve_job = mysqli_query(
                $conn,
                "UPDATE applicants set `status`='Approve' WHERE job_id= '$jobId' AND jobseeker_id='$jobseekerid'"
            );
            if ($approve_job) {
                $msgClass = "alert alert-success";
                $msg = "yes";
                $msgContent = "User Successfully Approved";
                // header("location:my-jobs.php");
            } else {
                $msgClass = "alert alert-warning";
                $msg = "yes";
            }
        }
        if (isset($_GET['action']) && $_GET['action'] == "Rejected") {
            $rejected_job = mysqli_query(
                $conn,
                "UPDATE applicants set `status`='Rejected' WHERE job_id= '$jobId' AND jobseeker_id='$jobseekerid'"
            );
            if ($rejected_job) {
                $msgClass = "alert alert-success";
                $msg = "yes";
                $msgContent = "User Successfully Rejected";
                // header("location:my-jobs.php");
            } else {
                $msgClass = "alert alert-warning";
                $msg = "yes";
            }
        }
    }
    if (isset($_GET['job_id'])) {
        $jobId = intval($_GET['job_id']);
    } else {
        // $jobId = "";
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
                        <li class="breadcrumb-item"><a href="my-jobs.php">Jobs</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Applied Jobs</a></li>
                    </ol>
                </div>
                <!-- row -->

                <!-- My Job Content -->
                <?php include 'job/view_applicants_content.php' ?>
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
    <!-- Required vendors -->
    <?php include 'include/script.php' ?>


</body>

</html>