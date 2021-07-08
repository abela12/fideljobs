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
                                    <div class="card-inner card-inner-lg">
                                        <div class="nk-block-head nk-block-head-lg">
                                            <div class="nk-block-between">
                                                <div class="nk-block-head-content">
                                                    <h4 class="nk-block-title">Personal Information</h4>
                                                    <div class="nk-block-des">
                                                        <p>Basic info, like your name and address..</p>
                                                    </div>
                                                </div>
                                                <div class="nk-block-head-content align-self-start d-lg-none">
                                                    <a href="#" class="toggle btn btn-icon btn-trigger mt-n1"
                                                        data-target="userAside"><em
                                                            class="icon ni ni-menu-alt-r"></em></a>
                                                </div>
                                            </div>
                                        </div><!-- .nk-block-head -->
                                        <?php
                                        $sql = mysqli_query($conn, "SELECT * FROM `user` WHERE `id`='$_SESSION[id]'");
                                        while ($row = mysqli_fetch_assoc($sql)) {
                                            $fullName = $row['fullName'];

                                            $phoneNumber = $row['phoneNumber'];

                                            $age = $row['age'];

                                            $nationality = $row['nationality'];

                                            $woreda = $row['woreda'];

                                            $kebele = $row['kebele'];

                                            $role = $row['role'];

                                            $jobLocation = $row['jobLocation'];

                                            $userPhoto = $row['userPhoto'];

                                            $username = $row['username'];
                                        ?>


                                        <div class="nk-block ">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="nk-data data-list">
                                                        <div class="data-head">
                                                            <h6 class="overline-title">Basics</h6>
                                                        </div>
                                                        <div class="data-item" data-toggle="modal"
                                                            data-target="#profile-edit">
                                                            <div class="data-col">
                                                                <span class="data-label">Full Name</span>
                                                                <span
                                                                    class="data-value"><?php echo htmlspecialchars($fullName) ?></span>
                                                            </div>
                                                            <div class="data-col data-col-end"><span
                                                                    class="data-more"><em
                                                                        class="icon ni ni-forward-ios"></em></span>
                                                            </div>
                                                        </div><!-- data-item -->
                                                        <div class="data-item" data-toggle="modal"
                                                            data-target="#profile-edit">
                                                            <div class="data-col">
                                                                <span class="data-label">User Name</span>
                                                                <span
                                                                    class="data-value"><?php echo htmlspecialchars_decode($username) ?></span>
                                                            </div>
                                                            <div class="data-col data-col-end"><span
                                                                    class="data-more"><em
                                                                        class="icon ni ni-forward-ios"></em></span>
                                                            </div>
                                                        </div><!-- data-item -->

                                                        <div class="data-item" data-toggle="modal"
                                                            data-target="#profile-edit">
                                                            <div class="data-col">
                                                                <span class="data-label">Phone Number</span>
                                                                <span
                                                                    class="data-value text-soft"><?php echo htmlspecialchars($phoneNumber) ?></span>
                                                            </div>
                                                            <div class="data-col data-col-end"><span
                                                                    class="data-more"><em
                                                                        class="icon ni ni-forward-ios"></em></span>
                                                            </div>
                                                        </div><!-- data-item -->
                                                        <div class="data-item" data-toggle="modal"
                                                            data-target="#profile-edit">
                                                            <div class="data-col">
                                                                <span class="data-label">Age</span>
                                                                <span
                                                                    class="data-value"><?php echo htmlspecialchars($age) ?></span>
                                                            </div>
                                                            <div class="data-col data-col-end"><span
                                                                    class="data-more"><em
                                                                        class="icon ni ni-forward-ios"></em></span>
                                                            </div>
                                                        </div><!-- data-item -->
                                                        <div class="data-item" data-toggle="modal"
                                                            data-target="#profile-edit" data-tab-target="#address">
                                                            <div class="data-col">
                                                                <span class="data-label">Address</span>
                                                                <span
                                                                    class="data-value"><?php echo htmlspecialchars($jobLocation) ?>
                                                            </div>
                                                            <div class="data-col data-col-end"><span
                                                                    class="data-more"><em
                                                                        class="icon ni ni-forward-ios"></em></span>
                                                            </div>
                                                        </div><!-- data-item -->
                                                        <div class="data-item" data-toggle="modal"
                                                            data-target="#profile-edit" data-tab-target="#address">
                                                            <div class="data-col">
                                                                <span class="data-label">Nationality</span>
                                                                <span
                                                                    class="data-value"><?php echo htmlspecialchars($nationality) ?>
                                                            </div>
                                                            <div class="data-col data-col-end"><span
                                                                    class="data-more"><em
                                                                        class="icon ni ni-forward-ios"></em></span>
                                                            </div>
                                                        </div><!-- data-item -->
                                                        <div class="data-item" data-toggle="modal"
                                                            data-target="#profile-edit" data-tab-target="#address">
                                                            <div class="data-col">
                                                                <span class="data-label">Woreda</span>
                                                                <span
                                                                    class="data-value"><?php echo htmlspecialchars($woreda) ?>
                                                            </div>
                                                            <div class="data-col data-col-end"><span
                                                                    class="data-more"><em
                                                                        class="icon ni ni-forward-ios"></em></span>
                                                            </div>
                                                        </div><!-- data-item -->
                                                        <div class="data-item" data-toggle="modal"
                                                            data-target="#profile-edit" data-tab-target="#address">
                                                            <div class="data-col">
                                                                <span class="data-label">Kebele</span>
                                                                <span
                                                                    class="data-value"><?php echo htmlspecialchars($kebele) ?>
                                                            </div>
                                                            <div class="data-col data-col-end"><span
                                                                    class="data-more"><em
                                                                        class="icon ni ni-forward-ios"></em></span>
                                                            </div>
                                                        </div><!-- data-item -->
                                                    </div><!-- data-list -->
                                                </div>
                                                <div class="col-md-4">
                                                    <img class="img" src="./images/<?php echo $userPhoto ?>" alt="">
                                                </div>
                                            </div>

                                        </div><!-- .nk-block -->
                                        <?php
                                        }

                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .card-preview -->
                    </div>
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
    <script src="./assets/js/bundle.js?ver=2.4.0"></script>
    <script src="./assets/js/scripts.js?ver=2.4.0"></script>
    <script src="./assets/js/charts/gd-default.js?ver=2.4.0"></script>
</body>

</html>