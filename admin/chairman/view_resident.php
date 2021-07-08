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
                                <div class="nk-block nk-block-lg">
                                    <div class="nk-block-head">
                                        <div class="nk-block-head-content">
                                            <h4 class="nk-block-title">Resident Data Table</h4>
                                            <div class="nk-block-des">
                                                <p></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card card-preview">
                                        <div class="card-inner">

                                            <div class="datatable-wrap my-3">
                                                <table
                                                    class="datatable-init nowrap nk-tb-list nk-tb-ulist dataTable no-footer"
                                                    data-auto-responsive="false" id="DataTables_Table_1" role="grid"
                                                    aria-describedby="DataTables_Table_1_info">
                                                    <thead>
                                                        <tr class="nk-tb-item nk-tb-head" role="row">
                                                            <th class="nk-tb-col nk-tb-col-check sorting_asc"
                                                                tabindex="0" aria-controls="DataTables_Table_1"
                                                                rowspan="1" colspan="1" aria-label="
                                                                    
                                                                        
                                                                        
                                                                    
                                                                : activate to sort column descending"
                                                                aria-sort="ascending">
                                                                <div
                                                                    class="custom-control custom-control-sm custom-checkbox notext">
                                                                    <input type="checkbox" class="custom-control-input"
                                                                        id="uid">
                                                                    <label class="custom-control-label"
                                                                        for="uid"></label>
                                                                </div>
                                                            </th>
                                                            <th class="nk-tb-col sorting" tabindex="0"
                                                                aria-controls="DataTables_Table_1" rowspan="1"
                                                                colspan="1" aria-label="
                                                                    User
                                                                : activate to sort column ascending">
                                                                <span class="sub-text">User</span>
                                                            </th>
                                                            <th class="nk-tb-col tb-col-mb sorting" tabindex="0"
                                                                aria-controls="DataTables_Table_1" rowspan="1"
                                                                colspan="1" aria-label="
                                                                    Role
                                                                : activate to sort column ascending">
                                                                <span class="sub-text">Role</span>
                                                            </th>
                                                            <th class="nk-tb-col tb-col-md sorting" tabindex="0"
                                                                aria-controls="DataTables_Table_1" rowspan="1"
                                                                colspan="1" aria-label="
                                                                    Phone
                                                                : activate to sort column ascending">
                                                                <span class="sub-text">Phone</span>
                                                            </th>
                                                            <th class="nk-tb-col tb-col-lg sorting" tabindex="0"
                                                                aria-controls="DataTables_Table_1" rowspan="1"
                                                                colspan="1" aria-label="
                                                                    Job Location
                                                                : activate to sort column ascending">
                                                                <span class="sub-text">Job Location</span>
                                                            </th>
                                                            <th class="nk-tb-col tb-col-lg sorting" tabindex="0"
                                                                aria-controls="DataTables_Table_1" rowspan="1"
                                                                colspan="1" aria-label="
                                                                    Job Start
                                                                : activate to sort column ascending">
                                                                <span class="sub-text">Job Start</span>
                                                            </th>
                                                            <th class="nk-tb-col tb-col-md sorting" tabindex="0"
                                                                aria-controls="DataTables_Table_1" rowspan="1"
                                                                colspan="1" aria-label="
                                                                    Status
                                                                : activate to sort column ascending">
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








                                                        <tr class="nk-tb-item odd">
                                                            <td class="nk-tb-col nk-tb-col-check sorting_1">
                                                                <div
                                                                    class="custom-control custom-control-sm custom-checkbox notext">
                                                                    <input type="checkbox" class="custom-control-input"
                                                                        id="uid1">
                                                                    <label class="custom-control-label"
                                                                        for="uid1"></label>
                                                                </div>
                                                            </td>
                                                            <td class="nk-tb-col">
                                                                <div class="user-card">
                                                                    <div
                                                                        class="user-avatar bg-dim-primary d-none d-sm-flex">
                                                                        <span>AB</span>
                                                                    </div>
                                                                    <div class="user-info">
                                                                        <span class="tb-lead">Avel <span
                                                                                class="dot dot-success d-md-none ml-1"></span></span>
                                                                        <span>avel@kms.com</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                                                                <span class="tb-role">Record Officer</span>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-md">
                                                                <span>+251 911309125</span>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-lg">
                                                                <span>Kebel 0ne</span>
                                                            </td>
                                                            <td class=" nk-tb-col tb-col-lg">
                                                                <span>05 Oct 2021</span>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-md">
                                                                <span class="tb-status text-success">Active</span>
                                                            </td>
                                                            <td class="nk-tb-col nk-tb-col-tools">
                                                                <ul class="nk-tb-actions gx-1">


                                                                    <li class="nk-tb-action-hidden">
                                                                        <a href="#" class="btn btn-trigger btn-icon"
                                                                            data-toggle="tooltip" data-placement="top"
                                                                            title="" data-original-title="Suspend">
                                                                            <em class="icon ni ni-user-cross-fill"></em>
                                                                        </a>
                                                                    </li>
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
                                                                                                class="icon ni ni-focus"></em><span>Quick
                                                                                                View</span></a>
                                                                                    </li>
                                                                                    <li><a href="#"><em
                                                                                                class="icon ni ni-eye"></em><span>View
                                                                                                Details</span></a>
                                                                                    </li>


                                                                                    <li class="divider">
                                                                                    </li>
                                                                                    <li><a href="#"><em
                                                                                                class="icon ni ni-shield-star"></em><span>Reset
                                                                                                Pass</span></a>
                                                                                    </li>


                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                        <tr class="nk-tb-item even">
                                                            <td class="nk-tb-col nk-tb-col-check sorting_1">
                                                                <div
                                                                    class="custom-control custom-control-sm custom-checkbox notext">
                                                                    <input type="checkbox" class="custom-control-input"
                                                                        id="uid1">
                                                                    <label class="custom-control-label"
                                                                        for="uid1"></label>
                                                                </div>
                                                            </td>
                                                            <td class="nk-tb-col">
                                                                <div class="user-card">
                                                                    <div
                                                                        class="user-avatar bg-dim-primary d-none d-sm-flex">
                                                                        <span>bc</span>
                                                                    </div>
                                                                    <div class="user-info">
                                                                        <span class="tb-lead">Avel <span
                                                                                class="dot dot-success d-md-none ml-1"></span></span>
                                                                        <span>demo@kms.com</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                                                                <span class="tb-role">Chairman</span>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-md">
                                                                <span>+251 911459125</span>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-lg">
                                                                <span>Kebel Two</span>
                                                            </td>
                                                            <td class=" nk-tb-col tb-col-lg">
                                                                <span>05 Oct 2021</span>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-md">
                                                                <span class="tb-status text-success">Active</span>
                                                            </td>
                                                            <td class="nk-tb-col nk-tb-col-tools">
                                                                <ul class="nk-tb-actions gx-1">


                                                                    <li class="nk-tb-action-hidden">
                                                                        <a href="#" class="btn btn-trigger btn-icon"
                                                                            data-toggle="tooltip" data-placement="top"
                                                                            title="" data-original-title="Suspend">
                                                                            <em class="icon ni ni-user-cross-fill"></em>
                                                                        </a>
                                                                    </li>
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
                                                                                                class="icon ni ni-focus"></em><span>Quick
                                                                                                View</span></a>
                                                                                    </li>
                                                                                    <li><a href="#"><em
                                                                                                class="icon ni ni-eye"></em><span>View
                                                                                                Details</span></a>
                                                                                    </li>


                                                                                    <li class="divider">
                                                                                    </li>
                                                                                    <li><a href="#"><em
                                                                                                class="icon ni ni-shield-star"></em><span>Reset
                                                                                                Pass</span></a>
                                                                                    </li>


                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>
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