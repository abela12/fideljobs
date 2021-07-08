<?php
$db['host'] = "localhost";
$db['users'] = "root";
$db['pass'] = "";
$db['name'] = "kms";

foreach ($db as $key => $value) {

    define(strtoupper($key), $value);
}
$conn = mysqli_connect('localhost', 'root', '', 'kms');
$connTest = "";
if ($conn)

    echo $connTest = "<h6>Database Connected everything is fine 🌝</h6>";
else
    echo "not working";