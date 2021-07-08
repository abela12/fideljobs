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
if (isset($_POST['send'])) {

    $title = $_POST['title'];
    $message = $_POST['message'];
    $user_id = $_SESSION['id'];
    $sql = mysqli_query($conn, "INSERT INTO `comment`(`title`, `message`, `user_id`) VALUES 
    ('$title','$message','$user_id')");
}
if (isset($_GET['action'])) {
    $id = $_GET['id'];
    $deleteComment = mysqli_query($conn, "DELETE FROM `comment` WHERE id = '$id'");
    $_SESSION['delmsg'] = "Message Deleted !!";
    header("location:give_comment.php");
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
                                            <div class="card card-bordered" data-select2-id="27">
                                                <div class="card-inner" data-select2-id="26">
                                                    <form action="resident/give_comment.php"
                                                        class="form-validate is-alter" novalidate="novalidate"
                                                        data-select2-id="25" method="POST">
                                                        <div class="row g-gs" data-select2-id="24">
                                                            <div class="col-md-8">
                                                                <div class="form-group">
                                                                    <label class="form-label"
                                                                        for="fva-full-name">Title</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" class="form-control valid"
                                                                            id="fva-full-name" name="title" required=""
                                                                            aria-describedby="fva-full-name-error"
                                                                            aria-invalid="false">
                                                                        <span id="fva-full-name-error" class="invalid"
                                                                            style="display: none;"></span>
                                                                    </div>
                                                                </div>
                                                            </div>



                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="form-label"
                                                                        for="fva-message">Message</label>
                                                                    <div class="form-control-wrap">

                                                                        <textarea
                                                                            class="form-control form-control-sm valid"
                                                                            id="fva-message" name="message"
                                                                            placeholder="Write your message" required=""
                                                                            aria-describedby="fva-message-error"
                                                                            spellcheck="false"
                                                                            aria-invalid="false"></textarea>
                                                                        <span id="fva-message-error" class="invalid"
                                                                            style="display: none;"></span>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <button type="submit" name="send"
                                                                        class="btn btn-lg btn-primary">Send
                                                                        Message</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <?php
                                            $user_id = $_SESSION['id'];
                                            $sql = mysqli_query($conn, "SELECT * FROM `comment` WHERE `user_id` = '$user_id' ORDER BY `comment`.`date` DESC");
                                            while ($row = mysqli_fetch_assoc($sql)) {
                                                $id = $row['id'];
                                                $title = $row['title'];
                                                $message = $row['message'];
                                                $date = $row['date'];
                                            ?>




                                            <div class="card card-bordered">
                                                <div class="card-inner">
                                                    <div class="project">
                                                        <div class="project-head">
                                                            <a href="#" class="project-title">
                                                                <div class="user-avatar sq bg-purple">
                                                                    <span><?php echo $_SESSION['userName']; ?></span>
                                                                </div>
                                                                <div class="project-info">
                                                                    <h6 class="title">
                                                                        <?php echo $_SESSION['fullName']; ?></h6>

                                                                    <span
                                                                        class="badge badge-dim badge-light text-gray"><em
                                                                            class="icon ni ni-clock"></em><span>
                                                                            <?php echo timePosted($date); ?></span></span>
                                                                </div>
                                                            </a>
                                                            <div class="drodown">
                                                                <a href="#"
                                                                    class="dropdown-toggle btn btn-sm btn-icon btn-trigger mt-n1 mr-n1"
                                                                    data-toggle="dropdown"><em
                                                                        class="icon ni ni-more-h"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="resident/give_comment.php?id=<?php echo $id ?>&action=delete"
                                                                                onClick="return confirm('Are you sure you want to Delete?')"><em
                                                                                    class="icon ni ni-cross-fill-c"></em><span>Delete
                                                                                    Message</span></a></li>

                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="project-details">
                                                            <p><?php echo $message ?></p>
                                                        </div>


                                                    </div>
                                                </div>

                                            </div>

                                            <?php
                                            }

                                            ?>
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
    <script src="./assets/js/bundle.js?ver=2.4.0"></script>
    <script src="./assets/js/scripts.js?ver=2.4.0"></script>
    <script src="./assets/js/charts/gd-default.js?ver=2.4.0"></script>
</body>

</html>