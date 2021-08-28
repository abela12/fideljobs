<!DOCTYPE html>
<html lang="en">


<?php include 'include/header.php' ?>
<?php //include 'database/database.php' 
?>
<?php //include 'include/session.php' 
?>
<?php require_once "controllerUserData.php"; ?>

<?php
$email = $_SESSION['email'];
if ($email == false) {
    header('Location: login.php');
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
        <?php include 'include/new-password-content.php' ?>

        <!--  Login Page Form Start -->


        <!-- Footer Start  -->
        <?php //include 'include/footer.php' 
        ?>

        <!-- Footer End -->



    </div>




    <?php include 'include/script.php' ?>

</body>

</html>