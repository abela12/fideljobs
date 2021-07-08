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
$recordOfficerId = $_SESSION['id'];
$msgClass = "";
$msg = "";
$userNameError = "";
if (isset($_POST['submit'])) {
    "<h1>It works</h1>";
    $residentUsername = $_POST['residentUsername'];
    $firstName = $_POST['firstName'];

    $middleName = $_POST['middleName'];

    $lastName = $_POST['lastName'];

    $nationality = $_POST['nationality'];

    $woreda = $_POST['woreda'];

    $region = $_POST['region'];

    $kebele = $_POST['kebele'];

    $birthDate = $_POST['birthDate'];

    $userPhoto = $_FILES['userPhoto']['name'];

    $gender = $_POST['gender'];
    $houseNumber = $_POST['houseNumber'];
    $phoneNumber = $_POST['phoneNumber'];
    $motherFullName = $_POST['motherFullName'];
    $fatherFullName = $_POST['fatherFullName'];
    $levelOfEducation = $_POST['levelOfEducation'];
    $profession = $_POST['profession'];
    $maritalStatus = $_POST['maritalStatus'];
    $emergencyFamilyName = $_POST['emergencyFamilyName'];
    $emergencyFamilyNumber = $_POST['emergencyFamilyNumber'];

    $city = $_POST['city'];



    $target = "../images/" . basename($userPhoto);
    if (move_uploaded_file($_FILES['userPhoto']['tmp_name'], $target)) {
        //    echo $msg1 = "Image uploaded successfully";
    } else {
        //   echo  $msg1 = "Failed to upload image"; validation
    }
    // execute if no error
    $sql = mysqli_query($conn, "INSERT INTO `resident`(`residentUsername`, `recordOfficerId`, `userPhoto`, `firstName`, `middleName`, `lastName`, `nationality`, `woreda`, `region`, `kebele`, `birthDate`, `gender`, `houseNumber`, `phoneNumber`, `motherFullName`, `fatherFullName`, `levelOfEducation`, `profession`, `maritalStatus`, `emergencyFamilyName`, `emergencyFamilyNumber`, `city`) VALUES ('$residentUsername','$recordOfficerId','$userPhoto','$firstName','$middleName','$lastName','$nationality','$woreda','$region','$kebele','$birthDate','$gender','$houseNumber','$phoneNumber','$motherFullName','$fatherFullName','$levelOfEducation','$profession','$maritalStatus','$emergencyFamilyName','$emergencyFamilyNumber','$city')");
    if ($sql) {

        $msg = "Account Created Successfully 🚀!!";
    } else {
        $msgClass = "alert-danger";
        $msg = "Can't Created 👮‍♂️!!";
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
                                            <h3>Create Account For Resident</h3>
                                            <?php echo $userNameError; ?>
                                            <?php if ($msg != '') : ?>
                                            <div class="alert <?php echo $msgClass ?> text-center h4">
                                                <?php echo $msg ?>
                                                <button type="button" class="close" data-dismiss="alert"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <?php endif; ?>
                                            <form action="./recordOfficer/register_resident.php" method="POST"
                                                enctype="multipart/form-data" class="was-validated">
                                                <div class="form-group ">
                                                    <label for="userPhoto">User Image</label>
                                                    <input type="file" name="userPhoto" class="form-control-file"
                                                        id="userPhoto" accept="image/*" onchange="preview_image(event)">
                                                    <img class="img-thumbnail" id="output_image"
                                                        style="border-radius: 50%;height: auto; max-width: 50%;" />
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="form-label"
                                                                for="residentUsername">UserName</label>
                                                            <input type="text" id="residentUsername"
                                                                name="residentUsername" class="form-control"
                                                                placeholder="Enter username">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="form-label" for="firstName">First Name</label>
                                                            <input type="text" id="firstName" name="firstName"
                                                                class="form-control" placeholder="Enter First Name">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="form-label" for="middleName">Middle
                                                                Name</label>
                                                            <input type="text" id="middleName" name="middleName"
                                                                class="form-control" placeholder="Enter Middle Name">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="form-label" for="lastName">Last Name</label>
                                                            <input type="text" id="lastName" name="lastName"
                                                                class="form-control" placeholder="Enter Last Name">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row my-2">
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
                                                            <label class="form-label" for="region">Region</label>
                                                            <input type="text" id="region" name="region"
                                                                class="form-control" placeholder="Enter region">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row my-2">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="form-label" for="kebele">Kebele</label>
                                                            <input type="text" id="kebele" name="kebele"
                                                                class="form-control" placeholder="Enter kebele">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="form-label" for="birthDate">Birth date</label>
                                                            <input type="date" id="birthDate" name="birthDate"
                                                                class="form-control" placeholder="Enter Last Name">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="form-label" for="gender">Sex</label>
                                                            <select name="gender" id="gender" class="form-control">
                                                                <option value="male">Male</option>
                                                                <option value="female">Female</option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row my-2">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="form-label" for="houseNumber">House
                                                                Number</label>
                                                            <input type="number" id="houseNumber" name="houseNumber"
                                                                class="form-control" placeholder="Enter houseNumber">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="form-label" for="phoneNumber">Phone
                                                                Number</label>
                                                            <input type="text" id="phoneNumber" name="phoneNumber"
                                                                class="form-control" placeholder="Enter phone number">
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="form-group">
                                                    <label class="form-label" for="motherFullName">Mother
                                                        FullName</label>
                                                    <input type="text" id="motherFullName" name="motherFullName"
                                                        class="form-control" placeholder="Enter Mother Full Name">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="fatherFullName">Father Full
                                                        Name</label>
                                                    <input type="text" id="fatherFullName" name="fatherFullName"
                                                        class="form-control" placeholder="Enter father full name">
                                                </div>

                                                <div class="row my-3">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label" for="levelOfEducation">Level Of
                                                                Education</label>
                                                            <select name="levelOfEducation" id="levelOfEducation"
                                                                class="form-control">
                                                                <option value="Elementary">Elementary</option>
                                                                <option value="Junior Secondary">Junior Secondary
                                                                </option>
                                                                <option value="Elementary">Elementary</option>
                                                                <option value="(TVET) Level III Diploma">(TVET) Level
                                                                    III
                                                                    Diploma</option>
                                                                <option value="Bachelor of Education">Bachelor of
                                                                    Education
                                                                </option>
                                                                <option value="Bachelor of Arts/Science">Bachelor of
                                                                    Arts/Science</option>
                                                                <option value="Master">Master</option>
                                                                <option value="Doctorate">Doctorate</option>
                                                            </select>



                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mt-1">
                                                        <div class="form-group">
                                                            <label class="form-label"
                                                                for="profession">Profession</label>
                                                            <input type="text" id="profession" name="profession"
                                                                class="form-control" placeholder="Enter profession">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label"
                                                                for="maritalStatus">MaritalStatus</label>
                                                            <select class="form-control" name="maritalStatus"
                                                                id="maritalStatus">
                                                                <option value="Unmarried">Unmarried</option>
                                                                <option value="Married">Married</option>
                                                                <option value="Divorce">Divorce</option>
                                                                <option value="Widowed">Widowed</option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label"
                                                                for="emergencyFamilyName">Emergency Contact Name</label>
                                                            <input type="text" id="emergencyFamilyName"
                                                                name="emergencyFamilyName" class="form-control"
                                                                placeholder="Enter Emergency Contact">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label"
                                                                for="emergencyFamilyNumber">Emergency Contact
                                                                Name</label>
                                                            <input type="text" id="emergencyFamilyNumber"
                                                                name="emergencyFamilyNumber" class="form-control"
                                                                placeholder="Enter Emergency Contact Number">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label" for="City">City</label>
                                                            <select class="form-control" name="city" id="city">
                                                                <option value="Arada Sub City">Arada Sub City</option>
                                                                <option value="Akaki Kaliti Sub City">Akaki Kaliti Sub
                                                                    City</option>
                                                                <option value="Addis Ketema Sub City">Addis Ketema Sub
                                                                    City</option>
                                                                <option value="Bole Sub City">Bole Sub City</option>
                                                                <option value="Gullele Sub City">Gullele Sub City
                                                                </option>
                                                                <option value="Kirkos Sub City">Kirkos Sub City</option>
                                                                <option value="Kolfe Keranio Sub City">Kolfe Keranio Sub
                                                                    City</option>
                                                                <option value="Lideta Sub City">Lideta Sub City</option>
                                                                <option value="Nefas Silk Sub City">Nefas Silk Sub City
                                                                </option>
                                                                <option value="Yeka Sub City">Yeka Sub City</option>
                                                                <option value=" ከአዲስ አበባ ውጪ">Other/ ከአዲስ አበባ ውጪ</option>



                                                            </select>
                                                        </div>
                                                    </div>

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