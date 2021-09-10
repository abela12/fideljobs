<?php
$category = $_POST['category_id'];

if ($category == 'External URL') {
?>
<label class="text-black font-w500 mb-3">External URL for Apply Job</label><span class="text-danger ml-1">*</span>
<input type="text" class="form-control" name="job_external_url">
<?php
}

?>