<div class="section section-padding" id="login-form">
    <div class="container">

        <!-- Register & Login Wrapper Start -->
        <div class="register-login-wrapper">
            <div class="row align-items-center">
                <div class="col-lg-6">

                    <!-- Register & Login Images Start -->
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

                    <!-- Register & Login Form Start -->
                    <div class="register-login-form">
                        <h3 class="title">Login <span>Now</span></h3>

                        <div class="form-wrapper">
                            <form action="login.php#login-form" method="post">
                                <?php
                                if (count($errors) > 0) {
                                ?>
                                <div class="alert alert-danger text-center">
                                    <?php
                                        foreach ($errors as $showerror) {
                                            echo $showerror;
                                        }
                                        ?>
                                </div>
                                <?php
                                } ?>
                                <!-- Single Form Start -->
                                <div class="single-form">
                                    <input name="email" type="text" placeholder="Email" required>
                                </div>
                                <!-- Single Form End -->
                                <!-- Single Form Start -->
                                <div class="single-form">
                                    <input name="password" type="password" placeholder="Password" required>
                                </div>
                                <!-- Single Form End -->
                                <!-- Single Form Start -->
                                <div class="link forget-pass text-left"><a href="forgot-password.php">Forgot
                                        password?</a></div>
                                <div class="single-form">
                                    <button type="submit" name="login"
                                        class="btn btn-primary btn-hover-dark w-100">Login</button>
                                    <a class="btn btn-secondary btn-outline w-100"
                                        href="register_jobseeker.php">Register</a>
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