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
                            <img src="assets/images/brand/mockup1.jpg" alt="Register Login">
                        </div>
                    </div>
                    <!-- Register & Login Images End -->

                </div>
                <div class="col-lg-6" id="form">

                    <!-- Register & Login Form Start -->
                    <div class="register-login-form">
                        <h3 class="title">Registration <span>Now</span></h3>
                        <?php
                        if (count($errors) == 1) {
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                                foreach ($errors as $showerror) {
                                    echo $showerror;
                                }
                                ?>
                        </div>
                        <?php
                        } elseif (count($errors) > 1) {
                        ?>
                        <div class="alert alert-danger">
                            <?php
                                foreach ($errors as $showerror) {
                                ?>
                            <li><?php echo $showerror; ?></li>
                            <?php
                                }
                                ?>
                        </div>
                        <?php
                        }
                        ?>
                        <div class="form-wrapper">
                            <form action="register_jobseeker.php#form" method="post">
                                <div class="row">
                                    <div class="single-form col-md-6">
                                        <input type="text" name="fName" id="fName" placeholder="first name" required>

                                    </div>
                                    <div class="single-form col-md-6">
                                        <input type="text" name="lName" id="lName" placeholder="last name " required>

                                    </div>
                                </div>

                                <div class="single-form">
                                    <input type="text" name="username" id="username" placeholder="username" required>
                                </div>


                                <div class="single-form">
                                    <input type="email" name="email" id="email" placeholder="Email" required>
                                </div>


                                <div class="wrapper mt-2">
                                    <input type="radio" name="role_id" id="option-1" value="2" checked>
                                    <input type="radio" name="role_id" id="option-2" value="3">
                                    <label for="option-1" class="option option-1">
                                        <div class="dot"></div>
                                        <span>Freelancer</span>
                                    </label>
                                    <label for="option-2" class="option option-2">
                                        <div class="dot"></div>
                                        <span>Employer</span>
                                    </label>
                                </div>

                                <div class="single-form">
                                    <input type="password" name="password" id="password1" placeholder="Password"
                                        required>
                                </div>


                                <div class="single-form">
                                    <input type="password" name="cpassword" id="password2"
                                        placeholder="Confirm Password" required>
                                </div>


                                <div class="single-form">
                                    <button type="submit" name="signup"
                                        class="btn btn-primary btn-hover-dark w-100">Create an
                                        account</button>

                                    <a class="btn btn-secondary btn-outline w-100" href="login.php">Login</a>
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