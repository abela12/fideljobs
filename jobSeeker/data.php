<?php
include '../database/database.php';

// $data = stripslashes(file_get_contents("php://input"));
// $mydata = json_decode($data, true);
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$coverImg = $_FILES['coverImage']['name'];
// echo $image = $mydata["Image"];

$sql = mysqli_query($conn, "INSERT INTO `jobseekerbio`(`jobseeker_id`, `coverImage`, `profileImage`, `Title`,
`aboutYourSelf`, `Sex`, `dateOfBirth`) VALUES ('45','$fname','$lname','$coverImg','aboutYourSelf','sex','')");