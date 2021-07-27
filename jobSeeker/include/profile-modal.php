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
                    <div class="modal-body">Update Cover Pic

                        <?php
                        $sql = mysqli_query($conn, "SELECT * FROM `users` WHERE `role_id` = 2");
                        while ($row = mysqli_fetch_assoc($sql)) {
                            $username = $row['username'];
                        ?>
                            <div class="form-group">
                                <label for="name">Username</label>
                                <input value="<?php echo $username ?>" type="text" name="" id="" class="form-control">
                            </div>
                        <?php
                        }

                        ?>
                        <div class="form-group users-list">
                            <label for="userPhoto">User Image</label>
                            <input type="file" name="userPhoto" class="form-control-file" id="userPhoto" accept="image/*" onchange="preview_image(event)">
                            <img class="img-thumbnail" id="output_image" style="
        height: auto;
        max-width: 300px;" />
                        </div>


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