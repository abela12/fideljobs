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
    $username = $_POST['username'];


    $recordOfficerId = $_SESSION['id'];

    $houseType = $_POST['houseType'];

    $houseNumber = $_POST['houseNumber'];

    $woreda = $_POST['woreda'];

    $kebele = $_POST['kebele'];

    $numberOfFamily = $_POST['numberOfFamily'];

    $housePart = $_POST['housePart'];


    $kareMeter = $_POST['kareMeter'];

    $username = $_POST['username'];



    // execute if no error 
    $sql = mysqli_query($conn, "INSERT INTO `house`(`recordOfficerId`, `username`, `houseType`, `houseNumber`, `woreda`, `kebele`, `numberOfFamily`, `housePart`, `kareMeter`) VALUES ('$recordOfficerId',
    '$username','$houseType','$houseNumber','$woreda','$kebele','$numberOfFamily','$housePart','$kareMeter')");
    if ($sql) {

        $msg = "House Register Successfully 🚀!!";
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
                                            <h3>Register House</h3>
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
                                            <form action="./recordOfficer/register_house.php" method="POST"
                                                enctype="multipart/form-data" class="was-validated">

                                                <div class="form-group">
                                                    <label class="form-label" for="username">Username
                                                    </label>
                                                    <input type="text" id="username" name="username"
                                                        class="form-control" required>
                                                </div>


                                                <div class="form-group">
                                                    <label class="form-label" for="houseType">House Type</label>
                                                    <div class="form-control-wrap ">
                                                        <div class="form-control-select">
                                                            <select name="houseType" class="form-control"
                                                                id="houseType">
                                                                <option value="የግል">
                                                                    የግል</option>
                                                                <option value="የመንግስት">
                                                                    የመንግስት</option>


                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="form-label" for="houseNumber">House
                                                                Number</label>
                                                            <input type="number" id="houseNumber" name="houseNumber"
                                                                class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="form-label" for="woreda">Woreda</label>
                                                            <input type="text" id="woreda" name="woreda"
                                                                class="form-control" placeholder="Enter Woreda"
                                                                required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="form-label" for="kebele">Kebele</label>
                                                            <input type="number" id="kebele" name="kebele"
                                                                class="form-control" placeholder="Enter Kebel" required>
                                                        </div>
                                                    </div>


                                                </div>




                                                <div class="row my-2">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="form-label" for="numberOfFamily">Number Of
                                                                Family</label>
                                                            <input type="text" id="numberOfFamily" name="numberOfFamily"
                                                                class="form-control" placeholder="Enter no Family"
                                                                required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="form-label" for="housePart">house Part</label>
                                                            <input type="text" id="housePart" name="housePart"
                                                                class="form-control" placeholder="Enter housePart"
                                                                required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label" for="kareMeter">kareMeter /የቤቱ ይዞታ
                                                                ስፋት በ ካሬ
                                                                ሜትር</label>
                                                            <input type="number" id="kareMeter" name="kareMeter"
                                                                class="form-control" placeholder="Enter kareMeter"
                                                                required>
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