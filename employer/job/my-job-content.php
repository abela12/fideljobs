<?php if ($msg == 'yes') : ?>

<div class="<?php echo $msgClass ?> solid alert-dismissible fade show col-md-8">
    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none"
        stroke-linecap="round" stroke-linejoin="round" class="mr-2">
        <path
            d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3">
        </path>
    </svg>
    <strong>Done!</strong> Job Successfully Deleted 🌝
    <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i
                class="mdi mdi-close"></i></span>
    </button>
</div>

<?php endif; ?>

<div class="row">

    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Posted Jobs List</h4>

            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="display min-w850">
                        <thead>
                            <tr>
                                <th>Job Title</th>
                                <th>Job Type</th>
                                <th>Experience Level</th>

                                <th>DeadLine</th>
                                <th>Application</th>
                                <th>Status</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>


                            <?php
                            $user_id = $_SESSION['id'];
                            $my_job = mysqli_query($conn, "SELECT * FROM `job` WHERE `job_status` != 'delete' AND user_id ='$user_id'");
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
                                $job_status = $data['job_status'];
                                $btnClass = "";
                                if ($job_status == 'Opened') {
                                    $btnClass = "badge-success";
                                }
                                if ($job_status == 'Pending') {
                                    $btnClass = "badge-warning";
                                }
                                if ($job_status == 'Closed') {
                                    $btnClass = "badge-danger";
                                }
                                if ($job_status == 'Rejected') {
                                    $btnClass = "badge-danger";
                                }
                                $select_applicants = mysqli_query($conn, "SELECT job.id , `user_id`, `job_title` FROM `job` INNER JOIN applicants on job.id = applicants.job_id WHERE user_id ='$user_id' AND job.id= '$id'");
                                $select_applicants_num = mysqli_num_rows($select_applicants);
                            ?>
                            <tr>
                                <td><?php echo htmlspecialchars($job_title) ?></td>
                                <td><?php echo htmlspecialchars($job_type) ?></td>
                                <td><?php echo htmlspecialchars($job_experience_level) ?></td>

                                <td><?php echo htmlspecialchars($job_deadline) ?></td>
                                <td>
                                    <a href="view_applicants.php?job_id=<?php echo $id ?>" draggable="false"><abbr
                                            data-title="View Applicants">(<?php echo htmlspecialchars($select_applicants_num) ?>)applicants
                                        </abbr></a>

                                </td>
                                <td> <span
                                        class="badge light <?php echo $btnClass ?>"><?php echo htmlspecialchars($job_status) ?></span>
                                </td>
                                <td>
                                    <a href="view-job.php?id=<?php echo htmlspecialchars($id) ?>"><i
                                            class="fa fa-address-card fa-2x text-warning"></i></a>
                                    <a href="my-jobs.php?jobId=<?php echo htmlspecialchars($id) ?>&&action=delete"><i
                                            class="fa fa-trash-o fa-2x text-danger"></i></a>
                                    <a href="my-jobs.php"><i class="fa fa-check-circle fa-2x text-primary"></i></a>
                                </td>

                            </tr>
                            <?php
                            }


                            ?>


                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Job Title</th>
                                <th>Job Type</th>
                                <th>Experience Level</th>

                                <th>DeadLine</th>
                                <th>Application</th>
                                <th>Status</th>
                                <th>Action</th>

                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>