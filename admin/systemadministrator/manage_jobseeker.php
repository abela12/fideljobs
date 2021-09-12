<!DOCTYPE html>
<html lang="zxx" class="js">

<?php include './include/header.php' ?>
<?php include '../database/database.php' ?>
<?php include '../include/session.php' ?>
<?php require '../include/function.php' ?>
<?php
//login confirmation
confirm_logged_in();
if (isset($_GET['status'])) {
    echo $id = $_GET['id'];
    if ($_GET['status'] == 'active') {
        mysqli_query($conn, "UPDATE `users` SET `account_status`= 'active' WHERE  `id`= '$id'");
        // $alert = true;
        // $alertMsg1 = "User Active !!";
        // $alertStatus = "alert-success";
        // $alertMsg2 = " account status has been updated accordingly. ";
        header("location:manage_jobseeker.php");
    } else if ($_GET['status'] == 'disable') {
        mysqli_query($conn, "UPDATE `users` SET `account_status`= 'disable' WHERE  `id`= '$id'");
        $_SESSION['delmsg'] = "User Suspend !!";
        header("location:manage_jobseeker.php");
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

                                </div><!-- .nk-block -->
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
                                                            aria-controls="DataTables_Table_1" rowspan="1" colspan="1"
                                                            aria-label="User: activate to sort column ascending">
                                                            <span class="sub-text">ID</span>
                                                        </th>
                                                        <th class="nk-tb-col sorting" tabindex="0"
                                                            aria-controls="DataTables_Table_1" rowspan="1" colspan="1"
                                                            aria-label="User: activate to sort column ascending">
                                                            <span class="sub-text">User</span>
                                                        </th>
                                                        <th class="nk-tb-col tb-col-mb sorting" tabindex="0"
                                                            aria-controls="DataTables_Table_1" rowspan="1" colspan="1"
                                                            aria-label="Email: activate to sort column ascending">
                                                            <span class="sub-text">Email</span>
                                                        </th>
                                                        <th class="nk-tb-col tb-col-mb sorting" tabindex="0"
                                                            aria-controls="DataTables_Table_1" rowspan="1" colspan="1"
                                                            aria-label="Role: activate to sort column ascending">
                                                            <span class="sub-text">Role</span>
                                                        </th>
                                                        <th class="nk-tb-col tb-col-lg sorting" tabindex="0"
                                                            aria-controls="DataTables_Table_1" rowspan="1" colspan="1"
                                                            aria-label="Join Date: activate to sort column ascending">
                                                            <span class="sub-text">Join Date</span>
                                                        </th>
                                                        <th class="nk-tb-col tb-col-md sorting" tabindex="0"
                                                            aria-controls="DataTables_Table_1" rowspan="1" colspan="1"
                                                            aria-label="Account Status: activate to sort column ascending">
                                                            <span class="sub-text">Status</span>
                                                        </th>
                                                        <th class="nk-tb-col tb-col-md sorting" tabindex="0"
                                                            aria-controls="DataTables_Table_1" rowspan="1" colspan="1"
                                                            aria-label="Account Status: activate to sort column ascending">
                                                            <span class="sub-text">Action</span>
                                                        </th>




                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <!-- .nk-tb-item  -->
                                                    <!-- .nk-tb-item  -->
                                                    <!-- .nk-tb-item  -->
                                                    <!-- .nk-tb-item  -->

                                                    <?php
                                                    $sql = mysqli_query($conn, "SELECT users.id as user_id, `fName`, `lName`, `username`, `email`,role.roleType as role, `password`, `userPhoto`, `role_id`, `code`, `status`, `account_status`, `date` FROM `users` INNER JOIN role on role_id = role.id WHERE role.roleType ='jobseeker' AND status ='verified'");
                                                    while ($row = mysqli_fetch_assoc($sql)) {
                                                        $user_id = $row['user_id'];
                                                        $fName = $row['fName'];
                                                        $lName = $row['lName'];

                                                        $username = $row['username'];

                                                        $email = $row['email'];

                                                        $role = $row['role'];




                                                        $date = $row['date'];

                                                        $role = $row['role'];


                                                        $status = $row['account_status'];
                                                        if ($status == 'active') {
                                                            $statCls = 'badge badge-success';
                                                        } else {
                                                            $statCls = 'badge badge-danger';
                                                        }
                                                    ?>

                                                    <tr class="nk-tb-item even">
                                                        <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                                                            <span
                                                                class="tb-role"><?php echo htmlspecialchars($user_id)  ?></span>
                                                        </td>
                                                        <td class="nk-tb-col">
                                                            <div class="user-card">
                                                                <div
                                                                    class="user-avatar bg-dim-primary d-none d-sm-flex">
                                                                    <div class="user-avatar user-avatar-sm bg-warning">
                                                                        <img src="./images/<?php echo $userPhoto ?>"
                                                                            alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="user-info">
                                                                    <span class="tb-lead">
                                                                        <?php echo htmlspecialchars($fName) . '' . htmlspecialchars($lName) ?><span
                                                                            class="dot dot-success d-md-none ml-1"></span></span>
                                                                    <span><?php echo htmlspecialchars($username) ?></span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                                                            <span
                                                                class="tb-role"><?php echo htmlspecialchars($email) ?></span>
                                                        </td>

                                                        <td class=" nk-tb-col tb-col-lg">
                                                            <span><?php echo $role ?></span>
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
                                                                    <a href="systemadministrator/manage_jobseeker.php?id=<?php echo $row['user_id'] ?>&status=disable"
                                                                        class="btn btn-trigger btn-icon"
                                                                        data-toggle="tooltip" data-placement="top"
                                                                        title="" data-original-title="Suspend/ ማግድ">
                                                                        <em class="icon ni ni-user-cross-fill"></em>
                                                                    </a>
                                                                </li>

                                                                <?php
                                                                    } else {
                                                                    ?>
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="systemadministrator/manage_jobseeker.php?id=<?php echo $row['user_id'] ?>&status=active"
                                                                        class="btn btn-trigger btn-icon"
                                                                        data-toggle="tooltip" data-placement="top"
                                                                        title="" data-original-title="Active/ መክፈት">
                                                                        <em class="icon ni ni-check-circle"></em>
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
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <ul class="link-list-opt no-bdr">


                                                                                <li><a
                                                                                        href="systemadministrator/view_jobseeker.php?id=<?php echo $row['user_id'] ?>"><em
                                                                                            class="icon ni ni-account-setting-alt"></em><span>View
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