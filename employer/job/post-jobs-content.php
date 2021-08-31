<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header pb-0 border-0">
                <h3 class="fs-20 text-black">Post New Job</h3>
            </div>
            <div class="card-body">
                <!-- Post New Job Form -->
                <form>
                    <div class="form-row">
                        <div class="form-group col-xl-4">
                            <label class="text-black font-w500 mb-3">Job Title</label><span
                                class="text-danger ml-1">*</span>
                            <input type="text" class="form-control" name="job_title
" placeholder="Web developer 🚀">
                        </div>
                        <div class="form-group col-xl-4">
                            <label class="text-black font-w500 mb-3">Your email</label><span
                                class="text-danger ml-1">*</span>
                            <input type="email" class="form-control" name="job_email
" placeholder="info@email.com">
                        </div>
                    </div>
                    <div class="form-group col-xl-8">
                        <label class="text-black font-w500 mb-3">Description</label><span
                            class="text-danger ml-1">*</span>
                        <textarea class="form-control" name="job_description
" rows="13">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
												
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
                            <label class="text-black font-w500 mb-3">Job Experience</label><span
                                class="text-danger ml-1">*</span>
                            <select class="form-control" name="job_experience">
                                <option value=""> 0 Years</option>
                                <option>1 Years</option>
                                <option>2 Years</option>
                                <option>3 Years</option>
                                <option>4 Years</option>
                                <option>5 Years</option>
                                <option>above 5</option>

                            </select>
                        </div>
                        <div class="form-group col-xl-3">
                            <label class="text-black font-w500 mb-3">Job Type</label><span
                                class="text-danger ml-1">*</span>
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
                            <label class="text-black font-w500 mb-3">Experience Level</label><span
                                class="text-danger ml-1">*</span>
                            <select class="form-control" name="job_experience_level
">
                                <option value=""> Junior</option>
                                <option value=""> Senior </option>
                                <option value=""> Manager</option>
                            </select>
                        </div>

                        <div class="form-group col-xl-3">
                            <label class="text-black font-w500 mb-3">Job Apply Type</label><span
                                class="text-danger ml-1">*</span>
                            <select class="form-control" name="job_apply_type
">
                                <option value=""> Internal</option>
                                <option value=""> External URL</option>
                                <option value=""> By Email</option>
                            </select>
                        </div>
                        <div class="form-group col-xl-4">
                            <label class="text-black font-w500 mb-3">External URL for Apply Job</label><span
                                class="text-danger ml-1">*</span>
                            <input type="text" class="form-control" name="job_external_url" placeholder="">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-xl-3">
                            <label class="text-black font-w500 mb-3">Job Sector</label><span
                                class="text-danger ml-1">*</span>
                            <select class="form-control" name="job_sector">
                                <option value="Full Time">Web Design</option>
                                <option value="Part Time">Graphics Design
                                </option>

                            </select>
                        </div>
                        <div class="form-group col-xl-2">
                            <label class="text-black font-w500 mb-3">Salary Type</label><span
                                class="text-danger ml-1">*</span>
                            <select class="form-control" name="job_salary_type">
                                <option value="">Negotiable</option>
                                <option>Monthly </option>
                                <option>Weakly </option>

                                <option>Yearly </option>



                            </select>
                        </div>
                        <div class="form-group col-xl-3">
                            <label class="text-black font-w500 mb-3">Salary Currency</label><span
                                class="text-danger ml-1">*</span>
                            <select class="form-control" name="job_salary_currency">
                                <option>ETB Birr 🇪🇹 </option>
                                <option value="">US-Dollar💲</option>
                                <option>Canadian Dollar -CA 💲</option>
                                <option>Euro 💶</option>



                            </select>
                        </div>
                        <div class="form-group col-xl-2">
                            <label class="text-black font-w500 mb-3">Min</label><span class="text-danger ml-1">*</span>
                            <input type="text" class="form-control" name="job_salary_min" placeholder="">
                        </div>
                        <div class="form-group col-xl-2">
                            <label class="text-black font-w500 mb-3">Max</label><span class="text-danger ml-1">*</span>
                            <input type="text" class="form-control" name="job_salary_max" placeholder="">
                        </div>



                    </div>
                    <!-- <hr> -->






                    <div class="form-row">

                        <h2 class="text-black font-w500">Other Information</h2>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-xl-3">
                            <label class="text-black font-w500 mb-3">Career Level</label><span
                                class="text-danger ml-1">*</span>
                            <select class="form-control" name="job_career_level
">
                                <option value=""> Manager</option>
                                <option value=""> Officer</option>
                                <option value=""> Student</option>
                                <option value=""> Executive</option>
                                <option value=""> Others</option>
                            </select>
                        </div>
                        <div class="form-group col-xl-3">
                            <label class="text-black font-w500 mb-3">Qualifications </label><span
                                class="text-danger ml-1">*</span>
                            <select class="form-control" name="job_qualifications">
                                <option value=""> Certificate</option>
                                <option value=""> Diploma</option>
                                <option value=""> Associate</option>
                                <option value=""> Degree Bachelor</option>
                                <option value=""> Master's Degree</option>
                                <option value=""> PHD</option>
                                <option value=""> Other</option>


                            </select>
                        </div>
                        <div class="form-group col-xl-3">
                            <label class="text-black font-w500 mb-3">Preferred Sex </label><span
                                class="text-danger ml-1">*</span>
                            <select class="form-control" name="job_preferred_sex
">
                                <option value=""> Male 👨‍💼</option>
                                <option value=""> Female 👩‍💼</option>
                                <option value=""> Both👨‍🌾/👩‍⚖️</option>



                            </select>
                        </div>


                    </div>
                    <div class="form-row">
                        <div class="form-group col-xl-3">
                            <label for="job_location">Job Location</label>
                            <select class="form-control" name="job_location" id="job_location">
                                <option>Addis Abeba</option>
                                <option>Bole</option>

                            </select>
                        </div>
                        <div class="form-group col-xl-3">
                            <label for="">Deadline Date</label>
                            <input name="job_deadline" name="job_deadline" class="form-control" type="date"
                                min="<?php echo date('y/m/d') ?>">

                        </div>
                    </div>
                </form>
                <!-- End Post Job Form -->
            </div>
        </div>
    </div>



</div>