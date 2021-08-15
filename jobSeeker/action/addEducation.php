<?php

$jobseeker_id = $_SESSION['id'];

// Add Education
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
//Add Highest Education
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
// Add Work Experience
if (isset($_POST['workExperience'])) {
    if ($_POST['workTitle'] == '' or $_POST['companyName'] == '') {
    } else {
        $companyName = $_POST['companyName'];
        $work_title = $_POST['workTitle'];
        $start_year = $_POST['startYear'];
        $end_year = $_POST['endYear'];
        $current_work = $_POST['currentWork'];
        $work_description = $_POST['workDescription'];
        $insertWorkExperience = mysqli_query($conn, "INSERT INTO `jobseeker_work_experience`(`jobseeker_id`, `company_name`, `work_title`, `start_year`, `end_year`, `current_work`, `work_description`) 
        VALUES ('$jobseeker_id','$companyName','$work_title','$start_year','$end_year','$current_work','$work_description')");
    }
}