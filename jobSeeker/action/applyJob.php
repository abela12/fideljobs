<?php
include '../../database/database.php';
include '../../include/session.php';
$jobseeker_id = $_SESSION['id'];
if (trim($_POST['cover_letter'] != '')) {
    $attachment_file_id   = $_POST["attachment_file_id"];
    $cover_letter  = $_POST["cover_letter"];
    $job_id  = $_POST["job_id"];

    $query  = "INSERT INTO `applicants`(`jobseeker_id`, `job_id`, `attachment_file_id`, `cover_letter`) 
    VALUES ('$jobseeker_id','$job_id','$attachment_file_id','$cover_letter')";
    $result = mysqli_query($conn, $query);
} else {
    echo "Please Enter user cover letter";
}
if ($result) {
    echo "Data inserted successfully";
}