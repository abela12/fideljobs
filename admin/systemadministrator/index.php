<!DOCTYPE html>
<html lang="zxx" class="js">

<?php include './include/header.php' ?>
<?php include '../database/database.php' ?>
<?php include '../include/session.php' ?>
<?php require '../include/function.php' ?>
<?php require 'include/data.php' ?>

<?php
//login confirmation
confirm_logged_in();
$all  = "SELECT * FROM `users`";
$select_all = mysqli_query($conn, $all);
$count_all = mysqli_num_rows($select_all);
$job_seeker = mysqli_query($conn, "SELECT * FROM `users` WHERE `role_id`= 2");
$employer =  mysqli_query($conn, "SELECT * FROM `users` WHERE `role_id`= 3");

$count_job_seeker = mysqli_num_rows($job_seeker);
$count_employer = mysqli_num_rows($employer);

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
                                <div class="row g-4">
                                    <div class="col-sm-6 col-xxl-12">
                                        <div class="nk-order-ovwg-data buy">
                                            <div class="amount"><?php echo $count_all ?> <small
                                                    class="currenct currency-usd">User</small></div>
                                            <div class="info">Job Seeker <strong><?php echo $count_job_seeker ?> <span
                                                        class="currenct currency-usd">🌝</span></strong></div>
                                            <div class="info">Employers<strong><?php echo $count_employer ?> <span
                                                        class="currenct currency-usd">👲</span></strong></div>
                                            <div class="title"><em class="icon ni ni-arrow-down-left"></em><a
                                                    href="systemadministrator/manage_employer.php">Manage Employer</a>

                                            </div>
                                            <div class="title"><em class="icon ni ni-arrow-down-left"></em><a
                                                    href="systemadministrator/manage_jobseeker.php"> Manage Job
                                                    seeker</a>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="card card-preview">
                                    <script>
                                    window.onload = function() {




                                        var chart1 = new CanvasJS.Chart("chartContainer1", {
                                            animationEnabled: true,
                                            theme: "light2",
                                            title: {
                                                text: "Job Status- Total Jobs <?php echo $count_all_job ?>"
                                            },
                                            axisY: {
                                                suffix: "%",
                                                scaleBreaks: {
                                                    autoCalculate: true
                                                }
                                            },
                                            data: [{
                                                type: "column",
                                                yValueFormatString: "#,##0\"%\"",
                                                indexLabel: "{y}",
                                                indexLabelPlacement: "inside",
                                                indexLabelFontColor: "white",

                                                showInLegend: true,
                                                dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
                                            }]
                                        });
                                        chart1.render();

                                        var chart2 = new CanvasJS.Chart("chartContainer2", {
                                            animationEnabled: true,
                                            theme: "light2",
                                            title: {
                                                text: "Job Status- Total Jobs <?php echo $count_all_job ?>"
                                            },
                                            axisY: {
                                                suffix: "%",
                                                scaleBreaks: {
                                                    autoCalculate: true
                                                }
                                            },
                                            data: [{
                                                type: "column",
                                                yValueFormatString: "#,##0\"%\"",
                                                indexLabel: "{y}",
                                                indexLabelPlacement: "inside",
                                                indexLabelFontColor: "white",


                                                dataPoints: <?php echo json_encode($dataPoints3, JSON_NUMERIC_CHECK); ?>
                                            }]
                                        });
                                        chart2.render();

                                    }
                                    </script>
                                    <div class="row">



                                        <div class="col-md-6">
                                            <div id="chartContainer1" style="height: 370px; width: 100%;">



                                            </div><!-- .card-preview -->
                                        </div>
                                        <div class="col-md-6">
                                            <div id="chartContainer2" style="height: 370px; width: 100%;">



                                            </div><!-- .card-preview -->
                                        </div>
                                    </div>


                                </div>
                            </div>
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