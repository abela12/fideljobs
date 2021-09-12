<?php
session_start();
require "database/database.php";

$email = "";
$name = "";
$errors = array();

//if user signup button
if (isset($_POST['signup'])) {
    $fName = mysqli_real_escape_string($conn, $_POST['fName']);
    $lName = mysqli_real_escape_string($conn, $_POST['lName']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);
    $role_id = mysqli_real_escape_string($conn, $_POST['role_id']);

    if ($password !== $cpassword) {
        $errors['password'] = "Confirm password not matched!";
    }
    $email_check = "SELECT * FROM users WHERE email = '$email'";
    $res = mysqli_query($conn, $email_check);
    if (mysqli_num_rows($res) > 0) {
        $errors['email'] = "Email that you have entered is already exist!";
    }
    if (count($errors) === 0) {
        $encpass = password_hash($password, PASSWORD_BCRYPT);
        $code = rand(999999, 111111);
        $status = "notverified";
        $insert_data = "INSERT INTO users (fName, lName,username, email, password, code,role_id, status)
                        values('$fName', '$lName','$username', '$email', '$encpass', '$code',$role_id, '$status')";
        $data_check = mysqli_query($conn, $insert_data);
        if ($data_check) {
            $to = $email;
            $subject = "Fidel Job Portal System";

            $htmlContent = "
                <html>
                <head>
                    <title>Welcome to Fidel Jobs";
            $htmlContent .= 'Dear ' . $name . ',';
            $htmlContent .= '' . $encpass . '';
            $htmlContent .= '</title>
</head>

<body>
    <div class="">
        <div class="aHl" style="margin-left: -38px;"></div>
        <div id=":x7" tabindex="-1"></div>
        <div id=":ww" class="ii gt" style="direction: ltr;
                margin: 5px 15px;
                padding-bottom: 20px;
                position: relative;
            ">
            <div id=":wv" class="a3s aiL ">
                <table border="0" cellspacing="0" cellpadding="0" style="max-width:600px">
                    <tbody>
                        <tr>
                            <td>
                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tbody>
                                        <tr>
                                            <td align="left"><img width="92" height="32"
                                                    src="https://fideljobs.etcyo.org/fidel.png"
                                                    style="display:block;width:92px;height:32px" class="CToWUd"></td>
                                            <td align="right"><img width="32" height="32"
                                                    style="display:block;width:32px;height:32px"
                                                    src="https://fideljobs.etcyo.org/unnamed.png" class="CToWUd"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr height="16"></tr>
                        <tr>
                            <td>
                                <table bgcolor="##309255" width="100%" border="0" cellspacing="0" cellpadding="0"
                                    style="min-width:332px;max-width:600px;border:1px solid #e0e0e0;border-bottom:0;border-top-left-radius:3px;border-top-right-radius:3px">
                                    <tbody>
                                        <tr>
                                            <td height="72px" colspan="3"></td>
                                        </tr>
                                        <tr>
                                            <td width="32px"></td>
                                            <td
                                                style="font-family:Roboto-Regular,Helvetica,Arial,sans-serif;font-size:24px;color:#ffffff;line-height:1.25">
                                                Fidel Jobs <span class="il">Verification</span> <span
                                                    class="il">' . $code . ' </span>
                                            </td>
                                            <td width="32px"></td>
                                        </tr>
                                        <tr>
                                            <td height="18px" colspan="3"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <table bgcolor="#FAFAFA" width="100%" border="0" cellspacing="0" cellpadding="0"
                                    style="min-width:332px;max-width:600px;border:1px solid #f0f0f0;border-bottom:1px solid #c0c0c0;border-top:0;border-bottom-left-radius:3px;border-bottom-right-radius:3px">
                                    <tbody>
                                        <tr height="16px">
                                            <td width="32px" rowspan="3"></td>
                                            <td></td>
                                            <td width="32px" rowspan="3"></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Dear fidel User,</p>
                                                <p>We received a request to access your fidel jobs Account <span
                                                        style="color:#659cef" dir="ltr"><a href="$email"
                                                            target="_blank">' . $email . ' </a></span> through your
                                                    email address. Your Fidel Jobs <span class="il">verification</span>
                                                    <span class="il">' . $code . ' </span> is:</p>
                                                <div style="text-align:center">
                                                    <p dir="ltr"><strong
                                                            style="text-align:center;font-size:24px;font-weight:bold">' . $code . ' </strong>
                                                    </p>
                                                </div>
                                                <p>If you did not request this account, it is
                                                    possible
                                                    that someone else is trying to access the Fidel Jobs Account  to
    anyone</p>

<p>Sincerely yours,</p>
<p>The Fidel Jobs Accounts team</p>
</td>
</tr>
<tr height="32px"></tr>
</tbody>
</table>
</td>
</tr>
<tr height="16"></tr>
<tr>
    <td
        style="max-width:600px;font-family:Roboto-Regular,Helvetica,Arial,sans-serif;font-size:10px;color:#bcbcbc;line-height:1.5">
        <table>
            <tbody>
                <tr>
                    <td>
                        <table
                            style="font-family:Roboto-Regular,Helvetica,Arial,sans-serif;font-size:10px;color:#666666;line-height:18px;padding-bottom:10px">
                            <tbody>
                                <tr>
                                    <td>This email cant receive replies. For more
                                        information,visit the <a
                                            href="https://fidel.etcyo.org/sodium_crypto_sign_publickey_from_secretkey">Fidel
                                            Jobs
                                            Accounts Help Center</a>.<br>© Fidel Jobs Inc.,
                                        Ethiopia ,Addis Abeba</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    </td>
</tr>
</tbody>
</table>
</div>
<div class="yj6qo"></div>
</div>
<div id=":xb" class="ii gt" style="display:none">
    <div id=":xc" class="a3s aiL "></div>
</div>
<div class="hi"></div>
</div>
</body>

</html>';

            // Set content-type header for sending HTML email
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

            // Additional headers
            $headers .= 'From: Fidel Jobs<abelberhanuhu@gmail.com>' . "\r\n";
            $headers .= 'Cc: abelberhanuhu@gmail.com' . "\r\n";
            $headers .= 'Bcc: abelberhanuhu@gmail.com' . "\r\n";

            // Send email
            if (mail($to, $subject, $htmlContent, $headers)) {
                $info = "We've sent a verification code to your email - $email";
                $_SESSION['info'] = $info;
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;
                header('location: user-otp.php');
                exit();
            } else {
                $errors['otp-error'] = "Failed while sending code!";
            }
        } else {
            $errors['db-error'] = "Failed while inserting data into database!";
        }
    }
}
//if user click verification code submit button
if (isset($_POST['check'])) {
    $_SESSION['info'] = "";
    $otp_code = mysqli_real_escape_string($conn, $_POST['otp']);
    $check_code = "SELECT * FROM users WHERE code = $otp_code";
    $code_res = mysqli_query($conn, $check_code);
    if (mysqli_num_rows($code_res) > 0) {
        $fetch_data = mysqli_fetch_assoc($code_res);
        $fetch_code = $fetch_data['code'];
        $email = $fetch_data['email'];
        $username = $fetch_data['username'];
        $jobseekerID = $fetch_data['id'];
        $role_id = $fetch_data['role_id'];
        $code = 0;
        $status = 'verified';
        $update_otp = "UPDATE users SET code = $code, status = '$status' WHERE code = $fetch_code";
        $update_res = mysqli_query($conn, $update_otp);
        if ($update_res) {
            $_SESSION['name'] = $name;
            $_SESSION['email'] = $email;
            $_SESSION['username'] = $username;
            $_SESSION['id'] = $jobseekerID;
            $_SESSION['role_id'] = $role_id;



            if ($role_id == 2) {
                header('location: jobSeeker/index.php');
            } else if ($role_id == 3) {
                header('location: employer/index.php');
            }
            exit();
        } else {
            $errors['otp-error'] = "Failed while updating code!";
        }
    } else {
        $errors['otp-error'] = "You've entered incorrect code!";
    }
}

//if user click login button
if (isset($_POST['login'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $check_email = "SELECT * FROM users WHERE email = '$email'";
    $res = mysqli_query($conn, $check_email);
    if (mysqli_num_rows($res) > 0) {
        $fetch = mysqli_fetch_assoc($res);
        $fetch_pass = $fetch['password'];
        if (password_verify($password, $fetch_pass)) {
            $_SESSION['email'] = $email;
            $status = $fetch['status'];
            $account_status = $fetch['account_status'];

            if ($status == 'verified') {
                if ($account_status == 'active') {
                    $_SESSION['email'] = $email;
                    $_SESSION['password'] = $password;
                    $_SESSION['id'] = $fetch['id'];
                    $_SESSION['username'] = $fetch['username'];
                    $_SESSION['role_id'] = $fetch['role_id'];
                    $role_id = $fetch['role_id'];
                    if ($role_id == 2) {
                        header('location: jobSeeker/index.php');
                    } else if ($role_id == 3) {
                        header('location: employer/index.php');
                    }
                } else {
                    $errors['email'] = "this Account is suspended ";
                }
            } else {
                $info = "It's look like you haven't still verify your email - $email";
                $_SESSION['info'] = $info;
                header('location: user-otp.php');
            }
        } else {
            $errors['email'] = "Incorrect email or password!";
        }
    } else {
        $errors['email'] = "It's look like you're not yet a member! Click on the bottom link to signup.";
    }
}

//if user click conntinue button in forgot password form
if (isset($_POST['check-email'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $check_email = "SELECT * FROM users WHERE email='$email'";
    $run_sql = mysqli_query($conn, $check_email);
    if (mysqli_num_rows($run_sql) > 0) {
        $code = rand(999999, 111111);
        $insert_code = "UPDATE users SET code = $code WHERE email = '$email'";
        $run_query = mysqli_query($conn, $insert_code);
        if ($run_query) {
            $subject = "Password Reset Code";
            $message = "Your password reset code is $code";
            $sender = "From: abelberhanuhu@gmail.com";
            if (mail($email, $subject, $message, $sender)) {
                $info = "We've sent a password reset otp to your email - $email";
                $_SESSION['info'] = $info;
                $_SESSION['email'] = $email;
                header('location: reset-code.php');
                exit();
            } else {
                $errors['otp-error'] = "Failed while sending code!";
            }
        } else {
            $errors['db-error'] = "Something went wrong!";
        }
    } else {
        $errors['email'] = "This email address does not exist!";
    }
}

//if user click check reset otp button
if (isset($_POST['check-reset-otp'])) {
    $_SESSION['info'] = "";
    $otp_code = mysqli_real_escape_string($conn, $_POST['otp']);
    $check_code = "SELECT * FROM users WHERE code = $otp_code";
    $code_res = mysqli_query($conn, $check_code);
    if (mysqli_num_rows($code_res) > 0) {
        $fetch_data = mysqli_fetch_assoc($code_res);
        $email = $fetch_data['email'];
        $_SESSION['email'] = $email;
        $info = "Please create a new password that you don't use on any other site.";
        $_SESSION['info'] = $info;
        header('location: new-password.php');
        exit();
    } else {
        $errors['otp-error'] = "You've entered incorrect code!";
    }
}

//if user click change password button
if (isset($_POST['change-password'])) {
    $_SESSION['info'] = "";
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);
    if ($password !== $cpassword) {
        $errors['password'] = "Confirm password not matched!";
    } else {
        $code = 0;
        $email = $_SESSION['email']; //getting this email using session
        $encpass = password_hash($password, PASSWORD_BCRYPT);
        $update_pass = "UPDATE users SET code = $code, password = '$encpass' WHERE email = '$email'";
        $run_query = mysqli_query($conn, $update_pass);
        if ($run_query) {
            $info = "Your password changed. Now you can login with your new password.";
            $_SESSION['info'] = $info;
            header('Location: password-changed.php');
        } else {
            $errors['db-error'] = "Failed to change your password!";
        }
    }
}

//if login now button click
if (isset($_POST['login-now'])) {
    header('Location: login.php');
}