<div class="profile-sidebar dz-scroll" id="DZ_W_Sidebar">
    <div class="d-flex align-items-center justify-content-between mb-4">
        <h5 class="text-black">Profile</h5>
        <a href="update-profile.php" class="text-red text-primary edit-profile-link">
            Edit
        </a>
        <a href="javascript:;" class="text-red d-none close-side">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-x-circle">
                <circle cx="12" cy="12" r="10"></circle>
                <line x1="15" y1="9" x2="9" y2="15"></line>
                <line x1="9" y1="9" x2="15" y2="15"></line>
            </svg>
        </a>
    </div>

    <?php
    $Title = "";
    $jobseekerID = $_SESSION['id'];
    $select_social_media = mysqli_query($conn, "SELECT * FROM `jobseeker_social_media` WHERE jobseeker_id ='$jobseekerID'");
    $num_row = mysqli_num_rows($select_social_media);

    $select_jobseeker_bio = mysqli_query($conn, "SELECT * FROM `jobseekerbio` WHERE jobseeker_id ='$jobseekerID'");
    $num_row_job_bio = mysqli_num_rows($select_jobseeker_bio);
    if ($num_row > 0 && $num_row_job_bio > 0) {



        while ($bio_data = mysqli_fetch_assoc($select_jobseeker_bio)) {
            $profileImage = $bio_data['profileImage'];
            $coverImage = $bio_data['coverImage'];
            $Title = $bio_data['Title'];
            $aboutYourSelf = $bio_data['aboutYourSelf'];



    ?>

    <div class="profile-img mb-4 ">
        <img src="<?php echo $profileImage ?>" class="image-fluid rounded-circle bg-dark" width="140" height="140"
            alt="" />
    </div>
    <div class="profile-info-bx mb-4">
        <h4 class="mb-1 fs-22"><?php echo $_SESSION['username'] ?></h4>
        <span><?php echo $Title ?></span>
    </div>


    <?php
        }
        ?>
    <div class="text-center mb-5">
        <?php
            while ($social_media = mysqli_fetch_assoc($select_social_media)) {
                $social_media_name = $social_media['social_media_name'];
                $social_media_link = $social_media['social_media_link'];
                $social_media_icon = $social_media['social_media_icon'];
            ?>
        <a href="<?php echo $social_media_link ?>" target="_blank" class="btn text-left light btn-dark d-block mb-3 "><i
                class="fa fa-<?php echo $social_media_name ?> scale5 mr-3"></i>/<?php echo $social_media_name ?></a>
        <?php
            }
            ?>
    </div>
    <?php
    } else {
        echo "<h1>Pls Upload your Status</h1>";
    ?>




    <?php
    }
    ?>


    <a href="update-profile.php" class="btn btn-outline-dark d-block btn-lg">Edit Profile</a>
    <hr />
    <div class="card-campaign mt-5">
        <h5>I am <?php echo $Title ?></h5>
        <a href="javascript:;" class="fa fa-code"></a>
    </div>
</div>