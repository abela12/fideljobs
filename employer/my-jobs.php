<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'include/header.php';
    $msgClass = "alert alert-secondary";
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
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Jobs</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Applied Jobs</a></li>
                    </ol>
                </div>
                <!-- row -->

                <!-- My Job Content -->
                <?php include 'job/my-job-content.php' ?>
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
    <script>
    // $(document).ready(function() {
    //     alert('hello')
    //     showdata();

    //     function showdata() {
    //         output = "";
    //         stat = "";
    //         $.ajax({
    //             url: "job/retive.php",
    //             method: "GET",
    //             dataType: "JSON",
    //             success: function(data) {
    //                 console.log(data)
    //                 if (data) {
    //                     x = data;
    //                 } else {
    //                     x = "";
    //                 }
    //                 for (i = 0; i < x.length; i++) {
    //                     console.log(x[i].job_title)
    //                     if (x[i].job_status == "Opened") {
    //                         stat = "it works"
    //                     }
    //                     output += "<tr><td>" +
    //                         x[i].job_title +
    //                         "</td><td>" +
    //                         x[i].job_title +
    //                         "</td><td>" +
    //                         x[i].job_title +
    //                         "</td><td>" +

    //                         x[i].job_title +
    //                         "</td><td>" +
    //                         x[i].job_title +
    //                         "</td><td>" +
    //                         x[i].job_title +
    //                         "</td><td><a href='view-job.php?id=" + x[i].id +
    //                         "'><i class='fa fa-address-card fa-2x text-warning'></i></a><a href='view-job.php?id=" +
    //                         x[i].id +
    //                         "'><i class='fa fa-trash-o fa-2x text-danger'></i></a><a href='view-job.php?id=" +
    //                         x[i].id +
    //                         "'><i class='fa fa-check-circle fa-2x text-primary'></i></a></td></tr>";
    //                 }
    //                 $("#tbody").html(output);

    //             },

    //         });
    //     }
    // });
    </script>

</body>

</html>