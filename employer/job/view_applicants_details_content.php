<?php
$select_job_seeker_id = mysqli_query($conn, "SELECT * FROM `users` WHERE `username` = '$job_seeker_username'");
while ($seeker_data = mysqli_fetch_assoc($select_job_seeker_id)) {
    $jobseeker_id = $seeker_data['id'];
    $jobseeker_fname = $seeker_data['fName'];
    $jobseeker_lname = $seeker_data['lName'];
    $jobseeker_email = $seeker_data['email'];
}
include 'action/jobSeekerProfile.php'; ?>
<div class="content-body">
    <!-- row -->

    <div class="container-fluid">
        <div class="form-head d-flex mb-0 mb-lg-4 align-items-start">
            <div class="mr-auto d-none d-lg-block">
                <h2 class="text-black font-w600 mb-1">Job Seeker</h2>
                <p class="mb-0">View Job Seeker Details</p>
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

                    <div class="card-header">Job Seeker</div>
                    <?php echo $job_seeker_username;


                    ?>
                    <div class="card-body">
                        <!-- Nav tabs -->
                        <div class="default-tab">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#home"><i
                                            class="la la-user mr-2"></i>
                                        Personal Info</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#profile"><i
                                            class="lni lni-consulting mr-2"></i></i>
                                        Work Status</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#contact"><i
                                            class="la la-certificate mr-2"></i>
                                        Certificate</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#message"><i
                                            class="la la-book mr-2"></i>
                                        Education</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="home" role="tabpanel">
                                    <div class="pt-4">
                                        <h4>Personal Details</h4>

                                        <div class="profile-about-me">
                                            <div class="pt-4 border-bottom-1 pb-3">
                                                <h4 class="text-primary">About Me</h4>
                                                <?php
                                                if ($check_bio_num > 0) {

                                                ?>
                                                <p class="mb-2"><?php echo $aboutYourSelf ?></p>
                                                <?php
                                                }
                                                ?>
                                            </div>
                                        </div>



                                        <div class="profile-skills mb-5">
                                            <h4 class="text-primary mb-2">Skills</h4>

                                            <?php
                                            if ($check_skill_row > 0) {


                                                foreach ($skill_name as $skill) {
                                            ?>

                                            <a href="javascript:void()"
                                                class="btn btn-primary light btn-xs mb-1"><?php echo $skill ?></a>
                                            </h4>
                                            <?php
                                                }
                                            }
                                            ?>


                                        </div>
                                        <div class="profile-lang  mb-5">
                                            <h4 class="text-primary mb-2">Language</h4>
                                            <?php
                                            $select_language = "SELECT * FROM `jobseekerlanguages` WHERE `jobseeker_id` = '$jobseeker_id'";
                                            $language_result = fetchData($select_language);
                                            while ($language_data = mysqli_fetch_assoc($language_result)) {
                                                $languageName = $language_data['languageName'];
                                            ?>
                                            <a href="javascript:void()" class="text-muted pr-3 f-s-16"><i
                                                    class="flag-icon flag-icon-us"></i>
                                                <?php echo $languageName ?></a>
                                            <?php
                                            }



                                            ?>

                                        </div>
                                        <div class="profile-personal-info">
                                            <h4 class="text-primary mb-4">Personal Information</h4>
                                            <div class="row mb-2">
                                                <div class="col-3">
                                                    <h5 class="f-w-500">Name <span class="pull-right">:</span>
                                                    </h5>
                                                </div>
                                                <div class="col-9">
                                                    <span><?php echo $jobseeker_fname . ' ' . $jobseeker_lname ?></span>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-3">
                                                    <h5 class="f-w-500">Email <span class="pull-right">:</span>
                                                    </h5>
                                                </div>
                                                <div class="col-9"><span><?php echo $jobseeker_email ?></span>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-3">
                                                    <h5 class="f-w-500">Gender <span class="pull-right">:</span>
                                                    </h5>
                                                </div>
                                                <div class="col-9"><span><?php echo $Sex ?></span>
                                                </div>
                                            </div>
                                            <?php
                                            if ($check_work_availability > 0) {
                                            ?>
                                            <div class="row mb-2">
                                                <div class="col-3">
                                                    <h5 class="f-w-500">Availability <span class="pull-right">:</span>
                                                    </h5>
                                                </div>
                                                <div class="col-9"><span><?php echo $work_availability ?></span>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-3">
                                                    <h5 class="f-w-500">Job Type <span class="pull-right">:</span></h5>
                                                </div>
                                                <div class="col-9"><span><?php echo $job_type ?></span>
                                                </div>
                                            </div>

                                            <?php
                                            }



                                            ?>

                                            <div class="row mb-2">
                                                <div class="col-3">
                                                    <h5 class="f-w-500">Age <span class="pull-right">:</span>
                                                    </h5>
                                                </div>
                                                <div class="col-9"><span>22</span>
                                                </div>
                                            </div>
                                            <?php
                                            if ($check_address_num > 0) {
                                            ?>
                                            <div class="row mb-2">
                                                <div class="col-3">
                                                    <h5 class="f-w-500">Location <span class="pull-right">:</span></h5>
                                                </div>
                                                <div class="col-9"><span><?php echo $country . ' ,' . $city ?></span>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-3">
                                                    <h5 class="f-w-500">Phone Number <span class="pull-right">:</span>
                                                    </h5>
                                                </div>
                                                <div class="col-9"><span><?php echo $phoneNumber ?></span>
                                                </div>
                                            </div>

                                            <?php
                                            }

                                            ?>

                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="profile">
                                    <div class="pt-4">

                                        <!-- Work Experience accordion -->


                                        <?php
                                        $select_work_experience =  "SELECT * FROM `jobseeker_work_experience` WHERE `jobseeker_id` = '$jobseeker_id'";
                                        $work_experience_result = fetchData($select_work_experience);
                                        $work_num_row = checkNumRow($select_work_experience);
                                        if ($work_num_row) {
                                            $i = 1;
                                            while ($work_data = mysqli_fetch_assoc($work_experience_result)) {
                                                $show = "";

                                                if ($i == 1) {
                                                    $data = "work_experience_one";
                                                    $show = "show";
                                                }
                                                if ($i == 2) {
                                                    $data = "work_experience_two";
                                                }
                                                if ($i == 3) {
                                                    $data = "work_experience_three";
                                                }
                                                if ($i == 4) {
                                                    $data = "work_experience_four";
                                                }
                                                if ($i == 5) {
                                                    $data = "work_experience_five";
                                                }




                                                $company_name = $work_data['company_name'];
                                                $work_title = $work_data['work_title'];
                                                $start_year = $work_data['start_year'];
                                                $end_year = $work_data['end_year'];
                                                $current_work = $work_data['current_work'];
                                                $work_description = $work_data['work_description'];
                                                $current_work = $work_data['current_work'];
                                                if ($current_work == 'on') {
                                                    $accordionClass = 'accordion accordion-danger';
                                                }
                                                if ($current_work == 'off') {
                                                    $accordionClass = 'accordion accordion-primary';
                                                }



                                                $i++;
                                        ?>
                                        <div id="accordion-one" class="<?php echo $accordionClass ?>">
                                            <div class="accordion__item">
                                                <div class="accordion__header rounded-lg" data-toggle="collapse"
                                                    data-target="#<?php echo $data ?>">
                                                    <span
                                                        class="accordion__header--text"><?php echo $company_name . ' at(' . $start_year . '-' . $end_year . ')' ?><?php echo 'currently working here status (' . $current_work . ')' ?>
                                                    </span>
                                                    <span class="accordion__header--indicator"></span>
                                                </div>
                                                <div id="<?php echo $data ?>"
                                                    class="collapse accordion__body <?php echo $show ?>"
                                                    data-parent="#accordion-one">
                                                    <div class="accordion__body--text">
                                                        <?php echo $work_description ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                            }
                                        }

                                        ?>



                                    </div>
                                </div>
                                <div class="tab-pane fade" id="contact">
                                    <div class="pt-4">
                                        <h4>Certificate List</h4>
                                        <div id="DZ_W_TimeLine1" class="widget-timeline dz-scroll style-1 height370">
                                            <ul class="timeline">
                                                <?php
                                                $select_certificate = "SELECT * FROM `jobseekercertifications` WHERE `jobseeker_id` = '$jobseeker_id'";
                                                $certificate_result = fetchData($select_certificate);
                                                $check_certificate_num = checkNumRow($select_certificate);
                                                if ($check_certificate_num) {
                                                    $i = 1;
                                                    while ($certificate_data = mysqli_fetch_assoc($certificate_result)) {
                                                        $certificationsName = $certificate_data['certificationsName'];
                                                        $certificationsLink = $certificate_data['certificationsLink'];
                                                        if ($i == 1) {
                                                            $timelineClass = "timeline-badge primary";
                                                        }
                                                        if ($i == 2) {
                                                            $timelineClass = "timeline-badge info";
                                                        }
                                                        if ($i == 3) {
                                                            $timelineClass = "timeline-badge danger";
                                                        }
                                                        if ($i == 4) {
                                                            $timelineClass = "timeline-badge warning";
                                                        }
                                                        if ($i == 5) {
                                                            $timelineClass = "timeline-badge primary";
                                                        }
                                                ?>
                                                <li>
                                                    <div class="<?php echo $timelineClass ?>"></div>
                                                    <a class="timeline-panel text-muted"
                                                        href="<?php echo $certificationsLink ?>">
                                                        <!-- <span>10 minutes ago</span> -->
                                                        <h6 class="mb-0">
                                                            <?php echo htmlspecialchars($certificationsName) . '<br> ' ?>
                                                        </h6>
                                                    </a>
                                                </li>

                                                <?php
                                                    }
                                                }

                                                ?>


                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="message">
                                    <div class="pt-4">

                                        <!-- Work Experience accordion -->


                                        <?php
                                        $select_education =  "SELECT * FROM `jobseekereducation` WHERE `jobseeker_id` ='$jobseeker_id'";
                                        $education_result = fetchData($select_education);
                                        $education_num_row = checkNumRow($select_education);
                                        if ($education_num_row) {
                                            $i = 1;
                                            while ($education_data = mysqli_fetch_assoc($education_result)) {
                                                $show = "";




                                                if ($i == 1) {
                                                    $e_data = "e_education_one";
                                                    $show = "show";
                                                }
                                                if ($i == 2) {
                                                    $e_data = "e_education_two";
                                                }
                                                if ($i == 3) {
                                                    $e_data = "e_education_three";
                                                }
                                                if ($i == 4) {
                                                    $e_data = "e_education_four";
                                                }
                                                if ($i == 5) {
                                                    $e_data = "e_education_five";
                                                }




                                                $schoolName = $education_data['schoolName'];
                                                $type = $education_data['type'];
                                                $description = $education_data['description'];



                                                $i++;
                                        ?>
                                        <div id="accordion-one" class="accordion accordion-primary">
                                            <div class="accordion__item">
                                                <div class="accordion__header rounded-lg" data-toggle="collapse"
                                                    data-target="#<?php echo $e_data ?>">
                                                    <span class="accordion__header--text"><?php echo $schoolName ?>
                                                    </span>
                                                    <span class="accordion__header--indicator"></span>
                                                </div>
                                                <div id="<?php echo $e_data ?>"
                                                    class="collapse accordion__body <?php echo $show ?>"
                                                    data-parent="#accordion-one">
                                                    <div class="accordion__body--text">
                                                        <h3 class="text-primary">
                                                            <?php echo 'education type (' . $type . ')' ?></h3>
                                                        <?php echo $description ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                            }
                                        }

                                        ?>



                                    </div>
                                    <div class="pt-4">
                                        <h4 class="mb-3">Highest Education</h4>
                                        <hr>

                                        <!-- Work Experience accordion -->


                                        <?php
                                        $select_education =  "SELECT * FROM `jobseeker_highest_education` WHERE `jobseeker_id` = '$jobseeker_id'";
                                        $education_result = fetchData($select_education);
                                        $education_num_row = checkNumRow($select_education);
                                        if ($education_num_row) {
                                            $i = 1;
                                            while ($education_data = mysqli_fetch_assoc($education_result)) {
                                                $show = "";




                                                if ($i == 1) {
                                                    $h_data = "h_education_one";
                                                    $show = "show";
                                                }
                                                if ($i == 2) {
                                                    $h_data = "h_education_two";
                                                }
                                                if ($i == 3) {
                                                    $h_data = "h_education_three";
                                                }
                                                if ($i == 4) {
                                                    $h_data = "h_education_four";
                                                }
                                                if ($i == 5) {
                                                    $h_data = "h_education_five";
                                                }




                                                $education_name = $education_data['education_name'];
                                                $field_of_study = $education_data['field_of_study'];
                                                $gpa = $education_data['gpa'];

                                                $description_h = $education_data['description'];





                                                $i++;
                                        ?>
                                        <div id="accordion-one" class="accordion accordion-primary">
                                            <div class="accordion__item">
                                                <div class="accordion__header rounded-lg" data-toggle="collapse"
                                                    data-target="#<?php echo $h_data ?>">
                                                    <span class="accordion__header--text"><?php echo $education_name ?>
                                                    </span>
                                                    <span class="accordion__header--indicator"></span>
                                                </div>
                                                <div id="<?php echo $h_data ?>" class="collapse accordion__body "
                                                    data-parent="#accordion-one">
                                                    <div class="accordion__body--text">
                                                        <div class="list-group col-md-6">
                                                            <li
                                                                class="list-group-item d-flex justify-content-between align-items-center">
                                                                gpa <strong><?php echo $gpa ?></strong></li>
                                                            <li
                                                                class="list-group-item d-flex justify-content-between align-items-center">
                                                                Felid Of Study
                                                                <strong><?php echo $field_of_study ?></strong>
                                                            </li>
                                                        </div>
                                                        <?php echo $description_h ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                            }
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