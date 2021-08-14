<!--Add Education  Modal -->
<div class="modal fade add-education-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Education </h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <form action="update-profile.php" method="post">
                <div class="modal-body">


                    <div class="form-row">
                        <div class="form-group col-md-8">
                            <label for="shoolName">Shool Name</label>
                            <input type="text" name="shoolName" id="shoolName" placeholder="Radical"
                                class="form-control">
                        </div>

                        <div class="form-group col-md-8">
                            <label for="type">School Name</label>
                            <select name="type" id="type" class="form-control">
                                <option value="high school">high school</option>
                                <option value="Preparatory school">Preparatory school</option>
                            </select>
                        </div>


                        <div class="form-group col-md-8">
                            <label for="schoolDescription">Description</label>
                            <textarea class="form-control" name="schoolDescription" id="schoolDescription" cols="30"
                                rows="5"></textarea>
                        </div>

                    </div>





                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-sm light" data-dismiss="modal">Close</button>
                    <button type="submit" name="addEducation" id="addEducation" class="btn btn-primary btn-sm">Save
                        changes</button>
                </div>
            </form>
        </div>
    </div>
</div>