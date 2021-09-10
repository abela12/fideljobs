<div class="section section-padding">
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

                    <!-- Code Verification Form Start -->
                    <div class="register-login-form">
                        <h3 class="title">Code Verification <span>Now</span></h3>


                        <div class="form-wrapper">
                            <form action="user-otp.php" method="post" id="form">
                                <?php
                                if (isset($_SESSION['info'])) {
                                ?>
                                <div class="alert alert-success text-center">
                                    <?php echo $_SESSION['info']; ?>
                                </div>
                                <?php
                                }
                                ?>
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
                                }
                                ?>
                                <!-- Single Form Start -->
                                <div class="single-form">
                                    <input type="number" name="otp" placeholder="Enter verification code" required>
                                </div>

                                <!-- Single Form End -->
                                <!-- Single Form Start -->
                                <div class="single-form">
                                    <button type="submit" name="check"
                                        class="btn btn-primary btn-hover-dark w-100">Submit</button>

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