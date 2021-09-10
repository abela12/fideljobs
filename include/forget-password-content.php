<div class="section section-padding">
    <div class="container">

        <!-- Forget Password Wrapper Start -->
        <div class="register-login-wrapper">
            <div class="row align-items-center">
                <div class="col-lg-6">

                    <!-- Forget Password Images Start -->
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

                    <!-- Forget Password Form Start -->
                    <div class="register-login-form">
                        <h3 class="title">Forget <span>Now</span></h3>

                        <div class="form-wrapper">
                            <form action="forgot-password.php" method="post">
                                <?php
                                if (count($errors) > 0) {
                                ?>
                                    <div class="alert alert-danger text-center">
                                        <?php
                                        foreach ($errors as $error) {
                                            echo $error;
                                        }
                                        ?>
                                    </div>
                                <?php
                                }
                                ?>
                                <!-- Single Form Start -->
                                <div class="single-form">
                                    <input name="email" type="email" placeholder="Email" required value="<?php echo $email ?>">
                                </div>



                                <div class="single-form">
                                    <button type="submit" type="submit" name="check-email" class="btn btn-primary btn-hover-dark w-100">Continue</button>

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