<div class="pt-3">
    <div class="settings-form">
        <h4 class="text-primary">Account Setting</h4>
        <form action="" method="post">
            <?php

            $select_user = mysqli_query($conn, "SELECT * FROM `users` WHERE `id` = '$jobseeker_id'");
            while ($row = mysqli_fetch_assoc($select_user)) {
                $email = $row['email'];
                $password = $row['password'];
            }
            $select_user = mysqli_query($conn, "SELECT * FROM `address` WHERE `jobseeker_id` =  '$jobseeker_id'");
            while ($row = mysqli_fetch_assoc($select_user)) {

                $city = $row['city'];
                $country = $row['country'];
                $phoneNumber = $row['phoneNumber'];
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
                    <h4 class="card-title">Skill 💪</h4>
                    <p>Add up to 15 skills. Remove skills by deleting tags.</p>

                </div>

                <?php
                $select_skill = "SELECT * FROM `jobseeker_skill` WHERE `jobseeker_id` = '$jobseeker_id'";
                $skill_num = checkNumRow($select_skill);
                if ($skill_num) {
                ?>
                <select id="skill-list" name="skill[]" multiple="multiple">
                    <?php
                        $select_skills = mysqli_query($conn, "SELECT * FROM `jobseeker_skill` WHERE `jobseeker_id` = '$jobseeker_id'");
                        $skill_name = "";
                        while ($row = mysqli_fetch_assoc($select_skills)) {
                            $skill_name = $row['skill_name'];
                            $skill_name = explode(",", $skill_name);
                        }
                        $i = 0;
                        foreach ($skill_name as $skill) {
                        ?>

                    <option selected="selected" value="<?php echo $skill ?>"><?php echo $skill ?>
                    </option>
                    <?php
                        }
                        $select_skills = mysqli_query($conn, "SELECT * FROM `skill_category` ");
                        while ($row = mysqli_fetch_assoc($select_skills)) {
                            $skill_name = $row['skill_name'];
                        ?>
                    <option value="<?php echo $skill_name ?>"><?php echo $skill_name ?></option>
                    <?php

                        }
                        ?>

                    ?>




                </select>

                <?php

                } else {
                ?>
                <select id="skill-list" name="skill[]" multiple="multiple">
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
                <?php
                }

                ?>


            </div>
            <!-- Work Status TODO: Table Name jobseeker_work_status -->
            <h4 class="text-primary mb-2">Work Status ⏲</h4>
            <div class="form-row">
                <?php
                $select_work_status = "SELECT * FROM `jobseeker_work_status` WHERE `jobseeker_id` = '$jobseeker_id'";
                $check_work_num = checkNumRow($select_work_status);
                if ($check_work_num) {
                ?>
                <div class="form-group col-md-6">
                    <label for="work_availability"> I am currently 👷</label>
                    <select name="work_availability" id="work_availability" class="form-control">
                        <?php
                            $sql = fetchData($select_work_status);
                            while ($row = mysqli_fetch_assoc($sql)) {
                                $work_availability = $row['work_availability'];
                                $job_type = $row['job_type'];
                            ?>
                        <option value="<?php echo $work_availability ?>"><?php echo $work_availability ?></option>
                        <?php
                            }
                            ?>
                        <option value="More then 30 hrs/week">More then 30 hrs/week</option>
                        <option value="Less then 30 hrs/week">Less then 30 hrs/week</option>
                        <option value="As needed- open to offers">As needed- open to offers</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="job_type">Job Type</label>
                    <select name="job_type" id="job_type" class="form-control">
                        <?php
                            $sql = fetchData($select_work_status);
                            while ($row = mysqli_fetch_assoc($sql)) {
                                $work_availability = $row['work_availability'];
                                $job_type = $row['job_type'];
                            ?>
                        <option value="<?php echo $job_type ?>"><?php echo $job_type ?></option>

                        <?php
                            }
                            ?>
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
                <?php

                } else {
                ?>
                <div class="form-group col-md-6">
                    <label for="work_availability"> I am currently 👷</label>
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

                <?php

                }

                ?>


            </div>



            <button class="btn btn-primary" name="update" type="submit">Update</button>
        </form>
    </div>
</div>