<?php
// Insert Record
include '../database/database.php';
include '../include/session.php';
$_SESSION['test']  = "It works";
$jobseeker_id = $_SESSION['id'];







echo $title = $_POST['title'];
$aboutYourSelf = $_POST['aboutYourSelf'];
$coverImg = $_FILES['coverImage']['name'];
$profileImg = $_FILES['profileImage']['name'];
$sex = $_POST['gender'];
$date = $_POST['date'];

$fileExt = explode('.', $coverImg);
$fileActExt = strtolower(end($fileExt));
$allowImg = array('png', 'jpeg', 'jpg');
$fileNew = rand() . "abel" . "." . $fileActExt;  // rand function create the rand number 
$coverImage = 'assets/images/jobseeker/' . $fileNew;

$fileExtP = explode('.', $profileImg);
$fileActExtP = strtolower(end($fileExtP));
// $allowImg = array('png', 'jpeg', 'jpg');
$fileNewP = rand() . "abel" . "." . $fileActExtP;  // rand function create the rand number 
$profileImage = 'assets/images/jobseeker/' . $fileNewP;
if (in_array($fileActExt, $allowImg)) {
    if ($_FILES['coverImage']['size'] > 0  && $_FILES['coverImage']['error'] == 0) {
        $query = mysqli_query($conn, "INSERT INTO `jobseekerbio`(`jobseeker_id`, `coverImage`, `profileImage`, `Title`, `aboutYourSelf`, `Sex`, `dateOfBirth`) VALUES ('$jobseeker_id','$coverImage','$profileImage','$title','$aboutYourSelf','$sex','$date')");
        if ($query) {
            move_uploaded_file($_FILES['coverImage']['tmp_name'], $coverImage);
            move_uploaded_file($_FILES['profileImage']['tmp_name'], $profileImage);
        } else {
            return false;
        }
    } else {
        return false;
    }
} else {
    return false;
}