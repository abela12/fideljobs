<?php

session_start();

// 2. Unset all the session variables
unset($_SESSION['id']);
unset($_SESSION['userName']);



?>
<script type="text/javascript">
alert("Successfully logout!");
window.location = "index.php";
</script>