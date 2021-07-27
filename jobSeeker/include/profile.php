<div class="profile-sidebar dz-scroll" id="DZ_W_Sidebar">
    <div class="d-flex align-items-center justify-content-between mb-4">
        <h5 class="text-black">Profile</h5>
        <a href="app-profile.html" class="text-red text-primary edit-profile-link">
            Edit
        </a>
        <a href="javascript:;" class="text-red d-none close-side">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle">
                <circle cx="12" cy="12" r="10"></circle>
                <line x1="15" y1="9" x2="9" y2="15"></line>
                <line x1="9" y1="9" x2="15" y2="15"></line>
            </svg>
        </a>
    </div>
    <?php
    $jobseekerID = $_SESSION['id'];
    $sql = mysqli_query($conn, "SELECT * FROM `jobseeker_social_media` WHERE jobseeker_id ='$jobseekerID'");
    $num_row = mysqli_num_rows($sql);
    if ($num_row > 0) {


        while ($row = mysqli_fetch_assoc($sql)) {
    ?>
            <div class="profile-img mb-4">
                <img src="images/profile/<?php echo $portfolio_image ?>" width="140" height="140" alt="" />
            </div>
            <div class="profile-info-bx mb-4">
                <h4 class="mb-1 fs-22"><?php echo $_SESSION['username'] ?></h4>
                <span>Web Developer</span>
            </div>

            <div class="text-center mb-5">
                <a href="javascript:;" class="btn text-left light btn-dark d-block mb-3 "><i class="fa fa-linkedin scale5 mr-3"></i>/avel.coder</a>
                <a href="javascript:;" class="btn text-left light btn-dark d-block mb-3 "><i class="fa fa-twitter scale5 mr-3"></i>/avel.coder</a>
                <a href="javascript:;" class="btn text-left light btn-dark d-block mb-4 "><i class="fa fa-facebook scale5 mr-3"></i>/avel.coder</a>
                <a href="javascript:;" class="btn text-left light btn-dark d-block mb-4 "><i class="fa fa-youtube scale5 mr-3"></i>/avel.coder</a>
                <a href="update-profile.php" class="btn btn-outline-dark d-block btn-lg">Edit Profile</a>
            </div>
            <hr />
            <div class="card-campaign mt-5">
                <h5>I am Full Stack Web Developer</h5>
                <a href="javascript:;" class="fa fa-code"></a>
            </div>

        <?php
        }
    } else {
        echo "<h1>Pls Upload your Status</h1>";
        ?>

        <div class="text-center mb-5">
            <a href="javascript:;" class="btn text-left light btn-dark d-block mb-3 "><i class="fa fa-linkedin scale5 mr-3"></i>/avel.coder</a>
            <a href="javascript:;" class="btn text-left light btn-dark d-block mb-3 "><i class="fa fa-twitter scale5 mr-3"></i>/avel.coder</a>
            <a href="javascript:;" class="btn text-left light btn-dark d-block mb-4 "><i class="fa fa-facebook scale5 mr-3"></i>/avel.coder</a>
            <a href="javascript:;" class="btn text-left light btn-dark d-block mb-4 "><i class="fa fa-youtube scale5 mr-3"></i>/avel.coder</a>

            <a href="update-profile.php" class="btn btn-outline-dark d-block btn-lg">Edit Profile</a>
        </div>

    <?php
    }
    ?>

</div>