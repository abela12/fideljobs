<!DOCTYPE html>
<?php include './database/database.php' ?>
<?php //include './include/session.php' 
?>
<?php
//login confirmation
// confirm_logged_in();

?>
<html lang="en">


<?php include 'include/header.php' ?>

<body>

    <div class="main-wrapper">

        <!-- Header Section Start Navbar Main -->

        <?php include 'include/navbarMain.php' ?>
        <!-- Header Section End -->

        <!-- Mobile Menu Start NavBar Mobile Version -->
        <?php include 'include/navbarMobile.php' ?>

        <!-- Mobile Menu End -->

        <!-- Overlay Start -->
        <div class="overlay"></div>
        <!-- Overlay End -->

        <!-- Slider Start -->
        <?php include 'include/homeSlider.php' ?>

        <!-- Slider End -->

        <!-- All Freelancer Start -->
        <div class="section section-padding-02">
            <div class="container">

                <!-- Search Freelancer Top Start -->
                <?php //include 'include/jobSearch.php' 
                ?>

                <!-- Search Freelancer Top End -->
                <?php //include 'include/jobCategory.php' 
                ?>




            </div>
        </div>
        <!-- All Freelancer End -->

        <!-- Call to Action Start -->
        <div class="section section-padding-02">
            <div class="container">

                <!-- Call to Action Wrapper Start -->
                <?php include 'include/callToAction.php' ?>
                <!-- Call to Action Wrapper End -->

            </div>
        </div>
        <!-- Call to Action End -->

        <!-- How It Work End -->
        <?php include 'include/howItWork.php' ?>
        <!-- How It Work End -->

        <!-- Download App Start Promotion Banner -->
        <?php //include 'include/promotionBanner.php' 
        ?>
        <!-- Download App End -->

        <!-- Testimonial End -->
        <?php //include 'include/testimonial.php' 
        ?>
        <!-- Testimonial End -->

        <!-- Brand Logo Start And Our Clients -->
        <?php //include 'include/ourClients.php' 
        ?>

        <!-- Brand Logo End And Our Clients -->

        <!-- Blog Start -->
        <?php //include 'include/blogAndNews.php' 
        ?>
        <!-- Blog End -->

        <!-- Footer Start  -->
        <?php //include 'include/footer.php' 
        ?>

        <!-- Footer End -->



    </div>




    <?php include 'include/script.php' ?>

</body>

</html>