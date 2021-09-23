<?php
//check bio num row  🏡
$check_bio_num = mysqli_query($conn, "SELECT * FROM `jobseekerbio` WHERE `jobseeker_id`='$jobseeker_id'");
$check_bio_num = mysqli_num_rows($check_bio_num);

//check address num row 👱
$check_address_num = mysqli_query($conn, "SELECT * FROM `address` WHERE `jobseeker_id` ='$jobseeker_id'");
$check_address_num = mysqli_num_rows($check_address_num);

// check skill num 🏃
$check_skill_row = mysqli_query($conn, "SELECT * FROM `jobseeker_skill` WHERE `jobseeker_id` = '$jobseeker_id'");
$check_skill_row = mysqli_num_rows($check_skill_row);

// check work availability status num 👱
$check_work_availability = mysqli_query($conn, "SELECT * FROM `jobseeker_work_status` WHERE `jobseeker_id` = '$jobseeker_id'");
$check_work_availability = mysqli_num_rows($check_work_availability);





// Select Job seeker bio ⏰
$select_bio = "SELECT * FROM `jobseekerbio` WHERE `jobseeker_id`='$jobseeker_id'";
$bio_result = fetchData($select_bio);






// $check_num_row_bio = checkNumRow($bio_result);
while ($bio_data = mysqli_fetch_assoc($bio_result)) {
    $Title = $bio_data['Title'];
    $aboutYourSelf = $bio_data['aboutYourSelf'];
    $Sex = $bio_data['Sex'];
    $dateOfBirth = $bio_data['dateOfBirth'];
}
// Select Job Seeker Skill
$skill_name = "";
$select_skill = "SELECT * FROM `jobseeker_skill` WHERE `jobseeker_id` = '$jobseeker_id'";
$skill_result = fetchData($select_skill);
while ($skill_data = mysqli_fetch_assoc($skill_result)) {
    $skill_name = $skill_data['skill_name'];
    $skill_name = explode(",", $skill_name);
}

//Select Address
$select_address = "SELECT * FROM `address` WHERE `jobseeker_id` = '$jobseeker_id'";
$address_result = fetchData($select_address);
while ($address_date = mysqli_fetch_assoc($address_result)) {
    $country = $address_date['country'];
    $city = $address_date['city'];
    $phoneNumber = $address_date['phoneNumber'];
}

// Select Work Availability
$select_work_availability = mysqli_query($conn, "SELECT * FROM `jobseeker_work_status` WHERE `jobseeker_id` = '$jobseeker_id'");

while ($work_availability_data = mysqli_fetch_assoc($select_work_availability)) {
    $work_availability = $work_availability_data['work_availability'];
    $job_type =          $work_availability_data['job_type'];
}
