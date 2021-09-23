<?php include 'action/jobSeekerProfile.php' ?>

<div class="profile-about-me">
    <div class="pt-4 border-bottom-1 pb-3">
        <h4 class="text-primary">About Me</h4>
        <?php
        if ($check_bio_num > 0) {

        ?>
            <p class="mb-2"><?php echo $aboutYourSelf ?></p>
        <?php
        }
        ?>
    </div>
</div>



<div class="profile-skills mb-5">
    <h4 class="text-primary mb-2">Skills</h4>

    <?php
    if ($check_skill_row > 0) {


        foreach ($skill_name as $skill) {
    ?>

            <a href="javascript:void()" class="btn btn-primary light btn-xs mb-1"><?php echo $skill ?></a>
            </h4>
    <?php
        }
    }
    ?>


</div>
<div class="profile-lang  mb-5">
    <h4 class="text-primary mb-2">Language</h4>
    <?php
    $select_language = "SELECT * FROM `jobseekerlanguages` WHERE `jobseeker_id` = '$jobseeker_id'";
    $language_result = fetchData($select_language);
    while ($language_data = mysqli_fetch_assoc($language_result)) {
        $languageName = $language_data['languageName'];
    ?>
        <a href="javascript:void()" class="text-muted pr-3 f-s-16"><i class="flag-icon flag-icon-us"></i>
            <?php echo $languageName ?></a>
    <?php
    }



    ?>

</div>
<div class="profile-personal-info">
    <h4 class="text-primary mb-4">Personal Information</h4>
    <div class="row mb-2">
        <div class="col-3">
            <h5 class="f-w-500">Name <span class="pull-right">:</span>
            </h5>
        </div>
        <div class="col-9"><span><?php echo $_SESSION['fName'] . ' ' . $_SESSION['lName'] ?></span>
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-3">
            <h5 class="f-w-500">Email <span class="pull-right">:</span>
            </h5>
        </div>
        <div class="col-9"><span><?php echo $_SESSION['email'] ?></span>
        </div>
    </div>
    <?php
    if ($check_work_availability > 0) {
    ?>
        <div class="row mb-2">
            <div class="col-3">
                <h5 class="f-w-500">Availability <span class="pull-right">:</span></h5>
            </div>
            <div class="col-9"><span><?php echo $work_availability ?></span>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-3">
                <h5 class="f-w-500">Job Type <span class="pull-right">:</span></h5>
            </div>
            <div class="col-9"><span><?php echo $job_type ?></span>
            </div>
        </div>

    <?php
    }



    ?>

    <div class="row mb-2">
        <div class="col-3">
            <h5 class="f-w-500">Age <span class="pull-right">:</span>
            </h5>
        </div>
        <div class="col-9"><span>22</span>
        </div>
    </div>
    <?php
    if ($check_address_num > 0) {
    ?>
        <div class="row mb-2">
            <div class="col-3">
                <h5 class="f-w-500">Location <span class="pull-right">:</span></h5>
            </div>
            <div class="col-9"><span><?php echo $country . ' ,' . $city ?></span>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-3">
                <h5 class="f-w-500">Phone Number <span class="pull-right">:</span></h5>
            </div>
            <div class="col-9"><span><?php echo $phoneNumber ?></span>
            </div>
        </div>

    <?php
    }

    ?>

</div>