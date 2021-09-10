<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$email = $_SESSION['email'];
$password = $_SESSION['password'];
$jobseekerID = isset($_SESSION['id']);
if ($email != false && $password != false) {
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $run_Sql = mysqli_query($conn, $sql);
    if ($run_Sql) {
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if ($status == "verified") {
            if ($code != 0) {
                header('Location: reset-code.php');
            }
        } else {
            header('Location: user-otp.php');
        }
    }
} else {
    header('Location: ../login.php');
}