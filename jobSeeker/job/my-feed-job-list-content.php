<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="form-head d-flex mb-0 mb-lg-4 align-items-start">
            <div class="mr-auto d-none d-lg-block">
                <h2 class="text-black font-w600 mb-1">Dashboard</h2>
                <p class="mb-0">Welcome to ፊደል Jobs Dashboard</p>
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
        <div class="row">
            <div class="col-lg-8 col-xxl-12">
                <div class="row">
                    <div class="col-lg-6 col-sm-6">
                        <div class="card widget-stat ">
                            <div class="card-body p-4">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <p class="fs-18 mb-2 wspace-no">Total Jobs</p>
                                        <h1 class="fs-36 font-w600 text-black mb-0">260</h1>
                                    </div>
                                    <span class="ml-3 bg-primary text-white">
                                        <i class="flaticon-381-promotion"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="card widget-stat">
                            <div class="card-body p-4">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <p class="fs-18 mb-2 wspace-no">Total Apply Jobs </p>
                                        <h1 class="fs-36 font-w600 d-flex align-items-center text-black mb-0">
                                            65</h1>
                                    </div>
                                    <span class="ml-3 bg-warning text-white">
                                        <i class="flaticon-381-user-7"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
            <div class="col-lg-6 col-xxl-12">
                <div class="row">


                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-header border-0  pb-5">
                                <h3 class="fs-20 text-black mb-0">My Feed</h3>

                            </div>
                            <?php
                            $rowperpage = 3;

                            // counting total number of posts
                            $allcount_query = "SELECT count(*) as allcount FROM job WHERE job_type LIKE '%Part Time%' AND job_sector LIKE '%s%' AND job_tags LIKE '%s%' AND job_preferred_sex LIKE '%s%'";
                            $allcount_result = mysqli_query($conn, $allcount_query);
                            $allcount_fetch = mysqli_fetch_array($allcount_result);
                            $allcount = $allcount_fetch['allcount'];

                            // select first 5 posts
                            // $query = ;
                            $result = mysqli_query($conn, "SELECT * FROM job  WHERE
                             job_type LIKE '%$job_type%'
                               OR (job_tags LIKE '%$skill_name_one%') AND job_preferred_sex LIKE '%$Sex%' order by id asc limit 0,25");
                            $check_num_row = mysqli_num_rows($result);
                            if ($check_num_row > 0) {
                                // $my_job = mysqli_query($conn, "SELECT * FROM `job` WHERE 1");
                                while ($data = mysqli_fetch_assoc($result)) {
                                    $id = $data['id'];
                                    $user_id = $data['user_id'];
                                    $job_title = $data['job_title'];
                                    $job_email = $data['job_email'];
                                    $job_description = $data['job_description'];
                                    $job_short_description = $data['job_short_description'];

                                    $short_description = substr($job_short_description, 0, 160) . "...";

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
                            <div class="jobs card-body margin-top">
                                <div class="card-header border-0  pb-0">
                                    <h3 class="fs-20 text-black mb-0"></h3>
                                    <div class="dropdown ml-auto">
                                        <div class="btn-link" data-toggle="dropdown">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24"></rect>
                                                    <circle fill="#000000" cx="12" cy="5" r="2"></circle>
                                                    <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                    <circle fill="#000000" cx="12" cy="19" r="2"></circle>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item text-black" href="javascript:;">Details</a>
                                            <a class="dropdown-item text-black" href="javascript:;">Details</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">


                                    <div class="mb-4 mb-md-0 mr-5">
                                        <div class="job-post-item-header d-flex align-items-center">
                                            <h2 class="mr-3 text-black h3"><?php echo htmlspecialchars($job_title) ?>
                                            </h2>
                                            <div class="badge-wrap">
                                                <span
                                                    class="bg-warning  text-white badge  badge-sm py-2 px-3"><?php echo htmlspecialchars($job_type) ?></span>
                                            </div>
                                        </div>
                                        <div class="job-post-item-body d-block d-md-flex">
                                            <p><?php echo $short_description ?></p>


                                        </div>
                                    </div>

                                    <div class="ml-auto d-flex">
                                        <a href="job-details.php?job_id=<?php echo $id ?>"
                                            class="btn btn-outline-warning btn-sm py-2 mr-1">Apply
                                            Job</a>
                                    </div>
                                </div>

                            </div>
                            <?php }
                            } ?>



                            <div class="form-group">
                                <h2 class="feed-load-more btn btn-outline-primary">Load More</h2>
                                <input type="hidden" id="row" value="0">
                                <input type="hidden" id="all" value="<?php echo $allcount; ?>">

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>