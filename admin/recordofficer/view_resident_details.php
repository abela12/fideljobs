<!DOCTYPE html>
<html lang="zxx" class="js">

<?php include './include/header.php' ?>
<?php include '../database/database.php' ?>
<?php include '../include/session.php' ?>
<?php require '../include/function.php' ?>
<?php
//login confirmation
confirm_logged_in();
$recordOfficerId = $_SESSION['id'];
$uid = intval($_GET['id']);
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
                                    <div class="container-fluid">
                                        <div class="nk-content-inner">
                                            <div class="nk-content-body">
                                                <?php
                                                $sql = mysqli_query($conn, "SELECT * FROM `resident` WHERE `recordOfficerId` = '$recordOfficerId' AND `id` = '$uid'");
                                                while ($row = mysqli_fetch_assoc($sql)) {
                                                    $residentUsername = $row['residentUsername'];
                                                    $firstName = $row['firstName'];

                                                    $middleName = $row['middleName'];

                                                    $lastName = $row['lastName'];

                                                    $nationality = $row['nationality'];

                                                    $woreda = $row['woreda'];

                                                    $region = $row['region'];

                                                    $kebele = $row['kebele'];

                                                    $birthDate = $row['birthDate'];

                                                    $userPhoto = $row['userPhoto'];

                                                    $gender = $row['gender'];
                                                    $houseNumber = $row['houseNumber'];
                                                    $phoneNumber = $row['phoneNumber'];
                                                    $motherFullName = $row['motherFullName'];
                                                    $fatherFullName = $row['fatherFullName'];
                                                    $levelOfEducation = $row['levelOfEducation'];
                                                    $profession = $row['profession'];
                                                    $maritalStatus = $row['maritalStatus'];
                                                    $emergencyFamilyName = $row['emergencyFamilyName'];
                                                    $emergencyFamilyNumber = $row['emergencyFamilyNumber'];

                                                    $city = $row['city'];


                                                    $status = $row['status'];
                                                    if ($status == 'active') {
                                                        $statCls = 'badge badge-dim badge-sm badge-outline-success';
                                                    } else {
                                                        $statCls = 'badge badge-dim badge-sm badge-outline-danger';
                                                    }
                                                ?>
                                                <div class="nk-block-head nk-block-head-sm">
                                                    <div class="nk-block-between g-3">
                                                        <div class="nk-block-head-content">
                                                            <h3 class="nk-block-title page-title">Main / <strong
                                                                    class="text-primary small">Resident Detail</strong>
                                                            </h3>
                                                            <div class="nk-block-des text-soft">
                                                                <ul class="list-inline">
                                                                    <li> resident ID: <span
                                                                            class="text-base"><?php echo $row['id'] ?></span>
                                                                    </li>
                                                                    <li>Register At: <span
                                                                            class="text-base"><?php echo $row['createdDate'] ?>
                                                                            PM</span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="nk-block-head-content">
                                                            <a href="recordOfficer/view_resident.php"
                                                                class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em
                                                                    class="icon ni ni-arrow-left"></em><span>Back</span></a>
                                                            <a href="recordOfficer/view_resident.php"
                                                                class="btn btn-icon btn-outline-light bg-white d-inline-flex d-sm-none"><em
                                                                    class="icon ni ni-arrow-left"></em></a>
                                                        </div>
                                                    </div>
                                                </div><!-- .nk-block-head -->
                                                <div class="nk-block">
                                                    <div class="row gy-5">
                                                        <div class="col-lg-5">
                                                            <div class="nk-block-head">
                                                                <div class="nk-block-head-content">
                                                                    <h5 class="nk-block-title title">Application Info
                                                                    </h5>
                                                                    <p>Submission date, approve date, status etc.</p>
                                                                </div>
                                                            </div><!-- .nk-block-head -->
                                                            <div class="card card-bordered">
                                                                <ul class="data-list is-compact">
                                                                    <li class="data-item">
                                                                        <div class="data-col">
                                                                            <div class="data-label">Submitted By</div>
                                                                            <div class="data-value">
                                                                                <?php echo htmlspecialchars($woreda) ?>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="data-item">
                                                                        <div class="data-col">
                                                                            <div class="data-label">Submitted At</div>
                                                                            <div class="data-value">
                                                                                <?php echo $row['createdDate'] ?>
                                                                                PM</div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="data-item">
                                                                        <div class="data-col">
                                                                            <div class="data-label">Status</div>
                                                                            <div class="data-value"><span
                                                                                    class="<?php echo $statCls ?>">
                                                                                    <?php echo htmlspecialchars($status) ?></span>
                                                                            </div>
                                                                        </div>
                                                                    </li>

                                                                    <li class="data-item">
                                                                        <div class="data-col">
                                                                            <div class="data-label">username
                                                                            </div>
                                                                            <div class="data-value">
                                                                                <?php echo htmlspecialchars($residentUsername) ?>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div><!-- .card -->
                                                            <div class="nk-block-head">
                                                                <div class="nk-block-head-content">
                                                                    <h5 class="nk-block-title title">Resident Image
                                                                    </h5>
                                                                    <p>Here is Resident uploaded image.</p>
                                                                </div>
                                                            </div><!-- .nk-block-head -->
                                                            <div class="card card-bordered">
                                                                <ul class="data-list is-compact">
                                                                    <img src="./images/<?php echo $userPhoto ?>" alt="">
                                                                </ul>
                                                            </div><!-- .card -->
                                                        </div><!-- .col -->
                                                        <div class="col-lg-7">
                                                            <div class="nk-block-head">
                                                                <div class="nk-block-head-content">
                                                                    <h5 class="nk-block-title title">Applicant
                                                                        Information</h5>
                                                                    <p>Basic info, like name, phone, address, country
                                                                        etc.</p>
                                                                </div>
                                                            </div>
                                                            <div class="card card-bordered">
                                                                <ul class="data-list is-compact">
                                                                    <li class="data-item">
                                                                        <div class="data-col">
                                                                            <div class="data-label">First Name</div>
                                                                            <div class="data-value">
                                                                                <?php echo htmlspecialchars($firstName) ?>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="data-item">
                                                                        <div class="data-col">
                                                                            <div class="data-label">Middle Name</div>
                                                                            <div class="data-value">
                                                                                <?php echo htmlspecialchars($middleName) ?>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="data-item">
                                                                        <div class="data-col">
                                                                            <div class="data-label">Last Name</div>
                                                                            <div class="data-value">
                                                                                <?php echo htmlspecialchars($lastName) ?>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="data-item">
                                                                        <div class="data-col">
                                                                            <div class="data-label">City</div>
                                                                            <div class="data-value">
                                                                                <?php echo htmlspecialchars($city) ?>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="data-item">
                                                                        <div class="data-col">
                                                                            <div class="data-label">Phone Number</div>
                                                                            <div class="data-value text-soft">
                                                                                <em><?php echo htmlspecialchars($phoneNumber) ?></em>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="data-item">
                                                                        <div class="data-col">
                                                                            <div class="data-label">Date of Birth</div>
                                                                            <div class="data-value">
                                                                                <?php echo htmlspecialchars($birthDate) ?>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="data-item">
                                                                        <div class="data-col">
                                                                            <div class="data-label">Full Address</div>
                                                                            <div class="data-value">
                                                                                <?php echo $nationality . ', ' . $woreda . ', kebele ' . $kebele ?>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="data-item">
                                                                        <div class="data-col">
                                                                            <div class="data-label">Country of Residence
                                                                            </div>
                                                                            <div class="data-value">
                                                                                <?php echo htmlspecialchars($nationality) ?>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="data-item">
                                                                        <div class="data-col">
                                                                            <div class="data-label">Father Full Name
                                                                            </div>
                                                                            <div class="data-value">
                                                                                <?php echo htmlspecialchars($fatherFullName) ?>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="data-item">
                                                                        <div class="data-col">
                                                                            <div class="data-label">Mother Full Name
                                                                            </div>
                                                                            <div class="data-value">
                                                                                <?php echo htmlspecialchars($motherFullName) ?>
                                                                            </div>
                                                                        </div>
                                                                    </li>

                                                                    <li class="data-item">
                                                                        <div class="data-col">
                                                                            <div class="data-label">ደርሰኝ የከፈለበት ID</div>
                                                                            <div class="data-value text-break">
                                                                                234546667857</div>
                                                                        </div>
                                                                    </li>

                                                                </ul>
                                                            </div>
                                                        </div><!-- .col -->
                                                    </div><!-- .row -->
                                                </div><!-- .nk-block -->
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--nk block -->
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