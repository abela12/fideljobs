<?php
$db['host'] = "localhost";
$db['users'] = "root";
$db['pass'] = "";
$db['name'] = "fideljob";

foreach ($db as $key => $value) {

    define(strtoupper($key), $value);
}
$conn = mysqli_connect('localhost', 'root', '', 'fideljob');
$connTest = "";
// if ($conn)

//     echo $connTest = "<h6>Database Connected everything is fine 🌝</h6>";
// else
//     echo "not working";