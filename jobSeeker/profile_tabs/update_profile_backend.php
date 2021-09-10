<?php
$msgClass = "alert alert-success";
$msg = "";
if (isset($_POST['update'])) {

    // Insert or Update Address 🌎
    $country = escape($_POST['country']);
    $city = escape($_POST['city']);
    $phoneNumber = escape($_POST['phoneNumber']);

    $check_address = mysqli_query($conn, "SELECT * FROM `address` WHERE `jobseeker_id` = '$jobseeker_id'");
    if ($check_address) {
        $num_row = mysqli_num_rows($check_address);
        if ($num_row > 0) {
            $update_address = mysqli_query($conn, "UPDATE `address` SET
`country`='$country',`city`='$city',`phoneNumber`='$phoneNumber' WHERE `jobseeker_id` ='$jobseeker_id'");
        } else {
            $insert_address = mysqli_query($conn, "INSERT INTO `address`(`jobseeker_id`, `country`, `city`, `phoneNumber`) VALUES
('$jobseeker_id','$country','$city','$phoneNumber')");
            if ($insert_address) {

                $msg = "yes";
            }
        }
    } else {
    }
    // Insert Or Update skill 😜
    $job_skill = "";
    if (isset($_POST["skill"])) {
        $i = 1;
        // Retrieving each selected option
        foreach ($_POST['skill'] as $subject) {
            if ($i > 0) {
                $job_skill = $subject;
                $i = 0;
            } else {
                $job_skill = $job_skill . ',' . $subject;
            }
        }

        $select_skill = "SELECT * FROM `jobseeker_skill` WHERE `jobseeker_id` = '$jobseeker_id'";
        $skill_num = checkNumRow($select_skill);


        if ($skill_num) {
            $job_skill = "";
            if (isset($_POST["skill"])) {
                $i = 1;
                // Retrieving each selected option
                foreach ($_POST['skill'] as $subject) {
                    if ($i > 0) {
                        $job_skill = $subject;
                        $i = 0;
                    } else {
                        $job_skill = $job_skill . ',' . $subject;
                    }
                }
            }

            $update_skill = mysqli_query($conn, "UPDATE `jobseeker_skill` SET `skill_name`='$job_skill' WHERE `jobseeker_id` =
'$jobseeker_id'");
            if ($update_skill) {

                $msg = "yes";
            }
        } else {
            $insert_skill = mysqli_query($conn, "INSERT INTO `jobseeker_skill`(`jobseeker_id`, `skill_name`) VALUES
('$jobseeker_id','$job_skill')");
            if ($insert_skill) {

                $msg = "yes";
            }
        }
    }

    // Insert Or Update Work Status 👷
    $select_work_status = "SELECT * FROM `jobseeker_work_status` WHERE `jobseeker_id` = '$jobseeker_id'";
    $check_work_num = checkNumRow($select_work_status);
    if ($check_work_num) {
        $work_availability = $_POST['work_availability'];
        $job_type = $_POST['job_type'];
        $update_work_status = mysqli_query($conn, "UPDATE `jobseeker_work_status` SET
`work_availability`='$work_availability',`job_type`='$job_type' WHERE `jobseeker_id` = '$jobseeker_id'");
    } else {
        $work_availability = $_POST['work_availability'];
        $job_type = $_POST['job_type'];
        $insert_work_status = mysqli_query($conn, "INSERT INTO `jobseeker_work_status`(`jobseeker_id`, `work_availability`,
`job_type`)
VALUES ('$jobseeker_id','$work_availability','$job_type')");
    }
}