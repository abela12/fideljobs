<?php
include '../../database/database.php';
include '../../include/session.php';
$jobseeker_id = $_SESSION['id'];
$userData = count($_POST["languageName"]);

if ($userData > 0) {
    for ($i = 0; $i < $userData; $i++) {
        if (trim($_POST['languageName'] != '') && trim($_POST['languageStatus'] != '')) {
            $languageName   = $_POST["languageName"][$i];
            $languageStatus  = $_POST["languageStatus"][$i];
            $query  = "INSERT INTO `jobseekerlanguages`(`jobseeker_id`, `languageName`, `languageStatus`) 
            VALUES ('$jobseeker_id','$languageName','$languageStatus')";
            $result = mysqli_query($conn, $query);
        } else {
            echo "Please Enter user Language";
        }
    }
    echo "Data inserted successfully";
} else {
    echo "Please Enter user Language";
}