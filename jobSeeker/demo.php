<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'include/header.php' ?>

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <?php include 'include/preloder.php' ?>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <?php include 'include/navlogo.php' ?>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Chat box start
        ***********************************-->
        <?php include 'include/chatbox.php' ?>
        <!--**********************************
            Chat box End
        ***********************************-->




        <!--**********************************
            Header start
        ***********************************-->
        <?php include 'include/navbar.php' ?>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <?php include 'include/sidbar.php' ?>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="page-titles">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Profile</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">My CVs</a></li>
                    </ol>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Profile Banner -->
                        <?php include 'include/profile-banner.php' ?>
                    </div>
                </div>
                <div class="row">
                    <?php include 'include/profile-modal.php' ?>
                    <div class="col-xl-8">
                        <div class="card">
                            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                                <div class="form-group">
                                    <input type="text" name="" id="" class="form-control input-default" placeholder="Title">
                                </div>
                                <div class="post-input">
                                    <textarea name="textarea" id="textarea" cols="30" rows="10" class="form-control bg-transparent" placeholder="Please type what you want...."></textarea>

                                </div>

                                <div class="form-group users-list">
                                    <label for="userPhoto">Cover Photo(Recommend 1600 X 450)</label>
                                    <input type="file" name="userPhoto" class="form-control-file" id="userPhoto" accept="image/*" onchange="preview_image(event)">
                                    <img class="img-thumbnail" id="output_image" style="height: auto; max-width: 300px;" />
                                </div>
                                <div class="form-group users-list">
                                    <label for="userPhoto">Profile Photo(Recommend 196 X 196)</label>
                                    <input type="file" name="profile_pic" class="form-control-file" id="profile_pic" accept="image/*" onchange="cover_image(event)">
                                    <img class="rounded-circle" id="img" width="150px" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <?php include 'include/footer.php' ?>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--removeIf(production)-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <?php include 'include/script.php' ?>







</body>

</html>