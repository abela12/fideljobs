<?php
if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password1'];
    if (empty($name) && empty($email) && ($password)) {
    } else {

        $register = mysqli_query($conn, "INSERT INTO `users`(`username`, `email`, `password`,`role`) 
        VALUES 
        ('$username','$email','$password','2')");
    }
}

?>


<div class="section section-padding">
    <div class="container">

        <!-- Register & Login JobSeeker Start -->
        <div class="register-login-wrapper">
            <div class="row align-items-center">
                <div class="col-lg-6">

                    <!-- Register & Login Images Start -->
                    <div class="register-login-images">
                        <div class="shape-1">
                            <img src="assets/images/shape/shape-26.png" alt="Shape">
                        </div>


                        <div class="images">
                            <!-- <img src="assets/images/register-login.png" alt="Register Login"> -->
                        </div>
                    </div>
                    <!-- Register & Login Images End -->

                </div>
                <div class="col-lg-6">

                    <!-- Register & Login Form Start -->
                    <div class="register-login-form">
                        <h3 class="title">Registration <span>Now</span></h3>

                        <div class="form-wrapper">
                            <form action="register_jobseeker.php" method="post">

                                <div class="single-form">
                                    <input type="text" name="username" id="username" placeholder="username">
                                </div>


                                <div class="single-form">
                                    <input type="email" name="email" id="email" placeholder="Email">
                                </div>


                                <div class="single-form">
                                    <input type="password" name="password1" id="password1" placeholder="Password">
                                </div>


                                <div class="single-form">
                                    <input type="password" name="password2" id="password2"
                                        placeholder="Confirm Password">
                                </div>


                                <div class="single-form">
                                    <button type="submit" name="register"
                                        class="btn btn-primary btn-hover-dark w-100">Create an
                                        account</button>

                                    <button type="submit" class="btn btn-secondary btn-outline w-100"
                                        href="login.php">Login</button>
                                </div>

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