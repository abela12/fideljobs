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
                                    <div class="col-md-8">
                                        <?php

                                        $sql = mysqli_query($conn, "SELECT comment.id,`title`,username,fullName,comment.date,`user_id`,`message` FROM `comment` INNER JOIN user on comment.user_id = user.id ORDER BY `comment`.`date` DESC");
                                        while ($row = mysqli_fetch_assoc($sql)) {
                                            $id = $row['id'];
                                            $fullName = $row['fullName'];
                                            $username = $row['username'];
                                            $title = $row['title'];
                                            $message = $row['message'];
                                            $date = $row['date'];
                                        ?>
                                        <div class="card">
                                            <h5 class="card-header"><?php echo $fullName ?>(<?php echo $username ?>)
                                            </h5>
                                            <div class="card-body">
                                                <h5 class="card-title"><?php echo $title ?></h5>
                                                <p class="card-text"><?php echo $message ?></p>

                                            </div>
                                        </div>
                                        <?php } ?>

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
    <script src="./assets/js/bundle.js?ver=2.4.0"></script>
    <script src="./assets/js/scripts.js?ver=2.4.0"></script>
    <script src="./assets/js/charts/gd-default.js?ver=2.4.0"></script>
</body>

</html>