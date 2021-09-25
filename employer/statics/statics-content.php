<?php
$my_job = mysqli_query($conn, "SELECT * FROM `job` WHERE `job_status` != 'delete' AND user_id ='$employer_id'");
$job_count = mysqli_num_rows($my_job);

$total_jobs = mysqli_query($conn, "SELECT * FROM `job` WHERE `job_status` != 'delete'");
$total_jobs_count = mysqli_num_rows($total_jobs);

$select_approval = mysqli_query($conn, "SELECT job.id as jobId ,users.username as jobseekerUsername , `user_id`, `job_title`,`job_type`,applicants.date as appliedAt, applicants.status AS applicantsStatus, applicants.jobseeker_id as jobseekerId FROM `job` INNER JOIN applicants on job.id = applicants.job_id INNER JOIN users on applicants.jobseeker_id = users.id WHERE user_id ='$employer_id' AND applicants.status = 'Approve'");
$approval_count = mysqli_num_rows($select_approval);


$opened_job = mysqli_query($conn, "SELECT * FROM `job` WHERE `job_status` = 'Opened' AND user_id ='$employer_id'");
$opened_jobs_count = mysqli_num_rows($opened_job);


$closed_job = mysqli_query($conn, "SELECT * FROM `job` WHERE `job_status` = 'Closed' AND user_id ='$employer_id'");
$closed_jobs_count = mysqli_num_rows($closed_job);



?>





<div class="col-lg-4 col-sm-4">
    <div class="card widget-stat ">
        <div class="card-body p-4">
            <div class="media align-items-center">
                <div class="media-body">
                    <p class="fs-18 mb-2 wspace-no">Total Jobs</p>
                    <h1 class="fs-36 font-w600 text-black mb-0"><?php echo $total_jobs_count ?></h1>
                </div>
                <span class="ml-3 bg-primary text-white">
                    <i class="flaticon-381-promotion"></i>
                </span>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-4 col-sm-4">
    <div class="card widget-stat">
        <div class="card-body p-4">
            <div class="media align-items-center">
                <div class="media-body">
                    <p class="fs-18 mb-2 wspace-no">My Jobs</p>
                    <h1 class="fs-36 font-w600 d-flex align-items-center text-black mb-0"><?php echo $job_count ?>
                    </h1>
                </div>
                <span class="ml-3 bg-warning text-white">
                    <i class="flaticon-381-pad"></i>
                </span>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-4 col-sm-4">
    <div class="card widget-stat">
        <div class="card-body p-4">
            <div class="media align-items-center">
                <div class="media-body">
                    <p class="fs-18 mb-2 wspace-no">Approved JOb seeker</p>
                    <h1 class="fs-36 font-w600 d-flex align-items-center text-black mb-0">
                        <?php echo $approval_count ?>
                    </h1>
                </div>
                <span class="ml-3 bg-success text-white">
                    <i class="flaticon-381-user-8"></i>
                </span>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-4 col-sm-4">
    <div class="card widget-stat">
        <div class="card-body p-4">
            <div class="media align-items-center">
                <div class="media-body">
                    <p class="fs-18 mb-2 wspace-no">Opened Jobs</p>
                    <h1 class="fs-36 font-w600 d-flex align-items-center text-black mb-0">
                        <?php echo $opened_jobs_count ?></h1>
                </div>
                <span class="ml-3 bg-info text-white">
                    <i class="flaticon-381-notepad"></i>
                </span>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-4 col-sm-4">
    <div class="card widget-stat">
        <div class="card-body p-4">
            <div class="media align-items-center">
                <div class="media-body">
                    <p class="fs-18 mb-2 wspace-no">Closed Jobs</p>
                    <h1 class="fs-36 font-w600 d-flex align-items-center text-black mb-0">
                        <?php echo $closed_jobs_count ?></h1>
                </div>
                <span class="ml-3 bg-danger text-white">
                    <i class="flaticon-381-trash"></i>
                </span>
            </div>
        </div>
    </div>
</div>

<!-- <div class="col-lg-4">
    <input type="button" class="btn btn-primary" onclick="printDiv('printableArea')" value="print a div!" />
</div> -->


<script>
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;

        window.print();

        document.body.innerHTML = originalContents;
    }
</script>