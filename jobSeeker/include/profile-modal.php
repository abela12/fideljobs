<div class="col-xl-4">
    <div class="card">

        <!-- Modal -->
        <div class="modal fade" id="basicModal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <input type="text" name="" id="" class="form-control input-default" placeholder="Title">
                            </div>
                            <div class="post-input">
                                <textarea name="textarea" id="textarea" cols="30" rows="10" class="form-control bg-transparent" placeholder="Please type what you want...."></textarea>

                            </div>

                            <div class="form-group users-list">
                                <label for="userPhoto">Cover Photo(Recommend 1600 X 450)</label>
                                <input type="file" name="userPhoto" class="form-control-file" id="userPhoto" accept="image/*" onchange="preview_image(event)">
                                <img class="img-thumbnail" id="output_image" style="height: auto; max-width: 300px;" />
                            </div>
                            <div class="form-group users-list">
                                <label for="userPhoto">Profile Photo(Recommend 196 X 196)</label>
                                <input type="file" name="profile_pic" class="form-control-file" id="profile_pic" accept="image/*" onchange="cover_image(event)">
                                <img class="rounded-circle" id="img" width="150px" />
                            </div>
                        </form>







                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger light" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>