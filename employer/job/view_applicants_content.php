<?php if ($msg == 'yes') : ?>

<div class="<?php echo $msgClass ?> solid alert-dismissible fade show col-md-8">
    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none"
        stroke-linecap="round" stroke-linejoin="round" class="mr-2">
        <path
            d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3">
        </path>
    </svg>
    <strong>Done!</strong>
    <?php echo $msgContent ?>🌝
    <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i
                class="mdi mdi-close"></i></span>
    </button>
</div>

<?php endif; ?>

<div class="row">

    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Applicants Jobs List</h4>

            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="display min-w850">
                        <thead>
                            <tr>
                                <th>Applicant Name</th>
                                <th>Job Title</th>
                                <th>Job Type</th>

                                <th>Applied at</th>
                                <!-- <th>Applicant P.Number</th> -->
                                <th>Remarks</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <!-- FIXME: view applicants not working -->

                            <!-- SELECT job.id ,users.username, `user_id`, `job_title`,`job_type`,applicants.date as appliedAt FROM `job` INNER JOIN applicants on job.id = applicants.job_id INNER JOIN users on applicants.jobseeker_id = users.id WHERE user_id ='36' AND job.id= 12 -->
                            <?php
                            $user_id = $_SESSION['id'];
                            $my_job = mysqli_query($conn, "SELECT job.id as jobId ,users.username as jobseekerUsername , `user_id`, `job_title`,`job_type`,applicants.date as appliedAt, applicants.status AS applicantsStatus, applicants.jobseeker_id as jobseekerId FROM `job` INNER JOIN applicants on job.id = applicants.job_id INNER JOIN users on applicants.jobseeker_id = users.id WHERE user_id ='$user_id' AND job.id= '$jobId'");
                            while ($data = mysqli_fetch_assoc($my_job)) {
                                $jobId = $data['jobId'];
                                $user_id = $data['user_id'];
                                $job_title = $data['job_title'];
                                // $job_email = $data['job_email'];
                                $jobseekerUsername = $data['jobseekerUsername'];
                                $appliedAt = $data['appliedAt'];
                                $applicantsStatus = $data['applicantsStatus'];
                                $jobseekerId = $data['jobseekerId'];
                                $job_type = $data['job_type'];
                                // $job_experience_level = $data['job_experience_level'];
                                // $job_external_url = $data['job_external_url'];
                                // $job_sector = $data['job_sector'];
                                // $job_salary_type = $data['job_salary_type'];
                                // $job_salary_currency = $data['job_salary_currency'];
                                // $job_salary_min = $data['job_salary_min'];
                                // $job_salary_max = $data['job_salary_max'];
                                // $job_career_level = $data['job_career_level'];
                                // $job_qualifications = $data['job_qualifications'];
                                // $job_preferred_sex = $data['job_preferred_sex'];
                                // $job_location = $data['job_location'];
                                // $job_deadline = $data['job_deadline'];
                                // $job_post_date = $data['job_post_date'];
                                // $job_status = $data['job_status'];
                                $btnClass = "";
                                if ($applicantsStatus == 'Approve') {
                                    $btnClass = "badge-success";
                                }
                                if ($applicantsStatus == 'Pending') {
                                    $btnClass = "badge-warning";
                                }

                                if ($applicantsStatus == 'Rejected') {
                                    $btnClass = "badge-danger";
                                }
                                // $select_applicants = mysqli_query($conn, "SELECT job.id , `user_id`, `job_title` FROM `job` INNER JOIN applicants on job.id = applicants.job_id WHERE user_id ='$user_id' AND job.id= '$id'");

                                // $select_applicants_num = mysqli_num_rows($select_applicants);  
                            ?>
                            <tr>
                                <td><?php echo htmlspecialchars($jobseekerUsername) ?></td>
                                <td><?php echo htmlspecialchars($job_title) ?></td>
                                <td><?php echo htmlspecialchars($job_type) ?></td>

                                <td><?php echo htmlspecialchars($appliedAt) ?></td>

                                <td> <span
                                        class="badge light <?php echo $btnClass ?>"><?php echo htmlspecialchars($applicantsStatus) ?></span>
                                </td>
                                <td>
                                    <a
                                        href="view_applicants_details.php?job_seeker_username=<?php echo htmlspecialchars($jobseekerUsername) ?>"><i
                                            class="fa fa-address-card fa-2x text-warning"></i></a>
                                    <a href="view_applicants.php?job_id=<?php echo htmlspecialchars($jobId) ?>&&jobseekerid=<?php echo $jobseekerId ?>&&action=Rejected"
                                        onClick="return confirm('Are you sure you want to Rejected this user?')"><i
                                            class="fa fa-trash-o fa-2x text-danger"></i></a>
                                    <a href="view_applicants.php?job_id=<?php echo htmlspecialchars($jobId) ?>&&jobseekerid=<?php echo $jobseekerId ?>&&action=Approve"
                                        onClick="return confirm('Are you sure you want to Approve this user?')"><i
                                            class="fa fa-check-circle fa-2x text-success"></i></a>
                                </td>

                            </tr>
                            <?php
                            }


                            ?>


                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Applicant Name</th>
                                <th>Job Title</th>
                                <th>Job Type</th>

                                <th>Applied at</th>
                                <!-- <th>Applicant P.Number</th> -->
                                <th>Remarks</th>
                                <th>Action</th>

                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>