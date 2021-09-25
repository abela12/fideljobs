<!-- Apply Job Modal -->
<div class="modal fade" id="applyModal" class="apply-job">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Applying for <?php echo htmlspecialchars($job_title) ?></h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form name="apply-job" id="apply-job">
                    <input type="text" name="job_id" value="<?php echo $job_id ?>" hidden>
                    <div class="form-group">
                        <label for="cover-letter">Cover Letter</label>
                        <textarea maxlength="900" name="cover_letter" id="aboutYourSelf" rows="5"
                            class="form-control bg-transparent"
                            placeholder="Note: A personal statement/Cover Letter is a concise paragraph or summary, which details why you are qualified for the job you are applying for. It's also chance to show off your strengths, shout about your achievements and share your career aspirations."
                            onkeydown="limitText(this.form.aboutYourSelf,this.form.countdown,300);"
                            onkeyup='limitText(this.form.message,this.form.countdown,300);'></textarea>
                        You have
                        <input readonly type="text" name="countdown" size="3" value="300"> chars left

                    </div>


                    <div class="form-group">
                        <label for="cv">Select Your cvs</label>
                        <select class="form-control" name="attachment_file_id" id="cv">
                            <?php
                            $jobseekerId = $_SESSION['id'];
                            $select_cvs = mysqli_query($conn, "SELECT * FROM `jobseeker_attachment_file` WHERE `jobseeker_id` = '$jobseekerId' AND `status` = 'active'");
                            $cvs_num_row = mysqli_num_rows($select_cvs);
                            if ($cvs_num_row > 0) {
                                while ($row = mysqli_fetch_assoc($select_cvs)) {
                                    $file_title = $row['file_title'];
                                    $id = $row['id'];
                            ?>
                            <option value="<?php echo $id ?>"><?php echo $file_title ?></option>
                            <?php
                                }
                            }

                            ?>
                        </select>
                    </div>



                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-sm light" data-dismiss="modal">Close</button>
                <button type="submit" name="applyJob" id="applyJob" class="btn btn-primary btn-sm">Save
                    changes</button>
            </div>
        </div>
    </div>
</div>