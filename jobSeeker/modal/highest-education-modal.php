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
                                class="form-control">
                        </div>

                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-8">
                            <label for="fieldOfStudy">Field Of Study</label>
                            <input type="text" name="fieldOfStudy" id="fieldOfStudy" placeholder=""
                                class="form-control">
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