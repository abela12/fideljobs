<div class="content-body">
    <!-- row -->

    <div class="container-fluid">
        <div class="form-head d-flex mb-0 mb-lg-4 align-items-start">
            <div class="mr-auto d-none d-lg-block">
                <h2 class="text-black font-w600 mb-1">Dashboard</h2>
                <p class="mb-0">View Job Details</p>
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
        <?php if ($msg == 'yes') : ?>

        <div class="<?php echo $msgClass ?> solid alert-dismissible fade show col-md-8 ml-3">
            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none"
                stroke-linecap="round" stroke-linejoin="round" class="mr-2">
                <path
                    d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3">
                </path>
            </svg>
            <strong>Done!</strong> Job Successfully Closed 🌝
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i
                        class="mdi mdi-close"></i></span>
            </button>
        </div>

        <?php endif; ?>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">

                    <div class="ml-0 ml-sm-4 ml-sm-0">
                        <div class="row">
                            <div class="col-12">
                                <div class="right-box-padding">

                                    <div class="read-content">
                                        <?php

                                        $fetch_company_profile = mysqli_query($conn, "SELECT * FROM `company_profile` WHERE `user_id` = '$employer_id'");
                                        $check_company_profile_num_row = mysqli_num_rows($fetch_company_profile);
                                        if ($check_company_profile_num_row > 0) {
                                            while ($company_data = mysqli_fetch_assoc($fetch_company_profile)) {
                                                $company_name = $company_data['company_name'];
                                                $company_short_description = $company_data['company_short_description'];
                                                $company_description = $company_data['company_description'];
                                                $company_location = $company_data['company_location'];
                                            }
                                        } ?>
                                        <?php
                                        $my_job = mysqli_query($conn, "SELECT * FROM `job` WHERE `id` ='$job_id'");
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
                                        ?>
                                        <div class="media pt-3">
                                            <img class="mr-2 rounded" width="50" alt="image"
                                                src="assets/images/avatar/1.jpg">
                                            <div class="media-body mr-2">
                                                <h5 class="text-primary mb-0 mt-1">Job by <?php echo $company_name ?>
                                                </h5>
                                                <p class="mb-0 text-danger">Dead line
                                                    <?php echo htmlspecialchars($job_deadline) ?></p>
                                            </div>


                                        </div>
                                        <hr>
                                        <div class="media mb-2 mt-3">
                                            <div class="media-body"><span class="pull-right"></span>
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

                                            <hr>
                                        </div>
                                        <div class="text-right">
                                            <a href="view-job.php?id=<?php echo $job_id ?>&&action=Closed"
                                                class="btn btn-outline-danger">Close Job</a>

                                        </div>

                                        <?php
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
</div>