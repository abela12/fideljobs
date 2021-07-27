<?php
if (isset($_POST['upload'])) {
    echo "It works";
}
?>
<div class="col-xl-6">
    <div class="card">

        <!-- Modal For Job Seeker Bio -->
        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                        </button>
                    </div>
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
                            <!-- Enter a single sentence description of your professional skills/experience (e.g. Expert Web Designer with Ajax experience) -->
                            <div class="form-group">
                                <input type="text" name="" id="" class="form-control input-default" placeholder="Title">
                            </div>
                            <div class="form-group">
                                <textarea name="textarea" id="textarea" rows="7" class="form-control bg-transparent" placeholder="Use this space to show clients you have the skills and experience they're looking for.

Describe your strengths and skills
Highlight projects, accomplishments and education
Keep it short and make sure it's error-free"></textarea>

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








                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger light" data-dismiss="modal">Close</button>
                            <button type="submit" name="upload" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>