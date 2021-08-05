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
                <div class="form-row">


                    <form id="form" action="data.php" method="post" enctype="multipart/form-data">
                        <div class="form-group col-xl-12">
                            <label class="text-black font-w500 mb-3">Tags</label><span class="text-danger ml-1">*</span>
                            <input type="text" class="form-control tags_input" value="html,css,bootstrap,photoshop" />
                        </div>
                        <div class="form-group">
                            <label for="">First Name</label>
                            <input type="text" name="fname" id="fname" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Last Name</label>
                            <input type="text" name="lname" id="lname" class="form-control">
                        </div>
                        <div class="form-group users-list">
                            <label for="userPhoto">Cover Photo(Recommend 1600 X 450)</label>
                            <input type="file" name="coverImage" id="coverImage" class="form-control-file"
                                id="userPhoto" accept="image/*" onchange="preview_image(event)">
                            <img class="img-thumbnail" id="output_image" style="height: auto; max-width: 300px;" />
                        </div>
                        <div id="err"></div>
                        <button type="submit" id="submit" name="submit">send</button>
                    </form>
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