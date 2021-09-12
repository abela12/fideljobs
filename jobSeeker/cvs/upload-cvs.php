<?php
$username = $_SESSION['username'];
$jobseekerId = $_SESSION['id'];

if (isset($_POST['upload'])) {
    $file_title = $_POST['cv_title'];
    $cvs  = $_FILES['cvs']['name'];
    $fileExt = explode('.', $cvs);
    $fileActExt = strtolower(end($fileExt));
    $allowImg = array('doc', 'docx', 'pdf', 'odt');
    $fileNew = rand() . "$username" . "." . $fileActExt;  // rand function create the rand number
    $cvs_path = 'assets/cvs/' . $fileNew;

    $upload_cv = mysqli_query($conn, "INSERT INTO `jobseeker_attachment_file`(`jobseeker_id`, `file_path`,`file_title`) VALUES ('$jobseekerId','$cvs_path','$file_title')");
    if ($upload_cv) {
        if (move_uploaded_file($_FILES['cvs']['tmp_name'], $cvs_path)) {
        } else {
?>
<script>
alert("Pls check your file")
</script>
<?php

        }
    } else {
        ?>
<script>
alert("Cvs not Upload sql error")
</script>
<?php
    }
}
if (isset($_GET['id']) && $_GET['id'] != '' && isset($_GET['action']) && $_GET['action'] === 'delete') {
    $jobId =  $_GET['id'];
    $check_file = mysqli_query($conn, "SELECT * FROM `jobseeker_attachment_file` WHERE `id` = '$jobId' AND `jobseeker_id` = '$jobseekerId'");
    $check_num = mysqli_num_rows($check_file);
    if ($check_num > 0) {
        while ($row = mysqli_fetch_assoc($check_file)) {
            $file_path = $row['file_path'];
        }
        if (!unlink($file_path)) {
            echo ("file_pointer cannot be deleted due to an error");
        ?>
<script>
alert("file_pointer cannot be deleted due to an error")
</script>
<?php
        } else {
            echo ("file_pointer has been deleted");
        ?>
<script>
alert("file_pointer has been deleted")
</script>
<?php
        }
        // FIXME: data not deleted
        $delete_cvs =  mysqli_query($conn, "DELETE FROM `jobseeker_attachment_file` WHERE `id` = '$jobId' AND `jobseeker_id` = '$jobseekerId' ");
    }
}

?>


<div class="card-body">
    <div class="card-title">Manage CV'S <span><a href="#upload" class="text-danger">upload new
                cvs</a> </span></div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table header-border table-hover verticle-middle">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">CV Title</th>
                        <th scope="col">Popularity</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $jobseekerId = $_SESSION['id'];
                    $select_cvs = mysqli_query($conn, "SELECT * FROM `jobseeker_attachment_file` WHERE `jobseeker_id` = '$jobseekerId'");
                    $cvs_num_row = mysqli_num_rows($select_cvs);
                    if ($cvs_num_row > 0) {

                        while ($data = mysqli_fetch_assoc($select_cvs)) {
                            $id = $data['id'];
                            $jobseeker_id = $data['jobseeker_id'];
                            $file_title = $data['file_title'];
                            $file_path = $data['file_path'];

                    ?>
                    <tr>
                        <th><?php echo 'cvs/' . htmlspecialchars($id) . '/21' ?></th>
                        <td><?php echo htmlspecialchars($file_title) ?></td>
                        <td>
                            <div class="progress bgl-primary">
                                <div class="progress-bar" style="width: 70%;" role="progressbar"><span
                                        class="sr-only">70% Complete</span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex">
                                <a href="<?php echo $file_path ?>" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                        class="fa fa-download"></i></a>

                                <a href="my-cv.php?id=<?php echo $id ?>&&action=delete#cvs"
                                    onClick="return confirm('Are you sure you want to delete this cvs?')"
                                    class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                            </div>
                        </td>
                    </tr>
                    <?php
                        }
                    }

                    ?>



                </tbody>
            </table>
        </div>
    </div>
    <div class="card-title">Manage CV'S</div>
    <?php
    $select_cvs = mysqli_query($conn, "SELECT * FROM `jobseeker_attachment_file` WHERE `jobseeker_id` = '$jobseekerId'");
    $cvs_num_row = mysqli_num_rows($select_cvs);
    if ($cvs_num_row >= 3) {
        echo "you are already submit 3 cvs";
    } else {


    ?>
    <form action="my-cv.php#cvs" method="post" enctype="multipart/form-data" id="upload" class="was-validated">
        <div class="form-group col-md-6">
            <label for="cv_title">CVS Title</label>
            <input type="text" name="cv_title" id="cv_title" class="form-control is-valid" pattern=".([A-zÀ-ž\s]){4,18}"
                title="4 to 20 characters" required>
        </div>
        <div class="form-group col-md-6">
            <label for="file">Upload Cv</label>
            <input type="file" name="cvs" id="file" onchange="return fileValidation()" class="form-control" required>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary" name="upload">Upload</button>
        </div>

    </form>
    <?php
    } ?>



</div>

<script>
function fileValidation() {
    var fileInput =
        document.getElementById('file');

    var filePath = fileInput.value;

    // Allowing file type
    var allowedExtensions =
        /(\.doc|\.docx|\.odt|\.pdf|\.tex|\.txt|\.rtf)$/i;

    if (!allowedExtensions.exec(filePath)) {
        alert('Invalid file type');
        fileInput.value = '';
        return false;
    }
}
</script>