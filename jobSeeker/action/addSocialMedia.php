<?php
include '../../database/database.php';
include '../../include/session.php';
$jobseeker_id = $_SESSION['id'];
$userData = count($_POST["socialMediaUrl"]);

if ($userData > 0) {
    for ($i = 0; $i < $userData; $i++) {
        if (trim($_POST['socialMediaUrl'] != '') && trim($_POST['socialMedia'] != '')) {
            $socialMediaUrl   = $_POST["socialMediaUrl"][$i];
            $socialMedia  = $_POST["socialMedia"][$i];
            $socialMedia = filter_var($socialMedia, FILTER_SANITIZE_URL);
            $query  = "INSERT INTO `jobseeker_social_media`(`jobseeker_id`, `social_media_name`, `social_media_link`) 
            VALUES ('$jobseeker_id','$socialMedia','$socialMediaUrl')";
            $result = mysqli_query($conn, $query);
        } else {
            echo "Please Enter user Language";
        }
    }
    echo "Data inserted successfully";
} else {
    echo "Please Enter user Language";
}