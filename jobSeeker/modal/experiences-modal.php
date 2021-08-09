<!--Add Experiences  Modal -->
<div id="" class="modal fade experience-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Experience </h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="" method="post">
                    <div class="form-row">
                        <div class="form-group col-md-8">
                            <label for="subject">Subject</label>
                            <input type="text" name="subject" placeholder="St mary university" id="subject"
                                class="form-control">
                        </div>

                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-8">
                            <label for="experienceType">Experience Type</label>
                            <input type="text" name="experienceType" id="experienceType" placeholder=""
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