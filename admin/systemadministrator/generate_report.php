<!DOCTYPE html>
<html lang="zxx" class="js">

<?php include './include/header.php' ?>
<?php include '../database/database.php' ?>
<?php include '../include/session.php' ?>
<?php require '../include/function.php' ?>
<?php

$all  = "SELECT * FROM `users`";
$select_all = mysqli_query($conn, $all);
$count_all = mysqli_num_rows($select_all);
$job_seeker = mysqli_query($conn, "SELECT * FROM `users` WHERE `role_id`= 2");
$employer =  mysqli_query($conn, "SELECT * FROM `users` WHERE `role_id`= 3");

$count_job_seeker = mysqli_num_rows($job_seeker);
$count_employer = mysqli_num_rows($employer);

$count_job_seeker = (($count_job_seeker / $count_all) * 100);
$count_employer = (($count_employer / $count_all) * 100);

$dataPoints = array(
    array("label" => "Job Seeker", "y" => $count_job_seeker),
    array("label" => "Employer", "y" => $count_employer)
);

$all_job = mysqli_query($conn, "SELECT * FROM `job`");
$count_all_job = mysqli_num_rows($all_job);
$opened_job = mysqli_query($conn, "SELECT * FROM `job` WHERE `job_status` ='Opened'");
$closed_job = mysqli_query($conn, "SELECT * FROM `job` WHERE `job_status` ='Closed'");
$delete_job = mysqli_query($conn, "SELECT * FROM `job` WHERE `job_status` ='delete'");

$count_opened_job = mysqli_num_rows($opened_job);
$count_closed_job = mysqli_num_rows($closed_job);
$count_delete_job = mysqli_num_rows($delete_job);

$count_opened_job  = (($count_opened_job / $count_all_job) * 100);
$count_closed_job  = (($count_closed_job / $count_all_job) * 100);
$count_delete_job  = (($count_delete_job / $count_all_job) * 100);
$dataPoints1 = array(
    array("label" => "Opened Job", "y" => $count_opened_job),
    array("label" => "Closed Job", "y" => $count_employer),
    array("label" => "Deleted Job", "y" => $count_delete_job)
);








?>


<body class="nk-body bg-lighter npc-general has-sidebar ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- sidebar @s -->
            <?php include './include/sidebar.php' ?>
            <!-- sidebar @e -->
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                <?php include './include/navbar.php' ?>
                <!-- main header @e -->
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">

                                </div><!-- .nk-block -->
                            </div>
                            <div class="card card-preview">
                                <script>
                                window.onload = function() {


                                    var chart = new CanvasJS.Chart("chartContainer", {
                                        theme: "light2",
                                        animationEnabled: true,
                                        exportEnabled: true,
                                        title: {
                                            text: "Fidel Job Portal Total Users= <?php echo   $count_all ?>  "

                                        },
                                        data: [{
                                            type: "pie",
                                            indexLabel: "{y}",
                                            yValueFormatString: "#,##0.00\"%\"",
                                            indexLabelPlacement: "inside",
                                            indexLabelFontColor: "#36454F",
                                            indexLabelFontSize: 18,
                                            indexLabelFontWeight: "bolder",
                                            showInLegend: true,
                                            legendText: "{label}",
                                            dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
                                        }]
                                    });
                                    chart.render();

                                    var chart1 = new CanvasJS.Chart("chartContainer1", {
                                        theme: "light2",
                                        animationEnabled: true,
                                        exportEnabled: true,
                                        title: {
                                            text: "Fidel Job Portal Total Jobs= <?php echo   $count_all ?>  "

                                        },
                                        data: [{
                                            type: "pie",
                                            indexLabel: "{y}",
                                            yValueFormatString: "#,##0.00\"%\"",
                                            indexLabelPlacement: "inside",
                                            indexLabelFontColor: "#36454F",
                                            indexLabelFontSize: 18,
                                            indexLabelFontWeight: "bolder",
                                            showInLegend: true,
                                            legendText: "{label}",
                                            dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
                                        }]
                                    });
                                    chart1.render();

                                }
                                </script>
                                <div id="chartContainer" style="height: 370px; width: 100%;">



                                </div>
                                <div id="chartContainer1" style="height: 370px; width: 100%;">



                                </div><!-- .card-preview -->
                            </div>
                        </div>
                    </div>
                    <!-- content @e -->
                    <!-- footer @s -->
                    <?php include './include/footer.php' ?>
                    <!-- footer @e -->
                </div>
                <!-- wrap @e -->
            </div>
            <!-- main @e -->
        </div>
        <!-- app-root @e -->
        <!-- JavaScript -->
        <script src="./assets/js/canvasjs.min.js"></script>
        <script src="./assets/js/bundle.js?ver=2.4.0"></script>
        <script src="./assets/js/scripts.js?ver=2.4.0"></script>
        <script src="./assets/js/charts/gd-default.js?ver=2.4.0"></script>
</body>

</html>