<?php
$category = $_POST['category_id'];
if ($category == 'Negotiable') {
} else {
?>

<div class="form-group col-xl-3">
    <label class="text-black font-w500 mb-3">Salary Currency</label><span class="text-danger ml-1">*</span>
    <select class="form-control" name="job_salary_currency">
        <option>ETB Birr 🇪🇹 </option>
        <option value="US-Dollar">US-Dollar💲</option>
        <option value="Canadian Dollar -CA">Canadian Dollar -CA 💲</option>
        <option value="Euro">Euro 💶</option>
        <option value="other">other</option>



    </select>
</div>
<div class="form-group col-xl-2">
    <label class="text-black font-w500 mb-3">Min</label><span class="text-danger ml-1">*</span>
    <input type="text" class="form-control" name="job_salary_min">
</div>
<div class="form-group col-xl-2">
    <label class="text-black font-w500 mb-3">Max</label><span class="text-danger ml-1">*</span>
    <input type="text" class="form-control" name="job_salary_max">
</div>

<?php
}


?>