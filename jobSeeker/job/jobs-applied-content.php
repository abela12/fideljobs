<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Applied Jobs List</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="display min-w850">
                        <thead>
                            <tr>
                                <th>Job Title</th>
                                <th>Job Type</th>
                                <th>Salary</th>

                                <th>Job Location</th>
                                <th>Applied at</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $select_applied_job = mysqli_query($conn, "SELECT job.id , applicants.date as applied_at,  applicants.status AS remarkes, `user_id`, `job_title`, `job_email`, `job_short_description`, `job_description`, `job_tags`, `job_experience`, `job_type`, `job_apply_type`, `job_experience_level`, `job_external_url`, `job_sector`, `job_salary_type`, `job_salary_currency`, `job_salary_min`, `job_salary_max`, `job_career_level`, `job_qualifications`, `job_preferred_sex`, `job_location`, `job_deadline`, `job_post_date`, `job_status` FROM `job` INNER JOIN applicants on applicants.job_id= job.id INNER JOIN users on users.id = applicants.jobseeker_id WHERE applicants.jobseeker_id = '$jobseeker_id'");
                            $applied_job_num = mysqli_num_rows($select_applied_job);
                            if ($applied_job_num > 0) {


                                while ($data = mysqli_fetch_assoc($select_applied_job)) {
                                    $job_title = $data['job_title'];
                                    $job_type = $data['job_type'];
                                    $job_salary_type = $data['job_salary_type'];
                                    $job_location = $data['job_location'];
                                    $applied_at = $data['applied_at'];
                                    $applied_at = timePosted($applied_at);
                                    $remarkes = $data['remarkes'];
                                    $btnClass = "";
                                    if ($remarkes == 'Approve') {
                                        $btnClass = "badge-success";
                                    }
                                    if ($remarkes == 'Pending') {
                                        $btnClass = "badge-warning";
                                    }

                                    if ($remarkes == 'Rejected') {
                                        $btnClass = "badge-danger";
                                    }

                            ?>
                            <tr>
                                <td><?php echo htmlspecialchars($job_title) ?></td>
                                <td><?php echo htmlspecialchars($job_type) ?></td>

                                <td><?php echo htmlspecialchars($job_salary_type) ?></td>


                                <td><?php echo htmlspecialchars($job_location) ?></td>

                                <td><?php echo htmlspecialchars($applied_at) ?></td>

                                <td> <span class="badge light <?php echo $btnClass ?>"><?php echo $remarkes ?></span>
                                </td>

                            </tr>
                            <?php
                                }
                            }

                            ?>






                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Job Title</th>
                                <th>Job Type</th>
                                <th>Salary</th>

                                <th>Job Location</th>
                                <th>Applied at</th>
                                <th>Status</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>