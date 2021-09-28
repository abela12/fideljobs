<!DOCTYPE html>
<html lang="en">


<?php include 'include/header.php'
?>
<?php include 'database/database.php' ?>
<?php
$msgClass = "";
$msg = "";
if (isset($_POST['send'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $subject = mysqli_real_escape_string($conn, $_POST['subject']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $insert = mysqli_query($conn, "INSERT INTO `contact`(`email`, `name`, `subject`, `message`, `date`) 
    VALUES ('$email','$name','$subject','$message','$date')");
    if ($insert) {
        $msgClass = "alert alert-primary";
        $msg = "Thanks For Your Feed Back";
    }
}



?>

<?php


$breadcrumb = "Contact";
$title = "Contact <span>Form</span>";
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
        <!-- Page Banner Start -->
        <?php include 'include/pageBanner.php' ?>
        <!-- Page Banner End -->

        <!--Contact Form -->
        <?php include 'include/contact-content.php' ?>
        <!--Contact Form -->


        <!-- Footer Start  -->
        <?php //include 'include/footer.php' 
        ?>

        <!-- Footer End -->



    </div>




    <?php include 'include/script.php' ?>

</body>

</html>