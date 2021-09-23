<!--Add Company Profile-->
<div class="modal fade add-company-profile" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Company Profile </h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <form action="profile.php" method="post">
                <div class="modal-body">

                    <div class="form-row">
                        <div class="form-group col-md-6">

                            <label for="companyName">Company Name</label>
                            <input type="text" name="company_name" id="company_name" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="company_location">Company Location</label>
                            <input type="text" name="company_location" id="company_location" class="form-control"
                                required>
                        </div>

                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="company_short_description">Short Description</label>

                            <textarea name="company_short_description" id="company_short_description" cols="3" rows="3"
                                class="form-control" required></textarea>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="company_description">About Company</label>
                            <textarea class="form-control" name="company_description" id="company_description" rows="6"
                                required></textarea>
                        </div>
                    </div>





                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-sm light" data-dismiss="modal">Close</button>
                    <button type="submit" name="addCompanyProfile" id="addCompanyProfile"
                        class="btn btn-primary btn-sm">Save
                        changes</button>
                </div>
            </form>


        </div>
    </div>
</div>