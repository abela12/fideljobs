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

// $alert = false;
// $alertStatus = "";
// $alertMsg1 = "";
// $alertMsg2 = "";
if (isset($_GET['status'])) {
    echo $id = $_GET['id'];
    if ($_GET['status'] == 'active') {
        mysqli_query($conn, "UPDATE `user` SET `status`= 'active' WHERE  `id`= '$id'");
        // $alert = true;
        // $alertMsg1 = "User Active !!";
        // $alertStatus = "alert-success";
        // $alertMsg2 = " account status has been updated accordingly. ";
        header("location:manage_account_for_resident.php");
    } else if ($_GET['status'] == 'disable') {
        mysqli_query($conn, "UPDATE `user` SET `status`= 'disable' WHERE  `id`= '$id'");
        $_SESSION['delmsg'] = "User Suspend !!";
        header("location:manage_account_for_resident.php");
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
                                <div class="nk-block nk-block-lg">
                                    <div class="nk-block-head">
                                        <div class="nk-block-head-content">
                                            <h4 class="nk-block-title">Data List For Resident</h4>
                                            <div class="nk-block-des">

                                                <!-- <?php
                                                        if ($alert == true) {
                                                        ?>
                                                <div class="col-md-8 example-alert">
                                                    <div
                                                        class="alert alert-fill <?php echo $alertStatus ?> alert-dismissible alert-icon">
                                                        <em class="icon ni ni-chick-circle"></em>
                                                        <strong><?php echo $alertMsg1 ?></strong>.
                                                        <?php echo $alertMsg2 ?> <button class="close"
                                                            data-dismiss="alert"></button>
                                                    </div>
                                                </div>
                                                <?php
                                                        }

                                                ?> -->

                                            </div>
                                        </div>
                                    </div>
                                    <div class="card card-preview">
                                        <div class="card-inner">
                                            <div id="DataTables_Table_1_wrapper"
                                                class="dataTables_wrapper dt-bootstrap4 no-footer">

                                                <div class="datatable-wrap my-3">
                                                    <table
                                                        class="datatable-init nowrap nk-tb-list nk-tb-ulist dataTable no-footer"
                                                        data-auto-responsive="false" id="DataTables_Table_1" role="grid"
                                                        aria-describedby="DataTables_Table_1_info">
                                                        <thead>
                                                            <tr class="nk-tb-item nk-tb-head" role="row">

                                                                <th class="nk-tb-col sorting" tabindex="0"
                                                                    aria-controls="DataTables_Table_1" rowspan="1"
                                                                    colspan="1"
                                                                    aria-label="User: activate to sort column ascending">
                                                                    <span class="sub-text">User</span>
                                                                </th>
                                                                <th class="nk-tb-col tb-col-mb sorting" tabindex="0"
                                                                    aria-controls="DataTables_Table_1" rowspan="1"
                                                                    colspan="1"
                                                                    aria-label="Role: activate to sort column ascending">
                                                                    <span class="sub-text">Role</span>
                                                                </th>
                                                                <th class="nk-tb-col tb-col-md sorting" tabindex="0"
                                                                    aria-controls="DataTables_Table_1" rowspan="1"
                                                                    colspan="1"
                                                                    aria-label="Phone: activate to sort column ascending">
                                                                    <span class="sub-text">Phone</span>
                                                                </th>

                                                                <th class="nk-tb-col tb-col-lg sorting" tabindex="0"
                                                                    aria-controls="DataTables_Table_1" rowspan="1"
                                                                    colspan="1"
                                                                    aria-label="Job Location: activate to sort column ascending">
                                                                    <span class="sub-text">Current Address</span>
                                                                </th>
                                                                <th class="nk-tb-col tb-col-lg sorting" tabindex="0"
                                                                    aria-controls="DataTables_Table_1" rowspan="1"
                                                                    colspan="1"
                                                                    aria-label="Job Start: activate to sort column ascending">
                                                                    <span class="sub-text">Account Created at </span>
                                                                </th>
                                                                <th class="nk-tb-col tb-col-md sorting" tabindex="0"
                                                                    aria-controls="DataTables_Table_1" rowspan="1"
                                                                    colspan="1"
                                                                    aria-label="Status: activate to sort column ascending">
                                                                    <span class="sub-text">Status</span>
                                                                </th>
                                                                <th class="nk-tb-col nk-tb-col-tools text-right sorting"
                                                                    tabindex="0" aria-controls="DataTables_Table_1"
                                                                    rowspan="1" colspan="1" aria-label="
                                                            : activate to sort column ascending">
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <!-- .nk-tb-item  -->
                                                            <!-- .nk-tb-item  -->
                                                            <!-- .nk-tb-item  -->
                                                            <!-- .nk-tb-item  -->

                                                            <?php
                                                            $sql = mysqli_query($conn, "SELECT * FROM `user` WHERE `role` = 'resident'");
                                                            while ($row = mysqli_fetch_assoc($sql)) {
                                                                $fullName = $row['fullName'];
                                                                $username = $row['username'];

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

                                                            <tr class="nk-tb-item even">

                                                                <td class="nk-tb-col">
                                                                    <div class="user-card">
                                                                        <div
                                                                            class="user-avatar bg-dim-primary d-none d-sm-flex">
                                                                            <div
                                                                                class="user-avatar user-avatar-sm bg-warning">
                                                                                <img src="./images/<?php echo $userPhoto ?>"
                                                                                    alt="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="user-info">
                                                                            <span class="tb-lead">
                                                                                <?php echo htmlspecialchars($fullName) ?><span
                                                                                    class="dot dot-success d-md-none ml-1"></span></span>
                                                                            <span><?php echo htmlspecialchars($username) ?></span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                                                                    <span
                                                                        class="tb-role"><?php echo htmlspecialchars($role) ?></span>
                                                                </td>
                                                                <td class="nk-tb-col tb-col-md">
                                                                    <span><?php echo htmlspecialchars($phoneNumber) ?></span>
                                                                </td>
                                                                <td class="nk-tb-col tb-col-lg">
                                                                    <span><?php echo htmlspecialchars($jobLocation) ?></span>
                                                                </td>
                                                                <td class=" nk-tb-col tb-col-lg">
                                                                    <span><?php echo $date ?></span>
                                                                </td>
                                                                <td class="nk-tb-col tb-col-md">

                                                                    <span class="tb-status <?php echo $statCls ?>">
                                                                        <span><?php echo htmlspecialchars($status) ?></span></span>
                                                                </td>
                                                                <td class="nk-tb-col nk-tb-col-tools">
                                                                    <ul class="nk-tb-actions gx-1">

                                                                        <?php
                                                                            if ($status == "active") {
                                                                            ?>
                                                                        <li class="nk-tb-action-hidden">
                                                                            <a href="systemadministrator/manage_account_for_resident.php?id=<?php echo $row['id'] ?>&status=disable"
                                                                                class="btn btn-trigger btn-icon"
                                                                                data-toggle="tooltip"
                                                                                data-placement="top" title=""
                                                                                data-original-title="Suspend/ ማግድ">
                                                                                <em
                                                                                    class="icon ni ni-user-cross-fill"></em>
                                                                            </a>
                                                                        </li>

                                                                        <?php
                                                                            } else {
                                                                            ?>
                                                                        <li class="nk-tb-action-hidden">
                                                                            <a href="systemadministrator/manage_account_for_resident.php?id=<?php echo $row['id'] ?>&status=active"
                                                                                class="btn btn-trigger btn-icon"
                                                                                data-toggle="tooltip"
                                                                                data-placement="top" title=""
                                                                                data-original-title="Active/ መክፈት">
                                                                                <em
                                                                                    class="icon ni ni-check-circle"></em>
                                                                            </a>
                                                                        </li>
                                                                        <?php
                                                                            }

                                                                            ?>

                                                                        <li>
                                                                            <div class="drodown">
                                                                                <a href="#"
                                                                                    class="dropdown-toggle btn btn-icon btn-trigger"
                                                                                    data-toggle="dropdown"><em
                                                                                        class="icon ni ni-more-h"></em></a>
                                                                                <div
                                                                                    class="dropdown-menu dropdown-menu-right">
                                                                                    <ul class="link-list-opt no-bdr">

                                                                                        <li><a href="#"><em
                                                                                                    class="icon ni ni-eye"></em><span>View
                                                                                                    Details</span></a>
                                                                                        </li>
                                                                                        <li><a
                                                                                                href="systemadministrator/edit_account_employee.php?id=<?php echo $row['id'] ?>"><em
                                                                                                    class="icon ni ni-account-setting-alt"></em><span>Edit
                                                                                                    User</span></a>
                                                                                        </li>





                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </td>
                                                            </tr>
                                                            <?php
                                                            }


                                                            ?>


                                                        </tbody>
                                                    </table>
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