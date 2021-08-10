<div class="col-xl-6">
    <div class="card">

        <!-- Modal For Job Seeker Bio -->
        <div id="add" class="modal fade edit-bio-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Job Seeker Bio</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                        </button>
                    </div>
                    <form id="form" action="action.php" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div id="err"></div>
                            <!-- Enter a single sentence description of your professional skills/experience (e.g. Expert Web Designer with Ajax experience) -->
                            <div class="form-group">
                                <input type="text" name="title" id="title" class="form-control input-default"
                                    placeholder="Title">
                            </div>
                            <div class="form-group">
                                <textarea maxlength="900" name="aboutYourSelf" id="aboutYourSelf" rows="7"
                                    class="form-control bg-transparent" placeholder="Use this space to show clients you have the skills and experience they're looking for.

Describe your strengths and skills
Highlight projects, accomplishments and education
Keep it short and make sure it's error-free" onkeydown="limitText(this.form.aboutYourSelf,this.form.countdown,500);"
                                    onkeyup='limitText(this.form.message,this.form.countdown,500);'></textarea>
                                You have
                                <input readonly type="text" name="countdown" size="3" value="500"> chars left

                            </div>

                            <div class="form-group users-list">
                                <label for="userPhoto">Cover Photo(Recommend 1600 X 450)</label>
                                <input type="file" name="coverImage" id="coverImage" class="form-control-file"
                                    id="userPhoto" accept="image/*" onchange="preview_image(event)">
                                <img class="img-thumbnail" id="output_image" style="height: auto; max-width: 300px;" />
                            </div>
                            <div class="form-group users-list">
                                <label for="userPhoto">Profile Photo(Recommend 196 X 196)</label>
                                <input type="file" name="profileImage" class="form-control-file" id="profile_pic"
                                    accept="image/*" onchange="cover_image(event)">
                                <img class="rounded-circle" id="img" width="150px" />
                            </div>
                            <div class="form-group mb-0">
                                <p>
                                    <input type="radio" id="male" value="male" name="gender" checked>
                                    <label for="male">Male</label>
                                </p>
                                <p>
                                    <input type="radio" id="female" value="female" name="gender">
                                    <label for="female">Female</label>
                                </p>

                            </div>
                            <div class="form-group col-6">
                                <label for="Date">Date Of Birth</label>
                                <input type="date" name="date" id="Date" class="form-control">
                            </div>


                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger light" data-dismiss="modal">Close</button>
                            <button type="submit" id="submit" name="upload" class="btn btn-primary">Save
                                changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Modal For Update Job Seeker Bio 🚀-->
        <?php
        $jobseeker_id  = $_SESSION['id'];
        $sql = mysqli_query($conn, "SELECT * FROM `jobseekerbio` WHERE `jobseeker_id` = '$jobseeker_id'");
        $num_row = mysqli_num_rows($sql);
        if ($num_row > 0) {
            while ($row =  mysqli_fetch_assoc($sql)) {
                $coverImage = $row['coverImage'];
                $profileImage = $row['profileImage'];
                $Title = $row['Title'];
                $aboutYourSelf = $row['aboutYourSelf'];
                $Sex = $row['Sex'];
                $dateOfBirth = $row['dateOfBirth'];

        ?>
        <div class="modal fade update-bio" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Job Seeker Bio</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                        </button>
                    </div>
                    <form id="updateForm" action="updateBio.php" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
                            <!-- Enter a single sentence description of your professional skills/experience (e.g. Expert Web Designer with Ajax experience) -->
                            <div class="form-group">
                                <input type="text" name="title" value="<?php echo htmlspecialchars($Title); ?>"
                                    id="title" class="form-control input-default" placeholder="Title">
                            </div>
                            <div class="form-group">
                                <textarea maxlength="900" name="aboutYourSelf" id="aboutYourSelf" rows="7"
                                    class="form-control bg-transparent"
                                    placeholder=""><?php echo htmlspecialchars($aboutYourSelf) ?></textarea>

                            </div>

                            <div class="form-group users-list">
                                <img src="./<?php echo htmlspecialchars($coverImage) ?>"
                                    class="img-fluid rounded-circle" alt="" style="height: auto; max-width: 300px;
                                        ">

                                <label for=" userPhoto">Cover Photo(Recommend 1600 X 450)</label>
                                <input type="file" name="coverImage" class="form-control-file" id="userPhoto"
                                    accept="image/*" onchange="preview_image(event)">
                                <img class="img-thumbnail" id="output_image" style="height: auto; max-width: 300px;" />
                            </div>
                            <div class="form-group users-list">
                                <img src="./<?php echo htmlspecialchars($profileImage) ?>"
                                    class="img-fluid rounded-circle" alt="" style="height: auto; max-width: 300px;
                                        ">
                                <label for="userPhoto">Profile Photo(Recommend 196 X 196)</label>
                                <input type="file" name="profileImage" class="form-control-file" id="profile_pic"
                                    accept="image/*" onchange="cover_image(event)">
                                <img class="rounded-circle" id="img" width="150px" />
                            </div>
                            <div class="form-group mb-0">

                                <input type="radio" id="maleU" name="gender" value="male">
                                <label for="maleU">Male</label><br>
                                <input type="radio" id="femaleU" name="gender" value="female">
                                <label for="femaleU">Female</label><br>

                            </div>
                            <div class="form-group col-6">
                                <label for="Date">Date Of Birth</label>
                                <input type="date" name="date" value="<?php echo $dateOfBirth ?>" id="Date"
                                    class="form-control">
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger light" data-dismiss="modal">Close</button>
                            <button type="submit" name="update" class="btn btn-primary">Update changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php
            }
        }


        ?>

    </div>
</div>