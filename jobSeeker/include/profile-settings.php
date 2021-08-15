<div class="pt-3">
    <div class="settings-form">
        <h4 class="text-primary">Account Setting</h4>
        <form>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Email</label>
                    <input type="email" placeholder="Email" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label>Password</label>
                    <input type="password" placeholder="Password" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="country">Country</label>
                    <input type="text" name="country" id="countrys" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label>City</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Address</label>
                    <input type="text" placeholder="Addis abeba" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label>Phone Number</label>
                    <input type="number" class="form-control">
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
            <h4 class="text-primary mb-2">Work Status</h4>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="workAvailability">Work Availability</label>
                    <input type="text" name="workAvailability" id="workAvailability" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="workExperience">Work Experience</label>
                    <input type="text" name="workExperience" id="workExperience" class="form-control">
                </div>

            </div>


            <div class="form-group">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="gridCheck" required>
                    <label class="custom-control-label" for="gridCheck">
                        Check me out</label>
                </div>
            </div>
            <button class="btn btn-primary" type="submit">Sign
                in</button>
        </form>
    </div>
</div>