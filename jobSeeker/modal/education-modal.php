<!--Add Education  Modal -->
<div class="modal fade education-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Education </h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="" method="post">
                    <div class="form-row">
                        <div class="form-group col-md-8">
                            <label for="schoolName">School Name</label>
                            <input type="text" name="schoolName" placeholder="St mary university" id="schoolName"
                                class="form-control">
                        </div>

                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-8">
                            <label for="areaOfStudy">Area of Study (Optional)</label>
                            <input type="text" name="areaOfStudy" id="areaOfStudy" placeholder="Computer Science"
                                class="form-control">
                        </div>

                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-8">
                            <label for="description">Description (Optional)</label>
                            <textarea name="description" id="description" class="form-control" cols="10"
                                rows="4"></textarea>
                        </div>
                    </div>

                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-sm light" data-dismiss="modal">Close</button>
                <button type="submit" name="submit" id="submit" class="btn btn-primary btn-sm">Save changes</button>
            </div>
        </div>
    </div>
</div>