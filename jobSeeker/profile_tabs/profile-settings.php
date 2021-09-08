<?php
$user_id = $_SESSION['id'];
if (isset($_POST['update'])) {
    $country = escape($_POST['country']);
    $city = escape($_POST['city']);
    $phoneNumber = escape($_POST['phoneNumber']);

    $check_address = mysqli_query($conn, "SELECT * FROM `address` WHERE `jobseeker_id` =  '$user_id'");
    if ($check_address) {
        $num_row = mysqli_num_rows($check_address);
        if ($num_row > 0) {
            $update_address = mysqli_query($conn, "UPDATE `address` SET `country`='$country',`city`='$city',`phoneNumber`='$phoneNumber' WHERE `jobseeker_id` ='$user_id'");
        } else {
            $insert_adress = mysqli_query($conn, "INSERT INTO `address`(`jobseeker_id`, `country`, `city`, `phoneNumber`) VALUES ('$user_id','$country','$city','$phoneNumber')");
        }
    }
}

?>

<div class="pt-3">
    <div class="settings-form">
        <h4 class="text-primary">Account Setting</h4>
        <form method="post">
            <?php

            $select_user = mysqli_query($conn, "SELECT * FROM `users` WHERE `id` = '$user_id'");
            while ($row = mysqli_fetch_assoc($select_user)) {
                $email = $row['email'];
                $password = $row['password'];
            }
            $select_user = mysqli_query($conn, "SELECT * FROM `address` WHERE `jobseeker_id` =  '$user_id'");
            while ($row = mysqli_fetch_assoc($select_user)) {

                $city = $row['city'];
                $country = $row['country'];
            }

            ?>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Email</label>
                    <input type="email" placeholder="<?php echo $email ?>" readonly class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label>Password</label>
                    <input type="password" placeholder="•••••••" readonly class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="country">Country</label>
                    <input type="text" name="country" id="country"
                        value="<?php echo isset($country) != '' ? $country : ''; ?>"
                        placeholder="<?php echo isset($country) != '' ? '' : 'Enter Country'; ?>" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label>City</label>
                    <input type="text" name="city" value="<?php echo isset($city) != '' ? $city : ''; ?>"
                        placeholder="<?php echo isset($city) != '' ? '' : 'Enter City'; ?>" class="form-control">
                </div>
            </div>
            <div class="form-row">

                <div class="form-group col-md-6">
                    <label>Phone Number</label>
                    <input type="number" name="phoneNumber"
                        value="<?php echo isset($phoneNumber) != '' ? $phoneNumber : ''; ?>"
                        placeholder="<?php echo isset($phoneNumber) != '' ? '' : 'Enter Phone Number'; ?>"
                        class="form-control">
                </div>
            </div>
            <div class="form-group">

                <div class="mb-4">
                    <h4 class="card-title">Skill</h4>
                    <p>Add up to 15 skills. Remove skills by deleting tags.</p>

                </div>

                <select id="skill-list" name="states[]" multiple="multiple">
                    <?php
                    $select_skills = mysqli_query($conn, "SELECT * FROM `skill_category`");
                    while ($row = mysqli_fetch_assoc($select_skills)) {
                        $skill_name = $row['skill_name'];
                    ?>
                    <option value="<?php echo $skill_name ?>"><?php echo $skill_name ?></option>
                    <?php
                    }
                    ?>



                </select>

            </div>
            <!-- Work Status TODO: Table Name jobseeker_work_status -->
            <h4 class="text-primary mb-2">Work Status</h4>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="work_availability"> I am currently</label>
                    <select name="work_availability" id="work_availability" class="form-control">
                        <option value="More then 30 hrs/week">More then 30 hrs/week</option>
                        <option value="Less then 30 hrs/week">Less then 30 hrs/week</option>
                        <option value="As needed- open to offers">As needed- open to offers</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="job_type">Job Type</label>
                    <select name="job_type" id="job_type" class="form-control">
                        <option value="Full Time">Full Time</option>
                        <option value="Part Time">Part Time
                        </option>

                        <option value="Permanent">Permanent</option>
                        <option value="Remote">Remote</option>
                        <option value="Contractual">Contractual</option>
                        <option value="freelancer">Freelancer</option>
                        <option value="Temporary">Temporary</option>
                        <option value="Internship">Internship</option>

                    </select>
                </div>

            </div>



            <button class="btn btn-primary" name="update" type="submit">Update</button>
        </form>
    </div>
</div>