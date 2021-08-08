<!--Add Social Media Modal -->
<div class="modal fade add-social-media" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Social Media </h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form name="add-social" id="add-social">

                    <div class="table-responsive">
                        <table class="table table-responsive-md" id="social_media">
                            <tr>
                                <div class="form-group">
                                    <td><input type="text" class="form-control" name="socialMediaUrl[]"
                                            placeholder="url" class="form-control name_list" required /></td>
                                </div>
                                <div class="form-group">
                                    <td>

                                        <select name="socialMedia[]" id="" class="form-control">
                                            <option value="FaceBook">FaceBook</option>
                                            <option value="InstaGram">InstaGram</option>
                                            <option value="YouTube">YouTube</option>

                                        </select>

                                    </td>
                                </div>
                                <div class="form-group">
                                    <td>

                                        <button type="button" name="addSocialMediaBtn" id="addSocialMediaBtn"
                                            class="btn btn-primary btn-sm">Add
                                            More</button>

                                    </td>
                                </div>
                            </tr>
                        </table>
                    </div>

                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-sm light" data-dismiss="modal">Close</button>
                <button type="submit" name="addSocialBtn" id="addSocialBtn" class="btn btn-primary btn-sm">Save
                    changes</button>
            </div>
        </div>
    </div>
</div>