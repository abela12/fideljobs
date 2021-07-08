<!DOCTYPE html>
<html lang="zxx" class="js">
<?php include './include/header.php' ?>
<?php include '../database/database.php' ?>
<?php include '../include/session.php' ?>
<?php require '../include/function.php' ?>
<?php
//login confirmation
confirm_logged_in();

?>

<?php

$msgClass = "";
$msg = "";
$userNameError = "";
if (isset($_POST['submit'])) {
    "<h1>It works</h1>";
    $fullName = $_POST['fullName'];

    $phoneNumber = $_POST['phoneNumber'];

    $age = $_POST['age'];

    $nationality = $_POST['nationality'];

    $woreda = $_POST['woreda'];

    $kebele = $_POST['kebele'];

    $role = $_POST['role'];

    $jobLocation = $_POST['jobLocation'];

    $userPhoto = $_FILES['userPhoto']['name'];

    $password = $_POST['password'];

    $username = $_POST['username'];


    // check if username already taken
    $select_username = "SELECT  `username` FROM `user` WHERE username= '$username'";
    $select_username = mysqli_query($conn, $select_username);
    if (mysqli_num_rows($select_username) > 0) {
        $userNameError = "Sorry... username already taken. Try another one";
    } else {;
        $target = "../images/" . basename($userPhoto);
        if (move_uploaded_file($_FILES['userPhoto']['tmp_name'], $target)) {
            //    echo $msg1 = "Image uploaded successfully";
        } else {
            //   echo  $msg1 = "Failed to upload image"; validation
        }
        // execute if no error
        $sql = mysqli_query($conn, "INSERT INTO `user`(`fullName`, `phoneNumber`, `age`, `nationality`, `woreda`, `kebele`, `role`, `jobLocation`, `userPhoto`, `username`, `password`) VALUES ('$fullName','$phoneNumber','$age','$nationality','$woreda','$kebele','$role','$jobLocation','$userPhoto',
                                                '$username','$password')");
        if ($sql) {

            $msg = "Account Created Successfully 🚀!!";
        } else {
            $msgClass = "alert-danger";
            $msg = "Can't Created 👮‍♂️!!";
        }
    }
}

?>

<body class="nk-body bg-lighter npc-general has-sidebar ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">


            <!-- sidebar @s -->
            <?php include './include/sidebar.php' ?>
            <!-- sidebar @e -->
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                <?php include './include/navbar.php' ?>
                <!-- main header @e -->
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h3>Create Account For Employee</h3>
                                            <?php echo $userNameError; ?>
                                            <?php if ($msg != '') : ?>
                                            <div class="alert <?php echo $msgClass ?> text-center h1">
                                                <?php echo $msg ?>
                                                <button type="button" class="close" data-dismiss="alert"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <?php endif; ?>
                                            <form action="./systemadministrator/create_account.php" method="POST"
                                                enctype="multipart/form-data" class="was-validated">
                                                <div class="form-group ">
                                                    <label for="userPhoto">User Image</label>
                                                    <input type="file" name="userPhoto" class="form-control-file"
                                                        id="userPhoto" accept="image/*" onchange="preview_image(event)">
                                                    <img class="img-thumbnail" id="output_image"
                                                        style="border-radius: 50%;height: auto; max-width: 50%;" />
                                                </div>


                                                <div class="form-group">
                                                    <label class="form-label" for="fullName">Full Name</label>
                                                    <input type="text" id="fullName" name="fullName"
                                                        class="form-control" placeholder="Enter Full Name">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="pNumber">Phone Number</label>
                                                    <input type="text" id="pNumber" name="phoneNumber"
                                                        class="form-control" placeholder="Enter phone number">
                                                </div>

                                                <div class="form-group">
                                                    <label class="form-label" for="age">Age</label>
                                                    <input type="number" id="age" name="age" class="form-control"
                                                        placeholder="Enter Age">
                                                </div>

                                                <!-- <div class="form-group">
                                                    <div class="form-control-wrap">
                                                        <div class="form-icon form-icon-right">
                                                            <em class="icon ni ni-calendar-alt"></em>
                                                        </div>
                                                        <input type="text" name="date"
                                                            class="form-control form-control-xl form-control-outlined date-picker"
                                                            id="outlined-date-picker">
                                                        <label class="form-label-outlined"
                                                            for="outlined-date-picker">Date </label>
                                                    </div>
                                                </div> -->
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="form-label"
                                                                for="nationality">Nationality</label>
                                                            <input type="text" id="nationality" name="nationality"
                                                                class="form-control" placeholder="Enter Nationality">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="form-label" for="woreda">Woreda</label>
                                                            <input type="text" id="woreda" name="woreda"
                                                                class="form-control" placeholder="Enter Woreda">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="form-label" for="kebele">Kebel</label>
                                                            <input type="text" id="kebele" name="kebele"
                                                                class="form-control" placeholder="Enter kebele">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="jobTitle">Job Title</label>
                                                    <div class="form-control-wrap ">
                                                        <div class="form-control-select">
                                                            <select name="role" class="form-control" id="jobTitle-06">
                                                                <option value="recordOfficer">
                                                                    Record Officer</option>
                                                                <option value="chairMan">chairMan
                                                                </option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="jobTitle">Job Location</label>
                                                    <div class="form-control-wrap ">
                                                        <div class="form-control-select">
                                                            <select name="jobLocation" class="form-control"
                                                                id="jobTitle-06">
                                                                <option value="Kebel One">
                                                                    Kebele One</option>
                                                                <option value="Kebel One">
                                                                    Kebele Two</option>
                                                                <option value="Kebel Two">
                                                                    Kebele One</option>
                                                                <option value="Kebel Three">
                                                                    Kebele Three</option>


                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="userName">UserName</label>
                                                    <input type="text" name="username" class="form-control"
                                                        placeholder="Enter username">
                                                </div>
                                                <div class="form-group">
                                                    <label for="password">Password</label>
                                                    <input id="password" type="password" name="password"
                                                        class="form-control">
                                                </div>
                                                <button name="submit" type="submit"
                                                    class="btn btn-primary btn-block">Submit</button>

                                            </form>
                                        </div>
                                    </div>
                                </div><!-- .nk-block -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content @e -->
                <!-- footer @s -->
                <?php include './include/footer.php' ?>
                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    <?php include '../include/script.php' ?>
</body>

</html>