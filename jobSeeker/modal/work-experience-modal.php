<!--Add Work Experience  Modal -->
<div id="" class="modal fade work-experience-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Work Experience </h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <form action="update-profile.php" method="post">
                <div class="modal-body">

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="workTitle">Title</label>
                            <input type="text" name="workTitle" id="workTitle"
                                placeholder="Enter your position or title" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="companyName">Company Name</label>
                            <input type="text" name="companyName" id="companyName" placeholder="Enter company name"
                                class="form-control">
                        </div>

                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="startYear">Start Year</label>
                            <input type="text" name="startYear" placeholder="2002" id="startYear" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="endYear">Start Year</label>
                            <input type="text" name="endYear" placeholder="2010" id="endYear" class="form-control">
                        </div>

                        <div class="form-group col-md-6">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="currentWork" class="custom-control-input" id="currentWork">
                                <label class="custom-control-label" for="currentWork">
                                    I'm currently working here</label>
                            </div>
                        </div>

                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-8">
                            <label for="workDescription">Work Description (Optional)</label>
                            <textarea name="workDescription" placeholder="Describe your work experience"
                                id="workDescription" class="form-control" cols="10" rows="4"></textarea>
                        </div>
                    </div>



                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-sm light" data-dismiss="modal">Close</button>
                    <button type="submit" name="workExperience" id="workExperience" class="btn btn-primary btn-sm">Save
                        changes</button>
                </div>
            </form>
        </div>
    </div>
</div>