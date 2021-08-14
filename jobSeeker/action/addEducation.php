<?php

$jobseeker_id = $_SESSION['id'];
if (isset($_POST['addEducation'])) {
    if (isset($_POST['shoolName']) == '' || isset($_POST['shoolName']) == '') {
    } else {
        $shoolName = $_POST['shoolName'];
        $type = $_POST['type'];
        $description = $_POST['schoolDescription'];
        $insertEducation = mysqli_query($conn, "INSERT INTO `jobseekereducation`(`jobseeker_id`, `shoolName`, `type`, `description`) 
        VALUES ('$jobseeker_id','$shoolName','type','description')");
    }
}
if (isset($_POST['addHighestEducation'])) {
    if (isset($_POST['schoolName']) == '' and isset($_POST['fieldOfStudy']) == '') {
    } else {
        $schoolName = $_POST['schoolName'];
        $fieldOfStudy = $_POST['fieldOfStudy'];
        $educationStatus = $_POST['educationStatus'];
        $CGPA = $_POST['CGPA'];
        $description = $_POST['description'];
        $insertHighestEducation = mysqli_query($conn, "INSERT INTO `jobseeker_highest_education`( `jobseeker_id`, `education_name`, `field_of_study`, `gpa`, `description`)
        VALUES ('$jobseeker_id','$schoolName','$fieldOfStudy','$CGPA','$description')");
    }
}