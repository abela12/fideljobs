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



?>
<?php
echo $uid = intval($_GET['id']);
$selectUser = mysqli_query($conn, "SELECT `userPhoto` FROM `user` WHERE `id`='$uid'");
while ($data = mysqli_fetch_assoc($selectUser)) {
    $oldPhoto =  $data['userPhoto'];
}
$msgClass = "";
$msg = "";
$userNameError = "";
if (isset($_POST['submit'])) {

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

    if (empty($userPhoto)) {
        $userPhoto = $oldPhoto;
    }

    $target = "../images/" . basename($userPhoto);
    if (move_uploaded_file($_FILES['userPhoto']['tmp_name'], $target)) {
        //    echo $msg1 = "Image uploaded successfully";
    } else {
        //   echo  $msg1 = "Failed to upload image"; validation
    }
    // execute if no error
    $sqlupdate = mysqli_query($conn, "UPDATE `user` SET `fullName`='$fullName',`phoneNumber`='$phoneNumber',`age`='$age',`nationality`='$nationality',`woreda`='$woreda',`kebele`='$kebele',
        `role`='$role',`jobLocation`='$jobLocation',`userPhoto`='$userPhoto',`username`='$username',`password`='$password' WHERE `id` = '$uid'");
    if ($sqlupdate) {

        $msg = "User Updated Successfully 🚀!!";
    } else {
        $msgClass = "alert-danger";
        $msg = "Can't Created 👮‍♂️!!";
    }
    // }
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
                                            <div class="alert <?php echo $msgClass ?> text-center h3">
                                                <?php echo $msg ?>
                                                <button type="button" class="close" data-dismiss="alert"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <?php endif; ?>

                                            <?php
                                            $sql = mysqli_query($conn, "SELECT * FROM `user` WHERE `id` = '$uid'");
                                            while ($row = mysqli_fetch_assoc($sql)) {
                                                $fullName = $row['fullName'];
                                                $username = $row['username'];
                                                $password = $row['password'];

                                                $phoneNumber = $row['phoneNumber'];

                                                $age = $row['age'];

                                                $nationality = $row['nationality'];

                                                $woreda = $row['woreda'];
                                                $userPhoto = $row['userPhoto'];

                                                $kebele = $row['kebele'];
                                                $date = $row['date'];

                                                $role = $row['role'];

                                                $jobLocation = $row['jobLocation'];
                                                $status = $row['status'];
                                                if ($status == 'active') {
                                                    $statCls = 'badge badge-success';
                                                } else {
                                                    $statCls = 'badge badge-danger';
                                                }
                                            ?>
                                            <form action="" method="POST" enctype="multipart/form-data"
                                                class="was-validated">
                                                <div class="form-group ">
                                                    <img src="./images/<?php echo $userPhoto ?>" width="200px" alt="">
                                                    <label for="userPhoto">User Image</label>
                                                    <input type="file" name="userPhoto" class="form-control-file"
                                                        id="userPhoto" accept="image/*" onchange="preview_image(event)">
                                                    <img class="img-thumbnail" id="output_image"
                                                        style="border-radius: 50%;height: auto; max-width: 50%;" />
                                                </div>


                                                <div class="form-group">
                                                    <label class="form-label" for="fullName">Full Name</label>
                                                    <input type="text" id="fullName" name="fullName"
                                                        class="form-control" placeholder="Enter Full Name"
                                                        value="<?php echo htmlspecialchars($fullName) ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="pNumber">Phone Number</label>
                                                    <input type="text" id="pNumber" name="phoneNumber"
                                                        class="form-control" placeholder="Enter phone number"
                                                        value="<?php echo htmlspecialchars($phoneNumber) ?>">
                                                </div>

                                                <div class="form-group">
                                                    <label class="form-label" for="age">Age</label>
                                                    <input type="number" id="age" name="age" class="form-control"
                                                        placeholder="Enter Age"
                                                        value="<?php echo htmlspecialchars($age) ?>">
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
                                                                class="form-control" placeholder="Enter Nationality"
                                                                value="<?php echo htmlspecialchars($nationality) ?>">
                                                        </div>
                                                    </div>
                                                    <div class=" col-md-4">
                                                        <div class="form-group">
                                                            <label class="form-label" for="woreda">Woreda</label>
                                                            <input type="text" id="woreda" name="woreda"
                                                                class="form-control" placeholder="Enter Woreda"
                                                                value="<?php echo htmlspecialchars($woreda) ?>">
                                                        </div>
                                                    </div>
                                                    <div class=" col-md-4">
                                                        <div class="form-group">
                                                            <label class="form-label" for="kebele">Kebel</label>
                                                            <input type="text" id="kebele" name="kebele"
                                                                class="form-control" placeholder="Enter kebele"
                                                                value="<?php echo htmlspecialchars($kebele) ?> ">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="jobTitle">Job Title</label>
                                                    <div class="form-control-wrap ">
                                                        <div class="form-control-select">
                                                            <select name="role" class="form-control" id="jobTitle-06">
                                                                <option value="<?php echo htmlspecialchars($role) ?>">
                                                                    <?php echo htmlspecialchars($role) ?></option>
                                                                <option value="chairMan">chairMan
                                                                </option>
                                                                <option value="recordOfficer">Record Officer
                                                                </option>
                                                                <option value="admin">Admin
                                                                </option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="jobTitle">Job
                                                        Location</label>
                                                    <div class="form-control-wrap ">
                                                        <div class="form-control-select">
                                                            <select name="jobLocation" class="form-control"
                                                                id="jobTitle-06">
                                                                <option
                                                                    value="<?php echo htmlspecialchars($jobLocation) ?>">
                                                                    <?php echo htmlspecialchars($jobLocation) ?>
                                                                </option>
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
                                                        placeholder="Enter username"
                                                        value=" <?php echo htmlspecialchars($username) ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="password">Password</label>
                                                    <input id="password" type="password" name="password"
                                                        class="form-control"
                                                        value=" <?php echo htmlspecialchars($password) ?>">
                                                </div>
                                                <button name="submit" type="submit"
                                                    class="btn btn-primary btn-block">Submit</button>

                                            </form>
                                            <?php } ?>
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