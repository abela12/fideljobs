<!--Add Highest Education  Modal -->
<div id="" class="modal fade highest-education-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Highest Education </h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <form action="update-profile.php" method="post">
                <div class="modal-body">


                    <div class="form-row">
                        <div class="form-group col-md-8">
                            <label for="schoolName">School Name</label>
                            <input type="text" name="schoolName" placeholder="St mary university" id="schoolName"
                                class="form-control" required>
                        </div>

                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-8">
                            <div class="mb-4">
                                <label>Tell us about your education status</label>
                                <p>What did you study?</p>
                            </div>

                            <select id="single-select" name="fieldOfStudy">
                                <option value="">select</option>
                                <?php
                                $select_field_of_study = "SELECT * FROM `field_of_study`";
                                $field_result = fetchData($select_field_of_study);
                                while ($filed_data = mysqli_fetch_assoc($field_result)) {
                                    $name = $filed_data['name'];
                                ?>
                                <option value="<?php echo $name ?>"><?php echo $name ?></option>

                                <?php
                                }

                                ?>
                            </select>

                        </div>

                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-8">
                            <label for="educationStatus"> Degree (Optional)</label>
                            <select name="educationStatus" id="type" class="form-control">
                                <option value="Associate of Arts and Sciences (AAS)">Associate of Arts and Sciences
                                    (AAS)</option>
                                <option value="Associate of Science (AS)">Associate of Science (AS)</option>
                            </select>
                        </div>

                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-8">
                            <label for="CGPA">CGPA </label>
                            <input type="number" name="CGPA" placeholder="" id="CGPA" class="form-control">
                        </div>

                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-8">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" class="form-control" cols="10"
                                rows="4"></textarea>
                        </div>
                    </div>



                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-sm light" data-dismiss="modal">Close</button>
                    <button type="submit" name="addHighestEducation" id="addHighestEducation"
                        class="btn btn-primary btn-sm">Save
                        changes</button>
                </div>
            </form>
        </div>
    </div>
</div>