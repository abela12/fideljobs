<!DOCTYPE html>
<html lang="en">


<?php include 'include/header.php' ?>
<?php include 'database/database.php' ?>

<?php
$demo = "not working";
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT users.id as id, `username`, `email`, `password`, role.roleType as role, `userPhoto`, `role_id`, `status`, `date` 
    FROM `users` INNER JOIN role on users.role_id = role.id WHERE `username` = '$username' AND `password` = '$password'");

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
            if ($role == "jobseeker") {
                header("location:jobSeeker/index.php");
                $demo = "system administrator";
            } else if ($role == "employer") {
                header("location:employer/index.php");
            }
        } else {
            //IF theres no result
?> <script type="text/javascript">
alert("Username or Password Not Registered! Contact Your administrator.");
window.location = "login.php";
</script>
<?php

        }
    }
}

?>



<body>

    <div class="main-wrapper">

        <!-- Header Section Start Navbar Main  -->

        <?php include 'include/navbarMain.php' ?>
        <!-- Header Section End -->

        <!-- Mobile Menu Start NavBar Mobile Version -->
        <?php include 'include/navbarMobile.php' ?>

        <!-- Mobile Menu End -->

        <!-- Overlay Start -->
        <div class="overlay"></div>
        <!-- Overlay End -->

        <!--Login Page Banner Start -->
        <?php include 'include/pageBannerForLogin.php' ?>
        <!--Login Page Banner Start -->

        <!--  Login Page Form Start -->
        <?php include 'include/loginForm.php' ?>

        <!--  Login Page Form Start -->


        <!-- Footer Start  -->
        <?php //include 'include/footer.php' 
        ?>

        <!-- Footer End -->



    </div>




    <?php include 'include/script.php' ?>

</body>

</html>