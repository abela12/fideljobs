<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Fidel Jobs</title>
<!-- Favicon icon -->
<link rel="icon" type="image/png" sizes="16x16" href="assets/images/logo/del.png">
<link href="assets/vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
<link rel="stylesheet" href="assets/vendor/chartist/css/chartist.min.css">
<link href="assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
<link rel="stylesheet" href="assets/vendor/select2/css/select2.min.css">

<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/vendor/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">
<link href="assets/vendor/tagcomplete/tagcomplete.css" rel="stylesheet">
<!-- Datatable -->
<link href="assets/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
<!-- Summernote -->
<link href="assets/vendor/summernote/summernote.css" rel="stylesheet">

<!-- Main Template Style -->
<link href="assets/css/main.css" rel="stylesheet">
<link href="https://cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet">
<?php //include '../database/database.php' 
?>
<?php require '../controllerUserData.php' ?>
<?php include '../include/session.php' ?>
<?php include 'include/function.php' ?>
<style>
.profile ul li {
    text-transform: uppercase;
    cursor: pointer;
}

[type="radio"]:checked,
[type="radio"]:not(:checked) {
    position: absolute;
    left: -9999px;
}

[type="radio"]:checked+label,
[type="radio"]:not(:checked)+label {
    position: relative;
    padding-left: 28px;
    cursor: pointer;
    line-height: 20px;
    display: inline-block;
    color: #333;
}

[type="radio"]:checked+label:before,
[type="radio"]:not(:checked)+label:before {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    width: 18px;
    height: 18px;
    border: 1px solid #ddd;
    border-radius: 100%;
    background: #fff;
}

[type="radio"]:checked+label:after,
[type="radio"]:not(:checked)+label:after {
    content: '';
    width: 12px;
    height: 12px;
    background: #52B141;
    position: absolute;
    top: 4px;
    left: 4px;
    border-radius: 100%;
    -webkit-transition: all 0.2s ease;
    transition: all 0.2s ease;
}

[type="radio"]:not(:checked)+label:after {
    opacity: 0;
    -webkit-transform: scale(0);
    transform: scale(0);
}

[type="radio"]:checked+label:after {
    opacity: 1;
    -webkit-transform: scale(1);
    transform: scale(1);
}

.margin-top {
    margin-top: -100px;
}
</style>

<?php
//login confirmation
// confirm_logged_in();

?>