<?php

function escape($string)
{

    global $conn;

    return mysqli_real_escape_string($conn, trim($string));
}

// post ago function
function timePosted($datetime, $full = false)
{
    $now = new DateTime;
    $ago = new DateTime($datetime);
    $diff = $now->diff($ago);

    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;

    $string = array(
        'y' => 'year',
        'm' => 'month',
        'w' => 'week',
        'd' => 'day',
        'h' => 'hour',
        'i' => 'minute',
        's' => 'second',
    );
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
        } else {
            unset($string[$k]);
        }
    }

    if (!$full) $string = array_slice($string, 0, 1);
    return $string ? implode(', ', $string) . ' ago' : 'just now';
}
function logged_in()
{
    return isset($_SESSION['id']);
}
//this function if session member is not set then it will be redirected to index.php
function confirm_logged_in()
{
    if (!logged_in()) { ?>
<script type="text/javascript">
window.location = "../login.php";
</script>

<?php
    }
}

function checkNumRow($sql)
{
    global $conn;

    $check_num_row = mysqli_query($conn, $sql);
    $check_num_row = mysqli_num_rows($check_num_row);
    if ($check_num_row > 0) {
        return true;
    } else {
        return false;
    }
}
function fetchData($sql)
{
    global $conn;
    $fetch_data = mysqli_query($conn, $sql);
    $check_num = checkNumRow($sql);
    if ($check_num) {
        return $fetch_data;
    } else {
        return false;
    }
}
?>