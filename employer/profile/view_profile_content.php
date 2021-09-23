<div class="content-body">
    <?php
    $check_company_profile_num_row = "SELECT * FROM `company_profile` WHERE `user_id` = '$employer_id'";
    $check_company_profile_num_row = checkNumRow($check_company_profile_num_row);
    ?>
    <!-- row -->
    <div class="container-fluid">
        <div class="form-head d-flex mb-0 mb-lg-4 align-items-start">
            <div class="mr-auto d-none d-lg-block">
                <h2 class="text-black font-w600">Employer Dashboard Page</h2>
                <div>
                    <a href="javascript:void(0);" class="fs-18 text-primary font-w600">Employer / </a>
                    <a href="javascript:void(0);" class="fs-18"></a>
                </div>
            </div>


        </div>
        <div class="row">


            <div class="col-md-4">
                <?php if ($msg == 'yes') : ?>

                <div class="<?php echo $msgClass ?> solid alert-dismissible fade show ">
                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none"
                        stroke-linecap="round" stroke-linejoin="round" class="mr-2">
                        <path
                            d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3">
                        </path>
                    </svg>
                    <strong>Done!</strong> Company Profile Added Successfully 🌝
                    <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i
                                class="mdi mdi-close"></i></span>
                    </button>
                </div>

                <?php endif; ?>
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            left side bar
                        </div>
                        <div>
                            <?php
                            if ($check_company_profile_num_row) {
                                echo "<span>You can update your profile</span>";
                            } else {
                            ?>
                            <span>Add Company Profile</span>
                            <button type="button" class="btn btn-success mb-2 btn-sm" data-toggle="modal"
                                data-target=".add-company-profile"><i class="fa fa-plus-circle"></i></button>
                            <?php

                            }
                            ?>

                        </div>

                    </div>
                </div>

            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <?php if ($msg == 'yes_one') : ?>

                        <div class="<?php echo $msgClass ?> solid alert-dismissible fade show ">
                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2"
                                fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2">
                                <path
                                    d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3">
                                </path>
                            </svg>
                            <strong>Done!</strong> Company Profile Updated Successfully 🌝
                            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i
                                        class="mdi mdi-close"></i></span>
                            </button>
                        </div>

                        <?php endif; ?>
                        <div class="card-title">right side bar</div>
                        <?php

                        $fetch_company_profile = "SELECT * FROM `company_profile` WHERE `user_id` = '$employer_id'";
                        $company_profile_result = fetchData($fetch_company_profile);
                        if ($check_company_profile_num_row) {
                            while ($company_data = mysqli_fetch_assoc($company_profile_result)) {
                                $company_name = $company_data['company_name'];
                                $company_short_description = $company_data['company_short_description'];
                                $company_description = $company_data['company_description'];
                                $company_location = $company_data['company_location'];
                            }
                        ?>
                        <form action="profile.php" method="post">


                            <div class="form-row">
                                <div class="form-group col-md-6">

                                    <label for="companyName">Company Name</label>
                                    <input type="text" name="company_name" value="<?php echo $company_name ?>"
                                        id="company_name" class="form-control">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="company_location">Company Location</label>
                                    <input type="text" name="company_location" id="company_location"
                                        class="form-control" value="<?php echo $company_location ?>" required>
                                </div>

                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="company_short_description">Short Description</label>

                                    <textarea name="company_short_description" id="company_short_description" cols="3"
                                        rows="3" class="form-control"
                                        required><?php echo $company_short_description ?></textarea>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="company_description">About Company</label>
                                    <textarea class="form-control" name="company_description" id="company_description"
                                        rows="6" required><?php echo $company_description ?></textarea>
                                </div>
                            </div>



                            <button type="submit" name="updateCompanyProfile" id="updateCompanyProfile"
                                class="btn btn-primary btn-sm">Save
                                changes</button>



                        </form>
                        <?php
                        } else {
                            echo "<h1>pls add profile</h1>";
                        }


                        ?>
                    </div>
                </div>
            </div>




        </div>
    </div>
</div>