<!DOCTYPE html>
<html lang="zxx" class="js">

<?php include 'include/header.php' ?>
<?php include 'database/database.php' ?>
<?php require 'include/session.php' ?>

<?php
$demo = "not working";
if (isset($_POST['login'])) {
    echo  $username = $_POST['userName'];
    echo $password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM `users` WHERE `username` = '$username' AND `password` = '$password'");

    // $result = mysqli_query($conn, $sql);

    if ($result) {
        $numrows = mysqli_num_rows($result);
        if ($numrows == 1) {
            //store the result to a array and passed to variable found_user
            while ($row = mysqli_fetch_assoc($result)) {
                // $found_user  = mysqli_fetch_array($result);

                //fill the result to session variable authentication
                $_SESSION['id']  = $row['id'];
                $_SESSION['username'] = $row['username'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['userPhoto'] = $row['userPhoto'];



                $role  =  $row['role'];
                $_SESSION['role'] = $role;
                // $_SESSION['status'] =
            }
            if ($role == "admin") {
                header("location:systemadministrator/index.php");
                $demo = "system administrator";
            } else if ($role == "employer") {
                header("location:employer/index.php");
            }
        } else {
            //IF theres no result
?> <script type="text/javascript">
alert("Username or Password Not Registered! Contact Your administrator.");
window.location = "index.php";
</script>
<?php

        }
    }
}

?>

<body class="nk-body bg-white npc-general pg-auth">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- wrap @s -->
            <div class="nk-wrap nk-wrap-nosidebar">
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="nk-split nk-split-page nk-split-md">
                        <div class="nk-split-content nk-block-area nk-block-area-column nk-auth-container bg-white">
                            <div class="absolute-top-right d-lg-none p-3 p-sm-5">
                                <a href="#" class="toggle btn-white btn btn-icon btn-light" data-target="athPromo"><em
                                        class="icon ni ni-info"></em></a>
                            </div>
                            <div class="nk-block nk-block-middle nk-auth-body">

                                <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <h5 class="nk-block-title">Sign-In</h5>
                                        <div class="nk-block-des">
                                            <p>Access the fideljobs panel using your username and passcode.</p>
                                        </div>
                                    </div>
                                </div><!-- .nk-block-head -->
                                <!-- <form> -->
                                <form action="index.php" method="post">
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="default-01">Username</label>

                                            <button type="button" class="btn btn-sm btn-primary" data-toggle="popover"
                                                title="እርዳታ" data-content="በ ሲስተም አድሚኒስትሬተር የትሰጠዎትን username ያስገቡ">
                                                <span>help/እርዳታ</span>
                                            </button>
                                        </div>
                                        <input type="text" name="userName" class="form-control form-control-lg"
                                            id="default-01" placeholder="Enter your username">
                                    </div><!-- .foem-group -->
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="password">Passcode</label>
                                            <a class="link link-primary link-sm" tabindex="-1"
                                                href="html/pages/auths/auth-reset.html">Forgot Code?</a>
                                        </div>
                                        <div class="form-control-wrap">
                                            <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch"
                                                data-target="password">
                                                <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                                <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                            </a>
                                            <input type="password" name="password" class="form-control form-control-lg"
                                                id="password" placeholder="Enter your passcode">
                                        </div>
                                    </div><!-- .foem-group -->
                                    <div class="form-group">
                                        <button type="submit" name="login"
                                            class="btn btn-lg btn-primary btn-block">Login</button>


                                    </div>
                                </form>
                                <!-- </form> -->
                                <!-- form -->

                            </div><!-- .nk-block -->

                        </div><!-- .nk-split-content -->
                        <?php include 'include/slide.php' ?>
                    </div><!-- .nk-split -->
                </div>
                <!-- wrap @e -->
            </div>
            <!-- content @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <?php include 'include/footer.php' ?>

</html>