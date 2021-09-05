<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'include/header.php';
    $msgClass = "alert alert-success";
    $msg = "";

    if (isset($_GET['jobId'])) {

        $jobId = intval($_GET['jobId']);
        if (isset($_GET['action']) && $_GET['action'] == "delete") {
            $delete_job = mysqli_query($conn, "UPDATE `job` SET `job_status`= 'delete' WHERE id = '$jobId'");
            if ($delete_job) {
                $msgClass = "alert alert-secondary";
                $msg = "yes";
                // header("location:my-jobs.php");
            }
        }
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


                <!-- Post/Add Job Content 🚀 -->
                <?php include 'job/post-jobs-content.php' ?>
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