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
<!-- Font Awesom Icon -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css"
    integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">

<!-- Main Template Style -->
<link href="assets/css/main.css" rel="stylesheet">
<link href="https://cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet">
<?php //include '../database/database.php' 
?>
<?php require '../controllerUserData.php' ?>
<?php include '../include/session.php' ?>
<?php require '../configuration/function.php' ?>
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

.cal {
    display: inline-block;
    border: .1px solid #CCCAC5;
    background-color: #FFF;
    width: 50%;
    height: 20%;
    font-family: Arial, sans-serif;
    text-align: center;
}

.cal .month {
    height: 30px;
    line-height: 30px;
    font-size: 1rem;
    text-transform: uppercase;
    background-color: #E75951;
    color: #FFF;
}

.cal .date {
    font-size: 2rem;
    color: #585858;
    line-height: 50px;
}

/* Toolkit 2 */
abbr[data-title] {
    position: relative;
    text-decoration: underline dotted;
}

abbr[data-title]:hover::after,
abbr[data-title]:focus::after {
    content: attr(data-title);
    position: absolute;
    left: 50%;
    top: -30px;
    transform: translateX(-50%);
    width: auto;
    white-space: nowrap;
    background: #309255;
    color: #fff;
    border-radius: 2px;
    box-shadow: 1px 1px 5px 0 rgba(0, 0, 0, 0.4);
    font-size: 14px;
    padding: 3px 5px;
}
</style>

<?php
$employer_id = $_SESSION['id'];
//login confirmation
// confirm_logged_in();

?>