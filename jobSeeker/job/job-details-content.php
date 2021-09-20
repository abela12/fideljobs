<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="form-head d-flex mb-0 mb-lg-4 align-items-start">
            <div class="mr-auto d-none d-lg-block">
                <h2 class="text-black font-w600 mb-1">Dashboard</h2>
                <p class="mb-0">Job Details</p>
            </div>
            <div class="d-none d-lg-flex align-items-center">
                <div class="text-right">
                    <h3 class="fs-20 text-black mb-0"><?php
                                                        date_default_timezone_set("Africa/Accra");
                                                        echo date("h:i:sa");
                                                        ?></h3>
                    <span class="fs-14"><?php
                                        echo "Today is " . date("Y/m/d") . "<br>";

                                        ?></span>
                </div>
                <a class="ml-4 text-black p-3 rounded border text-center width60" href="#">
                    <i class="las la-cog scale5"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">

                    <div class="ml-0 ml-sm-4 ml-sm-0">
                        <div class="row">
                            <div class="col-12">
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
                                        $my_job_count = "SELECT * FROM `job` WHERE `id` ='$job_id'";

                                        $num_row = checkNumRow($my_job_count);
                                        if ($num_row) {


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
                                        ?>
                                        <div class="toolbar mb-4" role="toolbar">
                                            <div class="btn-group mb-1">
                                                <button type="button" class="btn btn-primary light px-3"><i
                                                        class="fa fa-heart"></i></button>
                                                <button type="button" class="btn btn-primary light px-3"><i
                                                        class="fa fa-exclamation-circle"></i></button>
                                                <button type="button" class="btn btn-primary light px-3"><i
                                                        class="fa fa-trash"></i></button>
                                            </div>


                                            <div class="btn-group mb-1">
                                                <button type="button" class="btn btn-primary light dropdown-toggle v"
                                                    data-toggle="dropdown">More <span class="caret m-l-5"></span>
                                                </button>
                                                <div class="dropdown-menu"> <a class="dropdown-item"
                                                        href="javascript: void(0);">saved jobs</a> <a
                                                        class="dropdown-item" href="javascript: void(0);">report</a>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="media pt-3">
                                            <img class="mr-2 rounded" width="50" alt="image"
                                                src="assets/images/avatar/1.jpg">
                                            <div class="media-body mr-2">
                                                <h5 class="text-primary mb-0 mt-1">Job by Dashen Bank S.C
                                                </h5>
                                                <p class="mb-0 text-danger">Dead line
                                                    <?php //echo htmlspecialchars($job_deadline) 
                                                            ?></p>
                                                <p><?php
                                                            ?></p>
                                                <?php //echo date("Y-m-d") 
                                                        ?>
                                            </div>


                                        </div>
                                        <hr>
                                        <div class="media mb-2 mt-3">
                                            <div class="media-body"><span class="pull-right">07:23 AM</span>
                                                <h5 class="my-1 text-primary"><?php echo htmlspecialchars($job_title) ?>
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
                                                    <div class="month"><?php echo htmlspecialchars($year) ?></div>
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
                                                            <h5 class="f-w-500">Min <span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <span><?php echo htmlspecialchars($job_salary_min) ?></span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-md-4">
                                                            <h5 class="f-w-500">Max <span class="pull-right">:</span>
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
                                            // Check user already apply job
                                            $check_apply = mysqli_query($conn, "SELECT * FROM `applicants` WHERE `jobseeker_id` = '$jobseeker_Id' AND `job_id` = '$job_id'");
                                            $check_apply_num = mysqli_num_rows($check_apply);

                                            if ($check_apply_num > 0) {
                                                echo "<h1>you are already apply pls wait</h1>";
                                            } else {


                                                // Check Number of cvs

                                                $select_cv = mysqli_query($conn, "SELECT * FROM `jobseeker_attachment_file` WHERE `jobseeker_id` ='$jobseeker_Id'");
                                                $cv_num = mysqli_num_rows($select_cv);

                                                if ($cv_num > 0 && $job_apply_type == 'Internal' && $deadline) {
                                                    $stat = true;
                                    ?>
                                    <div class="text-right">
                                        <button type="button" class="btn btn-primary mb-2" data-toggle="modal"
                                            data-target="#applyModal">Apply</button>

                                    </div>
                                    <?php
                                                } else if (!$cv_num > 0 && $job_apply_type == 'Internal') {
                                                    echo "<h1>pls upload ch</h1>";
                                                } else if ($job_apply_type == 'External URL' && $deadline) {
                                        ?>
                                    <div>
                                        <h4>How to apply


                                        </h4>
                                        <h6>Interested applicants who fulfill the above requirements can apply through
                                            the below link</h6>
                                        <h6 class="text-center "><a target="_blank" class="text-primary"
                                                href="<?php echo $job_external_url ?>"> <strong>CLICK HERE TO
                                                    APPLY</strong> </a></h6>
                                    </div>
                                    <?php
                                                    if ($cv_num > 0) {
                                                        echo "<hr> <br>";
                                                        echo '<div class="text-right">
                                            <button type="button" class="btn btn-primary mb-2" data-toggle="modal"
                                                data-target="#applyModal">Apply</button>
    
                                        </div>';
                                                    }
                                                } else if ($job_apply_type == 'By Email' && $deadline) {
                                            ?>
                                    <hr>
                                    <div>
                                        <h4>How to apply


                                        </h4>
                                        <h6>Interested and qualified applicants fulfilling the above criteria are
                                            invited to send their CV through the</h6>
                                        <h6 class="text-center text-danger">Email Address <a
                                                href="mailto:<?php echo $job_email ?>?subject=Hi There, I have just seen your job posting on fidel jobs&body=name"><?php echo $job_email ?></a>
                                        </h6>
                                    </div>
                                    <?php
                                                    // echo "<h1>the job type is by email you can apply bey using this email</h1>";
                                                } else if (!$deadline) {
                                                    echo "job closed due to dead line";
                                                }
                                            }
                                        } else {
                                            echo "<h1>no result</h1>";
                                        }

                                ?>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Apply Job Modal Call -->
<?php include 'modal/apply-modal.php' ?>