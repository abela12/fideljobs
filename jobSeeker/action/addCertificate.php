<?php
include '../../database/database.php';
include '../../include/session.php';
$jobseeker_id = $_SESSION['id'];
$userData = count($_POST["certificateName"]);

if ($userData > 0) {
    for ($i = 0; $i < $userData; $i++) {
        if (trim($_POST['certificateName'] != '') && trim($_POST['certificateLink'] != '')) {
            $certificateName   = $_POST["certificateName"][$i];
            $certificateLink  = $_POST["certificateLink"][$i];
            // Remove all illegal characters from a url
            $certificateLink = filter_var($certificateLink, FILTER_SANITIZE_URL);
            if (filter_var($url, FILTER_VALIDATE_URL)) {
            } else {
            }
            $query  = "INSERT INTO `jobseekercertifications`(`jobseeker_id`, `certificationsName`, `certificationsLink`) 
            VALUES ('$jobseeker_id','$certificateName','$certificateLink')";
            $result = mysqli_query($conn, $query);
        } else {
            echo "Please Enter user Language";
        }
    }
    echo "Data inserted successfully";
} else {
    echo "Please Enter user Language";
}