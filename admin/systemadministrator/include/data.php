<?php

$all  = "SELECT * FROM `users`";
$select_all = mysqli_query($conn, $all);
$count_all = mysqli_num_rows($select_all);
$job_seeker = mysqli_query($conn, "SELECT * FROM `users` WHERE `role_id`= 2");
$employer =  mysqli_query($conn, "SELECT * FROM `users` WHERE `role_id`= 3");

$count_job_seeker = mysqli_num_rows($job_seeker);
$count_employer = mysqli_num_rows($employer);

$count_job_seeker = (($count_job_seeker / $count_all) * 100);
$count_employer = (($count_employer / $count_all) * 100);

$dataPoints = array(
    array("label" => "Job Seeker", "y" => $count_job_seeker),
    array("label" => "Employer", "y" => $count_employer)
);

$all_job = mysqli_query($conn, "SELECT * FROM `job`");
$count_all_job = mysqli_num_rows($all_job);
$opened_job = mysqli_query($conn, "SELECT * FROM `job` WHERE `job_status` ='Opened'");
$closed_job = mysqli_query($conn, "SELECT * FROM `job` WHERE `job_status` ='Closed'");
$delete_job = mysqli_query($conn, "SELECT * FROM `job` WHERE `job_status` ='delete'");

$count_opened_job = mysqli_num_rows($opened_job);
$count_closed_job = mysqli_num_rows($closed_job);
$count_delete_job = mysqli_num_rows($delete_job);

$count_opened_job  = (($count_opened_job / $count_all_job) * 100);
$count_closed_job  = (($count_closed_job / $count_all_job) * 100);
$count_delete_job  = (($count_delete_job / $count_all_job) * 100);
$dataPoints1 = array(
    array("label" => "Opened Job", "y" => $count_opened_job),
    array("label" => "Closed Job", "y" => $count_employer),
    array("label" => "Deleted Job", "y" => $count_delete_job)
);

// Job List By type
$full_time = mysqli_query($conn, "SELECT * FROM `job` WHERE `job_status` ='Full Time'");
$part_time = mysqli_query($conn, "SELECT * FROM `job` WHERE `job_status` ='Part Time'");
$contractual = mysqli_query($conn, "SELECT * FROM `job` WHERE `job_status` ='Contractual'");
$temporary = mysqli_query($conn, "SELECT * FROM `job` WHERE `job_status` ='Temporary'");
$freelancer = mysqli_query($conn, "SELECT * FROM `job` WHERE `job_status` ='freelancer'");
$permanent = mysqli_query($conn, "SELECT * FROM `job` WHERE `job_status` ='Permanent'");
$remote = mysqli_query($conn, "SELECT * FROM `job` WHERE `job_status` ='Remote'");

$full_time_count = mysqli_num_rows($full_time);
$part_time_count = mysqli_num_rows($part_time);
$contractual_count = mysqli_num_rows($contractual);
$temporary_count = mysqli_num_rows($temporary);
$freelancer_count = mysqli_num_rows($freelancer);
$permanent_count = mysqli_num_rows($permanent);
$remote_count = mysqli_num_rows($remote);

$full_time_count  = (($full_time_count / $count_all_job) * 100);
$part_time_count  = (($part_time_count / $count_all_job) * 100);
$contractual_count  = (($contractual_count / $count_all_job) * 100);
$temporary_count  = (($temporary_count / $count_all_job) * 100);
$freelancer_count  = (($freelancer_count / $count_all_job) * 100);
$permanent_count  = (($permanent_count / $count_all_job) * 100);
$remote_count  = (($remote_count / $count_all_job) * 100);


$dataPoints3 = array(
    array("label" => "Full Time", "y" => $count_opened_job),
    array("label" => "Part Time", "y" => $count_employer),
    array("label" => "Contractual", "y" => $count_delete_job),
    array("label" => "Temporary", "y" => $count_opened_job),
    array("label" => "freelancer", "y" => $count_employer),
    array("label" => "Remote", "y" => $count_employer),
    array("label" => "Permanent", "y" => $count_delete_job)
);