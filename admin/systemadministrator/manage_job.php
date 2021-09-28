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
    $jobId = intval($_GET['id']);
    if ($_GET['status'] == 'active') {
        mysqli_query($conn, "UPDATE `job` SET `job_status`= 'Opened' WHERE id = '$jobId'");
        // $alert = true;
        // $alertMsg1 = "User Active !!";
        // $alertStatus = "alert-success";
        // $alertMsg2 = " account status has been updated accordingly. ";
        header("location:manage_job.php");
    } else if ($_GET['status'] == 'disable') {
        mysqli_query($conn, "UPDATE `job` SET `job_status`= 'Rejected' WHERE id = '$jobId'");
        $_SESSION['delmsg'] = "User Suspend !!";
        header("location:manage_job.php");
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
                                                            aria-label="Job Title: activate to sort column ascending">
                                                            <span class="sub-text">Job Title</span>
                                                        </th>
                                                        <th class="nk-tb-col tb-col-mb sorting" tabindex="0"
                                                            aria-controls="DataTables_Table_1" rowspan="1" colspan="1"
                                                            aria-label="Experience Level: activate to sort column ascending">
                                                            <span class="sub-text">Experience Level</span>
                                                        </th>
                                                        <th class="nk-tb-col tb-col-mb sorting" tabindex="0"
                                                            aria-controls="DataTables_Table_1" rowspan="1" colspan="1"
                                                            aria-label="DeadLine: activate to sort column ascending">
                                                            <span class="sub-text">DeadLine</span>
                                                        </th>
                                                        <th class="nk-tb-col tb-col-lg sorting" tabindex="0"
                                                            aria-controls="DataTables_Table_1" rowspan="1" colspan="1"
                                                            aria-label="Post Date: activate to sort column ascending">
                                                            <span class="sub-text">Post Date</span>
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
                                                    $sql = mysqli_query($conn, "SELECT * FROM `job` WHERE `job_status` != 'delete'");
                                                    while ($data = mysqli_fetch_assoc($sql)) {
                                                        $id = $data['id'];
                                                        $user_id = $data['user_id'];
                                                        $job_title = $data['job_title'];
                                                        $job_email = $data['job_email'];
                                                        $job_description = $data['job_description'];
                                                        $job_tags = $data['job_tags'];
                                                        $job_experience = $data['job_experience'];
                                                        $job_type = $data['job_type'];
                                                        $job_apply_type = $data['job_apply_type'];
                                                        $job_experience_level = $data['job_experience_level'];
                                                        $job_external_url = $data['job_external_url'];
                                                        $job_sector = $data['job_sector'];
                                                        $job_salary_type = $data['job_salary_type'];
                                                        $job_salary_currency = $data['job_salary_currency'];
                                                        $job_salary_min = $data['job_salary_min'];
                                                        $job_salary_max = $data['job_salary_max'];
                                                        $job_career_level = $data['job_career_level'];
                                                        $job_qualifications = $data['job_qualifications'];
                                                        $job_preferred_sex = $data['job_preferred_sex'];
                                                        $job_location = $data['job_location'];
                                                        $job_deadline = $data['job_deadline'];
                                                        $job_post_date = $data['job_post_date'];
                                                        $job_status = $data['job_status'];
                                                        $btnClass = "";
                                                        if ($job_status == 'Opened') {
                                                            $statCls = "badge badge-success";
                                                        }
                                                        if ($job_status == 'Pending') {
                                                            $statCls = "badge badge-warning";
                                                        }
                                                        if ($job_status == 'Closed') {
                                                            $statCls = "badge badge-danger";
                                                        }
                                                        if ($job_status == 'Rejected') {
                                                            $statCls = "badge badge-danger";
                                                        }


                                                    ?>

                                                    <tr class="nk-tb-item even">
                                                        <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                                                            <span
                                                                class="tb-role"><?php echo htmlspecialchars($id)  ?></span>
                                                        </td>

                                                        <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                                                            <span
                                                                class="tb-role"><?php echo htmlspecialchars($job_title) ?></span>
                                                        </td>

                                                        <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                                                            <span
                                                                class="tb-role"><?php echo htmlspecialchars($job_experience_level) ?></span>
                                                        </td>

                                                        <td class=" nk-tb-col tb-col-lg">
                                                            <span><?php echo $job_deadline ?></span>
                                                        </td>
                                                        <td class=" nk-tb-col tb-col-lg">
                                                            <span><?php echo $job_post_date ?></span>
                                                        </td>
                                                        <td class="nk-tb-col tb-col-md">

                                                            <span class="tb-status <?php echo $statCls ?>">
                                                                <span><?php echo htmlspecialchars($job_status) ?></span></span>
                                                        </td>
                                                        <td class="nk-tb-col nk-tb-col-tools">
                                                            <ul class="nk-tb-actions gx-1">

                                                                <?php
                                                                    if ($job_status == "Opened") {
                                                                    ?>
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="systemadministrator/manage_job.php?id=<?php echo $data['id'] ?>&status=disable"
                                                                        class="btn btn-trigger btn-icon"
                                                                        data-toggle="tooltip" data-placement="top"
                                                                        title="" data-original-title="Suspend/ ማግድ">
                                                                        <em class="icon ni ni-user-cross-fill"></em>
                                                                    </a>
                                                                </li>

                                                                <?php
                                                                    } else if ($job_status == "Rejected") {
                                                                    ?>
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="systemadministrator/manage_job.php?id=<?php echo $data['id'] ?>&status=active"
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
                                                                                        href="systemadministrator/view_job.php?job_id=<?php echo $data['id'] ?>"><em
                                                                                            class="icon ni ni-account-setting-alt"></em><span>View
                                                                                            job</span></a>
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