<!DOCTYPE html>
<html lang="zxx" class="js">

<?php include './include/header.php' ?>
<?php include '../database/database.php' ?>
<?php include '../include/session.php' ?>
<?php require '../include/function.php' ?>
<?php
//login confirmation
confirm_logged_in();

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
                                    <div class="card-inner card-inner-lg">

                                        <div class="right-box-padding">

                                            <div class="read-content">

                                                <?php
                                                $jobseeker_Id = $_SESSION['id'];
                                                if (isset($_GET['job_id']) && $_GET['job_id'] != '') {
                                                    $job_id = intval($_GET['job_id']);
                                                    // store the IDs of the recently viewed posts, in order to not increment the counter if the same job seeker view them again.
                                                    // if (!isset($_SESSION['recent_posts'][$job_id])) {
                                                    //     $update_views = mysqli_query($conn, "UPDATE `views_count` SET `views`=`views` + 1 WHERE `job_id` = '$job_id'");
                                                    //     $_SESSION['recent_posts'][$job_id] = 1;
                                                    // }
                                                    $update_views = mysqli_query($conn, "UPDATE `views_count` SET `views`=`views` + 1 WHERE `job_id` = '$job_id'");
                                                }
                                                $my_job = mysqli_query($conn, "SELECT * FROM `job` WHERE `id` ='$job_id'");
                                                $my_job_count = mysqli_query($conn, "SELECT * FROM `job` WHERE `id` ='$job_id'");

                                                $num_row = mysqli_num_rows($my_job_count);
                                                if ($num_row > 0) {


                                                    while ($data = mysqli_fetch_assoc($my_job)) {
                                                        $id = $data['id'];
                                                        $user_id = $data['user_id'];
                                                        $job_title = $data['job_title'];
                                                        $job_email = $data['job_email'];
                                                        $job_description = $data['job_description'];
                                                        $job_tags = $data['job_tags'];
                                                        $job_experience = $data['job_experience'];
                                                        $job_type = $data['job_type'];
                                                        $job_apply_type = $data['job_apply_type'];
                                                        $job_experience_level = $data['job_experience_level'];
                                                        $job_external_url = $data['job_external_url'];
                                                        $job_sector = $data['job_sector'];
                                                        $job_salary_type = $data['job_salary_type'];
                                                        $job_salary_currency = $data['job_salary_currency'];
                                                        $job_salary_min = $data['job_salary_min'];
                                                        $job_salary_max = $data['job_salary_max'];
                                                        $job_career_level = $data['job_career_level'];
                                                        $job_qualifications = $data['job_qualifications'];
                                                        $job_preferred_sex = $data['job_preferred_sex'];
                                                        $job_location = $data['job_location'];
                                                        $job_deadline = $data['job_deadline'];
                                                        $job_post_date = $data['job_post_date'];
                                                        list($year, $month, $day) = explode("-", $data['job_deadline']);
                                                        $monthNum  = 3;
                                                        $dateObj   = DateTime::createFromFormat('!m', $monthNum);
                                                        $monthName = $dateObj->format('F'); // March
                                                        $job_status = $data['job_status'];
                                                        $current_date = date("Y-m-d");
                                                        $dateDiff = dateDifference("$current_date", "$job_deadline");
                                                        if ($dateDiff >= 0) {
                                                            $deadline = true;
                                                        } else {
                                                            $deadline = false;
                                                        }
                                                        // Job Company Name
                                                        $fetch_company_profile = mysqli_query($conn, "SELECT * FROM `company_profile` WHERE `user_id` = '$user_id'");
                                                        $company_profile_result = mysqli_num_rows($fetch_company_profile);
                                                        if ($company_profile_result > 0) {
                                                            while ($company_data = mysqli_fetch_assoc($fetch_company_profile)) {
                                                                $company_name = $company_data['company_name'];
                                                                $company_short_description = $company_data['company_short_description'];
                                                                $company_description = $company_data['company_description'];
                                                                $company_location = $company_data['company_location'];
                                                            }
                                                        }
                                                ?>

                                                <div class="media pt-3">
                                                    <div class="user-avatar">
                                                        <span>AB</span>
                                                    </div>
                                                    <div class="media-body mr-2">
                                                        <h5 class="text-primary mb-0 mt-1">Job by
                                                            <?php echo isset($company_name) ? $company_name : '' ?>
                                                        </h5>
                                                        <p class="mb-0 text-danger">Dead line
                                                            <?php echo htmlspecialchars($job_deadline) ?>
                                                            <strong
                                                                class="text-primary"><?php echo '(' . $dateDiff . ' days left)' ?></strong>
                                                        </p>
                                                        </p>
                                                        <p><?php
                                                                    ?></p>
                                                        <?php //echo date("Y-m-d") 
                                                                ?>
                                                    </div>


                                                </div>
                                                <hr>
                                                <div class="media mb-2 mt-3">
                                                    <div class="media-body"><span class="pull-right">fidel jobs</span>
                                                        <h5 class="my-1 text-primary">
                                                            <?php echo htmlspecialchars($job_title) ?>
                                                        </h5>
                                                        <p class="read-content-email">
                                                            company email,
                                                            <strong><?php echo htmlspecialchars($job_email) ?></strong>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="read-content-body">
                                                    <div class="row">
                                                        <div class="basic-list-group col-md-6 col-sm-6">
                                                            <ul class="list-group">
                                                                <li
                                                                    class="list-group-item d-flex justify-content-between align-items-center">
                                                                    Category <strong class="">
                                                                        <?php echo htmlspecialchars($job_sector) ?></strong>
                                                                </li>
                                                                <li
                                                                    class="list-group-item d-flex justify-content-between align-items-center">
                                                                    Location <strong
                                                                        class=""><?php echo htmlspecialchars($job_location) ?></strong>
                                                                </li>
                                                                <li
                                                                    class="list-group-item d-flex justify-content-between align-items-center">
                                                                    Career Level: <strong
                                                                        class=""><?php echo htmlspecialchars($job_career_level) ?></strong>
                                                                </li>
                                                                <li
                                                                    class="list-group-item d-flex justify-content-between align-items-center">
                                                                    Salary <strong class="">
                                                                        <?php echo htmlspecialchars($job_salary_type) ?></strong>
                                                                </li>

                                                            </ul>
                                                        </div>
                                                        <div class="cal col-md-2 col-sm-4">
                                                            <div class="month"><?php echo htmlspecialchars($year) ?>
                                                            </div>
                                                            <div class="date">
                                                                <?php $monthNum  = $month;
                                                                        $dateObj   = DateTime::createFromFormat('!m', $monthNum);
                                                                        $monthName = $dateObj->format('F'); // March

                                                                        ?>
                                                                <?php echo htmlspecialchars($day) . ',' . substr_replace($monthName, "", 3);
                                                                        ?>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <h3 class="my-3 text-primary">
                                                        Job Description
                                                    </h3>
                                                    <p class="mb-2"><?php echo $job_description ?>
                                                    </p>


                                                    <div class="profile-skills mb-5">
                                                        <h4 class="text-primary mb-2">Skills 💪</h4>
                                                        <?php
                                                                $skills = explode(',', $job_tags);
                                                                foreach ($skills as $skill) {
                                                                    echo  '<a href="javascript:void()"
                    class="btn btn-primary light btn-xs mb-1 ml-2">' . $skill . '</a>';
                                                                }

                                                                ?>



                                                    </div>
                                                    <div class="row">
                                                        <div class="profile-personal-info col-xl-6">
                                                            <h4 class="text-primary mb-4">Job Information</h4>
                                                            <div class="row mb-2">
                                                                <div class="col-md-4">
                                                                    <h5 class="f-w-500">Job Title<span
                                                                            class="pull-right">:</span>
                                                                    </h5>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <span><?php echo htmlspecialchars($job_title) ?></span>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-2">
                                                                <div class="col-md-4">
                                                                    <h5 class="f-w-500">Job Sector <span
                                                                            class="pull-right">:</span>
                                                                    </h5>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <span><?php echo htmlspecialchars($job_sector) ?></span>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-2">
                                                                <div class="col-md-4">
                                                                    <h5 class="f-w-500">Job Experience <span
                                                                            class="pull-right">:</span>
                                                                    </h5>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <span><?php echo htmlspecialchars($job_experience) ?></span>
                                                                </div>
                                                            </div>


                                                            <div class="row mb-2">
                                                                <div class="col-md-4">
                                                                    <h5 class="f-w-500">Job Type <span
                                                                            class="pull-right">:</span>
                                                                    </h5>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <span><?php echo htmlspecialchars($job_type) ?></span>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-2">
                                                                <div class="col-md-4">
                                                                    <h5 class="f-w-500">Experience Level <span
                                                                            class="pull-right">:</span></h5>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <span><?php echo htmlspecialchars($job_experience_level) ?></span>
                                                                </div>
                                                            </div>

                                                            <div class="row mb-2">
                                                                <div class="col-md-4">
                                                                    <h5 class="f-w-500">Salary Type <span
                                                                            class="pull-right">:</span>
                                                                    </h5>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <span><?php echo htmlspecialchars($job_salary_type) ?></span>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-2">
                                                                <div class="col-md-4">
                                                                    <h5 class="f-w-500">Salary Currency <span
                                                                            class="pull-right">:</span>
                                                                    </h5>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <span><?php echo htmlspecialchars($job_salary_currency) ?></span>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-2">
                                                                <div class="col-md-4">
                                                                    <h5 class="f-w-500">Min <span
                                                                            class="pull-right">:</span>
                                                                    </h5>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <span><?php echo htmlspecialchars($job_salary_min) ?></span>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-2">
                                                                <div class="col-md-4">
                                                                    <h5 class="f-w-500">Max <span
                                                                            class="pull-right">:</span>
                                                                    </h5>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <span><?php echo htmlspecialchars($job_salary_max) ?></span>
                                                                </div>
                                                            </div>


                                                        </div>
                                                        <div class="profile-personal-info col-xl-6">
                                                            <h4 class="text-primary mb-4">Other Information</h4>
                                                            <div class="row mb-2">
                                                                <div class="col-md-4">
                                                                    <h5 class="f-w-500"> Career Level <span
                                                                            class="pull-right">:</span>
                                                                    </h5>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <span><?php echo htmlspecialchars($job_career_level) ?></span>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-2">
                                                                <div class="col-md-4">
                                                                    <h5 class="f-w-500">
                                                                        Qualifications <span class="pull-right">:</span>
                                                                    </h5>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <span><?php echo htmlspecialchars($job_qualifications) ?></span>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-2">
                                                                <div class="col-md-4">
                                                                    <h5 class="f-w-500">Preferred Sex <span
                                                                            class="pull-right">:</span></h5>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <span><?php echo htmlspecialchars($job_preferred_sex) ?></span>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-2">
                                                                <div class="col-md-4">
                                                                    <h5 class="f-w-500">Job Location <span
                                                                            class="pull-right">:</span>
                                                                    </h5>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <span><?php echo htmlspecialchars($job_location) ?></span>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-2">
                                                                <div class="col-md-4">
                                                                    <h5 class="f-w-500">Deadline Date <span
                                                                            class="pull-right">:</span>
                                                                    </h5>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <span><?php echo htmlspecialchars($job_deadline) ?></span>
                                                                </div>
                                                            </div>




                                                            <div class="row mb-2">
                                                                <div class="col-md-4">
                                                                    <h5 class="f-w-500">Job Apply Type <span
                                                                            class="pull-right">:</span></h5>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <span><?php echo htmlspecialchars($job_apply_type) ?></span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <!-- <div class="read-content-attachment">
            <h6><i class="fa fa-download mb-2"></i> Attachments
                <span>(download)</span>
            </h6>
            <div class="row attachment">

                <div class="col-auto">
                    <a href="javascript:void()" class="text-muted">Attachment
                        File</a>
                </div>
            </div>
        </div> -->
                                                    <hr>
                                                </div>


                                                <?php
                                                    }


                                                    ?>
                                            </div>


                                            <?php



                                                } else {
                                                    echo "<h1>no result</h1>";
                                                }

                                        ?>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .card-preview -->
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
    <script src="./assets/js/bundle.js?ver=2.4.0"></script>
    <script src="./assets/js/scripts.js?ver=2.4.0"></script>
    <script src="./assets/js/charts/gd-default.js?ver=2.4.0"></script>
</body>

</html>