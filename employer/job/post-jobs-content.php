<?php
$user_id = $_SESSION['id'];
$msgClass = "alert alert-success";
$msg = "";
if (isset($_POST['submit'])) {

    $job_title = $_POST['job_title'];
    $job_email = $_POST['job_email'];
    $job_description = $_POST['job_description'];
    $job_short_description = $_POST['job_short_description'];
    $job_tags = "";
    if (isset($_POST["job_tags"])) {
        // Retrieving each selected option
        foreach ($_POST['job_tags'] as $subject)
            $job_tags = $job_tags . $subject . ',';
    }
    // $job_tags = $_POST['job_tags'];
    $job_experience = $_POST['job_experience'];
    $job_type = $_POST['job_type'];
    $job_apply_type = $_POST['job_apply_type'];
    $job_experience_level = $_POST['job_experience_level'];
    if (isset($_POST['job_external_url']) && $_POST['job_external_url'] != "") {
        $job_external_url = $_POST['job_external_url'];
    } else {
        $job_external_url = null;
    }

    if (isset($_POST['job_salary_currency']) && $_POST['job_salary_currency'] != "") {
        $job_salary_currency = $_POST['job_salary_currency'];
    } else {
        $job_salary_currency = null;
    }


    if (isset($_POST['job_salary_min']) && $_POST['job_salary_min'] != "") {
        $job_salary_min = $_POST['job_salary_min'];
    } else {
        $job_salary_min = null;
    }

    if (isset($_POST['job_salary_max']) && $_POST['job_salary_max'] != "") {
        $job_salary_max = $_POST['job_salary_max'];
    } else {
        $job_salary_max = null;
    }




    $job_sector = $_POST['job_sector'];
    $job_salary_type = $_POST['job_salary_type'];


    $job_career_level = $_POST['job_career_level'];
    $job_qualifications = $_POST['job_qualifications'];
    $job_preferred_sex = $_POST['job_preferred_sex'];
    $job_location = $_POST['job_location'];
    $job_deadline = $_POST['job_deadline'];


    $insert_job = mysqli_query($conn, "INSERT INTO `job`(`user_id`, `job_title`, `job_email`,`job_short_description`, `job_description`, `job_tags`, `job_experience`, `job_type`, `job_apply_type`, `job_experience_level`, `job_external_url`, `job_sector`, `job_salary_type`, `job_salary_currency`, `job_salary_min`, `job_salary_max`, `job_career_level`, `job_qualifications`, `job_preferred_sex`, `job_location`, `job_deadline`) 
VALUES ('$user_id','$job_title','$job_email','$job_short_description','$job_description','$job_tags','$job_experience','$job_type','$job_apply_type','$job_experience_level','$job_external_url','$job_sector','$job_salary_type','$job_salary_currency','$job_salary_min','$job_salary_max','$job_career_level','$job_qualifications','$job_preferred_sex','$job_location','$job_deadline')");
    if ($insert_job) {
        $msgClass = "alert alert-success";
        $msg = "yes";
        // header("location:my-jobs.php");
    }
}


?>

<?php if ($msg == 'yes') : ?>

    <div class="<?php echo $msgClass ?> solid alert-dismissible fade show col-md-8">
        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2">
            <path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3">
            </path>
        </svg>
        <strong>Done!</strong> Job Successfully Posted 🌝
        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
        </button>
    </div>

<?php endif; ?>
<div class="row">
    <div class="col-xl-12">
        <div class="card">

            <div class="card-header pb-0 border-0">
                <h3 class="fs-20 text-black">Post New Job</h3>
            </div>
            <div class="card-body">
                <!-- Post New Job Form -->
                <form method="post" action="">
                    <div class="form-row">
                        <div class="form-group col-xl-4">
                            <label class="text-black font-w500 mb-3">Job Title </label><span class="text-danger ml-1">*</span>
                            <input type="text" class="form-control" name="job_title" placeholder="Web developer 🚀">
                        </div>
                        <div class="form-group col-xl-4">
                            <label class="text-black font-w500 mb-3">Your email</label><span class="text-danger ml-1">*</span>
                            <input type="email" class="form-control" name="job_email" placeholder="info@email.com">
                        </div>
                    </div>
                    <div class="form-group col-xl-8">
                        <label class="text-black font-w500 mb-3">Description</label><span class="text-danger ml-1">*</span>

                        <textarea class="form-control" name="job_short_description" rows="6">
What is the job about? Enter the short description of your job.

												
													</textarea>
                    </div>
                    <div class="form-group col-xl-8">
                        <label class="text-black font-w500 mb-3">Description</label><span class="text-danger ml-1">*</span>

                        <textarea class="form-control summernote " name="job_description" rows="13"><h3>Job Description</h3>
What is the job about? Enter the overall description of your job.
<h3>Benefits</h3>
<ul>
 	<li>What can candidates get from the position?</li>
 	<li>What can candidates get from the position?</li>
 	<li>What can candidates get from the position?</li>
</ul>
<h3>Job Requirements</h3>
<ol>
 	<li>Detailed requirement for the vacancy.?</li>
 	<li>Detailed requirement for the vacancy.?</li>
 	<li>Detailed requirement for the vacancy.?</li>
</ol>
<h3>How To Apply</h3>
How candidate can apply for your job. You can leave your contact information to receive hard copy application or any detailed guide for the application.
												
													</textarea>
                    </div>


                    <div class="form-group col-xl-8">
                        <label class="text-black font-w500 mb-3">Job Tags</label><span class="text-danger ml-1">*</span>
                        <select id="skill-list" name="job_tags[]" multiple="multiple">
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
                    <div class="form-row">
                        <div class="form-group col-xl-2">
                            <label class="text-black font-w500 mb-3">Job Experience</label><span class="text-danger ml-1">*</span>
                            <select class="form-control" name="job_experience">
                                <option value="0 Years"> 0 Years</option>
                                <option value="1 Years">1 Years</option>
                                <option value="2 Years">2 Years</option>
                                <option value="3 Years">3 Years</option>
                                <option value="4 Years">4 Years</option>
                                <option value="5 Years">5 Years</option>
                                <option value="above 5">above 5</option>

                            </select>
                        </div>
                        <div class="form-group col-xl-3">
                            <label class="text-black font-w500 mb-3">Job Type</label><span class="text-danger ml-1">*</span>
                            <select class="form-control" name="job_type">
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
                        <div class="form-group col-xl-3">
                            <label class="text-black font-w500 mb-3">Experience Level</label><span class="text-danger ml-1">*</span>
                            <select class="form-control" name="job_experience_level">
                                <option value="Junior"> Junior</option>
                                <option value="Senior"> Senior </option>
                                <option value="Manager"> Manager</option>
                            </select>
                        </div>

                        <div class="form-group col-xl-3">
                            <label class="text-black font-w500 mb-3">Job Apply Type</label><span class="text-danger ml-1">*</span>
                            <select class="form-control" name="job_apply_type" id="job_apply_type">
                                <option value="Internal"> Internal</option>
                                <option value="External URL"> External URL</option>
                                <option value="By Email"> By Email</option>
                            </select>
                        </div>
                        <div id="job_type_list" class="form-group col-xl-4">

                        </div>


                    </div>

                    <div class="form-row">
                        <div class="form-group col-xl-3">
                            <label class="text-black font-w500 mb-3">Job Sector</label><span class="text-danger ml-1">*</span>
                            <select class="form-control" name="job_sector">
                                <option value="Web Design">Web Design</option>
                                <option value="Graphics Design">Graphics Design
                                </option>

                            </select>
                        </div>
                        <div class="form-group col-xl-2">
                            <label class="text-black font-w500 mb-3">Salary Type</label><span class="text-danger ml-1">*</span>
                            <select class="form-control" name="job_salary_type" id="job_salary_type">
                                <option value="Negotiable">Negotiable</option>
                                <option value="Monthly">Monthly </option>
                                <option value="Weakly">Weakly </option>

                                <option value="Yearly">Yearly </option>



                            </select>
                        </div>




                    </div>
                    <div id="job_salary_list" class="row"></div>
                    <!-- <hr> -->






                    <div class="form-row">

                        <h2 class="text-black font-w500">Other Information</h2>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-xl-3">
                            <label class="text-black font-w500 mb-3">Career Level</label><span class="text-danger ml-1">*</span>
                            <select class="form-control" name="job_career_level">
                                <option value="Manager"> Manager</option>
                                <option value="Officer"> Officer</option>
                                <option value="Student"> Student</option>
                                <option value="Executive"> Executive</option>
                                <option value="Others"> Others</option>
                            </select>
                        </div>
                        <div class="form-group col-xl-3">
                            <label class="text-black font-w500 mb-3">Qualifications </label><span class="text-danger ml-1">*</span>
                            <select class="form-control" name="job_qualifications">
                                <option value="Certificate"> Certificate</option>
                                <option value="Diploma"> Diploma</option>
                                <option value="Associate"> Associate</option>
                                <option value="Degree Bachelor"> Degree Bachelor</option>
                                <option value="Masters Degree"> Master's Degree</option>
                                <option value="PHD"> PHD</option>
                                <option value="Other"> Other</option>


                            </select>
                        </div>
                        <div class="form-group col-xl-3">
                            <label class="text-black font-w500 mb-3">Preferred Sex </label><span class="text-danger ml-1">*</span>
                            <select class="form-control" name="job_preferred_sex">
                                <option value="Male"> Male 👨‍💼</option>
                                <option value="Female"> Female 👩‍💼</option>
                                <option value="Both👨‍🌾"> Both👨‍🌾/👩‍⚖️</option>



                            </select>
                        </div>


                    </div>
                    <div class="form-row">
                        <div class="form-group col-xl-3">
                            <label for="job_location">Job Location</label>
                            <select class="form-control" name="job_location" id="job_location">
                                <option value="Addis Abeba">Addis Abeba</option>
                                <option value="Bole">Bole</option>

                            </select>
                        </div>
                        <div class="form-group col-xl-3">
                            <label for="">Deadline Date</label>
                            <input name="job_deadline" name="job_deadline" class="form-control" type="date" min="<?php echo date('y/m/d') ?>">

                        </div>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </form>
                <!-- End Post Job Form -->
            </div>
        </div>
    </div>



</div>
<script>

</script>
</body>