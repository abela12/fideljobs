<div class="section section-padding">
    <div class="container">

        <!-- New Code  Wrapper Start -->
        <div class="register-login-wrapper">
            <div class="row align-items-center">
                <div class="col-lg-6">

                    <!-- New Password Images Start -->
                    <!-- <div class="register-login-images">
                        <div class="shape-1">
                            <img src="assets/images/shape/shape-26.png" alt="Shape">
                        </div>


                        <div class="images">
                            <img src="assets/images/register-login.png" alt="Register Login">
                        </div>
                    </div> -->
                    <!-- Register & Login Images End -->
                    <h1>Image Part</h1>

                </div>
                <div class="col-lg-6">

                    <!-- New Password Form Start -->
                    <div class="register-login-form">
                        <h3 class="title">New Password <span>Now</span></h3>

                        <div class="form-wrapper">
                            <form action="login.php" method="post">
                                <?php
                                if (isset($_SESSION['info'])) {
                                ?>
                                <div class="alert alert-success text-center">
                                    <?php echo $_SESSION['info']; ?>
                                </div>
                                <?php
                                }
                                ?>




                                <div class="single-form">
                                    <button type="submit" name="login-now"
                                        class="btn btn-primary btn-hover-dark w-100">Login</button>
                                </div>
                                <!-- Single Form End -->
                            </form>
                        </div>
                    </div>
                    <!-- Register & Login Form End -->

                </div>
            </div>
        </div>
        <!-- Register & Login Wrapper End -->

    </div>
</div>