<?php


if (isset($_POST['addCompanyProfile'])) {
    if (isset($_POST['company_name']) != '' || isset($_POST['company_short_description']) != '') {
        $company_name = escape($_POST['company_name']);
        $company_short_description = $_POST['company_short_description'];
        $company_description = $_POST['company_description'];
        $company_location = $_POST['company_location'];
        $insert_company_profile = mysqli_query($conn, "INSERT INTO `company_profile`(`user_id`, `company_name`, `company_short_description`, `company_description`, `company_location`) VALUES ('$employer_id','$company_name','$company_short_description','$company_description','$company_location');");
        if ($insert_company_profile) {
            $msgClass = "alert alert-success";
            $msg = "yes";

            // $msg = "Company Profile Successfully Added";
        } else {
            $msgClass = "alert alert-danger";
            $msg = "yes";
        }
    }
}
if (isset($_POST['updateCompanyProfile'])) {
    if (isset($_POST['company_name']) != '' || isset($_POST['company_short_description']) != '') {
        $company_name = escape($_POST['company_name']);
        $company_short_description = $_POST['company_short_description'];
        $company_description = $_POST['company_description'];
        $company_location = $_POST['company_location'];
        $update_company_profile = mysqli_query($conn, "UPDATE `company_profile` SET `company_name`='$company_name',`company_short_description`='$company_short_description',`company_description`='$company_description',`company_location`='$company_location' WHERE `user_id` = '$employer_id'");
        if ($update_company_profile) {
            $msgClass = "alert alert-success";
            $msg = "yes_one";

            // $msg = "Company Profile Successfully Added";
        } else {
            $msgClass = "alert alert-danger";
            $msg = "yes_one";
        }
    }
}